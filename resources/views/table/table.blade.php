@extends('layout.app')
@section('content')
<div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Student Tables <small></small></h3>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row" style="display: block;">
              
              <div class="clearfix"></div>
              <div class="clearfix"></div>

              <div class="col-md-12 col-sm-12  ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Student Table<small>All Class</small><p class="text text-danger">{{session('msg')}}</p></h2>
                    <div class="clearfix">
                      
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
                            <th class="column-title">S.N </th>
                            <th class="column-title">Image</th>
                            <th class="column-title">First Name</th>
                            <th class="column-title">Last Name </th>
                            <th class="column-title">Class</th>
                            <th class="column-title">Contact No </th>
                            <th class="column-title">Guardian </th>
                            <th class="column-title">Address </th>
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
                            <td class=" ">#</td>
                            <td class=" "><img src="{{ asset('storage/student/img/'.$list->image) }}" width="80px;"></td>
                            <td class=" ">{{$list->f_name}}</td>
                            <td class=" ">{{$list->l_name}}</td>
                            <td class=" ">{{$list->class}}</td>
                            <td class=" ">{{$list->contact_no}}</td>
                            <td class="a-right a-right ">{{$list->guardian_name}}</td>
                            <td class="a-right a-right ">{{$list->address}}</td>
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