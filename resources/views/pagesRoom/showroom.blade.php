@extends('layouts.Adminmaster')
@section('Adminmaster')

<div class="container">
        
  <h2>Danh sách lớp đăng ký phòng @foreach($room as $row)
          {{$row->roomname}}
        @endforeach </h2>
  
  
        <a href="{{route('room.index')}}"><button type="button" class="btn btn-default" name="bttxt">Trở về</button></a>
        

  
          
  <table align="center" class="table table-striped">
  <thead>
      <tr>
        <th>Mã lớp</th>
        <th>Tên lớp</th>
        <th>Sĩ số</th>
      </tr>
    </thead>
  <tbody>
        


        @foreach($room as $row)
            @foreach($row->classn as $row)
        <tr>
        <td>{{ $row->id }}</td>
        <td>{{ $row->classname }}</td>
        <td>{{ count($row->user) }}</td>
       
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


