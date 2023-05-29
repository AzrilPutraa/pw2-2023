<?php

namespace Database\Seeders;

use App\Models\Review;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReviewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Review::create([
            'film' => 'The Shawshank Redeption',
            'user' => 'Frank Darabont',
            'rating' => 9.0,
            'review' => 'Film ini secara singkatnya berkisah tentang seorang bankir bernama Andy Dufresne, yang dijatuhi hukuman seumur hidup di Penjara Shawshank atas pembunuhan istri dan selingkuhannya, meskipun ia mengklaim tidak pernah melakukan hal tersebut.',
            'tanggal' => 1994,
        ]);

        Review::create([
            'film' => 'Guardian of the Galaxy',
            'user' => 'James Gun',
            'rating' => 9.7,
            'review' => 'Film ketiga akan melanjutkan kisah petualangan Peter Quill/Star Lord Chris Pratt dan teman-temannya sebagai penjaga galaksi.Masih berduka karena kehilangan Gamora Zoe Saldana, Peter mengumpulkan timnya untuk kembali melindungi alam semesta. Misi kali ini tidaklah mudah, jika tidak berhasil, maka akan menjadi akhir bagi para Guardians.',
            'tanggal' => 2023,
        ]);

        Review::create([
            'film' => 'Fast and Furios 9',
            'user' => 'Justin Lin',
            'rating' => 9.5,
            'review' => 'Dom Toretto (Vin Diesel) menjalani kehidupan yang tenang dengan Letty dan putranya, Brian kecil, tetapi mereka tahu bahwa bahaya selalu mengintai. Kali ini, ancaman itu akan memaksa Dom untuk menghadapi kesalahan dari masa lalunya jika dia ingin menyelamatkan orang yang paling dia cintai. Krunya bergabung bersama untuk menghentikan sesuatu yang dapat menghancurkan dunia. serangan dipimpin oleh pembunuh paling terampil dan pengemudi yang sangat handal dan juga merupakan saudara laki-laki Dom yang ditinggalkan, Jakob (John Cena).',
            'tanggal' => 2021,
        ]);

        Review::create([
            'film' => 'Evil Dead Rise',
            'user' => 'Lee Cronin',
            'rating' => 9.5,
            'review' => 'Evil Dead Rise menceritakan kisah mengejutkan tentang dua saudara perempuan yang terasing yang reuninya dipersingkat oleh munculnya setan yang merasuki manusia, mendorong mereka ke dalam pertempuran utama untuk bertahan hidup saat mereka menghadapi versi keluarga paling mengerikan yang bisa dibayangkan.',
            'tanggal' => 2023,
        ]);

        Review::create([
            'film' => 'Avatar The Way of Water',
            'user' => 'James Cameron',
            'rating' => 9.7,
            'review' => 'Lebih dari satu dekade setelah peristiwa film pertama, "Avatar: The Way of Water" mulai menceritakan kisah keluarga Sully (Jake, Neytiri, dan anak-anak mereka), masalah yang mengikuti mereka, sejauh mana mereka pergi. untuk menjaga keamanan satu sama lain, pertempuran yang mereka lakukan untuk tetap hidup, dan tragedi yang mereka alami.',
            'tanggal' => 2022,
        ]);
    }
}
