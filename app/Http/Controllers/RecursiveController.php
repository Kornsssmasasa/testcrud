<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RecursiveController extends Controller
{
    public function pageRecu()
    {
        return view('recursive.recursive');
    }



    // public function calculateFactorial(Request $request)
    // {
    //     $input = $request->input('numbers');
    //     $numbers = explode(',', $input);
    //     $results = $this->recursiveMath($numbers);
    //     return view('recursive.result', ['results' => $results, 'numbers' => $numbers]);
    // }

    // private function recursiveMath($numbers, $index = 0, $total = 0, $results = []) {
    //     if ($index == count($numbers)) {
    //         return $results;
    //     }
    //     $new_total = $total + $numbers[$index];
    //     $results[] = $new_total;
    //     return $this->recursiveMath($numbers, $index + 1, $new_total, $results);
    // }

    public function calculateFactorial(Request $request)
    {
        $input = $request->input('number');
        $result = $this->factorial($input);
        return view('recursive.recursive', ['result' => $result,'input' => $input]);
    }

    private function factorial($n)
    {
        if ($n === 0) {
            return 1;
        }
        return $n * $this->factorial($n-1);
    }
}
