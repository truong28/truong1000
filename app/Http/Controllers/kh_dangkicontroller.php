<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;

class kh_dangkicontroller extends Controller
{
    public function index(){
        return view('pages.kh_dangki');
    }

   
     public function sigup(Request $request){
         $kh_username = $request->txtuser;
         $kh_password = $request->txtpass;
         $kh_email = $request->txtemail;
         $kh_phone = $request->txtphone;


         $test = DB::table('taikhoan_khach')->where('username',$kh_username)->first();
         if($test){
            session::put('message','Tên Không được trùng!');
            return redirect::to('/kh_dangki');
           
         }else{
            $ketqua = DB::insert('insert into taikhoan_khach (id,username,password,email,sodienthoai,phanquyen) 
            values (?,?,?,?,?,?)', [ 0, $kh_username,$kh_password,$kh_email,$kh_phone,0]);
            if($ketqua){
 
            return  redirect::to('/trang-chu');
          
              
          }else{
             session::put('message','Đăng kí không thành công');
             return redirect::to('/kh_dangki');
          }
 
         }

         
         
      }
}

   
     

