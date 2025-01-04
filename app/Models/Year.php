<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Year extends Model
{
    use HasFactory;

    protected $fillable = [
        'year',
        'meal_rate',
        'meal_count',
        'total_cost',
    ];
}
