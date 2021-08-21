@extends('layouts.StudentMaster')
@section('Studentmaster')
<link rel="stylesheet" href="{{asset('css/schedule.css')}}">
<div align="center" class="container">
  <h2>DANH SÁCH LỚP ĐÃ ĐĂNG KÝ</h2>
  
  
  
        


  <table class="table table-striped">
  <thead>
      <tr align="center">
        <td>Tên lớp </td>
        <td>Khóa học</td>
        <td>Tổng sinh viên</td>
        <td></td>
      </tr>
    </thead>
  <tbody>          
        @foreach($class->classn as $row)
        <tr align="center">
        <td>{{ $row->classname }}</td>
        <td>{{ $row->course->coursename }}</td>
        <td>{{ count($row->user) }}/10</td>
        
        <td>
        
        <form action="{{route('schedule.destroy',$row->id)}}" method="post">
        <a href = "{{ route('schedule.show', $row->id) }}"><button type="button" class="btn btn-primary">chi tiết</button><a>
          @csrf
          @method('DELETE')
          <a onclick="return confirm('Bạn có chắc muốn xóa thông tin này')">
          <button  type="submit" class="btn btn-primary">Hủy đăng ký</button></a>
        </form>
        </td>
        </tr>
        @endforeach


       
        
      
    </tbody>
  </table>
  @if(session('notification'))
    <div class="alert alert-success">
      {{session('notification')}}
    </div>
  @endif
  
</div>
</div>
@endsection




                                      
