<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class gioithieucontroller extends Controller
{
    public function index(){
        return view('pages.gioithieu');
    }
}
