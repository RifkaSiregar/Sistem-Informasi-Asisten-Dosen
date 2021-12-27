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
              <h3 class="panel-title">Course Owner Form</h3>
            </div>
            <div class="panel-body">
              <div class="row">
                <div class="col-md-6">
                  <form action="/courseowner/create" method="POST">

                    {{csrf_field()}}

                    <div class="form-group{{$errors->has('name') ? ' has-error' : ''}}">
                      <label for="exampleInputEmail1">Name</label>
                      <input name="name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Name" value="{{old('name')}}">
                      @if($errors->has('name'))
                      <span class="help-block">{{$errors->first('name')}}</span>
                      @endif
                    </div>
                    <div class="form-group{{$errors->has('curriculum') ? ' has-error' : ''}}">
                      <label for="exampleInputEmail1">Curriculum</label>
                      <input name="curriculum" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Curriculum" value="{{old('curriculum')}}">
                      @if($errors->has('curriculum'))
                      <span class="help-block">{{$errors->first('curriculum')}}</span>
                      @endif
                    </div>

                    <div class="form-group{{$errors->has('status') ? ' has-error' : ''}}">
                      <label for="exampleFormControlSelect1">Status</label>
                      <select name="status" class="form-control" id="exampleFormControlSelect1">
                        <option value="active">Active</option>
                        <option value="inactive">Inactive</option>
                      </select>
                      @if($errors->has('status'))
                      <span class="help-block">{{$errors->first('status')}}</span>
                      @endif
                    </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group{{$errors->has('level') ? ' has-error' : ''}}">
                    <label for="exampleFormControlSelect1">Level</label>
                    <select name="level" class="form-control" id="exampleFormControlSelect1">
                      <option value="Institute">Institute</option>
                      <option value="Faculty">Faculty</option>
                      <option value="Study-Program">Study Program</option>
                    </select>
                    @if($errors->has('level'))
                    <span class="help-block">{{$errors->first('level')}}</span>
                    @endif
                  </div>


                  <div class="form-group{{$errors->has('description') ? ' has-error' : ''}}">
                    <label for="exampleInputEmail1">Description</label>
                    <textarea name="description" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Description" value="{{old('description')}}"></textarea>
                    @if($errors->has('description'))
                    <span class="help-block">{{$errors->first('description')}}</span>
                    @endif
                  </div>



                  <div class="modal-footer">
                    <a href="/courseowner" class="btn btn-danger">Close</a>
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