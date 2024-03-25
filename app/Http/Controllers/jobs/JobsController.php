<?php

namespace App\Http\Controllers\jobs;

use App\Http\Controllers\Controller;
use App\Models\Category\Category;
use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\jobs\Job;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;


class JobsController extends Controller
{
    public function index():View
    {
        $jobs = Job::all();

        return view('jobs.jobs')->with('jobs', $jobs);
    }

    public function show():View
    {
        $category = Category::all();

        return view('jobs.create')->with('category', $category);
    }

    public function store(Request $request): RedirectResponse
    {
        $validation = $request->validate([
            'jobcategory' => 'required',
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

        $job_id = $validation['jobcategory'];

        $cat = Category::find($job_id);

        $jobs->company_name = $request->input('companyname');
        $jobs->job_category = $cat->job_categories;
        $jobs->company_image = $filename;
        $jobs->job_post = $request->input('jobpost');
        $jobs->job_responsibilities = $request->input('responsibilities');
        $jobs->requirement = $request->input('requirement');
        $jobs->salary = $request->input('salary');
        $jobs->location = $request->input('location');
        $jobs->job_post_slug = Str::slug($request->input('jobpost'));
        $jobs->job_type = $request->input('jobtype');
        $jobs->career_level = $request->input('careerlevel');
        $jobs->job_deadline = $request->input('deadline');
        $jobs->job_description = $request->input('jobdescription');
        $jobs->job_category_id =  $cat->id;

        $jobs->save();

        return redirect()->route('create.jobs')->with('success', 'Job Created Successfully');

    }

    public function edit(Request $request, $id):View
    {
        $jobs = Job::find($id);
        $cat = Category::all();

        return view('jobs.edit')->with(
            [
             'jobs' => $jobs,
             'category' => $cat
            ]
        );
    }

    public function update(Request $request, $id):RedirectResponse
    {
        $validation = $request->validate([
            'companyname' => 'required',
            'jobcategory' => 'required',
            'jobpost' => 'required',
            'jobtype' => 'required',
            'careerlevel' => 'required',
            'deadline' => 'required',
            'jobdescription' => 'required'
        ],
        [
            'companyimage.max' => 'Image size should be less than 1 Mb',
        ]);


        $jobs = Job::findorFail($id);

        $filename = $jobs->company_image;

        if($request->hasFile('companyimage')){

            $destinationFile = 'public/uploads' . $jobs->company_image;

            if($destinationFile){
                Storage::delete($destinationFile);
            }

            $filename = time() . '.' . $request->file('companyimage')->getClientOriginalExtension();
            $request->file('companyimage')->storeAs('public/uploads', $filename);

        }

        $job_id = $validation['jobcategory'];

        $cat = Category::find($job_id);

        $jobs->company_name = $request->input('companyname');
        $jobs->job_category = $cat->job_categories;
        $jobs->company_image = $filename;
        $jobs->job_post = $request->input('jobpost');
        $jobs->job_responsibilities = $request->input('responsibilities');
        $jobs->requirement = $request->input('requirement');
        $jobs->salary = $request->input('salary');
        $jobs->location = $request->input('location');
        $jobs->job_post_slug = Str::slug($request->input('jobpost'));
        $jobs->job_type = $request->input('jobtype');
        $jobs->career_level = $request->input('careerlevel');
        $jobs->job_deadline = $request->input('deadline');
        $jobs->job_description = $request->input('jobdescription');
        $jobs->job_category_id =  $cat->id;

        $jobs->save();

        return redirect()->route('create.jobs')->with('success', 'Update Successfully');

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
