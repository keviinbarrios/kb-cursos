<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;


class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function admin(){

        $courses = Course::all();
        return view('admin.courses.index',['courses'=> $courses]);
    }
}
