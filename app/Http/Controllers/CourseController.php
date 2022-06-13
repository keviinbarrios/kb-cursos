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

    public function edit($course){
        $categories = Category::all();
        $course = Course::find($course);

        return view('admin.courses.edit',[
            'course'=>$course,
            'categories'=>$categories
        ]);
    }
    public function update(Request $request,$course){
        $category = Category::all();
        $course = Course::find($course);
        
        if ($request->hasfile('featured')){
            $file = $request->file('featured');

            $img_name =time().'_course.'.$file->getClientOriginalExtension();
            $detinationPath = 'images/uploads/courses';
            $uploadSuccess= $file->move($detinationPath,$img_name);
        }
        $course->category_id = $request->category_id;
        $course->title = $request ->title;
        $course->featured = $img_name;
        $course->date_of_course = $request ->date_of_course;
        $course->place_of_course = $request ->place_of_course;
        $course->description = $request ->description;

        $course->save();

        return redirect()->route('admin.courses');
    }
    public function delete(Request $request,$course){
        $course = Course::find($course);
        
       
       $course->delete();
       return redirect()->route('admin.courses');
    }
}
