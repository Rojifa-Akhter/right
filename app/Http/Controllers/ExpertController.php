<?php

namespace App\Http\Controllers;
use App\Models\Expert;

use Illuminate\Http\Request;

class ExpertController extends Controller
{
    public function index()
    {
        $data1=Expert::all();
        return view('home.expert', compact('data1'));
    }
}
