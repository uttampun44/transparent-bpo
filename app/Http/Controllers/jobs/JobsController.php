<?php

namespace App\Http\Controllers\jobs;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\jobs\Job;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;


class JobsController extends Controller
{
    public function index():View
    {
        $jobs = Job::all();
        return view('jobs.jobs', ['jobs' => $jobs]);
    }

    public function show():View
    {
        return view('jobs.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $validation = $request->validate([
            'companyname' => 'required',
            'companyimage' => 'required|image|mimes:png,jpg,jpeg,webp|max:1024',
            'jobpost' => 'required',
            'jobtype' => 'required',
            'careerlevel' => 'required',
            'deadline' => 'required',
            'jobdescription' => 'required'
        ],
        [
            'companyimage.max' => 'Image size should be less than 1 Mb',
        ]);


          if($request->hasFile('companyimage')){

            $filename = time() . '.' . $request->file('companyimage')->getClientOriginalExtension();
            $request->file('companyimage')->storeAs('public/uploads', $filename);

          }

        $jobs = new Job;

        $jobs->company_name = $request->input('companyname');
        $jobs->company_image = $filename;
        $jobs->job_post = $request->input('jobpost');
        $jobs->job_type = $request->input('jobtype');
        $jobs->career_level = $request->input('careerlevel');
        $jobs->job_deadline = $request->input('deadline');
        $jobs->job_description = $request->input('jobdescription');

        $jobs->save();

        return redirect()->route('create.jobs')->with('success', 'Job Created Successfully');

    }

    public function edit(Request $request, $id)
    {
        $jobs = Job::find($id);

        return view('jobs.edit')->with('jobs', $jobs);
    }

    public function update(Request $request, $id)
    {
        $validation = $request->validate([
            'companyname' => 'required',
            'companyimage' => 'required|image|mimes:png,jpg,jpeg,webp|max:1024',
            'jobpost' => 'required',
            'jobtype' => 'required',
            'careerlevel' => 'required',
            'deadline' => 'required',
            'jobdescription' => 'required'
        ],
        [
            'companyimage.max' => 'Image size should be less than 1 Mb',
        ]);


        $jobs = new Job;

        $jobsimage = $jobs->company_image;

        if($jobsimage){
            $destinationFile = 'public/uploads' . $jobs->company_image;

            if($destinationFile){
                Storage::delete($destinationFile);
            }
        }

    }

    public function destroy(Request $request, $id)
    {
        $jobs = Job::find($id);

        if($jobs){

            $jobs->delete();

            return redirect()->route('show');
        }
    }
}
