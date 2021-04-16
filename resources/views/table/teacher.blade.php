@extends('layout.app')
@section('content')
<div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Teacher Tables <small></small><p class="text text-danger">{{session('msg')}}</p></h3>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row" style="display: block;">
              
              <div class="clearfix"></div>
              <div class="clearfix"></div>

              <div class="col-md-12 col-sm-12  ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Teacher<small>All Data</small></h2>
                    <div class="clearfix">
                      <span style="padding-left: 900px;"><a href="{{ route('teacher_form') }}" class="btn btn-info">Add Teacher</a></span>
                    </div>
                  </div>

                  <div class="x_content">

                   <h4><b>Shree Ratan Panday Secondary School</b></h4>

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
                            <th class="column-title">Address </th>
                            <th class="column-title">Contact No </th>
                            <th class="column-title">Qualification </th>
                            <th class="column-title">Subject</th>
                            <th class="column-title no-link last"><span class="nobr">Action</span>
                            </th>
                            <th class="bulk-actions" colspan="7">
                              <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                            </th>
                          </tr>
                        </thead>

                        <tbody>
                          @if (count($allTeacher) >0)
                              @foreach ($allTeacher as $teacher)
                                <tr class="even pointer">
                                  <td class="a-center ">
                                    <input type="checkbox" class="flat" name="table_records">
                                  </td>
                                  <td class=" ">{{ $teacher->id }}</td>
                                  <td class=""><a><img src="{{ asset('storage/images/teacher/'.$teacher->thumbnail) }}" style="width: 40px;""></a></td>
                                  <td class=" "><a href="">{{ $teacher->fullname }}</a></td>
                                  <td class=" ">{{ $teacher->address }}</td>
                                  <td class=" ">{{ $teacher->phone_number }}</td>
                                  <td class=" ">{{ $teacher->qualification }}</td>
                                  <td class=" ">{{ $teacher->sub_specialist }}</td>
                                  <td class=" last">
                                    <a href="{{ route('teacher.edit', $teacher->id)}}" class="btn btn-primary">Edit</a>&nbsp &nbsp
                                    <a href="{{ route('teacher.delete', $teacher->id)}}" class="btn btn-danger">Delete
                                  </td>
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