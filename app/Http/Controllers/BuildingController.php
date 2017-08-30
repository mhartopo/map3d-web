<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Building;

class BuildingController extends Controller
{
    //
    public function index() {
    	return Building::all();
    }

    public function show(Building $building) {
    	return $building;
    }

    public function store(Request $request) {
    	$building = Building::create($request->all());
    	return response()->json($building, 201);
    }

    public function update(Request $request, Building $building) {
    	$building->update($request->all());
    	return response()->json($building, 200);
    }

    public function delete(Building $building) {
    	$building->delete();
    	return response()->json(null, 204);
    }
}
