@extends('layouts.Adminmaster')
@section('Adminmaster')
<div class="container">

    
    <h2>Đăng ký lịch học</h2>
    @if(session('notification'))
    <div class="alert alert-success">
      {{session('notification')}}
    </div>
     @endif
     @if(session('notificationer'))
    <div class="alert alert-danger">
      {{session('notificationer')}}
    </div>
     @endif
  <form action="{{route('time.store')}}" method="POST">
  @csrf
    <div class="form-group">
        <label for="classname">Chọn phòng :</label>
        <div class="form-row">
        
        <select name="roomname" class="form-control formselect required" placeholder="Select Category"
            id="sub_category_name">
            <option   value="0" disabled selected>Chọn phòng học</option>
                @foreach($room as $row)
                    <option  value="{{ $row->id }}">
                        {{ ucfirst($row->roomname) }}
                    </option>
                @endforeach
        </select>
        @if($errors->has('roomname'))
        <div class="form-row">
        <div class="alert alert-danger">
          {{$errors->first('roomname')}}
        </div>
        </div>
        @endif
        
        </div>
      
      </div>

      <div class="form-group">
        <label for="classname">Chọn lớp học :</label>
        <div class="form-row">
        
        <select name="classname" class="form-control formselect required" placeholder="Select Category"
            id="sub_category_name">
            <option   value="0" disabled selected>Chọn lớp học</option>
                @foreach($class as $row)
                    <option  value="{{ $row->id }}">
                        {{ ucfirst($row->classname) }}
                    </option>
                @endforeach
        </select>
        @if($errors->has('classname'))
        <div class="form-row">
        <div class="alert alert-danger">
          {{$errors->first('classname')}}
        </div>
        </div>
        @endif
        
        </div>
      
      </div>

      <div class="form-group">
        <label for="classname">Tiết học :</label>
        <div class="form-row">
        
        <select name="lesson" class="form-control formselect required" placeholder="Select Category"
            id="sub_category_name">
            <option   value="0" disabled selected>Chọn tiết học</option>
            <option value="1">Tiết 1(9:00-10:30)</option>
            <option value="2">Tiết 2(10:30-:12:00)</option>
            <option value="3">Tiết 3(14:00-15:30)</option>
            <option value="5">Tiết 4(15:30-17:00)</option>
            <option value="6">Tiết 5(17:00-18:30)</option>
            <option value="7">Tiết 6(18:30-20:00)</option>
        </select>
        @if($errors->has('lesson'))
        <div class="form-row">
        <div class="alert alert-danger">
          {{$errors->first('lesson')}}
        </div>
        </div>
        @endif
        
        </div>
      
      </div>

      <div class="form-group">
        <label for="classname">Thứ trong tuần :</label>
        <div class="form-row">
        
        <select name="weekdays" class="form-control formselect required" placeholder="Select Category"
            id="sub_category_name">
            <option   value="0" disabled selected>chọn thứ </option>
            <option value="Monday">Thứ hai</option>
            <option value="Tuesday">Thứ ba</option>
            <option value="Wednesday">Thứ tư</option>
            <option value="Thursday">Thứ năm</option>
            <option value="Friday">Thứ sáu</option>
            <option value="Saturday">Thứ bảy</option>
        </select>
        @if($errors->has('weekdays'))
        <div class="form-row">
        <div class="alert alert-danger">
        {{$errors->first('weekdays')}}
        </div>
        </div>
        @endif
        
        </div>
      
      </div>
    
    
  
    <button type="submit" class="btn btn-primary btn-user btn-block">
                    Lên lịch học
                </button>
    

  </form>
  
  
  
</div>
</div>
@endsection




                                      
