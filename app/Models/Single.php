<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Carbon\Carbon;


class Single extends Model
{
    use HasFactory;
    
    protected $guarded = [];
    // protected $fillable = [
    //     'date',
    // ];
    // Before inserted the getting date should be cast first
    protected $casts = [
    	'date' => 'date',
    ];

    // public function setDateAttribute($date)
    // {
    //     return Carbon::createFromFormat('Y-m-d', $date)->format('Y-m-d');
    // }
}
