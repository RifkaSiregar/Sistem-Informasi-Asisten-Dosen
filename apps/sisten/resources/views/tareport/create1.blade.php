@extends('layouts.master')

@section('content')
<title>Input</title>
<div class="main"> 
  <div class="main-content">
     <div class="container-fluid">
      <div class="row">
        <div class="col-md-8"> 
            
        <div class="panel">
				<div class="panel-heading">
					<h3 class="panel-title">Form Activity</h3>
				</div>
				<div class="panel-body">
               
                <form action="/tareport/send" method="POST" enctype="multipart/form-data">
            {{csrf_field()}}

        @foreach($report as $schedule)
        <label for="exampleInputEmail1"> Course</label>
        <div class="form-group">
            <input name="course_initial" type="string" class="form-activity" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder=" Course_initial" value="{{$schedule->course_initial}}">
        </div>
        
        <label for="exampleInputEmail1">Week</label>
        <div class="form-group">
            <input name="week" type="number" class="form-activity" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Week" value="{{$schedule->week}}">
        </div>
        
        <label for="exampleInputEmail1"> Session</label>
        <div class="form-group">
            <input name="course_session" type="string" class="form-activity" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder=" Session" value="{{$schedule->course_session}}">
        </div>
        
        <div class="rightup">
        <label for="exampleInputEmail1">Number of Attendance</label>
        <div class="form-group">
            <input name="attendance" type="number" class="form-activity" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Number of Attendance" value="">
        </div>

        <label for="exampleInputEmail1">Activity Type</label>
        <div class="form-group">
            <input name="activity_type" type="string" class="form-activity" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="activity_type" value="{{$schedule->session_name}}">
        </div>

        <label for="exampleInputEmail1">Activity Date</label>
        <div class="form-group">
            <input name="activity_date" type="date" class="form-activity" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="activity_date" value="{{$schedule->date_time}}">
        </div>
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Description</label>
            <textarea name="description" type="text" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Description" value=""></textarea>
        </div>
        

        <div class="form-group">
            <label for="exampleInputEmail1">Activity Report</label>
            <input name="activityreport" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Activity Report" value="">
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Attachment</label>
            <input name="attachment" type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Attachment" value="{{old('attachment')}}">
        </div>
        @endforeach

        <button type="submit" class="btn btn-primary">Submit</button>
                </form>  
            </div>
            </div>
            </div>
            </div> 
            </div>

            
            
@stop
    