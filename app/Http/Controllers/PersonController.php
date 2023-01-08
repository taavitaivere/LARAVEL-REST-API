<?php

namespace App\Http\Controllers;

use App\Models\Person;
use Illuminate\Http\Request;

class PersonController extends Controller
{
    public function index()
    {
        $persons = Person::all();
        return response()->json($persons);
    }

    public function show($id)
    {
        $person = Person::find($id);
        return response()->json($person);
    }

    public function create(Request $request)
    {
        $person = new Person();
        $person->name = $request->name;
        $person->email = $request->email;
        $person->avatar = $request->avatar;

        $person->save();

        return response()->json("$person added successfully" , 201);
    }

    public function update(Request $request, $id)
    {
        $person = Person::find($id);
        $person->name = $request->name;
        $person->email = $request->email;
        $person->avatar = $request->avatar;

        $person->save();

        return response()->json("$person updated successfully" , 200);
    }

    public function delete($id)
    {
        $person = Person::find($id);
        $person->delete();

        return response()->json("$person deleted successfully" , 200);
    }
}
