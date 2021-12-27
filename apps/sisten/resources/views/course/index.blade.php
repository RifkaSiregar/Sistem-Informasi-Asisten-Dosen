@extends('layouts.master')

@section('content')
<title>Course</title>


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

              <h3 class="panel-title">List of Courses</h3>

              <div class="right">
                <a href="/courses/export/xls" class="btn btn-sm btn-primary">Export Excel</a>
                <a href="/courses/export/pdf" class="btn btn-sm btn-primary">Export PDF</a>
                @if(session('user_role') == "Dosen")
                @else
                <a href="/courses/add" class="btn btn-sm btn-default"><i class="lnr lnr-plus-circle"></i></a>
                @endif
              </div>

            </div>
            <div class="panel-body">
              <table id="datatableid" class="table table-hover">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Code</th>
                    <th>Initial</th>
                    <th>Class</th>
                    <th>Name</th>
                    <th>Academic Year</th>
                    <th>Credit</th>
                    <th>Course Owner</th>
                    @if(session('user_role') == "Dosen")
                    @else
                    <th>Action</th>
                    @endif
                  </tr>
                </thead>
                <tbody>
                  @foreach($courses as $course)
                  <tr>
                    <td>{{$counter++}}</td>
                    @if(session('course_all') == true && session('user_role') == "Dosen")
                    <td>{{$course->course_code}}</td>
                    @else
                    <td><a href="/courses/{{$course->id}}" class="href">{{$course->course_code}}</td></a>
                    @endif
                    <td>{{$course->course_initial}}</td>
                    <td>{{$course->class_name}}</td>
                    <td>{{$course->name}}</td>
                    <td>{{$course->academic_year}}</td>
                    <td>{{$course->credit}}</td>
                    <td>{{$course->curriculum}}</td>
                    @if(session('user_role') == "Dosen")
                    @else
                    <td>
                      <a href="/courses/{{$course->id}}/show" class="btn btn-info btn-sm"><i class="fa fa-plus"></i></a>
                      <a href="/courses/{{$course->id}}/edit" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>
                      <a href="/courses/{{$course->id}}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this row?')"><i class="fa fa-trash"></i></a>
                    </td>
                    @endif
                  </tr>
                  @endforeach
                  @if($inactive_courses != NULL)
                  @foreach($inactive_courses as $course)
                  <tr>
                    <td>{{$counter++}}</td>
                    <td>{{$course->course_code}}</td>
                    <td>{{$course->course_initial}}</td>
                    <td>NOT SET</td>
                    <td>{{$course->name}}</td>
                    <td>NOT SET</td>
                    <td>{{$course->credit}}</td>
                    <td>{{$course->curriculum}}</td>
                    @if(session('user_role') == "Dosen")
                    @else
                    <td>
                      <a href="/courses/{{$course->id}}/show" class="btn btn-info btn-sm"><i class="fa fa-plus"></i></a>
                      <a href="/courses/{{$course->id}}/edit" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>
                      <a href="/courses/{{$course->id}}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this row?')"><i class="fa fa-trash"></i></a>
                    </td>
                    @endif
                  </tr>
                  @endforeach
                  @endif
                </tbody>
              </table>
              @if(session('course_all') == true)
              <div class="margin-top-30 text-center"><a href="/courses" type="submit" class="btn btn-default">See my course</a></div>
              @else
              <form action="/courses" method="POST">
              {{ csrf_field() }}
              <div class="margin-top-30 text-center"><button type="submit" class="btn btn-default">See all course</button></div>
            </form>
             @endif
            </div>
          </div>
          <!-- END TABLE HOVER -->


        </div>
      </div>
    </div>
  </div>
</div>
@stop