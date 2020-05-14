<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class hdv_tourcontroller extends Controller
{
    public function index(){
        return view('pages.hdv_tour');
    }
    public function show_hdv($id_hdv){
        
           echo'1';
       }
}
