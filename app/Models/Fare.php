<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Fare extends Model
{
    protected $fillable = [
        'name',
        'fare_period_id',
        'price',
        'description'
    ];

    public function farePeriod(): BelongsTo
    {
        return $this->belongsTo(FarePeriod::class);
    }

    public function payments(): HasMany
    {
        return $this->hasMany(Payment::class);
    }
}
