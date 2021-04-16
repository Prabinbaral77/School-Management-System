@extends('layout.app')
@section('extra-css') 
<link href="{{ asset('asset/sms_asset/css/custom.css') }}" rel="stylesheet" />
@endsection
@section('content')

<div class="right_col" role="main">
    <div class="">
       <div class="page-title">
          <div class="title_left">
             <h3>School Detailed Section</h3>
          </div>
       </div>
       <div class="clearfix"></div>
       <div class="row">
          <div class="col-md-12 col-sm-12 ">
             <div class="x_panel">
                <div class="x_content">
                    <div class="col-md-8 col-sm-12">
                        <h1 style="text-align:center;" style="font-family: Georgia, serif;"><b style="color: green;text-decoration: underline"; >{{ $details[0]->name }}</b></h1>
                        <div style="margin-top: 60px">
                            <p class="label-section">Address:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <h3>{{ $details[0]->location }}</h3>
                            </p>
                            <p class="label-section">Phone No:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <h3>{{ $details[0]->phone }}</h3>
                            </p>
                            <p class="label-section">Website:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <h3>{{ $details[0]->website }}</h3>
                            </p>
                            <p class="label-section">Email:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <h3>{{ $details[0]->email }}</h3>
                            </p>
                            <p class="label-section">Principle:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <h3>{{ $details[0]->principle }}</h3>
                            </p>
                        </div>
                    </div>
                    <div class="">
                        <img style="width:700px; height:auto; float:right; margin-top:-600px;" src="{{ asset('storage/images/school/'.$details[0]->thumbnail) }}" alt="student-thumbnail" class="thumbnail-details">
                    </div>
                </div>
                <a href="{{ route('schooldetail.edit',1) }}" class="btn btn-primary" style="float: right;">Edit</a>&nbsp &nbsp
                                   
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