@extends('layout')

@section('title', 'Genres')

@section('main')
<table class="table">
	@foreach($genres as $genre)
	<tr>
		<td>
			<a href="tracks?genre={{urlencode($genre->Name)}}">{{$genre->Name}}</a>
		</td>
		<td>
			<a class="btn btn-primary justify-contend-end" href="/genres/{{$genre->GenreId}}/edit">Edit</a>
		</td>
	</tr>
	@endforeach
</table>
@endsection