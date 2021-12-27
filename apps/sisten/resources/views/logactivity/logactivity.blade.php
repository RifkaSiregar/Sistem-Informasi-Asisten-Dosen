@extends('layouts.master')

@section('content')
<title>Activity Report</title>
<div class="main"> 
  <div class="main-content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
   

<!-- TABLE HOVER -->
<div class="panel">
  <div class="panel-heading">
    <h3 class="panel-title">List of Teaching Assistant Log Activity</h3>
  
  </div>
  <div class="panel-body">
    <table id="datatableid" class="table table-hover">
      <thead>
        <tr>
        <th>Course</th>
        <th>Session</th>
        <th>Week</th>
        <th>Attendance</th>
        <th>Activity Type</th>
        <th>Date</th>
        <th>Action</th>
      </tr>
      </thead>
      <tbody>
    @foreach($activities as $activityreport)
    <tr>
    <td>{{$activityreport->name}}</td>
    <td>{{$activityreport->course_session}}</td>
    <td>{{$activityreport->week}}</td>
    <td>{{$activityreport->number_of_attendance}}</td>
    <td>{{$activityreport->activity_type}}</td>
    <td>{{$activityreport->activity_date}}</td>
    <td>
    <a href="/logactivity/{{$activityreport->log_number}}/detail" class="btn btn-warning btn-sm">Detail</a>
    <a href="/logactivity/{{$activityreport->log_number}}/comment" class="btn btn-primary btn-sm">comment</a>
   
    </td>
    </tr>
    @endforeach
      </tbody>
    </table>
  </div>
</div>
<!-- END TABLE HOVER -->

        </div>
      </div>
    </div>
  </div>
</div>

@stop