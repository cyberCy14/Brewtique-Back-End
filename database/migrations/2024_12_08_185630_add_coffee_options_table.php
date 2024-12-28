<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.4
     */
    public function up(): void
    {
        Schema::create('coffee_options', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('img');
            $table->string('category');
            $table->text('description');
            $table->text('description2');
            $table->integer('price');
            $table->string('rating');
            $table->string('link');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('coffee_options');
    }
};
