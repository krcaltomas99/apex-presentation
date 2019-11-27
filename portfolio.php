<!DOCTYPE html>
<html lang="cs">
<head>
	<?php include('inc/meta-head.php') ?>
	<title>Avex Digital | Portfolio</title>
</head>
<body>
<?php include('inc/nav.php') ?>
<header class="subpage parallax-window" data-parallax="scroll"
        data-image-src="./assets/images/services/bg4.jpg">
	<div class="header--darken"></div>
	<div class="container d-flex flex-column h-100">
		<div class="row">
			<div class="col-12">
				<h1 class="text-white text-center">Portfolio</h1>
			</div>
		</div>
	</div>
</header>

<main>
	<section class="py-5 our-services">
		<div class="container">
			<h2 class="font-weight-bold text-center mb-5 border-bottom pb-4">Web</h2>

			<div class="row">
				<!-- Portfolio -->
				<div class="col-12 col-md-6 col-lg-4">
					<a href="portfoliopage.php">
						<div class="portfolio-box">
							<img class="img-fluid" src="assets/images/portfolio/bg1.jpg" alt="portfolio">
							<p>Projekt #1</p>
						</div>
					</a>
				</div>

				<div class="col-12 col-md-6 col-lg-4">
					<a href="portfoliopage.php">
						<div class="portfolio-box">
							<img src="assets/images/portfolio/bg2.jpg" alt="portfolio">
							<p>Projekt #2</p>
						</div>
					</a>
				</div>

				<div class="col-12 col-md-6 col-lg-4">
					<a href="portfoliopage.php">
						<div class="portfolio-box">
							<img src="assets/images/portfolio/bg3.jpg" alt="portfolio">
							<p>Projekt #3</p>
						</div>
					</a>
				</div>

				<div class="col-12 col-md-6 col-lg-4">
					<a href="portfoliopage.php">
						<div class="portfolio-box">
							<img src="assets/images/portfolio/bg4.jpg" alt="portfolio">
							<p>Projekt #4</p>
						</div>
					</a>
				</div>
			</div>
		</div>
	</section>

	<div class="container pb-5">
		<?php include('inc/form.php') ?>
	</div>
</main>

<?php include('inc/footer.php') ?>
</body>
</html>
