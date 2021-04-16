<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use App\Models\Grade;
use App\Models\Teacher;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $grades = Grade::all();
        $teachers = Teacher::all();
        return view('form.subject')->with([
            'grades'=> $grades,
            'teachers'=>$teachers,
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
       $this->validate($request,[
            'subject' => 'required',
            'grade' => 'required',
            'teacher' => 'required'
         ]);
        $Subject = array( 
            'name' => $request->input('subject'),
            'grade_id' => $request->input('grade'),
            'teacher_id' => $request->input('teacher'),
        );
        //dd($Subject);
        if(Subject::create($Subject)){
            return redirect()->route('subject.show')->with('msg', 'Subject Registered Succcessfully!!');
        }else{
            return redirect()->back()->with('msg','Error Occured!!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function show(Subject $subject)
    {
        $subjectAll = Subject::all();
        return view('table.subject')->with([
            'subjectAll'=>$subjectAll,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function edit(Subject $subject,$id)
    {
        $subjectAll = Subject::all();
        $class = Grade::all();
        $teacher = Teacher::all();

        $gradeId = Subject::where('id',$id)->pluck('grade_id');
        $teacherId = Subject::where('id',$id)->pluck('teacher_id');

        $editSubject = Subject::where('id',$id)->pluck('name');
        $editClass = Grade::where('id',$gradeId[0])->pluck('name');
        $editTeacher = Teacher::where('id',$teacherId[0])->pluck('fullname');

        return view('form.edit.subject')->with([
            'subjectAll' => $subjectAll,
            'class' => $class,
            'teacher' => $teacher,

            'editSubject' =>$editSubject,
            'editClass'=>$editClass,
            'editTeacher'=>$editTeacher,
            'id'=>$id,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $updateSubject = array(
            'name' => $request->input('subject'),
            'grade_id'=> (int)$request->input('grade'),
            'teacher_id' => (int)$request->input('teacher'),
        );
        $updateSubjects = Subject::where('id',$id)->update($updateSubject);
        if($updateSubjects){
            return redirect()->route('subject.show')->with('msg', 'Subject Updated Succcessfully!!');
        }else{
            return redirect()->back()->with('msg', 'Error Occured');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function destroy(Subject $subject,$id)
    {
        $delete_Registered_Subject = Subject::where('id',$id)->forceDelete();
        if($delete_Registered_Subject){
            return redirect()->back()->with('msg','Subject Delected Successfully');
        }else{
            return redirect()->back()->with('msg','Error in deleting the Subject');
        }
    }
}
