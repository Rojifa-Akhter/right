<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Crop extends Model
{
    use HasFactory;
    protected $table = 'crops'; // Specify the table name explicitly
  
    protected $fillable = ['name', 'description', 'soil_id', 'location_id', 'water_id', 'season_id'];

    // Define relationships with other tables
    public function soil()
    {
        return $this->belongsTo(Soil::class);
    }

    public function location()
    {
        return $this->belongsTo(Location::class);
    }

    public function water()
    {
        return $this->belongsTo(Water::class);
    }

    public function season()
    {
        return $this->belongsTo(Season::class);
    }
}
