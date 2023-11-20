<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class TimeCheck extends Model
{
    use HasFactory;

    protected $table = 'time_check';

    protected $fillable = [
        'customer_id',
        'time_in',
        'time_out',
        'check_date'
    ];

    public function customer(): BelongsTo
    {
        return $this->belongsTo(Customer::class);
    }
}
