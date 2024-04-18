<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Soil extends Model
{
    // use HasFactory;
    protected $table = 'soils'; // Specify the table name explicitly
    protected $fillable = ['soil_type','pH','nitrogen','phosphorus','potassium','magnesium','calcium'];
    
}
