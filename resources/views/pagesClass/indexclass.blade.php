                     
@extends('layouts.Adminmaster')
@section('Adminmaster')
<div class="container">
  <h2>DANH SÁCH LỚP HỌC</h2>
  
  
  
        


  <table class="table table-striped">
  <thead>
      <tr>
        <th>Tên lớp </th>
        <th>Khóa học</th>
        <th>Tổng sinh viên</th>
        <th><th>
        <th><th>
      </tr>
    </thead>
  <tbody>
 
        @foreach($data as $row)
        <tr>
        <td>{{ $row->classname }}</td>
        <td>{{ $row->coursename }}</td>
        <td>{{ count($row->user) }}</td>
        
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




                                      
