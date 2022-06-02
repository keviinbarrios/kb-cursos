<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CoursesCategoryController extends Controller
{
    public function categories(){
        $categories = Category::all();

        return view('courses-category',['categories'=> $categories]);
    }
}
