<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Season extends Model
{
    protected $table = 'seasons'; // Specify the table name explicitly
    protected $fillable = ['name']; // Specify the fillable fields
}
