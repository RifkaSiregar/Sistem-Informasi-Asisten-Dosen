@extends('layouts.master')

@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet"/>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>

<title>Semester</title>
<div class="main">
  <div class="main-content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">

          <div class="panel">
            <div class="panel-heading">
              <h3 class="panel-title">Semester Form</h3>
            </div>
            <div class="panel-body">
              <div class="row">
                <div class="col-md-6">
                  <form action="/courses/{{$course->id}}/create_semester" method="POST">
                    {{csrf_field()}}

                    <div class="form-group{{$errors->has('academic_year') ? ' has-error' : ''}}">
                      <label for="exampleInputEmail1">Academic Year</label>
                      <input name="academic_year" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Academic Year" value="{{old('academic_year')}}">
                      @if($errors->has('academic_year'))
                      <span class="help-block">{{$errors->first('academic_year')}}</span>
                      @endif
                    </div>

                    <div class="form-group{{$errors->has('number_of_students') ? ' has-error' : ''}}">
                      <label for="exampleInputEmail1">Number of Students</label>
                      <input name="number_of_students" type="integer" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Number of Students" value="{{old('number_of_students')}}">
                      @if($errors->has('number_of_students'))
                      <span class="help-block">{{$errors->first('number_of_students')}}</span>
                      @endif
                    </div>

                    <div class="form-group{{$errors->has('ta_seats') ? ' has-error' : ''}}">
                      <label for="exampleInputEmail1">Seats</label>
                      <input name="ta_seats" type="integer" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Seats" value="{{old('ta_seats')}}">
                      @if($errors->has('ta_seats'))
                      <span class="help-block">{{$errors->first('ta_seats')}}</span>
                      @endif
                    </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group{{$errors->has('semester') ? ' has-error' : ''}}">
                    <label for="exampleFormControlSelect1">Semester</label>
                    <select name="semester" class="form-control" id="exampleFormControlSelect1">
                      <option value="odd">Odd</option>
                      <option value="even">Even</option>
                      <option value="short">Short</option>
                    </select>
                    @if($errors->has('semester'))
                    <span class="help-block">{{$errors->first('semester')}}</span>
                    @endif
                  </div>

                  <div class="form-group{{$errors->has('lecturer_id') ? ' has-error' : ''}}">
                    <label for="exampleInputEmail1">Lecturer</label>
                    <select name="lecturer_id" class="form-control" id="exampleFormControlSelect1" aria-describedby="emailHelp" placeholder="Lecturer" value="">
                      @foreach($user as $s)
                      <option value="{{$s->id}}">{{$s->initial}} - {{$s->first_name}} {{$s->last_name}}</option>
                      @endforeach
                    </select>
                    @if($errors->has('lecturer_id'))
                    <span class="help-block">{{$errors->first('lecturer_id')}}</span>
                    @endif
                  </div>

                  <div class="modal-footer">
                    <a href="/courses" class="btn btn-danger">Close</a>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


@stop