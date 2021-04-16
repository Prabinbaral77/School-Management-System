@extends('layout.app')
@section('extra-css') 
<link href="{{ asset('asset/sms_asset/css/custom.css') }}" rel="stylesheet" />
@endsection
@section('content')

<div class="right_col" role="main">
    <div class="">
       <div class="page-title">
          <div class="title_left">
             <h3>Student Detailed Section</h3>
          </div>
       </div>
       <div class="clearfix"></div>
       <div class="row">
          <div class="col-md-12 col-sm-12 ">
             <div class="x_panel">
                <div class="x_content">
                    <div class="col-md-8 col-sm-12">
                       <table class="table table-stripped">
                          <tr>
                             <th>Id</th>
                             <th>Name</th>
                          </tr>
                          @foreach ($grades as $grade)
                           <tr>
                             <td>{{ $grade->id }}</td>
                             <td>{{ $grade->name }}</td>
                          </tr>
                          @endforeach
                       </table>
                    </div>
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