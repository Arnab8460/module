<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropertyLocation extends Model
{
    use HasFactory;

    protected $fillable = [
        'property_id',
        'country',
        'state',
        'city',
        'locality',
        'address',
        'pincode',
        'latitude',
        'longitude',
    ];
     public function property()
    {
        return $this->belongsTo(Property::class);
    }
}
