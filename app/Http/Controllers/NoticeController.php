<?php

namespace App\Http\Controllers;

use App\Models\Notice;
use Illuminate\Http\Request;

class NoticeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $notices = Notice::orderBy('issue_date', 'desc')->get();
        return view('notices.table')->with('notices', $notices);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('notices.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $title = $request->input('title');
       $body = $request->input('body');
       $issued_by = $request->input('issued_by');
       $issue_date = $request->input('issue_date');

       $notice = new Notice();
       $notice->title = $title;
       $notice->body = $body;
       $notice->issued_by = $issued_by;
       $notice->issue_date = $issue_date;
       $notice->save();

       return redirect()->route('notice.table')->with('msg', 'Notice issued Sucessfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Notice  $notice
     * @return \Illuminate\Http\Response
     */
    public function show(Notice $notice)
    {
        //code

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Notice  $notice
     * @return \Illuminate\Http\Response
     */
    public function edit(Notice $notice)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Notice  $notice
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Notice $notice)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Notice  $notice
     * @return \Illuminate\Http\Response
     */
    public function destroy(Notice $notice, $id)
    {
        if(Notice::where('id',$id)->forceDelete()){
            return redirect()->back()->with('msg','Notice deleted Successfully!!');
        }else{
            return redirect()->back()->with('msg','Error in deleting Notice!!');
        }
    }
}
