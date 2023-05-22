<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    use HasFactory;

    protected $genres = [
        [
            'no' => 1,
            'genre' => 'Aksi',
            'deskripsi' => 'Genre Aksi adalah genre film yang biasanya sangat menegangkan dan seru pada saat ditonton.',
        ],
        [
            'no' => 2,
            'genre' => 'Romantis',
            'deskripsi' => 'Genre Romantis adalah genre film yang menceritakan kisah cinta yang tercipta di antara para tokohnya.',
        ],
        [
            'no' => 3,
            'genre' => 'Animasi',
            'deskripsi' => 'Genre Animasi adalah genre film yang merupakan karya tangan/gambar yang bergerak gerak.',
        ],
        [
            'no' => 4,
            'genre' => 'Komedi',
            'deskripsi' => 'Genre Komedi adalah genre film yang dimana penekanan utama adalah pada kelucuan.',
        ],
        [
            'no' => 5,
            'genre' => 'Horor',
            'deskripsi' => 'Genre Horor adalah genre film yang bercerita tentang rekan yang dimaksud untuk menimbulkan perasaan takut atau ngeri bagi penontonnya.',
        ],
    ];

    public function getAllGenres()
    {
        return $this->genres;
    }
}
