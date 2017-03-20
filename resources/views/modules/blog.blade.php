<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Blog</title>
</head>
<body>
	<h2>Les derniers articles du blog</h2>

	<div class="row">

		@foreach ($articles as $article)
		
		<div class="col-xs-6 col-md-4">
			<h3>{{ $article[0] }}</h3>
			<p>{{ $article[1] }}</p>
			<p>{{ $article[2] }}</p>
			<img src="{{ $article[3] }}"/>
			<p>{{ $article[4] }}</p>
		</div>

		@endforeach
		
	</div>


</body>
</html>