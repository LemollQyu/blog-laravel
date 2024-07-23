@extends("./baby/layouts/navigasi")

@section("container")
	<p class="text-blue-600">Hallo ini dari home</p>
	@foreach ($test as $t)
	<div class="flex flex-col gap-5 w-3/4 mx-auto">
	<h1 class="text-xl font-bold">Judul = {{ $t["nama"] }}</h1>
	<h1 class="text-lg">Prodi = {{ $t["prodi"] }}</h1>
	<p class="font-extralight">Pesan = {{ $t["pesan"] }}</p>
	

</div>
@endforeach
@endsection