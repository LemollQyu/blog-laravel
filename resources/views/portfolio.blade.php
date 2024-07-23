@extends('layouts.navigasi')


@section('container')

		<h1 class="text-xl font-bold text-light">Halaman Portfolio untuk pamer, simple aja, hehe</h1>
		<h1>{{ $title }}</h1>
		
		<div class="w-[100px] h-[100px] rounded-full border">
			<img src="img/{{ $image; }}" class="w-full h-full rounded-full object-cover">
		</div>
		
@endsection
