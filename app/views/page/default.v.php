<main data-bs-spy="scroll" data-bs-target="#navbar" data-bs-smooth-scroll="true" class="bg-white" tabindex="0">

	<nav class="navbar navbar-expand-sm bg-white border-bottom sticky-top">
		<div class="container-md">
			<!--a class="navbar-brand" href="/">Parcela <strong>na prodej</strong></a-->

			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Otevřít menu">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbar">
				<ul class="navbar-nav me-auto my-2 my-lg-0" style="--bs-scroll-height: 100px;">
					<li class="nav-item">
						<a class="nav-link" href="#parcela">Parcela</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#galerie">Galerie</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#cenik">Cena</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#kontakt">Kontakt</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>

	<div class="main container-md">
		<div id="parcela" class="text-center intro">
			<div class="mx-auto my-5">
				<img src="<?=$this->z->images->img('karolina.png', 'view')?>" class="rounded img-fluid">
				<h1 class="m-3 my-5">Parcela <strong>na prodej</strong></h1>
				<p>Přímo od majitele.</p>

				<div class="map">
					<iframe
						src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d794.5310126096227!2d14.379463276140932!3d50.164675852724486!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zNTDCsDA5JzUyLjgiTiAxNMKwMjInNTAuNSJF!5e1!3m2!1scs!2scz!4v1705363678519!5m2!1scs!2scz"
						width="100%"
						height="100%"
						style="border:0;"
						allowfullscreen=""
						loading="lazy"
						referrerpolicy="no-referrer-when-downgrade"
					></iframe>
				</div>
			</div>
		</div>

		<div id="galerie">
			<h2>Galerie</h2>
			<?php
				$this->z->gallery->renderGallery(1);
			?>
		</div>

		<div id="kontakt">
			<h2>Kontakt</h2>

			<div class="row">
				<div class="col-lg">
					<address>
						Pavel Kaňka<br>
						<br>
						<br>
						<br>
					</address>
				</div>
				<div class="col-lg">
					<p>mail: <a href="mailto:zahradakarolina@gmail.com">zahradakarolina@gmail.com</a></p>
					<p>tel: +420 123 456 789</p>
					<p></p>
				</div>
			</div>

		</div>

	</div>

	<footer class="py-5 text-center">
		webmaster <a href="https://zavadil.eu" target="_blank"><strong>Karel Zavadil</strong></a>, &copy; 2023
	</footer>

</main>

