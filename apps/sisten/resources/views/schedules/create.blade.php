@extends('layouts.master')

@section('content')

<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</head>

<body>
  <title>Schedule</title>
  <div class="main">
    <div class="main-content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">

            <div class="panel">
              <div class="panel-heading">
                <h3 class="panel-title">Form Schedule</h3>
              </div>
              <div class="panel-body">
                <div class="row">

                  <div class="col-md-6">
                    <form action="/schedules/create" method="POST">
                      {{csrf_field()}}


                      <div class="form-group{{$errors->has('semester_id') ? ' has-error' : ''}}">
                        <label for="exampleInputEmail1">Course Initial</label>
                        <select name="semester_id" class="form-control" id="exampleFormControlSelect1" aria-describedby="emailHelp" placeholder="Course Initial" value="">
                          @foreach($courses as $s)
                          <option value="{{$s->id}}">{{$s->course_initial}}</option>
                          @endforeach
                        </select>
                        @if($errors->has('semester_id'))
                        <span class="help-block">{{$errors->first('semester_id')}}</span>
                        @endif
                      </div>


                      <div class="form-group{{$errors->has('session_name') ? ' has-error' : ''}}">
                        <label for="exampleFormControlSelect1">Activity Type</label>
                        <select name="session_name" class="form-control" id="exampleFormControlSelect1">
                          <option value="Practicum">Practicum</option>
                          <option value="Theory">Theory</option>
                          <option value="Tutorial">Tutorial</option>
                        </select>
                        @if($errors->has('session_name'))
                        <span class="help-block">{{$errors->first('session_name')}}</span>
                        @endif
                      </div>


                      <div class="form-group{{$errors->has('week') ? ' has-error' : ''}}">
                        <label><strong>Week :</strong></label><br>
                        <label><input type="checkbox" name="week[]" value="1">1</label>
                        <label><input type="checkbox" name="week[]" value="2">2</label>
                        <label><input type="checkbox" name="week[]" value="3">3</label>
                        <label><input type="checkbox" name="week[]" value="4">4</label>
                        <label><input type="checkbox" name="week[]" value="5">5</label>
                        <label><input type="checkbox" name="week[]" value="6">6</label>
                        <label><input type="checkbox" name="week[]" value="7">7</label>
                        <label><input type="checkbox" name="week[]" value="8">8</label>
                        <label><input type="checkbox" name="week[]" value="9">9</label>
                        <label><input type="checkbox" name="week[]" value="10">10</label>
                        <label><input type="checkbox" name="week[]" value="11">11</label>
                        <label><input type="checkbox" name="week[]" value="12">12</label>
                        <label><input type="checkbox" name="week[]" value="13">13</label>
                        <label><input type="checkbox" name="week[]" value="14">14</label>
                        <label><input type="checkbox" name="week[]" value="15">15</label>
                        <label><input type="checkbox" name="week[]" value="16">16</label>
                        @if($errors->has('week'))
                        <span class="help-block">{{$errors->first('week')}}</span>
                        @endif
                      </div>
                  </div>

                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Duration (in Hour)</label>
                      <select name="duration" class="form-control" id="exampleFormControlSelect1">
                        <option value="1">1 Hour</option>
                        <option value="2">2 Hour</option>
                        <option value="3">3 Hour</option>
                        <option value="4">4 Hour</option>
                      </select>
                    </div>


                    <div class="form-group{{$errors->has('date_time') ? ' has-error' : ''}}">
                      <label for="exampleInputEmail1">Date Time</label>
                      <input name="date_time" type="datetime-local" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Datetime">
                      @if($errors->has('date_time'))
                      <span class="help-block">{{$errors->first('date_time')}}</span>
                      @endif
                    </div>

                    <div class="modal-footer">
                      <a href="/schedules" class="btn btn-danger">Close</a>
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


    @stop