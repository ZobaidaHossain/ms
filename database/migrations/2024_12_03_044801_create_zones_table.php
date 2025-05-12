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
        Schema::create('zones', function (Blueprint $table) {
            $table->id();
            $table->longText('description')->nullable();
            $table->longText('description_en')->nullable();
            $table->longText('link')->nullable();;
            $table->string('image')->nullable();
            $table->longText('image_title')->nullable();
            $table->longText('image_title_en')->nullable();
            $table->boolean('status')->default(1)->comment('0=>inactive, 1=>active');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('zones');
    }
};
