<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Http\Request;
use app\Models\User;
use DB;

class TAStudentRoleMiddleware extends Authenticatable
{
    use HasRoles;
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $user = DB::table('user')->where('registration_number', session('user_id'))->first();
        if($user->role == 2 || $user->role == 1){
            return $next($request);
        }
        abort(403, 'Unauthorized action.');
    }
}
