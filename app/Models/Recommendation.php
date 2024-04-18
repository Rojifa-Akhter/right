<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recommendation extends Model
{
    use HasFactory;
    use HasFactory;

    protected $fillable = ['field_id', 'crop_id', 'soil_type_id', 'weather_condition_id'];

    // Define relationships
    public function field()
    {
        return $this->belongsTo(Field::class);
    }

    public function crop()
    {
        return $this->belongsTo(Crop::class);
    }

    public function soilType()
    {
        return $this->belongsTo(Soil::class);
    }

    public function weatherCondition()
    {
        return $this->belongsTo(Weather::class);
    }
}
