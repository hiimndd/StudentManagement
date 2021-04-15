                     
@extends('layouts.Adminmaster')
@section('Adminmaster')
<div class="container">
  <h2>Danh sách sinh viên</h2>
  
  
  
        

  <p>@if(isset($username))  
            {{ "User: ".$username}}
          @endif</p>
          
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
        @foreach($student as $row)
        <tr>
        <td>{{ $row['hoten'] }}</td>
        <td>{{ $row['mssv'] }}</td>
        <td>{{ $row['ngaysinh'] }}</td>
        <td>
        
        <form action="{{route('home.destroy',$row['id'])}}" method="post">
        <a href = "{{ route('home.show', $row['id']) }}"><button type="button" class="btn btn-primary">chi tiết</button><a>
          <a href = "{{ route('home.edit', $row['id']) }}"><button type="button" class="btn btn-primary">sửa</button><a> </a>
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




                                      
