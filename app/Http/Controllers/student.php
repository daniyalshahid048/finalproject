<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\employee;
use app\ddd;
use DB;
class student extends Controller
{
    public function adminlog(Request $s){
     $u=$s->input('u');
     $p=$s->input('p');
     $data= DB::select("select * from employees where user='$u' && password='$p'");
     if($data){
        $s->session()->put('username',$u);
      
        $s->session()->put('password',$p);
       
        return view('addmin');
     }
     else{
         echo "Wrong password";
         return view('admin_login');
     }
    }
    public function adminget(Request $s){
        if($s->session()->has('username') &&$s->session()->has('password')){
            //echo $s->session()->get('username');
            return view('addmin');
        }
        else{
            
            return view('admin_login');
        }
    }
    public function admingetdestroy(Request $request){
         //echo $request->session()->get('username');
        $request->session()->forget('username');
        $request->session()->forget('password');
        return view('index');
    }
    public function adminlog1(Request $s){

        $u=$s->input('u');
     $p=$s->input('p');
     $ph=$s->input('ph');
     $s=$s->input('s');
     $a='nothing assign';
     $su='no project give';
     $r='no project make';
     DB::insert("insert into students(username,password,phone,developlang,assignt,submitt,rating) values(?,?,?,?,?,?,?)",[$u,$p,$ph,$s,$a,$su,$r]);

   //  $data=array('username'=>$u,'password'=>$p,'phone'=>$ph,'developlang'=>$s);





  //  DB::table('students')->insert($data);
     return view('addmin');
    }
    public function adminlog2(Request $s){
        $data= DB::select("select username,password,phone,developlang from students");
                       return view('removeemployee')->withd($data);
    }
    public function admindel(Request $s){
        $u=$s->input('d');
        $data=DB::delete("delete from students where username='$u'");
      
        return redirect()->action('student@adminlog2');
    }
    public function admindisplay(Request $s){
       // $data= DB::select("select username,password,phone,developlang from students") ->orderBy('rating', 'asc');
       //$data = students::orderBy('id','desc')->paginate(10);
       // $data = DB::table('students')->orderBy('rating','desc');

       // $data = DB::table('students')->orderBy('rating','desc');
     //  $data = students::orderBy('rating', 'desc')->get();
     $data = DB::table('students')->orderBy('rating', 'asc')->get();
                       return view('avai')->withd($data);
    }
    public function admindisplayy(Request $s){
        $data= DB::select("select username,password,phone,developlang from students");
                        return view('taskass')->withd($data);
     }
     public function admindisplayy1(Request $s){
        $a=$s->input('s');
        $data= DB::select("select username,password,phone,developlang from students where developlang='$a'");
      

        return view('taskass1')->withd($data);
        
     }
     public function admindisplayy2(Request $s){
        $sa=$s->input('s');
        $user=$s->input('user');
       
        $data=DB::update("update students set assignt='$sa' where username='$user'");
        //$data= DB::select("select username,password,phone,developlang from students where developlang='$s'");
        

        //return view('taskass1')->withd($data);
     
        
        return redirect()->action('student@admindisplayy');
     }
     public function elog1(Request $s){
        $u=$s->input('u');
        $p=$s->input('p');
        $data= DB::select("select * from students where username='$u' && password='$p'");
        if($data){
           $s->session()->put('u',$u);
         
           $s->session()->put('p',$p);
           $da= DB::select("select username,password,phone,developlang,assignt from students where username='$s'");

           return view('employee1')->withd($da);
        }
        else{
            echo "Wrong password";
            return view('employlog');
        }
        
     }
     public function elog2(Request $s){
        if($s->session()->has('u') &&$s->session()->has('p')){
            //echo $s->session()->get('username');
            $da= DB::select("select username,password,phone,developlang,assignt from students where username='$s'");

            return view('employee1')->withd($da);
        }
        else{
            
            return view('employlog');
        }

     }
     
     public function elog3(Request $s){
        $s->session()->forget('u');
        $s->session()->forget('p');
        return view('index');

     }
     
     public function acc(Request $a){
       $s =$a->session()->get('u');
       
      
        $data= DB::select("select username,password,phone,developlang,assignt from students where username='$s'");
        
        return view('employee1')->withd($data);

      
      

     }
     public function subm(Request $a){
        $s=$a->input('p');
       
        $z =$a->session()->get('u');
 
        DB::update("update students set submitt='$s' where username='$z'");

        $data= DB::select("select username,password,phone,developlang,assignt from students where username='$s'");
        
        return view('employee1')->withd($data);
 
      }
      public function done(){
       

        $data= DB::select("select username,phone,developlang,assignt,submitt from students");
        
        return view('donetask')->withd($data);
 
      }
      public function rate(Request $a){
        $u=$a->input('p');
        $r=$a->input('r');

        DB::update("update students set rating='$r' where username='$u'");        
        
        return view('addmin');
 
      }
      public function bvv(Request $a){
        $z =$a->session()->get('u');

        $data= DB::select("select username,developlang,assignt,rating from students where username='$z'");
        
      
        return view('assrating')->withd($data);
      }
      
    }
  
       


