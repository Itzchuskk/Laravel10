<?php

namespace App\Http\Controllers;

use App\Models\Superhero;
use Illuminate\Http\Request;

class spApi extends Controller
{
    public function index()
    {

        $superheroes = Superhero::with('universe', 'gender')->get();
        return response()->json($superheroes);
    }


    public function show($name)
    {
        $superhero = Superhero::where('name', $name)
                              ->with('universe', 'gender')
                              ->first();

        if (!$superhero) {
            return response()->json(['error' => 'Superhero not found'], 404);
        }

        return response()->json($superhero);
    }
}
