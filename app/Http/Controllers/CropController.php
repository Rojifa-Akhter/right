<?php

namespace App\Http\Controllers;

use App\Models\Crop;
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
    public function add_crop()
    {
        return view('crop.add',);
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',        
        ]);
        $data = [
            'name' => $request->name,
            'description' => $request->description,         
        ];
    
        Crop::insert($data);

        // notices::insert($notice);
        return redirect()->route('crop_list')->with('message', 'Added successfully!');
   }

  
   public function view_crop(Request $request, $id)
   {
       $crop_info = Crop::findOrFail($id);
       return view('crop.view', compact('crop_info'));
   }


   public function edit_crop(Request $request, $id)
   {
       $crop_info = Crop::findOrFail($id);
       return view('crop.edit', compact('crop_info'));
   }
   public function update(Request $request)
   {
       $id = $request->id;
       $crop_info = Crop::findOrFail($id);

       $crop_info->name = $request->name;
       $crop_info->description = $request->description;

       $crop_info->save();
       return redirect()->route('crop_list');
   }

   public function destroy($id)
   {
       try {
           Crop::findOrFail($id)->delete();
           return redirect()->route('crop_list')->with('success', 'crop deleted successfully');
       } catch (\Exception $e) {
           return redirect()->route('crop_list')->with('error', 'crop to delete field');
       }
   }
}
