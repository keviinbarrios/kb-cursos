<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Category;

class CourseController extends Controller
{
    

    public function create()
    {
        $categories = Category::all();
        return view('admin.courses.create',['categories'=>$categories]);
        
    }
    public function store(Request $request)
    {
        /* dd($request->all()); */
        if ($request->hasfile('featured')){
            $file = $request->file('featured');

            $img_name =time().'_course.'.$file->getClientOriginalExtension();
            $detinationPath = 'images/uploads/courses';
            $uploadSuccess= $file->move($detinationPath,$img_name);
        }
          Course::create([
            "category_id"=>$request->category_id,
            "title"=> $request ->title,
            "featured"=> $img_name,
            "date_of_course"=> $request ->date_of_course,
            "place_of_course"=> $request ->place_of_course,
            "description"=> $request ->description,
          ]);

          return redirect()->route('admin.courses');
    }
}
