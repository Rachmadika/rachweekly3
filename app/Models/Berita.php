<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    private static $data_berita = [
        [
            "judul" => "Mahasigma yang sangat baik hati dan rajin menabung ",
            "slug" => "mahasigma-yang-sangat-baik-hati-dan-rajin-menabung",
            "penulis" => "Rachmadika",
            "konten" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ea laborum facere ratione consequatur non voluptatum suscipit cum pariatur perferendis magni deleniti est cumque, magnam odio rem distinctio quis ipsa natus quas exercitationem ipsum quidem. Error velit nisi architecto ducimus ex aut vel quidem dolorem natus, iste, sit doloribus? Ad maxime veniam velit repellat, optio voluptatum. Neque placeat ea ratione necessitatibus ullam voluptatibus tempore at, excepturi veritatis dolore itaque corrupti debitis asperiores harum modi fuga quis beatae totam alias a qui inventore numquam. Soluta ex dolore molestias quaerat libero assumenda, nostrum ut, sed nesciunt repellat iste magni, obcaecati dicta repellendus totam."
        ],
        [
            "judul" => "Dosen TI",
            "slug" => "dosen-ti",
            "penulis" => "rachmadika",
            "konten" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ea laborum facere ratione consequatur non voluptatum suscipit cum pariatur perferendis magni deleniti est cumque, magnam odio rem distinctio quis ipsa natus quas exercitationem ipsum quidem. Error velit nisi architecto ducimus ex aut vel quidem dolorem natus, iste, sit doloribus? Ad maxime veniam velit repellat, optio voluptatum. Neque placeat ea ratione necessitatibus ullam voluptatibus tempore at, excepturi veritatis dolore itaque corrupti debitis asperiores harum modi fuga quis beatae totam alias a qui inventore numquam. Soluta ex dolore molestias quaerat libero assumenda, nostrum ut, sed nesciunt repellat iste magni, obcaecati dicta repellendus totam."
        ]
    ];

    public static function ambilberita()
    {
        return self::$data_berita;
    }

    public static function getBerita($slug)
    {
        $beritas = self::$data_berita;

        $berita = [];
        foreach($beritas as $b)
        {
            if($b["slug"] === $slug)
            {
                $berita = $b;
            }
        }

        return $berita;
    }

    public static function getTitle($slug)
    {
        $berita = self::getBerita($slug);

        return $berita["judul"];
    }

}
