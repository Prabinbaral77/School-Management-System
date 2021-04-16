<?php

namespace App\Http\Controllers;

use App\Models\Schedule;
use Illuminate\Http\Request;
use App\Models\Period;
use App\Models\Grade;
use App\Models\Teacher;
use App\Models\Subject;
use App\Http\Requests\ScheduleValidationRequest;
use Illuminate\Support\Facades\DB;

class ScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $periodSchedule = Period::get();
        $grades = Grade::get();
        //$firstPeriodSubject = Schedule::where('period_id',1)->pluck('subject_id');
        //$firstPeriodTeacher = Schedule::where('period_id',1)->pluck('teacher_id');
        return view('schedule.class')->with([
            'periodSchedule' => $periodSchedule,
            'grades' => $grades,
            //'firstPeriodSubject'=>$firstPeriodSubject,
            //'firstPeriodTeacher'=>$firstPeriodTeacher
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $teachers = Teacher::get();
        $grades = Grade::get();
        $subjects = Subject::get();
        $periods = Period::get();
        return view('form.schedule')->with([
            'grades' => $grades,
            'teachers' => $teachers,
            'subjects' => $subjects,
            'periods' => $periods,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ScheduleValidationRequest $request, Schedule $schedule)
    {
        $scheduleData = array(
            'grade_id' => $request->input('grade'),
            'period_id' => $request->input('period'),
            'subject_id' => $request->input('subject'),
            'teacher_id' => $request->input('teacher'),
        );
        if(Schedule::create($scheduleData)){
            return redirect()->route('schedule.index')->with('msg','Schedule added Successfully!!');
        }else{
            return redirect()->back()->with('msg','Error occured');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Schedule  $schedule
     * @return \Illuminate\Http\Response
     */
    public function show(Schedule $schedule)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Schedule  $schedule
     * @return \Illuminate\Http\Response
     */
    public function edit(Schedule $schedule)
    {
        /* $editData = Schedule::where([
            'grade_id'=>$gradeid,
            'period_id'=>$periodid,
        ])->get();
        dd($editData);
        return view('form.edit.schedule'); */
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Schedule  $schedule
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Schedule $schedule)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Schedule  $schedule
     * @return \Illuminate\Http\Response
     */
    public function destroy(Schedule $schedule)
    {
        $deleteData = DB::table('schedules')->delete();
        if($deleteData){
            return redirect()->route('schedule.index')->with('msg','Schedule Restored!!');
        }else{
            return redirect()->back()->with('msg','Error Occured!!');
        }
    }
}
