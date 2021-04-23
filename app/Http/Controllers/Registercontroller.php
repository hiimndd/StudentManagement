<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\User;
use Illuminate\Http\Request;

class Registercontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = User::all()->where('permission', '=', 2);
        
        return view('pagesRegister.indexregister',['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $course = Course::All();
        return view('pagesRegister.addregister',['course'=>$course]);
    }
    public function getClassesByCourseId(Request $request)
    {
        $classes = Course::findOrFail($request->courseId)->classn; 
        // dd($class);
        //return view('pagesRegister.addregister',['course'=>$course]);
        
        return response()->json([
            'classes' => $classes,
        ]);
        
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
            'id' => "required",
            'coursename' =>'required',
            'classname' =>'required',

        ],[
            
            'coursename.required' => 'Hãy chọn khóa học mong muốn',
            'id.required' => 'Nhập mã sinh viên',
            'classname.required' => 'chọn tên lớp',
        ]);
        
        $id = User::where(['id' => $request->id, 'permission' => 2])->get(); 
        if(count($id) == 0){
            return redirect()->route('register.create')->with('notificationer','Mã sinh viên chưa được đăng ký');
        }

       
        

        $data = User::find($request->id);
        $data->classn()->syncWithoutDetaching([$request->classname]);
        return redirect()->route('register.create',$request->classname)->with('notification','Đăng ký thành công');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::with('classn.user')->find($id);
        return view('pagesRegister.showregister',['user'=>$user]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
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
}
