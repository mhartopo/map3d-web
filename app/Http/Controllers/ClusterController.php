<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClusterController extends Controller
{
    public function index() {
    	return Cluster::all();
    }

    public function show(Cluster $cluster) {
    	return $cluster;
    }

    public function store(Request $request) {
        $data = $request->json()->all();
    	$cluster = Cluster::create($data);
    	return response()->json($cluster, 201);
    }

    public function update(Request $request, Cluster $cluster) {
    	$cluster->update($request->json()->all());
    	return response()->json($cluster, 200);
    }

    public function delete(Cluster $cluster) {
    	$cluster->delete();
    	return response()->json(null, 204);
    }

}
