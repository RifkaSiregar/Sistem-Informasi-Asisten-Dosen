<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Course;
use App\Models\Application;
use App\Models\Vacancy;
use App\Models\User;
use App\Models\Schedule;

class DropdownController extends Controller
{
	public function index()
	{
		$courses = DB::table("course")->pluck("name","id");
	    return view('dropdown', ['courses' => $courses]);
	}

	
    public function getCourse(Request $req)
    {
    	$courses = [];

        if($req->has('q')){
            $search = $req->q;
            $courses = Course::select("id", "name")
            		  ->where('name', 'LIKE', "%$search%")
            		  ->get();
        }
        return response()->json($courses);
    }

	public function getInitial(Request $request)
	{
		$ta_initial = DB::table('course')
		->join('vacancy', 'course.course_code', '=', 'vacancy.course_code')
		->join('application', 'vacancy.id', '=', 'application.vacancy_id')
		->join('user', 'application.participant_registration_number', '=', 'user.registration_number')
		->select('course.*', 'vacancy.*', 'application.*', 'user.*')
		->where('role','=','2')
		// ->where("name",$request->name)
		->pluck("initial","id");
		return response()->json($ta_initial);
	}

}