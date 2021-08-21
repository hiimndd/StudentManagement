@extends('layouts.Adminmaster')
@section('Adminmaster')



<div class="container">
    <h2>sửa thông tin khóa học</h2>
    
  <form action="{{route('course.update',$course['id'])}}" method="post">
  @method('put')
  @csrf
    <div class="form-group">
    
      <label for="malop">Mã kháo học :</label>
      <input type="text" class="form-control" value="{{ $course['id'] }}" id="malop" placeholder="mã lớp" name="malop" disabled>
    </div>
    <div class="form-group">
        <label for="tenlop">Tên khóa học :</label>
        <input type="text" class="form-control" id="classname" value="{{ $course['coursename'] }}" placeholder="Tên lớp" name="coursename">
      </div>
      
    <button type="submit" class="btn btn-primary" name="btn_update">Lưu</button>
    <a href = "{{ route('course.index') }}" ><button  type="button" class="btn btn-primary">Hủy</button> </a>
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