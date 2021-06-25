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
                    <h2>Class::{{ $gradename[0] }}<small>All Data</small></h2>
                    @if (session('ROLE') == 'ADMIN')
                    <div class="clearfix">
                      <span style="padding-left: 900px;"><a href="{{ route('student.create') }}" class="btn btn-info">Add Student</a></span>
                    </div>
                    @endif
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
                            <th class="column-title">Roll No</th>
                            <th class="column-title">Image</th>
                            <th class="column-title">Full Name</th>
                            <th class="column-title">Guardian Name </th>
                            <th class="column-title">Contact No </th>
                            <th class="column-title">Date Of Birth</th>
                            <th class="column-title no-link last"><span class="nobr">Action</span>
                            </th>
                            <th class="bulk-actions" colspan="7">
                              <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                            </th>
                          </tr>
                        </thead>

                        <tbody>
                          @if (count($allStudent) >0)
                              @foreach ($allStudent as $allstd)
                                <tr class="even pointer">
                                  <td class="a-center ">
                                    <input type="checkbox" class="flat" name="table_records">
                                  </td>
                                  <td class=" ">{{ $allstd->roll_no }}</td>
                                  <td class=""><a><img src="{{ asset('storage/images/student/'.$allstd->thumbnail) }}" style="width: 40px;""></a></td>
                                  <td class=" "><a href="{{ route('singlestudent.detail', $allstd->id) }}">{{ $allstd->full_name }}</a></td>
                                  <td class=" ">{{ $allstd->gurdian_name }}</td>
                                  <td class=" ">{{ $allstd->phone_number }}</td>
                                  <td class=" ">{{ $allstd->date_of_birth }}</td>
                                  <td class=" last">
                                    <a href="{{ route('student.edit', $allstd->id)}}" class="btn btn-primary">Edit</a>&nbsp &nbsp
                                    <a href="{{ route('student.delete', $allstd->id)}}" class="btn btn-danger">Delete
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