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
            $table->string('code', 6);
            $table->string('phone', 10)
                ->nullable()
                ->unique();
            $table->string('emergency_phone', 10);
            $table->string('email')->unique();
            $table->foreignId('blood_group_id')
                ->constrained()
                ->restrictOnDelete()
                ->cascadeOnUpdate();
            $table->boolean('is_active');
            $table->string('password')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
