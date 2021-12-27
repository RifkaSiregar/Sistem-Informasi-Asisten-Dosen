@extends('layouts.master')

@section('content')

  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>


<title>Schedule</title>
<div class="main"> 
  <div class="main-content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
            
        <div class="panel">
				<div class="panel-heading">
					<h3 class="panel-title">Form Schedule</h3>
				</div>
				<div class="panel-body">
                <div class="row">
                
                  <div class="col-md-6">
            <form action="/schedules/create" method="POST">
            {{csrf_field()}}

    <div class="form-group">
      <label for="course">Course Name</label>
	  <select id="course" name="course_id" class="form-control">
        <option value="" selected disabled>Select Course Name</option>
         @foreach($courses as $key => $course)
         <option value="{{$key}}"> {{$course}}</option>
         @endforeach
         </select>
    </div>


    <div class="form-group{{$errors->has('session_name') ? ' has-error' : ''}}">
    <label for="exampleFormControlSelect1">Activity Type</label>
    <select name="session_name" class="form-control" id="exampleFormControlSelect1">
      <option value="Praktikum">Practicum</option>
      <option value="Teori">Theory</option>
      <option value="Tutorial">Tutorial</option>
    </select>
    @if($errors->has('session_name'))
  <span class="help-block">{{$errors->first('session_name')}}</span>
  @endif
</div>
 
 
<div class="form-group{{$errors->has('week') ? ' has-error' : ''}}">
  <label><strong>Week :</strong></label><br>
  <label><input type="checkbox" name="week[]" value="1">1</label> 
  <label><input type="checkbox" name="week[]" value="2">2</label>
  <label><input type="checkbox" name="week[]" value="3">3</label>
  <label><input type="checkbox" name="week[]" value="4">4</label>
  <label><input type="checkbox" name="week[]" value="5">5</label>
  <label><input type="checkbox" name="week[]" value="6">6</label>
  <label><input type="checkbox" name="week[]" value="7">7</label>
  <label><input type="checkbox" name="week[]" value="8">8</label>
  <label><input type="checkbox" name="week[]" value="9">9</label>
  <label><input type="checkbox" name="week[]" value="6">10</label>
  <label><input type="checkbox" name="week[]" value="7">11</label>
  <label><input type="checkbox" name="week[]" value="8">12</label>
  <label><input type="checkbox" name="week[]" value="9">13</label>
  <label><input type="checkbox" name="week[]" value="6">14</label>
  <label><input type="checkbox" name="week[]" value="7">15</label>
  <label><input type="checkbox" name="week[]" value="8">16</label>
  @if($errors->has('week'))
  <span class="help-block">{{$errors->first('week')}}</span>
  @endif
  </div>

  </div>


 <div class="col-md-6">
 <div class="form-group">
 <label for="exampleInputEmail1">Duration (minutes)</label>
    <select name="session_name" class="form-control" id="exampleFormControlSelect1">
      <option value="30">30</option>
      <option value="60">60</option>
      <option value="90">90</option>
      <option value="90">120</option>
    </select>
    </div>

    
  <div class="form-group{{$errors->has('date_time') ? ' has-error' : ''}}">
    <label for="exampleInputEmail1">Date Time</label>
    <input name="date_time" type="datetime-local" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Datetime">
    @if($errors->has('date_time'))
  <span class="help-block">{{$errors->first('date_time')}}</span>
  @endif
  </div>

    <div class="form-group">
      <label for="initial">TA Initial</label>
      <select name="initial" id="initial" class="form-control"></select>
    </div>
</div>
   
<div class="modal-footer">
            <a href="/courses" class="btn btn-danger">Close</a>
                <button type="submit" class="btn btn-primary">Submit</button>
          </form>  
          </div>
        </div>
        </div>
        </div>
            </div>
            </div>
             </div>
            </div>
            </div>
            

<script type=text/javascript>
  $('#course').change(function(){
  var courseID = $(this).val();  
  if(courseID){
    $.ajax({
      type:"GET",
      url:"{{url('getInitial')}}?name="+courseID,
      success:function(res){        
      if(res){
        $("#initial").empty();
        $("#initial").append('<option>Select TA Initial</option>');
        $.each(res,function(key,value){
          $("#initial").append('<option value="'+key+'">'+value+'</option>');
        });
      
      }else{
        $("#initial").empty();
      }
      }
    });
  }
  });

</script>

@stop