@extends('layouts.master'))

@section('content')

<title>User Log Activity</title>
<div class="main">
  <div class="main-content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">


          <!-- TABLE HOVER -->
          <div class="panel">
            <div class="panel-heading">
              <h3 class="panel-title">List of Activities</h3>
              <div class="right">
                <a href="/logactivities/export/xls" class="btn btn-sm btn-primary">Export Excel</a>
                <a href="/logactivities/export/pdf" class="btn btn-sm btn-primary">Export PDF</a>
              </div>

            </div>
            <div class="panel-body">
              <table id="datatableid" class="table table-hover">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Initial</th>
                    <th>Activity</th>
                    <th>Access Time</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($activities as $activity)
                  <tr>
                    <td>{{$i++}}</td>
                    <td>{{$activity->initial}}</td>
                    <td>{{$activity->activity}}</td>
                    <td>{{date('l, d F Y H:i', strtotime($activity->created_at))}}</td>
                    <td><a href="/logactivities/{{$activity->id}}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this row?')"><i class="fa fa-trash"></i></a>
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
</div>

@stop