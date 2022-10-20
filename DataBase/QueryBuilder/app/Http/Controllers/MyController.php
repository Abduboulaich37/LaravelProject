<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    public function index() {
        return view ('welcome');
    }

    public function add() {
        return view ('add');
    }
   
    public function hello() {
        $hello = 'salamo3alikom';
        return view ('hello');
    }

    private static function getData(){
        return [
            // ['id' => 1, 'name' => 'Abdelmouemine'],
            // ['id' => 2, 'name' => 'Ayoub'],
            // ['id' => 3, 'name' => 'Zakariae'],
        ];
    }

    public function table(){
        return view ('table' , [
            'table' => self::getData()
        ]);
    }
}
