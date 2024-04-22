<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    protected $fillable =[
        'expert_id',
        'name',
        'email',
        'phone',
        'date'
    ];

    public function expert()
    {
        return $this->hasOne('App\Models\Expert','id','expert_id');
    }
}
