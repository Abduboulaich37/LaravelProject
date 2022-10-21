<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    private static function getData(){
        return [
            ['id' => 1, 'name' => 'Abdelmouemine'],
            ['id' => 2, 'name' => 'Ayoub'],
            ['id' => 3, 'name' => 'Zakariae'],
        ];
    }

    public function table(){
        return view ('table' , [
            'table' => self::getData()
        ]);
    }
}
