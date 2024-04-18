<?php

namespace App\Http\Controllers;

use App\Models\Location;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $locations = Location::get();
        return view('location.location_list', compact('locations'));
    
    }

    public function add_location()
    {
        return view('location.add',);
    }
       
    public function store(Request $request)
    {    
        $request->validate([
            'country_name' => 'required',
            'district_name' => 'required',
            'city_name' => 'required',        
        ]);
        $data = [
            'country_name' => $request->country_name,
            'district_name' => $request->district_name,
            'city_name' => $request->city_name,        
        ];
    
        Location::insert($data);

        // notices::insert($notice);
        return redirect()->route('location_list')->with('message', 'Added successfully!');
    }
    public function view_location(Request $request, $id)
    {
        $location_info = Location::findOrFail($id);
        return view('location.view', compact('location_info'));
    }


    public function edit_location(Request $request, $id)
    {
        $location_info = Location::findOrFail($id);
        return view('location.edit', compact('location_info'));
    }
    public function update(Request $request)
    {
        $id = $request->id;
        $location_info = Location::findOrFail($id);

        $location_info->country_name = $request->country_name;
        $location_info->district_name = $request->district_name;
        $location_info->city_name = $request->city_name;

        $location_info->save();
        return redirect()->route('location_list');
    }

    public function destroy($id)
    {
        try {
            Location::findOrFail($id)->delete();
            return redirect()->route('location_list')->with('success', 'location deleted successfully');
        } catch (\Exception $e) {
            return redirect()->route('location_list')->with('error', 'location to delete field');
        }
    }
}
