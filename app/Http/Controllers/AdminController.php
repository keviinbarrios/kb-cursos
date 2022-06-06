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
    public function admin(){

        
        $courses = Course::all();
        return view('admin.courses.index',['courses'=> $courses]);
    }
    public function category(){

        $categories = Category::all();
        return view('admin.categories.index-category',['categories'=>$categories]);
    }

    public function createCategory(){
        return view('admin.categories.create-category');
    }

 

    public function storeCategory(Request $request){
        $category = new Category();

        $category->name = $request->name;

        $category->save();

        return redirect()->route('admin.categories');
    }

    public function deleteCategory(Request $request,$id){
        
        $category = Category::find($id);
        
       
       $category->delete();
       return redirect()->route('admin.categories');
    }
    
    public function editCategory($id){
        $category = Category::find($id);
        return view('admin.categories.edit-category',compact('category'));
    }

    public function updateCategory(Request $request,$id){
        $category = Category::find($id);

        $category->name = $request->name;

        $category->save();

        return redirect()->route('admin.categories');
    }

    public function create(){
        
        return view('admin.courses.create');
    
    }

    public function store(Request $request){
        $course = new Course();
        $category = Category::pluck('name','id');


        $course->title = $request->title;
        $course->featured = $request->featured;
        $course->date_of_course = $request->date_of_course;
        $course->place_of_course = $request->place_of_course;
        $course->description = $request->description;
        /* $course->is_banner = $request->is_banner;
        $course->status = $request->status; */

        $course ->save();
       
        
        
      /*   return request(); */





    }
}
