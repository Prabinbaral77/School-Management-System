<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class frontController extends Controller
{
    public function index()
    {
        $details = DB::table('schooldetails')->get();
        $name = $details[0]->name;
        $name = trim($name, '""');
        
        return view('frontend.index')->with('name', $name);
    }

    public function about()
    {
        $details = DB::table('schooldetails')->get();
        $name = $details[0]->name;
        $name = trim($name, '""');
        return view('frontend.about-us')->with('name', $name);
    }

    public function mission()
    {
        $details = DB::table('schooldetails')->get();
        $name = $details[0]->name;
        $name = trim($name, '""');
        return view('frontend.mission-&-vision')->with('name', $name);
    }

    public function principleMessage()
    {
        $details = DB::table('schooldetails')->get();
        $name = $details[0]->name;
        $name = trim($name, '""');
        return view('frontend.principle-message')->with('name', $name);
    }

    public function admissionProcedure()
    {
        $details = DB::table('schooldetails')->get();
        $name = $details[0]->name;
        $name = trim($name, '""');
        return view('frontend.admission-procedure')->with('name', $name);
    }

    public function facilities()
    {
        $details = DB::table('schooldetails')->get();
        $name = $details[0]->name;
        $name = trim($name, '""');
        return view('frontend.facilities')->with('name', $name);
    }

    public function teams()
    {
        $details = DB::table('schooldetails')->get();
        $name = $details[0]->name;
        $name = trim($name, '""');
        return view('frontend.our-team')->with('name', $name);
    }

    public function photos()
    {
        $details = DB::table('schooldetails')->get();
        $name = $details[0]->name;
        $name = trim($name, '""');
        return view('frontend.photos')->with('name', $name);
    }

    public function contactUs()
    {
        $details = DB::table('schooldetails')->get();
        $name = $details[0]->name;
        $name = trim($name, '""');
        return view('frontend.contact-us')->with('name', $name);
    }

    public function newsEvent()
    {
        $details = DB::table('schooldetails')->get();
        $name = $details[0]->name;
        $name = trim($name, '""');

        $notice = DB::table('notices')->orderBy('issue_date', 'desc')->limit(3)->get();
        
        return view('frontend.news-&-events')->with([ 'name' =>  $name, 'notices' => $notice ]);
    }
}
