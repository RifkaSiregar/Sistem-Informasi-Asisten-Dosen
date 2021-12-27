<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;
use App\Models\LogActivity;
use App\Models\Schedule;
use App\Models\Semester;
use App\Models\Application;
use App\Models\User;
use App\Models\Attachment;
use App\Models\Course;
use Carbon\Carbon;
use Validator;


class TaReportController extends Controller
{
    public function index(Request $request)
    {
        if (session('user_role') == "Asisten Dosen") {
            $schedule = DB::table('schedule')
                ->join('semester', 'schedule.semester_id', '=', 'semester.id')
                ->join('course', 'semester.course_id', '=', 'course.id')
                ->join('vacancy', 'semester.id', '=', 'vacancy.semester_id')
                ->join('application', 'vacancy.id', '=', 'application.vacancy_id')
                ->where('application.participant_registration_number', session('user_id'))
                ->whereNotIn('schedule.id', function ($q) {
                    $q->select('schedule_id')->from('log_activity');
                })
                ->select('schedule.*', 'course.course_code', 'course.course_initial', 'semester.class_name')
                ->get();
        } else if (session('user_role') == "Dosen") {
            $user = User::where('registration_number', session('user_id'))->first();

            $schedule = DB::table('schedule')
                ->join('semester', 'schedule.semester_id', '=', 'semester.id')
                ->join('course', 'semester.course_id', '=', 'course.id')
                ->join('user_semester', 'semester.id', '=', 'user_semester.semester_id')
                ->where('user_semester.user_id', $user->id)
                ->select('schedule.*', 'course.course_code', 'course.course_initial', 'semester.class_name')
                ->get();
        } else if (session('user_role') == "Admin") {
            $user = User::where('registration_number', session('user_id'))->first();

            $schedule = DB::table('schedule')
                ->join('semester', 'schedule.semester_id', '=', 'semester.id')
                ->join('course', 'semester.course_id', '=', 'course.id')
                ->select('schedule.*', 'course.course_code', 'course.course_initial', 'semester.class_name')
                ->get();
        }

        return view('tareport.index', compact('schedule'));
    }
    public function showcreate($id)
    {
        $schedule = DB::table('schedule')
            ->join('semester', 'schedule.semester_id', '=', 'semester.id')
            ->join('course', 'semester.course_id', '=', 'course.id')
            ->where('schedule.id', $id)
            ->select('schedule.*', 'course.name', 'course.course_initial', 'semester.class_name', 'semester.number_of_students')
            ->get();

        $ta_initial = DB::table('user')
            ->join('application', 'user.registration_number', '=', 'application.participant_registration_number')
            ->join('vacancy', 'application.vacancy_id', '=', 'vacancy.id')
            ->join('semester', 'vacancy.semester_id', '=', 'semester.id')
            ->join('course', 'semester.course_id', '=', 'course.id')
            ->join('schedule', 'semester.id', '=', 'schedule.semester_id')
            ->select('user.initial', 'schedule.id')
            ->get();

        return view('tareport.create', compact('schedule', 'ta_initial'));
    }

    public function create(Request $request, $id)
    {
        $validate = request()->validate([
            'attendance' => 'required|numeric',
            'description' => 'required',
            'activityreport' => 'required',
        ]);

        $log = Schedule::where('schedule.id', $id)
            ->join('semester', 'schedule.semester_id', '=', 'semester.id')
            ->join('course', 'semester.course_id', '=', 'course.id')
            ->select('schedule.*', 'course.*', 'semester.id as semester_id')
            ->first();

        $semester = Semester::where('semester.id', $log->semester_id)
            ->first();

        $report = LogActivity::create([
            'semester_id' => $log->semester_id,
            'schedule_id' => $id,
            'attendance' => $request->attendance,
            'activity_type' => $log->session_name,
            'date_time' => $log->date_time,
            'description' => $request->description,
            'activityreport' => $request->activityreport,
            'status' => 'unapprove',
        ]);

        if ($request->file) {
            $attachment = Attachment::create([
                'log_id' => $report->id
            ]);
            $files = $request->file('file');
            foreach ($files as $file) {
                $filename = $file->getClientOriginalName();
                $upload = \App\Models\File::create([
                    'attachment_id' => $attachment->id,
                    'file_name' => $filename,
                    'path' => 'files/Report Attachment/' . $semester->id . '-' . str_replace("/", "-", $semester->academic_year) . '/' . $log->course_initial . '/' . $log->session_name . '/' . $log->week . '',
                ]);
                Storage::putFileAs('files/Report Attachment/' . $semester->id . '-' . str_replace("/", "-", $semester->academic_year) . '/' . $log->course_initial . '/' . $log->session_name . '/' . $log->week . '', $file, $upload->id);
            }
            LogActivity::where('log_number', $attachment->log_id)->update(['attachment_id' => $attachment->id]);
        }

        return redirect('tareport')->with('message', 'Success input new Activity Log');
    }

    public function store(Request $request)
    {
        $filename = time() . '.' . $request->file->extension();
        $request->file('file')->storage('files', $filename);
        LogActivity::create([
            'course_initial' => $request->course_initial,
            'week' => $request->week,
            'attendance' => $request->attendance,
            'activity_type' => $request->session_name,
            'activity_date' => $request->date_time,
            'description' => $request->description,
            'activityreport' => $request->activityreport,
            'attachment' =>  $request->attachment,
        ]);
        return redirect('tareport')->with('message', 'Success input new Activity Log');
    }
    public function upload()
    {
        $report =  LogActivity::get();
        return redirect('tareport')->with('message', 'Success input new Activity Log');
    }
}
