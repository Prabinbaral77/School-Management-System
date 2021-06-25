<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;
use App\Http\Requests\TeacherValidationRequest;
use Illuminate\Support\Facades\DB;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allTeacher = DB::table('teachers')->get();
        return view('table.teacher')->with('allTeacher',$allTeacher);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('form.teacher');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TeacherValidationRequest $request)
    {
        $extension = ".".$request->teacher_image->getClientOriginalExtension();
        $name = basename($request->teacher_image->getClientOriginalName(), $extension).time();
        $name = $name.$extension;
        $path = $request->teacher_image->storeAs('public/images/teacher',$name);

        $addteacher = Teacher::create([
            'fullname'=>$request->full_name,
            'address'=>$request->address,
            'email'=>$request->email,
            'password'=>$request->password,
            'phone_number'=>(int)$request->contact_number,
            'qualification'=>$request->acedamic_qualification,
            'sub_specialist'=>$request->subject_specialist,
            'gender'=>$request->gender,
            'thumbnail'=>$name,
            'date_of_birth'=>$request->dob,
            'role_id'=>2
        ]);

        if($addteacher){
            return redirect()->route('teacher.index')->with('msg','Teacher added Successfully!!');
        }else{
            return back()->with('msg','Error Occured!!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function show(Teacher $teacher)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function edit(Teacher $teacher, $id)
    {
        $teacherDetail = DB::table('teachers')->where('id',$id)->get();
        return view('form.edit.teacher')->with('teacherDetail', $teacherDetail);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Teacher $teacher, $id)
    {
        $updateTeacher = array(
            'fullname'=>$request->full_name,
            'address'=>$request->address,
            'phone_number'=>(int)$request->contact_number,
            'qualification'=>$request->acedamic_qualification,
            'sub_specialist'=>$request->subject_specialist,
            'date_of_birth'=>$request->dob,
        );
        
        //for gender update
        if($request->input('gender')){
            $genderTeacher = $request->input('gender');
        }else{
            $gender = DB::table('teachers')->where('id', $id)->pluck('gender');
            $genderTeacher = $gender[0];
        }
        $updateTeacher['gender'] = $genderTeacher;


        //for thumbnail update
        if($request->has('teacher_image')){
            $extension = ".".$request->teacher_image->getClientOriginalExtension();
            $name = basename($request->teacher_image->getClientOriginalName(), $extension).time();
            $name = $name.$extension;
            $path = $request->teacher_image->storeAs('public/images/teacher',$name);
            $thumbnailTeacher = $name;
        }else{
            $thumbnail = DB::table('teachers')->where('id', $id)->pluck('thumbnail');
            $thumbnailTeacher = $thumbnail[0];
        }
        $updateTeacher['thumbnail'] = $thumbnailTeacher;

        //dd($updateTeacher);

        //update all students data
        if(Teacher::where('id', $id)->update($updateTeacher)){
            return redirect()->route('teacher.index')->with('msg','Teacher Updated Successfully!!');
        }else{
            return redirect()->back()->with('msg','Error in updating record');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function destroy(Teacher $teacher,$id)
    {
        if(Teacher::where('id',$id)->forceDelete()){
            return redirect()->back()->with('msg','Teacher deleted Successfully!!');
        }else{
            return redirect()->back()->with('msg','Error in deleting Record!!');
        }
    }
}
