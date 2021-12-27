<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Semester;
use App\Models\User;
use App\Models\Course;
use DB;
use Validator;
use Illuminate\Validation\Rule;

class SemesterController extends Controller
{
    public function index(Request $request)
    {
        $i = 1;
        $semesters = Semester::orderBy('course_id', 'ASC')->get();

        return view('semesters.index', ['semesters' => $semesters, 'i' => $i]);
    }

    public function edit($id)
    {

        $semesters = \App\Models\Semester::find($id);
        $semester = (['odd', 'even', 'short']);
        $user = DB::table('user')
        ->where('role','=','3')
        ->get();
        return view('semesters/edit', ['semesters' => $semesters, 'semester' => $semester, 'user' => $user]);
    }

    public function update(Request $request, $id)
    {
        $semesters = \App\Models\Semester::find($id);
        if (
            $semesters->course_code == $request->course_code && $semesters->academic_year == $request->academic_year && $semesters->semester == $request->semester
            && $semesters->ta_seats == $request->ta_seats && $semesters->number_of_students == $request->number_of_students
        ) {
            return redirect('/semesters');
        } else {
            $ruless = [
                'course_code' => 'required',
                'academic_year' => 'required',
                'semester' => 'required',
                'ta_seats' => 'required',
                'number_of_students' => 'required',
            ];

            $messagess = [
                'course_code.required' => 'The course code field is required.',
                'academic_year.required' => 'The academic year field is required.',
                'semester.required' => 'The semester field is required.',
                'ta_seats.required' => 'The seats field is required.',
                'number_of_students.required' => 'The number of students field is required.',
            ];
            $validator = Validator::make($request->all(), $ruless, $messagess);

            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput($request->all);
            }
            $semesters->update($request->all());
            return redirect('/semesters')->with('success', 'Semester successfully updated.');
        }
    }

    public function delete($id)
    {
        $semesters = \App\Models\Semester::find($id);
        $semesters->delete();
        
        return redirect('/semesters')->with('success', 'Semester successfully deleted.');
    }
}
