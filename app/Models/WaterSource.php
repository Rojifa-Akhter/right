<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WaterSource extends Model
{
    protected $table = 'water_sources'; // Specify the table name explicitly
    protected $fillable = ['name','capacity']; // Specify the fillable fields

}
