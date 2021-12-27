<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Transformers\UserTransformer;

class UserController extends Controller
{
    public function users(User $user){
    
    $users = $user->all();
    return response()->json($users);   
    }

}
