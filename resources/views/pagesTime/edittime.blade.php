@extends('layouts.Adminmaster')
@section('Adminmaster')



<div class="container">
    <h2>Cập nhật lịch trình</h2>
    
  <form action="{{route('time.update',$class['id'])}}" method="post">
  @method('put')
  @csrf
  <div class="form-group">
  

        <label for="roomname">Phòng học :</label>
        
    
      <input type="text" class="form-control" value="{{ $room['roomname'] }}" id="roomname" placeholder="roomname" name="roomname" readonly >
    </div>
      
      

      <div class="form-group">
        <label for="classname">Lớp học :</label>
        
    
        <input type="text" class="form-control" value="{{ $class['classname'] }}" id="classname" placeholder="classname" name="claasname" readonly >
        
      
      </div>

      <div class="form-group">
        <label for="classname">Tiết học :</label>
        <div class="form-row">
        
        <select name="lesson" class="form-control formselect required" placeholder="Select Category"
            id="sub_category_name" >
            <option value="{{ $time->lesson }}" selected hidden>
                @switch($time->lesson)
                      
                    @case(1)
                    Tiết 1(9:00-10:30)	
                        @break
                    @case(2)
                    Tiết 2(10:30-12:00)
                        @break
                    @case(3)
                    Tiết 3(14:00-15:30)
                        @break
                    @case(4)
                    Tiết 4(15:30-17:00)
                        @break
                    @case(5)
                    Tiết 5(17:00-18:30) 
                        @break
                    @case(6)
                    Tiết 6(18:30-20:00)	
                        @break
                @endswitch
            </option>
            <option value="1">Tiết 1(9:00-10:30)</option>
            <option value="2">Tiết 2(10:30-12:00)</option>
            <option value="3">Tiết 3(14:00-15:30)</option>
            <option value="4">Tiết 4(15:30-17:00)</option>
            <option value="5">Tiết 5(17:00-18:30)</option>
            <option value="6">Tiết 6(18:30-20:00)</option>
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
            id="sub_category_name" >
            <option value="{{ $time->weekdays }}" selected hidden>
            @switch($time->weekdays)
                      @case("Monday")
                        Thứ hai	
                          @break
                      @case("Tuesday")
                        Thứ ba
                          @break
                      @case("Wednesday")
                        Thứ tư
                          @break
                      @case("Thursday")
                        Thứ năm
                          @break
                      @case("Friday")
                        Thứ sáu 
                          @break
                      @case("Saturday")
                        Thứ bảy	
                          @break
                  @endswitch
            </option>
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
    
      
    <button type="submit" class="btn btn-primary" name="btn_update">Lưu</button>
    <a href = "{{ route('time.index') }}" ><button  type="button" class="btn btn-primary">Hủy</button> </a>
    </form>
    
    @if(count($errors) > 0)
      <div class="alert alert-danger">
        @foreach($errors -> all() as $error)
          {{$error}}<br>
        @endforeach
      </div>
    @endif
    
    
    
        <div class="form-row">
        @if(session()->has('message'))
          <div class="alert alert-danger">
            {{ session()->get('message') }}
          </div>
        @endif
        </div>
        
  
      
    

</div>

</div>
  @endsection