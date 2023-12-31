<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class PaymentStatus extends Model
{
    protected $table = "payment_status";

    protected $fillable = [
        'name'
    ];

    public function payments(): HasMany
    {
        return $this->hasMany(Payment::class);
    }
}
