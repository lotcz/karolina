<main data-bs-spy="scroll" data-bs-target="#navbar" data-bs-smooth-scroll="true" class="bg-white" tabindex="0">

	<nav class="navbar navbar-expand-sm bg-white border-bottom sticky-top">
		<div class="container-md">
			<!--a class="navbar-brand" href="/">Parcela <strong>na prodej</strong></a-->

			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Otevřít menu">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbar">
				<ul class="navbar-nav m-auto my-2 my-lg-0" style="--bs-scroll-height: 100px;">
					<li class="nav-item">
						<a class="nav-link" href="#parcela">Parcela</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#galerie">Galerie</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#cena">Cena</a>
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
				<div class="map">
					<iframe
						src="https://www.google.com/maps/embed?pb=!1m13!1m8!1m3!1d16969.037397848915!2d14.364428472167381!3d50.164984032124465!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zNTDCsDA5JzUyLjgiTiAxNMKwMjInNTAuNSJF!5e1!3m2!1scs!2scz!4v1705524283202!5m2!1scs!2scz"
						width="100%"
						height="100%"
						style="border:0;"
						allowfullscreen=""
						loading="lazy"
						referrerpolicy="no-referrer-when-downgrade"
					></iframe>

				</div>
				<h1 class="m-3 my-5">Parcela <strong>na prodej</strong></h1>

				<p class="text-start">Přímo od majitele.</p>

				<div class="row text-start">
					<div class="col-md">
						<div class="row">
							<div class="col">
								Celková výměra
							</div>
							<div class="col">
								<strong>Hodnota</strong>
							</div>
						</div>
						<div class="row">
							<div class="col">
								Zastavitelná plocha
							</div>
							<div class="col">
								<strong>Hodnota</strong>
							</div>
						</div>
					</div>
					<div class="col-md">
						<div class="row">
							<div class="col">
								Převýšení
							</div>
							<div class="col">
								<strong>Hodnota</strong>
							</div>
						</div>
						<div class="row">
							<div class="col">
								Inženýrské sítě
							</div>
							<div class="col">
								<strong>Hodnota</strong>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>

		<div id="galerie">
			<h2>Galerie</h2>
			<?php
				$this->z->gallery->renderGallery(1);
			?>
		</div>

		<div id="cena">
			<h2>Cena</h2>

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
		webmaster <a href="https://zavadil.eu" target="_blank"><strong>Karel Zavadil</strong></a>, &copy; <?=date("Y") ?>
	</footer>

</main>

