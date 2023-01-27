<?php

namespace App\Http\Controllers;

use App\Models\Crud;
use Illuminate\Http\Request;

class TestcrudController extends Controller
{
    public function index()
    {
        $data['person'] = Crud::orderBy('id', 'desc')->paginate(2);

        return view('crud', $data);
    }

    public function create()
    {
        return view('create');
    }

    public function saveinfor(Request $request)
    {
        $request->validate([
            'person' => 'required',
            'tel' => 'required',
            'address' => 'required'
        ]);

        $person = new Crud;
        $person->person = $request->person;
        $person->tel = $request->tel;
        $person->address = $request->address;
        $person->save();
        return redirect()->route('person.index');
    }

    public function edit($id)
    {
        // echo $person;
        $person = Crud::find($id);
        return view('edit', compact('person'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'person' => 'required',
            'tel' => 'required',
            'address' => 'required'
        ]);
        $person = Crud::find($request->id);

        $person->person = $request->person;
        $person->tel = $request->tel;
        $person->address = $request->address;
        $person->save();
        return redirect()->route('person.index');
    }

    // public function delete($id){
    //     $id->delete([$id]);
    //     return redirect()->route('person.index');
    // }

    public function delete($id)
    {
        Crud::find($id)->delete();
        return redirect()->route('person.index');
    }

    // public function fib($num)
    // {
    //     $num1 = 0;
    //     $n1 =  $num;
    //     $n2 = $n1;
    //     echo "<h3>Fibonacci series for first 12 numbers: </h3>";
    //     echo "\n";
    //     echo $n1 . ' ' . $n2 . ' ';
    //     while ($num1 < 10) {
    //         $n3 = $n2 + $n1;
    //         echo $n3 . ' ';
    //         $n1 = $n2;
    //         $n2 = $n3;
    //         $num1 = $num1 + 1;
    //     }
    // }
}
