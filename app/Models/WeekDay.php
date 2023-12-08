<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class WeekDay extends Model
{
    public function sessionDays(): HasMany
    {
        return $this->hasMany(SessionDay::class);
    }
}
