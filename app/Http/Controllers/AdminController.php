<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Category;


class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function admin()
    {
        $courses = Course::all();
        return view('admin.courses.index', ['courses' => $courses]);
    }
   
    public function category(){

        $categories = Category::all();
        return view('admin.categories.index-category',['categories'=>$categories]);
    }

    
  
   
}
