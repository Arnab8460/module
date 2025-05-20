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
        'super_builtup_area',
        'area_unit',
        'floor_number',
        'total_floors',
        'property_on_floor',
        'availability_status',
        'ownership_type',
        'expected_price',
        'price_negotiable',
        'include_registration',
        'maintenance_charge',
        'maintenance_period',
        'booking_amount',
        'annual_dues_payable',
        'membership_charge',
        'what_makes_unique',
    ];

    public function property()
    {
        return $this->belongsTo(Property::class);
    }
}