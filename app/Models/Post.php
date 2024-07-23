<?php

namespace App\Models;



class Post
{
   private static $blog_posts = [
        [
            "title" => "Judul Pertama",
            "slug" => "judul-pertama",
            "author" => "nama satu",
            "body" => "There weren't supposed to be dragons flying in the sky. First and foremost, dragons didn't exist. They were mythical creatures from fantasy books like unicorns. This was something that Pete knew in his heart to be true so he was having a difficult time acknowledging that there were actually fire-breathing dragons flying in the sky above him annas."
        ],
        [
            "title" => "Judul Kedua",
            "slug" => "judul-kedua",
            "author" => "Nama Kedua",
            "body" => "It was difficult to explain to them how the diagnosis of certain death had actually given him life. While everyone around him was in tears and upset, he actually felt more at ease. The doctor said it would be less than a year. That gave him a year to live, something he'd failed to do with his daily drudgery of a routine that had passed as life until then."
        ],
        [
            "title" => "Judul Ketiga",
            "slug" => "judul-ketiga",
            "author" => "Nama Ketiga",
            "body" => "It was difficult to explain to them how the diagnosis of certain death had actually given him life. While everyone around him was in tears and upset, he actually felt more at ease. The doctor said it would be less than a year. That gave him a year to live, something he'd failed to do with his daily drudgery of a routine that had passed as life until then."
        ]
    ];

    public static function all() {
        return collect(self::$blog_posts);

    }

    public static function find($slug) {

       $posts = static::all();
        


        return $posts->firstWhere("slug", $slug);
        
    }

}
