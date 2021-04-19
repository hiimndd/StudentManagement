                     
@extends('layouts.Adminmaster')
@section('Adminmaster')
<div align="center" class="container">
  <h2>DANH SÁCH LỚP HỌC</h2>
  
  
  
        


  <table class="table table-striped">
  <thead>
      <tr align="center">
        <th>Tên lớp </th>
        <th>Khóa học</th>
        <th>Tổng sinh viên</th>
        <th></th>
      </tr>
    </thead>
  <tbody>          
        @foreach($data as $row)
        <tr align="center">
        <td>{{ $row->classname }}</td>
        <td>{{ $row->course->coursename }}</td>
        <td>{{ count($row->user) }}</td>
        
        <td>
        
        <form action="{{route('class.destroy',$row->id)}}" method="post">
        <a href = "{{ route('class.show', $row->id) }}"><button type="button" class="btn btn-primary">chi tiết</button><a>
          <a href = "{{ route('class.edit', $row->id) }}"><button type="button" class="btn btn-primary">sửa</button><a> </a>
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
</div>
@endsection




                                      
