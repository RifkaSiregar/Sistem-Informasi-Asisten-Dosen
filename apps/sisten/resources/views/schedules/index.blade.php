@extends('layouts.master')

@section('content')

<title>Schedule</title>
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


          <style>
            .dropdown-submenu {
              position: relative;
            }

            .dropdown-submenu>.dropdown-menu {
              top: 0;
              left: 100%;
              margin-top: -6px;
              margin-left: -1px;
              -webkit-border-radius: 0 6px 6px 6px;
              -moz-border-radius: 0 6px 6px 6px;
              border-radius: 0 6px 6px 6px;
            }

            .dropdown-submenu:hover>.dropdown-menu {
              display: block;
            }

            .dropdown-submenu>a:after {
              display: block;
              content: " ";
              float: right;
              width: 0;
              height: 0;
              border-color: transparent;
              border-style: solid;
              border-width: 5px 0 5px 5px;
              border-left-color: #cccccc;
              margin-top: 5px;
              margin-right: -10px;
            }

            .dropdown-submenu:hover>a:after {
              border-left-color: #ffffff;
            }

            .dropdown-submenu.pull-left {
              float: none;
            }

            .dropdown-submenu.pull-left>.dropdown-menu {
              left: -100%;
              margin-left: 10px;
              -webkit-border-radius: 6px 0 6px 6px;
              -moz-border-radius: 6px 0 6px 6px;
              border-radius: 6px 0 6px 6px;
            }
          </style>
          <!-- TABLE HOVER -->

          <div class="panel">
            <div class="panel-heading">
              <h3 class="panel-title">List of Schedules</h3>
              <div class="right">
                @if(session('user_role') == "Asisten Dosen" || session('user_role') == "Mahasiswa" || session('user_role') == "Dosen")
                @else
                    
                <div class="nav-collapse">
                  <ul class="nav">
                    <li class="dropdown" id="accountmenu">
                      <a class="dropdown-toggle btn btn-sm btn-default" data-toggle="dropdown" href="#"><i class="lnr lnr-plus-circle"></i><b class="caret"></b></a>
                      <ul class="dropdown-menu">

                        <!-- Odd/Even -->
                        <li class="dropdown-submenu">
                          <a tabindex="-1" href="/schedules/show">Odd/Even</a>
                        </li>
                    </li>

                    <!-- Short -->
                    <li><a href="/schedules/show">Short</a></li>
                  </ul>
                  </li>
                  </ul>
                </div>
                    @endif
                

                <!--/.nav-collapse -->
              </div>

              <a href="/schedules/export/xls" class="btn btn-sm btn-primary">Export Excel</a>
              <a href="/schedules/export/pdf" class="btn btn-sm btn-primary">Export PDF</a>
            </div>
            <div class="panel-body">
              <table id="datatableid" class="table table-hover">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Course Initial</th>
                    <th>Class</th>
                    <th>Academic Year</th>
                    <th>Week</th>
                    <th>Duration</th>
                    <th>Activity Type</th>
                    <th>Date Time</th>
                    <th>TA Initial</th>
                    @if(session('user_role') == "Asisten Dosen" || session('user_role') == "Mahasiswa" || session('user_role') == "Dosen")
                    @else
                    <th>Action</th>
                    @endif
                  </tr>
                </thead>
                <tbody>
                  @foreach($schedules as $schedule)
                  <tr>
                    <td>{{$i++}}</td>
                    <td>{{$schedule->course_initial}}</td>
                    <td>{{$schedule->class_name}}</td>
                    <td>{{$schedule->academic_year}}</td>
                    <td>{{$schedule->week}}</td>
                    <td>{{$schedule->duration}} Hour</td>
                    <td>{{$schedule->session_name}}</td>
                    <td>{{date('l, d F Y H:i', strtotime($schedule->date_time))}}</td>
                    <td>@if($ta_initial != NULL) @foreach ($ta_initial as $initial) @if ($initial->schedule_id == $schedule->schedule_id) {{$initial->initial}}, @endif @endforeach @endif</td>
                    @if(session('user_role') == "Asisten Dosen" || session('user_role') == "Mahasiswa" || session('user_role') == "Dosen")
                    @else
                    <td>
                      <a href="/schedules/{{$schedule->schedule_id}}/edit" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>
                      <a href="/schedules/{{$schedule->schedule_id}}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this row?')"><i class="fa fa-trash"></i></a>
                    </td>
                    @endif
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
@stop