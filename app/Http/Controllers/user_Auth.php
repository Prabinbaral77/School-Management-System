<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\facades\DB;

class user_Auth extends Controller
{
    function login_submit(Request $request){
    	$email=$request->input('email');
    	$password=$request->input('password');

    	$result=DB::table('users')
    	            ->where('email',$email)
    	            ->where('password',$password)
    	            ->get();
    	if(isset($result[0]->id)){
    		if($result[0]->status==1){
    			$request->session()->put('USER_ID',$result[0]->id);
    			$request->session()->put('USER_NAME',$result[0]->name);
    			$request->session()->flash('msg','welcome '.session('USER_NAME'));
    			return redirect('/');
    		}else{
    			$request->session()->flash('msg','Account Deactivated');
    		    return redirect('/login');
    		}

    	}else{
    		$request->session()->flash('msg','Please Enter Valid Login Details');
    		return redirect('/login');
    	}
    }
}
