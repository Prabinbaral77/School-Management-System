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
                        <p class="label-section">Full Name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $detailStd[0]->full_name }}</p>
                        <p class="label-section">Email:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $detailStd[0]->email }}</p>
                        <p class="label-section">Class:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $gradeName[0] }}</p>
                        <p class="label-section">Roll No:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $detailStd[0]->roll_no }}</p>
                        <p class="label-section">Gender:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $detailStd[0]->gender }}</p>
                        <p class="label-section">Address:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $detailStd[0]->address }}</p>
                        <p class="label-section">Gurdian:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $detailStd[0]->gurdian_name }}</p>
                        <p class="label-section">Phone Number:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $detailStd[0]->phone_number }}</p>
                        <p class="label-section">Date Of Birth:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $detailStd[0]->date_of_birth }}</p>
                        <div class="attendence-container">
                        <h2 class="attendence-header">Attendance</h2>
                        <table class="table table-striped">
                           <thead>
                              <tr>
                                 <th>SN</th>
                                 <th>Date</th>
                                 <th>Attendence Status</th>
                              </tr
                           </thead>
                           <tbody>
                              @foreach($attendenceList as $key => $attendence)
                              <tr>
                                    <td>{{ ++$key }}</td>
                                    <td>{{$attendence->attendence_date}}</td>
                                    @if($attendence->attendence_status == 0)
                                    <td class="text-danger font-weight-bold">Absent</td>
                                    @else
                                    <td class="text-success font-weight-bold">Present</td>
                                    @endif
                              </tr>
                              @endforeach
                              <tr>
                                 <td class="text-success font-weight-bold">Total present:{{$attendencePresent}} </td>
                              </tr>
                              <tr>
                                 <td class="text-danger font-weight-bold">Total Absent: {{$attendenceAbsent}} </td>
                              </tr>
                           </tbody>
                        </table>
                        </div>
                    </div>
                    <div class="thumbnail">
                        <img src="{{ asset('storage/images/student/'.$detailStd[0]->thumbnail) }}" alt="student-thumbnail" class="thumbnail-details">
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