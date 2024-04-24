<?php

namespace App\Http\Controllers;

use App\Models\Crop;
use App\Models\Soil;
use App\Models\Water;
use App\Models\Season;
use App\Models\Location;
use Illuminate\Http\Request;

class CropController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $crops = Crop::get();
        return view('crop.crop_list', compact('crops'));
    }
    public function add()
    {
        $crop = Crop::all();
        $locations = Location::all();
        $soils = Soil::all();
        $waters = Water::all();
        $seasons = Season::all();
        return view('crop.add', compact('locations','soils', 'waters', 'seasons'));
    }

    public function store(Request $request)
    {
        // Validation
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'soil_id' => 'required|exists:soils,id',
            'water_id' => 'required|exists:waters,id',
            'season_id' => 'required|exists:seasons,id',
            'location_id' => 'required|exists:locations,id',
        ]);

        // Create a new crop instance
        $crop = new Crop();
        $crop->name = $request->name;
        $crop->description = $request->description;
        $crop->soil_id = $request->soil_id;
        $crop->water_id = $request->water_id;
        $crop->season_id = $request->season_id;
        $crop->location_id = $request->location_id;
        $crop->save();

        // Redirect back with success message
        return redirect()->route('crop_list')->with('message', 'Crop added successfully!');
    }
    public function editCrop($id)
    {

        $crop_info = Crop::findOrFail($id);
        $soils = Soil::all(); // Fetch fields data
        $waters = Water::all(); // Fetch water sources data
        $seasons = Season::all(); // Fetch water sources data
        $locations = Location::all(); // Fetch water sources data
        return view('crop.edit', compact('crop_info', 'soils', 'waters', 'seasons', 'locations'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'soil_id' => 'required|exists:soils,id',
            'water_id' => 'required|exists:waters,id',
            'season_id' => 'required|exists:seasons,id',
            'location_id' => 'required|exists:locations,id',
        ]);

        $crop = Crop::findOrFail($request->id);
        $crop->name = $request->name;
        $crop->description = $request->description;
        $crop->soil_id = $request->soil_id;
        $crop->water_id = $request->water_id;
        $crop->season_id = $request->season_id;
        $crop->location_id = $request->location_id;
        $crop->save();

        return redirect()->back()->with('success', ' updated successfully.');
    }
    public function destroy($id)
    {
        try {
            Crop::findOrFail($id)->delete();
            return redirect()->route('crop_list')->with('success', 'crop deleted successfully');
        } catch (\Exception $e) {
            return redirect()->route('crop_list')->with('error', 'crop to delete ');
        }
    }
}
