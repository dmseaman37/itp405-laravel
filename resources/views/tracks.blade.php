@extends('layout')

@section('title', 'Tracks')

@section('main')
<a class="btn btn-primary" href="/tracks/new">Add Track</a>
<table class="table">
	<tr>
		<th>Track</th>
		<th>Album</th>
		<th>Artist</th>
		<th>Price</th>
	</tr>

	@foreach ($tracks as $track)
	<tr>
		<td>
			{{$track->Track}}
		</td>
		<td>
			{{$track->Album}}
		</td>
		<td>
			{{$track->Artist}}
		</td>
		<td>
			{{$track->UnitPrice}}
		</td>
	</tr>
	@endforeach
</table>
@endsection