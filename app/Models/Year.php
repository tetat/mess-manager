<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Year extends Model
{
    use HasFactory;

    protected $fillable = [
        'year',
        'meal_rate',
        'meal_count',
        'total_cost',
    ];

    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'user_year');
    }

    public function months(): HasMany
    {
        return $this->hasMany(Month::class);
    }

    public function days(): HasMany
    {
        return $this->hasMany(Day::class);
    }

    public function messExpenses(): HasMany
    {
        return $this->hasMany(MessExpense::class);
    }

    public function dinings(): HasMany
    {
        return $this->hasMany(Dining::class);
    }

    public function bazars(): HasMany
    {
        return $this->hasMany(Bazar::class);
    }
}
