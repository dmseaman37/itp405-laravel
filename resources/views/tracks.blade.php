<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
	<meta charset="utf-8">
	<title>Tracks</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
</head>
<body>
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
</body>
</html>