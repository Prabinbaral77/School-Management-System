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
    public function create(Request $request)
    {
        return view('admin.form');
    }

    public function store(Request $request)
    {
        $admindetail = array();
        $admindetail['role_id'] = 1;
        $admindetail['name'] = $request->input('name');
        $admindetail['email'] = $request->input('email');
        $admindetail['contact_no'] = $request->input('contact');
        $admindetail['password'] = $request->input('password');
        
        $store = DB::table('users')->insert($admindetail);
        if($store) {
            return redirect()->route('admin.table');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Adminauth  $adminauth
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        
         $adminList = DB::table('users')->where('role_id', 1)->get();
        return view('admin.table')->with('adminList', $adminList);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Adminauth  $adminauth
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        $details = DB::table('users')->where('id', $id)->get();
        
        return view('admin.edit')->with([
            'details' => $details,
            'id' => $id,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Adminauth  $adminauth
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $admindetail = array();
        $admindetail['role_id'] = 1;
        $admindetail['name'] = $request->input('name');
        $admindetail['email'] = $request->input('email');
        $admindetail['contact_no'] = $request->input('contact');
        $admindetail['password'] = $request->input('password');

        $storeUpdate = DB::table('users')->where('id', $id)->update($admindetail);
        if($storeUpdate) {
            return redirect()->route('admin.table')->with('msg', 'Admin Updated Successfully!!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Adminauth  $adminauth
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(DB::table('users')->where('id',$id)->delete()){
            return redirect()->back()->with('msg','Admin deleted Successfully!!');
        }else{
            return redirect()->back()->with('msg','Error in deleting Book!!');
        }
    }
}
