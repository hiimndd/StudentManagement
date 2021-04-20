@extends('layouts.Adminmaster')


@section('Adminmaster')

    


   
    <div class="col-lg-8 offset-lg-2">
        <div class="p-5">
            <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
            </div>
            <form action="{{route('account.store')}}" method="POST" class="user">
            @csrf
                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <input name="name" type="text" class="form-control form-control-user" value ="{{old('name')}}" id="exampleFirstName" placeholder="Họ tên">
                    </div>
                    <div class="col-sm-6">
                        <input type="date" name="birthday" class="form-control form-control-user" value ="{{old('birthday')}}" id="exampleLastName" placeholder="Ngày sinh">
                    </div>
                </div>
                <div class="form-group">
                    <input name="username" type="text" class="form-control form-control-user" id="exampleInputEmail" value ="{{old('username')}}" placeholder="Tên đăng nhập">
                </div>
                @if($errors->has('username'))
                    <div class="form-row">
                    <div class="alert alert-danger">
                    {{$errors->first('username')}}
                    </div>
                    </div>
                @endif 
                <div class="form-group">
                    <input name="email" type="email" class="form-control form-control-user" id="exampleInputEmail" placeholder="Email ">
                </div>
                @if($errors->has('email'))
                    <div class="form-row">
                    <div class="alert alert-danger">
                    {{$errors->first('email')}}
                    </div>
                    </div>
                @endif
                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <input name="password" type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Mật khẩu">
                    </div>
                    <div class="col-sm-6">
                        <input name="password_confirmation" type="password" class="form-control form-control-user" id="exampleRepeatPassword" placeholder="Nhập lại mật khẩu">
                    </div>

                </div>
                @if($errors->has('password'))
                    <div class="form-row">
                    <div class="alert alert-danger">
                    {{$errors->first('password')}}
                    </div>
                    </div>
                @endif
                @if($errors->has('password_confirmation'))
                    <div class="form-row">
                    <div class="alert alert-danger">
                    {{$errors->first('password_confirmation')}}
                    </div>
                    </div>
                @endif
                <div class="form-group row">
                <select name="permission" class="form-control formselect required" placeholder="Select Category"
                id="sub_category_name">
                    <option   value="0" disabled selected>Vai trò</option>
                        <option  value="1">admin</option>
                        <option  value="2">student</option>
                </select>
               

                </div>
                @if($errors->has('permission'))
                    <div class="form-row">
                    <div class="alert alert-danger">
                    {{$errors->first('permission')}}
                    </div>
                    </div>
                @endif
                <button  type="submit" class="btn btn-primary btn-user btn-block">
                    Đăng ký tài khoản
                </button>


            </form>
            @if(isset($loi))
                    <div class="form-row">
                    <div class="alert alert-danger">
                    {{$loi}}
                    </div>
                    </div>
                @endif
            <hr>
            @if(session('notification'))
                <div class="alert alert-success">
                {{session('notification')}}
                </div>
            @endif
            @if(session('notificationer'))
                <div class="alert alert-danger">
                {{session('notificationer')}}
                </div>
            @endif

        </div>
        </div>


        
  
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>


@endsection

