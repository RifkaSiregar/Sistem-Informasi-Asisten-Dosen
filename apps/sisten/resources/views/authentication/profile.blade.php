@extends('layouts.master')

@section('content')
<title>Profile</title>
<div class="main"> 
  <div class="main-content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <h3 class="profile-username text-center">{{ $user->first_name }} {{ $user->middle_name }} {{ $user->last_name }}</h3>
          @if(session('user_role') == "Mahasiswa" || session('user_role') == "Asisten Dosen")
          <h4 class="profile-username text-center">NIM : {{ $user->registration_number }}</h4>
          @elseif(session('user_role') == "Dosen")
          <h4 class="profile-username text-center">NIDN : {{ $user->registration_number }}</h4>
          @else
          <h4 class="profile-username text-center">Reg. Number : {{ $user->registration_number }}</h4>
          @endif
        </div>
        <div class="col-md-11">
        </div>
        <div class="col-md-1">
          <a href="/profile/setting/{{ session('user_id') }}" class="btn btn-primary btn-block"><i class="fa fa-cog"></i></a>
        </div>

        <div class="col-md-12">

        <div class="card card-primary card-outline">
        <div class="card-body box-profile">
          {{-- <div class="text-center">
            <img src="" alt="profile" class="profile-user-img img-responsive img-circle"
            width="15%" height="15%" style="display: block; margin: auto;">
          </div> --}}
          
          <div class="row">
            <div class="form-group col-md-4">
              <strong>Program Study</strong><p class="text-muted">{{ $user->study_program }}</p>
              <strong>Batch</strong><p class="text-muted">{{ $user->batch }}</p>
              <strong>Email</strong><p class="text-muted">{{ $user->email }}</p>
            </div>
            <div class="form-group col-md-4">
              <strong>Phone Number</strong><p class="text-muted">{{ $user->phone_number }} </p>
              @if(session('user_role') == "Asisten Dosen")
              <strong>Bank Account</strong><p class="text-muted">{{ $user->bank_name }} - {{$user->bank_account_number}}</p>
              @endif
            </div>
         </div>
      </div>      
    </div>
    
    <div class="col col-lg-8 col-md-8">
      <div class="card card-primary card-outline">
        
        @if(session('user_role') == "Asisten Dosen")
        <div class="card-header">
        <h3 class="card-title">Teaching Assistant History</h3>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table" >
              <thead>
                <tr>
                  <th>No</th>
                  <th>Curriculum Year</th>
                  <th>Course Code</th>
                  <th>Course</th>
                  <th>Total Hour</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($teaching_history as $count=>$teaching_history)
                <tr>
                  <td>
                    {{ $count+1 }}
                  </td>
                  <td>
                    {{ $teaching_history->academic_year }}
                  </td>
                  <td>
                    {{ $teaching_history->course_code }}
                  </td>
                  <td>
                    {{ $teaching_history->name }}
                  </td>
                  <td>
                    {{ $teaching_history->total_hour }}
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
        @elseif(session('user_role') == "Dosen")
        <div class="card-header">
        <h3 class="card-title">Course Teaches</h3>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table" >
              <thead>
                <tr>
                  <th>No</th>
                  <th>Curriculum Year</th>
                  <th>Course Code</th>
                  <th>Course</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($course_teaches as $count=>$course_teaches)
                <tr>
                  <td>
                    {{ $count+1 }}
                  </td>
                  <td>
                    {{ $course_teaches->academic_year }}
                  </td>
                  <td>
                    {{ $course_teaches->course_code }}
                  </td>
                  <td>
                    {{ $course_teaches->name }}
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
        @else
        @endif
      </div>
        

        
                </div>
								</div>
                </div>
                </div>
								</div>
     
@stop