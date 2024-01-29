<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index(){
        return view('admin.index');
    }
    public function login(Request $request){
        // dd($request->all());
        if(Auth::guard('admin')->attempt(['email'=> $request->email,'password'=> $request->password])){
            return redirect()->route('admin_dashboard');
        }else{
            return redirect()->back()->with('msg','Please enter currect email and password');
        }
    }
    public function dashboard(){
        return view('admin.dashboard');
    }
}
