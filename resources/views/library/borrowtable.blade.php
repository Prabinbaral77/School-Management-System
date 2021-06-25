@extends('layout.app')
@section('content')
<div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3><b>Borrowed Book Section </b><small></small><p class="text text-danger"></p></h3>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row" style="display: block;">
              
              <div class="clearfix"></div>
              <div class="clearfix"></div>

              <div class="col-md-12 col-sm-12  ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2><b>Registered Book: {{ count($allBorrowedBook) }}</b></h2>
                    @if (session('ROLE') == 'ADMIN')
                    <div class="clearfix">
                      <span style="padding-left: 900px;"><a href={{route('home')}} class="btn btn-info">GO Back</a><a href="" class="btn btn-info">Total Number of Book:{{ count($allBorrowedBook) }}</a><a href="" class="btn btn-info">Total Issued Book:0</a><a href="" class="btn btn-info">Total Student:{{ count($totalStudent) }}</a> <a href="" class="btn btn-info">Borrowed Table</a><a href="{{route('library.create')}}" class="btn btn-primary">Add Book</a><a href="{{ route('book.borrow')}}" class="btn btn-warning">Barrow Book</a><a href="#" class="btn btn-success">Return Book</a></span>
                    </div>
                    @endif
                  </div>

                  <div class="x_content">

                   <h4 class="text text-danger"><b>{{session('msg')}}</b></h4>

                    <div class="table-responsive">
                      <table class="table table-striped jambo_table bulk_action">
                        <thead>
                          <tr class="headings">
                            <th>
                              <input type="checkbox" id="check-all" class="flat">
                            </th>
                            <th class="column-title">ID</th>
                            <th class="column-title">Book Name</th>
                            <th class="column-title">Author</th>
                            <th class="column-title">Borrowed Quantity</th>
                            <th class="column-title">Student Name</th>
                            <th class="column-title">Borrowed Date</th>
                            <th class="column-title no-link last"><span class="nobr">Action</span>
                            </th>
                            <th class="bulk-actions" colspan="7">
                              <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevr  on-down"></i></a>
                            </th>
                          </tr>
                        </thead>

                        <tbody>
                               
                                @php
                                    use App\Models\Library;
                                    use App\Models\Student;

                                    function bookName($id) {
                                       $bookName = Library::where(['id' => $id])->pluck('bookname');
                                       $bookName = trim($bookName, '[""]');
                                       return $bookName;
                                    }

                                    function studentName($id){
                                        $studentname = Student::where(['id' => $id])->pluck('full_name');
                                        $studentname = trim($studentname, '[""]');
                                        return $studentname;
                                    }
                                @endphp


                                @if($allBorrowedBook)                                
                                 @foreach($allBorrowedBook as $book)
                                   @if($book->qty > 0) 
                                      <tr class="even pointer">
                                        <td class="a-center ">
                                          <input type="checkbox" class="flat" name="table_records">
                                        </td>
                                        <td class=" ">{{$book->id}}</td>
                                        <td class=" ">{{bookName($book->book_id)}}</td>
                                        <td class=" ">{{$book->author_name}}</td>
                                        <td class=" ">{{$book->qty}}</td>
                                        <td class=" ">{{studentName($book->student_id)}}</td>
                                        <td class=" ">{{$book->borrowed_date}}</td>
                                        <td class="last">
                                          <a href="{{route('return_book', $book->id)}}" class="btn btn-danger rounded-pill">Return Book</a>&nbsp;&nbsp;
                                          <a href="{{route('borrow_report', $book->id)}}">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-file-earmark-pdf" viewBox="0 0 16 16">
                                              <path d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2zM9.5 3A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5v2z"/>
                                              <path d="M4.603 14.087a.81.81 0 0 1-.438-.42c-.195-.388-.13-.776.08-1.102.198-.307.526-.568.897-.787a7.68 7.68 0 0 1 1.482-.645 19.697 19.697 0 0 0 1.062-2.227 7.269 7.269 0 0 1-.43-1.295c-.086-.4-.119-.796-.046-1.136.075-.354.274-.672.65-.823.192-.077.4-.12.602-.077a.7.7 0 0 1 .477.365c.088.164.12.356.127.538.007.188-.012.396-.047.614-.084.51-.27 1.134-.52 1.794a10.954 10.954 0 0 0 .98 1.686 5.753 5.753 0 0 1 1.334.05c.364.066.734.195.96.465.12.144.193.32.2.518.007.192-.047.382-.138.563a1.04 1.04 0 0 1-.354.416.856.856 0 0 1-.51.138c-.331-.014-.654-.196-.933-.417a5.712 5.712 0 0 1-.911-.95 11.651 11.651 0 0 0-1.997.406 11.307 11.307 0 0 1-1.02 1.51c-.292.35-.609.656-.927.787a.793.793 0 0 1-.58.029zm1.379-1.901c-.166.076-.32.156-.459.238-.328.194-.541.383-.647.547-.094.145-.096.25-.04.361.01.022.02.036.026.044a.266.266 0 0 0 .035-.012c.137-.056.355-.235.635-.572a8.18 8.18 0 0 0 .45-.606zm1.64-1.33a12.71 12.71 0 0 1 1.01-.193 11.744 11.744 0 0 1-.51-.858 20.801 20.801 0 0 1-.5 1.05zm2.446.45c.15.163.296.3.435.41.24.19.407.253.498.256a.107.107 0 0 0 .07-.015.307.307 0 0 0 .094-.125.436.436 0 0 0 .059-.2.095.095 0 0 0-.026-.063c-.052-.062-.2-.152-.518-.209a3.876 3.876 0 0 0-.612-.053zM8.078 7.8a6.7 6.7 0 0 0 .2-.828c.031-.188.043-.343.038-.465a.613.613 0 0 0-.032-.198.517.517 0 0 0-.145.04c-.087.035-.158.106-.196.283-.04.192-.03.469.046.822.024.111.054.227.09.346z"/>
                                            </svg>
                                          </a>
                                        </td>
                                      </tr>
                                      @endif
                                 @endforeach
                                @endif
                            <tr class="even pointer">
                              <td class="a-center ">
                                <input type="checkbox" class="flat" name="table_records">
                              </td>
                            </tr>
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