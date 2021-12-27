@extends('layouts.master')

@section('content') 
<title>Teaching Assistant Report</title>
<div class="main"> 
  <div class="main-content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
            
        <div class="panel panel-headline">
				<div class="panel-heading">
        <h3>Comment</h3>
					<h3 class="panel-title">{{$activityreport->activity_date}}</h3>
                </div>
				<div class="panel-body">
            {{$activities->konten}}
        <hr>
        <div class="btn-group">
            <button class="btn btn-default"><i class="lnr lnr-thumbs-up"></i>Suka</button>
            <button class="btn btn-default"><i class="lnr lnr-bubble"></i>Comment</button>
        </div>

        <form action="" id="comment-utama" method="POST">
        @csrf
        <input type="hidden" name="activityreports_id" value="{{$activities->id}}">
        <input type="hidden" name="parent" value="0">
        <textarea name="text" class="form-control" id="comment utama" rows="3"></textarea>
        <input type="submit" class="btn btl-primary" value="send">
        </form>
        

            </div>
            </div>
            </div>
            </div>
            </div>
            
@stop
    