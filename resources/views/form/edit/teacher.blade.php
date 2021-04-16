@extends('layout.app')
@section('content')
<div class="right_col" role="main">
    <div class="">
       <div class="page-title">
          <div class="title_left">
             <h3>Teacher Edit Section</h3>
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
                   <form method="post" action="{{ route('teacher.update', $teacherDetail[0]->id) }}" data-parsley-validate class="form-horizontal form-label-left" enctype="multipart/form-data">
                      @csrf
                      <div class="item form-group">
                         <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Full Name <span class="required">*</span>
                         </label>
                         <div class="col-md-6 col-sm-6 ">
                            <input type="text" id="first-name" class="form-control " name="full_name" value="{{ $teacherDetail[0]->fullname }}">
                         </div>
                      </div>
                      
                      <div class="item form-group">
                         <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Address</label>
                         <div class="col-md-6 col-sm-6 ">
                            <input id="class" class="form-control" type="text" name="address" value="{{ $teacherDetail[0]->address }}">
                         </div>
                      </div>
                      <div class="item form-group">
                         <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Contact No</label>
                         <div class="col-md-6 col-sm-6 ">
                            <input id="class" class="form-control" type="text" name="contact_number" value="{{ $teacherDetail[0]->phone_number }}">
                         </div>
                      </div>
                      <div class="item form-group">
                         <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Acedamic Qualification</label>
                         <div class="col-md-6 col-sm-6 ">
                            <input id="class" class="form-control" type="text" name="acedamic_qualification" value="{{ $teacherDetail[0]->qualification }}">
                         </div>
                      </div>
                      <div class="item form-group">
                         <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Subject Specialist</label>
                         <div class="col-md-6 col-sm-6 ">
                            <input id="class" class="form-control" type="text" name="subject_specialist" value="{{ $teacherDetail[0]->sub_specialist }}">
                         </div>
                      </div>
                      <div class="item form-group">
                         <label class="col-form-label col-md-3 col-sm-3 label-align">Gender</label>
                         <div class="col-md-6 col-sm-6 ">
                            <div id="gender" class="btn-group" data-toggle="buttons">
                               <label class="btn btn-secondary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                               <input type="radio" name="gender" name="male" value="male" class="join-btn"> &nbsp; Male &nbsp;
                               </label>
                               <label class="btn btn-primary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                               <input type="radio" name="gender" name="female" value="female" class="join-btn"> Female
                               </label>
                            </div>
                         </div>
                      </div>
                      <div class="item form-group">
                         <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Teacher Photo</label>
                         <div class="col-md-6 col-sm-6 ">
                            <input id="class" class="form-control" type="file" name="teacher_image" >
                         </div>
                      </div>
                      <div class="item form-group">
                         <label class="col-form-label col-md-3 col-sm-3 label-align">Date Of Birth <span class="required">*</span>
                         </label>
                         <div class="col-md-6 col-sm-6 ">
                            <input id="birthday" class="date-picker form-control" placeholder="dd-mm-yyyy" type="text"   type="text" onfocus="this.type='date'" onmouseover="this.type='date'" onclick="this.type='date'" onblur="this.type='text'" onmouseout="timeFunctionLong(this)" name="dob" value="{{ $teacherDetail[0]->date_of_birth }}">
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