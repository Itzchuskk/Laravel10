<?php

namespace App\Http\Controllers;

use App\Models\Universe;
use Illuminate\Http\Request;

class uApi extends Controller
{
    public function index(){
        $universes = Universe::with('superheroes')->get();
        return response()->json($universes);
    }

    /*public function show($id){
        $universe = Universe::with('superheroes')->findOrFail($id);
        return response()->json($universes);
    }*/

    public function show($name){
        $universes = Universe::where('name', $name)->with('superheroes')->get();
        return response()->json($universes);
    }
}
