@extends('layout.app')
@section('content')
<div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3><b>Library Management Section </b><small></small><p class="text text-danger"></p></h3>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row" style="display: block;">
              
              <div class="clearfix"></div>
              <div class="clearfix"></div>

              <div class="col-md-12 col-sm-12  ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2><b>Registered Book: {{ count($allBook) }}</b></h2>
                    @if (session('ROLE') == 'ADMIN')
                    <div class="clearfix">
                      <span style="padding-left: 900px;">
                      <a href={{route('home')}} class="btn btn-info btn-sm">GO Back</a>
                      <a href="" class="btn btn-info btn-sm">Total Number of Book:{{ count($allBook) }}</a>
                      <a href="" class="btn btn-info btn-sm">Total Issued Book:0</a>
                      <a href="" class="btn btn-info btn-sm">Total Student:{{ count($totalStudent) }}</a>
                      <a href="{{route('borrowed_table')}}" class="btn btn-info btn-sm">Borrowed Table</a>
                      <a href="{{route('library.create')}}" class="btn btn-primary btn-sm">Add Book</a>
                      <a href="{{ route('book.borrow')}}" class="btn btn-warning btn-sm">Barrow Book</a>
                      <form action="{{route('book.search')}}" method="post">
                        @csrf
                      <div style="margin-left:65%">
                          <input type="text" name="search" id="search" style="border-top:none; border-left: none; border-right: none;" placeholder="Enter Book Name" autocomplete="off" required>
                          <button type="submit" class="btn btn-success btn-sm">Search Book</button></span>
                      </div>
                      </form>
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
                            <th class="column-title">Image</th>
                            <th class="column-title">Book Name</th>
                            <th class="column-title">Author</th>
                            <th class="column-title">Total Quantity</th>
                            <th class="column-title">Issued By</th>
                            <th class="column-title no-link last"><span class="nobr">Action</span>
                            </th>
                            <th class="bulk-actions" colspan="7">
                              <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                            </th>
                          </tr>
                        </thead>

                        <tbody>
                                @if($allBook)
                                 @foreach($allBook as $book)
                                 <tr class="even pointer">
                                  <td class="a-center ">
                                    <input type="checkbox" class="flat" name="table_records">
                                  </td>
                                  <td class=" ">{{$book->id}}</td>
                                  <td class=""><a><img style="width: 40px;" src="{{ asset('storage/images/book/'.$book->cover_image) }}"></a></td>
                                  <td class=" ">{{$book->bookname}}</td>
                                  <td class=" ">{{$book->author}}</td>
                                  <td class=" ">{{$book->quantity}}</td>
                                  <td class=" ">{{$book->issued_by}}</td>
                                  <td class=" last">
                                    <a href="{{route('book.edit', $book->id)}}" class="btn btn-primary">Edit</a>&nbsp &nbsp
                                    <a href="{{route('book.delete', $book->id)}}" class="btn btn-danger">Delete
                                  </td>
                                </tr>
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