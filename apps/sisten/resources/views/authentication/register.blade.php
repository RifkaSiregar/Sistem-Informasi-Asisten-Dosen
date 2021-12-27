<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="col-md-7 offset-md-2 mt-5">
            <div class="card">
                <div class="card-header">
                    <h3 class="text-center">SISTEN</h3>
                    <h3 class="text-center">Registration Form</h3>
                </div>
                <form action="/register" method="post">
                {{csrf_field()}}
                <div class="card-body">
                    @if(session('message'))
                    <div class="alert alert-danger" role="alert">
						{{ session('message') }}
					</div>
                    @endif
                    <div class="row">
                        <div class="form-group col-md-4">
                            <label for=""><strong>First Name</strong></label>
                            <input type="text" name="first_name" class="form-control" placeholder="First Name">
                            @error('first_name') <p style="color:red;">{{$message}}</p> @enderror
                        </div>
                        <div class="form-group col-md-4">
                            <label for=""><strong>Middle Name</strong></label>
                            <input type="text" name="middle_name" class="form-control" placeholder="Middle Name">
                            @error('middle_name') <p style="color:red;">{{$message}}</p> @enderror
                        </div>
                        <div class="form-group col-md-4">
                            <label for=""><strong>Last Name</strong></label>
                            <input type="text" name="last_name" class="form-control" placeholder="Last Name">
                            @error('last_name') <p style="color:red;">{{$message}}</p> @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label for=""><strong>Username</strong></label>
                        <input type="text" name="username" class="form-control" placeholder="Username">
						@error('username') <p style="color:red;">{{$message}}</p> @enderror
                    </div>
                    <div class="row">
                        <div class="form-group col-md-8">
                            <label for=""><strong>Study Program</strong></label>
                            <input type="text" name="study_program" class="form-control" placeholder="Study Program">
                            @error('study_program') <p style="color:red;">{{$message}}</p> @enderror
                        </div>
                        <div class="form-group col-md-4">
                            <label for=""><strong>Batch</strong></label>
                            <input type="text" name="batch" class="form-control" placeholder="Batch">
                            @error('batch') <p style="color:red;">{{$message}}</p> @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label for=""><strong>Registration Number (NIM/NIDN)</strong></label>
                        <input type="text" name="registration_number" class="form-control" placeholder="Registration Number">
						@error('registration_number') <p style="color:red;">{{$message}}</p> @enderror
                    </div>
                    <div class="form-group">
                        <label for=""><strong>Email</strong></label>
                        <input type="text" name="email" class="form-control" placeholder="Email">
						@error('email') <p style="color:red;">{{$message}}</p> @enderror
                    </div>
                    <div class="form-group">
                        <label for=""><strong>Password</strong></label>
                        <input type="password" name="password" class="form-control" placeholder="Password">
						@error('password') <p style="color:red;">{{$message}}</p> @enderror
                    </div>
                    <div class="form-group">
                        <label for=""><strong>Password Confirmation</strong></label>
                        <input type="password" name="password_confirmation" class="form-control" placeholder="Password Confirmation">
						@error('password_confirmation') <p style="color:red;">{{$message}}</p> @enderror
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary btn-block">Register</button>
                    <p class="text-center">Already have account? <a href="\">Login</a> here!</p>
                </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>