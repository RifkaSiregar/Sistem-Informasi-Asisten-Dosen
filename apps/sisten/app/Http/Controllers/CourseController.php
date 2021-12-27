<?php

namespace App\Http\Controllers;

use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Validation\Rule;
use App\Exports\CourseExport;
use Illuminate\Http\Request;
use App\Models\UserSemester;
use App\Models\LogActivity;
use App\Models\Schedule;
use App\Models\Semester;
use App\Models\Course;
use App\Models\User;
use Validator;
use PDF;
use DB;

class CourseController extends Controller
{
    public function index(Request $request)
    {
        $counter = 1;
        $user = User::where('registration_number', session('user_id'))->first();
        $courses = DB::table('semester')
            ->join('course', 'semester.course_id', '=', 'course.id')
            ->join('course_owner', 'course.course_owner_id', '=', 'course_owner.id')
            ->join('user_semester', 'semester.id', '=', 'user_semester.semester_id')
            ->select('course.course_code', 'course.id as course_id', 'course.course_initial', 'course.name', 'course.credit', 'course.course_owner_id', 'course_owner.curriculum', 'semester.id', 'semester.academic_year', 'semester.class_name')
            ->where('user_semester.user_id', $user->id)
            ->get();

        $inactive_courses = NULL;
        session(['course_all' => false]);

        return view('course.index', compact('courses', 'inactive_courses', 'counter'));
    }

    public function indexall(Request $request)
    {
        $counter = 1;
        $courses = DB::table('semester')
            ->join('course', 'semester.course_id', '=', 'course.id')
            ->join('course_owner', 'course.course_owner_id', '=', 'course_owner.id')
            ->select('course.course_code', 'course.id as course_id', 'course.course_initial', 'course.name', 'course.credit', 'course.course_owner_id', 'course_owner.curriculum', 'semester.id', 'semester.academic_year', 'semester.class_name')
            ->get();
        if ($courses == NULL) {
            $inactive_courses = NULL;
        } else {
            $inactive_courses = DB::table('course')
                ->whereNotIn('course.id', function ($q) {
                    $q->select('course_id as id')->from('semester');
                })
                ->join('course_owner', 'course.course_owner_id', '=', 'course_owner.id')
                ->select('course.*', 'course_owner.curriculum')
                ->get();
        }

        session(['course_all' => true]);

        return view('course.index', compact('courses', 'inactive_courses', 'counter'));
    }

    public function add(Request $request)
    {
        $courses = Course::all();
        $course = DB::table('course_owner')
            ->select('course_owner.*')
            ->where('status', '=', 'active')
            ->get();
        return view('course.create', ['course' => $course, 'courses' => $courses]);
    }
    public function create(Request $request)
    {
        $rules = [
            'course_code' => 'required|unique_with:course,course_owner_id',
            'course_initial' => 'required',
            'name' => 'required|string',
            'credit' => 'required',
            'course_owner_id' => 'required'
        ];

        $messages = [
            'course_code.required' => 'The course code field is required.',
            'course_code.unique_with' => 'This combination of course_code and course owner id already exists.',
            'course_initial.required' => 'The course initial field is required.',
            'name.required' => 'The course name field is required.',
            'name.string' => 'The course name must be a character.',
            'credit.required' => 'The credit field is required.',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput($request->all);
        }

        $course = new Course();
        $course->course_code = $request->course_code;
        $course->course_initial = $request->course_initial;
        $course->name = $request->name;
        $course->credit = $request->credit;
        $course->course_owner_id = $request->course_owner_id;
        $course->save();

        return redirect('/courses')->with('success', 'Course successfully created.');
    }

    public function edit(Request $request, $id)
    {
        $course = \App\Models\Course::find($id);
        $credit = ([1, 2, 3, 4]);
        $courses = DB::table('course_owner')
            ->select('course_owner.*')
            ->where('status', '=', 'active')
            ->get();
        return view('course/edit', ['courses' => $courses, 'credit' => $credit, 'course' => $course]);
    }
    public function update(Request $request, $id)
    {
        $courses = \App\Models\Course::find($id);
        if (
            $courses->course_code == $request->course_code && $courses->course_initial == $request->course_initial && $courses->name == $request->name &&
            $courses->credit == $request->credit && $courses->course_owner_id == $request->course_owner_id
        ) {
            return redirect('/courses');
        } elseif ($courses->course_code == $request->course_code && $courses->course_owner_id == $request->course_owner_id || $courses->course_initial != $request->course_initial || $courses->name != $request->name || $courses->credit != $request->credit) {
            $rules = [
                'course_initial' => 'required',
                'name' => 'required|string',
                'credit' => 'required',
                'course_owner_id' => 'required'
            ];

            $messages = [
                'course_initial.required' => 'The course initial field is required.',
                'name.required' => 'The course name field is required.',
                'name.string' => 'The course name must be a character.',
                'course_owner_id.required' => 'The course owner id field is required.',
            ];
            $validator = Validator::make($request->all(), $rules, $messages);

            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput($request->all);
            }
            $courses->update($request->all());
            return redirect('/courses')->with('success', 'Course successfully updated.');
        } else {
            $ruless = [
                'course_code' => 'required|unique_with:course,course_owner_id',
                'course_initial' => 'required',
                'name' => 'required|string',
                'course_owner_id' => 'required',
                'credit' => 'required'
            ];

            $messagess = [
                'course_code.required' => 'The course code field is required.',
                'course_code.unique_with' => 'This combination of course code and course owner id already exists. ',
                'course_initial.required' => 'The course initial field is required.',
                'name.required' => 'The course name field is required.',
                'name.string' => 'The course name must be a character.',
                'credit.required' => 'The credit field is required.',
                'course_owner_id.required' => 'The course owner id field is required.',
            ];
            $validator = Validator::make($request->all(), $ruless, $messagess);

            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput($request->all);
            }
            $courses->update($request->all());

            return redirect('/courses')->with('success', 'Course successfully updated.');
        }
    }

    public function delete($id)
    {
        $courses = \App\Models\Course::find($id);
        $courses->delete();

        return redirect('/courses')->with('success', 'Course successfully deleted.');
    }
    public function exportExcel()
    {
        return Excel::download(new CourseExport, 'Course.xlsx');
    }
    public function exportPdf()
    {
        $courses = \App\Models\Course::all();
        $pdf = PDF::LoadView('export.coursepdf', ['courses' => $courses]);
        return $pdf->download('course.pdf');
    }

    public function show(Request $request, $id)
    {
        $course = \App\Models\Course::find($id);
        $user = DB::table('user')
            ->where('role', '=', '3')
            ->get();
        return view('semesters.create', ['user' => $user, 'course' => $course]);
    }

    public function create_semester(Request $request, $id)
    {
        $rules = [
            'academic_year' => 'required',
            'semester' => 'required',
            'ta_seats' => 'required|numeric',
            'number_of_students' => 'required|numeric',
            'lecturer_id' => 'required',
        ];

        $messages = [
            'academic_year.required' => 'The academic year field is required.',
            'semester.required' => 'The semester field is required.',
            'ta_seats.required' => 'The seats field is required.',
            'ta_seats.numeric' => 'The seats field must be a number.',
            'number_of_students.required' => 'The number of students field is required.',
            'number_of_students.required' => 'The number of students must be a number.',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput($request->all);
        }

        $course = DB::table('course')->where('id', $id)->first();

        $semester = Semester::create([
            'course_id' => $course->id,
            'academic_year' => $request->academic_year,
            'semester_name' => $request->semester,
            'ta_seats' => $request->ta_seats,
            'number_of_students' => $request->number_of_students,
        ]);

        $lecturer = UserSemester::create([
            'user_id' => $request->lecturer_id,
            'semester_id' => $semester->id,
        ]);

        return redirect('/semesters')->with('success', 'Semester successfully created.');
    }

    public function detail($id)
    {
        $courses = DB::table('semester')
            ->where('semester.id', $id)
            ->join('user_semester', 'semester.id', '=', 'user_semester.semester_id')
            ->join('user', 'user_semester.user_id', '=', 'user.id')
            ->join('course', 'semester.course_id', '=', 'course.id')
            ->join('course_owner', 'course.course_owner_id', '=', 'course_owner.id')
            ->select('user.initial', 'course.*', 'semester.id as semester_id', 'semester.semester_name', 'semester.academic_year', 'course_owner.curriculum')
            ->first();

        $schedules = DB::table('schedule')
            ->where('schedule.semester_id', $id)
            ->get();

        $ta_initial = DB::table('user')
            ->join('application', 'user.registration_number', '=', 'application.participant_registration_number')
            ->join('vacancy', 'application.vacancy_id', '=', 'vacancy.id')
            ->join('semester', 'vacancy.semester_id', '=', 'semester.id')
            ->join('schedule', 'semester.id', '=', 'schedule.semester_id')
            ->where('application.decision', 1)
            ->select('user.initial', 'schedule.id as schedule_id')
            ->get();

        $log_activities = DB::table('log_activity')
            ->join('schedule', 'log_activity.schedule_id', '=', 'schedule.id')
            ->where('schedule.semester_id', $id)
            ->select('log_activity.*', 'schedule.week', 'schedule.date_time')
            ->get();

        return view('course.detail', compact('courses', 'schedules', 'ta_initial', 'log_activities'));
    }
}
