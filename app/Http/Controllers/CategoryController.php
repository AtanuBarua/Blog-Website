<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function addCategory(){
        return view('admin.category.add-category');
    }

    public function newCategory(Request $request){


        Category::saveCategoryInfo($request);

        return redirect('/category/manage-category')->with('message','Category created successfully!!');
    }

    public function manageCategory(){

        return view('admin.category.manage-category',[
            'categories' => Category::all()
        ]);

    }

    public function editCategory($id){

        return view('admin.category.edit-category',[
            'category' => Category::find($id)
        ]);
    }

    public function updateCategory(Request $request){

        Category::updateCategoryInfo($request);

        return redirect('/category/manage-category')->with('message','Category updated successfully!!');

    }

    public function deleteCategory(Request $request){


        $blog = Blog::where('category_id', $request->id)->first();
        if ($blog){
            return redirect('/category/manage-category')->with('message','Category can\'t be deleted because it is in use');
        }
        else{
            $category = Category::find($request->id);
            $category->delete();
            return redirect('/category/manage-category')->with('message','Category deleted successfully!!');
        }



    }
}
