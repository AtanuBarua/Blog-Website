<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Category;
use Illuminate\Http\Request;
use DB;

class BlogController extends Controller
{


    public function index(){
        return view('front.home.home',[
            'blogs'      => Blog::where('publication_status', 1)->orderBy('id','desc')->get(),
            'categories' => Category::where('publication_status',1)->get()
        ]);
    }


    public function categoryBlog($id, $name){
        return view('front.category.category-blog',[
            'categories' => Category::where('publication_status',1)->get(),
            'blogs'      => Blog::where('category_id',$id)->where('publication_status',1)->get()
        ]);
    }

    public function blogDetails($id){
        return view('front.blog.blog-details',[
            'categories' => Category::where('publication_status',1)->get(),
            'blog'       => Blog::find($id)
        ]);
    }
}
