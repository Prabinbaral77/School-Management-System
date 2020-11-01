<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Redirect;

class ScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('schedule');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $class=$request->input('class');
        $teacher=$request->input('teacher_name');
        $subject=$request->input('subject');
        $timing=$request->input('timing');

        $result=DB::table('class_schedule')
                    ->where('class',$class)
                    ->where('timing',$timing)
                    ->get();

        $data=array(
            'class'=>$request->input('class'),
            'subject_teacher'=>$request->input('teacher_name'),
            'subject'=>$request->input('subject'),
            'Timing'=>$request->input('timing'),
        );

        if($result->count()==0){
            DB::table('class_schedule')->insert($data);
            $request->session()->flash('msg','Schedule inserted Sucessfully.');
            return redirect('/class_schedule');
        }else{
            $request->session()->flash('msg','This Schedule is already exist.Please Update respective schedule.');
            return redirect('/class_schedule');
        }
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
          $dataNursary1015['Nursary1015']=DB::table('class_schedule')->where('class','Nursary')->where('Timing','10:15-11:15')->get();
          $dataNursary1115['Nursary1115']=DB::table('class_schedule')->where('class','Nursary')->where('Timing','11:15-12:15')->get();
          $dataNursary1215['Nursary1215']=DB::table('class_schedule')->where('class','Nursary')->where('Timing','12:15-01:15')->get();
          $dataNursary0200['Nursary0200']=DB::table('class_schedule')->where('class','Nursary')->where('Timing','02:00-03:00')->get();
          $dataNursary0300['Nursary0300']=DB::table('class_schedule')->where('class','Nursary')->where('Timing','03:00-04:00')->get();
          $dataNursary0400['Nursary0400']=DB::table('class_schedule')->where('class','Nursary')->where('Timing','04:00-05:00')->get();

          $dataLkg1015['Lkg1015']=DB::table('class_schedule')->where('class','LKG')->where('Timing','10:15-11:15')->get();
          $dataLkg1115['Lkg1115']=DB::table('class_schedule')->where('class','LKG')->where('Timing','11:15-12:15')->get();
          $dataLkg1215['Lkg1215']=DB::table('class_schedule')->where('class','LKG')->where('Timing','12:15-01:15')->get();
          $dataLkg0200['Lkg0200']=DB::table('class_schedule')->where('class','LKG')->where('Timing','02:00-03:00')->get();
          $dataLkg0300['Lkg0300']=DB::table('class_schedule')->where('class','LKG')->where('Timing','03:00-04:00')->get();
          $dataLkg0400['Lkg0400']=DB::table('class_schedule')->where('class','LKG')->where('Timing','04:00-05:00')->get();
          return view('schedule')->with($dataNursary1015)->with($dataNursary1115)->with($dataNursary1215)->with($dataNursary0200)->with($dataNursary0300)->with($dataNursary0400)->with($dataLkg1015)->with($dataLkg1115)->with($dataLkg1215)->with($dataLkg0200)->with($dataLkg0300)->with($dataLkg0400);
         
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['result']=DB::table('class_schedule')->where('id',$id)->get();
        return view('form.edit.schedule',$data);
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
        $data=array(
            'class'=>$request->input('class'),
            'subject_teacher'=>$request->input('teacher_name'),
            'subject'=>$request->input('subject'),
            'Timing'=>$request->input('timing'),
        );
             DB::table('class_schedule')->where('id',$id)->update($data);
             $request->session()->flash('msg','Schedule updated Sucessfully');
            return redirect('/class_schedule');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
