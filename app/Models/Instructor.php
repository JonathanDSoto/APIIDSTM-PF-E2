<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Instructor extends Model
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

    public function exerciseTypes(): BelongsToMany
    {
        return $this->belongsToMany(ExerciseType::class, 'instructor_qualifications')
            ->withTimestamps();
    }

    public function sessionDays(): HasMany
    {
        return $this->hasMany(SessionDay::class);
    }
}
