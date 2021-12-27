<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Schedule;
use App\Models\LogActivity;
use DB;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        if(session('authenticated') != true){
            return view('authentication/login');
        }else{
            $users = User::select('study_program', \DB::raw("COUNT('study_program') as count"))
            ->groupBy('study_program')
            ->where('role','=','2')
            ->where('batch','=','2018')
            ->get();
    
            $categories=[];
            $data=[];

            foreach($users as $u){
                $categories[] = $u->study_program;
                $data[] = $u->count;
            }

            //Data
            $batch = User::select('study_program', \DB::raw("COUNT('study_program') as count"))
            ->where('role','=','2')
            ->where('batch','=','2019')
            ->groupBy('study_program')
            ->get();
        
            $data_1=[];
            foreach($batch as $b){
                $data_1[] = $b->count;
            }

            // Chart-2
            //Category
            $category = DB::table('log_activity')
            ->join('semester', 'log_activity.semester_id', '=', 'semester.id')
            ->join('course', 'semester.course_id', '=', 'course.id')
            ->select('course.*')
            ->groupby('course.id')
            ->get();

            $courses=[];
            foreach($category as $c){
                $courses[] = $c->name;
            }

            $activities_unapprove = LogActivity::select('semester_id', \DB::raw("COUNT('semester_id') as count"))
            ->groupBy('semester_id')
            ->where('status','=','unapprove')
            ->get();
            
            $unapprove=[];
            foreach($activities_unapprove as $c){
                $unapprove[] = $c->count;
            }

            //Data 
            $activities_approve = LogActivity::select('status', \DB::raw("COUNT('semester_id') as count"))
            ->where('status','=','approve')
            ->groupBy('semester_id', 'status')
            ->get();

            $approve=[];
            foreach($activities_approve as $a){
            $approve[] = $a->count;
            }

            return view('dashboard', compact('users', 'batch', 'activities_unapprove', 'activities_approve', 'approve', 'unapprove', 'category', 'categories', 'data', 'data_1', 'courses', 'approve'));
        }
    }
}
