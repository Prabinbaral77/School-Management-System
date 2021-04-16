@extends('layout.app')
@section('extra-css') 
<link href="{{ asset('asset/select2/dist/css/select2.min.css') }}" rel="stylesheet" />
@endsection
@section('content')

<div class="right_col" role="main">
    <div class="">
       <div class="page-title">
          <div class="title_left">
             <h3>School Detail Edit Section</h3>
          </div>
       </div>
       <div class="clearfix"></div>
       <div class="row">
          <div class="col-md-12 col-sm-12 ">
             <div class="x_panel">
                
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
                   <form method="POST" action="{{ route('schooldetail.update',1) }}" class="form-horizontal form-label-left" enctype="multipart/form-data">
                      @csrf
                      <div class="item form-group">
                         <label class="col-form-label col-md-3 col-sm-3 label-align" for="school-name">School Name <span {{-- class="required" --}}></span>
                         </label>
                         <div class="col-md-6 col-sm-6 ">
                            <input type="text" id="s-name" {{-- required="required" --}} class="form-control " name="s_name" value="{{ $details[0]->name }}" >
                         </div>
                      </div>
                      <div class="item form-group">
                        <label for="" class="col-form-label col-md-3 col-sm-3 label-align">Address</label>
                        <div class="col-md-6 col-sm-6 ">
                           <input id="address" class="form-control" type="text" name="address" value="{{ $details[0]->location }}"   {{-- required="" --}}>
                        </div>
                     </div>
                      <div class="item form-group">
                         <label for="" class="col-form-label col-md-3 col-sm-3 label-align">Phone No</label>
                         <div class="col-md-6 col-sm-6 ">
                            <input id="phone" class="form-control" type="text" name="phone_no" value="{{ $details[0]->phone }}"   {{-- required="" --}}>
                         </div>
                      </div>
                      <div class="item form-group">
                         <label for="" class="col-form-label col-md-3 col-sm-3 label-align">Website</label>
                         <div class="col-md-6 col-sm-6 ">
                            <input id="website" class="form-control" type="text" name="website" value="{{ $details[0]->website }}"  {{-- required="" --}}>
                         </div>
                      </div>
                      <div class="item form-group">
                         <label for="" class="col-form-label col-md-3 col-sm-3 label-align">Email</label>
                         <div class="col-md-6 col-sm-6 ">
                            <input id="email" class="form-control" type="email" name="email" value="{{ $details[0]->email }}"  {{-- required="" --}}>
                         </div>
                      </div>
                      <div class="item form-group">
                         <label for="" class="col-form-label col-md-3 col-sm-3 label-align">Principle Name</label>
                         <div class="col-md-6 col-sm-6 ">
                            <input id="class" class="form-control" type="text" name="principle"  value="{{ $details[0]->principle }}"  {{-- required="" --}}>
                         </div>
                      </div>
                      <div class="item form-group">
                         <label for="" class="col-form-label col-md-3 col-sm-3 label-align">School Photo</label>
                         <div class="col-md-6 col-sm-6 ">
                            <input id="class" class="form-control" type="file" name="thumbnail" {{-- required="" --}}>
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