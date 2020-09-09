<?php

namespace App\Http\Settings\Controllers;

use Illuminate\Http\Request;
use App\Modelsgenerals\{ Civilstatus, Country, Departament, Municipality, Location, Neighborhood, Identification };

class GeneralParametersController extends Controller
{
    public function getCivilStatus()
    {
        $civilStatus = Civilstatus::all();
        return response()->json($civilStatus, 200);
    }
    public function getCountry()
    {
        $country = Country::all();
        return response()->json($country, 200);
    }
    public function getDepartament($country)
    {
        $departaments = Departament::where('country_id',$country)->get();
        return response()->json($departaments);
    }
    public function getMunicipality($departament)
    {
        $municipalities = Municipality::where('departament_id',$departament)->get();
        return response()->json($municipalities);
    }
    public function getLocation($municipality)
    {
        $locations = Location::where('municipality_id',$municipality)->get();
        return response()->json($locations);
    }
    public function getNeighborhood($location)
    {
        $neighborhood = Neighborhood::where('location_id',$location)->get();
        return response()->json($neighborhood);
    }
    public function getIdentification()
    {
        $identifications = Identification::all();
        return response()->json($identifications);
    }
}
