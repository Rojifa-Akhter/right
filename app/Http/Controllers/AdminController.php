<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Expert;

use Illuminate\Support\Facades\Auth;


class AdminController extends Controller
{
    public function index()
    {
        if (Auth::id()) {
            $usertype = Auth()->user()->usertype;

            if ($usertype == 'user') {
                return view('home.index');
            } else if ($usertype == 'admin') {
                return view('admin.index');
            } else {
                return redirect()->back();
            }
        }
    }
    public function home()
    {
        return view('home.index');
    }
    public function viewExpert()
    {
        $data = Expert::all();
        return view('admin.adminExpert', compact('data'));
    }
    public function uploadExpert(Request $request)
    {
        $data = new Expert();

        $image = $request->image;

        $imagename = time() . '.' . $image->getClientOriginalExtension();

        $request->image->move('expertimage', $imagename);
        $data->image = $imagename;

        $data->name = $request->name;
        $data->speciality = $request->speciality;

        $data->save();

        return redirect()->back();
    }
    public function updateExpert($id)
    {
        $data = Expert::find($id);
        return view('admin.updateExpert', compact('data'));
    }
    public function updateAgriExpert(Request $request, $id)
    {
        $data = Expert::find($id);

        $image = $request->image;

        if ($image) {
            $imagename = time() . '.' . $image->getClientOriginalExtension();

            $request->image->move('expertimage', $imagename);
            $data->image = $imagename;
        }

        $data->name = $request->name;
        $data->speciality = $request->speciality;

        $data->save();
        return redirect()->back();
    }
    public function deleteExpert($id)
    {
        $data=Expert::find($id);

        $data->delete();
        return redirect()->back();
    }
}
