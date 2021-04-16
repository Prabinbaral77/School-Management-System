@extends('layout.app')
@section('content')
<div class="right_col" role="main">
				<div class="">
					<div class="page-title">
						<div class="title_left">
							<h3>Period Update Section</h3>
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
									<form method="post" action="{{ route('period.update',$associativePeriod[0]->id) }}" data-parsley-validate class="form-horizontal form-label-left">
										@csrf
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="period_name">Period Name<span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="text" id="period_name" required="required" class="form-control " name="period_name" value="{{ $associativePeriod[0]->name }}" disabled>
											</div>
										</div>
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="class">Time Range<span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="text" id="time-range" required="required" class="form-control" name="time_range" value="{{ $associativePeriod[0]->time_range}}">
											</div>
										</div>
									
										<div class="ln_solid"></div>
										<div class="item form-group">
											<div class="col-md-6 col-sm-6 offset-md-3">
												<button type="submit" class="btn btn-success">Submit</button>
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