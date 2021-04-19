@extends('layouts.Adminmaster')
@section('Adminmaster')
<div class="container">

    
    <h2>THÊM PHÒNG HỌC</h2>
    
  <form action="{{route('room.store')}}" method="POST">
  @csrf
    <div class="form-group">
    
      <label for="hoten">Tên phòng học :</label>
      
      <input type="text" class="form-control" id="roomname"  value="" placeholder="Tên phòng học" name="roomname">
      @if($errors->has('roomname'))
        <div class="form-row">
        <div class="alert alert-danger">
          {{$errors->first('roomname')}}
        </div>
        </div>
      @endif 
    </div>
    
  
    <button type="submit" class="btn btn-primary btn-user btn-block">
                    Thêm phòng học
                </button>
    

  </form>
  
  
  @if(session('notification'))
    <div class="alert alert-success">
      {{session('notification')}}
    </div>
  @endif
</div>
</div>
@endsection




                                      
