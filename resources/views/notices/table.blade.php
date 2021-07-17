@extends('layout.app')
@section('content')
<div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Notice Tables <small></small><p class="text text-danger">{{session('msg')}}</p></h3>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row" style="display: block;">
              
              <div class="clearfix"></div>
              <div class="clearfix"></div>

              <div class="col-md-12 col-sm-12  ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Notices<small>All Data</small></h2>
                    @if (session('ROLE') == 'ADMIN')
                    <div class="clearfix">
                      <span style="padding-left: 900px;"><a href="{{route('notice.create')}}" class="btn btn-info">Add Notice</a></span>
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
                            <th class="column-title">SN</th>
                            <th class="column-title">Title</th>
                            <th class="column-title">Body</th>
                            <th class="column-title">Issued By </th>
                            <th class="column-title">Issued Date </th>
                            <th class="column-title no-link last"><span class="nobr">Action</span>
                            </th>
                            <th class="bulk-actions" colspan="7">
                              <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                            </th>
                          </tr>
                        </thead>

                        <tbody>
                            @foreach ($notices as $key => $notice)
                                <tr class="even pointer">
                                  <td class="a-center ">
                                    <input type="checkbox" class="flat" name="table_records">
                                  </td>
                                  <td class=" " style="width: 20px;">{{++$key}}</td>
                                  <td class=" ">{{$notice->title}}</td>
                                  <td class=" " style="width: 250px;">{{$notice->body}}</td>
                                  <td class=" ">{{$notice->issued_by}}</td>
                                  <td class=" " >{{$notice->issue_date}}</td>
                                  <td class=" last">
                                    <a href="{{route('notice.distroy', $notice->id)}}" class="btn btn-danger">Delete</a>&nbsp &nbsp
                                  </td>
                                </tr>
                            @endforeach
                            <tr class="even pointer">
                              <td class="a-center ">
                                <input type="checkbox" class="flat" name="table_records">
                              </td>
                            
                            </tr>
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