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
        Schema::create('photos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('organization_id');
               // Foreign key constraint
               $table->foreign('organization_id')
               ->references('id')
               ->on('organizations')
               ->onDelete('cascade');
            $table->string('image'); // Path to the image file
            $table->timestamps();
            $table->boolean('status')->default(1)->comment('0=>inactive, 1=>active');
            $table->softDeletes();
    
         
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('photos');
    }
};
