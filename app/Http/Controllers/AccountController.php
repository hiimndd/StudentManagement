<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AccountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $account = User::all();
        return view('pagesAccount.indexAccount',['account'=>$account]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pagesAccount.register');
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
        $user = User::All()->where('id', '=', $id);
        
        return view('pagesAccount.showAccount',['user'=>$user]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id)->toArray();
        return view('pagesAccount.editAccount',['user'=>$user]);
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
        $user = User::find($id);
        
        $this->validate($request,
        [
            'email' => "required|email|unique:accounts,email,$id",
            'name' => "required",
            'birthday' => 'required',
        ],[
            'email.unique' => 'Email này đã được sử dụng',
            'email.required' => 'Chúng tôi cần biết email của tài khoản',
            'email.email' => 'Email không đúng định dạng',
            'name.required' => 'Không bỏ trống tên đăng nhập',
            'birthday.required' => 'Đừng bỏ trắng dòng này ',
            
        ]);
       
        $user->name = $request->name;
        $user->birthday = $request->birthday;
        $user->email = $request->email;
        if(isset($request->checkbox)){
            $user->password = bcrypt("123");
        }
        
        $user->save();
        return redirect()->route('account.index')->with('notification','Sữa thành công!');
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
    public function indexfind(Request $request){
        // $account =array();
        if($request->permission == 0){
            $account = User::All();
        }else{
            $account = User::All()->where('permission', '=', $request->permission);
        }
        
        return view('pagesAccount.indexAccount',['account'=>$account]);
    }
    public function postlogin(Request $request){
        
         if(Auth::attempt(['username' => $request->username, 'password' => $request->password], true)){
             
         
             return redirect()->route('account.index')->with('notification','Wellcome');
         }
         else {
             return redirect()->route('login')->with('notification','Sai tên đăng nhập hoặt mật khẩu!');
         }
    }
    public function loguot(){
        // Auth::guard('backend')->loguot();
        Auth::logout();
        return redirect()->route('login');
    }
}
