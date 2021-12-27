@extends('layouts.master')

@section('content')
<title>Semester</title>
<div class="main">
  <div class="main-content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">

          <div class="panel">
            <div class="panel-heading">
              <h3 class="panel-title">Semester Edit Form</h3>
            </div>
            <div class="panel-body">
              <div class="row">
                <div class="col-md-6">
                  <form action="/semesters/{{$semesters->id}}/update" method="POST" enctype="multipart/form-data">
                    {{csrf_field()}}

                    <div class="form-group{{$errors->has('academic_year') ? ' has-error' : ''}}">
                      <label for="exampleInputEmail1">Academic Year</label>
                      <input name="academic_year" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Academic Year" value="{{$semesters->academic_year}}">
                      @if($errors->has('academic_year'))
                      <span class="help-block">{{$errors->first('academic_year')}}</span>
                      @endif
                    </div>

                    <div class="form-group{{$errors->has('number_of_students') ? ' has-error' : ''}}">
                      <label for="exampleInputEmail1">Number of Students</label>
                      <input name="number_of_students" type="integer" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Number of Students" value="{{$semesters->number_of_students}}">
                      @if($errors->has('number_of_students'))
                      <span class="help-block">{{$errors->first('number_of_students')}}</span>
                      @endif
                    </div>

                    <div class="form-group{{$errors->has('ta_seats') ? ' has-error' : ''}}">
                      <label for="exampleInputEmail1">Seats</label>
                      <input name="ta_seats" type="integer" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Seats" value="{{$semesters->ta_seats}}">
                      @if($errors->has('ta_seats'))
                      <span class="help-block">{{$errors->first('ta_seats')}}</span>
                      @endif
                    </div>
                </div>


                <div class="col-md-6">
                  <div class="form-group{{$errors->has('semester') ? ' has-error' : ''}}">
                    <label for="exampleFormControlSelect1">Semester</label>
                    <select class="form-control" id="exampleInputEmail1" name="semester">
                      <option value="{{$semesters->semester_name}}">{{$semesters->semester_name}}</option>
                      @foreach($semester as $c)
                      @if($c!=$semesters->semester_name)
                      <option value="{{$c}}">{{$c}}</option>
                      @endif
                      @endforeach
                    </select>
                  </div>

                  <div class="form-group{{$errors->has('user_id') ? ' has-error' : ''}}">
                    <label for="exampleInputEmail1">Lecturer</label>
                    <select name="user_id" class="form-control" id="exampleFormControlSelect1">
                      @foreach($user as $s)
                      <option value="{{$s->id}}">{{$s->initial}} - {{$s->first_name}} {{$s->last_name}}</option>
                      @endforeach
                    </select>
                    @if($errors->has('user_id'))
                    <span class="help-block">{{$errors->first('user_id')}}</span>
                    @endif
                  </div>

                  <div class="modal-footer">
                    <a href="/semesters" class="btn btn-danger">Close</a>
                    <button type="submit" class="btn btn-warning">Update</button>

                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    @stop