<?php

namespace App\Http\Controllers;

use App\Models\Weather;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class WeatherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $weatherResponse = [];
        if($request->isMethod("post")){
            // echo "<h1>Sorm Submitted</h1>";
            // die;
            $cityName = $request->city;

           $response = Http::withHeaders([
                "X-RapidAPI-Host" =>"weatherapi-com.p.rapidapi.com",
                "X-RapidAPI-Key" =>"2c754b693cmsh1451cae70ccc74ap181ca4jsnfd1d35469c36"
            ])->get("https://weatherapi-com.p.rapidapi.com/city/{$cityName}");
            // echo "<pre>";
            // https://weatherapi-com.p.rapidapi.com/current.json weatherapi-com.p.rapidapi.com
            // print_r($response->json());
            $weatherResponse = $response->json();
        }
        return view("weather",[
            "data" => $weatherResponse]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Weather  $weather
     * @return \Illuminate\Http\Response
     */
    public function show(Weather $weather)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Weather  $weather
     * @return \Illuminate\Http\Response
     */
    public function edit(Weather $weather)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Weather  $weather
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Weather $weather)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Weather  $weather
     * @return \Illuminate\Http\Response
     */
    public function destroy(Weather $weather)
    {
        //
    }
}
