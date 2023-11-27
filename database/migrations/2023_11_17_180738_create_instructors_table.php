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
            $table->integer('phone', false, true)->unique();
            $table->integer('emergency_phone', false, true);
            $table->string('email')
                ->nullable()
                ->unique();
            $table->foreignId('blood_group_id')
                ->constrained()
                ->restrictOnDelete()
                ->cascadeOnUpdate();
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('instructors');
    }
};
