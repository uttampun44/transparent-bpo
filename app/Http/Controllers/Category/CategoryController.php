<?php

namespace App\Http\Controllers\Category;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        return view('jobcategory.category');
    }

    public function show()
    {
        return view('jobcategory.create');
    }
}
