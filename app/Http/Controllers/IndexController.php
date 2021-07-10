<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function home(){
     $categories = Category::where(['status'=>'active', 'is_parent'=>1])->limit(3)->orderBy('id', 'Desc')->get();
        return view('Frontend.index')->with([
            'categories' => $categories
        ]);
    }

    public function shop(){
        return view('Frontend.shop');
    }

    public function auth(){
        return view('Frontend.auth.auth');
    }
    public function dashboard(){
         return view('Frontend.userdashboard.dashboard');
     }
    public function address(){
        return view('Frontend.userdashboard.address');
    }
    public function accountdetails(){
        return view('Frontend.userdashboard.accountdetail');
    }
    public function order(){
        return view('Frontend.userdashboard.order');
    }
}
