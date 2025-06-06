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
        Schema::create('videos', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('title_en')->nullable();
            $table->string('sub_title')->nullable();
            $table->string('sub_title_en')->nullable();
            $table->string('video')->nullable();
            $table->string('link')->nullable();
            $table->string('category')->nullable();
            $table->string('category_en')->nullable();
            $table->longText('description')->nullable();
            $table->longText('description_en')->nullable();
            $table->boolean('status')->default(1)->comment('0=>inactive, 1=>active');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('videos');
    }
};
