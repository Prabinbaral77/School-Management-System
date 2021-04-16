@extends('layout.app')
@section('extra-css')
<meta name="csrf-token" content="{{ csrf_token() }}">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
@endsection
@section('content')
<div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Attendence Tables <small></small><p class="text text-danger">{{session('msg')}}</p></h3>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row" style="display: block;">
              
              <div class="clearfix"></div>
              <div class="clearfix"></div>

              <div class="col-md-12 col-sm-12  ">
                <div class="x_panel">
                  <div class="x_title">
                    {{-- <h2 id="{{ $grade_id }}">Class::{{ $grade_name }}</h2> --}}
                  </div>
                  <div>
                    <h2 id="{{ $grade_id }}">Class::{{ $grade_name[0] }}</h2>
                    <label for="search">Enter date:  </label>
                    <input type="text" id="search" name="search"  class="form-controller" placeholder="Year-Month-Day">
                  </div>

                  <div class="x_content">

                   <h4><b>Shree Ratan Panday Secondary School</b></h4>

                    <div class="table-responsive">
                      <table class="table table-striped jambo_table bulk_action">
                        <thead>
                          <tr class="headings">
                            <th>
                              <input type="checkbox" id="check-all" class="flat">
                            </th>
                            <th class="column-title">Roll No</th>
                            <th class="column-title">Date</th>
                            <th class="column-title">Full Name</th>
                            <th class="column-title">Contact No </th>
                            <th class="column-title no-link last"><span class="nobr">Status</span>
                            </th>
                            <th class="bulk-actions" colspan="7">
                              <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                            </th>
                          </tr>
                        </thead>

                        

                        <tbody>
                          
                            
                        </tbody>
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

<script>
  $('#search').on('keyup',function(){
  $value=$(this).val();
  $.ajax({
  type: 'GET',
  url : "{{ route('student.attendenceSearch', $grade_id)}}",
  data:{'search':$value},
   success:function(data){
     $('tbody').html(data);
    }
  });
})
</script>
<script>
$.ajaxSetup({
headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
}
});
</script>

@endsection