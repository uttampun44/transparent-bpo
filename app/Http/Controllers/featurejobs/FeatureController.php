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

        // dd($homeJobs->toArray());

        return view('home.home')->with('homejobs', $homeJobs);
    }
}
