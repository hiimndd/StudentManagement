<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Room;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Room::all();
        
        return view('pagesRoom.indexroom',['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pagesRoom.addroom');
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
            'roomname' => 'required|unique:courses,coursename',
            
        ],[
            'roomname.unique' => 'Trùng tên phòng học',
            'roomname.required' => 'Chúng tôi cần biết tên phòng học',
           
        ]);
        
        $data = new Room();
        $data->roomname = $request->roomname;

        $data->save();
        return redirect()->route('room.create')->with('notification','Thêm thành công');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $room = Room::All()
        ->where('id', '=', $id);   
        return view('pagesRoom.showroom',['room'=>$room]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $room = Room::find($id);
        return view('pagesRoom.editroom',['room'=>$room]);
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
        $room = Room::find($id);
        
        $this->validate($request,
        [
            'roomname' => "required|unique:courses,coursename,$id"
        ],[
            'roomname.required' => 'Không bỏ trống tên phòng học',
            'roomname.unique' => 'phòng học này đã tồn tại'
        ]);
        
        $room->roomname = $request->roomname;
        $room->save();
        return redirect()->route('room.index',$id)->with('notification','Sữa thành công!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Room = Room::find($id);
        $Room->delete();
        return redirect()->route('room.index')->with('notification','Xóa thành công!');
    }
}
