<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trip extends Model
{
    use HasFactory;

    public $fillable = [
        'request',
        'driverId',
        'riderId',
        'distance',
        'time'
    ];
}
