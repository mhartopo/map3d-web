<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Street;
use App\Http\Requests\StoreStreetRequest;

class StreetsController extends Controller
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
        $streets = Street::all();
        return view('street.allstreets', compact('streets'));
    }

    public function search(Request $request) {
        $name = $request->input('query');
        $streets = Street::where('name', 'like', '%' . $name . '%')->get();
        return view('street.allstreets', compact('streets'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $cluster_id = $request->input('cluster');
        return view('street.streetform', compact('cluster_id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreStreetRequest $request)
    {
        $data = $request->all();
        $street = Street::create($data);
        return \Redirect::to('streets');
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
        $street = Street::find($id);
        return view('street.edit_street', compact('street'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreStreetRequest $request, $id)
    {
        $data = $request->all();
        $street = Street::find($id);
        $street->update($data);
        return \Redirect::to('streets');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $street = Street::find($id);
        $street->delete();
        return \Redirect::to('streets');
    }
}
