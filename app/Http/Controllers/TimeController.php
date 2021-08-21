<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Room;
use App\Models\Classn;
use App\Models\Course;
use App\Models\Time;
use Illuminate\Database\Eloquent\Model;


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
    public function edit(Request $request,$id)
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
        
        
        $class = Classn::find($id);
        
        $room_id = Room::where(['roomname' => $request->roomname])->get()->toArray();
        $time_id = Time::where(['lesson' => $request->lesson, 'weekdays' => $request->weekdays])->get()->toArray();
        $room = Room::find($room_id[0]['id']);
        
        
        if (! ($room->time->contains($time_id[0]['id']))  ) {
            $class->room()->syncWithoutDetaching([ $room_id[0]['id'] => ['time_id' => $time_id[0]['id']]]);
            return redirect()->route('time.index');
            
            
        }else{
            
            
            return back()->with('message','Trùng lịch học, hãy chọn lịch trống!');
        }
        

        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
    }

    public function edittime($id,$idroom)
    {
        // $user = User::with('classn.course')->findOrFail($id);
        // return view('pagesAccount.showAccount',['user'=>$user]);
        $list = Room::with('classn.time')->findOrFail($idroom)->toArray();
        
        foreach($list['classn'] as $row){
            if($row['pivot']['id'] == $id){
                
                break;
            }
            
        }
        $class = Classn::find($row['pivot']['classn_id']);
        $room = Room::find($row['pivot']['room_id']);
        $time = Time::find($row['pivot']['time_id']);
        return view('pagesTime.edittime',['class'=>$class,'room'=>$room ,'time'=>$time ]);
    }
    public function destroytime($id,$idroom)
    {
        $list = Room::with('classn.time')->findOrFail($idroom)->toArray();
        
        foreach($list['classn'] as $row){
            if($row['pivot']['id'] == $id){
                
                break;
            }
            
        }

        $class = Classn::find($row['pivot']['classn_id']);
        $room = Room::find($row['pivot']['room_id']);
        $time = Time::find($row['pivot']['time_id']);
        $delete = Classn::find($class->id);
        $delete->room()->wherePivot('time_id', '=', $time->id)->detach([ $room->id ]);
        return redirect()->route('time.index');
    }

}
