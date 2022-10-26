<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Promotion;

class SearchController extends Controller
{
    //Search section
    public function search($name=null){ 
        if($name == null){
            $data =Promotion::all();
            return view('index_search',compact('data'));        }
        else {
            $data =Promotion::where('name', 'like','%'.$name.'%')->get();
            return view('index_search',compact('data'));
        }
    }
}
