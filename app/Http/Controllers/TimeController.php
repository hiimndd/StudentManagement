<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Room;
use App\Models\Classn;
use App\Models\Course;
use App\Models\Time;

class TimeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $room = Room::All();
        $class = Room::with('time.classn')->findOrFail(1);
        
       
        return view('pagesTime.indextime',['class'=>$class,'room'=>$room]);
        
        
        
    }
    public function indexfind(Request $request)
    {
        if(isset($request->roomname)){
            $keepvl = Room::find($request->roomname);
            $room = Room::All()->where('id', '!=', $request->roomname);
            $class = Room::with('time.classn')->findOrFail($request->roomname);
            
            return view('pagesTime.indextime',['class'=>$class,'room'=>$room,'keepvl' => $keepvl]);
        }
        
        
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
        
        
        $time_id = Time::where(['lesson' => $request->lesson, 'weekdays' => $request->weekdays])->get()->toArray(); 
        
        $class = Classn::find($request->classname);
        


        if (! ($class->time->contains($time_id[0]['id']))  ) {
                $class->time()->attach($time_id[0]['id'], ['room_id' => $request->roomname]);
            
            
        }else{
            return redirect()->route('time.create')->with('notificationer','Trùng lịch học, hãy chọn lịch trống!');
        }
        
        return redirect()->route('time.create')->with('notification','Đăng ký lịch học thành công');
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
