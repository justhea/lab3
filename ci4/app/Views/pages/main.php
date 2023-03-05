<!-- NAVBAR -->


<!-- Navigation 1 -->

<nav class="navigation_1 bg-light pt-30 pb-30 text-center">
	<div class="container px-xl-0">
		<div class="row justify-content-center align-items-center f-16">
			<div class="mb-20 mb-lg-0 col-lg-3 text-lg-left" data-aos-duration="600" data-aos="fade-down" data-aos-delay="300">
				<a href="#" class="logo link color-main">Artivize</a>
			</div>
			<div class="col-lg-6" data-aos-duration="600" data-aos="fade-down" data-aos-delay="0">

			</div>
			<div class="mt-20 mt-lg-0 col-lg-3 d-flex flex-wrap justify-content-center justify-content-lg-end align-items-center" data-aos-duration="600" data-aos="fade-down" data-aos-delay="300">
				<a href="#main" class="mr-20 link color-main">Works</a>
				<a href="form" class="btn sm action-2 f-16">Submit</a>
			</div>
		</div>
	</div>
</nav>




<!-- NAVBAR -->



<!-- Feature 2 -->

<section class="feature_2 bg-light pt-105 pb-45 text-center">
	<div class="container px-xl-0">
		<div class="row justify-content-center">
			<div class="col-xl-8 col-lg-10">
				<h2 class="small" data-aos-duration="600" data-aos="fade-down" data-aos-delay="0">Artivize</h2>
				<div class="mt-35 mb-65 f-22 color-heading text-adaptive description" data-aos-duration="600" data-aos="fade-down" data-aos-delay="300">
				Artivize is a platform for artists to showcase their artworks online. It is a combination of "Art" and "Revitalize", which implies the revitalization of the art world through technology. 
				</div>
			</div>
			<div class="col-xl-10">
				<div class="row justify-content-center">
					<div class="mb-50 col-md-4 col-sm-8" data-aos-duration="600" data-aos="fade-down" data-aos-delay="600">
						<div class="mb-20 f-18 medium title">Online Gallery</div>
						<div class="color-heading text-adaptive">
						Artivize provides artists with an online gallery to showcase their artworks to the internet. This feature allows artists to reach a wider audience and increase their chances of making sales.
						</div>
						<a href="#main" class="mt-30 btn sm w-40 border-transparent-main"><i class="fas fa-angle-right"></i></a>
					</div>
					<div class="mb-50 col-md-4 col-sm-8" data-aos-duration="600" data-aos="fade-down" data-aos-delay="900">
						<div class="mb-20 f-18 medium title">Curated Exhibitions</div>
						<div class="color-heading text-adaptive">
						Artivize curates online exhibitions of artworks from different artists, styles, and themes. This feature provides exposure and recognition to emerging artists, and it allows viewers to explore and appreciate different forms of art.
						</div>
						<a href="#main" class="mt-30 btn sm w-40 border-transparent-main"><i class="fas fa-angle-right"></i></a>
					</div>
					<div class="mb-50 col-md-4 col-sm-8" data-aos-duration="600" data-aos="fade-down" data-aos-delay="1200">
						<div class="mb-20 f-18 medium title">Open Submissions</div>
						<div class="color-heading text-adaptive">
						Artivize provides a platform for artists to showcase their work without censorship or judgment, promoting freedom of expression and creativity without limitations or restrictions.
						</div>
						<a href="#main" class="mt-30 btn sm w-40 border-transparent-main"><i class="fas fa-angle-right"></i></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>










<!-- Content 2 -->

<section class="content_2 bg-light pt-105 pb-95">
	<div class="container px-xl-0 text-center">
		<div class="row justify-content-center">
			<div class="col-xl-8 col-lg-10" data-aos-duration="600" data-aos="fade-down" data-aos-delay="0">
				<h2>Everyone is welcome</h2>
			</div>
			<div class="col-xl-7 col-lg-9 col-md-10" data-aos-duration="600" data-aos="fade-down" data-aos-delay="300">
				<div class="mt-35 f-18 medium color-heading op-7 text-adaptive">
With the blessing of the website creator Carl, we are welcoming everyone to share a piece of their mind whether it may be a poem or a simple drawing. All artworks are welcome</div>
			</div>
		</div>
	</div>
</section>









<!-- Showcase 2 -->

<section class="showcase_2 bg-light pt-105 pb-90 text-center">
	<div class="container px-xl-0">
		<div class="row justify-content-center" id ="main">
			<div class="col-xl-8 col-lg-10">
				<h2 class="small" data-aos-duration="600" data-aos="fade-down" data-aos-delay="0">Community Wall</h2>
				<div class="mt-15 mb-25 f-22 color-heading text-adaptive" data-aos-duration="600" data-aos="fade-down" data-aos-delay="300">
				Here are the works of other users that visited this website!
				</div>
			</div>
		</div>



<!-- Main Content -->
		<div class="row">

			<?php foreach ($news as $new): ?>

				<div class="col-md-4 col-sm-6" data-aos-duration="600" data-aos="fade-down" data-aos-delay="0">
						<img srcset="i/<?= $new['image'] ?>" src="i/<?= $new['image'] ?>" class="radius10 img-fluid" alt="" />
						<div class="mt-20 mb-15 f-22 title"><?= $new['title'] ?></div>
						<div class="color-heading f-14 semibold text-uppercase sp-20"><?= $new['name'] ?></div>
					</a>
				</div>

			<?php endforeach ?>

		</div>
	</div>
</section>






<section class="testimonial_1 bg-light pt-80 pb-80">
	<div class="container px-xl-0">
		<div class="row justify-content-center">
			<div class="col-xl-10 col-lg-11" data-aos-duration="600" data-aos="fade-down" data-aos-delay="0">
				<div class="hr bg-gray h-2"></div>
			</div>
		</div>
		<div class="row pt-30 pb-50 inner" data-aos-duration="600" data-aos="fade-down" data-aos-delay="300">
			<div class="col-xl-2 col-lg-1"></div>
			<div class="col-md-1 col-sm-2">
				<i class="fas fa-quote-left f-36 color-gray"></i>
			</div>
			<div class="col-xl-7 col-lg-8 col-sm-10">
				<div class="pt-10 f-22 text-adaptive">
				<div id="quote-container">
		<p id="quote"></p>
	</div>
				</div>
				<div class="mt-20 d-flex align-items-center author_info">
					<img srcset="i/me.jpg" src="i/mejpg" class="w-60 h-60 radius_full" alt="" />
					<div class="ml-15 color-heading f-14 semibold text-uppercase sp-20">Justin</div>
				</div>
			</div>
		</div>
		<div class="row justify-content-center">
			<div class="col-xl-10 col-lg-11" data-aos-duration="600" data-aos="fade-down" data-aos-delay="0">
				<div class="hr bg-gray h-2"></div>
			</div>
		</div>
	</div>
</section>

<!-- Footer 1 -->

<footer class="footer_1 bg-light pt-75 pb-65 text-center">
	<div class="container px-xl-0">
		<div class="row justify-content-between align-items-center lh-40 links">
			<div class="col-lg-4 col-sm-6 text-sm-right text-lg-left order-1 order-lg-0" data-aos-duration="600" data-aos="fade-down" data-aos-delay="300">

			</div>
			<div class="mb-10 mb-lg-0 col-lg-auto order-0" data-aos-duration="600" data-aos="fade-down" data-aos-delay="0">
				<a href="#" class="logo link color-main">Artivize</a>
			</div>
			<div class="col-lg-4 col-sm-6 text-sm-left text-lg-right order-2 order-lg-0" data-aos-duration="600" data-aos="fade-down" data-aos-delay="300">

				<a href="https://www.twitter.com/dyastin_223" class="mx-15 link color-main"><i class="fab fa-twitter"></i></a>
				<a href="https://www.facebook.com/justheaa" class="mx-15 link color-main"><i class="fab fa-facebook-square"></i></a>
				<a href="#" class="ml-15 link color-main"><i class="fab fa-google-plus-g"></i></a>
			</div>
		</div>
		<div class="row justify-content-center">
			<div class="mt-10 col-xl-4 col-lg-5 col-md-6 col-sm-8" data-aos-duration="600" data-aos="fade-down" data-aos-delay="0">
				<div class="color-heading text-adaptive">
				Big thanks to bootstrap for the use of their open source library, check them out <a href="https://getbootstrap.com/docs/5.1/getting-started/download/" class="link color-heading"><h5>Here</h5></a>
				</div>
			</div>
		</div>
	</div>
</footer>

