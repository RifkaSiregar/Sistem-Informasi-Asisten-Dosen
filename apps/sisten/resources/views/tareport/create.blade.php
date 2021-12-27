@extends('layouts.master')

@section('content')
<title>TA Report</title>
<div class="main"> 
  <div class="main-content">
     <div class="container-fluid">
      <div class="row">
        <div class="col-md-7"> 
            
        <div class="panel">
				<div class="panel-heading">
                @foreach($schedule as $report)
                <h3 class="profile-username text-center">Report Detail for {{ $report->course_initial }}</h3>
                <strong><i></i><p class="profile-username text-center">Week {{ $report->week }}</strong></p>
<div class="center">
                      <hr>             
                      <strong>Course</strong> : {{$report->course_initial }}</p>

                      <strong>Class</strong> : {{$report->class_name }}</p>

                      <strong>Duration</strong> : {{$report->duration }} Hour</p>

                      <strong>Activity Type</strong> : {{ $report->session_name }}</p>

                      <strong>Activity Date/ Time</strong> : {{ $report->date_time }}</p>

                      <strong>Teaching Assistant</strong> : @foreach ($ta_initial as $initial) @if ($initial->id == $report->id) {{$initial->initial}}, @endif @endforeach</p>
                    @endforeach
                </div>
              </div>
            </div>
          </div>

          <div class="col-sm-5">
            <div class="panel">
              <div class="panel-heading">
                <h3 class="profile-username text-center">
               Activity Report 
                <h4><p class="profile-username text-center">Reports during the tutorial</h5></h3>
                <div class="center">
                <hr>

                <form action="/tareport/{{$report->id}}/send" method="POST" enctype="multipart/form-data">
            {{csrf_field()}}
        <div class="row">
          <div class="col-md-6">
            <label for="exampleInputEmail1">Number of Attendance</label>
            <div class="form-group">
                <input name="attendance" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Number of Attendance" value="">
                @error('attendance') <p style="color:red;">{{$message}}</p> @enderror
            </div>
          </div>

          <div class="col-md-4">
            <br>
              <h5>from {{ $report->number_of_students }} Students</h5>
          </div>
          
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Description</label>
            <textarea name="description" type="text" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Description" value=""></textarea>
            @error('description') <p style="color:red;">{{$message}}</p> @enderror
        </div>
        

        <div class="form-group">
            <label for="exampleInputEmail1">Activity Report</label>
            <input name="activityreport" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Activity Report" value="">
            @error('activityreport') <p style="color:red;">{{$message}}</p> @enderror
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Attachment</label>
            <input name="file[]" type="file" multiple="true" accept="application/pdf" class="form-control-form" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="file" value="{{old('file')}}">
            @error('attachment') <p style="color:red;">{{$message}}</p> @enderror
          </div>

        <input class="btn btn-primary" type="submit" value="Submit">
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
    