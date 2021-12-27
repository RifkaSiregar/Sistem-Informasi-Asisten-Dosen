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
			<h2 class="panel-title text-center">Edit Vacancies of {{$vacancy->course_code}} - {{$vacancy->course_initial}}</h2>
			</div>
				
            <div class="panel-body">
            <div class="row">
            <div class="col-md-6">
            <form action="/vacancymanagement/{{$vacancy->id}}/update" method="POST" enctype="multipart/form-data">
            {{csrf_field()}}

        <div class="form-group row"><label class="col-lg-4 control-label">Semester</label>
        <div class="col-lg-8">
            <input name="semester" class="form-control" id="exampleFormControlSelect1"aria-describedby="emailHelp" placeholder="Semester" readonly value="{{ $vacancy->semester_name }}">
              @error('semester') <p style="color:red;">{{$message}}</p> @enderror
        </div>
        </div>

        <div class="form-group row"><label class="col-lg-4 control-label">Minimum Batch</label>
        <div class="col-lg-8">
            <input name="minimum_batch" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" value="{{ $vacancy->minimum_batch }}">
            @error('minimum_batch') <p style="color:red;">{{$message}}</p> @enderror
        </div>
        </div>

        <div class="form-group row"><label class="col-lg-4 control-label">Deadline</label>
        <div class="col-lg-8">
            <input name="deadline" type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="year" value="{{ $vacancy->deadline }}">
            @error('deadline') <p style="color:red;">{{$message}}</p> @enderror
        </div>
        </div>

        <div class="form-group row"><label class="col-lg-4 control-label">Teaching Duration (in week)</label>
        <div class="col-lg-8">
            <input name="teaching_duration" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" value="{{ $vacancy->teaching_duration }}">
            @error('teaching_duration') <p style="color:red;">{{$message}}</p> @enderror
        </div>
        </div>
        </div>

        <div class="col-md-6">
        <div class="form-group row"> <label class="col-lg-4 control-label">Minimum Grade</label>
        <div class="col-lg-8">
            <select name="minimum_score" class="form-control" id="exampleFormControlSelect1"aria-describedby="emailHelp" placeholder="" value="{{ $vacancy->minimum_score }}">
              <option value="A">A</option>
              <option value="AB">AB</option>
                <option value="B">B</option>
                <option value="BC">BC</option>
                <option value="C">C</option>
              </select>
              @error('minimum_score') <p style="color:red;">{{$message}}</p> @enderror
        </div>
        </div>

        <div class="form-group row"><label class="col-lg-4 control-label">Seats</label>
        <div class="col-lg-8">
            <input name="ta_seats" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" readonly value="{{ $vacancy->ta_seats}}">
            @error('ta_seats') <p style="color:red;">{{$message}}</p> @enderror
        </div>
        </div>

        <div class="form-group row"><label class="col-lg-4 control-label">Description</label>
        <div class="col-lg-8">
            <input name="description" type="string" class="form-control" id="exampleInputEmail1" rows="3" value="{{ $vacancy->description }}">
            @error('description') <p style="color:red;">{{$message}}</p> @enderror
        </div>
        </div>
        </div>
        </div>

        <div class="modal-footer">
        <button type="submit" class="btn btn-warning">Update</button>
                </form>  </div>
                 
            </div>
            </div>
            </div>
            </div>
            </div>
            </div>
            </div>
            </div>
            
@stop