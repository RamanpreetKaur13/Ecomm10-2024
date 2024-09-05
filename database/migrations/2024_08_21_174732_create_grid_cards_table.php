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
        Schema::create('grid_cards', function (Blueprint $table) {
            $table->id();
            $table->integer('homepage_section_id');
            $table->string('title');
            $table->string('subtitle');
            $table->string('image_url');
            $table->text('link_url');
            $table->integer('display_order');
            $table->boolean('status')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('grid_cards');
    }
};
