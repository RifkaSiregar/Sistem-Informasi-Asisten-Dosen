<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Application;
use App\Models\Vacancy;
use App\Models\Course;
use App\Models\User;
use Validator;
use DB;

class ProfileController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //retrieving user data
        $user = User::where('username', session('username'))->first();
        if($user->role == 1 || $user->role == 2){
            $application = Application::where('participant_registration_number', $user->registration_number)->first();
            $vacancy = Vacancy::where('id', $application->vacancy_id)->first();
            $course = Course::where('course_code', $vacancy->course_code)->first();
            return view('userprofile',compact('user', 'vacancy', 'course'));
        }else{
            return view('adminprofile',compact('user'));
        }
    }
    public function showsetting()
    {
        //retrieving user data
        $user = User::where('username', session('username'))->first();
        return view('profilesetting',compact('user'));
    }
}
