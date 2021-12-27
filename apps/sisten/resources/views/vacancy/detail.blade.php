@extends('layouts.master')

@section('content')
<hr>
<title>Vacancies Create</title>
<div class="main"> 
  <div class="main-content">
    <div class="container-fluid">
      <div class="row">
            
        <div class="col-sm-8 col-md-offset-2">
            <div class="panel">
              <div class="panel-heading">
                @foreach($vacancies as $vacancy)
                <h3 class="profile-username text-center">Vacancy Detail for {{ $vacancy->name }}</h3>
                <strong><i></i><p class="profile-username text-center">{{ $vacancy->course_code }} - {{ $vacancy->course_initial }}</strong></p>
<div class="center">
                      <hr>
                      <strong><i></i></strong><p class="profile-username text-center">{{ $vacancy->description }}</p><hr>

                      
                      <strong>Semester</strong> : {{ $vacancy->semester_name }}</p>

                      <strong> Minimum Batch</strong> : {{ $vacancy->minimum_batch }}</p>

                      <strong>Deadline</strong> : {{ $vacancy->deadline }}</p>

                      <strong>Teaching Duration (in week)</strong> : {{ $vacancy->teaching_duration }}</p>

                      <strong>Minimum Grade</strong> : {{ $vacancy->minimum_score }}</p>

                      <strong>Seats</strong> : {{ $vacancy->ta_seats}}</p>

                @endforeach
                </div>
              </div>
            </div>
          </div>
          </div>
          </div>   
          </div>
          @stop