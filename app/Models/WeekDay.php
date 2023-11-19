<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class WeekDay extends Model
{
    use HasFactory;

    public function sessions(): BelongsToMany
    {
        return $this->belongsToMany(Session::class, 'session_days')
            ->withTimestamps();
    }
}
