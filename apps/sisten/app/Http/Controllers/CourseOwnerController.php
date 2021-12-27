<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use DB;
use Validator;
use Illuminate\Validation\Rule;
use App\Models\CourseOwner;

class CourseOwnerController extends Controller
{
    public function index(Request $request)
    {
        $i = 1;
        $course_owner = CourseOwner::orderBy('id', 'ASC')->get();
        return view('courseowner.index', ['course_owner' => $course_owner, 'i' => $i]);
    }
    public function add(Request $request)
    {
        return view('courseowner.create');
    }

    public function create(Request $request)
    {

        $rules = [
            'name' => 'required|string|unique_with:course_owner,curriculum',
            'curriculum' => 'required',
            'level' => 'required',
            'status' => 'required',
            'description' => 'required',
        ];

        $messages = [
            'name.required' => 'The course name field is required.',
            'name.unique_with' => 'This combination of name and curriculum id already exists. ',
            'name.string' => 'The course name must be a character.',
            'curriculum.required' => 'The curriculum field is required.',
            'status.required' => 'The status field is required.',
            'level.required' => 'The level field is required.',
            'description.required' => 'The description field is required.',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput($request->all);
        }

        $course_owner = new CourseOwner();
        $course_owner->name = $request->name;
        $course_owner->curriculum = $request->curriculum;
        $course_owner->status = $request->status;
        $course_owner->level = $request->level;
        $course_owner->description = $request->description;
        $course_owner->save();

        return redirect('/courseowner')->with('success', 'Course Owner successfully created.');
    }

    public function edit($id)
    {
        $course_owner = \App\Models\CourseOwner::find($id);
        $level = (['Institute', 'Faculty', 'Study Program']);
        $status = (['active', 'inactive']);
        return view('courseowner/edit', ['course_owner' => $course_owner, 'level' => $level, 'status' => $status]);
    }
    public function update(Request $request, $id)
    {
        $course_owner = \App\Models\CourseOwner::find($id);
        if (
            $course_owner->level == $request->level && $course_owner->name == $request->name
            && $course_owner->curriculum == $request->curriculum  && $course_owner->status == $request->status && $course_owner->description == $request->description
        ) {
            return redirect('/courseowner');
        }
        elseif($course_owner->name == $request->name && $course_owner->curriculum == $request->curriculum || $course_owner->status != $request->status || $course_owner->level != $request->level || $course_owner->description != $request->description){
            $rules = [
                'curriculum' => 'required',
                'level' => 'required',
                'status' => 'required',
                'description' => 'required',
            ];
    
            $messages = [
                'curriculum.required' => 'The curriculum field is required.',
                'status.required' => 'The status field is required.',
                'level.required' => 'The level field is required.',
                'description.required' => 'The description field is required.',
            ];
            $validator = Validator::make($request->all(), $rules, $messages );
    
         if ( $validator->fails() )
          {
            return redirect()->back()->withErrors($validator)->withInput($request->all);
         }
        $courses->update($request->all());
            return redirect('/courses')->with('success', 'Course successfully updated.');
        }
        else {
            $ruless = [
                'name' => 'required|string|unique_with:course,curriculum',
                'curriculum' => 'required',
                'level' => 'required',
                'status' => 'required',
                'description' => 'required',
            ];

            $messagess = [
                'name.required' => 'The course name field is required.',
                'name.unique_with' => 'This combination of name and curriculum id already exists. ',
                'name.string' => 'The course name must be a character.',
                'curriculum.required' => 'The curriculum field is required.',
                'level.required' => 'The level field is required.',
                'status.required' => 'The status field is required.',
                'description.required' => 'The description field is required.',
            ];
            $validator = Validator::make($request->all(), $ruless, $messagess);

            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput($request->all);
            }
            $course_owner->update($request->all());
            return redirect('/courseowner')->with('success', 'Course Owner successfully updated.');
        }
    }

    public function delete($id)
    {
        $course_owner = \App\Models\CourseOwner::find($id);
        $course_owner->delete();

        return redirect('/courseowner')->with('success', 'Course Owner successfully deleted.');
    }
}
