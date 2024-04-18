<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Field extends Model
{
    protected $table = 'fields'; // Specify the table name explicitly
    protected $fillable = ['name','location','area']; // Specify the fillable fields

    public function location()
    {
        return $this->belongsTo(location::class);
    }
}
