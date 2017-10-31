<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Street;

class StreetController extends Controller
{
    //
    public function index() {
    	return Street::all();
    }

    public function show(Street $street) {
    	return $street;
    }

    public function store(Request $request) {
        $data = $request->json()->all();
    	$street = Street::create($data);
    	return response()->json($street, 201);
    }

    public function update(Request $request, Street $street) {
    	$street->update($request->json()->all());
    	return response()->json($street, 200);
    }

    public function delete(Street $street) {
    	$street->delete();
    	return response()->json(null, 204);
    }
}
