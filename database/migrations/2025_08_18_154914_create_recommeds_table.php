<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('recommeds', function (Blueprint $table) {
            $table->id();
            $table->enum('problem', ['a', 'b', 'c', 'd']);
            $table->enum('environment', ['a', 'b', 'c', 'd']);
            $table->enum('work', ['a', 'b', 'c', 'd']);
            $table->enum('subject', ['a', 'b', 'c', 'd']);
            $table->enum('motivate', ['a', 'b', 'c', 'd']);
            $table->enum('stress', ['a', 'b', 'c', 'd']);
            $table->enum('skill', ['a', 'b', 'c', 'd']);
            $table->enum('success', ['a', 'b', 'c', 'd']);
            $table->enum('personality', ['a', 'b', 'c', 'd']);
            $table->enum('creativity', ['a', 'b', 'c', 'd']);
            $table->foreignId('user_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('recommeds');
    }
};
