<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;
    protected $fillable=[
        'id',
        'adult',
        'backdrop_path',
        'belongs_to_collection',
        'budget',
        'homepage',
        'imdb_id',
        'original_language',
        'original_title',
        'overview',
        'popularity',
        'poster_path',
        'release_date',
        'revenue',
        'runtime',
        'status',
        'tagline',
        'title',
        'video',
        'vote_average',
        'vote_count',
    ];
    public function genres()
    {
        return $this->belongsToMany(Genre::class, 'genremovie');
    }

}
