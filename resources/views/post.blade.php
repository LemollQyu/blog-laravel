@extends('layouts.navigasi')


@section('container')

		<h1 class="underline text-light">Halaman Blog untuk post</h1>
		<h1>{{ $title }}</h1>
		
		<div class="w-[100px] h-[100px] rounded-full border">
			<img src="img/{{ $image; }}" class="w-full h-full rounded-full object-cover">
		</div>
		
		<div class="mt-10 border px-10 w-3/4 mx-auto">
			@foreach ($posts as $post)
			<div class="border mt-5">
				<a href="/blog/{{ $post['slug'] }}" class="font-bold text-xl">{{ $post['title'] }}</a>
				<h2 class="font-bold" >Nama: {{ $post['author'] }}</h2>
				<p class="font-extralight">{{ $post['body'] }}</p>
			</div>
			@endforeach
		</div>
		
@endsection
