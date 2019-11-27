<!DOCTYPE html>
<html lang="cs">
<head>
	<?php include('inc/meta-head.php') ?>
	<title>Avex Digital | Ceník</title>
</head>
<body>
<?php include('inc/nav.php') ?>
<header class="subpage parallax-window" data-parallax="scroll"
        data-image-src="./assets/images/header-bg.jpg">
	<div class="header--darken"></div>
	<div class="container d-flex flex-column h-100">
		<div class="row">
			<div class="col-12">
				<h1 class="text-white text-center">Ceník</h1>
			</div>
		</div>
	</div>
</header>

<main>
	<section class="py-3 my-3 py-md-5 my-md-5 about-us">
		<div class="container">
			<div class="row mb-5">
				<div class="col-12 col-md-8 mx-auto">
					<div class="row">
						<div data-toggle="web" class="col-12 col-md-4 price-button d-flex justify-content-center mb-3">
							<button class="btn btn-gold-outline px-4 active">Webové služby</button>
						</div>

						<div data-toggle="korporat" class="col-12 col-md-4 price-button d-flex justify-content-center mb-3">
							<button class="btn btn-gold-outline px-4">Korporátní identita</button>
						</div>

						<div data-toggle="grafika" class="col-12 col-md-4 price-button d-flex justify-content-center mb-3">
							<button class="btn btn-gold-outline px-4">Grafické služby</button>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="container">
			<div class="web price-services">
				<div class="row">
					<div class="col-12 col-md-6 col-lg-4 mb-5">
						<div class="price-box">
							<div class="media">
								<i class="fas fa-laptop-code fa-2x mr-3"></i>
								<div class="media-body">
									<h5 class="mt-0 font-weight-bold">Úprava webových stránek služby</h5>
									Od 8 tisíc
									<div class="line"></div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-12 col-md-6 col-lg-4 mb-5">
						<div class="price-box">
							<div class="media">
								<i class="fas fa-laptop-medical fa-2x mr-3"></i>
								<div class="media-body">
									<h5 class="mt-0 font-weight-bold">Tvorba webových stránek</h5>
									Od 16 tisíc
									<div class="line"></div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-12 col-md-6 col-lg-4 mb-5">
						<div class="price-box">
							<div class="media">
								<i class="fab fa-google fa-2x mr-3"></i>
								<div class="media-body">
									<h5 class="mt-0 font-weight-bold">SEO optimalizace</h5>
									Od 10 tisíc
									<div class="line"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>


			<div class="korporat price-services">
				<div class="row">
					<div class="col-12 col-md-6 col-lg-4 mb-5">
						<div class="price-box">
							<div class="media">
								<i class="fas fa-trademark fa-2x mr-3"></i>
								<div class="media-body">
									<h5 class="mt-0 font-weight-bold">Tvorba korporátní identity služby</h5>
									Od 20 tisíc
									<div class="line"></div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-12 col-md-6 col-lg-4 mb-5">
						<div class="price-box">
							<div class="media">
								<i class="fas fa-book fa-2x mr-3"></i>
								<div class="media-body">
									<h5 class="mt-0 font-weight-bold">Tvorba grafického manuálu</h5>
									Od 16 tisíc
									<div class="line"></div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-12 col-md-6 col-lg-4 mb-5">
						<div class="price-box">
							<div class="media">
								<i class="fas fa-pencil-ruler fa-2x mr-3"></i>
								<div class="media-body">
									<h5 class="mt-0 font-weight-bold">Redesign & předělání korporátní identity</h5>
									Od 30 tisíc
									<div class="line"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="grafika price-services">
				<div class="row">
					<div class="col-12 col-md-6 col-lg-4 mb-5">
						<div class="price-box">
							<div class="media">
								<i class="fas fa-envelope-open-text fa-2x mr-3"></i>
								<div class="media-body">
									<h5 class="mt-0 font-weight-bold">Letáky & postery</h5>
									Od 4 tisíc
									<div class="line"></div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-12 col-md-6 col-lg-4 mb-5">
						<div class="price-box">
							<div class="media">
								<i class="fab fa-adversal fa-2x mr-3"></i>
								<div class="media-body">
									<h5 class="mt-0 font-weight-bold">Tvorba reklamy</h5>
									Od 16 tisíc
									<div class="line"></div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-12 col-md-6 col-lg-4 mb-5">
						<div class="price-box">
							<div class="media">
								<i class="fas fa-envelope-open-text fa-2x mr-3"></i>
								<div class="media-body">
									<h5 class="mt-0 font-weight-bold">Grafické úpravy</h5>
									Od 2 tisíc
									<div class="line"></div>
								</div>
							</div>
						</div>
					</div>
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
