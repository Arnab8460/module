<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropertyMedia extends Model
{
    use HasFactory;

    protected $fillable = [
        'property_id',
        'media_type',
        'file_path',
        'caption',
    ];

    public function property()
    {
        return $this->belongsTo(Property::class);
    }
}
