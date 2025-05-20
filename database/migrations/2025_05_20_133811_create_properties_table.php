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
        Schema::create('properties', function (Blueprint $table) {
        $table->id();
        $table->foreignId('user_id')->constrained()->onDelete('cascade');

        $table->enum('listing_type', ['sell', 'rent', 'pg']);
        $table->enum('property_type', ['residential', 'commercial']);
        $table->string('property_subtype')->nullable(); 

        $table->enum('status', ['draft', 'published'])->default('draft');

        $table->timestamps();
});
    }

    /**
     * Reverse the migrations.
     */
    // public function down(): void
    // {
    //     Schema::dropIfExists('properties');
    // }
};
