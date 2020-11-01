<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Redirect;

class TeacherController extends Controller
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
    public function create(Request $request)
    {
        $request->validate([
            'teacher_image'=>'required|mimes:jpeg,jpg,png',
        ]);

        $image=$request->file('teacher_image');
        $ext=$image->extension();
        $file=time().'.'.$ext;
        $image->storeAs('/public/teacher/img',$file);

        $data=array(
            'f_name'=>$request->input('f_name'),
            'l_name'=>$request->input('l_name'),
            'address'=>$request->input('address'),
            'contact_no'=>$request->input('contact_no'),
            'qualification'=>$request->input('ac_qualification'),
            'sub_specialist'=>$request->input('sub_specilist'),
            'gender'=>$request->input('gender'),
            'image'=>$file,
            'dob'=>$request->input('dob'),
            'status'=>1,      
        );
        DB::table('teacher')->insert($data);
        $request->session()->flash('msg','Data Inserted Sucessfully');
        return redirect('teacher_table');
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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $data['result']=DB::table('teacher')->orderBy('f_name','asc')->get();
        return view('table.teacher.table',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['result']=DB::table('teacher')->where('id',$id)->get();
        return view('form.edit.tech_form',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'teacher_image'=>'mimes:jpg,jpeg,png',
        ]);

        $data=array(
            'f_name'=>$request->input('f_name'),
            'l_name'=>$request->input('l_name'),
            'address'=>$request->input('address'),
            'contact_no'=>$request->input('contact_no'),
            'qualification'=>$request->input('ac_qualification'),
            'sub_specialist'=>$request->input('sub_specilist'),
            'gender'=>$request->input('gender'),
            'dob'=>$request->input('dob'),
            'status'=>1,      
        );
        if($request->hasFile('teacher_image')){
            $image=$request->file('teacher_image');
            $ext=$image->extension();
            $file=time().'.'.$ext;
            $image->storeAs('/public/teacher/img',$file);
            $data['image']=$file;
        }
        DB::table('teacher')->where('id',$id)->update($data);
        $request->session()->flash('msg','Data Inserted Sucessfully');
        return redirect('teacher_table');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('teacher')->where('id',$id)->delete();
        return Redirect::back()->with('msg','Data Deleted Sucessfully');
    }
}
