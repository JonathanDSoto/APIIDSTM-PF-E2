<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('time_check', function (Blueprint $table) {
            $table->id();
            $table->foreignId('customer_id')
                ->nullable()
                ->constrained()
                ->nullOnDelete()
                ->cascadeOnUpdate();
            $table->time('time_in');
            $table->time('time_out')->nullable();
            $table->date('check_date');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('time_check');
    }
};
