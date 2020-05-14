<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;

use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Session;

class list_tourcontroller extends Controller
{
    public function index(){
        return view('pages.list_tour');
    }
    public function all_tour(){
        $all_tour= DB::table('dstour')->get();
        
        
        return view('pages.list_tour')->with('all_tour',$all_tour);

        
    }
}