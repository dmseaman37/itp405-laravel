@extends('layout')

@section('title', 'Genres')

@section('main')

<form action="" method="post">
	@csrf
	<div class="form-group">
		<label for="maintenance">Maintenance</label>
		<input type="checkbox" id="maintenance" name="maintenance" value="maintenance" {{$config->value == "on" ? "checked" : ""}}>
	</div>

	<button type="submit" class="btn btn-primary">
		Save
	</button>
</form>

@endsection