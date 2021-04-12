<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,
        [
            'email' => 'required|email|unique:accounts,email',
            'username' => "required|unique:accounts,username",
            'password' => 'required',
            'password_confirmation' => 'required_with:password|same:password',
            'permission' => 'required',
        ],[
            'email.unique' => 'Email này đã được sử dụng',
            'email.required' => 'Chúng tôi cần biết email của tài khoản',
            'email.email' => 'Email không đúng định dạng',
            'username.required' => 'Không bỏ trống tên đăng nhập',
            'username.unique' => 'Tên Đăng nhập đã tồn tại',
            'password.unique' => 'Nhập mật khẩu',
            'password_confirmation.same' => 'Nhập sai khi xác nhận mật khẩu',
            'permission.required' => 'Xác định vai trò của tài khoản',
        ]);
        
        $data = new User();
        $data->name = $request->name;
        $data->birthday = $request->birthday;
        $data->username = $request->username;
        $data->email = $request->email;
        $data->password = bcrypt($request->password);
        $data->permission = $request->permission;

        $data->save();
        return redirect()->route('account.create')->with('notification','Đăng ký thành công');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    // public function login(){
        
    // }
    // public function postlogin(Request $request){
       
    //     if(Auth::attempt(['username' => $request->username, 'password' => $request->password], true)){
            
        
    //         return redirect()->route('home.index')->with('notification','Wellcome');
    //     }
    //     else {
    //         return redirect()->route('login')->with('notification','Sai tên đăng nhập hoặt mật khẩu!');
    //     }
    // }

    // public function register(){
    //     return view('pages.register');
    // }
    // public function postregister(Request $request){
        
    // }
    // public function loguot(){
    //     // Auth::guard('backend')->loguot();
    //     Auth::guard('backend')->logout();
    //     return redirect()->route('login');
    // }
}
