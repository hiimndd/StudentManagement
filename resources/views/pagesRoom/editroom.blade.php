@extends('layouts.Adminmaster')
@section('Adminmaster')



<div class="container">
    <h2>sửa thông tin phòng học</h2>
    
  <form action="{{route('room.update',$room['id'])}}" method="post">
  @method('put')
  @csrf
    <div class="form-group">
    
      <label for="maroom">Mã phòng :</label>
      <input type="text" class="form-control" value="{{ $room['id'] }}" id="malop" placeholder="mã lớp" name="id" disabled>
    </div>
    <div class="form-group">
        <label for="tenlop">Tên phòng học :</label>
        <input type="text" class="form-control" id="" value="{{ $room['roomname'] }}" placeholder="Tên phòng" name="roomname">
      </div>
      
    <button type="submit" class="btn btn-primary" name="btn_update">Lưu</button>
    <a href = "{{ route('room.index') }}" ><button  type="button" class="btn btn-primary">Hủy</button> </a>
    </form>
    
    @if(count($errors) > 0)
      <div class="alert alert-danger">
        @foreach($errors -> all() as $error)
          {{$error}}<br>
        @endforeach
      </div>
    @endif
    
    
  @if(session('notification'))
    <div class="alert alert-success">
      {{session('notification')}}
    </div>
  @endif

</div>
</div>
  @endsection