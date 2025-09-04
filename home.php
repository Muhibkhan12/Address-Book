<?php
include('header.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" /> -->

	<link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@500;600;700&display=swap" rel="stylesheet">
	<!--===============================================================================================-->
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&family=Cormorant+Garamond:wght@500;600&family=Montserrat:wght@400;600&display=swap" rel="stylesheet">

	<link rel="stylesheet" type="text/css" href="css/home2.css">
	<link rel="stylesheet" type="text/css" href="css/home.css">
	<title>Document</title>
</head>
<body>
	<!-- Slider -->
	<section class="section-slide">
		<div class="wrap-slick1">
			<div class="slick1">
				<div class="item-slick1" style="background-image: url(images/slide1.jpg);">
					<div class="container h-full">
						<div class="flex-col-l-m h-full p-t-100 p-b-30 respon5">


							<div class="layer-slick1 animated visible-false text-left-slide" data-appear="fadeInUp"
								data-delay="800">
								<h2 class="ltext-201 cl2 p-t-19 p-b-43 respon1">
									Beauty Amplified by Dazzling Jewels
								</h2>
							</div>


						</div>
					</div>
				</div>

				<div class="item-slick1" style="background-image: url(images/slide2.jpg);">
					<div class="container h-full">
						<div class="flex-col-l-m h-full p-t-100 p-b-30 respon5">
							<div class="layer-slick1 animated visible-false text-left-slide" data-appear="fadeInUp"
								data-delay="800">
								<h2 class="ltext-201 cl2 p-t-19 p-b-43 respon1">
									Adorn Yourself with Sparkle and Grace
								</h2>
							</div>
						</div>
					</div>
				</div>

				<div class="item-slick1" style="background-image: url(images/slide3.jpg);">
					<div class="container h-full">
						<div class="flex-col-l-m h-full p-t-100 p-b-30 respon5">
							<div class="layer-slick1 animated visible-false text-left-slide" data-appear="fadeInUp"
								data-delay="800">
								<h2 class="ltext-201 cl2 p-t-19 p-b-43 respon1">
									Where Radiant Women Meet Exquisite Craft
								</h2>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<div class="code code--left aos-init aos-animate" data-aos="fade-up">
		<div class="px-4 pt-5 my-5 text-center border-bottom">
			<h1 id="name-h1" class="display-4 fw-bold text-body-emphasis mb-4">JENNY'S BEAUTY</h1>

			<div class="col-lg-6 mx-auto">
				<p class="lead mb-4 mt-3">
					brings you radiant jewellery and glow-enhancing beauty essentials. From timeless accessories to
					luminous cosmetics, our collection is crafted to help you shine with elegance, confidence, and
					effortless charm.
				</p>
			</div>

			<div class="overflow-hidden" style="max-height: 90vh;"></div>
		</div>
	</div>

	<section class="video-section position-relative">
		<!-- Background video -->
		<video autoplay muted loop playsinline class="w-100" style="height: 80vh; object-fit: cover;">
			<source src="images/jewellerymodel.mp4" type="video/mp4">
		</video>


		<!-- Overlay content -->
		<div class="container h-100 d-flex align-items-center justify-content-center">
			<div class="text-center text-white">
				<h1 class="display-4 fw-bold">Elevate Your Shine</h1>
			</div>
		</div>
	</section>


	<!-- Banner -->


	<div class="sec-banner bg0 p-t-80 p-b-50 shadow-lg rounded-4">
		<div class="container">
			<h2 class="section-title ltext-103 cl5 text-center mb-4">Our Top Picks</h2>

			<!-- Tabs nav -->

			<!-- Add this to your head tag for the font -->
			<link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@500;600;700&display=swap"
				rel="stylesheet">

			<ul class="nav nav-tabs justify-content-center mb-5" id="categoryTabs" role="tablist">
				<li class="nav-item" role="presentation">
					<button class="nav-link active" id="jewellery-tab" data-bs-toggle="tab" data-bs-target="#jewellery"
						type="button" role="tab" aria-controls="jewellery" aria-selected="true">
						Jewellery
					</button>
				</li>
				<li class="nav-item" role="presentation">
					<button class="nav-link" id="cosmetics-tab" data-bs-toggle="tab" data-bs-target="#cosmetics"
						type="button" role="tab" aria-controls="cosmetics" aria-selected="false">
						Cosmetics
					</button>
				</li>
			</ul>

			<!-- Tabs content -->
			<div class="tab-content" id="categoryTabsContent">

				<!-- Jewellery Tab Pane -->
				<div class="tab-pane fade show active" id="jewellery" role="tabpanel" aria-labelledby="jewellery-tab">
					<div class="row">
						<!-- Card 1 -->
						<div class="col-md-6 col-xl-4 p-b-30">
							<div class="block1 wrap-pic-w shadow-sm rounded-4 overflow-hidden">
								<img src="images/Isola Necklace with Pendant.webp" alt="IMG-BANNER">
								<a href="product.html"
									class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">

									<div class="block1-txt-child2 p-b-4 trans-05">
										<div class="block1-link stext-101 cl0 trans-09">The Luxe Necklace</div>
									</div>
								</a>
							</div>
						</div>

						<!-- Card 2 -->
						<div class="col-md-6 col-xl-4 p-b-30">
							<div class="block1 wrap-pic-w shadow-sm rounded-4 overflow-hidden">
								<img src="images/Nudo Braceletv.webp" alt="IMG-BANNER">
								<a href="product.html"
									class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">

									<div class="block1-txt-child2 p-b-4 trans-05">
										<div class="block1-link stext-101 cl0 trans-09">Mystique Bracelet</div>
									</div>
								</a>
							</div>
						</div>

						<!-- Card 3 -->
						<div class="col-md-6 col-xl-4 p-b-30">
							<div class="block1 wrap-pic-w shadow-sm rounded-4 overflow-hidden">
								<img src="images/Pomellato Together Golden Ring.webp" alt="IMG-BANNER">
								<a href="product.html"
									class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">

									<div class="block1-txt-child2 p-b-4 trans-05">
										<div class="block1-link stext-101 cl0 trans-09">Dual Harmony Ring</div>
									</div>
								</a>
							</div>
						</div>

						<!-- Card 4 -->
						<div class="col-md-6 col-xl-4 p-b-30">
							<div class="block1 wrap-pic-w shadow-sm rounded-4 overflow-hidden">
								<img src="images/Esprit Ruffle Locket.webp" alt="IMG-BANNER">
								<a href="product.html"
									class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">

									<div class="block1-txt-child2 p-b-4 trans-05">
										<div class="block1-link stext-101 cl0 trans-09">Crystal Stud Earrings</div>
									</div>
								</a>
							</div>
						</div>

						<!-- Card 5 -->
						<div class="col-md-6 col-xl-4 p-b-30">
							<div class="block1 wrap-pic-w shadow-sm rounded-4 overflow-hidden">
								<img src="images/Nudo Petit Necklace with Pendant.webp" alt="IMG-BANNER">
								<a href="product.html"
									class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">

									<div class="block1-txt-child2 p-b-4 trans-05">
										<div class="block1-link stext-101 cl0 trans-09">Golden Ratio Necklace</div>
									</div>
								</a>
							</div>
						</div>

						<!-- Card 6 -->
						<div class="col-md-6 col-xl-4 p-b-30">
							<div class="block1 wrap-pic-w shadow-sm rounded-4 overflow-hidden">
								<img src="images/Nudo Classic Ring.webp" alt="IMG-BANNER">
								<a href="product.html"
									class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">

									<div class="block1-txt-child2 p-b-4 trans-05">
										<div class="block1-link stext-101 cl0 trans-09">The Alchamey Band Ring</div>
									</div>
								</a>
							</div>
						</div>
					</div>
				</div>

				<!-- Cosmetics Tab Pane -->
				<div class="tab-pane fade" id="cosmetics" role="tabpanel" aria-labelledby="cosmetics-tab">
					<div class="row">

						<!-- Card 1 -->
						<div class="col-md-6 col-xl-4 p-b-30">
							<div class="block1 wrap-pic-w shadow-sm rounded-4 overflow-hidden">
								<img src="images/Glow Essentials Soap Bar with Vitamins E & B3.webp" alt="IMG-BANNER">
								<a href="product.html"
									class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">

									<div class="block1-txt-child2 p-b-4 trans-05">
										<div class="block1-link stext-101 cl0 trans-09">Oriflame Body Soap</div>
									</div>
								</a>
							</div>
						</div>
						<!-- Card 2 -->
						<div class="col-md-6 col-xl-4 p-b-30">
							<div class="block1 wrap-pic-w shadow-sm rounded-4 overflow-hidden">
								<img src="images/Purifying Clay Face Mask.webp" alt="IMG-BANNER">
								<a href="product.html"
									class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">

									<div class="block1-txt-child2 p-b-4 trans-05">
										<div class="block1-link stext-101 cl0 trans-09">Glow Renew Mask</div>
									</div>
								</a>
							</div>
						</div>
						<!-- Card 3 -->
						<div class="col-md-6 col-xl-4 p-b-30">
							<div class="block1 wrap-pic-w shadow-sm rounded-4 overflow-hidden">
								<img src="images/Even Out Serum.webp" alt="IMG-BANNER">
								<a href="product.html"
									class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">

									<div class="block1-txt-child2 p-b-4 trans-05">
										<div class="block1-link stext-101 cl0 trans-09">Vital Glow Serum</div>
									</div>
								</a>
							</div>
						</div>
						<!-- Card 4 -->
						<div class="col-md-6 col-xl-4 p-b-30">
							<div class="block1 wrap-pic-w shadow-sm rounded-4 overflow-hidden">
								<img src="images/Shampoo For Oily Hair with Organic Lemon & Mint.webp" alt="IMG-BANNER">
								<a href="product.html"
									class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">

									<div class="block1-txt-child2 p-b-4 trans-05">
										<div class="block1-link stext-101 cl0 trans-09">Pure Balance Clarifying
											Shampoo</div>
									</div>
								</a>
							</div>
						</div>
						<!-- Card 5 -->
						<div class="col-md-6 col-xl-4 p-b-30">
							<div class="block1 wrap-pic-w shadow-sm rounded-4 overflow-hidden">
								<img src="images/Eau de Parfum.webp" alt="IMG-BANNER">
								<a href="product.html"
									class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">

									<div class="block1-txt-child2 p-b-4 trans-05">
										<div class="block1-link stext-101 cl0 trans-09">Oriflame Presence
											Scent</div>
									</div>
								</a>
							</div>
						</div>
						<!-- Card 6 -->
						<div class="col-md-6 col-xl-4 p-b-30">
							<div class="block1 wrap-pic-w shadow-sm rounded-4 overflow-hidden">
								<img src="images/trew-Gg3Jm6Mp3wI-unsplash.jpg" alt="IMG-BANNER">
								<a href="product.html"
									class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">

									<div class="block1-txt-child2 p-b-4 trans-05">
										<div class="block1-link stext-101 cl0 trans-09">Red Lip Glose</div>
									</div>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>



	<!-- Customer Response Section -->
	<section class="testimonial-section">
		<div class="container">
			<h2 class="text-center">Customer Responses</h2>
			<div class="row g-4">
				<!-- Testimonial 1 -->
				<div class="col-md-4">
					<div class="testimonial-card">
						<h5>Sarah K.</h5>
						<p>The Luxe Necklace is absolutely stunning! It hasn't lost its shine even after weeks of use.
						</p>
						<div class="rating">★★★★★</div>
					</div>
				</div>
				<!-- Testimonial 2 -->
				<div class="col-md-4">
					<div class="testimonial-card">
						<h5>Zainab M.</h5>
						<p>I love the Glow Renew Mask! My skin feels so fresh and soft after every use.</p>
						<div class="rating">★★★★☆</div>
					</div>
				</div>
				<!-- Testimonial 3 -->
				<div class="col-md-4">
					<div class="testimonial-card">
						<h5>Zara H.</h5>
						<p>The bracelet is light yet elegant. Very durable and beautifully designed.</p>
						<div class="rating">★★★★★</div>
					</div>
				</div>
			</div>
		</div>
	</section>



	<!-- Load more -->
	<div class="flex-c-m flex-w w-full p-t-45">
		<a href="#" class="flex-c-m stext-101 cl5 size-103 bg2 bor1 hov-btn1 p-lr-15 trans-04">
			Back to Top
		</a>
	</div>
	</div>





	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>



	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
	<script>
		$(".js-select2").each(function () {
			$(this).select2({
				minimumResultsForSearch: 20,
				dropdownParent: $(this).next('.dropDownSelect2')
			});
		})
	</script>
	<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/slick/slick.min.js"></script>
	<script src="js/slick-custom.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/parallax100/parallax100.js"></script>
	<script>
		$('.parallax100').parallax100();
	</script>
	<!--===============================================================================================-->
	<script src="vendor/MagnificPopup/jquery.magnific-popup.min.js"></script>
	<script>
		$('.gallery-lb').each(function () { // the containers for all your galleries
			$(this).magnificPopup({
				delegate: 'a', // the selector for gallery item
				type: 'image',
				gallery: {
					enabled: true
				},
				mainClass: 'mfp-fade'
			});
		});
	</script>
	<!--===============================================================================================-->
	<script src="vendor/isotope/isotope.pkgd.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/sweetalert/sweetalert.min.js"></script>
	<script>
		$('.js-addwish-b2').on('click', function (e) {
			e.preventDefault();
		});

		$('.js-addwish-b2').each(function () {
			var nameProduct = $(this).parent().parent().find('.js-name-b2').html();
			$(this).on('click', function () {
				swal(nameProduct, "is added to wishlist !", "success");

				$(this).addClass('js-addedwish-b2');
				$(this).off('click');
			});
		});

		$('.js-addwish-detail').each(function () {
			var nameProduct = $(this).parent().parent().parent().find('.js-name-detail').html();

			$(this).on('click', function () {
				swal(nameProduct, "is added to wishlist !", "success");

				$(this).addClass('js-addedwish-detail');
				$(this).off('click');
			});
		});

		/*---------------------------------------------*/

		$('.js-addcart-detail').each(function () {
			var nameProduct = $(this).parent().parent().parent().parent().find('.js-name-detail').html();
			$(this).on('click', function () {
				swal(nameProduct, "is added to cart !", "success");
			});
		});

	</script>
	<!--===============================================================================================-->
	<script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
	<script>
		$('.js-pscroll').each(function () {
			$(this).css('position', 'relative');
			$(this).css('overflow', 'hidden');
			var ps = new PerfectScrollbar(this, {
				wheelSpeed: 1,
				scrollingThreshold: 1000,
				wheelPropagation: false,
			});

			$(window).on('resize', function () {
				ps.update();
			})
		});
	</script>
	<!--===============================================================================================-->
	<script src="js/home.js"></script>
</body>

</html>

<?php
include('footer.php');
?>