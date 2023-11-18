<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('instructors', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('phone', 50)->unique();
            $table->string('emergency_phone', 50);
            $table->string('email')
                ->nullable()
                ->unique();
            $table->foreignId('blood_group_id')
                ->constrained()
                ->restrictOnDelete()
                ->cascadeOnUpdate();
            $table->dateTime('start_date');
            $table->boolean('is_active');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('instructors');
    }
};
