<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cluster;
use App\Building;
use App\Park;
use App\Land;
use App\Street;
use App\Water;

class ClusterController extends Controller
{
    public function index() {
    	return Cluster::all();
    }

    public function show(Cluster $cluster) {
    	return $cluster;
    }

    public function getByName($name) {
        return Cluster::where('name', $name)->get();
    }

    public function getByAddress($address) {
        return Cluster::where('address', 'like', $address.'%')->get();
    }

    public function getByObject(Cluster $cluster, $objname) {
        switch ($objname) {
            case "buildings":
                return Building::where('cluster_id', $cluster->id)->get();
                break;
            case "lands":
                return Land::where('cluster_id', $cluster->id)->get();
                break;
            case "parks":
                return Park::where('cluster_id', $cluster->id)->get();
                break;
            case "streets":
                return Street::where('cluster_id', $cluster->id)->get();
                break;
            case "waters":
                return Water::where('cluster_id', $cluster->id)->get();
        }
        return [];
    }

    public function getNearest(Request $request) {
        $clusters = Cluster::all();
        $lat = $request->input('lat');
        $long = $request->input('long');
        $nearestCls = null;
        $mindist = INF;
        foreach($clusters as $cluster) {
            $latCls = $cluster->latitude;
            $longCls = $cluster->longitude;
            $dist = ClusterController::measureDistance($lat, $long, $latCls, $longCls);
            if($dist < $mindist) {
                $mindist = $dist;
                $nearestCls =  $cluster;
            }
        }
        
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

    public function measureDistance($latitudeFrom, $longitudeFrom, $latitudeTo, $longitudeTo, $earthRadius = 6371000) {
        $latFrom = deg2rad($latitudeFrom);
        $lonFrom = deg2rad($longitudeFrom);
        $latTo = deg2rad($latitudeTo);
        $lonTo = deg2rad($longitudeTo);

        $lonDelta = $lonTo - $lonFrom;
        $a = pow(cos($latTo) * sin($lonDelta), 2) +
            pow(cos($latFrom) * sin($latTo) - sin($latFrom) * cos($latTo) * cos($lonDelta), 2);
        $b = sin($latFrom) * sin($latTo) + cos($latFrom) * cos($latTo) * cos($lonDelta);

        $angle = atan2(sqrt($a), $b);
        return $angle * $earthRadius;
    }

}
