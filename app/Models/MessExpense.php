<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

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

    public function year(): BelongsTo
    {
        return $this->belongsTo(Year::class);
    }

    public function month(): BelongsTo
    {
        return $this->belongsTo(Month::class);
    }
}
