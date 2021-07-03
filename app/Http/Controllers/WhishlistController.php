<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WhishlistController extends Controller
{
  public function  index(){
      return view('frontend.whistlist.index');
  }

}
