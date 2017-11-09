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
use App\Owner;
use App\Http\Requests\StoreClusterRequest;
class ClustersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
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

    public function search(Request $request) {
        $name = $request->input('query');
        $clusters = Cluster::where('name', 'like', '%' . $name .'%')->get();
        return view('cluster.all_clusters', compact('clusters'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('cluster.clusterform');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreClusterRequest $request)
    {
        $data = $request->all();
        $cluster = Cluster::create($data);
        return \Redirect::to('clusters/'.$cluster->id);  
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Cluster $cluster)
    {
        $id = $cluster->id;
        $cluster = Cluster::where('id', $id)->get();
        $parks = Park::where('cluster_id', $id)->get();
        $lands = Land::where('cluster_id', $id)->get();
        $streets = Street::where('cluster_id', $id)->get();
        $waters =  Water::where('cluster_id', $id)->get();
        $buildings = Building::where('cluster_id', $id)->get();
        $owner = Owner::where('id', $cluster[0]->owner_id)->get();
        return view('cluster.show_cluster', compact('cluster', 'buildings', 'parks', 'lands', 'streets', 'waters', 'id', 'owner'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cluster = Cluster::find($id);
        return view('cluster.edit_cluster', compact('cluster'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreClusterRequest $request, $id)
    {   
        $data = $request->all();
        Cluster::find($id)->update($data);
        return \Redirect::to('clusters/'.$id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Building::where('cluster_id', $id)->delete();
        Land::where('cluster_id', $id)->delete();
        Park::where('cluster_id', $id)->delete();
        Street::where('cluster_id', $id)->delete();
        Water::where('cluster_id', $id)->delete();
        $cluster = Cluster::find($id);
        $cluster->delete();
        return \Redirect::to('clusters');
    }
}
