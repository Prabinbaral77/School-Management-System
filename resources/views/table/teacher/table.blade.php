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
                    <h2>Class::All<small>All Data</small></h2>
                    <div class="clearfix">
                      <span style="padding-left: 900px;"><a href="{{ url('tech_form') }}" class="btn btn-info">Add Teacher</a></span>
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
                            <th class="column-title">S.N</th>
                            <th class="column-title">Image</th>
                            <th class="column-title">First Name</th>
                            <th class="column-title">Last Name </th>
                            <th class="column-title">Qualification</th>
                            <th class="column-title">Specialist Subject</th>
                            <th class="column-title">Contact No </th>
                            <th class="column-title no-link last"><span class="nobr">Action</span>
                            </th>
                            <th class="bulk-actions" colspan="7">
                              <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                            </th>
                          </tr>
                        </thead>

                        <tbody>
                          @foreach($result as $list)
                          <tr class="even pointer">
                            <td class="a-center ">
                              <input type="checkbox" class="flat" name="table_records">
                            </td>
                            <td class=" ">1</td>
                            <td class=" "><img src="{{ asset('storage/teacher/img/'.$list->image) }}" width="80px;"></td>
                            <td class=" ">{{$list->f_name}}</td>
                            <td class=" ">{{$list->l_name}}</td>
                            <td class=" ">{{$list->qualification}}</td>
                            <td class=" ">{{$list->sub_specialist}}</td>
                            <td class="a-right a-right ">{{$list->contact_no}}</td>
                            <td class=" last">
                              <a href="{{ url('teacher_edit/'.$list->id) }}" class="btn btn-primary">Edit</a>&nbsp &nbsp
                              <a href="{{ url('teacher_delete/'.$list->id) }}" class="btn btn-danger">Delete</a>
                            </td>
                          </tr>
                          @endforeach
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