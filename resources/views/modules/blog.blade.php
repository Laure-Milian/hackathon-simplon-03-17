<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Blog</title>
	<link rel="stylesheet" href="{{mix('/css/app.css')}}">
</head>
<body>
	<div class="content">
		<h2 class="title">Les dernières actus du blog</h2>
		
		<div class="row">
		
			@foreach ($articles as $article)
			
			<div class="col-xs-6 col-md-4">
				<h3>{{ $article[0] }}</h3>
				
				<div class="details">
					<p>Publié le {{ $article[1] }}</p> 
					<p>&nbsp; par {{ $article[2] }}</p>
				</div>
				
				<div class="article">
					<div>
						<img src="{{ $article[3] }}"/>
					</div>
					<div>
						<p>{{ $article[4] }}</p>
					</div>
				</div>
			</div>
		
			@endforeach
			
		</div>
	</div>

</body>
</html>