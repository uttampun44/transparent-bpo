<?php

namespace App\Http\Controllers\jobs;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;

class JobsController extends Controller
{
    public function show():View
    {
        return view('jobs.jobs');
    }
}
