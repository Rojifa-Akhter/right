<?php

namespace App\Http\Controllers;

use App\Models\Soil;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SoilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $soils = Soil::get();
        return view('soil.soil_list', compact('soils'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function add_soil()
    {
        return view('soil.add',);
    }
       
    public function store(Request $request)
    {    
        $request->validate([
            'soil_type' => 'required',
            'pH' => 'required',
            'nitrogen' => 'required',
            'phosphorus' => 'required',
            'potassium' => 'required',
            'magnesium' => 'required',        
        ]);
        $data = [
            'soil_type' => $request->soil_type,
            'pH' => $request->pH,
            'nitrogen' => $request->nitrogen,
            'phosphorus' => $request->phosphorus,
            'potassium' => $request->potassium, 
            'magnesium' => $request->magnesium,
            'calcium' => $request->calcium,          
        ];
    
        Soil::insert($data);

        // notices::insert($notice);
        return redirect()->route('soil_list')->with('message', 'Added successfully!');
    }

    public function view_soil(Request $request, $id)
    {
        $soil_info = Soil::findOrFail($id);
        return view('soil.view', compact('soil_info'));
    }


    public function edit_soil(Request $request, $id)
    {
        $soil_info = Soil::findOrFail($id);
        return view('soil.edit', compact('soil_info'));
    }

    public function update(Request $request)
    {
        $id = $request->id;
        $soil_info = Soil::findOrFail($id);

        $soil_info->soil_type = $request->soil_type;
        $soil_info->pH = $request->pH;
        $soil_info->nitrogen = $request->nitrogen;
        $soil_info->phosphorus = $request->phosphorus;
        $soil_info->potassium = $request->potassium;
        $soil_info->magnesium = $request->magnesium;
        $soil_info->calcium = $request->calcium;


        $soil_info->save();
        return redirect()->route('soil_list');
    }

    public function destroy($id)
    {
        try {
            Soil::findOrFail($id)->delete();
            return redirect()->route('soil_list')->with('success', 'Soil deleted successfully');
        } catch (\Exception $e) {
            return redirect()->route('soil_list')->with('error', 'Soil to delete field');
        }
    }
}
