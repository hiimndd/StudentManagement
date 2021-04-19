@extends('layouts.Adminmaster')
@section('Adminmaster')
<div class="container">

    <h2>Cập nhật thông tin lớp học</h2>
    
  <form action="{{route('class.update',$class['id'])}}" method="POST">
  @method('put')
  @csrf
    <div class="form-group">
    <label for="malop">Mã lớp :</label>
      <input disabled type="text" class="form-control" id="id"  value="{{ $class['id'] }}" placeholder="" name="id">

      <label for="tenlop">Tên Lớp :</label>
      <input type="text" class="form-control" id="classname"  value="{{ $class['classname'] }}" placeholder="Tên lớp" name="classname">
      @if($errors->has('classname'))
        <div class="form-row">
        <div class="alert alert-danger">
          {{$errors->first('classname')}}
        </div>
        </div>
      @endif 
    </div>
    <div class="form-group">
        <label for="classname">Tên khóa học :</label>
        <div class="form-row">
        <select name="coursename" class="form-control formselect required" placeholder="Select Category"
            id="sub_category_name">
            
            <option   value="0" disabled >Chọn khóa học</option>
                @foreach($course as $row)
                
                    <option selected value="{{ $row->id }}">
                        {{ ucfirst($row->coursename) }}
                    </option>
                @endforeach
                @foreach($courselist as $row)
                    <option value="{{ $row->id }}">
                        {{ ucfirst($row->coursename) }}
                    </option>
                @endforeach
                    
        </select>
        
        
        </div>
      
      </div>
    
    
  
    <button type="submit" class="btn btn-primary btn-user btn-block">
                    Cập nhật 
                </button>
    

  </form>
  <a href="{{route('class.index')}}"><button type="button" class="btn btn-default" name="bttxt">Trở về</button></a>
  
  @if(session('notification'))
    <div class="alert alert-success">
      {{session('notification')}}
    </div>
  @endif
</div>
</div>
@endsection




                                      
