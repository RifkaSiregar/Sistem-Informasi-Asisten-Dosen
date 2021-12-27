@extends('layouts.master')

@section('content')
<title>Vacancies Management</title>
<div class="main"> 
  <div class="main-content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
   
          
          @if (session('message'))
          <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>
            {{ session('message')}}
          </div>
          @endif

<!-- TABLE HOVER -->
<div class="panel">
  <div class="panel-heading">
    <h3 class="panel-title">Vacancies Management</h3>
    <div class="right">
    <!-- <a href="/vacancy/create" class="btn btn-warning btn-sm"><i class="fa fa-plus"></i></a> -->
    </div>
    
  </div>
  <div class="panel-body">
    <table id="datatableid" class="table table-hover">
      <thead>
      <tr>
      <th>No</th>
        <th>Course Initial </th>
        <!-- <th>Course Code </th> -->
        <th>Semester</th>
        <th>Minimum Batch</th>
        <th>Deadline </th>
        <!-- <th>Teaching Duration (in week)</th> -->
        <th>Minimum Grade</th>
        <!-- <th>Seats</th> -->
        <!-- <th>Description</th> -->
        <th>Action</th>
      
      </tr>
      </thead>
      <tbody>
      @foreach($vacancies as $vacancy)
      <tr>
  
      <td>{{$vacancy->id}}</td>
  <td>{{$vacancy->course_initial}}</td>
  <!-- <td>{{$vacancy->course_code}}</td> -->
  <td>{{$vacancy->semester_name}}</td>
  <td>{{$vacancy->minimum_batch}}</td>
  <td>{{$vacancy->deadline}}</td>
  <!-- <td>{{$vacancy->teaching_duration}}</td> -->
  <td>{{$vacancy->minimum_score}}</td>
  <!-- <td>{{$vacancy->ta_seats}}</td> -->
  <!-- <td>{{$vacancy->description}}</td> -->
  <td>
    @if(session('user_role') == "Dosen")
    <a href="/vacancymanagement/{{$vacancy->id}}/edit" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>
    <a href="/vacancymanagement/{{$vacancy->id}}/detail" class="btn btn-info btn-sm"><i class="fa fa-info"></i></a>
    <a href="/vacancymanagement/{{$vacancy->id}}/delete" class="btn btn-danger btn-sm"onclick="return confirm('Are you sure you want to delete this row?')"><i class="fa fa-trash"></i></a>
    @else
    <a href="/vacancymanagement/{{$vacancy->id}}/detail" class="btn btn-info btn-sm"><i class="fa fa-info"></i></a>
    @endif
    </td>
    </tr>
    @endforeach
      </tbody>
    </table>
  </div>
</div>
<!-END TABLE HOVER
<!-- </div>

<div class="modal inmodal fade" id="modal-add" tabindex="-1" role="dialog" aria-hidden="true">
<div class="modal-dialog modal-xs">
<form name="frm_add" id="frm_add" class="form-horizontal" action="/vacancymanagement/create" method="POST">{{csrf_field()}}
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
<h4 class="modal-title"> Create Vacancies </h4>
</div>


<div class="modal-body">
<div class="form-group"><label class="col-lg-4 control-label">Semester</label>
<div class="col-lg-8">
<select name="semester" class="form-control" id="exampleFormControlSelect1"aria-describedby="emailHelp" placeholder="Semester" value="">
                <option value="Odd">Odd</option>
                <option value="Even">Even</option>
              </select>
              @if($errors->has('semester'))
            <span class="help-block">{{$errors->first('semester')}}</span>
            @endif
            </div>
            </div>
            </div>

<div class="modal-body">
<div class="form-group"><label class="col-lg-4 control-label">Minimum Batch</label>
<div class="col-lg-8">
              <input name="minimum_batch" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" value="2012">
              @if($errors->has('minimum_batch'))
            <span class="help-block">{{$errors->first('minimum_batch')}}</span>
            @endif
            </div>
            </div>
            </div>

<div class="modal-body">
<div class="form-group"><label class="col-lg-4 control-label">Deadline</label>
<div class="col-lg-8">
              <input name="deadline" type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" value="{{old('deadline')}}">
              @if($errors->has('deadline'))
            <span class="help-block">{{$errors->first('deadline')}}</span>
            @endif
            </div>
            </div>
            </div>

<div class="modal-body">
<div class="form-group"><label class="col-lg-4 control-label">Teaching Duration</label>
<div class="col-lg-8">
              <input name="teaching_duration" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" value="{{old('teaching_duration')}}">
              @if($errors->has('teaching_duration'))
            <span class="help-block">{{$errors->first('teaching_duration')}}</span>
            @endif
            </div>
            </div>
            </div>

<div class="modal-body">
<div class="form-group"><label class="col-lg-4 control-label">Minimum Grade</label>
<div class="col-lg-8">
<select name="minimum_score" class="form-control" id="exampleFormControlSelect1"aria-describedby="emailHelp" placeholder="" value="">
              <option value="A">A</option>
              <option value="AB">AB</option>
                <option value="B">B</option>
                <option value="BC">BC</option>
                <option value="C">C</option>
              </select>
              @if($errors->has('minimum_score'))
            <span class="help-block">{{$errors->first('minimum_score')}}</span>
            @endif
            </div>
            </div>
            </div>

<div class="modal-body">
<div class="form-group"><label class="col-lg-4 control-label">Seats</label>
<div class="col-lg-8">
<input name="seats" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" value="{{old('ta_seats')}}">
              @if($errors->has('ta_seats'))
            <span class="help-block">{{$errors->first('ta_seats')}}</span>
            @endif
            </div>
            </div>
            </div>

<div class="modal-body">
<div class="form-group"><label class="col-lg-4 control-label">Description</label>
<div class="col-lg-8">
<textarea name="description" type="string" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
              @if($errors->has('description'))
            <span class="help-block">{{$errors->first('description')}}</span>
            @endif
            </div>
            </div>
            </div>

<div class="modal-footer">
<button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
<button type="submit" class="btn btn-primary">Submit</button>
</div> -->
</div>
</form>
</div>
</div>

@stop