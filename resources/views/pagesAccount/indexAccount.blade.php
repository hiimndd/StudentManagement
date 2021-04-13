@extends('layouts.Adminmaster')

@section('Adminmaster')


<div class="d-flex justify-content-center">
<div class="col-lg-7">
        <div class="p-5">
            <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Danh sách tài khoản</h1>
            </div>
            <form action="{{route('find')}}" method="POST" class="user">
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
          
          <a href = "{{route('account.show', $row['id'])}}"><button type="button" class="btn btn-primary">chi tiết</button><a> </a>
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

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>




		
@endsection
