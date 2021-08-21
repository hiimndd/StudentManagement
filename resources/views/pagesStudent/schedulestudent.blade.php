@extends('layouts.StudentMaster')
@section('Studentmaster')

<div class="d-flex justify-content-center">
<div class="col-lg-12">
        <div class="p-5">
            <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Chọn lớp học</h1>
            </div>
            <form action="{{route('seachschedule')}}" method="POST" class="user">
            @csrf

                <div class="form-group row">
                <select name="roomname" class="form-control formselect required" placeholder="Select Category"
                id="sub_category_name">

                @if(isset($keepvl))
                  <option  value="{{$keepvl->id}}" selected > {{ $keepvl->classname }}</option>
                  @foreach($classcbb as $row)
                    <option  value="{{ $row->id }}">
                        {{ ucfirst($row->classname) }}
                    </option>
                  @endforeach 
                @else
                  @foreach($classcbb as $row)
                      <option  value="{{ $row->id }}">
                          {{ ucfirst($row->classname) }}
                      </option>
                  @endforeach

                @endif    
                    
                </select>
               
        
                </div>
               
                <button type="submit" class="btn btn-primary btn-user btn-block">
                    Search
                </button>
                <hr>
            </form>
            
                
            
       



            

          
           
  
 

  
  </div>

  <header class="cd-main-header text-center flex flex-column flex-center">
    
 

    <h1 class="text-xl">Lịch học</h1>
  </header>
  

<link rel="stylesheet" href="{{asset('css/schedule.css')}}">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<br />

<div class="cd-schedule loading">
	<div class="timeline">
		<ul>
			<li><span>09:00</span></li>
			<li><span>09:30</span></li>
			<li><span>10:00</span></li>
			<li><span>10:30</span></li>
			<li><span>11:00</span></li>
			<li><span>11:30</span></li>
			<li><span>12:00</span></li>
			<li><span>12:30</span></li>
			<li><span>13:00</span></li>
			<li><span>13:30</span></li>
			<li><span>14:00</span></li>
			<li><span>14:30</span></li>
			<li><span>15:00</span></li>
			<li><span>15:30</span></li>
			<li><span>16:00</span></li>
			<li><span>16:30</span></li>
			<li><span>17:00</span></li>
			<li><span>17:30</span></li>
			<li><span>18:00</span></li>
			<li><span>18:30</span></li>
			<li><span>19:00</span></li>
			<li><span>19:30</span></li>
			<li><span>20:00</span></li>
		</ul>
	</div> <!-- .timeline -->

	<div class="events">
		<ul class="wrap">
			<li class="events-group">
				<div class="top-info"><span>Monday</span></div>
				<ul>
				@foreach($class->time as $row)
                      @if($row->weekdays == "Monday")
                      @switch($row->lesson)
                      
                      @case(1)
					  		<li  class="single-event" data-start="09:00" data-end="10:30" >
								<a type="button" class="btn btn-primary" data-toggle="modal" data-target="#M{{$row->pivot->id}}" >
									<em class="event-name">{{$row->room[0]->roomname}}<br>{{$class->course->coursename}}</em>
								</a>
							</li>
                              @break
                          @case(2)
						  <li  class="single-event" data-start="10:30" data-end="12:00" >
								<a type="button" class="btn btn-primary" data-toggle="modal" data-target="#M{{$row->pivot->id}}" >
									<em class="event-name">{{$row->room[0]->roomname}}<br>{{$class->course->coursename}}</em>
								</a>
							</li>
                              @break
                          @case(3)
						  <li  class="single-event" data-start="14:00" data-end="15:30" >
								<a type="button" class="btn btn-primary" data-toggle="modal" data-target="#M{{$row->pivot->id}}" >
									<em class="event-name">{{$row->room[0]->roomname}}<br>{{$class->course->coursename}}</em>
								</a>
							</li>
                              @break
                          @case(4)
                          <li  class="single-event" data-start="15:30" data-end="17:00" >
								<a type="button" class="btn btn-primary" data-toggle="modal" data-target="#M{{$row->pivot->id}}" >
									<em class="event-name">{{$row->room[0]->roomname}}<br>{{$class->course->coursename}}</em>
								</a>
							</li>
                              @break
                          @case(5)
						  <li  class="single-event" data-start="17:00" data-end="18:30" >
								<a type="button" class="btn btn-primary" data-toggle="modal" data-target="#M{{$row->pivot->id}}" >
									<em class="event-name">{{$row->room[0]->roomname}}<br>{{$class->course->coursename}}</em>
								</a>
							</li>
                              @break
                          @case(6)
						  	<li  class="single-event" data-start="18:30" data-end="20:00" >
								<a type="button" class="btn btn-primary" data-toggle="modal" data-target="#M{{$row->pivot->id}}" >
									<em class="event-name">{{$row->room[0]->roomname}}<br>{{$class->course->coursename}}</em>
								</a>
							</li>
                              @break
                        @endswitch
                    @endif
            @endforeach
				</ul>
			</li>

			<li class="events-group">
				<div class="top-info"><span>Tuesday</span></div>

				<ul>
				@foreach($class->time as $row)
                      @if($row->weekdays == "Tuesday")
                      @switch($row->lesson)
                      
                      @case(1)
					  		<li  class="single-event" data-start="09:00" data-end="10:30" >
								<a type="button" class="btn btn-primary" data-toggle="modal" data-target="#M{{$row->pivot->id}}" >
									<em class="event-name">{{$row->room[0]->roomname}}<br>{{$class->course->coursename}}</em>
								</a>
							</li>
                              @break
                          @case(2)
						  <li  class="single-event" data-start="10:30" data-end="12:00" >
								<a type="button" class="btn btn-primary" data-toggle="modal" data-target="#M{{$row->pivot->id}}" >
									<em class="event-name">{{$row->room[0]->roomname}}<br>{{$class->course->coursename}}</em>
								</a>
							</li>
                              @break
                          @case(3)
						  <li  class="single-event" data-start="14:00" data-end="15:30" >
								<a type="button" class="btn btn-primary" data-toggle="modal" data-target="#M{{$row->pivot->id}}" >
									<em class="event-name">{{$row->room[0]->roomname}}<br>{{$class->course->coursename}}</em>
								</a>
							</li>
                              @break
                          @case(4)
                          <li  class="single-event" data-start="15:30" data-end="17:00" >
								<a type="button" class="btn btn-primary" data-toggle="modal" data-target="#M{{$row->pivot->id}}" >
									<em class="event-name">{{$row->room[0]->roomname}}<br>{{$class->course->coursename}}</em>
								</a>
							</li>
                              @break
                          @case(5)
						  <li  class="single-event" data-start="17:00" data-end="18:30" >
								<a type="button" class="btn btn-primary" data-toggle="modal" data-target="#M{{$row->pivot->id}}" >
									<em class="event-name">{{$row->room[0]->roomname}}<br>{{$class->course->coursename}}</em>
								</a>
							</li>
                              @break
                          @case(6)
						  	<li  class="single-event" data-start="18:30" data-end="20:00" >
								<a type="button" class="btn btn-primary" data-toggle="modal" data-target="#M{{$row->pivot->id}}" >
									<em class="event-name">{{$row->room[0]->roomname}}<br>{{$class->course->coursename}}</em>
								</a>
							</li>
                              @break
                        @endswitch
                    @endif
            @endforeach
				</ul>
			</li>

			<li class="events-group">
				<div class="top-info"><span>Wednesday</span></div>

				<ul>
				@foreach($class->time as $row)
                      @if($row->weekdays == "Wednesday")
                      @switch($row->lesson)
                      
                      @case(1)
					  		<li  class="single-event" data-start="09:00" data-end="10:30" >
								<a type="button" class="btn btn-primary" data-toggle="modal" data-target="#M{{$row->pivot->id}}" >
									<em class="event-name">{{$row->room[0]->roomname}}<br>{{$class->course->coursename}}</em>
								</a>
							</li>
                              @break
                          @case(2)
						  <li  class="single-event" data-start="10:30" data-end="12:00" >
								<a type="button" class="btn btn-primary" data-toggle="modal" data-target="#M{{$row->pivot->id}}" >
									<em class="event-name">{{$row->room[0]->roomname}}<br>{{$class->course->coursename}}</em>
								</a>
							</li>
                              @break
                          @case(3)
						  <li  class="single-event" data-start="14:00" data-end="15:30" >
								<a type="button" class="btn btn-primary" data-toggle="modal" data-target="#M{{$row->pivot->id}}" >
									<em class="event-name">{{$row->room[0]->roomname}}<br>{{$class->course->coursename}}</em>
								</a>
							</li>
                              @break
                          @case(4)
                          <li  class="single-event" data-start="15:30" data-end="17:00" >
								<a type="button" class="btn btn-primary" data-toggle="modal" data-target="#M{{$row->pivot->id}}" >
									<em class="event-name">{{$row->room[0]->roomname}}<br>{{$class->course->coursename}}</em>
								</a>
							</li>
                              @break
                          @case(5)
						  <li  class="single-event" data-start="17:00" data-end="18:30" >
								<a type="button" class="btn btn-primary" data-toggle="modal" data-target="#M{{$row->pivot->id}}" >
									<em class="event-name">{{$row->room[0]->roomname}}<br>{{$class->course->coursename}}</em>
								</a>
							</li>
                              @break
                          @case(6)
						  	<li  class="single-event" data-start="18:30" data-end="20:00" >
								<a type="button" class="btn btn-primary" data-toggle="modal" data-target="#M{{$row->pivot->id}}" >
									<em class="event-name">{{$row->room[0]->roomname}}<br>{{$class->course->coursename}}</em>
								</a>
							</li>
                              @break
                        @endswitch
                    @endif
            @endforeach
				</ul>
			</li>

			<li class="events-group">
				<div class="top-info"><span>Thursday</span></div>

				<ul>
				@foreach($class->time as $row)
                      @if($row->weekdays == "Thursday")
                      @switch($row->lesson)
                      
                      @case(1)
					  		<li  class="single-event" data-start="09:00" data-end="10:30" >
								<a type="button" class="btn btn-primary" data-toggle="modal" data-target="#M{{$row->pivot->id}}" >
									<em class="event-name">{{$row->room[0]->roomname}}<br>{{$class->course->coursename}}</em>
								</a>
							</li>
                              @break
                          @case(2)
						  <li  class="single-event" data-start="10:30" data-end="12:00" >
								<a type="button" class="btn btn-primary" data-toggle="modal" data-target="#M{{$row->pivot->id}}" >
									<em class="event-name">{{$row->room[0]->roomname}}<br>{{$class->course->coursename}}</em>
								</a>
							</li>
                              @break
                          @case(3)
						  <li  class="single-event" data-start="14:00" data-end="15:30" >
								<a type="button" class="btn btn-primary" data-toggle="modal" data-target="#M{{$row->pivot->id}}" >
									<em class="event-name">{{$row->room[0]->roomname}}<br>{{$class->course->coursename}}</em>
								</a>
							</li>
                              @break
                          @case(4)
                          <li  class="single-event" data-start="15:30" data-end="17:00" >
								<a type="button" class="btn btn-primary" data-toggle="modal" data-target="#M{{$row->pivot->id}}" >
									<em class="event-name">{{$row->room[0]->roomname}}<br>{{$class->course->coursename}}</em>
								</a>
							</li>
                              @break
                          @case(5)
						  <li  class="single-event" data-start="17:00" data-end="18:30" >
								<a type="button" class="btn btn-primary" data-toggle="modal" data-target="#M{{$row->pivot->id}}" >
									<em class="event-name">{{$row->room[0]->roomname}}<br>{{$class->course->coursename}}</em>
								</a>
							</li>
                              @break
                          @case(6)
						  	<li  class="single-event" data-start="18:30" data-end="20:00" >
								<a type="button" class="btn btn-primary" data-toggle="modal" data-target="#M{{$row->pivot->id}}" >
									<em class="event-name">{{$row->room[0]->roomname}}<br>{{$class->course->coursename}}</em>
								</a>
							</li>
                              @break
                        @endswitch
                    @endif
            @endforeach
				</ul>
			</li>
      <!--        -->
      <li class="events-group">
				<div class="top-info"><span>Friday</span></div>
				<ul>
				@foreach($class->time as $row)
                      @if($row->weekdays == "Friday")
                      @switch($row->lesson)
                      
                      @case(1)
					  		<li  class="single-event" data-start="09:00" data-end="10:30" >
								<a type="button" class="btn btn-primary" data-toggle="modal" data-target="#M{{$row->pivot->id}}" >
									<em class="event-name">{{$row->room[0]->roomname}}<br>{{$class->course->coursename}}</em>
								</a>
							</li>
                              @break
                          @case(2)
						  <li  class="single-event" data-start="10:30" data-end="12:00" >
								<a type="button" class="btn btn-primary" data-toggle="modal" data-target="#M{{$row->pivot->id}}" >
									<em class="event-name">{{$row->room[0]->roomname}}<br>{{$class->course->coursename}}</em>
								</a>
							</li>
                              @break
                          @case(3)
						  <li  class="single-event" data-start="14:00" data-end="15:30" >
								<a type="button" class="btn btn-primary" data-toggle="modal" data-target="#M{{$row->pivot->id}}" >
									<em class="event-name">{{$row->room[0]->roomname}}<br>{{$class->course->coursename}}</em>
								</a>
							</li>
                              @break
                          @case(4)
                          <li  class="single-event" data-start="15:30" data-end="17:00" >
								<a type="button" class="btn btn-primary" data-toggle="modal" data-target="#M{{$row->pivot->id}}" >
									<em class="event-name">{{$row->room[0]->roomname}}<br>{{$class->course->coursename}}</em>
								</a>
							</li>
                              @break
                          @case(5)
						  <li  class="single-event" data-start="17:00" data-end="18:30" >
								<a type="button" class="btn btn-primary" data-toggle="modal" data-target="#M{{$row->pivot->id}}" >
									<em class="event-name">{{$row->room[0]->roomname}}<br>{{$class->course->coursename}}</em>
								</a>
							</li>
                              @break
                          @case(6)
						  	<li  class="single-event" data-start="18:30" data-end="20:00" >
								<a type="button" class="btn btn-primary" data-toggle="modal" data-target="#M{{$row->pivot->id}}" >
									<em class="event-name">{{$row->room[0]->roomname}}<br>{{$class->course->coursename}}</em>
								</a>
							</li>
                              @break
                        @endswitch
                    @endif
            @endforeach
				</ul>
			</li>
      <li class="events-group">
				<div class="top-info"><span>Saturday</span></div>
				<ul>
				@foreach($class->time as $row)
				<!-- $row->pivot->id -->
                      @if($row->weekdays == "Saturday")
                      @switch($row->lesson)
                      
                      @case(1)
					  		<li  class="single-event" data-start="09:00" data-end="10:30" >
								<a type="button" class="btn btn-primary" data-toggle="modal" data-target="#M{{$row->pivot->id}}" >
									<em class="event-name">{{$row->room[0]->roomname}}<br>{{$class->course->coursename}}</em>
								</a>
							</li>
                              @break
                          @case(2)
						  <li  class="single-event" data-start="10:30" data-end="12:00" >
								<a type="button" class="btn btn-primary" data-toggle="modal" data-target="#M{{$row->pivot->id}}" >
									<em class="event-name">{{$row->room[0]->roomname}}<br>{{$class->course->coursename}}</em>
								</a>
							</li>
                              @break
                          @case(3)
						  <li  class="single-event" data-start="14:00" data-end="15:30" >
								<a type="button" class="btn btn-primary" data-toggle="modal" data-target="#M{{$row->pivot->id}}" >
									<em class="event-name">{{$row->room[0]->roomname}}<br>{{$class->course->coursename}}</em>
								</a>
							</li>
                              @break
                          @case(4)
                          <li  class="single-event" data-start="15:30" data-end="17:00" >
								<a type="button" class="btn btn-primary" data-toggle="modal" data-target="#M{{$row->pivot->id}}" >
									<em class="event-name">{{$row->room[0]->roomname}}<br>{{$class->course->coursename}}</em>
								</a>
							</li>
                              @break
                          @case(5)
						  <li  class="single-event" data-start="17:00" data-end="18:30" >
								<a type="button" class="btn btn-primary" data-toggle="modal" data-target="#M{{$row->pivot->id}}" >
									<em class="event-name">{{$row->room[0]->roomname}}<br>{{$class->course->coursename}}</em>
								</a>
							</li>
                              @break
                          @case(6)
						  	<li  class="single-event" data-start="18:30" data-end="20:00" >
								<a type="button" class="btn btn-primary" data-toggle="modal" data-target="#M{{$row->pivot->id}}" >
									<em class="event-name">{{$row->room[0]->roomname}}<br>{{$class->course->coursename}}</em>
								</a>
							</li>
                              @break
                        @endswitch
                    @endif
            @endforeach
					
					

					
					
					
				
				</ul>
			</li>
			
			
			
			
			
<!--        -->
		</ul>
	</div>
	

  @foreach($class->time as $row)
                      @if($row->weekdays == "Monday")
                      @switch($row->lesson)
                      
                      @case(1)
                      <div class="cover-layer"></div>
                      <div class="modal fade" id="M{{$row->pivot->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                          <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalCenterTitle">Thông tin lịch trình</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                            <div class="container">
                              <h2>{{$row->classn[0]->classname}}</h2>
                              <ul class="list-group">
                                
                                <li class="list-group-item">Từ 9:00 Đến 10:30 </li>
                                <li class="list-group-item">Phòng: {{$row->room[0]->roomname}}</li>
                              </ul>
                            </div>
                            </div>
                            
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                              
                              
                              
                            </div>
                            </div>
                          </div>
                          </div>

                          <div class="container">

                    </div>

                              @break
                          @case(2)
                          <div class="cover-layer"></div>
                      <div class="modal fade" id="M{{$row->pivot->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                          <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalCenterTitle">Thông tin lịch trình</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                            <div class="container">
                              <h2>{{$row->classn[0]->classname}}</h2>
                              <ul class="list-group">
                                
                                <li class="list-group-item">Từ 10:30 Đến 12:00 </li>
                                <li class="list-group-item">Phòng: {{$row->room[0]->roomname}}</li>
                              </ul>
                            </div>
                            </div>
                            
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                              
                              
                              
                            </div>
                            </div>
                          </div>
                          </div>

                          <div class="container">

                    </div>
                              @break
                          @case(3)
                          <div class="cover-layer"></div>
                      <div class="modal fade" id="M{{$row->pivot->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                          <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalCenterTitle">Thông tin lịch trình</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                            <div class="container">
                              <h2>{{$row->classn[0]->classname}}</h2>
                              <ul class="list-group">
                                
                                <li class="list-group-item">Từ 14:00 Đến 15:30 </li>
                                <li class="list-group-item">Phòng: {{$row->room[0]->roomname}}</li>
                              </ul>
                            </div>
                            </div>
                            
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                              
                              
                              
                            </div>
                            </div>
                          </div>
                          </div>

                          <div class="container">

                    </div>
                              @break
                          @case(4)
                          <div class="cover-layer"></div>
                      <div class="modal fade" id="M{{$row->pivot->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                          <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalCenterTitle">Thông tin lịch trình</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                            <div class="container">
                              <h2>{{$row->classn[0]->classname}}</h2>
                              <ul class="list-group">
                                
                                <li class="list-group-item">Từ 15:30 Đến 17:00 </li>
                                <li class="list-group-item">Phòng: {{$row->room[0]->roomname}}</li>
                              </ul>
                            </div>
                            </div>
                            
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                              
                              
                              
                            </div>
                            </div>
                          </div>
                          </div>

                          <div class="container">

                    </div>
                              @break
                          @case(5)
                          <div class="cover-layer"></div>
                      <div class="modal fade" id="M{{$row->pivot->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                          <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalCenterTitle">Thông tin lịch trình</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                            <div class="container">
                              <h2>{{$row->classn[0]->classname}}</h2>
                              <ul class="list-group">
                                
                                <li class="list-group-item">Từ 17:00 Đến 18:30 </li>
                                <li class="list-group-item">Phòng: {{$row->room[0]->roomname}}</li>
                              </ul>
                            </div>
                            </div>
                            
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                              
                              
                              
                            </div>
                            </div>
                          </div>
                          </div>

                          <div class="container">

                    </div>
                              @break
                          @case(6)
                          <div class="cover-layer"></div>
                      <div class="modal fade" id="M{{$row->pivot->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                          <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalCenterTitle">Thông tin lịch trình</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                            <div class="container">
                              <h2>{{$row->classn[0]->classname}}</h2>
                              <ul class="list-group">
                                
                                <li class="list-group-item">Từ 18:30 Đến 20:00 </li>
                                <li class="list-group-item">Phòng: {{$row->room[0]->roomname}}</li>
                              </ul>
                            </div>
                            </div>
                            
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                              
                              
                              
                            </div>
                            </div>
                          </div>
                          </div>

                          <div class="container">

                    </div>
                              @break
                        @endswitch
                    @endif
            @endforeach

            @foreach($class->time as $row)
                      @if($row->weekdays == "Tuesday")
                      @switch($row->lesson)
                      
                      @case(1)
                      <div class="cover-layer"></div>
                      <div class="modal fade" id="M{{$row->pivot->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                          <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalCenterTitle">Thông tin lịch trình</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                            <div class="container">
                              <h2>{{$row->classn[0]->classname}}</h2>
                              <ul class="list-group">
                                
                                <li class="list-group-item">Từ 9:00 Đến 10:30 </li>
                                <li class="list-group-item">Phòng: {{$row->room[0]->roomname}}</li>
                              </ul>
                            </div>
                            </div>
                            
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                              
                              
                              
                            </div>
                            </div>
                          </div>
                          </div>

                          <div class="container">

                    </div>

                              @break
                          @case(2)
                          <div class="cover-layer"></div>
                      <div class="modal fade" id="M{{$row->pivot->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                          <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalCenterTitle">Thông tin lịch trình</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                            <div class="container">
                              <h2>{{$row->classn[0]->classname}}</h2>
                              <ul class="list-group">
                                
                                <li class="list-group-item">Từ 10:30 Đến 12:00 </li>
                                <li class="list-group-item">Phòng: {{$row->room[0]->roomname}}</li>
                              </ul>
                            </div>
                            </div>
                            
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                              
                              
                              
                            </div>
                            </div>
                          </div>
                          </div>

                          <div class="container">

                    </div>
                              @break
                          @case(3)
                          <div class="cover-layer"></div>
                      <div class="modal fade" id="M{{$row->pivot->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                          <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalCenterTitle">Thông tin lịch trình</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                            <div class="container">
                              <h2>{{$row->classn[0]->classname}}</h2>
                              <ul class="list-group">
                                
                                <li class="list-group-item">Từ 14:00 Đến 15:30 </li>
                                <li class="list-group-item">Phòng: {{$row->room[0]->roomname}}</li>
                              </ul>
                            </div>
                            </div>
                            
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                              
                              
                              
                            </div>
                            </div>
                          </div>
                          </div>

                          <div class="container">

                    </div>
                              @break
                          @case(4)
                          <div class="cover-layer"></div>
                      <div class="modal fade" id="M{{$row->pivot->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                          <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalCenterTitle">Thông tin lịch trình</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                            <div class="container">
                              <h2>{{$row->classn[0]->classname}}</h2>
                              <ul class="list-group">
                                
                                <li class="list-group-item">Từ 15:30 Đến 17:00 </li>
                                <li class="list-group-item">Phòng: {{$row->room[0]->roomname}}</li>
                              </ul>
                            </div>
                            </div>
                            
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                              
                              
                              
                            </div>
                            </div>
                          </div>
                          </div>

                          <div class="container">

                    </div>
                              @break
                          @case(5)
                          <div class="cover-layer"></div>
                      <div class="modal fade" id="M{{$row->pivot->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                          <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalCenterTitle">Thông tin lịch trình</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                            <div class="container">
                              <h2>{{$row->classn[0]->classname}}</h2>
                              <ul class="list-group">
                                
                                <li class="list-group-item">Từ 17:00 Đến 18:30 </li>
                                <li class="list-group-item">Phòng: {{$row->room[0]->roomname}}</li>
                              </ul>
                            </div>
                            </div>
                            
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                              
                              
                              
                            </div>
                            </div>
                          </div>
                          </div>

                          <div class="container">

                    </div>
                              @break
                          @case(6)
                          <div class="cover-layer"></div>
                      <div class="modal fade" id="M{{$row->pivot->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                          <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalCenterTitle">Thông tin lịch trình</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                            <div class="container">
                              <h2>{{$row->classn[0]->classname}}</h2>
                              <ul class="list-group">
                                
                                <li class="list-group-item">Từ 18:30 Đến 20:00 </li>
                                <li class="list-group-item">Phòng: {{$row->room[0]->roomname}}</li>
                              </ul>
                            </div>
                            </div>
                            
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                              
                              
                              
                            </div>
                            </div>
                          </div>
                          </div>

                          <div class="container">

                    </div>
                              @break
                        @endswitch
                    @endif
            @endforeach

            @foreach($class->time as $row)
                      @if($row->weekdays == "Wednesday")
                      @switch($row->lesson)
                      
                      @case(1)
                      <div class="cover-layer"></div>
                      <div class="modal fade" id="M{{$row->pivot->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                          <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalCenterTitle">Thông tin lịch trình</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                            <div class="container">
                              <h2>{{$row->classn[0]->classname}}</h2>
                              <ul class="list-group">
                                
                                <li class="list-group-item">Từ 9:00 Đến 10:30 </li>
                                <li class="list-group-item">Phòng: {{$row->room[0]->roomname}}</li>
                              </ul>
                            </div>
                            </div>
                            
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                              
                              
                              
                            </div>
                            </div>
                          </div>
                          </div>

                          <div class="container">

                    </div>

                              @break
                          @case(2)
                          <div class="cover-layer"></div>
                      <div class="modal fade" id="M{{$row->pivot->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                          <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalCenterTitle">Thông tin lịch trình</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                            <div class="container">
                              <h2>{{$row->classn[0]->classname}}</h2>
                              <ul class="list-group">
                                
                                <li class="list-group-item">Từ 10:30 Đến 12:00 </li>
                                <li class="list-group-item">Phòng: {{$row->room[0]->roomname}}</li>
                              </ul>
                            </div>
                            </div>
                            
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                              
                              
                              
                            </div>
                            </div>
                          </div>
                          </div>

                          <div class="container">

                    </div>
                              @break
                          @case(3)
                          <div class="cover-layer"></div>
                      <div class="modal fade" id="M{{$row->pivot->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                          <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalCenterTitle">Thông tin lịch trình</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                            <div class="container">
                              <h2>{{$row->classn[0]->classname}}</h2>
                              <ul class="list-group">
                                
                                <li class="list-group-item">Từ 14:00 Đến 15:30 </li>
                                <li class="list-group-item">Phòng: {{$row->room[0]->roomname}}</li>
                              </ul>
                            </div>
                            </div>
                            
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                              
                              
                              
                            </div>
                            </div>
                          </div>
                          </div>

                          <div class="container">

                    </div>
                              @break
                          @case(4)
                          <div class="cover-layer"></div>
                      <div class="modal fade" id="M{{$row->pivot->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                          <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalCenterTitle">Thông tin lịch trình</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                            <div class="container">
                              <h2>{{$row->classn[0]->classname}}</h2>
                              <ul class="list-group">
                                
                                <li class="list-group-item">Từ 15:30 Đến 17:00 </li>
                                <li class="list-group-item">Phòng: {{$row->room[0]->roomname}}</li>
                              </ul>
                            </div>
                            </div>
                            
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                              
                              
                              
                            </div>
                            </div>
                          </div>
                          </div>

                          <div class="container">

                    </div>
                              @break
                          @case(5)
                          <div class="cover-layer"></div>
                      <div class="modal fade" id="M{{$row->pivot->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                          <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalCenterTitle">Thông tin lịch trình</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                            <div class="container">
                              <h2>{{$row->classn[0]->classname}}</h2>
                              <ul class="list-group">
                                
                                <li class="list-group-item">Từ 17:00 Đến 18:30 </li>
                                <li class="list-group-item">Phòng: {{$row->room[0]->roomname}}</li>
                              </ul>
                            </div>
                            </div>
                            
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                              
                              
                              
                            </div>
                            </div>
                          </div>
                          </div>

                          <div class="container">

                    </div>
                              @break
                          @case(6)
                          <div class="cover-layer"></div>
                      <div class="modal fade" id="M{{$row->pivot->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                          <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalCenterTitle">Thông tin lịch trình</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                            <div class="container">
                              <h2>{{$row->classn[0]->classname}}</h2>
                              <ul class="list-group">
                                
                                <li class="list-group-item">Từ 18:30 Đến 20:00 </li>
                                <li class="list-group-item">Phòng: {{$row->room[0]->roomname}}</li>
                              </ul>
                            </div>
                            </div>
                            
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                              
                              
                              
                            </div>
                            </div>
                          </div>
                          </div>

                          <div class="container">

                    </div>
                              @break
                        @endswitch
                    @endif
            @endforeach

            @foreach($class->time as $row)
                      @if($row->weekdays == "Thursday")
                      @switch($row->lesson)
                      
                      @case(1)
                      <div class="cover-layer"></div>
                      <div class="modal fade" id="M{{$row->pivot->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                          <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalCenterTitle">Thông tin lịch trình</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                            <div class="container">
                              <h2>{{$row->classn[0]->classname}}</h2>
                              <ul class="list-group">
                                
                                <li class="list-group-item">Từ 9:00 Đến 10:30 </li>
                                <li class="list-group-item">Phòng: {{$row->room[0]->roomname}}</li>
                              </ul>
                            </div>
                            </div>
                            
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                              
                              
                              
                            </div>
                            </div>
                          </div>
                          </div>

                          <div class="container">

                    </div>

                              @break
                          @case(2)
                          <div class="cover-layer"></div>
                      <div class="modal fade" id="M{{$row->pivot->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                          <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalCenterTitle">Thông tin lịch trình</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                            <div class="container">
                              <h2>{{$row->classn[0]->classname}}</h2>
                              <ul class="list-group">
                                
                                <li class="list-group-item">Từ 10:30 Đến 12:00 </li>
                                <li class="list-group-item">Phòng: {{$row->room[0]->roomname}}</li>
                              </ul>
                            </div>
                            </div>
                            
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                              
                              
                              
                            </div>
                            </div>
                          </div>
                          </div>

                          <div class="container">

                    </div>
                              @break
                          @case(3)
                          <div class="cover-layer"></div>
                      <div class="modal fade" id="M{{$row->pivot->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                          <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalCenterTitle">Thông tin lịch trình</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                            <div class="container">
                              <h2>{{$row->classn[0]->classname}}</h2>
                              <ul class="list-group">
                                
                                <li class="list-group-item">Từ 14:00 Đến 15:30 </li>
                                <li class="list-group-item">Phòng: {{$row->room[0]->roomname}}</li>
                              </ul>
                            </div>
                            </div>
                            
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                              
                              
                              
                            </div>
                            </div>
                          </div>
                          </div>

                          <div class="container">

                    </div>
                              @break
                          @case(4)
                          <div class="cover-layer"></div>
                      <div class="modal fade" id="M{{$row->pivot->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                          <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalCenterTitle">Thông tin lịch trình</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                            <div class="container">
                              <h2>{{$row->classn[0]->classname}}</h2>
                              <ul class="list-group">
                                
                                <li class="list-group-item">Từ 15:30 Đến 17:00 </li>
                                <li class="list-group-item">Phòng: {{$row->room[0]->roomname}}</li>
                              </ul>
                            </div>
                            </div>
                            
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                              
                              
                              
                            </div>
                            </div>
                          </div>
                          </div>

                          <div class="container">

                    </div>
                              @break
                          @case(5)
                          <div class="cover-layer"></div>
                      <div class="modal fade" id="M{{$row->pivot->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                          <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalCenterTitle">Thông tin lịch trình</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                            <div class="container">
                              <h2>{{$row->classn[0]->classname}}</h2>
                              <ul class="list-group">
                                
                                <li class="list-group-item">Từ 17:00 Đến 18:30 </li>
                                <li class="list-group-item">Phòng: {{$row->room[0]->roomname}}</li>
                              </ul>
                            </div>
                            </div>
                            
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                              
                              
                              
                            </div>
                            </div>
                          </div>
                          </div>

                          <div class="container">

                    </div>
                              @break
                          @case(6)
                          <div class="cover-layer"></div>
                      <div class="modal fade" id="M{{$row->pivot->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                          <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalCenterTitle">Thông tin lịch trình</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                            <div class="container">
                              <h2>{{$row->classn[0]->classname}}</h2>
                              <ul class="list-group">
                                
                                <li class="list-group-item">Từ 18:30 Đến 20:00 </li>
                                <li class="list-group-item">Phòng: {{$row->room[0]->roomname}}</li>
                              </ul>
                            </div>
                            </div>
                            
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                              
                              
                              
                            </div>
                            </div>
                          </div>
                          </div>

                          <div class="container">

                    </div>
                              @break
                        @endswitch
                    @endif
            @endforeach

            @foreach($class->time as $row)
                      @if($row->weekdays == "Friday")
                      @switch($row->lesson)
                      
                      @case(1)
                      <div class="cover-layer"></div>
                      <div class="modal fade" id="M{{$row->pivot->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                          <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalCenterTitle">Thông tin lịch trình</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                            <div class="container">
                              <h2>{{$row->classn[0]->classname}}</h2>
                              <ul class="list-group">
                                
                                <li class="list-group-item">Từ 9:00 Đến 10:30 </li>
                                <li class="list-group-item">Phòng: {{$row->room[0]->roomname}}</li>
                              </ul>
                            </div>
                            </div>
                            
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                              
                              
                              
                            </div>
                            </div>
                          </div>
                          </div>

                          <div class="container">

                    </div>

                              @break
                          @case(2)
                          <div class="cover-layer"></div>
                      <div class="modal fade" id="M{{$row->pivot->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                          <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalCenterTitle">Thông tin lịch trình</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                            <div class="container">
                              <h2>{{$row->classn[0]->classname}}</h2>
                              <ul class="list-group">
                                
                                <li class="list-group-item">Từ 10:30 Đến 12:00 </li>
                                <li class="list-group-item">Phòng: {{$row->room[0]->roomname}}</li>
                              </ul>
                            </div>
                            </div>
                            
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                              
                              
                              
                            </div>
                            </div>
                          </div>
                          </div>

                          <div class="container">

                    </div>
                              @break
                          @case(3)
                          <div class="cover-layer"></div>
                      <div class="modal fade" id="M{{$row->pivot->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                          <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalCenterTitle">Thông tin lịch trình</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                            <div class="container">
                              <h2>{{$row->classn[0]->classname}}</h2>
                              <ul class="list-group">
                                
                                <li class="list-group-item">Từ 14:00 Đến 15:30 </li>
                                <li class="list-group-item">Phòng: {{$row->room[0]->roomname}}</li>
                              </ul>
                            </div>
                            </div>
                            
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                              
                              
                              
                            </div>
                            </div>
                          </div>
                          </div>

                          <div class="container">

                    </div>
                              @break
                          @case(4)
                          <div class="cover-layer"></div>
                      <div class="modal fade" id="M{{$row->pivot->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                          <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalCenterTitle">Thông tin lịch trình</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                            <div class="container">
                              <h2>{{$row->classn[0]->classname}}</h2>
                              <ul class="list-group">
                                
                                <li class="list-group-item">Từ 15:30 Đến 17:00 </li>
                                <li class="list-group-item">Phòng: {{$row->room[0]->roomname}}</li>
                              </ul>
                            </div>
                            </div>
                            
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                              
                              
                              
                            </div>
                            </div>
                          </div>
                          </div>

                          <div class="container">

                    </div>
                              @break
                          @case(5)
                          <div class="cover-layer"></div>
                      <div class="modal fade" id="M{{$row->pivot->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                          <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalCenterTitle">Thông tin lịch trình</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                            <div class="container">
                              <h2>{{$row->classn[0]->classname}}</h2>
                              <ul class="list-group">
                                
                                <li class="list-group-item">Từ 17:00 Đến 18:30 </li>
                                <li class="list-group-item">Phòng: {{$row->room[0]->roomname}}</li>
                              </ul>
                            </div>
                            </div>
                            
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                              
                              
                              
                            </div>
                            </div>
                          </div>
                          </div>

                          <div class="container">

                    </div>
                              @break
                          @case(6)
                          <div class="cover-layer"></div>
                      <div class="modal fade" id="M{{$row->pivot->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                          <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalCenterTitle">Thông tin lịch trình</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                            <div class="container">
                              <h2>{{$row->classn[0]->classname}}</h2>
                              <ul class="list-group">
                                
                                <li class="list-group-item">Từ 18:30 Đến 20:00 </li>
                                <li class="list-group-item">Phòng: {{$row->room[0]->roomname}}</li>
                              </ul>
                            </div>
                            </div>
                            
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                              
                              
                              
                            </div>
                            </div>
                          </div>
                          </div>

                          <div class="container">

                    </div>
                              @break
                        @endswitch
                    @endif
            @endforeach

            @foreach($class->time as $row)
                      @if($row->weekdays == "Saturday")
                      @switch($row->lesson)
                      
                      @case(1)
                      <div class="cover-layer"></div>
                      <div class="modal fade" id="M{{$row->pivot->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                          <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalCenterTitle">Thông tin lịch trình</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                            <div class="container">
                              <h2>{{$row->classn[0]->classname}}</h2>
                              <ul class="list-group">
                                
                                <li class="list-group-item">Từ 9:00 Đến 10:30 </li>
                                <li class="list-group-item">Phòng: {{$row->room[0]->roomname}}</li>
                              </ul>
                            </div>
                            </div>
                            
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                              
                              
                              
                            </div>
                            </div>
                          </div>
                          </div>

                          <div class="container">

                    </div>

                              @break
                          @case(2)
                          <div class="cover-layer"></div>
                      <div class="modal fade" id="M{{$row->pivot->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                          <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalCenterTitle">Thông tin lịch trình</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                            <div class="container">
                              <h2>{{$row->classn[0]->classname}}</h2>
                              <ul class="list-group">
                                
                                <li class="list-group-item">Từ 10:30 Đến 12:00 </li>
                                <li class="list-group-item">Phòng: {{$row->room[0]->roomname}}</li>
                              </ul>
                            </div>
                            </div>
                            
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                              
                              
                              
                            </div>
                            </div>
                          </div>
                          </div>

                          <div class="container">

                    </div>
                              @break
                          @case(3)
                          <div class="cover-layer"></div>
                      <div class="modal fade" id="M{{$row->pivot->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                          <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalCenterTitle">Thông tin lịch trình</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                            <div class="container">
                              <h2>{{$row->classn[0]->classname}}</h2>
                              <ul class="list-group">
                                
                                <li class="list-group-item">Từ 14:00 Đến 15:30 </li>
                                <li class="list-group-item">Phòng: {{$row->room[0]->roomname}}</li>
                              </ul>
                            </div>
                            </div>
                            
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                              
                              
                              
                            </div>
                            </div>
                          </div>
                          </div>

                          <div class="container">

                    </div>
                              @break
                          @case(4)
                          <div class="cover-layer"></div>
                      <div class="modal fade" id="M{{$row->pivot->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                          <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalCenterTitle">Thông tin lịch trình</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                            <div class="container">
                              <h2>{{$row->classn[0]->classname}}</h2>
                              <ul class="list-group">
                                
                                <li class="list-group-item">Từ 15:30 Đến 17:00 </li>
                                <li class="list-group-item">Phòng: {{$row->room[0]->roomname}}</li>
                              </ul>
                            </div>
                            </div>
                            
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                              
                              
                              
                            </div>
                            </div>
                          </div>
                          </div>

                          <div class="container">

                    </div>
                              @break
                          @case(5)
                          <div class="cover-layer"></div>
                      <div class="modal fade" id="M{{$row->pivot->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                          <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalCenterTitle">Thông tin lịch trình</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                            <div class="container">
                              <h2>{{$row->classn[0]->classname}}</h2>
                              <ul class="list-group">
                                
                                <li class="list-group-item">Từ 17:00 Đến 18:30 </li>
                                <li class="list-group-item">Phòng: {{$row->room[0]->roomname}}</li>
                              </ul>
                            </div>
                            </div>
                            
                            <div class="modal-footer">
                            
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                              
                              
                              
                            </div>
                            </div>
                          </div>
                          </div>

                          <div class="container">

                    </div>
                              @break
                          @case(6)
                          <div class="cover-layer"></div>
                      <div class="modal fade" id="M{{$row->pivot->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                          <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalCenterTitle">Thông tin lịch trình</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                            <div class="container">
                              <h2>{{$row->classn[0]->classname}}</h2>
                              <ul class="list-group">
                                
                                <li class="list-group-item">Từ 18:30 Đến 20:00 </li>
                                <li class="list-group-item">Phòng: {{$row->room[0]->roomname}}</li>
                              </ul>
                            </div>
                            </div>
                            
                            <div class="modal-footer">
                            
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                              
                              
                              
                            </div>
                            </div>
                          </div>
                          </div>

                          <div class="container">

                    </div>
                              @break
                        @endswitch
                    @endif
            @endforeach
	




	
	<script src="http://code.jquery.com/jquery-3.4.1.js"></script>
    <!-- Bootstrap core JavaScript-->
    <script src="{{asset('/vendor/jquery/jquery.min.js')}}"></script>
	<script src="{{asset('/js/schedule.js')}}"></script>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>


</div>
 <!-- .cd-schedule -->

 


 @endsection