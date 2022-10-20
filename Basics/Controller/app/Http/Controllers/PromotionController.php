<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PromotionController extends Controller
{
    //

    public function index(){
        $name= " Promotion 1 ";
        return view('index',compact('name'));
        
      }
}
