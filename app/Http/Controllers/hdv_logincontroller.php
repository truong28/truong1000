<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;


class hdv_logincontroller extends Controller
{
    public function index(){
        return view('pages.hdv_login');
     }
     public function login(Request $request){
        $hdv_username = $request->txtuser;
        $hdv_password = $request->txtpass;
        
        $result = DB::table('tk_hdv')->where('hdv_username',$hdv_username)->where('hdv_password',$hdv_password)->first();
        $ketqua =  DB::table('huong_dan_vien')->where('idhdv',$result->id)->get();
         if($result){
            Session::put('hdv_username',$result->hdv_username);
            Session::put('idhdv',$result->id);
            
           return  redirect::to('/hdv-home')->with('tenhdv',$hdv_username);
        
         }
         else{
            Session::put('message','Vui lòng nhập đúng thông tin!!');
            return redirect::to('/hdv_login');
         }

        
     }
     public function logout(){
      Session::forget('hdv_username');
      Session::forget('idhdv');
      return  redirect::to('/trang-chu');
   }
}
