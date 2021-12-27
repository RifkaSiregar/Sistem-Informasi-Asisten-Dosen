@extends('layouts.master')

@section('content')
<hr>
<title>Vacancies Create</title>
<div class="main"> 
  <div class="main-content">
    <div class="container-fluid">
      
            
        <div class="col-sm-10 col-md-offset-1">
            <div class="panel">
              <div class="panel-heading">
			<h1 class="panel-title text-center">Vacancies</h1>
			</div>

            <div class="panel-body">
            <div class="row">
            <div class="col-md-6">
              
<form action="/vacancy/create/{{$courses->semester_id}}" method="POST" enctype="multipart/form-data">
{{csrf_field()}}
            
<div class="form-group row"><label class="col-lg-4 control-label">Course </label>
<div class="col-lg-8">
<input type="text" name="course_code" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" readonly value="{{$courses->course_code}} - {{$courses->course_initial}} {{$courses->academic_year}} - {{$courses->credit}} SKS" placeholder="" >
@error('course_code') <p style="color:red;">{{$message}}</p> @enderror
</div>
</div>

<div class="form-group row"><label class="col-lg-4 control-label">Semester</label>
<div class="col-lg-8">
<input name="semester" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" readonly value="{{$courses->semester_name}}">
@error('semester') <p style="color:red;">{{$message}}</p> @enderror
</div>
</div>

<div class="form-group row"><label class="col-lg-4 control-label">Seats</label>
<div class="col-lg-8">
<input name="seats" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" readonly value="{{ $courses->ta_seats}}">
@error('seats') <p style="color:red;">{{$message}}</p> @enderror
</div>
</div>

<div class="form-group row"><label class="col-lg-4 control-label">Minimum Batch</label>
<div class="col-lg-8">
<input name="minimum_batch" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" value="2020">
@error('minimum_batch') <p style="color:red;">{{$message}}</p> @enderror
</div>
</div>
      


<div class="form-group row"><label class="col-lg-4 control-label">Teaching Duration (in week)</label>
<div class="col-lg-8">
<input name="teaching_duration" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" value="">
@error('teaching_duration') <p style="color:red;">{{$message}}</p> @enderror
</div>
</div>
</div>

<div class="col-md-6">
<div class="form-group row"><label class="col-lg-4 control-label">Minimum Grade</label>
<div class="col-lg-8">
<select name="minimum_score" class="form-control" id="exampleFormControlSelect1"aria-describedby="emailHelp" placeholder="" value="">
<option value="A">A</option>
<option value="AB">AB</option>
<option value="B">B</option>
<option value="BC">BC</option>
<option value="C">C</option>
</select>
@error('minimum_score') <p style="color:red;">{{$message}}</p> @enderror
</div>
</div>

<div class="form-group row"><label class="col-lg-4 control-label">Deadline</label>
<div class="col-lg-8">
<input name="deadline" type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" value="">
@error('deadline') <p style="color:red;">{{$message}}</p> @enderror
</div>
</div>

<div class="form-group row"><label class="col-lg-4 control-label">Description</label>
<div class="col-lg-8">
<textarea name="description" type="string" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
@error('description') <p style="color:red;">{{$message}}</p> @enderror
</div>
</div>
</div></div>

<div class="modal-footer">
<button type="submit" class="btn btn-primary">Submit</button>
</form></div>

</div>
            </div>
            </div>
            </div>
            </div>
            </div>
            </div>
            </div>
@stop