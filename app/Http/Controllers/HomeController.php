<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;


class HomeController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        /* dd($categories); */
        return view('cursos',['categories'=> $categories]);
    }

    public function aboutus(){
        return "estoy  sobre nosotros";
    }
    
    
    public function contact(){
        return "estoy en contacto";
    }
}
