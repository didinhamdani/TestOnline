<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Requests;

class UserController extends Controller
{
    // public function users(User $user){
    //     $users = $user->all();
    //     return response()->json($users);
    // }

    public function signup(User $user){
        $users = $user->all();
        return response()->json($users);
    }

   
}
