@extends('layout.app')
@section('content')
<div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Student Tables <small></small><p class="text text-danger">{{session('msg')}}</p></h3>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row" style="display: block;">
              
              <div class="clearfix"></div>
              <div class="clearfix"></div>

              <div class="col-md-12 col-sm-12  ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Class::All Students</h2>
                    @if (session('ROLE') == 'ADMIN')
                    <div class="clearfix">
                      <span style="padding-left: 900px;"><a href="{{ route('student.create') }}" class="btn btn-info">Add Student</a></span>
                    </div>
                    @endif
                    <form action="{{route('student.search')}}" method="post">
                        @csrf
                      <div style="margin-left:30%;">
                          <input type="text" name="search" id="search" style="border-top:none; border-left: none; border-right: none;" placeholder="Enter Student Name" autocomplete="off" required>
                          <button type="submit" class="btn btn-success btn-sm">Search Student</button></span>
                      </div>
                      </form>
                  </div>

                  <div class="x_content"> 

                   <h4><b>{{$name}}</b></h4>

                    <div class="table-responsive">
                      <table class="table table-striped jambo_table bulk_action">
                        <thead>
                          <tr class="headings">
                            <th>
                              <input type="checkbox" id="check-all" class="flat">
                            </th>
                            <th class="column-title">ID</th>
                            <th class="column-title">Image</th>
                            <th class="column-title">Full Name</th>
                            <th class="column-title">Guardian Name </th>
                            <th class="column-title">Contact No </th>
                            <th class="column-title">Grade</th>
                            </th>
                            <th class="bulk-actions" colspan="7">
                              <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                            </th>
                          </tr>
                        </thead>

                        <tbody>
                          @if (count($allStudent) >0)
                              @foreach ($allStudent as $key => $allstd)
                        
                                <tr class="even pointer">
                                  <td class="a-center ">
                                    <input type="checkbox" class="flat" name="table_records">
                                  </td>
                                  <td class="">{{ ++$key }}</td>
                                  <td class=""><a><img src="{{ asset('storage/images/student/'.$allstd->thumbnail) }}" style="width: 40px;""></a></td>
                                  <td class=" "><a href="">{{ $allstd->full_name }}</a></td>
                                  <td class=" ">{{ $allstd->gurdian_name }}</td>
                                  <td class=" ">{{ $allstd->phone_number }}</td>
                                  <td class=" ">{{ $allstd->grade->name }}</td>
                                  
                                </tr>
                            @endforeach
                            @else
                            <tr class="even pointer">
                              <td class="a-center ">
                                <input type="checkbox" class="flat" name="table_records">
                              </td>
                              <td class="text text-danger">No Student are Registered Yet!!!</td>
                            </tr>
                          @endif
                        </tbody>
                      </table>
                    </div>
              
            
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
@endsection