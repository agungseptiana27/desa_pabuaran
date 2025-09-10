<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VisiMisi extends Model
{
    use HasFactory;

    protected $fillable = [
        'visi',
        'misi',
    ];

    protected $casts = [
        'misi' => 'array', // JSON ke array otomatis
    ];
}
