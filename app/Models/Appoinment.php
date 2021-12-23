<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appoinment extends Model
{
    use HasFactory;
    protected $guarded = [];

    // Before inserted the getting date should be cast first
    protected $casts = [
    	'date' => 'datetime',
    	'time' => 'datetime',
    ];
}
