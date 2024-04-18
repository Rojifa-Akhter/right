<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WaterUsage extends Model
{
    protected $table = 'water_usages'; // Specify the table name explicitly
    protected $fillable = ['field_id', 'water_source_id', 'date','quantity']; // Specify the fillable fields
    
    public function field()
    {
        return $this->belongsTo(Field::class);
    }

    // Define the relationship with the WaterSource model
    public function waterSource()
    {
        return $this->belongsTo(WaterSource::class);
    }
}
