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
        Schema::create('property_media', function (Blueprint $table) {
            $table->id();

            $table->foreignId('property_id')->constrained()->onDelete('cascade');
            $table->enum('media_type', ['photo', 'video', 'voiceover']);
            $table->string('file_path');
            $table->string('caption')->nullable(); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('property_media');
    }
};
