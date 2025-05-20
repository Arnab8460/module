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
       Schema::create('property_profiles', function (Blueprint $table) {
            $table->id();
            $table->foreignId('property_id')->constrained()->onDelete('cascade');

            // Room Details
            $table->integer('bedrooms')->nullable();
            $table->integer('bathrooms')->nullable();
            $table->integer('balconies')->nullable();

            // Area Details
            $table->float('carpet_area')->nullable(); // in sq.ft
            $table->float('super_builtup_area')->nullable(); // in sq.ft
            $table->enum('area_unit', ['sqft', 'sqm', 'sqyd'])->default('sqft');

            // Floor Details
            $table->integer('floor_number')->nullable();
            $table->integer('total_floors')->nullable();
            $table->string('property_on_floor')->nullable(); // e.g. "Ground Floor", "1st Floor"

            // Status & Ownership
            $table->enum('availability_status', ['ready_to_move', 'under_construction'])->nullable();
            $table->string('ownership_type')->nullable(); // e.g. Freehold, Leasehold, etc.

            // Price Details
            $table->float('expected_price')->nullable();
            $table->boolean('price_negotiable')->default(false);
            $table->boolean('include_registration')->default(false);

            // Additional Pricing
            $table->float('maintenance_charge')->nullable();
            $table->enum('maintenance_period', ['monthly', 'quarterly', 'yearly'])->nullable();
            $table->float('booking_amount')->nullable();
            $table->float('annual_dues_payable')->nullable();
            $table->float('membership_charge')->nullable();

            // Unique Selling Points
            $table->text('what_makes_unique')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('property_profiles');
    }
};
