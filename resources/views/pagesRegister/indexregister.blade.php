@extends('layouts.Adminmaster')

@section('Adminmaster')



 


<div class="d-flex justify-content-center">
<div class="col-lg-9">

            <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Danh sách Học viên</h1>
            </div>
            
            
                
            
  <table class="table table-striped">
  <thead>
      <tr>
          <th>Tên tài khoản</th>
          <th>Email</th>
          <th>Họ tên</th>
          <td></td>
      </tr>
      </thead>
  <tbody>
            
  

          @foreach($data as $row)
          <tr>
          <td>{{ $row->username }}</td>
          <td>{{ $row->email }}</td>
          <td>{{ $row->name }}</td>
          
          <td>
          
          <form action="" method="post">
          
          <a href = "{{route('register.show', $row['id'])}}"><button type="button" class="btn btn-primary">chi tiết</button><a> </a>
          <a href = "{{route('account.edit', $row['id'])}}"><button type="button" class="btn btn-primary">sửa</button><a> </a>
          @csrf
          @method('DELETE')
          <a onclick="return confirm('Bạn có chắc muốn xóa thông tin này')">
          <button type="submit" class="btn btn-primary">xóa</button></a>
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
  </div>
  
  

  
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>




		
@endsection
