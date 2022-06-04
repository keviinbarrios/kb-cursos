<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Course;


class HomeController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $courses = Course::all();
        
        return view('cursos',['categories'=> $categories,
                    'courses'=>$courses
        ]);
    }

    public function aboutus(){
        return "estoy  sobre nosotros";
    }
    
    
    public function contact(){
        return "estoy en contacto";
    }

   
}
