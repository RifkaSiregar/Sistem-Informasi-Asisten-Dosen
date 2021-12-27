@extends('layouts.master')

@section('content')
<title>Course Owner</title>
<div class="main">
  <div class="main-content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">

          <div class="panel">
            <div class="panel-heading">
              <h3 class="panel-title">Course Owner Edit Form</h3>
            </div>
            <div class="panel-body">
              <div class="row">
                <div class="col-md-6">
                  <form action="/courseowner/{{$course_owner->id}}/update" method="POST" enctype="multipart/form-data">
                    {{csrf_field()}}

                    <div class="form-group{{$errors->has('code') ? ' has-error' : ''}}">
                      <label for="exampleInputEmail1">Name</label>
                      <input name="name" type="string" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Name" value="{{$course_owner->name}}">
                      @if($errors->has('name'))
                      <span class="help-block">{{$errors->first('name')}}</span>
                      @endif
                    </div>



                    <div class="form-group{{$errors->has('curriculum') ? ' has-error' : ''}}">
                      <label for="exampleInputEmail1">Curriculum</label>
                      <input name="curriculum" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Curriculum" value="{{$course_owner->curriculum}}">
                      @if($errors->has('curriculum'))
                      <span class="help-block">{{$errors->first('curriculum')}}</span>
                      @endif
                    </div>

                    <div class="form-group{{$errors->has('status') ? ' has-error' : ''}}">
                      <label for="exampleFormControlSelect1">Status</label>
                      <select class="form-control" id="exampleInputEmail1" name="status">
                        <option value="{{$course_owner->status}}">{{$course_owner->status}}</option>
                        @foreach($status as $s)
                        @if($s!=$course_owner->status)
                        <option value="{{$s}}">{{$s}}</option>
                        @endif
                        @endforeach
                      </select>
                    </div>

                </div>

                <div class="col-md-6">

                  <div class="form-group{{$errors->has('level') ? ' has-error' : ''}}">
                    <label for="exampleFormControlSelect1">Level</label>
                    <select class="form-control" id="exampleInputEmail1" name="level">
                      <option value="{{$course_owner->level}}">{{$course_owner->level}}</option>
                      @foreach($level as $c)
                      @if($c!=$course_owner->level)
                      <option value="{{$c}}">{{$c}}</option>
                      @endif
                      @endforeach
                    </select>
                  </div>



                  <div class="form-group{{$errors->has('description') ? ' has-error' : ''}}">
                    <label for="exampleInputEmail1">Description</label>
                    <textarea name="description" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Description" value="{{$course_owner->description}}"></textarea>
                    @if($errors->has('description'))
                    <span class="help-block">{{$errors->first('description')}}</span>
                    @endif
                  </div>
                  <div class="modal-footer">
                    <a href="/courseowner" class="btn btn-danger">Close</a>
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