<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Classn;
use App\Models\User;
class ClassController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Classn::All();    
        return view('pagesClass.indexclass',['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $course = Course::All();
        return view('pagesClass.addclass',['course'=>$course]);
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
            'classname' => "required|unique:classns,classname",
            'coursename' =>'required',

        ],[
            
            'classname.required' => 'Không bỏ tên lớp',
            'classname.unique' => 'Trùng tên lớp',
            'coursename.required' => 'Hãy chọn tên khóa học',
        ]);

        $data = new Classn();
        $data->classname = $request->classname;
        $data->course_id = $request->coursename;

        $data->save();
        return redirect()->route('class.create')->with('notification','Mở lớp thành công');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $class = Classn::All()
        ->where('id', '=', $id);   
        return view('pagesClass.showclass',['class'=>$class]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $class = Classn::find($id)->toArray();
        $course = Course::All()->where('id', '=',$class['course_id'] );
        $courselist = Course::All()->where('id', '!=',$class['course_id'] );
        return view('pagesClass.editclass',['class'=>$class,'course'=>$course,'courselist'=>$courselist]);
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
        $class = Classn::find($id);
        
        $this->validate($request,
        [
            'classname' => "required|unique:classns,classname,$id",
        ],[
            
            'classname.required' => 'Không bỏ tên lớp',
            'classname.unique' => 'Trùng tên lớp khác',
        ]);
       
        $class->classname = $request->classname;
        $class->course_id = $request->coursename;
        
        $class->save();
        return redirect()->route('class.index')->with('notification','cập nhât thành công!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $class = Classn::find($id);
        $class->delete();
        return redirect()->route('class.index')->with('notification','Xóa thành công!');
    }
    public function EditStudent($id)
    {
        $user = User::find($id)->toArray();
        return view('pagesClass.editstudent',['user'=>$user]);
    }
    public function UpdateStudent(Request $request, $id)
    {
        $user = User::find($id);
        
        $this->validate($request,
        [
            'email' => "required|email|unique:users,email,$id",
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
        
        
        $user->save();
        return redirect()->back()->with('notification','Sữa thành công!');
    }
    
}
