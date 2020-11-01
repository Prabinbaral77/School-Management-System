@extends('layout.app')
@section('content')

<div class="right_col" role="main">
				<div class="">
					<div class="page-title">
						<div class="title_left">
							<h3>Student Section</h3>
						</div>
					</div>
					<div class="clearfix"></div>
					<div class="row">
						<div class="col-md-12 col-sm-12 ">
							<div class="x_panel">
								<div class="x_title">
									<h2>Form Design <small>different form elements</small></h2>
								
									<div class="clearfix"></div>
								</div>
								<div class="x_content">
									<br />
									<form method="post" action="{{ url('student_form_update/'.$result[0]->id) }}" data-parsley-validate class="form-horizontal form-label-left" enctype="multipart/form-data">
										@csrf
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">First Name <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="text" id="first-name" required="required" class="form-control " name="f_name" value="{{$result[0]->f_name}}">
											</div>
										</div>
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Last Name <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="text" id="last-name" required="required" class="form-control" name="l_name" value="{{$result[0]->l_name}}">
											</div>
										</div>
										<div class="item form-group">
											<label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Class</label>
											<div class="col-md-6 col-sm-6 ">
												<input id="class" class="form-control" type="text" name="class" required="" value="{{$result[0]->class}}">
											</div>
										</div>
										<div class="item form-group">
											<label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Roll No</label>
											<div class="col-md-6 col-sm-6 ">
												<input id="class" class="form-control" type="text" name="roll_no" required="" value="{{$result[0]->roll_no}}">
											</div>
										</div>
										<div class="item form-group">
											<label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Address</label>
											<div class="col-md-6 col-sm-6 ">
												<input id="class" class="form-control" type="text" name="address" required="" value="{{$result[0]->address}}">
											</div>
										</div>
										<div class="item form-group">
											<label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Guardian Name</label>
											<div class="col-md-6 col-sm-6 ">
												<input id="class" class="form-control" type="text" name="guardian_name" required="" value="{{$result[0]->guardian_name}}">
											</div>
										</div>
										<div class="item form-group">
											<label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Contact No</label>
											<div class="col-md-6 col-sm-6 ">
												<input id="class" class="form-control" type="text" name="contact" required="" value="{{$result[0]->contact_no}}">
											</div>
										</div>
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align">Gender</label>
											<div class="col-md-6 col-sm-6 ">
												<div id="gender" class="btn-group" data-toggle="buttons">
													<label class="btn btn-secondary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
														<input type="radio" name="gender" value="male" class="join-btn" name="male" value="{{$result[0]->gender}}"> &nbsp; Male &nbsp;
													</label>
													<label class="btn btn-primary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
														<input type="radio" name="gender" value="female" class="join-btn" name="female" value="{{$result[0]->gender}}"> Female
													</label>
												</div>
											</div>
										</div>
										<div class="item form-group">
											<label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Student Photo</label>
											<div class="col-md-6 col-sm-6 ">
												<input id="class" class="form-control" type="file" name="student_image" value="{{$result[0]->image}}">
											</div>
										</div>
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align">Date Of Birth <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input id="birthday" class="date-picker form-control" placeholder="dd-mm-yyyy" type="text" required="required" type="text" onfocus="this.type='date'" onmouseover="this.type='date'" onclick="this.type='date'" onblur="this.type='text'" onmouseout="timeFunctionLong(this)" required="" name="dob" value="{{$result[0]->dob}}">
												<script>
													function timeFunctionLong(input) {
														setTimeout(function() {
															input.type = 'text';
														}, 60000);
													}
												</script>
											</div>
										</div>
										<div class="ln_solid"></div>
										<div class="item form-group">
											<div class="col-md-6 col-sm-6 offset-md-3">
												<button type="submit" class="btn btn-success">Update</button>
											</div>
										</div>

									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
@endsection