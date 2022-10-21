<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Promotion;

class PromotionsController extends Controller
{
    public function Add()
    {
        return view('welcome');
    }

    public function Insert(Request $req)
    {
        $table = new Promotion();
        $table->name = $req->name;
        $table->save();
        return redirect("add");
    }

    public function select()
    {
        $data = Promotion::all();
        return view('index', compact('data'));
    }
}
