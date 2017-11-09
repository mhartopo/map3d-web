<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Land;
use App\Http\Requests\StoreLandRequest;

class LandsController extends Controller
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
        $lands = Land::all();
        return view('land.lands', compact('lands'));
    }

    public function search(Request $request) {
        $address = $request->input('query');
        $lands = Land::where('address', 'like', '%'.$address.'%')->get();
        return view('land.lands', compact('lands'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('land.landform');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreLandRequest $request)
    {
        $data = $request->all();
        $land = Land::create($data);
        return \Redirect::to('lands');
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
        $land = Land::find($id);
        return view('land.edit_land', compact('land'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreLandRequest $request, $id)
    {
        $land = Land::find($id);
        $data = $request->all();
        $land->update($data);
        return \Redirect::to('lands');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $land = Land::find($id);
        $land->delete();
        return \Redirect::to('lands');
    }
}
