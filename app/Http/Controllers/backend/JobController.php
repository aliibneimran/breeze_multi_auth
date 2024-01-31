<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class JobController extends Controller
{
    public function index()
    {
        return view('backend.jobs.index');
    }
    public function create()
    {
        return view('backend.jobs.create');
    }
}
