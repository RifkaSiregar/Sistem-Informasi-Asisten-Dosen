@extends('layouts.master')

@section('content')
<title>Announcement Detail</title>
<div class="main"> 
  <div class="main-content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">

        <div class="card card-primary card-outline">
        
          <h3 class="profile-username text-center">Announcement Detail</h3>
         @foreach($data as $data)
         
         <hr>
          <strong>
            <i></i>
            Register Number
          </strong>
          <p class="text-muted">
          {{ $data->participant_registration_number }}
          </p>
        
          <hr>

          <hr>
          <strong>
            <i></i>
           ID Vacancy
          </strong>
          <p class="text-muted">
          {{ $data->vacancy_id }}
          </p>
         <hr>


         <hr>
          <strong>
            <i></i>
            Student Name
          </strong>
          <p class="text-muted">
          {{ $data->full_name }}
          </p>
        
          <hr>
         <hr>
          <strong>
            <i></i>
            Course Code
          </strong>
          <p class="text-muted">
          {{ $data->course_code }}
          </p>
        
          <hr>
         
          <hr>
          <strong>
            <i></i>
           Course Name
          </strong>
          <p class="text-muted">
          {{ $data->name }}
          </p>
         
          <hr>
          <strong>
            <i></i>
            Motivasion
          </strong>
          <p class="text-muted">
          {{ $data->motivation }}
          </p>
        
        </div>
      </div>      
    </div>
    @endforeach
                </div>
				</div>
                </div>
                </div>
				</div>
     
@stop