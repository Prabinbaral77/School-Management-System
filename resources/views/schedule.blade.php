@extends('layout.app')
@section('content')

        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Tables <small>Class Schedule for every class</small></h3><p class="text text-danger">{{session('msg')}}</p>
              </div>
            </div>
            <div class="clearfix"></div>
            <div class="row" style="display: block;">
              <div class="clearfix"></div>
              <div class="col-md-12 col-sm-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Nursary To 12<small>Schedule</small></h2>
                    <div class="clearfix">
                      <span style="padding-left: 870px;"><a href="{{ url('schedule_form') }}" class="btn btn-info">Add Schedule</a></span>
                    </div>
                  </div>

                  <div class="x_content">
                    <div class="table-responsive">
                      <table class="table table-striped jambo_table bulk_action">
                        <thead>
                          <tr class="headings">
                            <th>
                              <input type="checkbox" id="check-all" class="flat">
                            </th>
                            <th class="column-title">Class (Nursary to 12)</th>
                            <th class="column-title">Period I (10:15 AM-11:15 AM)</th>
                            <th class="column-title">Period II(11:15 AM-12:15 PM)</th>
                            <th class="column-title">Period III(12:15 PM-01:15 PM)</th>
                            <th class="column-title">Break(01:15 PM-02:00 PM)</th>
                            <th class="column-title">Period IV(02:00 PM-03:00 PM)</th>
                            <th class="column-title">Period V(03:00 PM-04:00 PM)</th>
                            <th class="column-title">Period VI(04:00 PM-05:00 PM)</th>
                            </th>
                            <th class="bulk-actions" colspan="7">
                              <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                            </th>
                          </tr>
                        </thead>

                        <tbody>
                          <tr class="even pointer">
                            <td class="a-center ">
                              <input type="checkbox" class="flat" name="table_records">
                            </td>
                            <td class=" ">Nursary</td>
                            <td class=" ">
                              <a href="{{ url('schedule_update/'.$Nursary1015[0]->id) }}">{{$Nursary1015[0]->subject}}</a><br>
                              <a href="{{ url('schedule_update/'.$Nursary1015[0]->id) }}">{{$Nursary1015[0]->subject_teacher}}</a>
                            </td>
                            <td class=" ">
                              <a href="{{ url('schedule_update/'.$Nursary1115[0]->id) }}">{{$Nursary1115[0]->subject}}</a><br>
                              <a href="{{ url('schedule_update/'.$Nursary1115[0]->id) }}">{{$Nursary1115[0]->subject_teacher}}</a>
                            </td>
                            <td class=" ">
                              <a href="{{ url('schedule_update/'.$Nursary1215[0]->id) }}">{{$Nursary1215[0]->subject}}</a><br>
                              <a href="{{ url('schedule_update/'.$Nursary1215[0]->id) }}">{{$Nursary1215[0]->subject_teacher}}</a>
                            </td>
                            <td class=" ">Break</td>
                            <td class=" ">
                              <a href="{{ url('schedule_update/'.$Nursary0200[0]->id) }}">{{$Nursary0200[0]->subject}}</a><br>
                              <a href="{{ url('schedule_update/'.$Nursary0200[0]->id) }}">{{$Nursary0200[0]->subject_teacher}}</a>
                            </td>
                            <td class=" ">
                              <a href="{{ url('schedule_update/'.$Nursary0300[0]->id) }}">{{$Nursary0300[0]->subject}}</a><br>
                              <a href="{{ url('schedule_update/'.$Nursary0300[0]->id) }}">{{$Nursary0300[0]->subject_teacher}}</a>
                            </td>
                            <td class=" ">
                              <a href="{{ url('schedule_update/'.$Nursary0400[0]->id) }}">{{$Nursary0400[0]->subject}}</a><br>
                              <a href="{{ url('schedule_update/'.$Nursary0400[0]->id) }}">{{$Nursary0400[0]->subject_teacher}}</a>
                            </td>
                          </tr>
                          <tr class="odd pointer">
                            <td class="a-center ">
                              <input type="checkbox" class="flat" name="table_records">
                            </td>
                            <td class=" ">LKG</td>
                            <td class=" ">
                             <a href="{{ url('schedule_update/'.$Lkg1015[0]->id) }}">{{$Lkg1015[0]->subject}}</a><br>
                              <a href="{{ url('schedule_update/'.$Lkg1015[0]->id) }}">{{$Lkg1015[0]->subject_teacher}}</a>
                            </td>
                            <td class=" ">
                              <a href="{{ url('schedule_update/'.$Lkg1115[0]->id) }}">{{$Lkg1115[0]->subject}}</a><br>
                              <a href="{{ url('schedule_update/'.$Lkg1115[0]->id) }}">{{$Lkg1115[0]->subject_teacher}}</a>
                            </td>
                            <td class=" ">
                              <a href="{{ url('schedule_update/'.$Lkg1215[0]->id) }}">{{$Lkg1215[0]->subject}}</a><br>
                              <a href="{{ url('schedule_update/'.$Lkg1215[0]->id) }}">{{$Lkg1215[0]->subject_teacher}}</a>
                            </td>
                            <td class=" ">Break</td>
                            <td class=" ">
                              <a href="{{ url('schedule_update/'.$Lkg0200[0]->id) }}">{{$Lkg0200[0]->subject}}</a><br>
                              <a href="{{ url('schedule_update/'.$Lkg0200[0]->id) }}">{{$Lkg0200[0]->subject_teacher}}</a>
                            </td>
                            <td class=" ">
                              <a href="{{ url('schedule_update/'.$Lkg0300[0]->id) }}">{{$Lkg0300[0]->subject}}</a><br>
                              <a href="{{ url('schedule_update/'.$Lkg0300[0]->id) }}">{{$Lkg0300[0]->subject_teacher}}</a>
                            </td>
                            <td class=" ">
                              <a href="{{ url('schedule_update/'.$Lkg0300[0]->id) }}">{{$Lkg0300[0]->subject}}</a><br>
                              <a href="{{ url('schedule_update/'.$Lkg0300[0]->id) }}">{{$Lkg0300[0]->subject_teacher}}</a>
                            </td>
                          </tr>
                          <tr class="even pointer">
                            <td class="a-center ">
                              <input type="checkbox" class="flat" name="table_records">
                            </td>
                            <td class=" ">UKG</td>
                            <td class=" ">
                              <a href="#">Mathmatics</a><br>
                              <a href="#">Teacher:Sunil</a>
                            </td>
                            <td class=" ">
                              <a href="#">Science</a><br>
                              <a href="#">Teacher:Min</a>
                            </td>
                            <td class=" ">
                              <a href="#">English</a><br>
                              <a href="#">Teacher :Bishnu</a>
                            </td>
                            <td class=" ">Break</td>
                            <td class=" ">
                              <a href="#">HPE</a><br>
                              <a href="#">Teacher:Somanath</a>
                            </td>
                            <td class=" ">
                              <a href="#">Computer</a><br>
                              <a href="#">Teacher:Keshab</a>
                            </td>
                            <td class=" ">
                              <a href="#">Grammer</a><br>
                              <a href="#">Teacher:Balkrishna</a>
                            </td>
                          </tr>
                          <tr class="odd pointer">
                            <td class="a-center ">
                              <input type="checkbox" class="flat" name="table_records">
                            </td>
                            <td class=" ">ONE</td>
                            <td class=" ">
                              <a href="#">Mathmatics</a><br>
                              <a href="#">Teacher:Sunil</a>
                            </td>
                            <td class=" ">
                              <a href="#">Science</a><br>
                              <a href="#">Teacher:Min</a>
                            </td>
                            <td class=" ">
                              <a href="#">English</a><br>
                              <a href="#">Teacher :Bishnu</a>
                            </td>
                            <td class=" ">Break</td>
                            <td class=" ">
                              <a href="#">HPE</a><br>
                              <a href="#">Teacher:Somanath</a>
                            </td>
                            <td class=" ">
                              <a href="#">Computer</a><br>
                              <a href="#">Teacher:Keshab</a>
                            </td>
                            <td class=" ">
                              <a href="#">Grammer</a><br>
                              <a href="#">Teacher:Balkrishna</a>
                            </td>
                          </tr>
                          <tr class="even pointer">
                            <td class="a-center ">
                              <input type="checkbox" class="flat" name="table_records">
                            </td>
                            <td class=" ">TWO</td>
                            <td class=" ">
                              <a href="#">Mathmatics</a><br>
                              <a href="#">Teacher:Sunil</a>
                            </td>
                            <td class=" ">
                              <a href="#">Science</a><br>
                              <a href="#">Teacher:Min</a>
                            </td>
                            <td class=" ">
                              <a href="#">English</a><br>
                              <a href="#">Teacher :Bishnu</a>
                            </td>
                            <td class=" ">Break</td>
                            <td class=" ">
                              <a href="#">HPE</a><br>
                              <a href="#">Teacher:Somanath</a>
                            </td>
                            <td class=" ">
                              <a href="#">Computer</a><br>
                              <a href="#">Teacher:Keshab</a>
                            </td>
                            <td class=" ">
                              <a href="#">Grammer</a><br>
                              <a href="#">Teacher:Balkrishna</a>
                            </td>
                          </tr>
                          <tr class="odd pointer">
                            <td class="a-center ">
                              <input type="checkbox" class="flat" name="table_records">
                            </td>
                            <td class=" ">THREE</td>
                            <td class=" ">
                              <a href="#">Mathmatics</a><br>
                              <a href="#">Teacher:Sunil</a>
                            </td>
                            <td class=" ">
                              <a href="#">Science</a><br>
                              <a href="#">Teacher:Min</a>
                            </td>
                            <td class=" ">
                              <a href="#">English</a><br>
                              <a href="#">Teacher :Bishnu</a>
                            </td>
                            <td class=" ">Break</td>
                            <td class=" ">
                              <a href="#">HPE</a><br>
                              <a href="#">Teacher:Somanath</a>
                            </td>
                            <td class=" ">
                              <a href="#">Computer</a><br>
                              <a href="#">Teacher:Keshab</a>
                            </td>
                            <td class=" ">
                              <a href="#">Grammer</a><br>
                              <a href="#">Teacher:Balkrishna</a>
                            </td>
                          </tr>
                          <tr class="odd pointer">
                            <td class="a-center ">
                              <input type="checkbox" class="flat" name="table_records">
                            </td>
                            <td class=" ">FIVE</td>
                            <td class=" ">
                              <a href="#">Mathmatics</a><br>
                              <a href="#">Teacher:Sunil</a>
                            </td>
                            <td class=" ">
                              <a href="#">Science</a><br>
                              <a href="#">Teacher:Min</a>
                            </td>
                            <td class=" ">
                              <a href="#">English</a><br>
                              <a href="#">Teacher :Bishnu</a>
                            </td>
                            <td class=" ">Break</td>
                            <td class=" ">
                              <a href="#">HPE</a><br>
                              <a href="#">Teacher:Somanath</a>
                            </td>
                            <td class=" ">
                              <a href="#">Computer</a><br>
                              <a href="#">Teacher:Keshab</a>
                            </td>
                            <td class=" ">
                              <a href="#">Grammer</a><br>
                              <a href="#">Teacher:Balkrishna</a>
                            </td>
                          </tr>

                          <tr class="even pointer">
                            <td class="a-center ">
                              <input type="checkbox" class="flat" name="table_records">
                            </td>
                            <td class=" ">SIX</td>
                            <td class=" ">
                              <a href="#">Mathmatics</a><br>
                              <a href="#">Teacher:Sunil</a>
                            </td>
                            <td class=" ">
                              <a href="#">Science</a><br>
                              <a href="#">Teacher:Min</a>
                            </td>
                            <td class=" ">
                              <a href="#">English</a><br>
                              <a href="#">Teacher :Bishnu</a>
                            </td>
                            <td class=" ">Break</td>
                            <td class=" ">
                              <a href="#">HPE</a><br>
                              <a href="#">Teacher:Somanath</a>
                            </td>
                            <td class=" ">
                              <a href="#">Computer</a><br>
                              <a href="#">Teacher:Keshab</a>
                            </td>
                            <td class=" ">
                              <a href="#">Grammer</a><br>
                              <a href="#">Teacher:Balkrishna</a>
                            </td>
                          </tr>
                          <tr class="odd pointer">
                            <td class="a-center ">
                              <input type="checkbox" class="flat" name="table_records">
                            </td>
                            <td class=" ">SEVEN</td>
                            <td class=" ">
                              <a href="#">Mathmatics</a><br>
                              <a href="#">Teacher:Sunil</a>
                            </td>
                            <td class=" ">
                              <a href="#">Science</a><br>
                              <a href="#">Teacher:Min</a>
                            </td>
                            <td class=" ">
                              <a href="#">English</a><br>
                              <a href="#">Teacher :Bishnu</a>
                            </td>
                            <td class=" ">Break</td>
                            <td class=" ">
                              <a href="#">HPE</a><br>
                              <a href="#">Teacher:Somanath</a>
                            </td>
                            <td class=" ">
                              <a href="#">Computer</a><br>
                              <a href="#">Teacher:Keshab</a>
                            </td>
                            <td class=" ">
                              <a href="#">Grammer</a><br>
                              <a href="#">Teacher:Balkrishna</a>
                            </td>
                          </tr>
                          <tr class="odd pointer">
                            <td class="a-center ">
                              <input type="checkbox" class="flat" name="table_records">
                            </td>
                            <td class=" ">EIGHT</td>
                            <td class=" ">
                              <a href="#">Mathmatics</a><br>
                              <a href="#">Teacher:Sunil</a>
                            </td>
                            <td class=" ">
                              <a href="#">Science</a><br>
                              <a href="#">Teacher:Min</a>
                            </td>
                            <td class=" ">
                              <a href="#">English</a><br>
                              <a href="#">Teacher :Bishnu</a>
                            </td>
                            <td class=" ">Break</td>
                            <td class=" ">
                              <a href="#">HPE</a><br>
                              <a href="#">Teacher:Somanath</a>
                            </td>
                            <td class=" ">
                              <a href="#">Computer</a><br>
                              <a href="#">Teacher:Keshab</a>
                            </td>
                            <td class=" ">
                              <a href="#">Grammer</a><br>
                              <a href="#">Teacher:Balkrishna</a>
                            </td>
                          </tr>
                          <tr class="odd pointer">
                            <td class="a-center ">
                              <input type="checkbox" class="flat" name="table_records">
                            </td>
                            <td class=" ">NINE</td>
                            <td class=" ">
                              <a href="#">Mathmatics</a><br>
                              <a href="#">Teacher:Sunil</a>
                            </td>
                            <td class=" ">
                              <a href="#">Science</a><br>
                              <a href="#">Teacher:Min</a>
                            </td>
                            <td class=" ">
                              <a href="#">English</a><br>
                              <a href="#">Teacher :Bishnu</a>
                            </td>
                            <td class=" ">Break</td>
                            <td class=" ">
                              <a href="#">HPE</a><br>
                              <a href="#">Teacher:Somanath</a>
                            </td>
                            <td class=" ">
                              <a href="#">Computer</a><br>
                              <a href="#">Teacher:Keshab</a>
                            </td>
                            <td class=" ">
                              <a href="#">Grammer</a><br>
                              <a href="#">Teacher:Balkrishna</a>
                            </td>
                          </tr>
                          <tr class="odd pointer">
                            <td class="a-center ">
                              <input type="checkbox" class="flat" name="table_records">
                            </td>
                            <td class=" ">TEN</td>
                            <td class=" ">
                              <a href="#">Mathmatics</a><br>
                              <a href="#">Teacher:Sunil</a>
                            </td>
                            <td class=" ">
                              <a href="#">Science</a><br>
                              <a href="#">Teacher:Min</a>
                            </td>
                            <td class=" ">
                              <a href="#">English</a><br>
                              <a href="#">Teacher :Bishnu</a>
                            </td>
                            <td class=" ">Break</td>
                            <td class=" ">
                              <a href="#">HPE</a><br>
                              <a href="#">Teacher:Somanath</a>
                            </td>
                            <td class=" ">
                              <a href="#">Computer</a><br>
                              <a href="#">Teacher:Keshab</a>
                            </td>
                            <td class=" ">
                              <a href="#">Grammer</a><br>
                              <a href="#">Teacher:Balkrishna</a>
                            </td>
                          </tr>
                          <tr class="odd pointer">
                            <td class="a-center ">
                              <input type="checkbox" class="flat" name="table_records">
                            </td>
                            <td class=" ">ELEVEN</td>
                            <td class=" ">
                              <a href="#">Mathmatics</a><br>
                              <a href="#">Teacher:Sunil</a>
                            </td>
                            <td class=" ">
                              <a href="#">Science</a><br>
                              <a href="#">Teacher:Min</a>
                            </td>
                            <td class=" ">
                              <a href="#">English</a><br>
                              <a href="#">Teacher :Bishnu</a>
                            </td>
                            <td class=" ">Break</td>
                            <td class=" ">
                              <a href="#">HPE</a><br>
                              <a href="#">Teacher:Somanath</a>
                            </td>
                            <td class=" ">
                              <a href="#">Computer</a><br>
                              <a href="#">Teacher:Keshab</a>
                            </td>
                            <td class=" ">
                              <a href="#">Grammer</a><br>
                              <a href="#">Teacher:Balkrishna</a>
                            </td>
                          </tr>
                          <tr class="odd pointer">
                            <td class="a-center ">
                              <input type="checkbox" class="flat" name="table_records">
                            </td>
                            <td class=" ">TWELVE</td>
                            <td class=" ">
                              <a href="#">Mathmatics</a><br>
                              <a href="#">Teacher:Sunil</a>
                            </td>
                            <td class=" ">
                              <a href="#">Science</a><br>
                              <a href="#">Teacher:Min</a>
                            </td>
                            <td class=" ">
                              <a href="#">English</a><br>
                              <a href="#">Teacher :Bishnu</a>
                            </td>
                            <td class=" ">Break</td>
                            <td class=" ">
                              <a href="#">HPE</a><br>
                              <a href="#">Teacher:Somanath</a>
                            </td>
                            <td class=" ">
                              <a href="#">Computer</a><br>
                              <a href="#">Teacher:Keshab</a>
                            </td>
                            <td class=" ">
                              <a href="#">Grammer</a><br>
                              <a href="#">Teacher:Balkrishna</a>
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
            </div>
          </div>
        </div>
@endsection