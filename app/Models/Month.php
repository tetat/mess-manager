<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Month extends Model
{
    use HasFactory;

    protected $fillable = [
        'year_id',
        'name',
        'days',
        'meal_rate',
        'meal_count',
        'total_cost',
    ];

    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'month_user');
    }

    public function year(): BelongsTo
    {
        return $this->belongsTo(Year::class);
    }

    public function days(): HasMany
    {
        return $this->hasMany(Day::class);
    }

    public function messExpense(): HasOne
    {
        return $this->hasOne(MessExpense::class);
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
