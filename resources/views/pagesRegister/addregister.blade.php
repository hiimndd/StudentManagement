@extends('layouts.Adminmaster')
@section('Adminmaster')
<div class="container">

    
    <h2>Đăng ký lớp học</h2>
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


    <div class="form-group">
        <label for="classname">Chọn Khóa học :</label>
        <div class="form-row">
    
        <select name="namecourse" class="form-control formselect required" placeholder="Select Category"
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
        
        
        </div>
      
      </div>

     

    
    
  
    <button type="submit" class="btn btn-primary btn-user btn-block">
                    Lên lịch học
                </button>
    

  
                
  
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
                url: '/role/admin/get-classes',
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




                                      
