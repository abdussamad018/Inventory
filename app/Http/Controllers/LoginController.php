<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;

class LoginController extends Controller
{
public function LoginPage(){
    return view('login');
}
    public function login(Request $request){
        $email=$request->email;
        $password=$request->password;
        $login=Users::where('Email','=',$email)->where('Password','=',$password)->count();
        $result=Users::where('Email','=',$email)->where('Password','=',$password)->first();
        if($login==1 && $result->Status=="Active"){
            session()->put('sess_id',$result->Id);
            session()->put('sess_name',$result->FULL_name);
            session()->put('sess_email',$result->Email);
            session()->put('sess_role',$result->Role);
            return redirect('deasboard');
        }else{
            return 'User Or Password Wrong';
        }
    }
    public function logout(Request $request){
        $request->session()->flush();
        return redirect('/');
    }
    
}
