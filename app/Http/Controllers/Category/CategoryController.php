<?php

namespace App\Http\Controllers\Category;

use App\Http\Controllers\Controller;
use App\Models\Category\Category;
use Illuminate\Http\Request;


class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();

        return view('jobcategory.category')->with('category', $categories);
    }

    public function show()
    {
        return view('jobcategory.create');
    }

    public function store(Request $request)
    {
           $jobs_models = Category::create([
              'job_categories' => $request->input('add_category')
           ]);

           $jobs_models->save();

           return back()->with('Success', 'Data Inserted Successfully' );
    }

    public function edit(Request $request, $id)
    {
        $jobCategory = Category::find($id);

        return view('jobcategory.edit')->with('job_category', $jobCategory);
    }

    public function update(Request $request, $id)
    {
        $job = Category::find($id);

        $job->job_categories = $request->input('add_category');

        $job->save();

        return back()->with('Success', 'Data Update Successfully');

    }

    public function destroy(Request $request, $id)
    {
        $cat = Category::find($id);

         if($cat){
            $cat->delete();

            return redirect()->route('category');
         }
    }
}
