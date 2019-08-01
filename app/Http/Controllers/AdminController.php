<?php

namespace Blog\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function login(Request $request){
    	if($request ->isMethod('post')){
            $data =$request ->input();
            if(Auth::attempt(['email'=>$data['email'],'password'=>$data['password'],'admin'=>'1'])){
              return redirect('/admin/dashboard');
              /*Session::put('adminSession',$data['email']);*/
                /* echo "success"; die;*/
            }
            else{
                return redirect('/admin')->with('flash_message_error','Invalid username or password');
                //echo "failed"; die;
            }
        }
    	return view('admin.admin_login');
    }

    public function dashboard(){
    	return view('admin.dashboard');
    }

    public function chkPassword(Request $request){
        $data =$request->all();
        $current_password = $data['current_pwd'];
        $check_password = User::where(['admin'=>'1'])->first();
        if(Hash::check($current_password,$check_password->password)){
            echo "true";die;
        }
        else{
            echo "false";die;
        }
    }
      public function updatePassword(Request $request){
        if($request ->isMethod('post')){
            $data =$request->all();
            $check_password = User::where(['email'=>Auth::User()->email])->first();
            $current_password = $data['current_pwd'];
            if(Hash::check($current_password,$check_password->password)){
                $password=bcrypt($data['new_pwd']);
                User::where('id','1')->update(['password'=>$password]);
                return redirect('/admin/setting')->with('flash_message_success','password update succesfully');
            //echo "true";die;
        }
        else{
            return redirect('/admin/setting')->with('flash_message_error','incorrect current password');
        }
            //echo "<prev>";print_r($data); die;
        }
        
    }

    public function logout(){
        Session::flush();
        return redirect('/admin')->with('flash_message_success','logged out succesfully');
    } 
}
