<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect; 
class searchcontroller extends Controller
{
   
    
    
        public function index()
        {
            return view('pages.search');
        }
        public function showsearch(Request $request){
           $tensearch = $request->txtsearch;
      
        
        $ketqua = DB::table('dstour')->where('tentour', 'like', '%'.$tensearch.'%')->get();
     
        if($ketqua){
            
            return view('pages.search')->with('ketqua',$ketqua);
          
            
        }
        else{
            Session::put('message','Tour không tồn tại!!');
            return redirect::to('/search');
        }
        
        
            
            
             
        

        }
    
    
}
