<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;
    protected $table = 'locations'; // Specify the table name explicitly
    protected $fillable = ['country_name','district_name','city_name']; // Specify the fillable fields


}
