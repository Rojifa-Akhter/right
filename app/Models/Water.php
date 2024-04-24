<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Water extends Model
{
    use HasFactory;
    protected $table = 'waters'; // Specify the table name explicitly
    protected $fillable = ['source_name','capacity','quantity','date'];
 
}
