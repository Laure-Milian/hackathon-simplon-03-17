	 <div class="container-fluid bs-callout bs-callout-danger">
		<h2 class="title"><img class="logo" src="http://www.groupe-adonis.fr/sites/groupe-adonis.fr/files/logo_2.png" alt="logo Adonis">Les dernières actus</h2>

		<div class="row">

			@foreach ($articles as $article)

			<div class="col-xs-6 col-md-4 articles">
				<h3 class="subtitle">{{ $article[0] }}</h3>

				<div class="details">
					<p>Publié le {{ $article[1] }}</p>
					<p>&nbsp;par {{ $article[2] }}</p>
				</div>

				<div class="article">
						<img src="{{ $article[3] }}"/>
						<p>{{ $article[4] }}</p>
				</div>
			</div>

			@endforeach

		</div>

		<h2 class="footer">Retrouvez ces articles en intégralité sur notre blog : www.groupe-adonis.fr/blog !</h2>
	</div>
