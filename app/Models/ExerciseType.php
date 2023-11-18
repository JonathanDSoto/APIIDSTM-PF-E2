<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class ExerciseType extends Model
{
    protected $fillable = [
        'name'
    ];

    public function instructors(): BelongsToMany
    {
        return $this->belongsToMany(Instructor::class, 'instructor_qualifications')
            ->withTimestamps();
    }
}
