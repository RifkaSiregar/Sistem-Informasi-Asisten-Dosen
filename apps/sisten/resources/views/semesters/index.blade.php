@extends('layouts.master')

@section('content')
<title>Semester</title>


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

              <h3 class="panel-title">List of Semester</h3>


            </div>
            <div class="panel-body">
              <table id="datatableid" class="table table-hover">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Academic Year</th>
                    <th>Semester</th>
                    <th>Number of Students / TA Seats</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($semesters as $semester)
                  <tr>
                    <td>{{$i++}}</td>
                    <td>{{$semester->academic_year}}</td>
                    <td>{{$semester->semester_name}}</td>
                    <td>{{$semester->number_of_students}} / {{$semester->ta_seats}}</td>
                    <td>
                      <a href="/semesters/{{$semester->id}}/edit" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>
                      <a href="/semesters/{{$semester->id}}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this row?')"><i class="fa fa-trash"></i></a>
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