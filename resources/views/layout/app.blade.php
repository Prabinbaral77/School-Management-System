<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
	<link rel="icon" href="images/favicon.ico" type="image/ico" />
    <title>{{config('constants.site_name')}}</title>
    <link href="{{ asset('asset/sms_asset/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('asset/sms_asset/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('asset/sms_asset/css/nprogress.css') }}" rel="stylesheet">
    {{-- <link href="{{ asset('asset/sms_asset/css/flat/green.css') }}" rel="stylesheet"> --}}
    <link href="{{ asset('asset/sms_asset/css/bootstrap-progressbar-3.3.4.min.css') }}" rel="stylesheet">
    <link href="{{ asset('asset/sms_asset/css/jqvmap.min.css') }}" rel="stylesheet"/>
    <link href="{{ asset('asset/sms_asset/css/daterangepicker.css') }}" rel="stylesheet">
    <link href="{{ asset('asset/sms_asset/css/custom.min.css') }}" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    @yield('extra-css')
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-book"></i> <span>SMS</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="{{ asset('asset/sms_asset/images/img.png') }}" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2>{{session('USER_NAME')}}</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a href="{{ route('home') }}"><i class="fa fa-home"></i> Home</a>
                  </li>
                  @if ( session('ROLE') == 'ADMIN')
                  <li><a><i class="fa fa-edit"></i> Forms <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{ route('student.create') }}">Student Form</a></li>
                      <li><a href="{{ route('teacher_form') }}">Teacher Form</a></li>
                      <li><a href="{{ route('staff_form') }}">Staff Form</a></li>
                    </ul>
                  </li>
                  @endif
                  
                  <li><a><i class="fa fa-table"></i> Tables <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{ route('student.index') }}">All Students</a></li>
                    </ul>
                  </li>
                </ul>
              </div>
              <div class="menu_section">
                <h3>Misscallenous</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-windows"></i> Extras <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{ url('class_schedule') }}">Class Schedule</a></li>
                      <li><a href="{{ route('grade.show') }}">Grade List</a></li>
                      <li><a href="{{ route('period.show') }}">Period Management</a></li>
                      <li><a href="{{ route('subject.show') }}">Registered Subject</a></li>
                    </ul>
                     <li>
                       <a href="{{ route('schooldetail.index',1) }}"><i class="fa fa-university"></i> School Details</a>
                    </li>

                    <li>
                      <a href="{{ route('attendence.index') }}"><i class="fa fa-edit"></i> Attendence Management</a>
                   </li>
                   <li>
                      <a href="{{ route('library.index')}}"><i class="fa fa-book"></i> Library Management</a>
                   </li>
                   <li>
                      <a href="{{ route('notice.table')}}"><i class="fa fa-commenting"></i> Notice Management</a>
                   </li>
                   
                  </li>
                </ul>
              </div>

            </div>
            <!-- /sidebar menu -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                <div class="school_name"><b></b></div>
              </div>
              <nav class="nav navbar-nav">
                
              <ul class=" navbar-right">
                <li class="nav-item dropdown open" style="padding-left: 15px;">
                  <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                    <img src="{{ asset('asset/sms_asset/images/img.png')}}" alt="">
                  </a>
                  <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item"  href="javascript:;"> Profile</a>
                    <a class="dropdown-item"  href="{{ url('user_logout') }}"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                  </div>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        @yield('content')
        @show()

            </div>
          </div>
        </div>
        <footer>
          <div class="pull-right">
            Student Management System Template by <a href="#">Prabin</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>
    <script src="{{ asset('asset/sms_asset/js/jquery.min.js')}}"></script>
    <script src="{{ asset('asset/sms_asset/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{ asset('asset/sms_asset/js/icheck.min.js')}}"></script>
    {{-- <script src="{{ asset('asset/sms_asset/js/daterangepicker.js')}}"></script> --}}
    <script src="{{ asset('asset/sms_asset/js/custom.min.js')}}"></script>
    @yield('extra-script')
  </body>
</html>