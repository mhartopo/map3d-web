<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OwnerController extends Controller
{
    public function index() {
    	return Owner::all();
    }

    public function show(Owner $owner) {
    	return $owner;
    }

    public function store(Request $request) {
        $data = $request->json()->all();
    	$owner = Owner::create($data);
    	return response()->json($owner, 201);
    }

    public function update(Request $request, Owner $owner) {
    	$owner->update($request->json()->all());
    	return response()->json($owner, 200);
    }

    public function delete(Owner $owner) {
    	$owner->delete();
    	return response()->json(null, 204);
    }
}
