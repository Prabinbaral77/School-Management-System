@extends('layout.app')
@section('content')
<div class="right_col" role="main">
          <!-- top tiles -->
          <div class="row" style="display: inline-block;" >
            <div class="text text-danger"><h4></h4></div>
          <div class="tile_count">
            <div class="col-md-2 col-sm-4  tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Total Student</span>
              <div class="count">{{ count($totalStudent) }}</div>
              <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i> </i> From Recent data</span>
            </div>
            <div class="col-md-2 col-sm-4  tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Totel Teacher</span>
              <div class="count">{{ count($totelTeacher) }}</div>
              <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i></i> From Recent data</span>
            </div>
            <div class="col-md-2 col-sm-4  tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Total Male Student </span>
              <div class="count green">{{ count($totalMaleStudents) }}</div>
              <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i> </i>  From Recent data</span>
            </div>
            <div class="col-md-2 col-sm-4  tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Total Female Student</span>
              <div class="count green">{{ count($totalFemaleStudents) }}</div>
              <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i> </i> From Recent data</span>
            </div>
            <div class="col-md-2 col-sm-4  tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Total Class</span>
              <div class="count"><h5>Nursary To 12</h5></div>
              <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i> </i> From Recent data</span>
            </div>
            <div class="col-md-2 col-sm-4  tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Total Staff</span>
              <div class="count">{{ count($totalStaff) }}</div>
              <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i></i> From Recent data</span>
            </div>
          </div>
        </div>
       <br /><br><br>

       <div class="row">
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
                        <a class="title" href="{{ route('student.singletable','1') }}">Class "Nursary"</a>
                        <p>Detail about class nursary.</p>
                      </div>
                    </article><br>
                    <article class="media event">
                      <a class="pull-left date">
                        <p class="month">Class</p>
                        <p class="day">KG</p>
                      </a>
                      <div class="media-body">
                        <a class="title" href="{{ route('student.singletable',2) }}">Class "LKG"</a>
                        <p>Detail about class LKG.</p>
                      </div>
                    </article><br>
                    <article class="media event">
                      <a class="pull-left date">
                        <p class="month">Class</p>
                        <p class="day">KG</p>
                      </a>
                      <div class="media-body">
                        <a class="title" href="{{ route('student.singletable','3') }}">Class "UKG"</a>
                        <p>Detail about class UKG.</p>
                      </div>
                    </article><br>
                    <article class="media event">
                      <a class="pull-left date">
                        <p class="month">Class</p>
                        <p class="day">1</p>
                      </a>
                      <div class="media-body">
                        <a class="title" href="{{ route('student.singletable','4') }}">Class "1"</a>
                        <p>Detail about class One.</p>
                      </div>
                    </article><br>
                    <article class="media event">
                      <a class="pull-left date">
                        <p class="month">Class</p>
                        <p class="day">2</p>
                      </a>
                      <div class="media-body">
                        <a class="title" href="{{ route('student.singletable','5') }}">Class "2"</a>
                        <p>Detail about class Two.</p>
                      </div>
                    </article><br>
                    <article class="media event">
                      <a class="pull-left date">
                        <p class="month">Class</p>
                        <p class="day">3</p>
                      </a>
                      <div class="media-body">
                        <a class="title" href="{{ route('student.singletable','6') }}">Class "3"</a>
                        <p>Detail about class Three.</p>
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
                        <a class="title" href="{{ route('student.singletable','7') }}">Class "4"</a>
                        <p>Detail about class Four.</p>
                      </div>
                    </article><br>
                    <article class="media event">
                      <a class="pull-left date">
                        <p class="month">Class</p>
                        <p class="day">5</p>
                      </a>
                      <div class="media-body">
                        <a class="title" href="{{ route('student.singletable','8') }}">Class "5"</a>
                        <p>Detail about class five.</p>
                      </div>
                    </article><br>
                    <article class="media event">
                      <a class="pull-left date">
                        <p class="month">Class</p>
                        <p class="day">6</p>
                      </a>
                      <div class="media-body">
                        <a class="title" href="{{ route('student.singletable','9') }}">Class "6"</a>
                        <p>Detail about class Six.</p>
                      </div>
                    </article><br>
                    <article class="media event">
                      <a class="pull-left date">
                        <p class="month">Class</p>
                        <p class="day">7</p>
                      </a>
                      <div class="media-body">
                        <a class="title" href="{{ route('student.singletable','10') }}">Class "7"</a>
                        <p>Detail about class Seven.</p>
                      </div>
                    </article><br>
                    <article class="media event">
                      <a class="pull-left date">
                        <p class="month">Class</p>
                        <p class="day">8</p>
                      </a>
                      <div class="media-body">
                        <a class="title" href="{{ route('student.singletable','11') }}">Class "8"</a>
                        <p>Detail about class Eight.</p>
                      </div>
                    </article><br>
                    <article class="media event">
                      <a class="pull-left date">
                        <p class="month">Class</p>
                        <p class="day">9</p>
                      </a>
                      <div class="media-body">
                        <a class="title" href="{{ route('student.singletable','12') }}">Class "9"</a>
                        <p>Detail about class Nine.</p>
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
                        <a class="title" href="{{ route('student.singletable','13') }}">Class "10"</a>
                        <p>Detail about class Ten.</p>
                      </div>
                    </article><br>
                    <article class="media event">
                      <a class="pull-left date">
                        <p class="month">Class</p>
                        <p class="day">11</p>
                      </a>
                      <div class="media-body">
                        <a class="title" href="{{ route('student.singletable','14') }}">Class "11"</a>
                        <p>Detail about class Eleven.</p>
                      </div>
                    </article><br>
                    <article class="media event">
                      <a class="pull-left date">
                        <p class="month">Class</p>
                        <p class="day">12</p>
                      </a>
                      <div class="media-body">
                        <a class="title" href="{{ route('student.singletable','15') }}">Class "12"</a>
                        <p>Detail about class Twelve.</p>
                      </div>
                    </article><br>
                    <article class="media event">
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
                    </article>
                  </div>
                </div>
              </div>
            </div>

              </div>
@endsection