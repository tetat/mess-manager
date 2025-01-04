<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Dining extends Model
{
    use HasFactory;

    protected $fillable = [
        'year_id',
        'month_id',
        'amount',
        'date',
        'description',
    ];
}
