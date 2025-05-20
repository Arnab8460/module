<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'listing_type',
        'property_type',
        'property_subtype',
        'status',
    ];

    // Relationships
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function location()
    {
        return $this->hasOne(PropertyLocation::class);
    }

    public function profile()
    {
        return $this->hasOne(PropertyProfile::class);
    }

    public function media()
    {
        return $this->hasMany(PropertyMedia::class);
    }

    public function amenities()
    {
        return $this->hasMany(PropertyAmenity::class);
    }
}

