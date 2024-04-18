<?php

namespace App\Http\Controllers;

use App\Models\Recommendation;
use App\Models\Weather;
use App\Models\Soil;
use App\Models\Crop;

use Illuminate\Http\Request;

class RecommendationController extends Controller
{
    public function crop()
    {
        return $this->belongsTo(Crop::class);
    }

    public function soilType()
    {
        return $this->belongsTo(Soil::class);
    }

    public function climateCondition()
    {
        return $this->belongsTo(Weather::class);
    }

    

   

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Recommendation  $recommendation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Recommendation $recommendation)
    {
        //
    }
}
