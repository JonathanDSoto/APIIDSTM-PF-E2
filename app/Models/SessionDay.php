<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class SessionDay extends Model
{
    use HasFactory;

    protected $fillable = [
        'session_id',
        'week_day_id',
        'start_hour',
        'end_hour',
        'current_capacity'
    ];

    public function session(): BelongsTo
    {
        return $this->belongsTo(Session::class);
    }

    public function weekDay(): BelongsTo
    {
        return $this->belongsTo(WeekDay::class);
    }

    public function participants(): BelongsToMany
    {
        return $this->belongsToMany(Customer::class, 'session_participants')
            ->withPivot('subscription_date')
            ->withTimestamps();
    }

    public function attendanceHistory(): BelongsToMany
    {
        return $this->belongsToMany(Customer::class, 'attendance_history')
            ->withPivot('attendance_date', 'attended')
            ->withTimestamps();
    }
}
