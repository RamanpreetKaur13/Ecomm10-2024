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
        Schema::create('brands', function (Blueprint $table) {
            $table->id();

            $table->string('brand_name');
            $table->string('brand_logo');
            $table->string('brand_image');
            $table->float('brand_discount');
            $table->text('brand_description');
            $table->string('brand_url');
            $table->string('meta_title');
            $table->string('meta_keyword');
            $table->text('meta_description');
            $table->tinyInteger('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('brands');
    }
};
