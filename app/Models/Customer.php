<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'phone',
        'emergency_phone',
        'email',
        'blood_type_id',
        'is_active'
    ];

    public function bloodGroup(): BelongsTo
    {
        return $this->belongsTo(BloodGroup::class);
    }
}
