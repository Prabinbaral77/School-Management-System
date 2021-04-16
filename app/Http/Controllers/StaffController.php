<?php

namespace App\Http\Controllers;

use App\Models\Staff;
use Illuminate\Http\Request;
use App\Http\Requests\StaffValidationRequest;
use Illuminate\Support\Facades\DB;


class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allStaff = DB::table('staff')->get();
        return view('table.staff')->with('allStaff', $allStaff);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('form.staff');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StaffValidationRequest $request)
    {
        $staffdetail = array(
            'fullname' => $request->input('full_name'),
            'work_as' => $request->input('work_as'),
            'address' => $request->input('address'),
            'phone_number' => (int)$request->input('contact_no'),
            'gender' => $request->input('gender'),
        );
        if($request->has('staff_image')){
            $extension = ".".$request->staff_image->getClientOriginalExtension();
            $name = basename($request->staff_image->getClientOriginalName(),$extension).time();
            $name = $name.$extension;
            $path = $request->staff_image->storeAs('public/images/staff',$name);
            $staffdetail['thumbnail']= $name;
        };
        //dd($staffdetail);
        if(Staff::create($staffdetail)){
            return redirect()->route('staff.index')->with('msg','Staff Added Successfully!!');
        }else{
            return redirect()->back()->with('msg','Error Occured!!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function show(Staff $staff)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function edit(Staff $staff,$id)
    {
        $staffDetail = DB::table('staff')->where('id',$id)->get();
        return view('form.edit.staff')->with('staffDetail', $staffDetail);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Staff $staff,$id)
    {
        $updateStaff = array(
            'fullname' => $request->input('full_name'),
            'work_as' => $request->input('work_as'),
            'address' => $request->input('address'),
            'phone_number' => (int)$request->input('contact_no'),
        );
        
        //for gender update
        if($request->input('gender')){
            $genderStaff = $request->input('gender');
        }else{
            $gender = DB::table('staff')->where('id', $id)->pluck('gender');
            $genderStaff = $gender[0];
        }
        $updateStaff['gender'] = $genderStaff;


        //for thumbnail update
        if($request->has('staff_image')){
            $extension = ".".$request->staff_image->getClientOriginalExtension();
            $name = basename($request->staff_image->getClientOriginalName(),$extension).time();
            $name = $name.$extension;
            $path = $request->staff_image->storeAs('public/images/staff',$name);
            $thumbnailStaff = $name;
        }else{
            $thumbnail = DB::table('staff')->where('id', $id)->pluck('thumbnail');
            $thumbnailStaff = $thumbnail[0];
        }
        $updateStaff['thumbnail'] = $thumbnailStaff;

        //dd($updateStaff);

        //update all students data
        if(Staff::where('id', $id)->update($updateStaff)){
            return redirect()->route('staff.index')->with('msg','Staff Updated Successfully!!');
        }else{
            return redirect()->back()->with('msg','Error in updating record');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function destroy(Staff $staff,$id)
    {
        if(Staff::where('id',$id)->forceDelete()){
            return redirect()->back()->with('msg','Staff deleted Successfully!!');
        }else{
            return redirect()->back()->with('msg','Error in deleting Record!!');
        }
    }
}
