<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WaterController extends Controller
{
    public function index() {
    	return Water::all();
    }

    public function show(Water $water) {
    	return $water;
    }

    public function store(Request $request) {
        $data = $request->json()->all();
    	$water = Water::create($data);
    	return response()->json($water, 201);
    }

    public function update(Request $request, Water $water) {
    	$water->update($request->json()->all());
    	return response()->json($water, 200);
    }

    public function delete(Water $water) {
    	$water->delete();
    	return response()->json(null, 204);
    }
}
