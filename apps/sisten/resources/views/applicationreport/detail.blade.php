@extends('layouts.master')

@section('content')
<hr>

<title>Dashboard</title>
<div class="main"> 
  <div class="main-content">
    <div class="container-fluid">
      <div class="row">

          <div class="col-sm-7 col-md-offset-2">
            <div class="panel">
              <div class="panel-heading">
                @foreach($applications as $application)
                <h3 class="profile-username text-center">Detail for {{$application->course_initial}}</h3>
                <strong><i></i><p class="profile-username text-center">{{$application->first_name}} - {{$application->participant_registration_number}}</strong></p>
<div class="center">
                      <hr>
                      <strong><i></i></strong><p class="profile-username text-center">{{ $application->motivation}}</p><hr>

                      <strong>Study Program</strong> : {{ $application->study_program }}</p>

                      <strong>Score</strong> : {{ $application->score }}</p>

                      <strong>Send Date (in week)</strong> : {{ $application->send_date }}</p>

                      <strong>Batch</strong> : {{$application->batch}}</p>

                @endforeach
                </div>
              </div>
            </div>
          </div>
@stop