@extends('layouts.master')

@section('content')
<title>Announcement</title>

  
<div class="main"> 
  <div class="main-content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
   
        @if (session('success'))
<div class="alert alert-success alert-block">
		<button type="button" class="close" data-dismiss="alert">×</button>
    {{ session('success')}}
</div>
@endif    

<!-- TABLE HOVER -->

<div class="panel">
  <div class="panel-heading">
   
<h3 class="panel-title">List of Announcement</h3>
   
    <div class="right">
    <!-- <a href="/course/exportExcel" class="btn btn-sm btn-primary">Export Excel</a> -->
    <a href="/course/exportPdf" class="btn btn-sm btn-primary">Export PDF</a>

  </div>
  
  </div>
  <div class="panel-body">
    <table id="datatableid" class="table table-hover">
      <thead>
        <tr>
        <th>Student Name</th>
        <th>Course Code</th>
        <th>Course</th>
        <th>Class </th>
        <!-- <th>Action</th> -->
       
      </tr>
      </thead>
      <tbody>
      @foreach($passed_applicant as $data)
    <tr>
    <td>{{$data->first_name}} {{$data->middle_name}} {{$data->last_name}}</td></a>
    <td>{{$data->course_code}}</td>
    <td>{{$data->name}}</td>
    <td>{{$data->class_name}}</td>
    
    <td>
    <!-- <a href="" class="btn btn-warning btn-sm">Detail</a> -->
      </td>
    </tr>
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

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Form Announcement</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

            <form action="//create" method="POST" enctype="multipart/form-data">
            {{csrf_field()}}
    <div class="form-group{{$errors->has('ID') ? ' has-error' : ''}}">
    <label for="exampleInputEmail1">ID</label>
    <input name="ID" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" value="{{old('ID')}}">
    @if($errors->has('ID'))
  <span class="help-block">{{$errors->first('ID')}}</span>
  @endif
  </div>

  <div class="form-group{{$errors->has('Start date') ? ' has-error' : ''}}">
    <label for="exampleInputEmail1">Start date</label>
    <input name="Start date" type="Start date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" value="{{old('Start date')}}">
    @if($errors->has('Start date'))
  <span class="help-block">{{$errors->first('Start date')}}</span>
  @endif
  </div>

  <div class="form-group{{$errors->has('End date') ? ' has-error' : ''}}">
    <label for="exampleInputEmail1">End date</label>
    <input name="End date" type="End date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" value="{{old('End date')}}">
    @if($errors->has('End date'))
  <span class="help-block">{{$errors->first('End date')}}</span>
  @endif
  </div>

   <div class="form-group{{$errors->has('year') ? ' has-error' : ''}}">
    <label for="exampleInputEmail1">Year</label>
    <input name="year" type="year" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" value="{{old('year')}}">
    @if($errors->has('year'))
  <span class="help-block">{{$errors->first('year')}}</span>
  @endif
  </div>

   <div class="form-group{{$errors->has('minimum_score') ? ' has-error' : ''}}">
    <label for="exampleInputEmail1">Minimum Score</label>
    <input name="minimum_score" type="minimum_score" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" value="{{old('minimum_score')}}">
    @if($errors->has('minimum_score'))
  <span class="help-block">{{$errors->first('minimum_score')}}</span>
  @endif
  </div>

  <div class="form-group{{$errors->has('numbers_of_students') ? ' has-error' : ''}}">
    <label for="exampleInputEmail1">Numbers of students</label>
    <input name="numbers_of_students" type="numbers_of_students" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" value="{{old('numbers_of_students')}}">
    @if($errors->has('numbers_of_students'))
  <span class="help-block">{{$errors->first('numbers_of_students')}}</span>
  @endif
  </div>

   <div class="form-group{{$errors->has('description') ? ' has-error' : ''}}">
    <label for="exampleFormControlTextarea1">Description</label>
    <textarea name="description" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
    @if($errors->has('description'))
  <span class="help-block">{{$errors->first('description')}}</span>
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