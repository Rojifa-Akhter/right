<?php

namespace App\Http\Controllers;

use App\Models\WaterUsage;
use App\Models\Field;
use App\Models\WaterSource;
use Illuminate\Http\Request;


class WaterUsageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $waterUsages = WaterUsage::get();
        return view('waterUsage.waterUsage_list', compact('waterUsages'));
    }

    public function add_waterUsage()
    {
        
        $fields = Field::all();
        $waterSources = WaterSource::all();
       
        return view('waterUsage.add',compact('fields', 'waterSources'));
    }

    public function store(Request $request)
    {    
        $request->validate([
            'field_id' => 'required|exists:fields,id',
            'water_source_id' => 'required|exists:water_sources,id',
            'date' => 'required|date',
            'quantity' => 'required',
                    
        ]);
        $data = [
            'field_id' => $request->field_id,
            'water_source_id' => $request->water_source_id,
            'date' => $request->date,
            'quantity' => $request->quantity,        
        ];
    
        WaterUsage::insert($data);

        // notices::insert($notice);
        return redirect()->route('waterUsage_list')->with('message', 'Added successfully!');
    }

    public function view_waterUsage(Request $request, $id)
    {
        $waterUsage_info = WaterUsage::with('field', 'waterSource')->findOrFail($id);
        return view('waterUsage.view', compact('waterUsage_info'));
    }

    public function edit_waterUsage($id)
    {
       
    $waterUsage_info = WaterUsage::findOrFail($id);
    $fields = Field::all(); // Fetch fields data
    $waterSources = WaterSource::all(); // Fetch water sources data
    return view('waterUsage.edit', compact('waterUsage_info', 'fields', 'waterSources'));
  }

    public function update(Request $request)
    {
        $request->validate([
            'date' => 'required|date',
            'quantity' => 'required|numeric',
        ]);

        $waterUsage = WaterUsage::findOrFail($request->id);
        $waterUsage->date = $request->date;
        $waterUsage->quantity = $request->quantity;
        $waterUsage->save();

        return redirect()->route('waterUsage_list')->with('success', 'WaterUsage updated successfully.');
    }
    public function destroy($id)
    {
        try {
            WaterUsage::findOrFail($id)->delete();
            return redirect()->route('waterUsage_list')->with('success', 'waterUsage deleted successfully');
        } catch (\Exception $e) {
            return redirect()->route('waterUsage_list')->with('error', 'waterUsage to delete field');
        }
    }
}
