@extends('layouts.Adminmaster')
@section('Adminmaster')
<div class="container">

    
    <h2>MỞ LỚP</h2>
    
  <form action="{{route('class.store')}}" method="POST">
  @csrf
    <div class="form-group">
    
      <label for="hoten">Tên Lớp :</label>
      
      <input type="text" class="form-control" id="hoten"  value="" placeholder="Tên lớp" name="classname">
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
            <option   value="0" disabled selected>Chọn khóa học</option>
                @foreach($course as $row)
                    <option  value="{{ $row->id }}">
                        {{ ucfirst($row->coursename) }}
                    </option>
                @endforeach
        </select>
        @if($errors->has('coursename'))
        <div class="form-row">
        <div class="alert alert-danger">
          {{$errors->first('coursename')}}
        </div>
        </div>
        @endif
        
        </div>
      
      </div>
    
    
  
    <button type="submit" class="btn btn-primary btn-user btn-block">
                    Thêm khóa học
                </button>
    

  </form>
  
  
  @if(session('notification'))
    <div class="alert alert-success">
      {{session('notification')}}
    </div>
  @endif
</div>
@endsection




                                      
