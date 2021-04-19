                     
@extends('layouts.Adminmaster')
@section('Adminmaster')
<div align="center" class="container">
  <h2>Danh sách phòng học</h2>
  
  
  
        


  <table class="table table-striped">
  <thead>
      <tr align="center">
        <th>Mã phòng học</th>
        <th>Tên phòng</th>
        <th>Số lớp lớp Đăng ký phòng</th>
        <th></th>
      </tr>
    </thead>
  <tbody>
  <?php 
          ?>
        @foreach($data as $row)
        <tr align="center">
        <td>{{ $row->id }}</td>
        <td>{{ $row->roomname }}</td>
        <td >{{ count($row->classn) }}</td>
        <td>
        
        <form action="{{route('room.destroy',$row->id)}}" method="post">
        <a href = "{{ route('room.show', $row->id) }}"><button type="button" class="btn btn-primary">chi tiết</button><a>
          <a href = "{{ route('room.edit', $row->id) }}"><button type="button" class="btn btn-primary">sửa</button><a> </a>
          @csrf
          @method('DELETE')
          <a onclick="return confirm('Bạn có chắc muốn xóa khóa học này ,Nếu chưa thay đổi lớp học có chưa khóa học này thông tin lớp học sẽ bị xóa theo, bạn vẫn muốn tiếp tục ?')">
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
</div>
@endsection




                                      
