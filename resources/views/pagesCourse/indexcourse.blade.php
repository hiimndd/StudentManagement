                     
@extends('layouts.Adminmaster')
@section('Adminmaster')
<div class="container">
  <h2>Danh sách sinh viên</h2>
  
  
  
        


  <table class="table table-striped">
  <thead>
      <tr>
        <th>Khóa học</th>
        <th>Số lớp đăng ký hóa học</th>
        <th>Tổng số sinh viên đăng ký khóa học</th>
        <th><th>
        <th><th>
      </tr>
    </thead>
  <tbody>
  <?php 

          ?>
        @foreach($data as $row)
        <tr>
        <td>{{ $row->coursename }}</td>
        <td>{{ count($row->classn) }}</td>
        
        <td>
        
        <form action="{{route('course.destroy',$row->id)}}" method="post">
        <a href = "{{ route('course.show', $row->id) }}"><button type="button" class="btn btn-primary">chi tiết</button><a>
          <a href = "{{ route('course.edit', $row->id) }}"><button type="button" class="btn btn-primary">sửa</button><a> </a>
          @csrf
          @method('DELETE')
          <a onclick="return confirm('Bạn có chắc muốn xóa thông tin này')">
          <button  type="submit" class="btn btn-primary">xóa</button></a>
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
@endsection




                                      
