<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Park;
use App\Http\Requests\StoreParkRequest;

class ParksController extends Controller
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
        $parks = Park::all();
        return view('park.allparks', compact('parks'));
    }

    public function search(Request $request) {
        $name = $request->input('query');
        $parks = Park::where('name', 'like', '%' . $name . '%')->get();
        return view('park.allparks', compact('parks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('park.parkform');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreParkRequest $request)
    {
        $data = $request->all();
        $park = Park::create($data);
        return \Redirect::to('parks');
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
        $park = Park::find($id);
        return view('park.edit_park', compact('park'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreParkRequest $request, $id)
    {
        $data = $request->all();
        $park = Park::find($id);
        $park->update($data);
        return \Redirect::to('parks');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $park = Park::find($id);
        $park->delete();
        return \Redirect::to('parks');
    }
}
