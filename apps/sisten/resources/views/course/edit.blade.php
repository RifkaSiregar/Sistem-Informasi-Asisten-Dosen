@extends('layouts.master')

@section('content')
<title>Course</title>
<div class="main">
  <div class="main-content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">

          <div class="panel">
            <div class="panel-heading">
              <h3 class="panel-title">Course Edit Form</h3>
            </div>
            <div class="panel-body">
              <div class="row">
                <div class="col-md-6">
                  <form action="/courses/{{$course->id}}/update" method="POST" enctype="multipart/form-data">
                    {{csrf_field()}}

                    <div class="form-group{{$errors->has('course_code') ? ' has-error' : ''}}">
                      <label for="exampleInputEmail1">Code</label>
                      <input name="course_code" type="string" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Course Code" value="{{$course->course_code}}">
                      @if($errors->has('course_code'))
                      <span class="help-block">{{$errors->first('course_code')}}</span>
                      @endif
                    </div>

                    <div class="form-group{{$errors->has('course_initial') ? ' has-error' : ''}}">
                      <label for="exampleInputEmail1">Initial</label>
                      <input name="course_initial" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Course Name" value="{{$course->course_initial}}">
                      @if($errors->has('course_initial'))
                      <span class="help-block">{{$errors->first('course_initial')}}</span>
                      @endif
                    </div>

                    <div class="form-group{{$errors->has('name') ? ' has-error' : ''}}">
                      <label for="exampleInputEmail1">Name</label>
                      <input name="name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Course Name" value="{{$course->name}}">
                      @if($errors->has('name'))
                      <span class="help-block">{{$errors->first('name')}}</span>
                      @endif
                    </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group{{$errors->has('credit') ? ' has-error' : ''}}">
                    <label for="exampleFormControlSelect1">Credit</label>
                    <select class="form-control" id="exampleInputEmail1" name="credit">
                      <option value="{{$course->credit}}">{{$course->credit}}</option>
                      @foreach($credit as $c)
                      @if($c!=$course->credit)
                      <option value="{{$c}}">{{$c}}</option>
                      @endif
                      @endforeach
                    </select>
                  </div>

                  <div class="form-group{{$errors->has('course_owner_id') ? ' has-error' : ''}}">
                    <label for="exampleInputEmail1">Course Owner</label>
                    <select name="course_owner_id" class="form-control" id="exampleFormControlSelect1">
                      @foreach($courses as $d)
                      <option value="{{$d->id}}">{{$d->curriculum}}</option>
                      @endforeach
                    </select>
                    @if($errors->has('course_owner_id'))
                    <span class="help-block">{{$errors->first('course_owner_id')}}</span>
                    @endif
                  </div>
                </div>



                <div class="modal-footer">
                  <a href="/courses" class="btn btn-danger">Close</a>
                  <button type="submit" class="btn btn-warning">Update</button>

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