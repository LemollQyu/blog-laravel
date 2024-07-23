<?php

use Illuminate\Support\Facades\Route;
// panggil model
use App\Models\Post;
use App\Models\Baby;
use App\Http\Controllers\PostController;
use App\Http\Controllers\BabyController;

Route::get('/', function () {
    return view('home', [
		"title" => "Home"
	]);
});

Route::get('/about', function () {
    return 'Hello About';
});

Route::get('/blog', [PostController::class, 'index']);

Route::get('/portfolio', function () {
    return view('portfolio', [
		"title" => "Portfolio",
		"image" => "abstract2.jpg"
		
	]);
});


Route::get('blog/{slug}', function($slug) {
	
	return view('post-page',
	[
		"title" => "post",
		// ini untuk pemanggilan dari model yang di seleksi
		"post" => Post::find($slug)
	]);
});

Route::get('/baby', [BabyController::class, "baby"]);