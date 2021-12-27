@extends('layouts.master')

@section('content')
<title>Teaching Assistant Report</title>
<div class="main"> 
  <div class="main-content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
            
        <div class="panel">
				<div class="panel-heading">
					<h3 class="panel-title">Inputs</h3>
				</div>
				<div class="panel-body">
                <form action="/report/update" method="POST" enctype="multipart/form-data">
            {{csrf_field()}}
            
        <div class="form-group">
            <label for="exampleInputEmail1">Activity Date</label>
            <input name="activity_date" type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Activity Date" value="">
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Number Of Attendance</label>
            <input name="number_of_attendance" type="integer" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Number Of Attendance" value="">
        </div>
      
        <div class="form-group">
            <label for="exampleInputEmail1">Send Date</label>
            <input name="send_date" type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Send Date" value="">
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Description</label>
            <input name="description" type="Text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Description" value="">
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Attachment</label>
            <input name="attachment" type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Attachment" value="">
        </div>

        <button type="submit" class="btn btn-warning">Update</button>
                </form>  
            </div>
            </div>
            </div>
            </div>
            </div>
            
@stop
    