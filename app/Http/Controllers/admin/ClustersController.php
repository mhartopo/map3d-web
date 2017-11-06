<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Cluster;
use App\Building;
use App\Park;
use App\Water;
use App\Land;
use App\Street;

class ClustersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clusters = Cluster::all();
        return view('cluster.all_clusters', compact('clusters'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cluster = Cluster::where('id', $id)->get();
        $parks = Park::where('cluster_id', $id)->get();
        $lands = Land::where('cluster_id', $id)->get();
        $streets = Street::where('cluster_id', $id)->get();
        $waters =  Water::where('cluster_id', $id)->get();
        $buildings = Building::where('cluster_id', $id)->get();
 
        return view('cluster.show_cluster', compact('cluster', 'buildings', 'lands', 'parks', 'streets', 'waters', 'id'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
