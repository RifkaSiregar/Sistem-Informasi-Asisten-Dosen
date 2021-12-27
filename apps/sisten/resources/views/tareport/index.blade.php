@extends('layouts.master')

@section('content')
<title>Activity</title>

  
<div class="main"> 
  <div class="main-content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
   
          @if (session('message'))
          <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>
            {{ session('message')}}
          </div>
          @endif

<!-- TABLE HOVER -->

<div class="panel">
  <div class="panel-heading">
  
      <h3 class="panel-title">List of Activities</h3>

      
  </div>
  <div class="panel-body">
    <table id="datatableid" class="table table-hover">
      <thead>
        <tr>
        <th>Activity Date</th>
        <th>Course</th>
        <th>Class</th>
        <th>Week</th>
        <th>Activity Type</th>
        <th>Action</th>
      </tr>
      </thead>
      <tbody>
      @foreach($schedule as $schedule)
  
    <tr>
    <td>{{date('l, d F Y ', strtotime($schedule->date_time))}}</td>
    <td>{{$schedule->course_code}} - {{$schedule->course_initial}}</td>
    <td>{{$schedule->class_name}}</td>
    <td>{{$schedule->week}}</td>
    <td>{{$schedule->session_name}}</td>
    <td>
    <!-- <a href="/tareport/input" class="btn btn-warning btn-sm">Input</a> -->
    <a href="/tareport/{{$schedule->id}}/create" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>

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

