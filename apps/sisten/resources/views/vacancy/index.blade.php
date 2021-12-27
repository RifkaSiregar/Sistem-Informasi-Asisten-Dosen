@extends('layouts.master')

@section('content')
<title>Vacancies</title>
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
    <h3><strong>Vacancies</strong></h3>
    @if(session('user_role') == "Asisten Dosen" || session('user_role') == "Mahasiswa")
    <br>
    <h3 class="panel-title">You can only apply 2 Application. Total Application sended = <strong>{{ count($application_count) }}</strong></h3>
    @endif
  </div>
  <div class="panel-body">
    <table id="datatableid" class="table table-hover">
      <thead>
        <tr>
        <th>Course Initial </th>
        <th>Class</th>
        <!-- <th>Course Code </th>
        <th>Semester</th> -->
        <th>Minimum Batch</th>
        <th>Deadline </th>
        <!-- <th>Teaching Duration (in month)</th> -->
        <th>Minimum Grade</th>
        <!-- <th>Seats</th>
        <th>Description</th> -->
        @if(session('user_role') == "Asisten Dosen" || session('user_role') == "Mahasiswa")
        <th>Action</th>
        @else
        @endif
      
      </tr>
      </thead>
      <tbody>
      @foreach($vacancies as $vacancy)
    <tr>
      <td>{{$vacancy->course_initial}}</td>
      <td>{{$vacancy->class_name}}</td>
      <!-- <td>{{$vacancy->semester_name}}</td> -->
      <td>{{$vacancy->minimum_batch}}</td>
      <td>{{$vacancy->deadline}}</td>
      <!-- <td>{{$vacancy->teaching_duration}}</td> -->
      <td>{{$vacancy->minimum_score}}</td>
      <!-- <td>{{$vacancy->ta_seats}}</td>
      <td>{{$vacancy->description}}</td> -->
      <td>
      <!-- <a href="/vacancy/{{$vacancy->id}}/apply" class="btn btn-warning btn-sm">Apply</a> -->
      @if(session('user_role') == "Asisten Dosen" || session('user_role') == "Mahasiswa")
      @if(count($application_count) >= 2)
      @else
      <a href="/vacancy/{{$vacancy->id}}/apply" class="btn btn-warning btn-sm"><i class="fa fa-envelope"></i></a>
      @endif
      @else
      @endif
      <!-- <a href="/vacancy/{{$vacancy->id}}/detail" class="btn btn-sm btn-primary">Detail</a> -->
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