
@extends('layouts.StudentMaster')

@section('Studentmaster')

<link href="{{asset('css/profile.css')}}" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container emp-profile">
            <form method="post">
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-img">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS52y5aInsxSm31CvHOFHWujqUx_wWTS9iM6s7BAm21oEN_RiGoog" alt=""/>
                            <div class="file btn btn-lg btn-primary">
                                Change Photo
                                <input type="file" name="file"/>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="profile-head">
                                        
                                            <h5>
                                            {{Auth::user()->username}}
                                            </h5>
                                        
                                        <h6>
                                            Học Viên (student)
                                        </h6>
                                    <p class="proile-rating">RANKINGS : <span>8/10</span></p>
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Thông tin</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Học phần</a>
                                </li>
                                
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2">
                    
                    </form>
                    <form action="{{route('schedule.edit',Auth::user()->id)}}" method="get">
                        @csrf
                        <button type="submit" class="profile-edit-btn" name="btn_update">Edit Profile</button>
                    </form>
                        
                        
                    </div>
                    
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-work">
                            <p>Đổi mật khẩu</p>
                            <form action="{{route('schedulepc',Auth::user()->id)}}" method="get">
                                @csrf
                                <button type="submit" class="profile-edit-btn" name="btn_update">change password</button>
                            </form>
                            
                            
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="tab-content profile-tab" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Mã học viên</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{Auth::user()->id}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Họ tên</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{Auth::user()->name}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Email</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{Auth::user()->email}}</p>
                                            </div>
                                        </div>
                                       
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>vị trí</label>
                                            </div>
                                            <div class="col-md-6">
                                                
                                                    <p>
                                                        Học Viên
                                                    </p>
                                            </div>
                                        </div>
                            </div>
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Khóa học đã đăng ký</label>
                                            </div>
                                            <div class="col-md-6">
                                            <p>
                                            @foreach($user->classn as $row)
                                                {{$row->course->coursename }},
                                            @endforeach
                                            </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>lớp đã đăng ký học</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>@foreach($user->classn as $row)
                                                        {{$row->classname }},
                                                    @endforeach</p>
                                            </div>
                                        </div>
                                        
                                        
                               
                            </div>
                            @if(session('notification'))
                <div class="alert alert-success">
                {{session('notification')}}
                </div>
            @endif
                        </div>
                    </div>
                </div>
            </form>           
        </div>
        </div>
		
@endsection
