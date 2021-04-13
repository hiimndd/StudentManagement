@extends('layouts.Adminmaster')

@section('Adminmaster')

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Register</title>

    <!-- Custom fonts for this template-->
    <link href="{{asset('vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{asset('css/sb-admin-2.min.css')}}" rel="stylesheet">

</head>
<body>
<div class="d-flex justify-content-center">
<div class="col-lg-7">
        <div class="p-5">
            <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Danh sách tài khoản</h1>
            </div>
            <form action="{{route('findaccount')}}" method="POST" class="user">
            @csrf

                <div class="form-group row">
                <select name="permission" class="form-control formselect required" placeholder="Select Category"
                id="sub_category_name">
                
                    
                    @if(count($account) == 1)

                        
                        @foreach($account as $row)

                            @if($row->permission == 1)
                                <option   value="0" >Account All</option>
                                <option  value="1" selected > admin</option>
                                <option  value="2">student</option>
                            @else
                                <option   value="0" >Account All</option>
                                <option  value="1" >admin</option>
                                <option  value="2" selected >student</option>
                            @endif
                        @endforeach
                    @else
                        <option   value="0" selected >Account All</option>
                        <option  value="1" >admin</option>
                        <option  value="2"  >student</option>
                    @endif
                </select>
               
        
                </div>
               
                <button type="submit" class="btn btn-primary btn-user btn-block">
                    Search
                </button>
                <hr>
            </form>
            </div>
            </div>
            
            </div>
            
            <div class="container">
  





          
           
  
          
  <table class="table table-striped">
  <thead>
      <tr>
          <th>Tên tài khoản</th>
          <th>Email</th>
          <th>Họ tên</th>
          <th>vai trò<th>
      </tr>
      </thead>
  <tbody>
          


          @foreach($account as $row)
          <tr>
          <td>{{ $row->username }}</td>
          <td>{{ $row->email }}</td>
          <td>{{ $row->name }}</td>
          @if($row->permission == 1)
          <td>Admin</td>
          @else
          <td>Student</td>
          @endif
          <td>
          
          <form action="" method="post">
          
          <a href = ""><button type="button" class="btn btn-primary">chi tiết</button><a> </a>
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

        <!-- Bootstrap core JavaScript-->
        <script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
        <script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

        <!-- Core plugin JavaScript-->
        <script src="{{asset('vendor/jquery-easing/jquery.easing.min.js')}}"></script>

        <!-- Custom scripts for all pages-->
        <script src="{{asset('js/sb-admin-2.min.js')}}"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>


</body>
</html>

		
@endsection
