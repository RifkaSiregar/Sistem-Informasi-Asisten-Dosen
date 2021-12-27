<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Schedule;
use App\Models\Course;
use App\Models\Application;
use App\Models\Vacancy;
use App\Models\User;
use App\Exports\ScheduleExport;
use Maatwebsite\Excel\Facades\Excel;
use DateInterval;
use DateTime;
use App;
use PDF;
use DB;

class ScheduleController extends Controller
{
    public function index(Request $request)
    {
        $i = 1;

        $user = User::where('registration_number', session('user_id'))->first();

        if (session('user_role') == "Admin") {
            $schedules = DB::table('schedule')
                ->join('semester', 'schedule.semester_id', '=', 'semester.id')
                ->join('course', 'semester.course_id', '=', 'course.id')
                ->select('schedule.*', 'schedule.id as schedule_id', 'semester.*', 'course.*')
                ->orderBy('schedule.week', 'DESC')
                ->get();
        } else if (session('user_role') == "Asisten Dosen") {
            $schedules = DB::table('schedule')
                ->join('semester', 'schedule.semester_id', '=', 'semester.id')
                ->join('course', 'semester.course_id', '=', 'course.id')
                ->whereIn('semester.id', function ($q) {
                    $q->select('semester_id')->from('vacancy')
                        ->join('application', 'vacancy.id', '=', 'application.vacancy_id')
                        ->where('application.participant_registration_number', session('user_id'));
                })
                ->select('schedule.*', 'schedule.id as schedule_id', 'semester.*', 'course.*')
                ->orderBy('schedule.week', 'DESC')
                ->get();
        } else if (session('user_role') == "Dosen") {
            $schedules = DB::table('schedule')
                ->join('semester', 'schedule.semester_id', '=', 'semester.id')
                ->join('course', 'semester.course_id', '=', 'course.id')
                ->whereIn('semester.id', function ($q) {
                    $q->select('semester_id')->from('user_semester')
                        ->join('user', 'user_semester.user_id', '=', 'user.id')
                        ->where('user.registration_number', session('user_id'));
                })
                ->select('schedule.*', 'schedule.id as schedule_id', 'semester.*', 'course.*')
                ->orderBy('schedule.week', 'DESC')
                ->get();
        } else {
            $schedules = DB::table('schedule')
                ->join('semester', 'schedule.semester_id', '=', 'semester.id')
                ->join('course', 'semester.course_id', '=', 'course.id')
                ->select('schedule.*', 'schedule.id as schedule_id', 'semester.*', 'course.*')
                ->orderBy('schedule.week', 'DESC')
                ->get();
        }

        $ta_initial = DB::table('user')
            ->join('application', 'user.registration_number', '=', 'application.participant_registration_number')
            ->join('vacancy', 'application.vacancy_id', '=', 'vacancy.id')
            ->join('semester', 'vacancy.semester_id', '=', 'semester.id')
            ->join('schedule', 'semester.id', '=', 'schedule.semester_id')
            ->where('application.decision', 1)
            ->select('user.initial', 'schedule.id as schedule_id')
            ->get();

        return view('schedules.index', compact('i', 'schedules', 'ta_initial'));
    }

    public function show(Request $request)
    {
        $courses = DB::table('semester')
            ->join('course', 'semester.course_id', '=', 'course.id')
            ->select('course.course_initial', 'course.id as course_id', 'semester.id')
            ->groupby('course_initial')
            ->get();
        session(['sems_short' => false]);
        return view('schedules.create', ['courses' => $courses]);
    }

    public function showshort(Request $request)
    {
        $courses = DB::table('semester')
            ->join('course', 'semester.course_id', '=', 'course.id')
            ->select('course.course_initial', 'course.id as course_id', 'semester.id')
            ->groupby('course_initial')
            ->get();
        session(['sems_short' => true]);
        return view('schedules.create', ['courses' => $courses]);
    }

    public function create(Request $request)
    {
        $this->validate($request, [
            'semester_id'   => 'required',
            'session_name'  => 'required',
            'duration'      => 'required|numeric',
            'date_time'     => 'required',
            'week'          => 'required',
        ]);

        $course = DB::table('semester')
            ->where('semester.id', $request->semester_id)
            ->join('course', 'semester.course_id', '=', 'course.id')
            ->select('course.*')
            ->first();

        $input = $request->all();
        $schedules = $request->input('week');
        $date = new DateTime($request->input('date_time'));

        if (is_array($schedules)) {
            foreach ($schedules as $count => $schedule) {
                if ($count == 0) {
                    DB::table('Schedule')->insert([
                        'semester_id' => $request->input('semester_id'),
                        'session_name' => $request->input('session_name'),
                        'duration' => $request->input('duration'),
                        'week' => $schedule,
                        'date_time' => $request->input('date_time'),
                        'created_at' => \Carbon\Carbon::now(),
                        'updated_at' => \Carbon\Carbon::now(),
                    ]);
                    $prev = $count + 1;
                } else {
                    while ($prev < $schedule) {
                        $prev++;
                        $date->add(new DateInterval('P7D'));
                    }
                    DB::table('Schedule')->insert([
                        'semester_id' => $request->input('semester_id'),
                        'session_name' => $request->input('session_name'),
                        'duration' => $request->input('duration'),
                        'week' => $schedule,
                        'date_time' => date_format($date, 'Y-m-d H:i:s'),
                        'created_at' => \Carbon\Carbon::now(),
                        'updated_at' => \Carbon\Carbon::now(),
                    ]);
                }
            }
        }
        $message = "Creating Schedule for course : $course->course_code - $course->course_initial";
        App::call('App\Http\Controllers\UserLogActivityController@create', ['message' => $message]);

        return redirect('/schedules')->with('success', 'Schedules successfully created.');
    }


    public function edit($id)
    {
        $schedule = DB::table('schedule')
            ->join('semester', 'schedule.semester_id', '=', 'semester.id')
            ->join('course', 'semester.course_id', '=', 'course.id')
            ->select('schedule.*', 'course.course_initial', 'semester.academic_year')
            ->where('schedule.id', $id)
            ->first();

        return view('schedules.edit', ['schedule' => $schedule]);
    }
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'session_name' => 'required',
            'duration' => 'required|numeric',
            'date_time' => 'required',
        ]);

        $date = new DateTime($request->input('date_time'));

        DB::table('Schedule')->where('id', $id)
            ->update([
                'session_name' => $request->input('session_name'),
                'duration' => $request->input('duration'),
                'date_time' => date_format($date, 'Y-m-d H:i:s'),
                'updated_at' => \Carbon\Carbon::now(),
            ]);

        return redirect('/schedules')->with('success', 'Schedule successfully updated.');
    }
    public function delete($id)
    {
        $schedules = \App\Models\Schedule::find($id);
        $schedules->delete();

        return redirect('/schedules')->with('success', 'schedule successfully deleted.');
    }
    public function exportExcel()
    {
        return Excel::download(new ScheduleExport, 'Schedule.xlsx');
    }
    public function exportPdf()
    {
        $schedules = \App\Models\Schedule::all();
        $pdf = PDF::LoadView('export.schedulepdf', ['schedules' => $schedules]);
        return $pdf->download('Schedule.pdf');
    }
}
