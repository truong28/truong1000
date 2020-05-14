<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
class kh_logincontroller extends Controller
{
    public function index(){
       return view('pages.kh_login');
    }
    public function login(Request $request){
        $kh_username = $request->txtuser;
        $kh_password = $request->txtpass;
        
        $ketqua = DB::table('taikhoan_khach')->where('username',$kh_username)->where('password',$kh_password)->first();
         if($ketqua){

            Session::put('username',$ketqua->username);
            Session::put('kh_id',$ketqua->id);
           return  redirect::to('/trang-chu');
            
             
         }
         else{
            session::put('message','Vui lòng nhập đúng thông tin!!');
            return redirect::to('/kh_login');
         }

        
     }
     public function logout(){
        Session::put('username',null);
        Session::put('kh_id',null);
        return  redirect::to('/trang-chu');
     }
}
