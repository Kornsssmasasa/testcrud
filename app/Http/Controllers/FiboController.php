<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FiboController extends Controller
{

    public function pagefib()
    {
        return view('fibonacci.fibonacci');
    }


public function fibonacci(Request $request)
{
    $number = $request->input('number');
    $fibonacci = [0, $number];

    for ($i = 2; $i < $number; $i++) {
        $fibonacci[$i] = $fibonacci[$i-1] + $fibonacci[$i-2];
    }

    return view('fibonacci.fibonacci', ['fibonacci' => $fibonacci]);
    // return redirect()->route('fibonacci.resfib')->with('fibonacci',$fibonacci);
}
}
