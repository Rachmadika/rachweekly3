<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Berita;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        Berita::firstOrCreate(
            ['slug' => 'mahasigma-yang-sangat-baik-hati-dan-rajin-menabung'],
            [
                'judul' => 'Mahasigma yang sangat baik hati dan rajin menabung',
                'penulis' => 'Rachmadika',
                'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit...',
                'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea laborum facere ratione consequatur non voluptatum suscipit cum pariatur perferendis magni deleniti est cumque, magnam odio rem distinctio quis ipsa natus quas exercitationem ipsum quidem.'
            ]
        );

        Berita::firstOrCreate(
            ['slug' => 'dosen-ti'],
            [
                'judul' => 'Dosen TI',
                'penulis' => 'Rachmadika',
                'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit...',
                'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea laborum facere ratione consequatur non voluptatum suscipit cum pariatur perferendis magni deleniti est cumque.'
            ]
        );

        DB::table('users')->insert([
            'name' => Str::random(10),
            'email' => Str::random(10).'@gmail.com',
            'password' => Hash::make('password'),
        ]);
    }
}
