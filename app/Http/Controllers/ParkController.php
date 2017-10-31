<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Park;

class ParkController extends Controller
{
    public function index() {
    	return Park::all();
    }

    public function show(Park $park) {
    	return $park;
    }

    public function store(Request $request) {
        $data = $request->json()->all();
    	$park = Park::create($data);
    	return response()->json($park, 201);
    }

    public function update(Request $request, Park $park) {
    	$park->update($request->json()->all());
    	return response()->json($park, 200);
    }

    public function delete(Park $park) {
    	$park->delete();
    	return response()->json(null, 204);
    }
}
