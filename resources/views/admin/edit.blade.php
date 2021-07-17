@extends('layout.app')
@section('content')
<div class="right_col" role="main">
    <div class="">
       <div class="page-title">
          <div class="title_left">
             <h3>Admin Section</h3>
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
                   <form method="post" action="{{route('admin.update', $id)}}" data-parsley-validate class="form-horizontal form-label-left" enctype="multipart/form-data">
                      @csrf
                      <div class="item form-group">
                         <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Full Name <span class="required">*</span>
                         </label>
                         <div class="col-md-6 col-sm-6 ">
                            <input type="text" id="first-name"  class="form-control " name="name" autocomplete="off" value={{$details[0]->name}}>
                         </div>
                      </div>
                      <div class="item form-group">
                         <label for="email" class="col-form-label col-md-3 col-sm-3 label-align">Email</label>
                         <div class="col-md-6 col-sm-6 ">
                            <input id="class" class="form-control" type="email" name="email" autocomplete="off" value={{$details[0]->email}}>
                         </div>
                      </div>
                      
                      <div class="item form-group">
                         <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align" >Contact No</label>
                         <div class="col-md-6 col-sm-6 ">
                            <input id="class" class="form-control" type="text" name="contact" autocomplete="off" value={{$details[0]->contact_no}}>
                         </div>
                      </div>
                      <div class="item form-group">
                         <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Password</label>
                         <div class="col-md-6 col-sm-6 ">
                            <input id="class" class="form-control" type="text" name="password" autocomplete="off" value={{$details[0]->password}}>
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