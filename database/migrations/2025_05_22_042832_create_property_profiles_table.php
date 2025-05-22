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
            $table->foreignId('property_id')->constrained()->onDelete('cascade'); // Foreign key to main property table

            // Room Details
            $table->tinyInteger('bedrooms')->nullable();
            $table->tinyInteger('bathrooms')->nullable();
            $table->tinyInteger('balconies')->nullable();

            // Area Details
            $table->float('carpet_area', 8, 2)->nullable();
            $table->string('carpet_area_unit')->nullable();
            $table->float('super_builtup_area', 8, 2)->nullable();
            $table->string('super_builtup_area_unit')->nullable();
            $table->float('builtup_area', 8, 2)->nullable();
            $table->string('builtup_area_unit')->nullable();

            // Floor Details
            $table->string('total_floors')->nullable();
            $table->string('property_on_floor')->nullable();

            // Availability
            $table->enum('availability_status', ['Ready to move', 'Under construction'])->nullable();

            // Ownership
            $table->enum('ownership', ['Freehold', 'Leasehold', 'Co-operative society', 'Power of Attorney'])->nullable();

            // Pricing
            $table->float('expected_price', 12, 2)->nullable();
            $table->float('price_per_sqft', 8, 2)->nullable();
            $table->boolean('all_inclusive_price')->default(false);
            $table->boolean('tax_and_govt_charges_included')->default(false); 
            $table->boolean('price_negotiable')->default(false);

            // Additional Pricing Details
            $table->string('maintenance')->nullable();
            $table->string('maintenance_frequency')->nullable(); // Monthly/Yearly

            $table->float('expected_rental', 12, 2)->nullable();
            $table->float('booking_amount', 12, 2)->nullable();
            $table->float('annual_dues_payable', 12, 2)->nullable();
            $table->float('membership_charge', 12, 2)->nullable();

            // Extra
            $table->text('property_description')->nullable();

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
