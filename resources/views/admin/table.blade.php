@extends('layout.app')
@section('content')
<div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Admin Tables <small></small><p class="text text-danger">{{session('msg')}}</p></h3>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row" style="display: block;">
              
              <div class="clearfix"></div>
              <div class="clearfix"></div>

              <div class="col-md-12 col-sm-12  ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Admin<small>All Data</small></h2>
                    @if (session('ROLE') == 'ADMIN')
                    <div class="clearfix">
                      <span style="padding-left: 900px;"><a href="{{ route('admin.create') }}" class="btn btn-info">Add Admin</a></span>
                    </div>
                    @endif
                  </div>

                  <div class="x_content">

                   <h4><b></b></h4>

                    <div class="table-responsive">
                      <table class="table table-striped jambo_table bulk_action">
                        <thead>
                          <tr class="headings">
                            <th>
                              <input type="checkbox" id="check-all" class="flat">
                            </th>
                            <th class="column-title">ID</th>
                            <th class="column-title">Name</th>
                            <th class="column-title">Email</th>
                            <th class="column-title">Contact</th>
                            <th class="column-title">Password  </th>
                            <th class="column-title no-link last"><span class="nobr">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Action</span>
                            </th>
                            <th class="bulk-actions" colspan="7">
                              <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                            </th>
                          </tr>
                        </thead>

                        <tbody>
                          @if (count($adminList) >0)
                              @foreach ($adminList as $key => $admin)
                                <tr class="even pointer">
                                  <td class="a-center ">
                                    <input type="checkbox" class="flat" name="table_records">
                                  </td>
                                  <td class=" ">{{ ++$key }}</td>
                                  <td class=" ">{{ $admin->name }}</td>
                                  <td class=" ">{{ $admin->email }}</td>
                                  <td class=" ">{{ $admin->contact_no }}</td>
                                  <td class=" ">{{ $admin->password }}</td>
                                  <td class=" last">
                                    <a href="{{ route('admin.edit', $admin->id)}}" class="btn btn-primary">Edit</a>&nbsp &nbsp
                                    <a href="{{ route('admin.distroy', $admin->id)}}" class="btn btn-danger">Delete</a>
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