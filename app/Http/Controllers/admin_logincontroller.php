<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class admin_logincontroller extends Controller
{
    public function index(){
        return view('admin_login');
    }
}
