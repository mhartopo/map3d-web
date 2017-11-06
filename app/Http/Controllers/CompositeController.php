<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Building;
use App\Cluster;
use App\Water;
use App\Street;
use App\Park;
use App\Land;

class CompositeController extends Controller
{
    public function getAll() {
        $building = Building::all();
        $cluster = Cluster::all();
        $water = Water::all();
        $park = Park::all();
        $street = Street::all();
        $land = Land::all();

        return response()->json([
            'buildings' => $building,
            'clusters' => $cluster,
            'waters' => $water,
            'parks' => $park,
            'streets' => $street,
            'lands' => $land
        ]);
    }
    public function getByName($name) {
        $building = Building::where('name', $name)->get();
        $cluster = Cluster::where('name', $name)->get();
        $water = Water::where('name', $name)->get();
        $park = Park::where('name', $name)->get();
        $street = Street::where('name', $name)->get();

        return response()->json([
            'buildings' => $building,
            'clusters' => $cluster,
            'waters' => $water,
            'parks' => $park,
            'streets' => $street
        ]);
    }

    public function getByAddress($address) {
        $building = Building::where('address', 'like', $address.'%')->get();
        $cluster = Cluster::where('address', 'like', $address.'%')->get();
        $park = Park::where('address', 'like', $address.'%')->get();
        $land = Land::where('address', 'like', $address.'%')->get();
        return response()->json([
            'buildings' => $building,
            'clusters' => $cluster,
            'parks' => $park,
            'lands' => $land,
        ]);
    }

    public function getByTypeAndAddress($type, $address) {
        $building = Building::where('type', $type)->where('address', 'like', $address.'%')->get();
        $cluster = Cluster::where('type', $type)->where('address', 'like', $address.'%')->get();
        $park = Park::where('type', $type)->where('address', 'like', $address.'%')->get();
        $land = Land::where('type', $type)->where('address', 'like', $address.'%')->get();

        return response()->json([
            'buildings' => $building,
            'clusters' => $cluster,
            'parks' => $park,
            'lands' => $land,
        ]);
    }
}
