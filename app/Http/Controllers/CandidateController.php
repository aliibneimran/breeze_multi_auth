<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CandidateController extends Controller
{
    public function index(){
        return view('candidate.index');
    }
    public function login(Request $request){
        // dd($request->all());
        if(Auth::guard('candidate')->attempt(['email'=> $request->email,'password'=> $request->password])){
            return redirect()->route('candidate_dashboard');
        }else{
            return redirect()->back()->with('msg','Please enter currect email and password');
        }
    }
    public function dashboard(){
        return view('candidate.dashboard');
    }
}
