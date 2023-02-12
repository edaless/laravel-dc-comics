<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\person;

class MainController extends Controller
{

    public function home()
    {

        $people = Person::all();

        // $data = [
        //     'people' => $people
        // ];

        return view('pages.home', compact('people'));
    }


    public function personDelete(Person $person)
    {

        $person->delete();

        return redirect()->route('home');
    }

    public function personCreate()
    {

        return view('pages.personCreate');
    }

    public function personStore(Request $request)
    {

        $data = $request->validate([
            'firstName' => 'required|string|max:32',
            'lastName' => 'required|string|max:32',
            'dateOfBirth' => 'required|date|before:today',
            'heigth' => 'nullable|integer|min:50|max:300'
        ]);

        $person = new Person();

        $person->firstName = $data['firstName'];
        $person->lastName = $data['lastName'];
        $person->dateOfBirth = $data['dateOfBirth'];
        $person->heigth = $data['heigth'];

        $person->save();

        return redirect()->route('home');
    }
}
