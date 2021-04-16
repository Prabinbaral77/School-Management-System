<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Grade;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        $totalStudents = DB::table('students')->get();
        $totalMaleStudents = DB::table('students')->where('gender','male')->get();
        $totalFemaleStudents = DB::table('students')->where('gender','female')->get();
        $totelTeacher = DB::table('teachers')->get();
        $totalStaff = DB::table('staff')->get();
        return view('index')->with([
            'totalStudent'=>$totalStudents,
            'totalMaleStudents'=>$totalMaleStudents,
            'totalFemaleStudents'=>$totalFemaleStudents,
            'totelTeacher'=>$totelTeacher,
            'totalStaff'=>$totalStaff,
        ]);
    }
}
