@extends('layouts.master')

@section('content')
<title>Schedule</title>
<div class="main">
  <div class="main-content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">

          <div class="panel">
            <div class="panel-heading">
              <h3 class="panel-title">Form Schedule</h3>
            </div>
            <div class="panel-body">
              <div class="row">
                <div class="col-md-6">
                  <form action="/schedules/{{$schedule->id}}/update" method="POST" enctype="multipart/form-data">
                    {{csrf_field()}}

                    <div class="form-group">
                      <label for="exampleInputEmail1">Course Initial</label>
                      <input name="course_initial" type="string" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Course Initial" value="{{$schedule->course_initial}} {{$schedule->academic_year}}" disabled>
                    </div>

                    <div class="form-group{{$errors->has('session') ? ' has-error' : ''}}">
                      <label for="exampleFormControlSelect1">Activity Type</label>
                      <select name="session_name" class="form-control" id="exampleFormControlSelect1" aria-describedby="emailHelp" placeholder="Session" value="{{$schedule->session_name}}">
                        <option value="Praktikum">Praktikum</option>
                        <option value="Teori">Teori</option>
                        <option value="Tutorial">Tutorial</option>
                      </select>
                    </div>
                </div>

                <div class="col-md-6">

                  <div class="form-group{{$errors->has('duration') ? ' has-error' : ''}}">
                    <label for="exampleFormControlSelect1">Duration (minutes)</label>
                    <select class="form-control" id="exampleInputEmail1" name="duration">
                      <option value="{{$schedule->duration}}">{{$schedule->duration}}</option>
                      <option value="50">50</option>
                      <option value="100">100</option>
                      <option value="150">150</option>
                      <option value="200">200</option>
                    </select>
                  </div>


                <div class="form-group{{$errors->has('date_time') ? ' has-error' : ''}}">
                    <label for="exampleInputEmail1">Date Time</label>
                    <input name="date_time" type="datetime-local" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="{{$schedule->date_time}}" value="{{$schedule->date_time}}">
                    @if($errors->has('date_time'))
                    <span class="help-block">{{$errors->first('date_time')}}</span>
                    @endif
                  </div>
                  
                  <div class="modal-footer">
                  <a href="/schedules" class="btn btn-danger">Close</a>
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