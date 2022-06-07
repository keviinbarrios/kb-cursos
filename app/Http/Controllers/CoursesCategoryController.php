<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CoursesCategoryController extends Controller
{
   /*  public function categories(){
        $categories = Category::all();

        return view('courses-category',['categories'=> $categories]);
    } */
    
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

}
