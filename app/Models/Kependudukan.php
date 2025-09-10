<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kependudukan extends Model
{
    use HasFactory;

    protected $fillable = [
        'total',
        'male',
        'female',
        'family_head',
        'death',
    ];

    protected static function booted()
    {
        static::saving(function ($population) {
            $population->total = ($population->male + $population->female) - $population->death;
        });
    }
}
