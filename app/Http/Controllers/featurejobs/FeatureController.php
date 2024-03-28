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
        $homeJobs = Job::latest()->limit(6)->get();

        return view('home.home')->with('homejobs', $homeJobs);
    }

    public function showJobs(Request $request, $slug)
    {
        $jobs = Job::where('job_post_slug', $slug)->firstOrFail();



        $related_jobs = Job::where('job_category', $jobs->job_category)
                        ->limit(6)
                        ->get();

        return view('jobsdescription.jobsdescription')->with(
            [
            'jobs' => $jobs,
            'related_jobs' => $related_jobs
            ]
        );
    }
}
