@extends('layouts.master')

@section('content')
<title>Course Owner</title>


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

              <h3 class="panel-title">List of Courses Owner</h3>

              <div class="right">
                <a href="/courseowner/add" class="btn btn-sm btn-default"><i class="lnr lnr-plus-circle"></i></a>


              </div>

            </div>
            <div class="panel-body">
              <table id="datatableid" class="table table-hover">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>Curriculum</th>
                    <th>Level</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($course_owner as $course)
                  <tr>
                    <td>{{$i++}}</td>
                    <td>{{$course->name}}</td>
                    <td>{{$course->curriculum}}</td>
                    <td>{{$course->level}}</td>
                    <td>
                      <a href="/courseowner/{{$course->id}}/edit" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>
                      <a href="/courseowner/{{$course->id}}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this row?')"><i class="fa fa-trash"></i></a>
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
</div @stop