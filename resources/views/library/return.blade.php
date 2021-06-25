@extends('layout.app')
@section('extra-css') 
<link href="{{ asset('asset/select2/dist/css/select2.min.css') }}" rel="stylesheet" />
@endsection
@section('content')
<div class="right_col" role="main">
    <div class="">
       <div class="page-title">
          <div class="title_left">
             <h3>Return Section</h3>
          </div>
       </div>
       <div class="clearfix"></div>
       <div class="row">
          <div class="col-md-12 col-sm-12 ">
             <div class="x_panel">
                <div class="x_title">
                   <h2>Borrow Book <small></small></h2>
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
                   <form method="post" action="{{ route('book_returned') }}" data-parsley-validate class="form-horizontal form-label-left" enctype="multipart/form-data">
                      @csrf
                      <div class="item form-group">
                         <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Student Name</label>
                         <div class="col-md-6 col-sm-6 ">
                           <select class="js-example-basic-single" name="student" style="width: 150px;">
                              <option value="select-class" >Select Student</option>
                              @foreach ($students as $student)
                               <option value="{{ $student->id }}">{{ $student->full_name }}</option>
                              @endforeach
                            </select>
                         </div>
                      </div>
                      <div class="item form-group">
                         <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Book Name</label>
                         <div class="col-md-6 col-sm-6 ">
                           <select class="js-example-basic-single" name="book" style="width: 150px;">
                              <option value="select-class" >Select Book</option>
                              @foreach ($books as $book)
                               <option value="{{ $book->id }}">{{ $book->bookname }}</option>
                              @endforeach
                            </select>
                         </div>
                      </div>
                      <div class="item form-group">
                         <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Author Name</label>
                         <div class="col-md-6 col-sm-6 ">
                           <select class="js-example-basic-single" name="author" style="width: 150px;">
                              <option value="select-class" >Select Author</option>
                              @foreach ($books as $book)
                               <option value="{{ $book->author }}">{{ $book->author }}</option>
                              @endforeach
                            </select>
                         </div>
                      </div>
                     

                      <div class="item form-group">
                         <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Quantity</label>
                         <div class="col-md-6 col-sm-6 " style="width:100px">
                            <input id="quantity" class="form-control" type="number" name="quantity" required  autocomplete="false" >
                         </div>
                      </div>
                     
                     
                       <div class="item form-group">
                         <label class="col-form-label col-md-3 col-sm-3 label-align">Return Date<span class="required">*</span>
                         </label>
                         <div class="col-md-6 col-sm-6 ">
                            <input id="issued-date" class="date-picker form-control" placeholder="dd-mm-yyyy" type="text" required="required" type="text" onfocus="this.type='date'" onmouseover="this.type='date'" onclick="this.type='date'" onblur="this.type='text'" onmouseout="timeFunctionLong(this)" name="borrowed_date">
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

