<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Application;
use App\Models\User;

class ApplicationController extends Controller
{
    public function index(Request $request)
    {
        $applications = DB::table('application')
        ->join('user', 'application.participant_registration_number', '=', 'user.registration_number')
        ->join('vacancy', 'application.vacancy_id', '=', 'vacancy.id')
        ->join('semester', 'vacancy.semester_id', '=', 'semester.id')
        ->join('course', 'semester.course_id', '=', 'course.id')
        ->select('application.*', 'user.first_name', 'user.batch', 'user.study_program', 'course.course_initial')
        ->get();

        return view('applicationreport.index',compact('applications'));
    }
    
    public function approve($id)
    {
        Application::where('applicant_number', $id)->update(['decision' => 1]);
        
        $application = Application::where('applicant_number', $id)->first();
        $user = User::where('registration_number', $application->participant_registration_number)->first();

        if($user->role == 1){
            $user->role = 2;
            $user->save();
        }
        
        return redirect('applicationreport')->with('message', 'Approve Success');
    }

    public function detail($id)
    {
        $applications = DB::table('application')
        ->where('application.applicant_number', '=', $id)
        ->join('user', 'application.participant_registration_number', '=', 'user.registration_number')
        ->join('vacancy', 'application.vacancy_id', '=', 'vacancy.id')
        ->join('semester', 'vacancy.semester_id', '=', 'semester.id')
        ->join('course', 'semester.course_id', '=', 'course.id')
        ->select('application.*', 'user.first_name', 'user.batch', 'user.study_program', 'course.course_initial')
        ->get();

        return view('applicationreport.detail',compact('applications'));
    }
    
    public function reject($id)
    {
        Application::where('applicant_number', $id)
        ->update(['decision' => 0]);
        
        return redirect('applicationreport')->with('message', 'Reject Success');
    }
}
