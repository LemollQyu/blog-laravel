

@extends('layouts.navigasi')


@section('container')

<div class="flex flex-col gap-5 w-3/4 mx-auto">
	<h1 class="text-xl font-bold">Judul = {{ $post["title"] }}</h1>
	<h1 class="text-lg">Author = {{ $post["author"] }}</h1>
	<p class="font-extralight">Body = {{ $post["body"] }}</p>

</div>


<a href="/blog" class="mt-10 border inline-block rounded-lg px-3 py-2"> Kembali </a>


@endsection