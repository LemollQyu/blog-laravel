<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller {

    public function index() {
        return view('post', [
            "title" => "Blog",
            "image" => "abstract1.jpg",
            // memanggil dari model data yang telah di difinisikan
            "posts" => Post::all()
        ]);
    }
}