@extends('layout.app')
@section('content')
<div class="right_col" role="main">
          <!-- top tiles -->
          <div style="text-align: center">
			  <h1 style="color: rgb(92, 92, 219)">Attendence Management System</h1>
			  <h5>Choose a Class for attendence</h5>
		  </div>

       <div class="row" style="margin-top: 60px;">
              <div class="col-md-4">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>All Class<small>Sessions</small></h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <article class="media event">
                      <a class="pull-left date">
                        <p class="month">Class</p>
                        <p class="day">0</p>
                      </a>
                      <div class="media-body">
                        &nbsp;
                        <a href="{{ route('student.attendence.list','1') }}"><p style="font-size: 15px" class="text text-success">View Attendence</p></a>
                      </div>
                    </article><br>
                    <article class="media event">
                      <a class="pull-left date">
                        <p class="month">Class</p>
                        <p class="day">KG</p>
                      </a>
                      <div class="media-body">
                        &nbsp;
                        <a href="{{ route('student.attendence.list','2') }}"><p style="font-size: 15px" class="text text-success">View Attendence</p></a>
                      </div>
                    </article><br>
                    <article class="media event">
                      <a class="pull-left date">
                        <p class="month">Class</p>
                        <p class="day">KG</p>
                      </a>
                      <div class="media-body">
                        &nbsp;
                        <a href="{{ route('student.attendence.list','3') }}"><p style="font-size: 15px" class="text text-success">View Attendence</p></a>
                      </div>
                    </article><br>
                    <article class="media event">
                      <a class="pull-left date">
                        <p class="month">Class</p>
                        <p class="day">1</p>
                      </a>
                      <div class="media-body">
                        &nbsp;
                        <a href="{{ route('student.attendence.list','4') }}"><p style="font-size: 15px" class="text text-success">View Attendence</p></a>
                      </div>
                    </article><br>
                    <article class="media event">
                      <a class="pull-left date">
                        <p class="month">Class</p>
                        <p class="day">2</p>
                      </a>
                      <div class="media-body">
                        &nbsp;
                        <a href="{{ route('student.attendence.list','5') }}"><p style="font-size: 15px" class="text text-success">View Attendence</p></a>
                      </div>
                    </article><br>
                    <article class="media event">
                      <a class="pull-left date">
                        <p class="month">Class</p>
                        <p class="day">3</p>
                      </a>
                      <div class="media-body">
                        &nbsp;
                        <a href="{{ route('student.attendence.list','6') }}"><p style="font-size: 15px" class="text text-success">View Attendence</p></a>
                      </div>
                    </article>
                  </div>
                </div>
              </div>

              <div class="col-md-4">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>All Class<small>Sessions</small></h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <article class="media event">
                      <a class="pull-left date">
                        <p class="month">Class</p>
                        <p class="day">4</p>
                      </a>
                      <div class="media-body">
                        &nbsp;
                        <a href="{{ route('student.attendence.list','7') }}"><p style="font-size: 15px" class="text text-success">View Attendence</p></a>
                      </div>
                    </article><br>
                    <article class="media event">
                      <a class="pull-left date">
                        <p class="month">Class</p>
                        <p class="day">5</p>
                      </a>
                      <div class="media-body">
                        &nbsp;
                        <a href="{{ route('student.attendence.list','8') }}"><p style="font-size: 15px" class="text text-success">View Attendence</p></a>
                      </div>
                    </article><br>
                    <article class="media event">
                      <a class="pull-left date">
                        <p class="month">Class</p>
                        <p class="day">6</p>
                      </a>
                      <div class="media-body">
                        &nbsp;
                        <a href="{{ route('student.attendence.list','9') }}"><p style="font-size: 15px" class="text text-success">View Attendence</p></a>
                      </div>
                    </article><br>
                    <article class="media event">
                      <a class="pull-left date">
                        <p class="month">Class</p>
                        <p class="day">7</p>
                      </a>
                      <div class="media-body">
                        &nbsp;
                        <a href="{{ route('student.attendence.list','10') }}"><p style="font-size: 15px" class="text text-success">View Attendence</p></a>
                      </div>
                    </article><br>
                    <article class="media event">
                      <a class="pull-left date">
                        <p class="month">Class</p>
                        <p class="day">8</p>
                      </a>
                      <div class="media-body">
                        &nbsp;
                        <a href="{{ route('student.attendence.list','11') }}"><p style="font-size: 15px" class="text text-success">View Attendence</p></a>
                      </div>
                    </article><br>
                    <article class="media event">
                      <a class="pull-left date">
                        <p class="month">Class</p>
                        <p class="day">9</p>
                      </a>
                      <div class="media-body">
                        &nbsp;
                        <a href="{{ route('student.attendence.list','12') }}"><p style="font-size: 15px" class="text text-success">View Attendence</p></a>
                      </div>
                    </article>
                  </div>
                </div>
              </div>

               <div class="col-md-4">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>All Class<small>Sessions</small></h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    
                    <article class="media event">
                      <a class="pull-left date">
                        <p class="month">Class</p>
                        <p class="day">10</p>
                      </a>
                      <div class="media-body">
                        &nbsp;
                        <a href="{{ route('student.attendence.list','13') }}"><p style="font-size: 15px" class="text text-success">View Attendence</p></a>
                      </div>
                    </article><br>
                    <article class="media event">
                      <a class="pull-left date">
                        <p class="month">Class</p>
                        <p class="day">11</p>
                      </a>
                      <div class="media-body">
                        &nbsp;
                        <a href="{{ route('student.attendence.list','14') }}"><p style="font-size: 15px" class="text text-success">View Attendence</p></a>
                      </div>
                    </article><br>
                    <article class="media event">
                      <a class="pull-left date">
                        <p class="month">Class</p>
                        <p class="day">12</p>
                      </a>
                      <div class="media-body">
                        &nbsp;
                        <a href="{{ route('student.attendence.list','15') }}"><p style="font-size: 15px" class="text text-success">View Attendence</p></a>
                      </div>
                    </article><br>
                    {{-- <article class="media event">
                      <a class="pull-left date">
                        <p class="month">Teacher</p>
                        <p class="day">.</p>
                      </a>
                      <div class="media-body">
                        <a class="title special_chars" href="{{ route('teacher.index') }}">Teacher</a>
                        <p>Detail about Teacher.</p>
                      </div>
                    </article><br>
                    <article class="media event ">
                      <a class="pull-left date ">
                        <p class="month">Staff</p>
                        <p class="day">.</p>
                      </a>
                      <div class="media-body">
                        <a class="title special_chars" href="{{ route('staff.index') }}">Staff</a>
                        <p>Detail about Staff.</p>
                      </div>
                    </article> --}}
                  </div>
                </div>
              </div>
            </div>

              </div>
@endsection