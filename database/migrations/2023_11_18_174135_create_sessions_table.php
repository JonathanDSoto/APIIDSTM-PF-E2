<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('sessions', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50);
            $table->integer('start_hour');
            $table->integer('end_hour');
            $table->foreignId('instructor_id')
                ->constrained()
                ->restrictOnDelete()
                ->cascadeOnUpdate();
            $table->foreignId('exercise_type_id')
                ->constrained()
                ->restrictOnDelete()
                ->cascadeOnUpdate();
            $table->integer('current_capacity');
            $table->integer('max_capacity');
            $table->text('description')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('sessions');
    }
};
