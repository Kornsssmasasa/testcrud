<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExponentController extends Controller
{
    public function pageExpo()
    {
        return view('exponent.exponent');
    }
    
    public function calculate(Request $request) {
        $number = $request->input('number');
        $power = $request->input('power');
        $result = 1;
        for ($i = 0; $i < $power; $i++) {
            $result *= $number;
        }
        $result_str = "$number^$power = ";
        for ($i=0; $i < $power; $i++) { 
            $result_str .= "$number*";
        }
        $result_str = substr($result_str,0,-1);
        return view('exponent.exponent', compact('result','result_str'));
    }
}
