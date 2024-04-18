<?php

namespace App\Http\Controllers;

use App\Models\Season;
use Illuminate\Http\Request;

class SeasonController extends Controller
{
    
    public function index()
    {
        $seasons = Season::get();
        return view('season.season_list', compact('seasons'));
    }

    public function add_season()
    {
        return view('season.add',);
    }
    public function store(Request $request)
    {
        $data = [
            'name' => $request->name
        ];

        Season::create($data);

        return redirect()->route('season_list');
    }

    public function edit_season(Request $request, $id)
    {
        $season_info = Season::findOrFail($id);
        return view('season.edit', compact('season_info'));
    }
    public function update(Request $request)
    {
        $id = $request->id;
        $season_info = Season::findOrFail($id);

        $season_info->name = $request->name;

        $season_info->save();
        return redirect()->route('season_list');
    }
    public function view_season(Request $request, $id)
    {
        $season_info = Season::findOrFail($id);
        return view('season.view', compact('season_info'));
    }
    

    public function destroy($id)
    {
        try {
            Season::findOrFail($id)->delete();
            return redirect()->route('season_list')->with('success', 'season deleted successfully');
        } catch (\Exception $e) {
            return redirect()->route('season_list')->with('error', 'Failed to delete season');
        }
    }
}
