@extends('layout.app')
@section('extra-css') 
<link href="{{ asset('asset/select2/dist/css/select2.min.css') }}" rel="stylesheet" />
@endsection
@section('content')

<div class="right_col" role="main">
    <div class="">
       <div class="page-title">
          <div class="title_left">
             <h3>Student Edit Section</h3>
          </div>
       </div>
       <div class="clearfix"></div>
       <div class="row">
          <div class="col-md-12 col-sm-12 ">
             <div class="x_panel">
                <div class="x_title">
                   <h2>For Whom ? &nbsp;<h4><b>{{ $studentdetail[0]->full_name }}</b>/<em>Class:{{ $gradename[0]}}</em></h4></h2>
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
                     {{-- @if (Session()->has('msg'))
                        <div class="alert alert-info" style="height: 20px;">
                           {{ session('msg') }}
                        </div>
                     @endif --}}
                   <form method="POST" action="{{ route('student.update', $studentdetail[0]->id ) }}" data-parsley-validate class="form-horizontal form-label-left" enctype="multipart/form-data">
                      @csrf
                      <div class="item form-group">
                         <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">full Name <span {{-- class="required" --}}>*</span>
                         </label>
                         <div class="col-md-6 col-sm-6 ">
                            <input type="text" id="f-name" {{-- required="required" --}} class="form-control " name="f_name" value="{{ $studentdetail[0]->full_name }}">
                         </div>
                      </div>
                      <div class="item form-group">
                         <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Class</label>
                         <div class="col-md-6 col-sm-6 ">
                           <select class="js-example-basic-single" name="grade" style="width: 150px;">
                              @foreach ($grades as $grade)
                               <option  value="{{ $grade->id }}" >{{ $grade->name }}</option>
                              @endforeach
                            </select>
                         </div>
                      </div>
                      <div class="item form-group">
                         <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Roll No</label>
                         <div class="col-md-6 col-sm-6 ">
                            <input id="class" class="form-control" type="text" name="roll_no" value="{{ $studentdetail[0]->roll_no }}" {{-- required="" --}}>
                         </div>
                      </div>
                      <div class="item form-group">
                         <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Address</label>
                         <div class="col-md-6 col-sm-6 ">
                            <input id="class" class="form-control" type="text" name="address" value="{{ $studentdetail[0]->address }}" {{-- required="" --}}>
                         </div>
                      </div>
                      <div class="item form-group">
                         <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Guardian Name</label>
                         <div class="col-md-6 col-sm-6 ">
                            <input id="class" class="form-control" type="text" name="guardian_name" value="{{ $studentdetail[0]->gurdian_name }}" {{-- required="" --}}>
                         </div>
                      </div>
                      <div class="item form-group">
                         <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Contact No</label>
                         <div class="col-md-6 col-sm-6 ">
                            <input id="class" class="form-control" type="text" name="contact" value="{{ $studentdetail[0]->phone_number }}" {{-- required="" --}}>
                         </div>
                      </div>
                      <div class="item form-group">
                         <label class="col-form-label col-md-3 col-sm-3 label-align">Gender</label>
                         <div class="col-md-6 col-sm-6 ">
                            <div id="gender" class="btn-group" data-toggle="buttons">
                               <label class="btn btn-secondary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                               <input type="radio" name="gender" value="male" class="join-btn" > &nbsp; Male &nbsp;
                               </label>
                               <label class="btn btn-primary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                               <input type="radio" name="gender" value="female" class="join-btn"> Female
                               </label>
                            </div>
                         </div>
                      </div>
                      <div class="item form-group">
                         <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Student Photo</label>
                         <div class="col-md-6 col-sm-6 ">
                            <input id="class" class="form-control" type="file" name="thumbnail" {{-- required="" --}}>
                         </div>
                      </div>
                      <div class="item form-group">
                         <label class="col-form-label col-md-3 col-sm-3 label-align">Date Of Birth <span {{-- class="required" --}}>*</span>
                         </label>
                         <div class="col-md-6 col-sm-6 ">
                            <input id="birthday" class="date-picker form-control" placeholder="dd-mm-yyyy" type="text" value="{{ $studentdetail[0]->date_of_birth }}" {{-- required="required" --}} type="text" onfocus="this.type='date'" onmouseover="this.type='date'" onclick="this.type='date'" onblur="this.type='text'" onmouseout="timeFunctionLong(this)" {{-- required="" --}} name="dob">
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
});
</script>
@endsection