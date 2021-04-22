<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Classn;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Course::all();
        return view('pagesCourse.indexcourse',['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pagesCourse.addcourse');
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
            'coursename' => 'required|unique:courses,coursename',
            
        ],[
            'coursename.unique' => 'Trùng tên khóa học',
            'coursename.required' => 'Chúng tôi cần biết tên khóa học',
           
        ]);
        
        $data = new Course();
        $data->coursename = $request->coursename;

        $data->save();
        return redirect()->route('course.create')->with('notification','Thêm thành công');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        $course = Course::All()
        ->where('id', '=', $id);   
        return view('pagesCourse.showcourse',['course'=>$course]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $course = Course::find($id);
        return view('pagesCourse.editcourse',['course'=>$course]);
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
        $course = Course::find($id);
        
        $this->validate($request,
        [
            'coursename' => 'required',
            'coursename' => "required|unique:courses,coursename,$id"
        ],[
            'coursename.required' => 'Không bỏ trống tên khóa học',
            'coursename.unique' => 'Khóa học này đã tồn tại'
        ]);
        
        $course->coursename = $request->coursename;
        $course->save();
        return redirect()->route('course.index',$id)->with('notification','Sữa thành công!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $course = Course::find($id);
        $course->delete();
        return redirect()->route('course.index')->with('notification','Xóa thành công!');
    }
}
