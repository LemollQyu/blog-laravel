<?php

namespace App\Models;

class Baby {
    private static $data = [
        [
            "nama" => "Annas Aulia Rahman",
            "prodi" => "Teknik Informatika",
            "pesan" => "Iangat waktu"
        ],
        [
            "nama" => "Alisa Qotru Nada",
            "prodi" => "Akuntansi",
            "pesan" => "KPOP"
        ],
        
    ];

    public static function all() {
        return self::$data;
    }

}

