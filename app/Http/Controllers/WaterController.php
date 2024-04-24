<?php

namespace App\Http\Controllers;

use App\Models\Water;
use Illuminate\Http\Request;

class WaterController extends Controller
{
    public function index()
    {
        $water = Water::get();
        return view('water.water_list', compact('water'));
   
    }
    public function add_water()
    {
        return view('water.add',);
    }

    public function store(Request $request)
    {    
        $request->validate([
            'source_name' => 'required',
            'capacity' => 'required',
            'quantity' => 'required',
            'date' => 'required',
           
        ]);
        $data = [
            'source_name' => $request->source_name,
            'capacity' => $request->capacity,         
            'quantity' => $request->quantity,         
            'date' => $request->date,         
        ];
    
        Water::insert($data);

        // notices::insert($notice);
        return redirect()->route('water_list')->with('message', 'Added successfully!');
    }
    public function view_water(Request $request, $id)
    {
        $water_info = Water::findOrFail($id);
        return view('water.view', compact('water_info'));
    }


    public function edit_waterSource(Request $request, $id)
    {
        $waterSource_info = WaterSource::findOrFail($id);
        return view('water.edit', compact('water_info'));
    }
    public function update(Request $request)
    {
        $id = $request->id;
        $water_info = WaterSource::findOrFail($id);

        $water_info->name = $request->name;
        $water_info->capacity = $request->capacity;
   
        $water_info->save();
        return redirect()->route('waterSource_list');
    }
    public function destroy($id)
    {
        try {
            Water::findOrFail($id)->delete();
            return redirect()->route('water_list')->with('success', 'water deleted successfully');
        } catch (\Exception $e) {
            return redirect()->route('water_list')->with('error', 'water to delete');
        }
    }

    
}
