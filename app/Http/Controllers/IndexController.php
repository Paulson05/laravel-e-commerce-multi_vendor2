<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function home(){
     $categories = Category::where(['status'=>'active', 'is_parent'=>1])->limit(12)->orderBy('id', 'Desc')->get();
        return view('Frontend.index')->with([
            'categories' => $categories
        ]);
    }
}
