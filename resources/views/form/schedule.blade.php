@extends('layout.app')
@section('extra-css') 
<link href="{{ asset('asset/select2/dist/css/select2.min.css') }}" rel="stylesheet" />
@endsection
@section('content')
<div class="right_col" role="main">
				<div class="">
					<div class="page-title">
						<div class="title_left">
							<h3>Schedule Section</h3>
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
									@if (count($errors) > 0)
										<div class = "alert alert-info" style="width: 75%">
										<ul>
											@foreach ($errors->all() as $error)
												<li>{{ $error }}</li>
											@endforeach
										</ul>
										</div>
									@endif
									<br />
									<form method="post" action="{{ route('schedule.store') }}"  class="form-horizontal form-label-left">
										@csrf
										<div class="item form-group">
											<label for="teacher" class="col-form-label col-md-3 col-sm-3 label-align">Teacher</label>
											<div class="col-md-6 col-sm-6 ">
											  <select class="js-example-basic-single1" name="teacher" style="width: 180px;" >
												 <option value="" >Select Teacher</option>
												 @foreach ($teachers as $teacher)
												  <option value="{{ $teacher->id }}">{{ $teacher->fullname }}</option>
												 @endforeach
											   </select>
											</div>
										 </div>
										<div class="item form-group">
											<label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Class</label>
											<div class="col-md-6 col-sm-6 ">
											  <select class="js-example-basic-single" name="grade" style="width: 150px;" >
												 <option value="" >Select Class</option>
												 @foreach ($grades as $grade)
												  <option value="{{ $grade->id }}">{{ $grade->name }}</option>
												 @endforeach
											   </select>
											</div>
										 </div>
										 <div class="item form-group">
											<label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align"> Subject</label>
											<div class="col-md-6 col-sm-6 ">
											  <select class="js-example-basic-single" name="subject" style="width: 150px;" >
												 <option value="" >Select Subject</option>
												 @foreach ($subjects as $sub)
												  <option value="{{ $sub->id }}">{{ $sub->name }}</option>
												 @endforeach
											   </select>
											</div>
										 </div>
										 <div class="item form-group">
											<label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Period</label>
											<div class="col-md-6 col-sm-6 ">
											  <select class="js-example-basic-single" name="period" style="width: 150px;" >
												 <option value="" >Select Period</option>
												 @foreach ($periods as $period)
												  <option value="{{ $period->id }}">{{ $period->name }}</option>
												 @endforeach
											   </select>
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
@section('extra-script')
<script src="{{ asset('asset/select2/dist/js/select2.min.js') }}"></script>
<script>
   $(document).ready(function() {
	$('.js-example-basic-single').select2();
	$('.js-example-basic-single1').select2();
});
</script>
@endsection