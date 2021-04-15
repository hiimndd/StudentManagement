@extends('layouts.Adminmaster')
@section('Adminmaster')
<div class="container">

    
    <h2>THÊM KHÓA HỌC</h2>
    
  <form action="{{route('course.store')}}" method="POST">
  @csrf
    <div class="form-group">
    
      <label for="hoten">Tên Khóa Học :</label>
      
      <input type="text" class="form-control" id="hoten"  value="" placeholder="Tên khóa học" name="coursename">
      @if($errors->has('coursename'))
        <div class="form-row">
        <div class="alert alert-danger">
          {{$errors->first('coursename')}}
        </div>
        </div>
      @endif 
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




                                      
