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
        Schema::create('goals', function (Blueprint $table) {
            $table->id();
            $table->longText('subtitle')->nullable();
            $table->longText('subtitle_en')->nullable();
            $table->String('title')->nullable();
            $table->string('serial')->nullable();
            $table->String('title_en')->nullable();
            $table->string('serial_en')->nullable();
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
        Schema::dropIfExists('goals');
    }
};
