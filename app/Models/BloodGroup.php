<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class BloodGroup extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];

    public function customers(): HasMany
    {
        return $this->hasMany(Customer::class);
    }

    public function instructors(): HasMany
    {
        return $this->hasMany(Instructor::class);
    }
}
