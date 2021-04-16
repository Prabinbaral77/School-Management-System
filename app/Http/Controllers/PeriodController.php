<?php

namespace App\Http\Controllers;

use App\Models\Period;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PeriodController extends Controller
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
        return view('form.period');
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
            'period_name'=>'required',
            'time_range'=>'required'
         ]);

         $periodData = array(
             'name'=> $request->input('period_name'),
             'time_range'=> $request->input('time_range'),
         );

         if(Period::create($periodData)){
             return redirect()->route('period.show')->with('msg','Period Added Successfully!!');
         }else{
             return back()->with('msg', 'Error Occured!');
         }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Period  $period
     * @return \Illuminate\Http\Response
     */
    public function show(Period $period)
    {
        $allPeriods = Period::all();
        return view('table.period')->with('periods', $allPeriods);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Period  $period
     * @return \Illuminate\Http\Response
     */
    public function edit(Period $period,$id)
    {
        $associativePeriod = Period::where('id',$id)->get();
        return view('form.edit.period')->with('associativePeriod', $associativePeriod);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Period  $period
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Period $period, $id)
    {
        $periodName = DB::table('periods')->where('id',$id)->pluck('name');
        $time_range = array(
            'name'=> $periodName[0],
            'time_range' =>$request->input('time_range'),
        );
        if(Period::where('id',$id)->update($time_range)){
            return redirect()->route('period.show')->with('msg','Period updated Successfully!!');
        }else{
            return back()->with('msg', 'Error Occured!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Period  $period
     * @return \Illuminate\Http\Response
     */
    public function destroy(Period $period)
    {
        //
    }
}
