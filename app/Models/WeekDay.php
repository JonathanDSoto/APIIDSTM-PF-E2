<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class WeekDay extends Model
{
    use HasFactory;

    // public function sessions(): BelongsToMany
    // {
    //     return $this->belongsToMany(Session::class, 'session_days')
    //         ->withTimestamps();
    // }

    public function sessionDays(): HasMany
    {
        return $this->hasMany(SessionDay::class);
    }
}
