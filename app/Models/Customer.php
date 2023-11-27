<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'phone',
        'emergency_phone',
        'email',
        'blood_group_id',
        'is_active'
    ];

    public function bloodGroup(): BelongsTo
    {
        return $this->belongsTo(BloodGroup::class);
    }

    public function payments(): HasMany
    {
        return $this->hasMany(Payment::class);
    }

    public function subscribedSessions(): BelongsToMany
    {
        return $this->belongsToMany(SessionDay::class, 'session_participants')
            ->withPivot('subscription_date')
            ->withTimestamps();
    }

    public function attendedSessions(): BelongsToMany
    {
        return $this->belongsToMany(SessionDay::class, 'attendance_history')
            ->withPivot('attendance_date', 'attended')
            ->withTimestamps();
    }

    public function checkingTimes(): HasMany
    {
        return $this->hasMany(TimeCheck::class);
    }
}
