<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class thanhtoancontroller extends Controller
{
    public function index(){
        return view('pages.thanhtoan');
    }
}
