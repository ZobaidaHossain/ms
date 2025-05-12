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
        Schema::create('helps', function (Blueprint $table) {
            $table->id();
            $table->string('foundation_name')->nullable();
            $table->string('account_number')->nullable();
            $table->string('bank_name')->nullable();
            $table->string('branch')->nullable();
            $table->string('foundation_name_en')->nullable();
            $table->string('account_number_en')->nullable();
            $table->string('bank_name_en')->nullable();
            $table->string('branch_en')->nullable();
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
        Schema::dropIfExists('helps');
    }
};
