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
                    @if (session('ROLE') == 'ADMIN')
                    <div class="clearfix">
                      <span style="padding-left: 870px;"><a href="{{ route('schedule.create') }}" class="btn btn-info">Add Schedule</a></span>
                    </div>  
                    @endif
                  </div>

                  <div class="x_content">
                    <div class="table-responsive">
                      <table class="table table-striped jambo_table bulk_action">
                        <thead>
                          <tr class="headings">
                            <th>
                              <input type="hidden" id="check-all" class="flat">
                            </th>
                            <th class="column-title">Class (Nursary to 12)</th>
                            @foreach ($periodSchedule as $periodSched)
                                <th class="column-title">{{ $periodSched->name }}({{ $periodSched->time_range }})</th>
                            @endforeach
                            <th class="bulk-actions" colspan="7">
                              <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                            </th>
                          </tr>
                        </thead>

                        <tbody>
                         @php
                          
                          use App\Models\Schedule;
                          use App\Models\Subject;
                          use App\Models\Teacher;

                           function subjectName($gradeid,$periodid){

                            $subject = Schedule::where([
                                'period_id'=>$periodid,
                                'grade_id'=>$gradeid,
                            ])->pluck('subject_id');
                            
                            $subject1 = trim($subject,'[]');
                            $subject2 = Subject::where('id',$subject1)->pluck('name');
                            $subject = trim($subject2,'[""]');
                            return $subject;
                            }

                            function teacherName($gradeid,$periodid){

                            $teacher1 = Schedule::where([
                                'period_id'=>$periodid,
                                'grade_id'=>$gradeid,
                            ])->pluck('teacher_id');

                            $teacher2 = trim($teacher1,'[]');
                            $teacher3 = Teacher::where('id',$teacher2)->pluck('fullname');
                            $teacher = trim($teacher3,'[""]');
                            return $teacher;
                            }
                         @endphp
                          
                          @foreach ($grades as $grade)
                         
                          <tr class="even pointer">
                          <td class="a-center ">
                            <input type="hidden" class="flat" name="table_records">
                          </td>
                          <td class="">{{ $grade->name }}</td>
                          <td class=" ">
                            <a href="#">{{ subjectName($grade->id,1) }} </a><br>
                            <a href="#">{{ teacherName($grade->id,1) }}</a>
                          </td>
                          <td class=" ">
                            <a href="#">{{ subjectName($grade->id,2) }}</a><br>
                            <a href="#">{{ teacherName($grade->id,2) }}</a>
                          </td>
                          <td class=" ">Break</td>
                          <td class=" ">
                            <a href="#">{{ subjectName($grade->id,4) }}</a><br>
                            <a href="#">{{ teacherName($grade->id,4) }}</a>
                          </td>
                          <td class=" ">Break</td>
                          <td class=" ">
                            <a href="#">{{ subjectName($grade->id,6) }}</a><br>
                            <a href="#">{{ teacherName($grade->id,6) }}</a>
                          </td>
                          <td class=" ">
                            <a href="#">{{ subjectName($grade->id,7) }}</a><br>
                            <a href="#">{{ teacherName($grade->id,7) }}</a>
                          </td>
                          <td class=" ">
                            <a href="#">{{ subjectName($grade->id,8) }}</a><br>
                            <a href="#">{{ teacherName($grade->id,8) }}</a>
                          </td>
                        </tr>
                          @endforeach
                      </tbody>
                      </table>
                      <div class="clearfix">
                        <span style="padding-left: 970px;"><a href="{{ route('schedule.destroy') }}" class="btn btn-danger">Reset Schedule</a></span>
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
  </div>
@endsection