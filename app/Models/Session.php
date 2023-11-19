<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Session extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'start_hour',
        'end_hour',
        'instructor_id',
        'exercise_type_id',
        'current_capacity',
        'max_capacity',
        'description'
    ];

    public function instructor(): BelongsTo
    {
        return $this->belongsTo(Instructor::class);
    }

    public function exerciseType(): BelongsTo
    {
        return $this->belongsTo(ExerciseType::class);
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

    public function sessionDays(): BelongsToMany
    {
        return $this->belongsToMany(WeekDay::class, 'session_days')
            ->withTimestamps();
    }
}
