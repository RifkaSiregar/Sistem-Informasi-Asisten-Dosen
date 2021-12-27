<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

    <style>
        .card.login {
            padding: 15px 36px 36px 36px;
        }

        /* .login-form {
            margin-top: 10% !important
        } */

        .registration {
            margin-left: 30px
        }
    </style>
</head>

<body>
    <div class="text-center">
        <br>
        <h1>Sistem Informasi Asisten Dosen</h1>
    </div>
    <div class="container-fluid d-flex justify-content-center">
        <div class="col-md-4 mt-5 login-form">
            <div class="card login">
                <div class="vertical-align-wrap">
                    <div class="vertical-align-middle form">
                        <div class="auth-box">
                            <div class="content">
                                <div class="header ">
                                    <h3 class="heading" style="text-align: center">Login Form</h3>
                                    <div class="logo text-center"><img src="{{asset('admin/sisten.jpg')}}"
                                            alt="Sisten Logo">
                                    </div>
                                    <p class="lead"></p>
                                </div>

                                <form class="form-auth-small" action="/login" method="POST">
                                    {{csrf_field()}}
                                        @if(session('login_message'))
                                        <div class="alert alert-danger alert-dismissible" role="alert">
                                            {{ session('login_message') }}</li>
                                        </div>
                                        @endif
                                    <div class="form-group">
                                        <label for="login_username" class="control-label sr-only">Username</label>
                                        <input name="login_username" type="username" class="form-control" id="login_username" placeholder="Username" autocomplete="off">
                                        @error('login_username') <p style="color:red;">{{$message}}</p> @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="login_password" class="control-label sr-only">Password</label>
                                        <input name="login_password" type="password" class="form-control" id="login_password" placeholder="Password">
                                        @error('login_password') <p style="color:red;">{{$message}}</p> @enderror
                                    </div>


                                    <button type="submit" class="btn btn-primary btn-lg btn-block">LOGIN</button>
                                </form>

                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
        <div class="col-md-7 mt-5 mb-5 registration">
            <div class="card">
                <div class="pt-3">
                    <h3 class="text-center">Registration Form</h3>
                </div>
                <form action="/register" method="post">
                    {{csrf_field()}}
                        
                    <div class="card-body">
                        @if(session('registration_message'))
                        <div class="alert alert-success alert-dismissible" role="alert">
                            {{ session('registration_message') }}</li>
                        </div>
                        @endif
                        
                        <div class="row pt-0">
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
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for=""><strong>Username</strong></label>
                                <input type="text" name="username" class="form-control" placeholder="Username">
                                @error('username') <p style="color:red;">{{$message}}</p> @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <label for=""><strong>Email</strong></label>
                                <input type="text" name="email" class="form-control" placeholder="Email">
                                @error('email') <p style="color:red;">{{$message}}</p> @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for=""><strong>Study Program</strong></label>
                                <input type="text" name="study_program" class="form-control"
                                    placeholder="Study Program">
                                @error('study_program') <p style="color:red;">{{$message}}</p> @enderror
                            </div>
                            <div class="form-group col-md-2">
                                <label for=""><strong>Batch</strong></label>
                                <input type="text" name="batch" class="form-control" placeholder="Batch">
                                @error('batch') <p style="color:red;">{{$message}}</p> @enderror
                            </div>
                            <div class="form-group col-md-4">
                                <label for=""><strong>Reg. Number (NIM/NIDN)</strong></label>
                                <input type="text" name="registration_number" class="form-control"
                                    placeholder="Registration Number">
                                @error('registration_number') <p style="color:red;">{{$message}}</p> @enderror
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="form-group col-md-2">
                                <label for=""><strong>Bank Name</strong></label>
                                <input type="text" name="bank_name" class="form-control" placeholder="Bank">
                                @error('bank_name') <p style="color:red;">{{$message}}</p> @enderror
                            </div>
                            <div class="form-group col-md-5">
                                <label for=""><strong>Account Number</strong></label>
                                <input type="text" name="bank_account_number" class="form-control"
                                    placeholder="Account Number">
                                @error('bank_account_number') <p style="color:red;">{{$message}}</p> @enderror
                            </div>
                            <div class="form-group col-md-5">
                                <label for=""><strong>Phone Number</strong></label>
                                <input type="text" name="phone_number" class="form-control" placeholder="Phone Number">
                                @error('phone_number') <p style="color:red;">{{$message}}</p> @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for=""><strong>Password</strong></label>
                            <input type="password" name="password" class="form-control" placeholder="Password">
                            @error('password') <p style="color:red;">{{$message}}</p> @enderror
                        </div>
                        <div class="form-group">
                            <label for=""><strong>Password Confirmation</strong></label>
                            <input type="password" name="password_confirmation" class="form-control"
                                placeholder="Password Confirmation">
                            @error('password_confirmation') <p style="color:red;">{{$message}}</p> @enderror
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary btn-block">Register</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>