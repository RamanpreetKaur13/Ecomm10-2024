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
        Schema::create('carousel_items', function (Blueprint $table) {
            $table->id();
            $table->integer('carousel_id');
            $table->integer('item_id');
            $table->string('image_url');
            $table->enum('item_type', ['product', 'link', 'category', 'other']);
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
        Schema::dropIfExists('carousel_items');
    }
};
