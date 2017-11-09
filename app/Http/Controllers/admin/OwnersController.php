<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Owner;
use App\Http\Requests\StoreOwnerRequest;
use App\Cluster;
use App\Building;
use App\Land;
use App\Park;
use App\Street;
use App\Water;

class OwnersController extends Controller
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
        $owners = Owner::all();
        return view('owner.allowners', compact('owners'));
    }

    public function search(Request $request) {
        $name = $request->input('query');
        $owners = Owner::where('name', 'like', '%' . $name . '%')->get();
        return view('owner.allowners', compact('owners'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('owner.ownerform');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreOwnerRequest $request)
    {
        $data = $request->all();
        $owner = Owner::create($data);
        return \Redirect::to('owners');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $owner = Owner::find($id);
        return view('owner.edit_owner', compact('owner'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreOwnerRequest $request, $id)
    {
        $data = $request->all();
        $owner = Owner::find($id);
        $owner->update($data);
        return \Redirect::to('owners');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Building::where('owner_id', $id)->delete();
        Land::where('owner_id', $id)->delete();
        Park::where('owner_id', $id)->delete();
        
        $clusters = Cluster::where('owner_id', $id)->get();
        foreach($clusters as $cluster) {
            Building::where('cluster_id', $cluster->id)->delete();
            Land::where('cluster_id', $cluster->id)->delete();
            Park::where('cluster_id', $cluster->id)->delete();
            $cluster->delete();
        }
        $owner = Owner::find($id);
        $owner->delete();
        return \Redirect::to('owners');
    }
}
