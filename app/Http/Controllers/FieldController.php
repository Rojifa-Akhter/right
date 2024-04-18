<?php

namespace App\Http\Controllers;

use App\Models\Field;
use App\Models\Location;
use Illuminate\Http\Request;
use DB;

class FieldController extends Controller
{
    public function index()
    {
        $fields = Field::get();
        return view('field.field_list', compact('fields'));
    }
    public function add_field()
    
    {
        $locations = Location::pluck('city_name', 'id');
       
        return view('field.add',compact('locations'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'location_id' => 'required|exists:locations,id',
            'area' => 'required',
                    
        ]);
        $data = [
            'name' => $request->name,
            'location_id' => $request->location_id,
            'area' => $request->area,         
        ];
    
        Field::insert($data);

        // notices::insert($notice);
        return redirect()->route('field_list')->with('message', 'Added successfully!');
      }

    public function edit_field(Request $request, $id)
    {
       
        $field_info = Field::findOrFail($id);
        $locations = Location::all();// Fetch fields data
        return view('field.edit', compact('field_info','locations'));
    }
    public function update(Request $request)
    {
        // $request->validate([
        //     'name' => 'required|name',
        //     'area' => 'required',
        // ]);
        $request->validate([
            'name' => 'required|string',
            'area' => 'required',
        ]);
        

        $field_info = Field::findOrFail($request->id);
        $field_info->name = $request->name;
        $field_info->area = $request->area;
      
        $field_info->save();
        return redirect()->route('field_list')->with('success', 'Field updated successfully.');
    }
    public function view_field(Request $request, $id)
    {
        $field_info = Field::with('location')->findOrFail($id);
        return view('field.view', compact('field_info'));
    }
    public function destroy($id)
    {
        try {
            Field::findOrFail($id)->delete();
            return redirect()->route('field_list')->with('success', 'Field deleted successfully');
        } catch (\Exception $e) {
            return redirect()->route('field_list')->with('error', 'Failed to delete field');
        }
    }
}
