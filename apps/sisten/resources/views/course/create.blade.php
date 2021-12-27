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
              <h3 class="panel-title">Form Course</h3>
            </div>
            <div class="panel-body">
              <div class="row">
                <div class="col-md-6">
                  <form action="/courses/create" method="POST">

                    {{csrf_field()}}

                    <div class="form-group{{$errors->has('course_code') ? ' has-error' : ''}}">
                      <label for="exampleInputEmail1">Code</label>
                      <input name="course_code" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Course Code" value="{{old('course_code')}}">
                      @if($errors->has('course_code'))
                      <span class="help-block">{{$errors->first('course_code')}}</span>
                      @endif
                    </div>

                    <div class="form-group{{$errors->has('course_initial') ? ' has-error' : ''}}">
                      <label for="exampleInputEmail1">Initial</label>
                      <input name="course_initial" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Course Initial" value="{{old('course_initial')}}">
                      @if($errors->has('course_initial'))
                      <span class="help-block">{{$errors->first('course_initial')}}</span>
                      @endif
                    </div>

                    <div class="form-group{{$errors->has('name') ? ' has-error' : ''}}">
                      <label for="exampleInputEmail1">Name</label>
                      <input name="name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Course Name" value="{{old('name')}}">
                      @if($errors->has('name'))
                      <span class="help-block">{{$errors->first('name')}}</span>
                      @endif
                    </div>

                </div>

                <div class="col-md-6">
                  <div class="form-group{{$errors->has('credit') ? ' has-error' : ''}}">
                    <label for="exampleFormControlSelect1">Credit</label>
                    <select name="credit" class="form-control" id="exampleFormControlSelect1">
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                    </select>
                    @if($errors->has('credit'))
                    <span class="help-block">{{$errors->first('credit')}}</span>
                    @endif
                  </div>



                  <div class="form-group{{$errors->has('course_owner_id') ? ' has-error' : ''}}">
                    <label for="exampleInputEmail1">Course Owner</label>
                    <select name="course_owner_id" class="form-control" id="exampleFormControlSelect1" aria-describedby="emailHelp" placeholder="Course Owner ID" value="">
                      @foreach($course as $c)
                      <option value="{{$c->id}}">{{$c->curriculum}}</option>
                      @endforeach
                    </select>
                    @if($errors->has('course_owner_id'))
                    <span class="help-block">{{$errors->first('course_owner_id')}}</span>
                    @endif
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
</div>

@stop