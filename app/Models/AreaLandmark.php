<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AreaLandmark extends Model
{
    use HasFactory;

    protected $fillable = [
        'city_id',
        'name',
        'coordinates',
    ];

    public function city()
    {
        return $this->belongsTo(City::class);
    }
}
