<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;

class hdv_homecontroller extends Controller
{
    public function index(){
        return view('pages.hdv_home');
    }
    public function show_hdv(Request $request){
        
        $id_hdv = $request->pid;
       
           
            
                echo $id_hdv;
            
        
        
    }
}
