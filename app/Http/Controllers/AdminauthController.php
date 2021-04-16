<?php

namespace App\Http\Controllers;

use App\Models\Adminauth;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminauthController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('login');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function adminAuth(Request $request)
    {
        $userType = $request->input('role');

        if($userType == 1){
            $email = $request->input('email');
            $password = $request->input('password');
            
            
            $result=DB::table('users')
                    ->where('email',$email)
                    ->where('password',$password)
                    ->get();
            
            if(isset($result[0])){
                $request->session()->put('USER_NAME', $result[0]->name);
                $request->session()->put('ROLE', 'ADMIN');
                $request->session()->put('USER_EMAIL', $result[0]->email);
                return redirect()->route('home')->with('msg','Login Successfully');
            }else{
                return redirect()->back()->with('msg','Incorrect Username or Password!!!');
            }
        }else if($userType ==2){
            $email = $request->input('email');
            $password = $request->input('password');
            
            
            $result=DB::table('teachers')
                    ->where('email',$email)
                    ->where('password',$password)
                    ->get();
            
            if(isset($result[0])){
                $request->session()->put('USER_NAME', $result[0]->fullname);
                $request->session()->put('ROLE', 'TEACHER');
                $request->session()->put('USER_EMAIL', $result[0]->email);
                return redirect()->route('home')->with('msg','Login Successfully');
            }else{
                return redirect()->back()->with('msg','Incorrect Username or Password!!!');
            }
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
     * @param  \App\Models\Adminauth  $adminauth
     * @return \Illuminate\Http\Response
     */
    public function show(Adminauth $adminauth)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Adminauth  $adminauth
     * @return \Illuminate\Http\Response
     */
    public function edit(Adminauth $adminauth)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Adminauth  $adminauth
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Adminauth $adminauth)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Adminauth  $adminauth
     * @return \Illuminate\Http\Response
     */
    public function destroy(Adminauth $adminauth)
    {
        //
    }
}
