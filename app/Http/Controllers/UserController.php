<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    //


    public function user_list()
    {
       $user_list=User::all();
        return view('users.user_list',compact('user_list'));

    }
}
