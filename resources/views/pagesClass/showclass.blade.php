@extends('layouts.Adminmaster')
@section('Adminmaster')

<div class="container">
        
  <h2>Danh sách lớp @foreach($class as $row)
          {{$row->classname}}
        @endforeach </h2>
  
  
        <a href="{{route('class.index')}}"><button type="button" class="btn btn-default" name="bttxt">Trở về</button></a>
        

  
          
  <table align="center" class="table table-striped">
  <thead>
      <tr>
        <th>Họ tên</th>
        <th>Ngày sinh</th>
        <th>Email</th>
        <th></th>
      </tr>
    </thead>
  <tbody>
        


        @foreach($class as $row)
        {{ $malop = $row->id }}
            @foreach($row->user as $row)
        <tr>
        <td>{{ $row->name }}</td>
        <td>{{ $row->birthday }}</td>
        <td>{{ $row->email }}</td>
        <td>
        
        <form action="{{ route('cancelclass', [$row->id,$malop]) }}" method="GET">
          <a href = "{{ route('classed', $row->id) }}"><button type="button" class="btn btn-primary">sửa</button><a> </a>
          @csrf
          <a onclick="return confirm('Bạn có chắc muốn xóa thông tin này')">
          <button type="submit" class="btn btn-primary">xóa</button></a>
        </form>
        </td>
        </tr>
        </tr>
        
            @endforeach
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


