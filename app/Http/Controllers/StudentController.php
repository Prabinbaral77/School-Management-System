<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use App\Models\Grade;
use App\Http\Requests\StudentValidationRequest;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;
use App\Mail\Mailsender;


class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Student $student)
    {
        $allStudents = Student::orderBy('full_name', 'asc')->get();
        return view('table.allstudent')->with([
            'allStudent' => $allStudents,
            'student' => $student,
        ]);
    }

    public function single(Student $student,$id)
    {
        $gradename = DB::table('grades')->where('id', $id)->pluck('name');
        $allStudents = DB::table('students')->where('grade_id',$id)->orderBy('roll_no', 'asc')->get();
        return view('table.student')->with([
            'allStudent' => $allStudents,
            'student' => $student,
            'gradename' => $gradename,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $grades = Grade::all();
        return view('form.student')->with('grades', $grades);
    }

 
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StudentValidationRequest $request)
    {
        $studentdetail = array(
            'full_name' => $request->input('f_name'),
            'email' => $request->input('email'),
            'roll_no' => (int)$request->input('roll_no'),
            'grade_id' => (int)$request->input('grade'),
            'address' => $request->input('address'),
            'gurdian_name' => $request->input('guardian_name'),
            'phone_number' => (int)$request->input('contact'),
            'gender' => $request->input('gender'),
            'date_of_birth' => $request->input('dob'),
        );
        if($request->has('thumbnail')){
            $extension = ".".$request->thumbnail->getClientOriginalExtension();
            $name = basename($request->thumbnail->getClientOriginalName(),$extension).time();
            $name = $name.$extension;
            $path = $request->thumbnail->storeAs('public/images/student',$name);
            $studentdetail['thumbnail'] = $name;
        }

        if($request->has('email')){
            $gradeId = $studentdetail['grade_id'];
            $grade = Grade::where('id',$gradeId)->pluck('name');
            $grade = $grade[0];

             $details = [
                 'name' => $studentdetail['full_name'],
                 'rollNo' => $studentdetail['roll_no'],
                 'grade'=>$grade,
                 'address' => $studentdetail['address'],
                 'gurdian_name' => $studentdetail['gurdian_name'],
                 'phone_number' => $studentdetail['phone_number'],
                 'gender' => $studentdetail['gender'],
                 'date_of_birth' => $studentdetail['date_of_birth'],
             ];

            $receivingEmail = $studentdetail['email'];
            $receivingName = $studentdetail['full_name'];
           // dd($request->post());
            $sendMail = Mail::to($receivingEmail)->send(new Mailsender($details));

            $createStudent = Student::create($studentdetail);

            return redirect()->route('student.singletable',$studentdetail['grade_id'])->with('msg','Student has been Added Successfully!!');
            
        }/* 
       else {
            Student::create($studentdetail);
            return redirect()->route('student.singletable',$studentdetail['grade_id'])->with('msg','Student has been Added Successfully!!');
            } */
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student,$id)
    {
        $gradeid = DB::table('students')->where('id',$id)->pluck('grade_id');
        $gradeids = $gradeid[0];
        $gradename = DB::table('grades')->where('id', $gradeids)->pluck('name');

        $grades = Grade::all();
        $studentdetail = DB::table('students')->where('id', $id)->get();

        return view('form.edit.student')->with([
            'grades' =>  $grades,
            'studentdetail' => $studentdetail,
            'gradename' => $gradename,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student, $id)
    {
        $updateStudent = array(
            'full_name' => $request->input('f_name'),
            'roll_no' => (int)$request->input('roll_no'),
            'grade_id'=> (int)$request->input('grade'),
            'address' => $request->input('address'),
            'gurdian_name' => $request->input('guardian_name'),
            'phone_number' => (int)$request->input('contact'),
            'date_of_birth' => $request->input('dob'),
        );
        
        //for gender update
        if($request->input('gender')){
            $genderStd = $request->input('gender');
        }else{
            $gender = DB::table('students')->where('id', $id)->pluck('gender');
            $genderStd = $gender[0];
        }
        $updateStudent['gender'] = $genderStd;


        //for thumbnail update
        if($request->has('thumbnail')){
            $extension = ".".$request->thumbnail->getClientOriginalExtension();
            $name = basename($request->thumbnail->getClientOriginalName(),$extension).time();
            $name = $name.$extension;
            $path = $request->thumbnail->storeAs('public/images/student',$name);
            $thumbnailStd = $name;
        }else{
            $thumbnail = DB::table('students')->where('id', $id)->pluck('thumbnail');
            $thumbnailStd = $thumbnail[0];
        }
        $updateStudent['thumbnail'] = $thumbnailStd;

         //for Grade
         //Grade update not Working
         if($request->input('option')){
            //$gradeStd = $request->input('grade');
        }else{
            $grade = DB::table('students')->where('id', $id)->pluck('grade_id');
            $gradeStd = $grade[0];
            $updateStudent['grade_id'] = (int)$gradeStd;
        }
      //dd($updateStudent);

        //update all students data
        if(Student::where('id', $id)->update($updateStudent)){
            return redirect()->route('student.singletable',$updateStudent['grade_id'])->with('msg','Student Updated Successfully!!');
        }else{
            return redirect()->back()->with('msg','Error in updating record');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student,$id)
    {
        if(Student::where('id',$id)->forceDelete()){
            return redirect()->back()->with('msg','Student deleted Successfully!!');
        }else{
            return redirect()->back()->with('msg','Error in deleting Record!!');
        }
    }

    public function studentdetail(Student $student,$id) {
        $detailStd = DB::table('students')->where('id', $id)->get();
        $gradeId = DB::table('students')->where('id', $id)->pluck('grade_id');
        $gradeName = DB::table('grades')->where('id',$gradeId[0])->pluck('name');
        return view('details.student')->with([
            'detailStd'=> $detailStd,
            'gradeName'=> $gradeName,
        ]);
    }

}
