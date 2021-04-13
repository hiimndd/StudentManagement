@extends('layouts.Adminmaster')

<!DOCTYPE html>
<html lang="en">
@section('Adminmaster')
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

    
 
    


   
    <div class="col-lg-8 offset-lg-2">
        <div class="p-5">
            <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
            </div>
            <form action="{{route('account.update',$user['id'])}}" method="POST" class="user">
            @csrf
            @method('put')
            
                <div class="form-group">
                    <input disabled value ="{{ $user['username'] }}" name="username" type="text" class="form-control form-control-user" id="exampleInputEmail" placeholder="Tên đăng nhập">
                </div>
                
                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <input value = "{{ $user['name'] }}" name="name" type="text" class="form-control form-control-user" id="exampleFirstName" placeholder="Họ tên">
                        
                    </div>
                    
                    <div class="col-sm-6">
                        <input value = "{{ $user['birthday'] }}" type="date" name="birthday" class="form-control form-control-user" id="exampleLastName" placeholder="Ngày sinh">
                        
                    </div>
                   
                </div>
                 
                <div class="form-group">
                    <input value = "{{ $user['email'] }}" name="email" type="email" class="form-control form-control-user" id="exampleInputEmail" placeholder="Email ">
                </div>
                
                <div class="form-group">
                    <div class="form-check">
                    <input name="checkbox" class="form-check-input" type="checkbox" value="yes" id="defaultCheck1">
                    <label class="form-check-label" for="defaultCheck1">
                        Reset password
                    </label>
                    </div>
                </div>
                
               
                <button type="submit" class="btn btn-primary btn-user btn-block">
                    Thay đổi
                </button>


            </form>
            @if($errors->has('name'))
                            <div class="form-row">
                            <div class="alert alert-danger">
                            {{$errors->first('name')}}
                            </div>
                            </div>
                        @endif
                        @if($errors->has('birthday'))
                            <div class="form-row">
                            <div class="alert alert-danger">
                            {{$errors->first('birthday')}}
                            </div>
                            </div>
                        @endif
                        @if($errors->has('email'))
                    <div class="form-row">
                    <div class="alert alert-danger">
                    {{$errors->first('email')}}
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
@endsection
</html>
