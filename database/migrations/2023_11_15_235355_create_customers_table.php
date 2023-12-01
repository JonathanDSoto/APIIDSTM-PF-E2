<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('phone', 10)->unique();
            $table->string('emergency_phone', 10);
            $table->string('email')
                ->nullable()
                ->unique();
            $table->foreignId('blood_group_id')
                ->constrained()
                ->restrictOnDelete()
                ->cascadeOnUpdate();
            $table->boolean('is_active');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
