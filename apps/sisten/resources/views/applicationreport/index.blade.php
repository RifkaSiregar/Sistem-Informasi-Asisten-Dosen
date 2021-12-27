@extends('layouts.master')

@section('content')
<title>Applicant Report</title>
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
    <h3 class="panel-title">Application Report</h3>
    <div class="right">
   </div>
    
  </div>
  <div class="panel-body">
    <table id="datatableid" class="table table-hover">
      <thead>
        <tr>
        <th>Course</th>
        <th>Student Name</th>
        <th>Score</th>
        <th>Send Date</th>
        <th>Batch</th>
        <th>Study Program</th>
        <th>Action</th>
      </tr>
      </thead>
      <tbody>
      @foreach($applications as $application)
    <tr>
  
    <td>{{$application->course_initial}}</td>
    <td>{{$application->first_name}}</td>
    <td>{{$application->score}}</td>
    <td>{{$application->send_date}}</td>
    <td>{{$application->batch}}</td>
    <td>{{$application->study_program}}</td>
    
    @if($application->decision == NULL)

    <td>
      @if(session('user_role') == "Dosen")
      <a href="/applicationreport/{{$application->applicant_number}}/approve" class="btn btn-success btn-sm"><i class="fa fa-check-square"></i></a>
      <a href="/applicationreport/{{$application->applicant_number}}/detail" class="btn btn-info btn-sm"><i class="fa fa-info"></i></a>
      @else
      @endif
    </td>

    @elseif($application->decision == 1)
    <td>
    Approved
    </td>
    </tr>
    @endif
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