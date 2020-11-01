<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Redirect;

class Staff_Controller extends Controller
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
            'staff_image'=>'required|mimes:jpeg,jpg,png',
        ]);

        $image=$request->file('staff_image');
        $ext=$image->extension();
        $file=time().'.'.$ext;
        $image->storeAs('/public/staff/img',$file);

        $data=array(
            'f_name'=>$request->input('f_name'),
            'l_name'=>$request->input('l_name'),
            'work_as'=>$request->input('work_as'),
            'address'=>$request->input('address'),
            'contact_no'=>$request->input('contact_no'),
            'gender'=>$request->input('gender'),
            'image'=>$file,
            'dob'=>$request->input('dob'),
            'status'=>1,
        );
        DB::table('staff')->insert($data);
        $request->session()->flash('msg','staff Inserted Sucessfully');
        return redirect('/staff_table');
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
        $data['result']=DB::table('staff')->orderBy('f_name','asc')->get();
        return view('table.staff.table', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['result']=DB::table('staff')->where('id',$id)->get();
        return view('form.edit.staff_form',$data);
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
            'staff_image'=>'mimes:jpg,png,jpeg',
        ]);
        $data=array(
            'f_name'=>$request->input('f_name'),
            'l_name'=>$request->input('l_name'),
            'work_as'=>$request->input('work_as'),
            'address'=>$request->input('address'),
            'contact_no'=>$request->input('contact_no'),
            'gender'=>$request->input('gender'),
            'dob'=>$request->input('dob'),
            'status'=>1,
        );

        if($request->hasFile('staff_image')){
            $image=$request->file('staff_image');
            $ext=$image->extension();
            $file=time().'.'.$ext;
            $image->storeAs('public/staff/img',$file);
            $data['image']=$file;
        }
        DB::table('staff')->where('id',$id)->update($data);
        $request->session()->flash('msg','staff updated Sucessfully');
        return redirect('/staff_table');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('staff')->where('id',$id)->delete();
        return Redirect::back()->with('msg','Staff Deleted Succesfully');
    }
}
