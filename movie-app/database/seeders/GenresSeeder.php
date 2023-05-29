<?php

namespace Database\Seeders;

use App\Models\Genre;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GenresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Genre::create([
            'nama' => 'Aksi',
            'deskripsi' => 'Genre Aksi adalah genre film yang biasanya sangat menegangkan dan seru pada saat ditonton.',
        ]);

        Genre::create([
            'nama' => 'Romantis',
            'deskripsi' => 'Genre Romantis adalah genre film yang menceritakan kisah cinta yang tercipta di antara para tokohnya.',
        ]);

        Genre::create([
            'nama' => 'Animasi',
            'deskripsi' => 'Genre Animasi adalah genre film yang merupakan karya tangan/gambar yang bergerak gerak.',
        ]);

        Genre::create([
            'nama' => 'Komedi',
            'deskripsi' => 'Genre Komedi adalah genre film yang dimana penekanan utama adalah pada kelucuan.',
        ]);

        Genre::create([
            'nama' => 'Horor',
            'deskripsi' => 'Genre Horor adalah genre film yang bercerita tentang rekan yang dimaksud untuk menimbulkan perasaan takut atau ngeri bagi penontonnya.',
        ]);

        
    }
}
