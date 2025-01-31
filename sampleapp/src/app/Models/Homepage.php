<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Homepage extends Model
{
    use HasFactory;
    protected $fillable = [
        'purchase_date',
        'driver_id',
        'driver_name',
        'username',
        'user_id',
        'start_time',
        'end_time',
        'titik mulai',
        'titik tujuan',
        'sarana transportasi',
        'starting_date',
        'ending_date'  
    ];
}
