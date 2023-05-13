<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genremovie extends Model
{
    use HasFactory;
    protected $table='genremovie';
    protected $fillable=[
        'id',
        'movie_id',
        'genre_id',
    ];
}
