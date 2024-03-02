<?php

namespace App\Http\Controllers\featurejobs;

use App\Http\Controllers\Controller;
use App\Models\jobs\Job;
use Illuminate\Http\Request;
use Illuminate\View\View;

class FeatureController extends Controller
{
    public function index():View
    {
        $homeJobs = Job::all();


        return view('home.home')->with('homejobs', $homeJobs);
    }

    public function showJobs(Request $request, $companyname)
    {
        $jobs = Job::where('company_name', $companyname)->firstOrFail();

    //    dd($jobs->toArray());

        return view('jobsdescription.jobsdescription')->with(

                'jobs', $jobs

        );
    }
}
