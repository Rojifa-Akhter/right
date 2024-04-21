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
   
    public function createExpert()
    {
        return view('admin.createExpert');
    }

    public function addExpert(Request $request)
    {
        $data1 = new Expert();

        $image = $request->image;

        $imagename = time() . '.' . $image->getClientOriginalExtension();

        $request->image->move('expertimage', $imagename);
        $data1->image = $imagename;

        $data1->name = $request->name;
        $data1->speciality = $request->speciality;

        $data1->save();

        return redirect()->back();
    }
    public function viewExpert()
    {
        $data1 = Expert::all();
        return view('admin.viewExpert', compact('data1'));
    }
    public function updateExpert($id)
    {
        $data1 = Expert::find($id);

        return view('admin.updateExpert', compact('data1'));
    }
    public function editExpert(Request $request, $id)
    {
        $data1 = Expert::find($id);
        $image = $request->image;

        if ($image) {
            $imagename = time() . '.' . $image->getClientOriginalExtension();

            $request->image->move('expertimage', $imagename);
            $data1->image = $imagename;
        }

        $data1->name = $request->name;
        $data1->speciality = $request->speciality;

        $data1->save();
        return redirect()->back();
    }

    public function deleteExpert($id)
    {
        $data1 = Expert::find($id);

        $data1->delete();
        return redirect()->back();
    }
}
