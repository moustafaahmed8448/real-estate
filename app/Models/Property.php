<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'price',
        'location',
        'space',
        'type',
        'status',
        'description',
        'user_id',  // Allow user_id to be mass-assigned
    ];

    public function features()
    {
        return $this->belongsToMany(Feature::class, 'property_feature');
    }

    public function images()
    {
        return $this->hasMany(Image::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
