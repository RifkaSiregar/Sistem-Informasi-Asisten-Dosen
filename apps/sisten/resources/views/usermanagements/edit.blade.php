@extends('layouts.master')

@section('content')

<title>User Management</title>
<div class="main">
  <div class="main-content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">

          <div class="panel">
            <div class="panel-heading">
              <h3 class="panel-title">Form User Management</h3>
            </div>
            <div class="panel-body">
              <form action="/users/{{$users->id}}/update" method="POST" enctype="multipart/form-data">
                {{csrf_field()}}


                <div class="form-group">
                  <label for="exampleFormControlSelect1">Choose Status</label>
                  <select name="status" class="form-control" id="exampleFormControlSelect1">
                    <option value="{{$users->status}}">{{$users->status}}</option>
                    @foreach($status as $s)
                    @if($s!=$users->status)
                    <option value="{{$s}}">{{$s}}</option>
                    @endif
                    @endforeach
                  </select>
                </div>

                <div class="form-group">
                  <label for="exampleFormControlSelect1">Choose Role</label>
                  <select name="role" class="form-control" id="exampleFormControlSelect1">
                    <option value="{{$users->role}}">{{$users->role}}</option>
                    @foreach($role as $r)
                    @if($r!=$users->role)
                    <option value="{{$r}}">{{$r}}</option>
                    @endif
                    @endforeach
                  </select>
                </div>


                <button type="submit" class="btn btn-warning">Update</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    @stop