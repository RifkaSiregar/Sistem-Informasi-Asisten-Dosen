@extends('layouts.master')

@section('content')
<title>Activity Report</title>
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
              <h3 class="panel-title">Log Activity</h3>

            </div>
          </div>
          <div class="panel-heading">
            <div id="ChartActivity"></div>
            <div class="panel-body">
              <table id="datatableid" class="table table-hover">


            <div class="panel-heading">
              <h2 class="panel-title">List of Teaching Assistant Log Activity</h2>

            </div>
          </div>
                <thead>
                  <tr>
                    <th>Course</th>
                    <th>Semester</th>
                    <th>Class</th>
                    <th>Week</th>
                    <th>Activity Date</th>
                    <th>Attendance</th>
                    <th>Activity Type</th>
                    <th>Send Date</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($logs as $activityreport)
                  <tr>
                    <td>{{$activityreport->course_initial}}</td>
                    <td>{{$activityreport->semester_name}}</td>
                    <td>{{$activityreport->class_name}}</td>
                    <td>{{$activityreport->week}}</td>
                    <td>{{date('l, d F Y ', strtotime($activityreport->date_time))}}</td>
                    <td>{{$activityreport->attendance}} / {{$activityreport->number_of_students}} Students</td>
                    <td>{{$activityreport->activity_type}}</td>
                    <td>{{\Carbon\Carbon::parse($activityreport->created_at)->diffForHumans()}}</td>
                    <td>{{$activityreport->status}}</td>
                      <td>
                      @if(session('user_role') == "Asisten Dosen" || session('user_role') == "Admin")
                      <a href="/logactivity/{{$activityreport->log_number}}/detail" class="btn btn-warning btn-sm"><i class="fa fa-info"></i></a>
                      @else
                        <a href="/logactivity/{{$activityreport->log_number}}/detail" class="btn btn-warning btn-sm"><i class="fa fa-info"></i></a>
                        @if($activityreport->status == 'unapprove')
                        <a href="/logactivity/{{$activityreport->log_number}}/approve" class="btn btn-primary btn-sm"><i class="fa fa-check-square"></i></a>
                        </td>
                        @elseif($activityreport->status == 'approve')
                        @endif
                
                      </td>
                      </tr>
                      @endif
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

 <!-- @section('footer')
<script src="https://code.highcharts.com/highcharts.js"></script>
<script>
  Highcharts.chart('ChartActivity', {
    chart: {
      type: 'column'
    },
    title: {
      text: 'Activity Type that are of interest to students on schedule meeting'
    },
    xAxis: {
      categories: {!!json_encode($categories)!!},
      crosshair: true
    },

    yAxis: {
      min: 0,
      title: {
        text: 'Attendance (Person)'
      }
    },
    tooltip: {
      headerFormat: '<span style="font-size:10px">{point.key}</span><table>',

      footerFormat: '</table>',
      shared: true,
      useHTML: true
    },
    plotOptions: {
      column: {
        pointPadding: 0.3,
        borderWidth: 0
      }
    },
    series: [{
      name: 'Theory',
      data: {!!json_encode($Theory)!!}, 

    }, {
      name: 'Practicum',
      data: {!!json_encode($Practicum)!!}, 
    
    }, {
      name: 'Tutorial',
      data: {!!json_encode($Tutorial)!!}, 

    }]
  });
</script>
@stop  -->