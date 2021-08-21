@extends('layouts.StudentMaster')
@section('Studentmaster')
<link rel="stylesheet" href="{{asset('css/schedule.css')}}">
<div class="container">

    
    
    <div align="center"><h2>Đăng ký lớp học</h2></div>
    
     <form action="{{route('schedule.store')}}" method="POST">
    @csrf
    

    <div class="form-group">
        <label for="classname">Chọn Khóa học :</label>
        <div class="form-row">
    
        <select name="coursename" class="form-control formselect required" placeholder="Select Category"
            id="sub_category_name">
            <option   value="0" disabled selected>Chọn khóa học</option>
                @foreach($course as $row)
                    <option  value="{{ $row->id }}">
                        {{ ucfirst($row->coursename) }}
                    </option>
                @endforeach
        </select>
        @if($errors->has('coursename'))
        <div class="form-row">
        <div class="alert alert-danger">
          {{$errors->first('coursename')}}
        </div>
        </div>
        @endif
        
        
    
        </div>
      
      </div>
      

      <div class="form-group">
        <label for="classname">Chọn lớp :</label>
        <div class="form-row">
        <select name="classname" class="form-control formselect required" placeholder="Select Category" id="sub_category">
            
        </select>
        @if($errors->has('classname'))
        <div class="form-row">
        <div class="alert alert-danger">
          {{$errors->first('classname')}}
        </div>
        </div>
        @endif
        
        </div>
      
      </div>

     

    
    
  
    <button type="submit" class="btn btn-primary btn-user btn-block">
                    Đăng ký
                </button>
    </form>
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
<script src="http://code.jquery.com/jquery-3.4.1.js">
</script>
<script>
                $(document).ready(function () {
                $('#sub_category_name').on('change', function () {
                let id = $(this).val();
                $('#sub_category').empty();
                $('#sub_category').append(`<option value="0" disabled selected>Đang tải...</option>`);
                console.log(id);
                $.ajax({
                type: 'POST',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: '/role/student/get-classeshv',
                data: {
                    courseId: id
                },
                success: function (response) {
                console.log(response);
                const { classes } = response;  
                $('#sub_category').empty();
                $('#sub_category').append(`<option value="0" disabled selected>Vui lòng chọn lớp</option>`);
                classes.forEach(element => {
                    $('#sub_category').append(`<option value="${element['id']}">${element['classname']}</option>`);
                    });
                }
                });
        });
    });
    </script>
@endsection




                                      
