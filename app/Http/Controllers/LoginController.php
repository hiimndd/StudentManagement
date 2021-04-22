<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function postlogin(Request $request){
        
        if(Auth::attempt(['username' => $request->username, 'password' => $request->password], true)){
            
           
           if(Auth::user()->permission === 1){
               return redirect()->route('account.index')->with('notification','Wellcome');
           }else{
               return redirect()->route('schedule.index');
           }
             
        }
        else {
           
            return back()->withErrors([
                'password' => ['Sai tên đăng nhập hoặt mật khẩu!']
            ]);
        }
   }
   public function loguotadmin(){
       // Auth::guard('backend')->loguot();
       Auth::logout();
       return redirect()->route('login');
   }
}
