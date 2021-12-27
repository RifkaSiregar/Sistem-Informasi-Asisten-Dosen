@extends('layouts.master')

@section('content')
<!-- MAIN -->
<div class="main">
	<!-- MAIN CONTENT -->
	<div class="main-content">
		<div class="container-fluid">
			<div class="panel panel-profile">
				<div class="clearfix">
					<!-- LEFT COLUMN -->
					<div class="profile-left">
						<!-- PROFILE HEADER -->
						<div class="profile-header">
							<div class="overlay"></div>

							<div class="profile-stat">
								<div class="row">
									<div class="text-center">
										<div class="col-xl-10 stat-item">
											{{$courses->course_code}} - {{$courses->course_initial}}
											<span>{{$courses->name}}</span>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- END PROFILE HEADER -->
						<!-- PROFILE DETAIL -->

						<div class="profile-detail">
							<div class="profile-info">
								<div class="col-md-7">
									<h4 class="heading">Curriculum</h4>
									<ul class="list-unstyled list-justify">
										<li>{{$courses->curriculum}}</li>
									</ul>
									<h4 class="heading">Academic Year</h4>
									<ul class="list-unstyled list-justify">
										<li>{{$courses->academic_year}}</li>
									</ul>
								</div>
							</div>
							<div class="profile-info">
								<h4 class="heading">Semester</h4>
								<ul class="list-unstyled list-justify">
									<li>{{$courses->semester_name}}</li>
								</ul>
								<h4 class="heading">Coordinator</h4>
								<ul class="list-unstyled list-justify">
									<li><a href>{{$courses->initial}}<a></li>
								</ul>
							</div>
							@if(session('user_role') == "Admin")
							<div class="text-center"><a></a> </div>
							@else
							<div class="text-center"><a href="/vacancy/create/{{$courses->semester_id}}" class="btn btn-info"><i class="fa fa-plus"></i>Vacancy</a></div>
							@endif
						</div>
						<!-- END PROFILE DETAIL -->
					</div>
					<!-- END LEFT COLUMN -->
					<!-- RIGHT COLUMN -->
					<div class="profile-right">


						<!-- TABBED CONTENT -->
						<div class="custom-tabs-line tabs-line-bottom left-aligned">
							<ul class="nav" role="tablist">
								<li class="active"><a href="#tab-bottom-left1" role="tab" data-toggle="tab">Schedule</a></li>
								<li><a href="#tab-bottom-left2" role="tab" data-toggle="tab">Report</a></li>
							</ul>
						</div>
						<div class="tab-content">
							<div class="tab-pane fade in active" id="tab-bottom-left1">
								<table class="table project-table">
									<thead>


										<tr>
											<th>Week </th>
											<th>Acitivity Type</th>
											<th>Date Time</th>
											<th>Teaching Assistant</th>

										</tr>
									</thead>
									<tbody>
										<tr>
											@foreach($schedules as $schedule)
										<tr>

											<td>{{$schedule->week}}</td>
											<td>{{$schedule->session_name}}</td>
											<td>{{date('l, d F Y H:i', strtotime($schedule->date_time))}}</td>
											<td>@foreach ($ta_initial as $initial) @if ($initial->schedule_id == $schedule->id) {{$initial->initial}} @endif @endforeach</td>
										</tr>
										@endforeach
									</tbody>
								</table>
								<div class="margin-top-30 text-center"><a href="/schedules" class="btn btn-default">See all schedule</a></div>
							</div>

							<div class="tab-pane fade" id="tab-bottom-left2">
								<div class="table-responsive">
									<table class="table project-table">
										<thead>


											<tr>
												<th>Week</th>
												<th>On Schedule</th>
												<th>Activity Type</th>
												<th>Send Date</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												@foreach($log_activities as $report)
												<td>{{$report->week}}</td>
												<td>{{date('l, d F Y H:i', strtotime($report->date_time))}}</td>
												<td>{{$report->activity_type}}</td>
												<td>{{$report->date_time}}</td>
											</tr>
											</tr>
											@endforeach
										</tbody>
									</table>
									<div class="margin-top-30 text-center"><a href="/report" class="btn btn-default">See all report</a></div>
								</div>
							</div>
						</div>
						<!-- END TABBED CONTENT -->
					</div>
					<!-- END RIGHT COLUMN -->
				</div>
			</div>
		</div>
	</div>
	<!-- END MAIN CONTENT -->
</div>
<!-- END MAIN -->
</div>
<!-- END WRAPPER -->

@stop