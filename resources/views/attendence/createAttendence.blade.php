@extends('layout.app')
@section('extra-css')
<link href="{{ asset('asset/sms_asset/css/attendence.css') }}" rel="stylesheet">
@endsection
@section('content')
<div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Student Attendence List <small></small><p class="text text-danger">{{session('msg')}}</p></h3>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row" style="display: block;">
              
              <div class="clearfix"></div>
              <div class="clearfix">
                <span style="margin: -100px 0px 0px 1100px">{{-- <a href="{{ route('student.create') }}" class="btn btn-info">View Attendence</a> --}}</span>
              </div>

             <form action="{{ route('student.attendence_submit',$id) }}" method="POST">
				 @csrf
				 <div class="col-md-12 col-sm-12  ">
					<div class="x_panel">
					  <div class="x_title">
						<h2>Class::{{ $gradename[0] }}<small>All Data</small></h2>
						<div class="clearfix">
							<div class="item form-group">
								<label class="col-form-label col-md-3 col-sm-3 label-align">Select Date <span {{-- class="required" --}}>*</span>
								</label>
								<div class="col-md-6 col-sm-6 ">
								   <input id="birthday" class="date-picker form-control" placeholder="dd-mm-yyyy" type="text" required="required"  type="text" onfocus="this.type='date'" onmouseover="this.type='date'" onclick="this.type='date'" onblur="this.type='text'" onmouseout="timeFunctionLong(this)" {{-- required="" --}} name="current_date">
								   <script>
									  function timeFunctionLong(input) {
										  setTimeout(function() {
											  input.type = 'text';
										  }, 60000);
									  }
								   </script>
								</div>
							 </div>
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
								<th class="column-title">Student ID</th>
								<th class="column-title">Roll No</th>
								<th class="column-title">Image</th>
								<th class="column-title">Full Name</th>
								<th class="column-title">Guardian Name </th>
								<th class="column-title">Contact No </th>
								<th class="column-title no-link last"><span class="nobr">Action</span>
								</th>
								<th class="bulk-actions" colspan="7">
								  <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
								</th>
							  </tr>
							</thead>
	
							<tbody>
							  <form action="{{ route('student.attendence_submit') }}" method="POST">
                                @csrf
                                @if (count($allStudent) >0)
                                @foreach ($allStudent as $allstd)
                                  <tr class="even pointer">
                                    <td class="a-center ">
                                      <input type="checkbox" class="flat" name="table_records">
                                    </td>
                                    <td class=" ">{{ $allstd->id }}</td>
                                    <td class=" ">{{ $allstd->roll_no }}</td>
                                    <td class=""><a><img src="{{ asset('storage/images/student/'.$allstd->thumbnail) }}" style="width: 40px;""></a></td>
                                    <td class=" "><a href="{{ route('singlestudent.detail', $allstd->id) }}">{{ $allstd->full_name }}</a></td>
                                    <td class=" ">{{ $allstd->gurdian_name }}</td>
                                    <td class=" ">{{ $allstd->phone_number }}</td>
                                    <td class="">
                                        <div class="attendence" name= "attendence">
                                          <div class="form-check form-check-inline">
                                              <input class="form-check-input" type="radio" name="attendences[{{ $allstd->id }}]"  value="present" required>
                                              <label class="form-check-label primary"  >Present</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                              <input class="form-check-input" type="radio" name="attendences[{{ $allstd->id }}]" value="absent" required>
                                              <label class="form-check-label danger" >Absent</label>
                                            </div>
                                        </div>
                                        <input type="hidden" name="class_id" value="{{ $allstd->grade_id }}">
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
                        <div class="submit_button">
                          <button type="submit" class="btn btn-primary">Done</button>
                        </div>
                              </form>
						</div>
					  </div>
					</div>
				  </div>
			 </form>
            </div>
          </div>
        </div>
@endsection