<?php

namespace App\Http\Controllers;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use Carbon\Carbon;
class chitiettourcontroller extends Controller
{
    public function index(){
        return view('pages.chitiettour');
    }
    public function show_tour($id_tour){
     $show_tour =  DB::table('dstour')->where('idtour',$id_tour)->get();
    
        return view('pages.chitiettour')->with('show_tour',$show_tour);
       
    }
   
    public function book($idtour,$key){
        $agree = Session::get('Key');
        
        if(isset($key)){
            $show =  DB::table('dstour')->where('idtour',$idtour)->first();
            Session::put('idtour',$idtour);
            $dt = Carbon::now('Asia/Ho_Chi_Minh');
            
            $tenkh = Session::get('username');
           $show_tour =  DB::table('dstour')->where('idtour',$idtour)->first();
               $ten= $show_tour->tentour;
              $ngay= $show_tour->ngay_di;
               $gio= $show_tour->gio_di;
               
               $nhantour=DB::insert('insert  ctnhantour (idctnhantour,gia,tenhdv,tenkh,ngay_di,gio_di,thoigianbook,idhdv,idtour) 
              values (?,?,?,?,?,?,?,?,?)', [ 0,0,0, $tenkh,$ngay,$gio,$dt,0,$idtour]);
        }
        if(isset($agree)){
            return redirect::to('thanh-toan');
            
        }
       
       } 
    
     
            
         
         
     
}
