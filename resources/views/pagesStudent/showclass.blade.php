


@extends('layouts.StudentMaster')
@section('Studentmaster')
<link rel="stylesheet" href="{{asset('css/schedule.css')}}">

<div  class="container">
    <div align="center"><h2>Danh sách lớp {{$class->classname }}</h2></div>
  
  
  
        <a href="{{route('class.index')}}"><button type="button" class="btn btn-default" name="bttxt">Trở về</button></a>
        

  
          
  <table align="center" class="table table-striped">
  <thead >
      <tr align="center">
        <td>Họ tên</td>
        <td>Ngày sinh</td>
        <td>Email</td>
        <td></td>
      </tr>
    </thead>
  <tbody>
        


        @foreach($class->user as $row)
        <tr  align="center" >
        <td>{{ $row->name }}</td>
        <td>{{ $row->birthday }}</td>
        <td>{{ $row->email }}</td>
        <td>
        
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
