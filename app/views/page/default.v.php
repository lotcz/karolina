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
						<a class="nav-link" href="#pozemek">Pozemek</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#galerie">Galerie</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#kontakt">Kontakt</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>

	<div class="main container-md">
		<div id="pozemek" class="text-center intro">
			<div class="mx-auto my-5">
				<div class="map">
					<iframe
						src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d23314.76199587048!2d14.380431194776941!3d50.164795484159896!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zNTDCsDA5JzUzLjIiTiAxNMKwMjInNTAuMiJF!5e1!3m2!1scs!2scz!4v1705793313132!5m2!1scs!2scz"
						width="100%"
						height="100%"
						style="border:0;"
						allowfullscreen=""
						loading="lazy"
						referrerpolicy="no-referrer-when-downgrade"
					></iframe>
				</div>

				<h1 class="m-3 my-5">Pozemek</h1>
				<h1 class="m-3 my-5">ROZTOKY U PRAHY</h1>

				<div class="parameters row justify-content-md-center m-auto text-start">
					<div class="col-md-6">
						<div class="row">
							<div class="col">
								Druh pozemku
							</div>
							<div class="col">
								<strong>Stavby pro rodinnou rekreaci</strong>
							</div>
						</div>
						<div class="row">
							<div class="col">
								Plocha pozemku
							</div>
							<div class="col">
								<strong>3&nbsp;000&nbsp;m<sup>2</sup></strong>
							</div>
						</div>
						<div class="row">
							<div class="col">
								Zastavitelnost budovami
							</div>
							<div class="col">
								<strong>max. 50&nbsp;m<sup>2</sup></strong>
								(KZB 0.1, nadzemní podlaží a podkroví)
							</div>
						</div>
						<div class="row">
							<div class="col">
								Celková zastavitelnost
							</div>
							<div class="col">
								<strong>max. 600&nbsp;m<sup>2</sup></strong>
								(KZP 0.2)
							</div>
						</div>
						<div class="row">
							<div class="col">
								Inženýrské sítě
							</div>
							<div class="col">
								<strong>elektřina, voda, kanalizace na hranici pozemku</strong>
							</div>
						</div>
						<div class="row">
							<div class="col">
								Přístup
							</div>
							<div class="col">
								místní komunikace,
								ulice <strong>V Úvoze</strong>
							</div>
						</div>

					</div>
				</div>

				<div class="my-5 row justify-content-md-center m-auto text-start">
					<div class="col-md-6">
						<p>
							Krásný a jedinečný pozemek.
							Je mírně svažitý jižním směrem a nabízí pěkný výhled na místní část Žalov a vzdálenou krajinu.
							Na pozemku jsou desítky vzrostlých stromů a další druhově pestrá vegetace.
							Jedná se o nejvýchodnější část rodinného pozemku, jehož celková výměra je 1.4&nbsp;ha a je znám pod názvem
							<a target="_blank" href="https://www.facebook.com/farma.karolina">Zahrada Karolína</a>.
						</p>
						<p>
							Pozemek se nachází v zastavitelném území města a v územním plánu je veden ze 4/5 jako
							plochy RI (stavby pro rodinnou rekreaci) a z 1/5 jako plochy ZS (zahrady soukromé)
							s optimistickým výhledem do budoucna na možnou změnu do ploch BI (plochy bydlení v rodinných domech).
							Minimální výměra pozemku pro stavbu je stanovena na 3&nbsp;000&nbsp;m<sup>2</sup>.
						</p>
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

		<div id="kontakt">
			<h2>Kontakt</h2>

			<div class="row justify-content-md-center m-auto text-start">
				<div class="col-md-5">
					<p>Pavel Kaňka</p>
					<p>mail: <a href="mailto:zahradakarolina@gmail.com">zahradakarolina@gmail.com</a></p>
					<p>Instagram: <a target="_blank" href="https://www.instagram.com/zahrada.karolina">@zahrada.karolina</a></p>
					<p>Facebook: <a target="_blank" href="https://www.facebook.com/farma.karolina">farma.karolina</a></p>
				</div>
			</div>

		</div>

	</div>

	<footer class="py-5 text-center">
		webmaster <a href="https://zavadil.eu" target="_blank"><strong>Karel Zavadil</strong></a>, &copy; <?=date("Y") ?>
	</footer>

</main>

