<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Vacancy;
use App\Models\Application;
use App\Models\User;
use App\Models\Course;
use Carbon\Carbon;
use Validator;


class VacancyController extends Controller
{
    public function index(Request $request)
    {
        $user = User::where('registration_number', session('user_id'))->first();

        $vacancies = DB::table('vacancy')
            ->whereNotIn('vacancy.id', function ($q) {
                $q->select('vacancy_id')->from('application')->where('participant_registration_number', session('user_id'));
            })
            ->join('semester', 'vacancy.semester_id', '=', 'semester.id')
            ->join('course', 'semester.course_id', '=', 'course.id')
            ->select('vacancy.*', 'course.course_initial', 'course.course_code', 'semester.ta_seats', 'semester.semester_name', 'semester.class_name')
            ->get();

        $application_count = DB::table('application')->where('participant_registration_number', session('user_id'))->get();

        return view('vacancy.index', compact('vacancies', 'application_count'));
    }

    public function showapply($id)
    {
        $vacancies = DB::table('vacancy')
            ->where('vacancy.id', '=', $id)
            ->join('semester', 'vacancy.semester_id', '=', 'semester.id')
            ->join('course', 'semester.course_id', '=', 'course.id')
            ->select('vacancy.*', 'course.course_initial', 'course.course_code', 'course.name', 'semester.ta_seats', 'semester.semester_name')
            ->get();

        return view('vacancy.apply', compact('vacancies'));
    }

    public function indexmanagement(Request $request)
    {
        $user = User::where('registration_number', session('user_id'))->first();
        $vacancies = DB::table('vacancy')
            ->join('semester', 'vacancy.semester_id', '=', 'semester.id')
            ->join('course', 'semester.course_id', '=', 'course.id')
            ->join('user_semester', 'semester.id', '=', 'user_semester.semester_id')
            ->where('user_semester.user_id', $user->id)
            ->select('vacancy.*', 'course.course_initial', 'course.course_code', 'semester.semester_name', 'semester.ta_seats')
            ->get();

        return view('vacancy.management', compact('vacancies'));
    }

    public function create($id)
    {
        $courses = DB::table('semester')
            ->where('semester.id', $id)
            ->join('course', 'semester.course_id', '=', 'semester.course_id')
            ->select('course.*', 'semester.id as semester_id', 'semester.ta_seats', 'semester.semester_name', 'semester.academic_year')
            ->first();

        return view('vacancy.create', compact('courses'));
    }

    public function store(request $request, $id)
    {
        $validate = request()->validate([
            'course_code' => 'required',
            'semester' => 'required',
            'minimum_batch' => 'required',
            'deadline' => 'required',
            'teaching_duration' => 'required',
            'minimum_score' => 'required',
            'seats' => 'required|integer',
            'description' => 'required',
        ]);

        $vacancy = Vacancy::create([
            'semester_id' => $id,
            'minimum_batch' => $request->minimum_batch,
            'deadline' => $request->deadline,
            'teaching_duration' => $request->teaching_duration,
            'minimum_score' => $request->minimum_score,
            'description' => $request->description,
        ]);

        return redirect('/vacancymanagement')->with('message', 'Succesfully create vacancy');
    }

    public function edit($id)
    {
        $vacancy = DB::table('vacancy')
            ->join('semester', 'vacancy.semester_id', '=', 'semester.id')
            ->join('course', 'semester.course_id', '=', 'course.id')
            ->where('vacancy.id', '=', $id)
            ->select('vacancy.*', 'course.course_code', 'course.course_initial', 'course.credit', 'semester.semester_name', 'semester.ta_seats')
            ->first();

        return view('vacancy.edit', compact('vacancy'));
    }

    public function apply(Request $request, $id)
    {
        $user = User::where('username', session('username'))->first();

        $validate = request()->validate([
            'motivation' => 'required',
        ]);

        $application = Application::create([
            'participant_registration_number' => $user->registration_number,
            'vacancy_id' => $id,
            'send_date' => Carbon::now(),
            'score' => $request->score,
            'motivation' => $request->motivation,
            'created_at' => Carbon::now(),
        ]);
        return redirect('vacancy')->with('message', 'Success sending application');
    }

    public function detail($id)
    {
        $vacancies = DB::table('vacancy')
            ->where('vacancy.id', '=', $id)
            ->join('semester', 'vacancy.semester_id', '=', 'semester.id')
            ->join('course', 'semester.course_id', '=', 'course.id')
            ->select('vacancy.*', 'course.*', 'semester.semester_name', 'semester.ta_seats')
            ->get();

        return view('vacancy.detail', compact('vacancies'));
    }

    public function update(Request $request, $id)
    {
        $validate = request()->validate([
            'minimum_batch' => 'required',
            'deadline' => 'required',
            'teaching_duration' => 'required',
            'minimum_score' => 'required',
            'description' => 'required',
        ]);

        $vacancy = Vacancy::find($id);
        $vacancy->update([
            'minimum_batch' => $request->minimum_batch,
            'deadline' => $request->deadline,
            'teaching_duration' => $request->teaching_duration,
            'minimum_score' => $request->minimum_score,
            'description' => $request->description,
        ]);

        return redirect('/vacancymanagement')->with('message', 'Data has been updated');
    }

    public function delete($id)
    {
        $vacancy = Vacancy::where('id', $id)->first();
        $vacancy->delete();

        return redirect('/vacancymanagement')->with('message', 'Data has been deleted');
    }
}
