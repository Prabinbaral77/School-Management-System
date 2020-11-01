<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Redirect;

class SingleStudentController extends Controller
{
    public function index(int $id){
    	$data['result'] = DB::table('student')->where('id',$id)->get();
    	return view('single.student_detail',$data);
    }
}
