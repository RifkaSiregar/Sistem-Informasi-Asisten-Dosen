<!doctype html>
<html lang="en" class="fullscreen-bg">

<head>
	<title>Login</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="{{asset('admin/assets/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('admin/assets/vendor/font-awesome/css/font-awesome.min.css')}}">
	<link rel="stylesheet" href="{{asset('admin/assets/vendor/linearicons/style.css')}}">
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="{{asset('admin/assets/css/main.css')}}">
	<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
	<link rel="stylesheet" href="{{asset('admin/assets/css/demo.css')}}">
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<!-- ICONS -->
	<link rel="apple-touch-icon" sizes="76x76" href="{{asset('admin/assets/img/apple-icon.png')}}">
	<link rel="icon" type="image/png" sizes="96x96" href="{{asset('admin/assets/img/favicon.png')}}">
</head>

<body>
	<!-- WRAPPER -->
	<div id="wrapper">
		<div class="vertical-align-wrap">
			<div class="vertical-align-middle">
				<div class="auth-box ">
					<div class="left">
						<div class="content">
							<div class="header">
								<h1 class="heading" style="text-align: center">Sistem Informasi Asisten Dosen</h1>
								<div class="logo text-center"><img src="{{asset('admin/sisten.jpg')}}" alt="Sisten Logo"></div>
								<p class="lead">Login</p>
							</div class ="form-group">
							
							<form class="form-auth-small" action="/login" method="POST">
                            {{csrf_field()}}
							@if(session('message'))
							<div class="alert alert-danger alert-dismissible" role="alert">
								{{ session('message') }}</li>
							</div>
                    		@endif
							<div class="form-group">
											<label for="username" class="control-label sr-only">Username</label>
											<input name="username" type="username" class="form-control" id="username" placeholder="Username">
											@error('username') <p style="color:red;">{{$message}}</p> @enderror
										</div>
										<div class="form-group">
											<label for="password" class="control-label sr-only">Password</label>
											<input name="password" type="password" class="form-control" id="password" placeholder="Password">
											@error('password') <p style="color:red;">{{$message}}</p> @enderror
										</div>
								
								
										<button type="submit" class="btn btn-primary btn-lg btn-block">LOGIN</button>
										<div class="card-footer">
						</div>	
						</form>

						</div>
					</div>
					<div class="right">
						<div class="overlay"></div>
						<div class="content text">
						<p class="lead"></p>
						<div class="heading">
						<h1 style="text-align: center">Register</h1>
						</div><br>
	
						<form class="form-group" action="/register" method="POST">
                            {{csrf_field()}}
							<div class="form-group">
								<label for="username" class="control-label sr-only">E-mail</label>
								<input name="username" type="username" class="form-control" id="email" placeholder="E-mail">
								@error('username') <p style="color:red;">{{$message}}</p> @enderror
							</div>
							<div class="form-group">
								<label for="username" class="control-label sr-only">Username</label>
								<input name="username" type="username" class="form-control" id="username" placeholder="Username">
								@error('username') <p style="color:red;">{{$message}}</p> @enderror
							</div>
							<div class="form-group">
								<label for="password" class="control-label sr-only">Password</label>
								<input name="password" type="password" class="form-control" id="password" placeholder="Password">
								@error('password') <p style="color:red;">{{$message}}</p> @enderror
							</div>
							<div class="form-group">
								<label for="password" class="control-label sr-only">Password Confirmation </label>
								<input name="password" type="password" class="form-control" id="password_confirmation" placeholder="Password Confirmation">
								@error('password') <p style="color:red;">{{$message}}</p> @enderror
							</div>
					
							<button type="submit" class="btn btn-primary btn-lg btn-block">REGISTER</button>
							<div class="card-footer">
						</div>	
						</form>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div>
	<!-- END WRAPPER -->
</body>

</html>
