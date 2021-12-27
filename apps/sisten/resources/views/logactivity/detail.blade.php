@extends('layouts.master')

@section('content')
<hr>
<title>Vacancies Create</title>
<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">

                <div class="col-md-7">
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="profile-username text-center">Activity Report Detail</h3>
                            <strong><i></i>
                                <p class="profile-username text-center">{{ $log->course_code }} -
                                    {{ $log->course_initial }}
                            </strong></p>

                            <hr>
                            <strong> Number Of Attendance </strong> : {{ $log->attendance }}</p>

                            <strong> Activity Type</strong> : {{ $log->activity_type }}</p>

                            <strong> Activity Date</strong> : {{ $log->date_time }}</p>

                            <strong>Description</strong> : {{ $log->description }}</p>

                            <strong> Activity Report</strong> : {{ $log->activityreport}}</p>

                            <strong> Duration</strong> : {{ $log->duration}} Hour</p>

                            <strong> Attachment</strong> :</p>
                            @foreach($attachment as $attachment) <strong> <a> {{ $attachment->file_name}} </a> </strong>
                            </p> @endforeach

                        </div>
                    </div>
                </div>
                <div class="col-md-5">

                  <div class="panel-heading">
  
                      <form action="  " method="POST">
                          {{ csrf_field() }}
  
                          <div class="form-group">
                              <label for="MotivationInput">Comment : </label>
                              <textarea name="comment" type="string" class="form-control" id="exampleFormControlTextarea1"
                                  rows="3"></textarea>
                              @error('comment') <p style="color:red;">{{$message}}</p> @enderror
                              <br>
                              <button type="submit" class="btn btn-success btn-xs">Comment</button>
                          </div>
  
                      </form>
  
                      @foreach ($comments as $comment)
  
                      <div class="col-md-3">
                          <strong>{{$comment->first_name}} {{$comment->last_name}}: </strong>
                      </div>
                      <!-- <td></td>
                    <tr></tr>
                    <tr></tr> -->
                      <div class="col-md-9">
                          <p class="text-muted"> {{ $comment->text }} </p>
                          <p class="text-muted" style="text-align:right">
                              {{ \Carbon\Carbon::parse($comment->send_date)->diffForHumans() }} </p>
                          <hr>
                      </div>
                      <br>
  
                      @endforeach
                  </div>
              </div>
            </div>

            
        </div>
    </div>
</div>
</div>
</div>
@stop