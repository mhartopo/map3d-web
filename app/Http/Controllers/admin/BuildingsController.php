<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use App\Building;
use App\Http\Requests\StoreBuildingRequest;
use App\Cluster;

class BuildingsController extends Controller
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
        $buildings = Building::all();
        return view('building.allbuildings', compact('buildings'));
    }

    public function search(Request $request) {
        $name = $request->input('query');
        $buildings = Building::where('name', 'like', '%' . $name . '%')->get();
        return view('building.allbuildings', compact('buildings'));
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
            return view('building.buildingform', compact('cluster_id'));
        } else {
            $cluster = Cluster::find($cluster_id);
            return view('building.buildingform', compact('cluster_id', 'cluster'));
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBuildingRequest $request)
    {
        /*
        $fileName =  Carbon::now()->toDateTimeString() . '.' . $request->file('model')->getClientOriginalExtension();
        $pathUrl = base_path() . '/public/files/catalog/';
        $request->file('model')->move(
            $pathUrl, $fileName
        );
        return $pathUrl . $fileName;
        */
        $data = $request->all();
        $building = Building::create($data);
        return \Redirect::to('buildings');
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
        $building = Building::find($id);
        return view('building.edit_building', compact('building'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreBuildingRequest $request, $id)
    {
        $building = Building::find($id);
        $data = $request->all();
        $building->update($data);
        return \Redirect::to('buildings');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $building = Building::find($id);
        $building->delete();
        return \Redirect::to('buildings');
    }
}
