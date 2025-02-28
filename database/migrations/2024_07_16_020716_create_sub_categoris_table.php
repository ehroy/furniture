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
        Schema::create('sub_categoris', function (Blueprint $table) {
            $table->id();
            $table->integer('category_id');
            $table->string('image')->default('https://placehold.co/400x400?text=No+image');
            $table->string('name');
            $table->boolean('active')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sub_categoris');
    }
};
