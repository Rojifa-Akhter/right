<?php

namespace App\Http\Controllers;

use App\Models\WaterSource;
use Illuminate\Http\Request;

class WaterSourceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $waterSources = WaterSource::get();
        return view('waterSource.waterSource_list', compact('waterSources'));
   
    }

    public function add_waterSource()
    {
        return view('waterSource.add',);
    }

    public function store(Request $request)
    {    
        $request->validate([
            'name' => 'required',
            'capacity' => 'required',
           
        ]);
        $data = [
            'name' => $request->name,
            'capacity' => $request->capacity,         
        ];
    
        WaterSource::insert($data);

        // notices::insert($notice);
        return redirect()->route('waterSource_list')->with('message', 'Added successfully!');
    }

    public function view_waterSource(Request $request, $id)
    {
        $waterSource_info = WaterSource::findOrFail($id);
        return view('waterSource.view', compact('waterSource_info'));
    }


    public function edit_waterSource(Request $request, $id)
    {
        $waterSource_info = WaterSource::findOrFail($id);
        return view('waterSource.edit', compact('waterSource_info'));
    }

    public function update(Request $request)
    {
        $id = $request->id;
        $waterSource_info = WaterSource::findOrFail($id);

        $waterSource_info->name = $request->name;
        $waterSource_info->capacity = $request->capacity;
   
        $waterSource_info->save();
        return redirect()->route('waterSource_list');
    }
    public function destroy($id)
    {
        try {
            WaterSource::findOrFail($id)->delete();
            return redirect()->route('waterSource_list')->with('success', 'waterSource deleted successfully');
        } catch (\Exception $e) {
            return redirect()->route('waterSource_list')->with('error', 'waterSource to delete field');
        }
    }
}
