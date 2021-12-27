<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Schedule;
use App\Models\LogActivity;
use DB;

class ChartController extends Controller
{
    public function index(Request $request)
    {

        // Chart-1
        // Category
        $users = User::select('study_program', \DB::raw("COUNT('study_program') as count"))
            ->join('application', 'user.registration_number', '=', 'application.participant_registration_number')
            ->join('vacancy', 'application.vacancy_id', '=', 'vacancy.id')
            ->groupBy('study_program')
            ->where('role', '=', '2')
            ->where('semester', '=', 'odd')
            ->get();

        $categories = [];
        $data = [];
        foreach ($users as $u) {
            $categories[] = $u->study_program;
            $data[] = $u->count;
        }

        //Data
        $batch = User::select('study_program', \DB::raw("COUNT('study_program') as count"))
            ->join('application', 'user.registration_number', '=', 'application.participant_registration_number')
            ->join('vacancy', 'application.vacancy_id', '=', 'vacancy.id')
            ->groupBy('study_program', 'semester')
            ->where('role', '=', '2')
            ->where('semester', '=', 'even')
            ->get();

        $data_1 = [];
        foreach ($batch as $b) {
            $data_1[] = $b->count;
        }

        // Chart-2
        //Category
        $category = LogActivity::select('course_initial')
            ->get();
        $courses = [];
        foreach ($category as $c) {
            $courses[] = $c->course_initial;
        }


        $activities_unapprove = LogActivity::select('course_initial', \DB::raw("COUNT('course_initial') as count"))
            ->groupBy('course_initial')
            ->where('status', '=', 'unapprove')
            ->get();

        $unapprove = [];
        foreach ($activities_unapprove as $c) {
            $unapprove[] = $c->count;
        }

        //Data 
        $activities_approve = LogActivity::select('status', \DB::raw("COUNT('course_initial') as count"))
            ->where('status', '=', 'approve')
            ->groupBy('course_initial', 'status')
            ->get();

        $approve = [];
        foreach ($activities_approve as $a) {
            $approve[] = $a->count;
        }

        $schedule = DB::table('schedule')
            ->join('course', 'schedule.course_initial', '=', 'course.course_initial')
            ->join('vacancy', 'course.course_code', '=', 'vacancy.course_code')
            ->join('application', 'vacancy.id', '=', 'application.vacancy_id')
            ->where('application.participant_registration_number', session('userid'))
            ->select('schedule.*')
            ->get();

        return view(
            'chart',
            [
                'categories' => $categories, 'data_1' => $data_1, 'data' => $data,
                'courses' => $courses, 'unapprove' => $unapprove, 'approve' => $approve
            ],
            compact('users', 'batch', 'activities_unapprove', 'activities_approve', 'category', 'schedule')
        );
    }
}
