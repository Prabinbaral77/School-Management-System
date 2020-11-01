<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Redirect;

class Student_Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index_student()
    {
        $data=DB::table('student')->where('status','1')->get();
        $count1['result1']=count($data);

        $data=DB::table('teacher')->where('status','1')->get();
        $count2['result2']=count($data);

        $data=DB::table('student')->where('gender','male')->get();
        $count3['result3']=count($data);

        $data=DB::table('student')->where('gender','female')->get();
        $count4['result4']=count($data);

        $data=DB::table('staff')->where('status','1')->get();
        $count5['result5']=count($data);

        return view('/index')->with($count1)->with($count2)->with($count3)->with($count4)->with($count5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $request->validate([
            'stdt_image'=>'required|mimes:jpeg,jpg,png',
        ]);

        $image=$request->file('stdt_image');
        $ext=$image->extension();
        $file=time().'.'.$ext;
        $image->storeAs('/public/student/img',$file);

        $data=array(
        'f_name'=>$request->input('f_name'),
        'l_name'=>$request->input('l_name'),
        'class'=>$request->input('class'),
        'roll_no'=>$request->input('roll_no'),
        'address'=>$request->input('address'),
        'guardian_name'=>$request->input('guardian_name'),
        'contact_no'=>$request->input('contact'),
        'gender'=>$request->input('gender'),
        'image'=>$file,
        'dob'=>$request->input('dob'),
        'status'=>1,

        );
        DB::table('student')->insert($data);
        $request->session()->flash('msg','Data Inserted Sucessfully');
        return redirect('/tables');
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
        $data['result']=DB::table('student')->orderBy('f_name','asc')->get();
        return view('table.table',$data);
    }

    public function show12()
    {
        $data['result']=DB::table('student')->where('class', 12)->orderBy('roll_no','asc')->get();
        return view('table.student.12_table',$data);
    }
    public function show11()
    {
        $data['result']=DB::table('student')->where('class', 11)->orderBy('roll_no','asc')->get();
        return view('table.student.11_table',$data);
    }
    public function show10()
    {
        $data['result']=DB::table('student')->where('class', 10)->orderBy('roll_no','asc')->get();
        return view('table.student.10_table',$data);
    }
    public function show9()
    {
        $data['result']=DB::table('student')->where('class', 9)->orderBy('roll_no','asc')->get();
        return view('table.student.9_table',$data);
    }
    public function show8()
    {
        $data['result']=DB::table('student')->where('class', 8)->orderBy('roll_no','asc')->get();
        return view('table.student.8_table',$data);
    }
    public function show7()
    {
        $data['result']=DB::table('student')->where('class', 7)->orderBy('roll_no','asc')->get();
        return view('table.student.7_table',$data);
    }
    public function show6()
    {
        $data['result']=DB::table('student')->where('class', 6)->orderBy('roll_no','asc')->get();
        return view('table.student.6_table',$data);
    }
    public function show5()
    {
        $data['result']=DB::table('student')->where('class', 5)->orderBy('roll_no','asc')->get();
        return view('table.student.5_table',$data);
    }
    public function show4()
    {
        $data['result']=DB::table('student')->where('class', 4)->orderBy('roll_no','asc')->get();
        return view('table.student.4_table',$data);
    }
    public function show3()
    {
        $data['result']=DB::table('student')->where('class', 3)->orderBy('roll_no','asc')->get();
        return view('table.student.3_table',$data);
    }
    public function show2()
    {
        $data['result']=DB::table('student')->where('class', 2)->orderBy('roll_no','asc')->get();
        return view('table.student.2_table',$data);
    }
    public function show1()
    {
        $data['result']=DB::table('student')->where('class', 1)->orderBy('roll_no','asc')->get();
        return view('table.student.1_table',$data);
    }
    public function show_ukg()
    {
        $data['result']=DB::table('student')->where('class', 'ukg')->orderBy('roll_no','asc')->get();
        return view('table.student.ukg_table',$data);
    }
    public function show_lkg()
    {
        $data['result']=DB::table('student')->where('class', 'lkg')->orderBy('roll_no','asc')->get();
        return view('table.student.lkg_table',$data);
    }
    public function show_nursary()
    {
        $data['result']=DB::table('student')->where('class', 'nursary')->orderBy('roll_no','asc')->get();
        return view('table.student.nur_table',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['result']=DB::table('student')->where('id',$id)->get();
        return view('form.edit.stdt_form',$data);
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
            'student_image'=>'mimes:jpeg,jpg,png',
        ]);

        $data=array(
        'f_name'=>$request->input('f_name'),
        'l_name'=>$request->input('l_name'),
        'class'=>$request->input('class'),
        'roll_no'=>$request->input('roll_no'),
        'address'=>$request->input('address'),
        'guardian_name'=>$request->input('guardian_name'),
        'contact_no'=>$request->input('contact'),
        'gender'=>$request->input('gender'),
        'dob'=>$request->input('dob'),
        'status'=>1,

        );

        if($request->hasfile('student_image')){
            $image=$request->file('student_image');
            $ext=$image->extension();
            $file=time().'.'.$ext;
            $image->storeAs('/public/student/img',$file);
            $data['image']=$file;
        }
        DB::table('student')->where('id',$id)->update($data);
        $request->session()->flash('msg','Data Updated Sucessfully');
        return redirect('/tables');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id)
    {
        DB::table('student')->where('id',$id)->delete();
        return Redirect::back()->with('msg','Data Deleted Sucessfully');
    }
}
