<?php

namespace App\Http\Controllers;

use App\Models\Schooldetail;
use Illuminate\Http\Request;

class SchooldetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $details = Schooldetail::all();
        return view('details.school')->with('details',$details);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * @param  \App\Models\Schooldetail  $schooldetail
     * @return \Illuminate\Http\Response
     */
    public function show(Schooldetail $schooldetail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Schooldetail  $schooldetail
     * @return \Illuminate\Http\Response
     */
    public function edit(Schooldetail $schooldetail)
    {
        $details = Schooldetail::where('id',1)->get();

        return view('form.edit.school')->with('details',$details);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Schooldetail  $schooldetail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       $updateSchoolDetails = array(
           'name'=> $request->input('s_name'),
           'email'=> $request->input('email'),
           'website'=>$request->input('website'),
           'phone'=>$request->input('phone_no'),
           'location'=>$request->input('address'),
           'principle'=>$request->input('principle'),
       );
       if($request->has('thumbnail')){
           $extension = ".".$request->thumbnail->getClientOriginalExtension();
           $name = basename($request->thumbnail->getClientOriginalName(),$extension).time();
           $name = $name.$extension;
           $path = $request->thumbnail->storeAs('public/images/school',$name);
           $thumbnailSchool = $name;
       }else{
           $thumbnail = Schooldetail::where('id',1)->pluck('thumbnail');
           $thumbnailSchool = $thumbnail[0];
       }
       $updateSchoolDetails['thumbnail'] = $thumbnailSchool;
       
       if(Schooldetail::where('id',1)->update($updateSchoolDetails)){
           return redirect()->route('schooldetail.index',1)->with('msg','School Detailed Updated Sucessfully!!');
       }else{
        return redirect()->route('schooldetail.index',1)->with('msg','Error Occured!!');
       }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Schooldetail  $schooldetail
     * @return \Illuminate\Http\Response
     */
    public function destroy(Schooldetail $schooldetail)
    {
        //
    }
}
