<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Promotion;

class PromotionsController extends Controller
{

    //Add section
    public function Add()
    {
        return view('welcome');
    }


    //Insert section
    public function Insert(Request $req)
    {
        $table = new Promotion();
        $table->name = $req->name;
        $table->save();
        return redirect("index");
    }


    //Display section
    public function select()
    {
        $data = Promotion::all();
        return view('index', compact('data'));
    }

    
    //Edit section
    public function edit($id)
    {
        $data = Promotion::where('id', $id)->get();
        return view("edit", compact("data"));
    }


    //Update section
    public function update(Request $req, $id)
    {
        $promo = Promotion::where('id', $id)->update(["name" => $req->name]);
        return redirect("index");
    }

    //Update section
    public function delete(Request $req, $id)
    {
        $promo = Promotion::where('id', $id)->delete(["name" => $req->name]);
        return redirect("index");
    }

}
