
@extends('layouts.StudentMaster')

@section('Studentmaster')

<body>

    
 
    


   
    <div class="col-lg-8 offset-lg-2">
        <div class="p-5">
            <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Đổi mật khẩu!</h1>
            </div>
            <form action="{{route('schedulestore',Auth::user()->id)}}" method="POST" class="user">
            @csrf
            
                <div class="form-group">
                    <input disabled value ="{{ $user['username'] }}" name="username" type="text" class="form-control form-control-user" id="exampleInputEmail" placeholder="Tên đăng nhập">
                </div>
                <div class="form-group">
                    <input value = "" name="password" type="password" class="form-control form-control-user" id="exampleInputEmail" placeholder="mật khẩu ">
                </div>
                @if($errors->has('password'))
                    <div class="form-row">
                    <div class="alert alert-danger">
                    {{$errors->first('password')}}
                    </div>
                    </div>
                @endif
                
                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <input value = "" name="newpass" type="password" class="form-control form-control-user" id="exampleFirstName" placeholder="Mật khẩu mới">
                        
                    </div>
                    
                    
                    <div class="col-sm-6">
                        <input value = "" type="password" name="password_confirmation" class="form-control form-control-user" id="exampleLastName" placeholder="Nhập lại mật khẩu mới">
                        
                    </div>
                    
                   
                </div>
                @if($errors->has('newpass'))
                    <div class="form-row">
                    <div class="alert alert-danger">
                    {{$errors->first('newpass')}}
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
                
                
                
               
                <button type="submit" class="btn btn-primary btn-user btn-block">
                    Thay đổi
                </button>


            </form>
           
                        
                        
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
        </div>


        
 
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>


@endsection

