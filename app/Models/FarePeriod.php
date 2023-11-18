<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class FarePeriod extends Model
{
    protected $fillable = [
        'name'
    ];

    public function fare(): HasOne
    {
        return $this->hasOne(Fare::class);
    }
}
