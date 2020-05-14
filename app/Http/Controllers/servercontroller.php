<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Carbon\Carbon;

class servercontroller extends Controller
{
    public function index(){
        return view('pages.server');
    }
  
           
    // public function insert(){
    //     $dt = Carbon::now('Asia/Ho_Chi_Minh');
    //     $id_tour = Session::get('idtour');
    //     $tenkh = Session::get('username');
    //     $show_tour =  DB::table('dstour')->where('idtour',$id_tour)->first();
    //        $ten= $show_tour->tentour;
    //        $ngay= $show_tour->ngay_di;
    //        $gio= $show_tour->gio_di;
           
    //         $nhantour=DB::insert('insert  ctnhantour (idctnhantour,gia,tenhdv,tenkh,ngay_di,gio_di,thoigianbook,idhdv,idtour) 
    //        values (?,?,?,?,?,?,?,?,?)', [ 0,0,0, $tenkh,$ngay,$gio,$dt,0,$id_tour]);
    //        if($nhantour){
    //         echo '2';
               
               
    //        }else{
    //            echo '2';
    //        }
           
    //        return  view('pages.server');
    
           
       //}

       
       public function show(){
        $id_tour = Session::get('idtour');
        $user= Session::get('hdv_username');
        $id =  Session::get('idhdv');
      
        

        if(Session::has('hdv_username') and Session::has('idhdv') and Session::has('idtour') ){

            $show_tourhdv = DB::table('huong_dan_vien')->join('dstour','huong_dan_vien.idtour','=','dstour.idtour')
            ->where('huong_dan_vien.idtour',$id_tour)->get();
          

            
            return view('pages.hdv_tour')->with('show_tourhdv',$show_tourhdv);
             
               
            
            
        }
       
       }  
      
       public function agree($key){
        $id_tour = Session::get('idtour');
        $user= Session::get('hdv_username');
        $id =  Session::get('idhdv');
      
       
        if($key='agree'){

            $updated = DB::table('ctnhantour')->where('idtour', $id_tour)->update(['tenhdv' => $user]);
            $updated1 = DB::table('ctnhantour')->where('idtour', $id_tour)->update(['idhdv' => $id]);
               
            Session::put('Key',$key);
            return redirect::to('/tour_agree');
        }
       
       }     
       public function tour_agree(){
        $id_tour = Session::get('idtour');
             $xem_tour = DB::table('ctnhantour')->join('dstour','ctnhantour.idtour','=','dstour.idtour')->where('ctnhantour.idtour','=',$id_tour)
           ->get();

 return view('pages.tour_agree')->with('xem_tour',$xem_tour); 
        }
       
     
       
}