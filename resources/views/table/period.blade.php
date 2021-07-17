@extends('layout.app')
@section('content')
<div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Periods Tables <small></small><p class="text text-danger">{{session('msg')}}</p></h3>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row" style="display: block;">
              
              <div class="clearfix"></div>
              <div class="clearfix"></div>

              <div class="col-md-12 col-sm-12  ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2><small>All Data</small></h2>
                    @if (session('ROLE') == 'ADMIN')
                    <div class="clearfix">
                      <span style="padding-left: 900px;"><a href="{{ route('period.create') }}" class="btn btn-info">Add Period</a></span>
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
                            <th class="column-title">ID</th>
                            <th class="column-title">Period Name</th>
                            <th class="column-title">Time Range</th>
                            <th>Actions</th>
                          </tr>
                        </thead>

                        <tbody>
                            @foreach ($periods as $period)
                                <tr class="even pointer">
                                  <td class="a-center ">
                                    <input type="checkbox" class="flat" name="table_records">
                                  </td>
                                  <td class=" ">{{ $period->id }}</td>
                                  <td class=" ">{{ $period->name }}</td>
                                  <td class=" ">{{ $period->time_range }}</td>
                                  <td class=" last">
                                    <a href="{{ route('period.edit',$period->id) }}" class="btn btn-primary">Edit</a>&nbsp &nbsp
                                    {{-- <a href="#" class="btn btn-danger">Delete --}}
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