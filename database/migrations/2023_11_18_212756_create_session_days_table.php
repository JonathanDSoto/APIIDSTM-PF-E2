<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('session_days', function (Blueprint $table) {
            $table->id();
            $table->foreignId('session_id')
                ->constrained()
                ->cascadeOnDelete()
                ->cascadeOnUpdate();
            $table->foreignId('instructor_id')
                ->constrained()
                ->restrictOnDelete()
                ->cascadeOnUpdate();
            $table->foreignId('week_day_id')
                ->constrained()
                ->restrictOnDelete()
                ->cascadeOnUpdate();
            $table->integer('start_hour', false, true);
            $table->integer('end_hour', false, true);
            $table->integer('current_capacity', false, true);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('session_days');
    }
};
