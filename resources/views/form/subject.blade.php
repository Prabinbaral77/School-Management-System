@extends('layout.app')
@section('extra-css') 
<link href="{{ asset('asset/select2/dist/css/select2.min.css') }}" rel="stylesheet" />
@endsection
@section('content')
<div class="right_col" role="main">
				<div class="">
					<div class="page-title">
						<div class="title_left">
							<h3>Subject Registered Section</h3>
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
                                    @if (count($errors) > 0)
                                        <div class = "alert alert-info" style="width: 75%">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                        </div>
                                    @endif
									<form method="post" action="{{ route('subject.store') }}" data-parsley-validate class="form-horizontal form-label-left">
                                        @csrf
                                        <div class="item form-group">
											<label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Subject Name</label>
											<div class="col-md-6 col-sm-6 ">
												<input id="class" class="form-control" type="text" name="subject">
											</div>
                                        </div>
                                        <div class="item form-group">
											<label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Class</label>
											<div class="col-md-6 col-sm-6 ">
											  <select class="js-example-basic-single" name="grade" style="width: 150px;">
												 <option value="select-class" >Select Class</option>
												 @foreach ($grades as $grade)
												  <option value="{{ $grade->id }}">{{ $grade->name }}</option>
												 @endforeach
											   </select>
											</div>
										 </div>
										<div class="item form-group">
											<label for="teacher" class="col-form-label col-md-3 col-sm-3 label-align">Teacher</label>
											<div class="col-md-6 col-sm-6 ">
											  <select class="js-example-basic-single" name="teacher" style="width: 180px;">
                                                 <option value="select-class" >Select Teacher</option>
                                                 @foreach ($teachers as $teacher)
												  <option value="{{ $teacher->id }}">{{ $teacher->fullname }}</option>
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