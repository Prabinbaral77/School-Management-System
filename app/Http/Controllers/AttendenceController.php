<?php

namespace App\Http\Controllers;

use App\Models\Attendence;
use Illuminate\Http\Request;
use App\Models\Grade;
use App\Models\Student;
use Illuminate\Support\Facades\DB;

class AttendenceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$gradename = Grade::all();
        if (session('ROLE') == 'ADMIN'){
            return view('attendence.admin.student');
        }else{
            return view('attendence.student');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        /* $date = $request->input('current_date');
        $grade_id = $id;
        $studentID = Student::where('grade_id',$grade_id)->pluck('id');
        $totalStd = $studentID->count();
        $present_studentId = $request->value('present');
        dd($present_studentId); */
        $grade_id = $request->input('class_id');
        $date = $request->input('current_date');
        $dataexist = Attendence::whereDate('attendence_date',$date)
                                ->where('grade_id',$grade_id)
                                ->get();
        if (count($dataexist) !== 0 ) {
            return redirect()->back()
                             ->with('msg', 'Attendance already taken!');
        }
        

        foreach ($request->attendences as $student_id => $attendence) {

            if( $attendence == 'present' ) {
                $attendence_status = true;
            } else if( $attendence == 'absent' ){
                $attendence_status = false;
            }

            Attendence::create([
                'grade_id'          => $request->class_id,
                'student_id'        => $student_id,
                'attendence_date'   => $date,
                'attendence_status' => $attendence_status
            ]);
        }
        return back()->with('msg','Attendence Taken Sucessfully');
    }

    public function list(Request $request,$id)
    {

        $grade_id = $id;
        $gradename = DB::table('grades')->where('id', $grade_id)->pluck('name');
        /* $gradename = trim($gradename, ""); */
        $allStd = Student::where('grade_id',$grade_id);
        return view('attendence.list')->with([
            'grade_name' => $gradename,
            'students'=>$allStd,
            'grade_id' =>$grade_id,
        ]);
    }


    public function single(Student $student,$id)
    {

        $gradename = DB::table('grades')->where('id', $id)->pluck('name');
        $allStudents = DB::table('students')->where('grade_id',$id)->orderBy('roll_no', 'asc')->get();
        return view('attendence.createAttendence')->with([
            'allStudent' => $allStudents,
            'student' => $student,
            'gradename' => $gradename,
            'id'=>$id,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    public function search(Request $request,$id)
    {
        $searchdate = $request->search;
        
        if($request->ajax())
        {
           $output="";
           $attendee=Attendence::where('attendence_date','like',$searchdate)->where('grade_id', $id)->get();
             if($attendee)
             {
               foreach ($attendee as $key => $attend) {
                if($attend->attendence_status == 1){
                    $attends = "Present";
                    $color = 'text text-primary';
                }else if($attend->attendence_status == 0){
                    $attends = "Absent";
                    $color = 'text text-danger';
                }
                  $output.='<tr>'.
                  '<td class="a-center "><input type="checkbox" class="flat" name="table_records"></td>'.
                  '<td class = "">'.$attend->student->roll_no.'</td>'.
                  '<td class = "">'.$attend->attendence_date.'</td>'.
                  '<td class = "">'.$attend->student->full_name.'</td>'.
                  '<td class = "">'.$attend->student->phone_number.'</td>'.
                  '<td class = "">'.$attends.'</td>'.
                  '</tr>';
                 }
               return Response($output);
              }
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Attendence  $attendence
     * @return \Illuminate\Http\Response
     */
    public function show(Attendence $attendence)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Attendence  $attendence
     * @return \Illuminate\Http\Response
     */
    public function edit(Attendence $attendence)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Attendence  $attendence
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Attendence $attendence)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Attendence  $attendence
     * @return \Illuminate\Http\Response
     */
    public function destroy(Attendence $attendence)
    {
        //
    }
}
