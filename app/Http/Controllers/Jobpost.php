<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jobposts;


class Jobpost extends Controller
{
    public function employer(){
        return view('employer-dashboard');
    }

    public function Job(Request $request){
          $request->validate([
            'jobTitle' => 'required',
            'organization' => 'required',
            'qualification' => 'required',
            'jobType' => 'required',
            'jobDescription' => 'required',
            'requiredSkills' => 'required'
          ]);
          $jobPost = new Jobposts([
            'job_title' => $request->input('jobTitle'),
            'organization' => $request->input('organization'),
            'qualification' => $request->input('qualification'),
            'job_type' => $request->input('jobType'),
            'job_description' => $request->input('jobDescription'),
            'required_skill' => $request->input('requiredSkills')
          ]);

          $register_message = $jobPost->save();

          if($register_message){
            return back()->with('Success', 'You have successfully registered');
          }else{
            return back()->with('Fail', 'Fail to register');
          }
    }
}
