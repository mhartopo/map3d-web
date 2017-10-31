<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Land;

class LandController extends Controller
{
    public function index() {
    	return Land::all();
    }

    public function show(Land $land) {
    	return $land;
    }

    public function store(Request $request) {
        $data = $request->json()->all();
    	$land = Land::create($data);
    	return response()->json($land, 201);
    }

    public function update(Request $request, Land $land) {
    	$land->update($request->json()->all());
    	return response()->json($land, 200);
    }

    public function delete(Land $land) {
    	$land->delete();
    	return response()->json(null, 204);
    }
}
