<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdmindashController extends Controller
{
    public function index(){

        return view('layouts.admin_dash');
    }



}
