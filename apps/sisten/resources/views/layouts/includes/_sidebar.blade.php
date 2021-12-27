<div id="sidebar-nav" class="sidebar">
			<div class="sidebar-scroll">
				@if(session('user_role') == 'Mahasiswa')
				<nav>
					<ul class="nav">
					<li><a href="/dashboard" class=""><i class="lnr lnr-home"></i> <span>Dashboard</span></a></li>
					<li><a href="/vacancy" class=""><i class="fa fa-tasks"></i> <span>Vacancies</span></a></li>
					<li><a href="/announcement" class=""><i class="lnr lnr-database"></i> <span>Announcement</span></a></li>
				</nav>
				@elseif(session('user_role') == 'Asisten Dosen')
				<nav>
					<ul class="nav">
					<li><a href="/dashboard" class=""><i class="lnr lnr-home"></i> <span>Dashboard</span></a></li>
					<li><a href="/vacancy" class=""><i class="fa fa-tasks"></i> <span>Vacancies</span></a></li>
					<li><a href="/tareport" class=""><i class="lnr lnr-book"></i> <span>Teaching Assistant Report</span></a></li>
					<li><a href="/logactivity" class=""><i class="lnr lnr-book"></i> <span>Log Activity </span></a></li>
					<li><a href="/announcement" class=""><i class="lnr lnr-database"></i> <span>Announcement</span></a></li>
					<li><a href="/schedules" class=""><i class="fa fa-calendar"></i> <span>Schedule</span></a></li>
				</nav>
				@elseif(session('user_role') == 'Dosen')
				<nav>
					<ul class="nav">
					<li><a href="/dashboard" class=""><i class="lnr lnr-home"></i> <span>Dashboard</span></a></li>
					<li><a href="/vacancymanagement" class=""><i class="fa fa-tasks"></i> <span>Vacancy Management</span></a></li>
					<li><a href="/applicationreport" class=""><i class="lnr lnr-book"></i> <span>Application Report</span></a></li>
					<li><a href="/logactivity" class=""><i class="lnr lnr-book"></i> <span>Log Activity </span></a></li>
					<li><a href="/courses" class=""><i class="lnr lnr-book"></i> <span>Course</span></a></li>
					<li><a href="/schedules" class=""><i class="fa fa-calendar"></i> <span>Schedule</span></a></li>
				</nav>
				@elseif(session('user_role') == 'Admin')
				<nav>
					<ul class="nav">
					<li><a href="/dashboard" class=""><i class="lnr lnr-home"></i> <span>Dashboard</span></a></li>
					<li><a href="/vacancy" class=""><i class="fa fa-tasks"></i> <span>Vacancies</span></a></li>
					<li><a href="/applicationreport" class=""><i class="lnr lnr-book"></i> <span>Application Report</span></a></li>
					<li><a href="/logactivity" class=""><i class="lnr lnr-book"></i> <span>Log Activity </span></a></li>
					<li><a href="/announcement" class=""><i class="lnr lnr-database"></i> <span>Announcement</span></a></li>
					<li><a href="/courses" class=""><i class="lnr lnr-book"></i> <span>Course</span></a></li>
					<li><a href="/schedules" class=""><i class="fa fa-calendar"></i> <span>Schedule</span></a></li>
					<li><a href="/logactivities" class=""><i class="fa fa-history"></i> <span>User Log Activity </span></a></li>
					<li><a href="/courseowner" class=""><i class="lnr lnr-book"></i> <span>Course Owner</span></a></li>
					<li><a href="/semesters" class=""><i class="fa fa-book"></i> <span>Semester</span></a></li>
					<li><a href="/users" class=""><i class="fa fa-users"></i> <span>User Management</span></a></li>
				</nav>
				@endif
			</div>
		</div>