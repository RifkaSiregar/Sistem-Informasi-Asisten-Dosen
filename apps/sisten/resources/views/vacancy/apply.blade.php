@extends('layouts.master')

@section('content')
<hr>

<title>Dashboard</title>
<div class="main"> 
  <div class="main-content">
    <div class="container-fluid">
      <div class="row">

          <div class="col-sm-7 ">
            <div class="panel">
              <div class="panel-heading">
                @foreach($vacancies as $vacancy)
                <h3 class="profile-username text-center">Vacancy Detail for {{ $vacancy->name }}</h3>
                <strong><i></i><p class="profile-username text-center">{{ $vacancy->course_code }} - {{ $vacancy->course_initial }}</strong></p>
                <div class="center">
                <hr>
                <strong><i></i></strong><p class="profile-username text-center">{{ $vacancy->description }}</p><hr>

                <strong>Semester</strong> : {{ $vacancy->semester_name }}</p>

                <strong>Minimum Batch</strong> : {{ $vacancy->minimum_batch }}</p>

                <strong>Deadline</strong> : {{ $vacancy->deadline }}</p>

                <strong>Teaching Duration (in week)</strong> : {{ $vacancy->teaching_duration }}</p>

                <strong>Minimum Grade</strong> : {{ $vacancy->minimum_score }}</p>

                <strong>Seats</strong> : {{ $vacancy->ta_seats}}</p>

                @endforeach
                </div>
              </div>
            </div>
          </div>

        
          <div class="col-sm-5">
            <div class="panel">
              <div class="panel-heading">
                <h3 class="profile-username text-center">
                Interested in joining? 
                <h4><p class="profile-username text-center">let's fill in your data below, Good luck!!</h5></h3>
                <div class="center">
                <hr>
                  
                <form action="/vacancy/{{$vacancy->id}}/apply" method="POST" enctype="multipart/form-data">
                {{csrf_field()}}

          <div class="form-group">
            <label class="col-md-16 text-md-left"><label for="GradeControlSelect">Your Grade on this course</label>
              <select name="score" class="form-control" id="emailHelp"aria-describedby="emailHelp" placeholder="" value="A">
                <option value="A">A</option>
                <option value="AB">AB</option>
                <option value="B">B</option>
                <option value="BC">BC</option>
                <option value="C">C</option>
                </select>
                @error('score') <p style="color:red;">{{$message}}</p> @enderror
                  </div>

          <div class="form-group">
            <label for="MotivationInput">Motivation</label>
              <textarea name="motivation" type="string" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="" value=""></textarea>
              @error('motivation') <p style="color:red;">{{$message}}</p> @enderror
          </div>

          <input class="btn btn-primary" type="submit" value="Send">
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