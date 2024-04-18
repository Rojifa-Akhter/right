<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Crop extends Model
{
    use HasFactory;
    protected $table = 'crops'; // Specify the table name explicitly
    protected $fillable = ['name','description']; // Specify the fillable fields

}
