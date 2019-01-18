<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Topic;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    //读取分类id关联的话题
    public function show(Category $category)
    {
        $topics = Topic::where('category_id',$category->id)->paginate(10);
        return view('topics.index',compact('topics','category'));
    }
}
