@extends('layouts.master')

@section('content')
<title>Teaching Assistant Report</title>
<div class="main"> 
  <div class="main-content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
   

<!-- TABLE HOVER -->
<div class="panel">
  <div class="panel-heading">
    <h3 class="panel-title">List Teaching Assistant Report</h3>
    <div class="right">
<button type="button" class="btn" data-toggle="modal" data-target="#exampleModal"><i class="lnr lnr-plus-circle"></i></button>
    </div>
    
  </div>
  <div class="panel-body">
    <table id="datatableid" class="table table-hover">
      <thead>
        <tr>
        <th>Activity Date</th>
        <th>Number Of Attendance</th>
        <th>Activity Report</th>
        <th>Send Date</th>
        <th>Description</th>
        <th>Attachment</th>
        <th>Action</th>
      </tr>
      </thead>
      <tbody>
    <tr>
    <td>69-69-69</td>
    <td>123</td>
    <td>Example</td>
    <td>69-69-69</td>
    <td>Example Description</td>
    <td>Attachment Example</td>
    <td>
    <a href="/tareport/edit" class="btn btn-warning btn-sm">Edit</a>
    <a href="/tareport/delete" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this row?')">Delete</a>
    </td>
    </tr>
    <tr>
    <td>96-96-96</td>
    <td>123</td>
    <td>Example 2</td>
    <td>96-96-96</td>
    <td>Example Description 2</td>
    <td>Attachment Example 2</td>
    <td>
    <a href="/report/edit" class="btn btn-warning btn-sm">Edit</a>
    <a href="/report/delete" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this row?')">Delete</a>
    </td>
    </tr>
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

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Form Laporan aktivitas</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <form action="/report/create" method="POST">
            {{csrf_field()}}
    <div class="form-group{{$errors->has('activity_date') ? ' has-error' : ''}}">
    <label for="exampleInputEmail1">Activity Date</label>
    <input name="activity_date" type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Activity Date" value="{{old('activity_date')}}">
    @if($errors->has('activity_date'))
  <span class="help-block">{{$errors->first('activity_date')}}</span>
  @endif
  </div>

  <div class="form-group{{$errors->has('number_of_attendance') ? ' has-error' : ''}}">
    <label for="exampleInputactivity_report1">Number Of Attendance</label>
    <input name="number_of_attendance" type="integer" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Number Of Attendance" value="{{old('number_of_attendance')}}">
    @if($errors->has('number_of_attendance'))
  <span class="help-block">{{$errors->first('number_of_attendance')}}</span>
  @endif
  </div>

  <div class="form-group{{$errors->has('activity_report') ? ' has-error' : ''}}">
    <label for="exampleInputactivity_report1">Activity Report</label>
    <input name="activity_report" type="string" class="form-control" id="exampleInputactivity_report1" aria-describedby="activity_reportHelp" placeholder="Activity Report" value="{{old('activity_report')}}">
    @if($errors->has('activity_report'))
  <span class="help-block">{{$errors->first('activity_report')}}</span>
  @endif
  </div>

   <div class="form-group{{$errors->has('send_date') ? ' has-error' : ''}}">
    <label for="exampleInputEmail1">Send Date</label>
    <input name="send_date" type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Send Date" value="{{old('send_date')}}">
    @if($errors->has('send_date'))
  <span class="help-block">{{$errors->first('send_date')}}</span>
  @endif
  </div>

   <div class="form-group{{$errors->has('Description') ? ' has-error' : ''}}">
    <label for="exampleFormControlTextarea1">Description</label>
    <textarea name="description" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
    @if($errors->has('activity_report'))
  <span class="help-block">{{$errors->first('activity_report')}}</span>
  @endif
  </div>
  
  <div class="form-group{{$errors->has('attachment') ? ' has-error' : ''}}">
            <label for="exampleFormControlTextarea1">Attachment</label>
            <input type="file" name="attachment" class="form-control">
            @if($errors->has('attachment'))
  <span class="help-block">{{$errors->first('attachment')}}</span>
  @endif
   </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Submit</button>
          </form>  
          </div>
            </div>
        </div>
@stop