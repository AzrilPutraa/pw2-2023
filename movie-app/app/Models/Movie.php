<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    protected $movies = [
        [
            'no' => 1,
            'judul' => 'The Shawshank Redeption',
            'poster' => 'image.png',
            'genre' => 'Drama',
            'negara' => 'USA',
            'tahun' => 1994,
            'rating' => 9,8,
        ],
        [
            'no' => 2,
            'judul' => 'Guardian of the Galaxy',
            'poster' => 'image.png',
            'genre' => 'Action',
            'negara' => 'New Zealand',
            'tahun' => 2023,
            'rating' => 9,9,
        ],
        [
            'no' => 3,
            'judul' => 'Fast and Furios 9',
            'poster' => 'image.png',
            'genre' => 'Action',
            'negara' => 'USA',
            'tahun' => 2021,
            'rating' => 9,7,
        ],
        [
            'no' => 4,
            'judul' => 'Evil Dead Rise',
            'poster' => 'image.png',
            'genre' => 'Horor',
            'negara' => 'USA',
            'tahun' => 2023,
            'rating' => 9,6,
        ],
        [
            'no' => 5,
            'judul' => 'Avatar The Way of Water',
            'poster' => 'image.png',
            'genre' => 'Adventure',
            'negara' => 'USA',
            'tahun' => 2022,
            'rating' => 9,8,
        ],
    ];

    public function getAllMovies()
    {
        return $this->movies;
    }
}
