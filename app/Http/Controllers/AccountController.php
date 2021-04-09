<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class AccountController extends Controller
{
    public function login(){
        return view('pages.login');
    }
    public function postlogin(Request $request){
       
        if(Auth::attempt(['username' => $request->username, 'password' => $request->password], true)){
            
        
            return redirect()->route('home.index')->with('notification','Wellcome');
        }
        else {
            return redirect()->route('login')->with('notification','Sai tên đăng nhập hoặt mật khẩu!');
        }
    }

    public function register(){
        return view('pages.register');
    }
    public function postregister(Request $request){
        $this->validate($request,
        [
            'email' => 'required,email',
            'username' => "required,unique:user_models,username",
            'password_confirmation' => 'required_with:password|same:password'
        ],[
            'email.required' => 'Chúng tôi cần biết email của tài khoản',
            'email.email' => 'Email không đúng định dạng',
            'username.required' => 'Không bỏ trống tên đăng nhập',
            'username.unique' => 'Tên Đăng nhập đã tồn tại',
            'password_confirmation.same' => 'Nhập sai khi xác nhận mật khẩu',
        ]);
        $data = new User();
        $data->hoten = $request->name;
        $data->birthday = $request->birthday;
        $data->username = $request->username;
        $data->email = $request->email;
        $data->password = bcrypt($request->password);
        $data->permission = "jahsd";

        $data->save();
        return redirect()->route('')->with('notification','Đăng ký thành công, giờ bạn có thể đăng nhập');
    }
    public function loguot(){
        // Auth::guard('backend')->loguot();
        Auth::guard('backend')->logout();
        return redirect()->route('login');
    }
}
