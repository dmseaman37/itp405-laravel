<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
	<meta charset="utf-8">
	<title>Assignment 1</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
</head>
<body>
	<table class="table">
		@foreach($genres as $genre)
		<tr>
			<td>
				<a href="tracks?genre={{urlencode($genre->Name)}}">{{$genre->Name}}</a>
			</td>
		</tr>
		@endforeach
	</table>
</body>
</html>