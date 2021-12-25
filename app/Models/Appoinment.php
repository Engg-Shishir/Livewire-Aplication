<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Appoinment extends Model
{
    use HasFactory;
    protected $guarded = [];

    // Before inserted the getting date should be cast first
    protected $casts = [
    	'date' => 'datetime',
    	'time' => 'datetime',
    ];

    // Access Client data
    public function client()
    {
        return $this->belongsTo(Client::class);
    }

}
