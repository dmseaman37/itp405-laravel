<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>ITP Tunes</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
</head>

<body>
	<div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<ul class="nav justify-content-center">
					<li class="nav-item">
						<a class="nav-link" href="/genres">Genres</a>
					</li>

					<li class="nav-item">
						<a class="nav-link" href="/tracks">Tracks</a>
					</li>
				</ul>
			</div>
		</div>
		@yield('main')
	</div>
</body>
</html>