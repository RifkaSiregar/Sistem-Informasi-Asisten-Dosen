<?php

namespace App\Http\Controllers;

use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\User;
use App\Models\Course;
use App\Models\UserLogActivity;
use App\Models\Vacancy;
use App\Models\Application;
use App;
use Validator;
use DB;

class AuthenticationController extends Controller
{
    public function index()
    {
        if (session('authenticated') != true) {
            return view('authentication/login');
        } else {
            return redirect('/dashboard');
        }
    }

    public function profile($registration_number)
    {
        $user = User::where('registration_number', $registration_number)->first();
        if (session('user_role') == "Asisten Dosen") {
            $teaching_history = DB::table('semester')
                ->join('course', 'semester.course_id', 'course.id')
                ->join('vacancy', 'semester.id', 'vacancy.semester_id')
                ->join('application', 'vacancy.id', 'application.vacancy_id')
                ->where('application.participant_registration_number', session('user_id'))
                ->where('application.decision', 1)
                ->get();
            return view('Authentication.profile', compact('user', 'teaching_history'));
        } else if (session('user_role') == "Dosen") {
            $course_teaches = DB::table('user_semester')
                ->join('semester', 'user_semester.semester_id', 'semester.id')
                ->join('course', 'semester.course_id', 'course.id')
                ->where('user_semester.user_id', $user->id)
                ->get();
            return view('Authentication.profile', compact('user', 'course_teaches'));
        } else {
            return view('Authentication.profile', compact('user'));
        }
    }

    public function profilesetting($registration_number)
    {
        $user = User::where('registration_number', $registration_number)->first();

        return view('Authentication.profilesetting', compact('user'));
    }

    public function profileupdate(Request $request)
    {
        $validate = request()->validate([
            'first_name' => 'required',
            'middle_name' => 'required',
            'last_name' => 'required',
        ]);

        //User::where()

        return view('Authentication.profilesetting', compact('user'));
    }

    public function dashboard()
    {
        if (session('user_role') == "Admin") {
            $users = User::all();
            $logs = UserLogActivity::all();
            return view('/dashboard', compact(['users', 'logs']));
        } else if (session('user_role') == "Dosen") {
            $vacancies = DB::table('vacancy')
                ->join('course', 'vacancy.course_code', '=', 'course.course_code')
                ->select('vacancy.*', 'course.course_initial', 'course.course_code')
                ->get();
            return view('/dashboard', compact('vacancies'));
        } else if (session('user_role') == "Asisten Dosen") {
            $activities = DB::table('log_activity')
                ->join('course', 'log_activity.course_initial', '=', 'course.course_initial')
                ->select('log_activity.*', 'course.name', 'course.course_code')
                ->get();
            return view('/dashboard', compact('activities'));
        } else if (session('user_role') == "Mahasiswa") {
            $vacancies = DB::table('vacancy')
                ->whereNotIn('vacancy.id', function ($q) {
                    $q->select('vacancy_id')->from('application');
                })
                ->join('course', 'vacancy.course_code', '=', 'course.course_code')
                ->select('vacancy.*', 'course.course_initial')
                ->get();
            return view('/dashboard', compact('vacancies'));
        } else if (session('user_role') == "Unverified User") {
            return view('/dashboard');
        }
    }

    public function login(Request $request)
    {
        $validate = request()->validate([
            'login_username' => 'required',
            'login_password' => 'required',
        ]);

        if (Auth::attempt(['username' => $request->login_username, 'password' => $request->login_password])) {
            $user = User::where('username', $request->login_username)->first();
            session(['authenticated' => true]);
            session(['username' => $user->username]);
            session(['user_id' => $user->registration_number]);
            $message = "User Login at : " . Carbon::now();
            App::call('App\Http\Controllers\UserLogActivityController@create', ['message' => $message]);
            if ($user->role == 4) {
                session(['user_role' => "Admin"]);
                return redirect('/dashboard');
            } else if ($user->role == 3) {
                session(['user_role' => "Dosen"]);
                return redirect('/dashboard');
            } else if ($user->role == 2) {
                session(['user_role' => "Asisten Dosen"]);
                return redirect('/dashboard');
            } else if ($user->role == 1) {
                session(['user_role' => "Mahasiswa"]);
                return redirect('/dashboard');
            } else if ($user->role == 0) {
                session(['user_role' => "Unverified User"]);
                return redirect('/dashboard');
            }
        } else {
            return redirect('/login')->with('login_message', 'Username or password incorrect');
        }
    }

    public function register(Request $request)
    {
        $validate = request()->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'study_program' => 'required',
            'batch' => 'required',
            'bank_name' => 'required',
            'bank_account_number' => 'required',
            'phone_number' => 'required',
            'username' => 'required',
            'email' => 'required|email',
            'password' => 'min:6|required_with:password_confirmation|same:password_confirmation',
            'password_confirmation' => 'min:6',
            'registration_number' => 'required',
        ]);

        $initial = 1;
        while (User::where('initial', $request->first_name . "00" . $initial)->first()) {
            $initial = $initial + 1;
        }

        $user = User::create([
            'first_name' => $request['first_name'],
            'middle_name' => $request['middle_name'],
            'last_name' => $request['last_name'],
            'study_program' => $request['study_program'],
            'batch' => $request['batch'],
            'username' => $request['username'],
            'bank_name' => $request['bank_name'],
            'bank_account_number' => $request['bank_account_number'],
            'phone_number' => $request['phone_number'],
            'initial' => $request->first_name . "00" . $initial,
            'email' => $request['email'],
            'password' => Hash::make($request['password'], [
                'memory' => 1024,
                'time' => 2,
                'threads' => 2,
            ]),
            'registration_number' => $request['registration_number'],
            'role' => 1,
        ]);
        event(new Registered($user));

        $message = "New registered user: $user->initial - $user->first_name $user->middle_name $user->last_name - $user->last_name";

        App::call('App\Http\Controllers\UserLogActivityController@event', ['message' => $message, 'user_id' => $user->id]);

        return redirect('/login')->with('registration_message', 'Registration success, please login');
    }

    public function emailverification($id, $hash)
    {
        $verify = User::where('id', $id)
            ->update(['email_verified_at' => Carbon::now()]);
        return redirect('/');
    }

    public function logout()
    {
        session()->flush();
        Auth::logout();
        return redirect('/login');
    }
}
