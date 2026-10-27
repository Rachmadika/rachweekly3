<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Berita;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        Berita::create([
            'judul' => 'Mahasigma yang sangat baik hati dan rajin menabung',
            'slug' => 'mahasigma-yang-sangat-baik-hati-dan-rajin-menabung',
            'penulis' => 'Rachmadika',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit...',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea laborum facere ratione consequatur non voluptatum suscipit cum pariatur perferendis magni deleniti est cumque, magnam odio rem distinctio quis ipsa natus quas exercitationem ipsum quidem.'
        ]);

        Berita::create([
            'judul' => 'Dosen TI',
            'slug' => 'dosen-ti',
            'penulis' => 'Rachmadika',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit...',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea laborum facere ratione consequatur non voluptatum suscipit cum pariatur perferendis magni deleniti est cumque.'
        ]);
    }
}
