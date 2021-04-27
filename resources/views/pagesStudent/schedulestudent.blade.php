@extends('layouts.StudentMaster')
@section('Studentmaster')

<div class="d-flex justify-content-center">
<div class="col-lg-12">
        <div class="p-5">
            <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Danh sách tài khoản</h1>
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
    
 

    <h1 class="text-xl">Schedule Template</h1>
  </header>
  

  <div class="cd-schedule cd-schedule--loading margin-top-lg margin-bottom-lg js-cd-schedule">
    <div class="cd-schedule__timeline">
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
    </div> <!-- .cd-schedule__timeline -->
    
    <div class="cd-schedule__events">
      <ul>
      <li class="cd-schedule__group">
        
        <div class="cd-schedule__top-info"><span>Monday</span></div>
        
        <ul>
        
            @foreach($class->time as $row)
                      @if($row->weekdays == "Monday")
                      @switch($row->lesson)
                      
                          @case(1)
                          <li class="cd-schedule__event">
                            <a data-start="9:00" data-end="10:30" data-content="event-abs-circuit" data-event="event-1" href="#0">
                              <em class="cd-schedule__name">{{$row->room[0]->roomname}}<br>{{$class->course->coursename}}</em>
                            </a>
                          </li>
                              @break
                          @case(2)
                            <li class="cd-schedule__event">
                            <a data-start="10:30" data-end="12:00" data-content="event-abs-circuit" data-event="event-1" href="#0">
                              <em class="cd-schedule__name">{{$row->room[0]->roomname}}<br>{{$class->course->coursename}}</em>
                            </a>
                          </li>
                              @break
                          @case(3)
                          <li class="cd-schedule__event">
                            <a data-start="14:00" data-end="15:30" data-content="event-abs-circuit" data-event="event-1" href="#0">
                              <em class="cd-schedule__name">{{$row->room[0]->roomname}}<br>{{$class->course->coursename}}</em>
                            </a>
                          </li>
                              @break
                          @case(4)
                          <li class="cd-schedule__event">
                            <a data-start="15:30" data-end="17:00" data-content="event-abs-circuit" data-event="event-1" href="#0">
                              <em class="cd-schedule__name">{{$row->room[0]->roomname}}<br>{{$class->course->coursename}}</em>
                            </a>
                          </li>
                              @break
                          @case(5)
                            <li class="cd-schedule__event">
                              <a data-start="17:00" data-end="18:30" data-content="event-abs-circuit" data-event="event-1" href="#0">
                                <em class="cd-schedule__name">{{$row->room[0]->roomname}}<br>{{$class->course->coursename}}</em>
                              </a>
                            </li>
                              @break
                          @case(6)
                            <li class="cd-schedule__event">
                              <a data-start="18:30" data-end="20:00" data-content="event-abs-circuit" data-event="event-1" href="#0">
                                <em class="cd-schedule__name">{{$row->room[0]->roomname}}<br>{{$class->course->coursename}}</em>
                              </a>
                            </li>
                              @break
                        @endswitch
                    @endif
            @endforeach
        
        </ul>
    </li>
        
  
        <li class="cd-schedule__group">
          <div class="cd-schedule__top-info"><span>Tuesday</span></div>
  
          <ul>
          @foreach($class->time as $row)
                      @if($row->weekdays == "Tuesday")
                      @switch($row->lesson)
                      
                      @case(1)
                          <li class="cd-schedule__event">
                            <a data-start="9:00" data-end="10:30" data-content="event-abs-circuit" data-event="event-1" href="#0">
                              <em class="cd-schedule__name">{{$row->room[0]->roomname}}<br>{{$class->course->coursename}}</em>
                            </a>
                          </li>
                              @break
                          @case(2)
                            <li class="cd-schedule__event">
                            <a data-start="10:30" data-end="12:00" data-content="event-abs-circuit" data-event="event-1" href="#0">
                              <em class="cd-schedule__name">{{$row->room[0]->roomname}}<br>{{$class->course->coursename}}</em>
                            </a>
                          </li>
                              @break
                          @case(3)
                          <li class="cd-schedule__event">
                            <a data-start="14:00" data-end="15:30" data-content="event-abs-circuit" data-event="event-1" href="#0">
                              <em class="cd-schedule__name">{{$row->room[0]->roomname}}<br>{{$class->course->coursename}}</em>
                            </a>
                          </li>
                              @break
                          @case(4)
                          <li class="cd-schedule__event">
                            <a data-start="15:30" data-end="17:00" data-content="event-abs-circuit" data-event="event-1" href="#0">
                              <em class="cd-schedule__name">{{$row->room[0]->roomname}}<br>{{$class->course->coursename}}</em>
                            </a>
                          </li>
                              @break
                          @case(5)
                            <li class="cd-schedule__event">
                              <a data-start="17:00" data-end="18:30" data-content="event-abs-circuit" data-event="event-1" href="#0">
                                <em class="cd-schedule__name">{{$row->room[0]->roomname}}<br>{{$class->course->coursename}}</em>
                              </a>
                            </li>
                              @break
                          @case(6)
                            <li class="cd-schedule__event">
                              <a data-start="18:30" data-end="20:00" data-content="event-abs-circuit" data-event="event-1" href="#0">
                                <em class="cd-schedule__name">{{$row->room[0]->roomname}}<br>{{$class->course->coursename}}</em>
                              </a>
                            </li>
                              @break
                        @endswitch
                    @endif
            @endforeach
          </ul>
        </li>
  
        <li class="cd-schedule__group">
          <div class="cd-schedule__top-info"><span>Wednesday</span></div>
  
          <ul>
          @foreach($class->time as $row)
                      @if($row->weekdays == "Wednesday")
                      @switch($row->lesson)
                      
                      @case(1)
                          <li class="cd-schedule__event">
                            <a data-start="9:00" data-end="10:30" data-content="event-abs-circuit" data-event="event-1" href="#0">
                              <em class="cd-schedule__name">{{$row->room[0]->roomname}}<br>{{$class->course->coursename}}</em>
                            </a>
                          </li>
                              @break
                          @case(2)
                            <li class="cd-schedule__event">
                            <a data-start="10:30" data-end="12:00" data-content="event-abs-circuit" data-event="event-1" href="#0">
                              <em class="cd-schedule__name">{{$row->room[0]->roomname}}<br>{{$class->course->coursename}}</em>
                            </a>
                          </li>
                              @break
                          @case(3)
                          <li class="cd-schedule__event">
                            <a data-start="14:00" data-end="15:30" data-content="event-abs-circuit" data-event="event-1" href="#0">
                              <em class="cd-schedule__name">{{$row->room[0]->roomname}}<br>{{$class->course->coursename}}</em>
                            </a>
                          </li>
                              @break
                          @case(4)
                          <li class="cd-schedule__event">
                            <a data-start="15:30" data-end="17:00" data-content="event-abs-circuit" data-event="event-1" href="#0">
                              <em class="cd-schedule__name">{{$row->room[0]->roomname}}<br>{{$class->course->coursename}}</em>
                            </a>
                          </li>
                              @break
                          @case(5)
                            <li class="cd-schedule__event">
                              <a data-start="17:00" data-end="18:30" data-content="event-abs-circuit" data-event="event-1" href="#0">
                                <em class="cd-schedule__name">{{$row->room[0]->roomname}}<br>{{$class->course->coursename}}</em>
                              </a>
                            </li>
                              @break
                          @case(6)
                            <li class="cd-schedule__event">
                              <a data-start="18:30" data-end="20:00" data-content="event-abs-circuit" data-event="event-1" href="#0">
                                <em class="cd-schedule__name">{{$row->room[0]->roomname}}<br>{{$class->course->coursename}}</em>
                              </a>
                            </li>
                              @break
                        @endswitch
                    @endif
            @endforeach
            
  
           
          </ul>
        </li>
  
        <li class="cd-schedule__group">
          <div class="cd-schedule__top-info"><span>Thursday</span></div>
  
          <ul>
          @foreach($class->time as $row)
                      @if($row->weekdays == "Thursday")
                      @switch($row->lesson)
                      
                      @case(1)
                          <li class="cd-schedule__event">
                            <a data-start="9:00" data-end="10:30" data-content="event-abs-circuit" data-event="event-1" href="#0">
                              <em class="cd-schedule__name">{{$row->room[0]->roomname}}<br>{{$class->course->coursename}}</em>
                            </a>
                          </li>
                              @break
                          @case(2)
                            <li class="cd-schedule__event">
                            <a data-start="10:30" data-end="12:00" data-content="event-abs-circuit" data-event="event-1" href="#0">
                              <em class="cd-schedule__name">{{$row->room[0]->roomname}}<br>{{$class->course->coursename}}</em>
                            </a>
                          </li>
                              @break
                          @case(3)
                          <li class="cd-schedule__event">
                            <a data-start="14:00" data-end="15:30" data-content="event-abs-circuit" data-event="event-1" href="#0">
                              <em class="cd-schedule__name">{{$row->room[0]->roomname}}<br>{{$class->course->coursename}}</em>
                            </a>
                          </li>
                              @break
                          @case(4)
                          <li class="cd-schedule__event">
                            <a data-start="15:30" data-end="17:00" data-content="event-abs-circuit" data-event="event-1" href="#0">
                              <em class="cd-schedule__name">{{$row->room[0]->roomname}}<br>{{$class->course->coursename}}</em>
                            </a>
                          </li>
                              @break
                          @case(5)
                            <li class="cd-schedule__event">
                              <a data-start="17:00" data-end="18:30" data-content="event-abs-circuit" data-event="event-1" href="#0">
                                <em class="cd-schedule__name">{{$row->room[0]->roomname}}<br>{{$class->course->coursename}}</em>
                              </a>
                            </li>
                              @break
                          @case(6)
                            <li class="cd-schedule__event">
                              <a data-start="18:30" data-end="20:00" data-content="event-abs-circuit" data-event="event-1" href="#0">
                                <em class="cd-schedule__name">{{$row->room[0]->roomname}}<br>{{$class->course->coursename}}</em>
                              </a>
                            </li>
                              @break
                        @endswitch
                    @endif
            @endforeach
          </ul>
        </li>

       
  
        <li class="cd-schedule__group">
          <div class="cd-schedule__top-info"><span>Friday</span></div>
                     
          <ul>
          @foreach($class->time as $row)
                      @if($row->weekdays == "Friday")
                      @switch($row->lesson)
                      
                      @case(1)
                          <li class="cd-schedule__event">
                            <a data-start="9:00" data-end="10:30" data-content="event-abs-circuit" data-event="event-1" href="#0">
                              <em class="cd-schedule__name">{{$row->room[0]->roomname}}<br>{{$class->course->coursename}}</em>
                            </a>
                          </li>
                              @break
                          @case(2)
                            <li class="cd-schedule__event">
                            <a data-start="10:30" data-end="12:00" data-content="event-abs-circuit" data-event="event-1" href="#0">
                              <em class="cd-schedule__name">{{$row->room[0]->roomname}}<br>{{$class->course->coursename}}</em>
                            </a>
                          </li>
                              @break
                          @case(3)
                          <li class="cd-schedule__event">
                            <a data-start="14:00" data-end="15:30" data-content="event-abs-circuit" data-event="event-1" href="#0">
                              <em class="cd-schedule__name">{{$row->room[0]->roomname}}<br>{{$class->course->coursename}}</em>
                            </a>
                          </li>
                              @break
                          @case(4)
                          <li class="cd-schedule__event">
                            <a data-start="15:30" data-end="17:00" data-content="event-abs-circuit" data-event="event-1" href="#0">
                              <em class="cd-schedule__name">{{$row->room[0]->roomname}}<br>{{$class->course->coursename}}</em>
                            </a>
                          </li>
                              @break
                          @case(5)
                            <li class="cd-schedule__event">
                              <a data-start="17:00" data-end="18:30" data-content="event-abs-circuit" data-event="event-1" href="#0">
                                <em class="cd-schedule__name">{{$row->room[0]->roomname}}<br>{{$class->course->coursename}}</em>
                              </a>
                            </li>
                              @break
                          @case(6)
                            <li class="cd-schedule__event">
                              <a data-start="18:30" data-end="20:00" data-content="event-abs-circuit" data-event="event-1" href="#0">
                                <em class="cd-schedule__name">{{$row->room[0]->roomname}}<br>{{$class->course->coursename}}</em>
                              </a>
                            </li>
                              @break
                        @endswitch
                    @endif
            @endforeach
          </ul>
        </li>
        <li class="cd-schedule__group">
          <div class="cd-schedule__top-info"><span>Saturday</span></div>
  
          <ul>
          @foreach($class->time as $row)
                      @if($row->weekdays == "Saturday")
                      @switch($row->lesson)
                      
                      @case(1)
                          <li class="cd-schedule__event">
                            <a data-start="9:00" data-end="10:30" data-content="event-abs-circuit" data-event="event-1" href="#0">
                              <em class="cd-schedule__name">{{$row->room[0]->roomname}}<br>{{$class->course->coursename}}</em>
                            </a>
                          </li>
                              @break
                          @case(2)
                            <li class="cd-schedule__event">
                            <a data-start="10:30" data-end="12:00" data-content="event-abs-circuit" data-event="event-1" href="#0">
                              <em class="cd-schedule__name">{{$row->room[0]->roomname}}<br>{{$class->course->coursename}}</em>
                            </a>
                          </li>
                              @break
                          @case(3)
                          <li class="cd-schedule__event">
                            <a data-start="14:00" data-end="15:30" data-content="event-abs-circuit" data-event="event-1" href="#0">
                              <em class="cd-schedule__name">{{$row->room[0]->roomname}}<br>{{$class->course->coursename}}</em>
                            </a>
                          </li>
                              @break
                          @case(4)
                          <li class="cd-schedule__event">
                            <a data-start="15:30" data-end="17:00" data-content="event-abs-circuit" data-event="event-1" href="#0">
                              <em class="cd-schedule__name">{{$row->room[0]->roomname}}<br>{{$class->course->coursename}}</em>
                            </a>
                          </li>
                              @break
                          @case(5)
                            <li class="cd-schedule__event">
                              <a data-start="17:00" data-end="18:30" data-content="event-abs-circuit" data-event="event-1" href="#0">
                                <em class="cd-schedule__name">{{$row->room[0]->roomname}}<br>{{$class->course->coursename}}</em>
                              </a>
                            </li>
                              @break
                          @case(6)
                            <li class="cd-schedule__event">
                              <a data-start="18:30" data-end="20:00" data-content="event-abs-circuit" data-event="event-1" href="#0">
                                <em class="cd-schedule__name">{{$row->room[0]->roomname}}<br>{{$class->course->coursename}}</em>
                              </a>
                            </li>
                              @break
                        @endswitch
                    @endif
            @endforeach
          </ul>
        </li>
      </ul>
    </div>
  
    <div class="cd-schedule-modal">
      <header class="cd-schedule-modal__header">
        <div class="cd-schedule-modal__content">
          <span class="cd-schedule-modal__date"></span>
          <h3 class="cd-schedule-modal__name"></h3>
        </div>
  
        <div class="cd-schedule-modal__header-bg"></div>
      </header>
  
      <div class="cd-schedule-modal__body">
        

        <div class="cd-schedule-modal__body">
        <div class="cd-schedule-modal__event-info">
        <div style="display: flex">
        
          "asjdhakjisdlakjihsdl"
        </div>
        </div>

        <div class="cd-schedule-modal__body-bg"></div>
      </div>
  
      <a href="#0" class="cd-schedule-modal__close text-replace">Close</a>
    </div>
  
    <div class="cd-schedule__cover-layer"></div>
  </div> <!-- .cd-schedule -->
 



@endsection