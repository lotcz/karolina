<main data-bs-spy="scroll" data-bs-target="#navbar" data-bs-smooth-scroll="true" class="bg-white" tabindex="0">

	<nav class="navbar navbar-expand-sm bg-white border-bottom sticky-top">
		<div class="container-md">
			<a class="navbar-brand" href="/">Parcela <strong>na prodej</strong></a>

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
				<?php
					//echo $intro->get('cosmetic_service_description');
				?>
				<div class="separator"></div>
			</div>
		</div>

		<div id="galerie">
			<h2>Galerie</h2>
			<?php
				$this->z->gallery->renderGallery(1);
			?>
		</div>

		<div id="cenik">
			<?php
				//$this->renderPartialView('pricelist', ['pricelist' => $pricelist]);
			?>
		</div>

		<div id="kontakt">
			<?php
				$this->renderPartialView('contact');
			?>
		</div>
	</div>

	<footer class="py-5 text-center">
		webmaster <a href="https://zavadil.eu" target="_blank"><strong>Karel Zavadil</strong></a>, &copy; 2023
	</footer>

</main>

