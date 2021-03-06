<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Water;
use App\Http\Requests\StoreWaterRequest;
use App\Cluster;

class WatersController extends Controller
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
        $waters = Water::all();
        return view('water.allwaters', compact('waters'));
    }

    public function search(Request $request) {
        $name = $request->input('query');
        $waters = Water::where('name', 'like', '%' . $name . '%')->get();
        return view('water.allwaters', compact('waters'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $cluster_id = $request->input('cluster');
        if($cluster_id == null) {
            return view('water.waterform', compact('cluster_id'));
        } else {
            $cluster = Cluster::find($cluster_id);
            return view('water.waterform', compact('cluster_id', 'cluster'));
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreWaterRequest $request)
    {
        $data = $request->all();
        $water = Water::create($data);
        return \Redirect::to('waters');
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
        $water =  Water::find($id);
        return view('water.edit_water', compact('water'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreWaterRequest $request, $id)
    {
        $data = $request->all();
        $water = Water::find($id);
        $water->update($data);
        return \Redirect::to('waters');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $water = Water::find($id);
        $water->delete();
        return \Redirect::to('waters');
    }
}
