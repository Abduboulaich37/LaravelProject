<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Promotion;

class SearchController extends Controller
{
    //Search section
    public function search($name=null){ 
        if($name == null){
            $promotions =Promotion::all();
            return view('promotions.index_search',compact('promotions'));        }
        else {
            $promotions =Promotion::where('name', 'like','%'.$name.'%')->get();
            return view('promotions.index_search',compact('promotions'));
        }
    }
}
