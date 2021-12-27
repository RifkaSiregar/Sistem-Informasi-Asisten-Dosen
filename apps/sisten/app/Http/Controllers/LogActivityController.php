<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\LogActivity;
use App\Models\Application;
use App\Models\User;
use App\Models\Course;
use App\Models\Schedule;
use App\Models\Attachment;
use App\Models\Comment;
use Carbon\Carbon;
use \App;

class LogActivityController extends Controller
{
    public function index(Request $request)
    {
        $categories = 0;

        if (session('user_role') == 'Asisten Dosen') {
            $logs = DB::table('log_activity')
                ->join('semester', 'log_activity.semester_id', '=', 'semester.id')
                ->join('course', 'semester.course_id', '=', 'course.id')
                ->join('schedule', 'log_activity.schedule_id', '=', 'schedule.id')
                ->join('vacancy', 'semester.id', '=', 'vacancy.semester_id')
                ->join('application', 'vacancy.id', '=', 'application.vacancy_id')
                ->where('application.participant_registration_number', session('user_id'))
                ->select('log_activity.*', 'course.*', 'schedule.*', 'semester.class_name', 'semester.number_of_students', 'semester.semester_name')
                ->get();
        } else if (session('user_role') == 'Dosen') {
            $user = User::where('registration_number', session('user_id'))->first();
            $logs = DB::table('log_activity')
                ->join('semester', 'log_activity.semester_id', '=', 'semester.id')
                ->join('course', 'semester.course_id', '=', 'course.id')
                ->join('schedule', 'log_activity.schedule_id', '=', 'schedule.id')
                ->join('user_semester', 'semester.id', '=', 'user_semester.semester_id')
                ->where('user_semester.user_id', $user->id)
                ->select('log_activity.*', 'course.*', 'schedule.*', 'semester.class_name', 'semester.number_of_students', 'semester.semester_name')
                ->get();
        } else {
            $logs = DB::table('log_activity')
                ->join('semester', 'log_activity.semester_id', '=', 'semester.id')
                ->join('course', 'semester.course_id', '=', 'course.id')
                ->join('schedule', 'log_activity.schedule_id', '=', 'schedule.id')
                ->select('log_activity.*', 'course.*', 'schedule.*', 'semester.class_name', 'semester.number_of_students', 'semester.semester_name')
                ->get();
        }

        $schedule = Schedule::all();

        $categories = DB::table('log_activity')
            ->join('schedule', 'log_activity.schedule_id', '=', 'schedule.id')
            ->where('activity_type', '=', 'Theory')
            ->orWhere('activity_type', '=', 'Practicum')
            ->orWhere('activity_type', '=', 'Tutorial')
            ->select(DB::raw('attendance'), DB::raw('schedule.week'), DB::raw('activity_type'))
            ->groupBy(DB::raw('week'))
            ->pluck('week');

        $Theory = DB::table('log_activity')
            ->join('schedule', 'log_activity.schedule_id', '=', 'schedule.id')
            ->select(DB::raw('attendance'), DB::raw('activity_type'))
            ->where('activity_type', '=', 'Theory')
            ->groupBy(DB::raw('schedule.week'))
            ->pluck('attendance');

        $Practicum = DB::table('log_activity')
            ->join('schedule', 'log_activity.schedule_id', '=', 'schedule.id')
            ->select(DB::raw('attendance'), DB::raw('activity_type'))
            ->where('activity_type', '=', 'Practicum')
            ->groupBy(DB::raw('schedule.week'))
            ->pluck('attendance');

        $Tutorial = DB::table('log_activity')
            ->join('schedule', 'log_activity.schedule_id', '=', 'schedule.id')
            ->select(DB::raw('attendance'), DB::raw('activity_type'))
            ->where('activity_type', '=', 'Tutorial')
            ->groupBy(DB::raw('schedule.week'), DB::raw('activity_type'))
            ->orderBy(DB::raw("(schedule.week)"), 'ASC')
            ->pluck('attendance');

        $log_activity = DB::table('log_activity')
            ->get();

        return view('logactivity.index', compact('log_activity', 'logs', 'categories', 'Practicum', 'Theory', 'Tutorial'));
    }

    public function comment(Request $request, $id)
    {
        $this->validate($request, [
            'comment' => 'required',
        ]);

        Comment::create([
            'user_registration_number' => session('user_id'),
            'log_number' => $id,
            'text' => $request->comment,
            'send_date' => Carbon::now(),
        ]);

        $log_activity = DB::table('log_activity')
            ->where('log_activity.log_number', $id)
            ->join('semester', 'log_activity.semester_id', '=', 'semester.id')
            ->join('course', 'semester.course_id', '=', 'course.id')
            ->join('schedule', 'log_activity.schedule_id', '=', 'schedule.id')
            ->first();

        $message = "Commenting an log activity : $log_activity->course_code - $log_activity->name - week $log_activity->week";
        App::call('App\Http\Controllers\UserLogActivityController@create', ['message' => $message]);

        return redirect('logactivity/' . $id . '/detail')->with('message', 'Comment has been added.');
    }

    public function detail($id)
    {
        $log = DB::table('log_activity')
            ->where('log_activity.log_number', '=', $id)
            ->join('semester', 'log_activity.semester_id', '=', 'semester.id')
            ->join('course', 'semester.course_id', '=', 'course.id')
            ->join('schedule', 'log_activity.schedule_id', '=', 'schedule.id')
            ->select('log_activity.*', 'course.course_code', 'course.course_initial', 'schedule.*')
            ->first();

        $comments = DB::table('comment')
            ->where('comment.log_number', $id)
            ->join('user', 'comment.user_registration_number', '=', 'user.registration_number')
            ->orderby('send_date', 'DESC')
            ->get();

        $attachment = DB::table('attachment')
            ->join('file', 'attachment.id', '=', 'file.attachment_id')
            ->where('attachment.log_id', $log->log_number)
            ->get();

        return view('logactivity.detail', compact('log', 'comments', 'attachment'));
    }
    public function approve($id)
    {
        $log = LogActivity::where('log_number', $id)->first();

        $schedule = Schedule::where('id', $log->schedule_id)->first();

        $ta = DB::table('application')
            ->join('vacancy', 'application.vacancy_id', '=', 'vacancy.id')
            ->join('semester', 'vacancy.semester_id', '=', 'semester.id')
            ->where('semester.id', $log->semester_id)
            ->get();

        foreach ($ta as $ta_data) {
            $data = DB::table('application')->where('applicant_number', $ta_data->applicant_number)->first();

            $total = $data->total_hour + $schedule->duration;

            $user = Application::where('applicant_number', $ta_data->applicant_number)->update(['total_hour' => $total]);
        }

        LogActivity::where('log_number', $id)
            ->update(['status' => 'approve']);

        return redirect('logactivity')->with('message', 'Approve Success');
    }
}
