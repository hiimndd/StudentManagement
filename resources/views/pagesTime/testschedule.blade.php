<link rel="stylesheet" href="{{asset('css/schedule.css')}}">
<link rel="stylesheet" href="{{asset('css/modal.css')}}">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<br />
<p class="codyhouse">link to the site of Codyhouse: <a href="https://codyhouse.co/gem/schedule-template/">https://codyhouse.co/gem/schedule-template/</a></p>
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
								<a type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter" >
									<em class="event-name">{{$row->room[0]->roomname}}<br>{{$class->course->coursename}}</em>
								</a>
							</li>
                              @break
                          @case(2)
						  <li  class="single-event" data-start="10:30" data-end="12:00" >
								<a type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter" >
									<em class="event-name">{{$row->room[0]->roomname}}<br>{{$class->course->coursename}}</em>
								</a>
							</li>
                              @break
                          @case(3)
						  <li  class="single-event" data-start="14:00" data-end="15:30" >
								<a type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter" >
									<em class="event-name">{{$row->room[0]->roomname}}<br>{{$class->course->coursename}}</em>
								</a>
							</li>
                              @break
                          @case(4)
                          <li  class="single-event" data-start="15:30" data-end="17:00" >
								<a type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter" >
									<em class="event-name">{{$row->room[0]->roomname}}<br>{{$class->course->coursename}}</em>
								</a>
							</li>
                              @break
                          @case(5)
						  <li  class="single-event" data-start="17:00" data-end="18:30" >
								<a type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter" >
									<em class="event-name">{{$row->room[0]->roomname}}<br>{{$class->course->coursename}}</em>
								</a>
							</li>
                              @break
                          @case(6)
						  	<li  class="single-event" data-start="18:30" data-end="20:00" >
								<a type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter" >
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
								<a type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter" >
									<em class="event-name">{{$row->room[0]->roomname}}<br>{{$class->course->coursename}}</em>
								</a>
							</li>
                              @break
                          @case(2)
						  <li  class="single-event" data-start="10:30" data-end="12:00" >
								<a type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter" >
									<em class="event-name">{{$row->room[0]->roomname}}<br>{{$class->course->coursename}}</em>
								</a>
							</li>
                              @break
                          @case(3)
						  <li  class="single-event" data-start="14:00" data-end="15:30" >
								<a type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter" >
									<em class="event-name">{{$row->room[0]->roomname}}<br>{{$class->course->coursename}}</em>
								</a>
							</li>
                              @break
                          @case(4)
                          <li  class="single-event" data-start="15:30" data-end="17:00" >
								<a type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter" >
									<em class="event-name">{{$row->room[0]->roomname}}<br>{{$class->course->coursename}}</em>
								</a>
							</li>
                              @break
                          @case(5)
						  <li  class="single-event" data-start="17:00" data-end="18:30" >
								<a type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter" >
									<em class="event-name">{{$row->room[0]->roomname}}<br>{{$class->course->coursename}}</em>
								</a>
							</li>
                              @break
                          @case(6)
						  	<li  class="single-event" data-start="18:30" data-end="20:00" >
								<a type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter" >
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
								<a type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter" >
									<em class="event-name">{{$row->room[0]->roomname}}<br>{{$class->course->coursename}}</em>
								</a>
							</li>
                              @break
                          @case(2)
						  <li  class="single-event" data-start="10:30" data-end="12:00" >
								<a type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" >
									<em class="event-name">{{$row->room[0]->roomname}}<br>{{$class->course->coursename}}</em>
								</a>
							</li>
                              @break
                          @case(3)
						  <li  class="single-event" data-start="14:00" data-end="15:30" >
								<a type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter" >
									<em class="event-name">{{$row->room[0]->roomname}}<br>{{$class->course->coursename}}</em>
								</a>
							</li>
                              @break
                          @case(4)
                          <li  class="single-event" data-start="15:30" data-end="17:00" >
								<a type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter" >
									<em class="event-name">{{$row->room[0]->roomname}}<br>{{$class->course->coursename}}</em>
								</a>
							</li>
                              @break
                          @case(5)
						  <li  class="single-event" data-start="17:00" data-end="18:30" >
								<a type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter" >
									<em class="event-name">{{$row->room[0]->roomname}}<br>{{$class->course->coursename}}</em>
								</a>
							</li>
                              @break
                          @case(6)
						  	<li  class="single-event" data-start="18:30" data-end="20:00" >
								<a type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter" >
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
								<a type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter" >
									<em class="event-name">{{$row->room[0]->roomname}}<br>{{$class->course->coursename}}</em>
								</a>
							</li>
                              @break
                          @case(2)
						  <li  class="single-event" data-start="10:30" data-end="12:00" >
								<a type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter" >
									<em class="event-name">{{$row->room[0]->roomname}}<br>{{$class->course->coursename}}</em>
								</a>
							</li>
                              @break
                          @case(3)
						  <li  class="single-event" data-start="14:00" data-end="15:30" >
								<a type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter" >
									<em class="event-name">{{$row->room[0]->roomname}}<br>{{$class->course->coursename}}</em>
								</a>
							</li>
                              @break
                          @case(4)
                          <li  class="single-event" data-start="15:30" data-end="17:00" >
								<a type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter" >
									<em class="event-name">{{$row->room[0]->roomname}}<br>{{$class->course->coursename}}</em>
								</a>
							</li>
                              @break
                          @case(5)
						  <li  class="single-event" data-start="17:00" data-end="18:30" >
								<a type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter" >
									<em class="event-name">{{$row->room[0]->roomname}}<br>{{$class->course->coursename}}</em>
								</a>
							</li>
                              @break
                          @case(6)
						  	<li  class="single-event" data-start="18:30" data-end="20:00" >
								<a type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter" >
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
								<a type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter" >
									<em class="event-name">{{$row->room[0]->roomname}}<br>{{$class->course->coursename}}</em>
								</a>
							</li>
                              @break
                          @case(2)
						  <li  class="single-event" data-start="10:30" data-end="12:00" >
								<a type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter" >
									<em class="event-name">{{$row->room[0]->roomname}}<br>{{$class->course->coursename}}</em>
								</a>
							</li>
                              @break
                          @case(3)
						  <li  class="single-event" data-start="14:00" data-end="15:30" >
								<a type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter" >
									<em class="event-name">{{$row->room[0]->roomname}}<br>{{$class->course->coursename}}</em>
								</a>
							</li>
                              @break
                          @case(4)
                          <li  class="single-event" data-start="15:30" data-end="17:00" >
								<a type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter" >
									<em class="event-name">{{$row->room[0]->roomname}}<br>{{$class->course->coursename}}</em>
								</a>
							</li>
                              @break
                          @case(5)
						  <li  class="single-event" data-start="17:00" data-end="18:30" >
								<a type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter" >
									<em class="event-name">{{$row->room[0]->roomname}}<br>{{$class->course->coursename}}</em>
								</a>
							</li>
                              @break
                          @case(6)
						  	<li  class="single-event" data-start="18:30" data-end="20:00" >
								<a type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter" >
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
								<a type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter" >
									<em class="event-name">{{$row->room[0]->roomname}}<br>{{$class->course->coursename}}</em>
								</a>
							</li>
                              @break
                          @case(2)
						  <li  class="single-event" data-start="10:30" data-end="12:00" >
								<a type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter" >
									<em class="event-name">{{$row->room[0]->roomname}}<br>{{$class->course->coursename}}</em>
								</a>
							</li>
                              @break
                          @case(3)
						  <li  class="single-event" data-start="14:00" data-end="15:30" >
								<a type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter" >
									<em class="event-name">{{$row->room[0]->roomname}}<br>{{$class->course->coursename}}</em>
								</a>
							</li>
                              @break
                          @case(4)
                          <li  class="single-event" data-start="15:30" data-end="17:00" >
								<a type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter" >
									<em class="event-name">{{$row->room[0]->roomname}}<br>{{$class->course->coursename}}</em>
								</a>
							</li>
                              @break
                          @case(5)
						  <li  class="single-event" data-start="17:00" data-end="18:30" >
								<a type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter" >
									<em class="event-name">{{$row->room[0]->roomname}}<br>{{$class->course->coursename}}</em>
								</a>
							</li>
                              @break
                          @case(6)
						  	<li  class="single-event" data-start="18:30" data-end="20:00" >
								<a type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter" >
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
	
	<div class="cover-layer"></div>
	
	<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered" role="document">
				<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalCenterTitle">Modal title</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
				CLose Modal
				</div>
				
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					<button type="button" class="btn btn-primary">Save changes</button>
				</div>
				</div>
			</div>
			</div>

			<div class="container">

</div>


	
	<script src="http://code.jquery.com/jquery-3.4.1.js"></script>
    <!-- Bootstrap core JavaScript-->
    <script src="{{asset('/vendor/jquery/jquery.min.js')}}"></script>
	<script src="{{asset('/js/schedule.js')}}"></script>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</div>
 <!-- .cd-schedule -->
