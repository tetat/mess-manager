<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class MessExpense extends Model
{
    use HasFactory;

    protected $fillable = [
        'year_id',
        'month_id',
        'house_rent',
        'electricity_bill',
        'gas_bill',
        'internet_bill',
        'water_bill',
    ];
}
