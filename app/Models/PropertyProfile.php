<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropertyProfile extends Model
{
    use HasFactory;

    protected $fillable = [
        'property_id',
        'bedrooms',
        'bathrooms',
        'balconies',
        'carpet_area',
        'carpet_area_unit',
        'super_builtup_area',
        'super_builtup_area_unit',
        'builtup_area',
        'builtup_area_unit',
        'total_floors',
        'property_on_floor',
        'availability_status',
        'ownership',
        'expected_price',
        'price_per_sqft',
        'all_inclusive_price',
        'tax_and_govt_charges_included',
        'price_negotiable',
        'maintenance',
        'maintenance_frequency',
        'expected_rental',
        'booking_amount',
        'annual_dues_payable',
        'membership_charge',
        'property_description',
    ];

    public function property()
    {
        return $this->belongsTo(Property::class);
    }
}