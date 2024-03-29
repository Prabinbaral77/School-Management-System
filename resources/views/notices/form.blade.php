@extends('layout.app')
@section('content')
<div class="right_col" role="main">
    <div class="">
       <div class="page-title">
          <div class="title_left">
             <h3>Notice Section</h3>
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
                   <form method="post" action="{{ route('notice.store') }}" data-parsley-validate class="form-horizontal form-label-left" enctype="multipart/form-data">
                      @csrf
                      <div class="item form-group">
                         <label class="col-form-label col-md-3 col-sm-3 label-align" for="title">Title <span class="required">*</span>
                         </label>
                         <div class="col-md-6 col-sm-6 ">
                            <input type="text" id="title"  class="form-control " name="title" autocomplete="off" required>
                         </div>
                      </div>
                      <div class="item form-group">
                         <label for="body" class="col-form-label col-md-3 col-sm-3 label-align">Body</label>
                         <div class="col-md-6 col-sm-6 ">
                            <textarea id="class" class="form-control" type="text" name="body" autocomplete="off" required></textarea>
                         </div>
                      </div>
                      <div class="item form-group">
                         <label for="issued_by" class="col-form-label col-md-3 col-sm-3 label-align" >Issued By</label>
                         <div class="col-md-6 col-sm-6 ">
                            <input id="class" class="form-control" type="text" name="issued_by" autocomplete="off" required>
                         </div>
                      </div>
                      
                       <div class="item form-group">
                         <label class="col-form-label col-md-3 col-sm-3 label-align">Issue Date <span class="required">*</span>
                         </label>
                         <div class="col-md-6 col-sm-6 ">
                            <input id="birthday" class="date-picker form-control" placeholder="dd-mm-yyyy" type="text" required="required" type="text" onfocus="this.type='date'" onmouseover="this.type='date'" onclick="this.type='date'" onblur="this.type='text'" onmouseout="timeFunctionLong(this)" name="issue_date">
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