<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jobposts;

class Viewjob extends Controller
{
    public function View(){
        $jobs = Jobposts::all();
        return view('home', compact('jobs'));
    }

}
