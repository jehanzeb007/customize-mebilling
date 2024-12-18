<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Testimonial extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'position' , 'testimonial', 'rating', 'image'];  // Correct field name

    public function getImageAttribute($value)
    {
        return $value ? 'storage/' . $value : 'assets/images/meBilling.png';
    }
}

