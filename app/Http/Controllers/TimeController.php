<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Room;
use App\Models\Classn;
use App\Models\Course;

class TimeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pagesTime.indextime');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $class = Classn::All();
        $room = Room::All();
        return view('pagesTime.addtime',['room'=>$room,'class'=>$class]);
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
            'roomname' => "required",
            'classname' =>'required',
            'lesson' =>'required',
            'weekdays' =>'required',

        ],[
            
            'roomname.required' => 'chọn phòng',
            'classname.required' => 'Hãy chọn lớp ',
            'lesson.required' => 'Hãy chọn tiết học',
            'weekdays.required' => 'Hãy chọn thứ trong tuần',
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
}
