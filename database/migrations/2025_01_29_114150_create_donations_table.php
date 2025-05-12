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
        Schema::create('donations', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('title_en')->nullable();
            $table->string('description')->nullable();
            $table->string('description_en')->nullable();
            $table->string('account_number')->nullable();
            $table->string('account_number_en')->nullable();
            $table->string('branch')->nullable();
            $table->string('branch_en')->nullable();
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
        Schema::dropIfExists('donations');
    }
};
