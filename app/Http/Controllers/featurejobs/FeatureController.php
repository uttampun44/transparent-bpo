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

    public function showJobs(Request $request, $slug)
    {
        $jobs = Job::where('job_post_slug', $slug)->firstOrFail();

        return view('jobsdescription.jobsdescription')->with(
                'jobs', $jobs
        );
    }
}
