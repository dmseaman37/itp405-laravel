@extends('layout')

@section('title', 'Add a Track')

@section('main')
<div class="row">
	<div class="col">
  		<form action="" method="post">
  			@csrf
    		<div class="form-group">
      			<label for="name">Name</label>
      			<input type="text" id="name" name="name" class="form-control" value="{{old('name')}}">
      			<small class="text-danger">{{$errors->first('name')}}</small>
    		</div>

    		<div class="form-group">
      			<label for="album">Album</label>
      			<select id="album" name="album" class="form-control" value="{{old('album')}}">
      				<option selected disabled>-- Select One --</option>
      				@foreach ($albums as $album)
      					<option value="{{$album->AlbumId}}" {{$album->AlbumId == old('album') ? "selected" : ""}}>{{$album->Album}}</option>
      				@endforeach
      			</select>
      			<small class="text-danger">{{$errors->first('album')}}</small>
    		</div>

    		<div class="form-group">
      			<label for="media-type">Media Type</label>
      			<select id="media-type" name="mediaType" class="form-control" value="{{old('media-type')}}">
      				<option selected disabled>-- Select One --</option>
      				@foreach ($mediaTypes as $mediaType)
      					<option value="{{$mediaType->MediaTypeId}}" {{$mediaType->MediaTypeId == old('media-type') ? "selected" : ""}}>{{$mediaType->MediaType}}</option>
      				@endforeach
      			</select>
      			<small class="text-danger">{{$errors->first('media-type')}}</small>
    		</div>

    		<div class="form-group">
      			<label for="genre">Genres</label>
      			<select id="genre" name="genre" class="form-control" value="{{old('genre')}}">
      				<option selected disabled>-- Select One --</option>
      				@foreach ($genres as $genre)
      					<option value="{{$genre->GenreId}}" {{$genre->GenreId == old('genre') ? "selected" : ""}}>{{$genre->Genre}}</option>
      				@endforeach
      			</select>
      			<small class="text-danger">{{$errors->first('genre')}}</small>
    		</div>

    		<div class="form-group">
      			<label for="composer">Composer</label>
      			<input type="text" id="composer" name="composer" class="form-control" value="{{old('composer')}}">
      			<small class="text-danger">{{$errors->first('composer')}}</small>
    		</div>

    		<div class="form-group">
      			<label for="milliseconds">Milliseconds</label>
      			<input type="number" id="milliseconds" name="milliseconds" class="form-control" value="{{old('milliseconds')}}">
      			<small class="text-danger">{{$errors->first('milliseconds')}}</small>
    		</div>

    		<div class="form-group">
      			<label for="bytes">Bytes</label>
      			<input type="number" id="bytes" name="bytes" class="form-control" value="{{old('bytes')}}">
      			<small class="text-danger">{{$errors->first('bytes')}}</small>
    		</div>

    		<div class="form-group">
      			<label for="unit-price">Unit Price</label>
      			<input type="number" id="unit-price" name="unitPrice" class="form-control" value="{{old('unit-price')}}">
      			<small class="text-danger">{{$errors->first('unit-price')}}</small>
    		</div>

    		<button type="submit" class="btn btn-primary">
      			Save
    		</button>
  		</form>
	</div>
</div>
@endsection