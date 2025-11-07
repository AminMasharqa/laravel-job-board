<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;
class JobController extends Controller
{
    function index(Request $request)
    {
        $jobs = Job::all();
        return view('job.index',['jobs'=>$jobs,'name'=>'amin']);
        

    }
}
