<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect; 

class vung_miencontroller extends Controller
{
    public function index()
    {
        return view('pages.vung_mien');
    }
    public function show($ten_vung){
        $showvung =  DB::table('dstour')->where('tenvung',$ten_vung)->get();
     
           return view('pages.vung_mien')->with('showvung',$showvung);
           
       }
}
