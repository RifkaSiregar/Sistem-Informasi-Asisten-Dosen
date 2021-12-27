@extends('layouts.master')

@section('content')
<title>Profile Setting</title>
<div class="main"> 
  <div class="main-content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">

        
        <div class="panel">
				<div class="panel-heading">
					<h3 class="panel-title">Profile Setting</h3>
				</div>
        <form action="/profile/setting" method="POST" enctype="multipart/form-data">
        {{csrf_field()}}
				<div class="panel-body">
            <div class="form-group">
            <label for="exampleInputEmail1">First Name</label>
            <input name="first_name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Name" value="{{ $user->first_name }}">
            </div>
          <div class="form-group">
          <label for="exampleInputEmail1">Middle Name</label>
          <input name="middle_name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Name" value="{{ $user->middle_name }}">
        </div>
          <div class="form-group">
          <label for="exampleInputEmail1">Last Name</label>
          <input name="last_name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Name" value="{{ $user->last_name }}">
        </div>
            <div class="form-group">
            <label for="exampleInputEmail1">Password for confirm change</label>
            <input name="password" type="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Password" value="">
        </div>
        

    
        <button type="Update" class="btn btn-primary">Save</button>
                </form>  

        
                </div>
								</div>
                </div>
                </div>
								</div>
     
@stop