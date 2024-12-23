@extends('layouts.website')

@section('content')

<!-- =======================
Main Banner START -->
<section class="position-relative pt-8 pt-xl-9">
	<div class="container position-relative z-index-1 mb-5 mb-lg-7 pb-sm-6">
		<div class="row g-4 g-xxl-5">
			<!-- Hero content START -->
			<div class="col-lg-10 col-xl-8 text-center mx-auto">
				<!-- SVG decoration -->
				<figure class="position-absolute start-0 bottom-0 rotate-33 ms-7 mb-8">
					<svg width="101.6px" height="94.6px" viewbox="0 0 101.6 94.6" style="enable-background:new 0 0 101.6 94.6;" xml:space="preserve">
						<path class="fill-primary" d="M26.6,26.1c-4.7,0.8-9.3,1.8-13.9,2.9c-4.8,1.2-8.3,1.4-8.6,6.9c-0.1,1.8-0.2,4.5,1.3,5.7 c1.4,1.1,4.3,1.4,5.9,1.8c4.6,1.2,9.3,2.2,14,3.2c1.3,0.3,1.9-1.7,0.6-2c-3.3-0.7-6.6-1.5-10-2.2c-2.3-0.5-4.6-1.1-6.8-1.7 c-2.7-0.8-3-1.1-2.9-4.3c0.1-3.2,0.9-3.7,3.8-4.6c2.3-0.7,4.7-1.2,7-1.7c3.4-0.7,6.8-1.4,10.2-2C28.5,27.9,27.9,25.9,26.6,26.1 L26.6,26.1z"></path>
						<path class="fill-primary" d="M94,27.3c0.5-0.1,1.1-0.2,1.5-0.1c1.8,0.4,1.4,2.4,1.4,3.9c0,1.5,0.1,3.2-0.5,4.6c-0.6,1.5-2.1,2-3.7,2.1 c-1.3,0-1.3,2.1,0,2.1c1.7-0.1,3.9-0.6,4.9-2c1.5-2,1.3-5.2,1.3-7.5c0-2,0-4-2.1-4.9c-1.1-0.5-2.4-0.4-3.5-0.2 C92.1,25.6,92.7,27.6,94,27.3L94,27.3z"></path>
						<path class="fill-mode" d="M30.2,8c6.9,2.7,13.9,5.1,21,7.3c11.1,3.4,21.7,5.1,33.2,6.1c4.2,0.3,8.3,0.4,8.2,5.4 c-0.1,4.4,0.2,10.9-1.7,14.9c-2.2,4.6-9.7,3.4-14.1,3.9c-5,0.5-10,1.4-14.9,2.3C50.2,50,37.3,52.4,26.8,58.3 c-1.2,0.7-0.1,2.5,1,1.8c10.8-6.1,24.3-8.4,36.3-10.6c5.6-1,11.3-2,17.1-2.3c4.1-0.2,8.8,0,11.2-4c2.4-3.9,1.7-9.9,2.1-14.3 c0.2-2.7,0.6-5.8-1.7-7.7c-3.1-2.5-9.1-2.1-12.7-2.3c-6.6-0.4-13-1.5-19.4-3.2c-10.2-2.6-20.2-6-30-9.8C29.5,5.5,28.9,7.5,30.2,8 L30.2,8z"></path>
						<path class="fill-mode" d="M72.4,46c-3.9,0.6-8.2,3-8.9,7.2c-0.6,3.7,1.9,6.5,5.5,6.6c-0.2-0.6-0.3-1.3-0.5-1.9c-3.8,2-8,5.5-8.7,9.9 c-0.5,3.7,1.9,6.4,5.6,6.5c-0.2-0.6-0.5-1.2-0.7-1.8c-4.1,3.7-8.3,10.4-6.2,16.1c1.5,4.1,5.9,4.2,9.1,2c7.4-5,9.4-16.1,11.7-24 c1.9-6.7,3.7-13.4,5.2-20.1c0.3-1.3-1.7-1.9-2-0.6c-0.7,3.4-1.6,6.8-2.5,10.1c-2.2,8.3-4,17.3-7.7,25c-1.3,2.7-7,12.4-11.2,8.2 c-4.1-4.1,1.8-12.2,5-15.2c0.7-0.6,0.1-1.8-0.7-1.8c-4.8-0.1-3.5-5.9-1.3-8.4c1.5-1.7,3.4-3.1,5.4-4.1c1-0.5,0.5-1.9-0.5-1.9 c-4.2-0.1-4.1-5.3-1.4-7.6c1.5-1.2,3.4-1.9,5.2-2.1C74.3,47.8,73.7,45.8,72.4,46L72.4,46z"></path>
						<path class="fill-mode" d="M13.1,29.8c0.3-6.5,1.7-15.4,5.2-21c2.8-4.3,5.9-1.6,6.8,2.3c1.4,5.9,0.8,12.4,0.5,18.4 c-0.3,7.4-0.5,14.9-2.7,22.1c-0.8,2.8-2.7,8.8-6.3,9.5C12.1,62,13,45.8,13.1,42.5c0.1-1.3-2-1.3-2.1,0c-0.1,3.2-0.1,6.3,0.1,9.5 c0.2,3,0.2,8,2.5,10.4c4.7,4.9,10-5.6,11.1-8.7c2.3-6.7,2.8-13.9,3.1-20.9c0.3-6.5,0.8-13.2-0.1-19.7c-0.4-2.8-1-6.3-3.6-7.9 c-2.4-1.4-4.9-0.7-6.5,1.4c-2.8,3.4-3.8,8.5-4.7,12.7c-0.7,3.5-1.5,7.1-1.7,10.6C11,31.1,13.1,31.1,13.1,29.8L13.1,29.8z"></path>
						<path class="fill-mode" d="M15.7,63.4c4.5,0,10.9,0.4,12.9-4.5c3.7-9.1,3.9-20.4,4.4-30c0.1-1.3-2-1.3-2.1,0c-0.5,9-1.1,18.3-3.5,27 c-0.8,2.6-1.1,4.1-4,4.8c-2.5,0.6-5.1,0.6-7.7,0.6C14.4,61.3,14.4,63.4,15.7,63.4L15.7,63.4z"></path>
						<path class="fill-mode" d="M22,6.4c1.8-0.2,4.9-0.8,6.5,0c1.4,0.7,1.5,2.8,1.7,4.2c0.5,2.7,0.6,5.5,0.7,8.2c0,1.3,2.1,1.3,2.1,0 c0-3.2-0.3-6.4-0.9-9.6C31.9,8,31.6,6,30.4,5c-2-1.6-6-1-8.3-0.7C20.7,4.5,20.7,6.6,22,6.4L22,6.4z"></path>
						<path class="fill-primary" d="M82.9,20.8c0,8.6-1.3,17-3.9,25.2c-0.4,1.3,1.6,1.8,2,0.6c2.7-8.4,4-17,4-25.7C85,19.4,82.9,19.4,82.9,20.8 L82.9,20.8z"></path>
						<path class="fill-mode" d="M77.6,20.6c0.6,3,0.6,6,0.1,9c-0.2,1.3,1.8,1.9,2,0.6c0.6-3.4,0.6-6.7-0.1-10.1C79.4,18.7,77.4,19.3,77.6,20.6 L77.6,20.6z"></path>
						<path class="fill-mode" d="M77.2,34.5c-0.7,3.9-1.8,7.6-3.3,11.2c-0.5,1.2,1.3,2.3,1.8,1c1.6-3.8,2.8-7.7,3.6-11.7 C79.4,33.8,77.4,33.2,77.2,34.5L77.2,34.5z"></path>
						<path class="fill-primary" d="M41.1,47.2c4.3-1.5,8.7-2.7,13.1-3.7c1.3-0.3,0.8-2.3-0.6-2c-4.4,1-8.8,2.2-13.1,3.7 C39.3,45.6,39.9,47.6,41.1,47.2L41.1,47.2z"></path>
						<path class="fill-mode" d="M58.5,42.9c0.1,0.1,0.1,0.1,0.2,0.2c0.9,0.9,2.4-0.5,1.5-1.5c-0.1-0.1-0.1-0.1-0.2-0.2 C59,40.5,57.6,41.9,58.5,42.9L58.5,42.9z"></path>
					</svg>
				</figure>

				<!-- Title -->
				<div class="position-relative mb-5">
					<h2 class="display-6 mb-0 lh-sm-base">Discover exciting career <span class="text-primary">opportunities</span> at WeGen i
						<!-- <span class="position-relative">WeGen i
							<span class="position-absolute top-50 start-50 translate-middle z-index-n1 mt-n1 d-none d-lg-block">
								<svg width="225" height="87" viewbox="0 0 225 87" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M214 6.5H5V81H214V6.5Z" stroke="#A67C52" stroke-width="2"></path>
									<path class="fill-mode" d="M209 0H219V10H209V0Z"></path>
									<path class="fill-mode" d="M209 77H219V87H209V77Z"></path>
									<path class="fill-mode" d="M0 0H10V10H0V0Z"></path>
									<path class="fill-mode" d="M0 75H10V85H0V75Z"></path>
								</svg>
							</span>
						</span> -->
					</h2>
					<!-- Decoration -->
					<div class="position-absolute top-100 start-100 translate-middle ms-lg-7 ms-xl-6 d-none d-lg-block">
						<div class="podition-relative">
							<small class="badge text-bg-dark rounded-pill">The Designer</small>
							<span class="fs-5 position-absolute start-0 top-0 fa-rotate-270 mt-n4 ms-n4"><i class="bi bi-cursor-fill text-primary"></i></span>
						</div>
					</div>
				</div>

				<p>Join our team of digital pioneers, where creativity meets innovation. Explore exciting career opportunities at WeGen i and be part of shaping the digital future.</p>

				

				<!-- Suggestion -->
				<ul class="list-inline mb-0 mt-3">
					<li class="list-inline-item"> <span class="text-secondary">Suggestion: </span></li>
					<li class="list-inline-item"> <a class="text-primary-hover heading-color mb-lg-0" href="#">Web design,</a> </li>
					<li class="list-inline-item"> <a class="text-primary-hover heading-color mb-lg-0" href="#">Digital Marketing,</a> </li>
					<li class="list-inline-item"> <a class="text-primary-hover heading-color mb-lg-0" href="#">UI/UX design,</a> </li>
					<li class="list-inline-item"> <a class="text-primary-hover heading-color mb-lg-0" href="#">Web development</a> </li>
				</ul>
			</div>
			<!-- Hero content END -->
		</div> <!-- Row END -->
	</div>

	<!-- Slider START -->
	<div class="swiper" data-swiper-options='{
			"spaceBetween": 50, 
			"speed":"14000",
			"autoplay":{
				"delay": 0, 
				"disableOnInteraction": false
			},
			"breakpoints": {
				"576": {"slidesPerView": 2},
				"992": {"slidesPerView": 3},
				"1200": {"slidesPerView": 4},
				"1400": {"slidesPerView": 5}
			}}'>

		<div class="swiper-wrapper align-items-center">

			<!-- Slider item -->
			<div class="swiper-slide">
				<img src="assets/images/about/01.jpg" class="rounded" alt="">
			</div>
			<!-- Slider item -->
			<div class="swiper-slide">
				<img src="assets/images/about/02.jpg" class="rounded" alt="">
			</div>
			<!-- Slider item -->
			<div class="swiper-slide">
				<img src="assets/images/about/12.jpg" class="rounded" alt="">
			</div>
			<!-- Slider item -->
			<div class="swiper-slide">
				<img src="assets/images/about/04.jpg" class="rounded" alt="">
			</div>
			<!-- Slider item -->
			<div class="swiper-slide">
				<img src="assets/images/about/14.jpg" class="rounded" alt="">
			</div>
			<!-- Slider item -->
			<div class="swiper-slide">
				<img src="assets/images/bg/01.jpg" class="rounded" alt="">
			</div>
			<!-- Slider item -->
			<div class="swiper-slide">
				<img src="assets/images/about/16.jpg" class="rounded" alt="">
			</div>
			<!-- Slider item -->
			<div class="swiper-slide">
				<img src="assets/images/about/08.jpg" class="rounded" alt="">
			</div>
			<!-- Slider item -->
			<div class="swiper-slide">
				<img src="assets/images/about/03.jpg" class="rounded" alt="">
			</div>
		</div>		
	</div>
	<!-- Slider END -->
</section>
<!-- =======================
Main Banner END -->

<!-- =======================


<!- =======================
Value START -->
<section class="pt-0">
	<div class="container">
		<div class="row align-items-center">
			<!-- Image -->
			<div class="col-lg-5 text-center position-relative">

				<!-- SVG decoration -->
				<figure class="position-absolute top-0 end-0 mt-n7 me-lg-n5">
					<svg width="120.4px" height="124.5px" viewbox="0 0 120.4 124.5" style="enable-background:new 0 0 120.4 124.5;" xml:space="preserve">
						<path class="fill-mode" d="M92.9,58.4c-0.2-4.7-1.8-9-5-12.6c-3-3.3-6.4-6.2-10.4-8.4c-3.4-1.9-7-2.9-10.8-3.3c-3.1-0.4-6,0.2-8.6,1.8 c-6.5,3.8-11.5,9.1-14.6,16.1c-1.1,2.5-1.5,5.1-1.3,7.7c0.3,3.2,0.9,6.4,2.1,9.4c2.1,5.4,5.7,9.4,11.5,11c1.8,0.5,3.5,1,5.3,1.6 c2.1,0.7,4.3,0.8,6.5,0.5c2.4-0.3,4.8-0.8,7.1-1.4c1.8-0.5,3.4-1.5,4.6-2.9c2-2.2,3.9-4.6,5.2-7.3c0.7-1.4,1.3-3,1.6-4.5 c1.1-6.4-0.7-12.1-4.5-17.2c-1.8-2.5-4.3-4.2-7.2-5c-3-0.8-6.1-1.1-9.2-0.8c-4.5,0.4-8.4,2.2-11.4,5.7c-2.1,2.4-3.6,5-4.3,8.1 c-0.6,2.4-0.5,4.8-0.6,7.2c-0.2,5.8,6.2,12.5,12.3,12c2.7-0.2,5.5-0.5,8.2-0.7c5.4-0.5,9.3-4.9,9.8-9.6c0.2-1.9,0.2-3.9,0.1-5.8 c-0.1-2.5-1.3-4.6-3.1-6.3c-3.1-2.9-6.8-4.1-11.1-3.7c-2.4,0.2-4.4,1.2-5.8,3.2c-1.8,2.5-2.8,5.3-3.1,8.3c-0.2,1.9,0.3,3.7,1.9,5 c2.7,2.2,5.8,3.3,9.2,3c1.6-0.1,2.8-0.9,3.8-2.2c1.6-2.1,1.6-4.5,1.1-6.9c-1-4.3-4.6-5.5-8.2-2.9c-0.3,0.2-0.4,0.7-0.6,1.1 c0.1,0.1,0.3,0.3,0.4,0.4c0.9-0.4,1.8-0.9,2.8-1.2c1-0.3,2-0.1,2.8,0.7c1.6,1.8,1.9,5.4,0.5,7.4c-0.9,1.2-2.1,1.9-3.5,1.8 c-2.3-0.1-4.5-0.9-6.4-2.3c-1.3-1-1.8-2.3-1.7-3.9c0.2-1.7,0.7-3.4,1.4-4.9c1.8-3.6,4-4.9,8.1-4.4c0.9,0.1,1.8,0.3,2.7,0.6 c4.5,1.7,6.8,5,6.6,9.8c0,1.4-0.2,2.8-0.5,4.1c-0.9,3.2-2.9,5.5-6.3,6.1c-2.9,0.5-5.9,0.7-8.9,0.9c-5.6,0.4-10.5-5.4-10.3-9.9 c0.1-2.1,0.2-4.1,0.6-6.1c1.5-6.9,7.2-11.6,14.2-11.9c1.7-0.1,3.5,0,5.2,0.2c3.5,0.4,6.4,1.9,8.5,4.7c3.1,4.2,4.6,8.9,4.2,14.2 c-0.3,3.5-2.1,6.2-4,9c-2.1,3-4.7,5-8.4,5.4c-1.1,0.1-2.3,0.4-3.4,0.7c-2,0.5-3.9,0.4-5.8-0.1c-2.3-0.6-4.6-1.3-6.9-2 c-3.1-1-5.4-3-7.1-5.7c-2.7-4.3-3.8-9.1-3.8-14.1c0-2,0.6-3.8,1.5-5.6c2.9-6,7.3-10.5,12.9-14c2.2-1.4,4.7-1.9,7.3-1.6 c4.2,0.4,8.1,1.6,11.6,3.9c3.1,2,5.8,4.5,8.3,7.2c1.7,1.9,2.9,4.1,3.6,6.6c1.5,5,1.1,10.1-0.2,15c-2.2,8-9.4,14.2-17.5,15.9 c-1.7,0.4-3.3,0.9-4.9,1.5c-1.1,0.4-1.6,1.4-1.2,2.1c0.5,0.8,1.4,0.7,2.1,0.5c2.5-0.7,5.1-1.3,7.6-2.2c1.4-0.5,2.8-1.1,4-1.9 c2.9-1.7,5.4-3.9,7.6-6.4c2.6-3,4.5-6.5,5.2-10.4C92.8,65.1,93,61.7,92.9,58.4z"></path>
						<path class="fill-primary" d="M98.2,97.6c-1.9-3-3.8-6-5.7-9c-0.7-1-1.2-2.2-3-3c0,0.8-0.1,1.3,0,1.7c0.4,0.9,1,1.8,1.5,2.7 c2.8,5,5.7,9.9,9.2,14.5c1,1.2,2.2,2.3,3.4,3.4c0.3,0.3,0.8,0.4,1.2-0.3c-0.5-0.8-1.1-1.8-1.8-2.7C101.4,102.3,99.7,100,98.2,97.6z "></path>
						<path class="fill-primary" d="M75.3,98c-0.5-1.5-1.2-3-1.9-4.4c-0.1-0.3-0.6-0.4-0.9-0.6c-0.2,0.2-0.3,0.3-0.5,0.5c0.1,0.5,0.2,1.1,0.4,1.6 c1.6,5.3,3.1,10.5,4.8,15.8c0.5,1.6,1.1,3.3,1.7,4.9c0.5,1.3,1.4,1.8,1.9,1.4c0.8-0.6,0.5-1.4,0.2-2.2C79,109.3,77.2,103.6,75.3,98 z"></path>
						<path class="fill-primary" d="M26.5,69.5c-5.5,1.6-11,3.2-16.5,4.8c-2.1,0.6-4.1,1.4-6.1,2.2c-0.6,0.2-1.1,0.7-1.9,1.2 c5.9-0.4,24.8-6,28.2-8.3C28.8,68.8,27.6,69.2,26.5,69.5z"></path>
						<path class="fill-primary" d="M55,96.3c-2.2,7.9-4.5,15.8-6.7,23.8c-0.3,1.2-0.4,2.5-0.7,4.4c0.6-0.9,0.8-1.2,0.9-1.5 c2.6-7.8,5.1-15.7,7.6-23.5c0.3-1.1,0.5-2.2,0.6-3.4c0-0.4-0.4-0.9-0.8-1.7C55.5,95.3,55.2,95.8,55,96.3z"></path>
						<path class="fill-primary" d="M25.2,48.7c0.6,0.3,1.3,0.5,2,0.6c0.5,0.1,1.1-0.1,1.6-0.2c0-0.2,0-0.3,0-0.5c-3-1.4-6-3-9-4.2 c-3.2-1.3-6.4-2.4-9.7-3.5c-3.1-1-6.1-2.3-10-2.8c0.8,0.7,1.1,1.1,1.5,1.3c1.5,0.7,2.9,1.3,4.4,1.9C12.4,43.6,18.9,45.7,25.2,48.7z "></path>
						<path class="fill-primary" d="M38.2,86.5c-0.7,0.3-1.4,0.8-2,1.3c-5.1,4.5-10.1,9-14.5,14.2c-0.9,1-1.6,2.2-2.5,3.3c0.1,0.1,0.2,0.3,0.4,0.4 c6.7-6.2,13.4-12.3,20.1-18.5c0.1-0.1,0-0.4,0-0.9C39.2,86.4,38.6,86.3,38.2,86.5z"></path>
						<path class="fill-primary" d="M106.5,77.4c-1.1-1.1-2.4-2.2-3.6-3.1c-0.7-0.5-1.6-0.8-2.5-1c-0.5-0.1-1.2,0-1,1.1c2.1,0.8,3.6,2.5,5.2,4.1 c1.3,1.3,2.4,2.7,3.8,3.9c1.8,1.5,3.8,3,5.7,4.3c1,0.7,2.2,1.3,4.1,0.7c-0.7-0.7-1.1-1.1-1.5-1.4C112.9,83.6,109.6,80.5,106.5,77.4 z"></path>
						<path class="fill-primary" d="M33.5,27.3c0.7,0.7,1.6,1.3,2.5,1.8c0.5,0.3,1.3,0.4,1.9,0.5c-2.3-2.2-4-4.6-6-6.8c-3.5-3.8-7-7.6-10.5-11.3 c-0.4-0.4-0.7-0.9-1.4-0.6c-0.5,0.6-0.1,1.1,0.3,1.5C24.6,17.4,29.1,22.4,33.5,27.3z"></path>
						<path class="fill-primary" d="M53.3,20c0.1,1.1,0.3,2.3,0.6,3.4c0.1,0.4,0.7,0.6,1.3,1c-0.1-3.1-0.1-5.8-0.3-8.5c-0.1-2.6-0.4-5.2-0.6-7.9 c-0.4-5-0.6-5.7-2-8c0,0.9-0.1,1.6-0.1,2.2C52.6,8.2,52.9,14.1,53.3,20z"></path>
						<path class="fill-primary" d="M101.1,56.2c0.2,0.4,0.3,0.7,0.5,0.7c4.9,1.1,9.8,2.2,14.7,3.1c1.3,0.3,2.7,0.4,4.1-0.5 c-0.8-0.3-1.7-0.6-2.5-0.8c-5.2-0.9-10.3-1.9-15.5-2.7C102,56,101.6,56.1,101.1,56.2z"></path>
						<path class="fill-primary" d="M97.8,36.8c4.7-1.9,8.9-4.8,12.6-8.3c0.3-0.3,0.7-0.6,0.1-1.3c-2.5,1.7-5.1,3.5-7.7,5.1 c-2.6,1.6-5.3,3-8.1,4.6C95.9,37.7,96.8,37.2,97.8,36.8z"></path>
						<path class="fill-primary" d="M81.6,11.5c0.5-1.6,0.8-3.2,1.2-4.8c-0.3,0.2-0.6,0.3-0.7,0.5c-1.6,4.3-3.2,8.5-4.7,12.8 c-0.2,0.6-0.1,1.3-0.2,1.9C79.1,18.6,80.5,15.1,81.6,11.5z"></path>
						<path class="fill-primary" d="M82.8,6.5c0,0,0,0.1,0,0.1C82.8,6.6,82.8,6.6,82.8,6.5C82.9,6.6,82.8,6.5,82.8,6.5z"></path>
					</svg>
				</figure>

				<img src="assets/images/about/17.jpg" class="rounded" alt="">
			</div>

			<!-- Content -->
			<div class="col-lg-7 ps-lg-7 mt-5 mt-lg-0">
				<h2 class="mb-4">Company value to reach quality in work-life</h2>
				<p class="mb-4 mb-sm-5">Join our team to experience a workplace that values and supports your quality of life, empowering you to reach new heights in your career.</p>

				<!-- Feature START -->
				<div class="row row-cols-1 row-cols-sm-2 g-4 g-sm-6">
					<!-- item -->
					<div class="col">
						<div class="card card-body bg-transparent p-0">
							<span class="h4 text-primary"><i class="bi bi-suit-heart"></i></span>
							<h6 class="mb-2">Honesty</h6>
							<p class="mb-0">The implementation of multilingual support involves.</p>
						</div>
					</div>
					
					<!-- item -->
					<div class="col">
						<div class="card card-body bg-transparent p-0">
							<span class="h4 text-primary"><i class="bi bi-fire"></i></span>
							<h6 class="mb-2">Passion</h6>
							<p class="mb-0">It focuses on creating an intuitive and efficient design.</p>
						</div>
					</div>

					<!-- item -->
					<div class="col">
						<div class="card card-body bg-transparent p-0">
							<span class="h4 text-primary"><i class="bi bi-bullseye"></i></span>
							<h6 class="mb-2">Impact</h6>
							<p class="mb-0"> It ensures that users can access critical assistance whenever they need it.</p>
						</div>
					</div>

					<!-- item -->
					<div class="col">
						<div class="card card-body bg-transparent p-0">
							<span class="h4 text-primary"><i class="bi bi-trophy"></i></span>
							<h6 class="mb-2">Recognition</h6>
							<p class="mb-0">These advanced functionalities are designed to provide users.</p>
						</div>
					</div>
					
				</div>
				<!-- Feature END -->
			</div>
		</div> <!-- Row END -->
	</div>
</section>	
<!-- =======================
Value END -->

<!-- =======================
Job list START -->
<section class="pt-0">
		<div class="container">
			<!-- Title -->
			<div class="inner-container-small text-center mb-4 mb-sm-6">
				<h2 class="mb-3">Open Position</h2>
				<p class="mb-0">Our friendly team members are always willing to help you understand your present technology requirements and provide suggestions on your future needs.</p>
			</div>
	
			<!-- List START -->
			<div class="row g-4 g-lg-6">
				<div class="col-lg-9 mx-auto">
					<!-- Tabs -->
					<ul class="nav nav-pills gap-1 nav-pills-light justify-content-center align-items-center mb-3 mb-sm-5">
						<li class="nav-item">
							<span class="pe-2">Browse by:</span>
						</li>
						<li class="nav-item" role="presentation">
							<button class="nav-link active" id="pills-all-tab" data-bs-toggle="pill" data-bs-target="#pills-all" type="button" role="tab" aria-controls="pills-all" aria-selected="true">All jobs</button>
						</li>
						<li class="nav-item" role="presentation">
							<button class="nav-link" id="pills-development-tab" data-bs-toggle="pill" data-bs-target="#pills-development" type="button" role="tab" aria-controls="pills-development" aria-selected="false">Development</button>
						</li>
						<li class="nav-item" role="presentation">
							<button class="nav-link" id="pills-hr-tab" data-bs-toggle="pill" data-bs-target="#pills-hr" type="button" role="tab" aria-controls="pills-hr" aria-selected="false">HR</button>
						</li>
						<li class="nav-item" role="presentation">
							<button class="nav-link" id="pills-marketing-tab" data-bs-toggle="pill" data-bs-target="#pills-marketing" type="button" role="tab" aria-controls="pills-marketing" aria-selected="false">Marketing</button>
						</li>
						<li class="nav-item" role="presentation">
							<button class="nav-link" id="pills-design-tab" data-bs-toggle="pill" data-bs-target="#pills-design" type="button" role="tab" aria-controls="pills-design" aria-selected="false">Design</button>
						</li>
					</ul>

					<!-- Tab content START -->
					<div class="tab-content" id="pills-tabContent">
						<!-- Content item -->
						<div class="tab-pane fade show active" id="pills-all" role="tabpanel" aria-labelledby="pills-all-tab" tabindex="0">
							<!-- Job item -->
							<div class="card card-body bg-light d-md-flex justify-content-md-between align-items-md-center flex-md-row p-4 mb-3">
								<div class="mb-4 mb-md-0">
									<!-- Badge -->
									<div class="badge text-bg-dark mb-3">Information Technology</div>
									<!-- Title -->
									<h5 class="mb-0"><a href="#" class="stretched-link">UI/UX and Product Designer</a></h5>
		
									<!-- List -->
									<!-- <div class="hstack gap-3 gap-sm-4 flex-wrap mt-3">
										<span><i class="bi bi-geo-alt me-2"></i>Tiruchengode, India</span>
										<span><i class="bi bi-clock me-2"></i>Full Time</span>
										<span><i class="bi bi-briefcase me-2"></i>$32,000</span>
									</div> -->
								</div>
								<!-- Button -->
								<div><a href="#" class="btn btn-primary mb-0">Apply now<i class="bi bi-arrow-right ms-2"></i></a></div>
							</div>
		
							<!-- Job item -->
							<div class="card card-body bg-light d-md-flex justify-content-md-between align-items-md-center flex-md-row p-4 mb-3">
								<div class="mb-4 mb-md-0">
									<!-- Badge -->
									<div class="badge text-bg-dark mb-3">Business</div>
									<!-- Title -->
									<h5 class="mb-0"><a href="#" class="stretched-link">Social Media Manager</a></h5>
		
									<!-- List -->
									<!-- <div class="hstack gap-3 gap-sm-4 flex-wrap mt-3">
										<span><i class="bi bi-geo-alt me-2"></i>USA, New York</span>
										<span><i class="bi bi-clock me-2"></i>Full time</span>
										<span><i class="bi bi-briefcase me-2"></i>$41,000</span>
									</div> -->
								</div>
								<!-- Button -->
								<div><a href="#" class="btn btn-primary mb-0">Apply now<i class="bi bi-arrow-right ms-2"></i></a></div>
							</div>
		
							<!-- Job item -->
							<div class="card card-body bg-light d-md-flex justify-content-md-between align-items-md-center flex-md-row p-4 mb-3">
								<div class="mb-4 mb-md-0">
									<!-- Badge -->
									<div class="badge text-bg-dark mb-3">Development</div>
									<!-- Title -->
									<h5 class="mb-0"><a href="#" class="stretched-link">Web Development</a></h5>
		
									<!-- List -->
									<!-- <div class="hstack gap-3 gap-sm-4 flex-wrap mt-3">
										<span><i class="bi bi-geo-alt me-2"></i>Mumbai, India</span>
										<span><i class="bi bi-clock me-2"></i>Full time</span>
										<span><i class="bi bi-briefcase me-2"></i>$18,000</span>
									</div> -->
								</div>
								<!-- Button -->
								<div><a href="#" class="btn btn-primary mb-0">Apply now<i class="bi bi-arrow-right ms-2"></i></a></div>
							</div>
		
							<!-- Job item -->
							<div class="card card-body bg-light d-md-flex justify-content-md-between align-items-md-center flex-md-row p-4 mb-3">
								<div class="mb-4 mb-md-0">
									<!-- Badge -->
									<div class="badge text-bg-dark mb-3">Information Technology</div>
									<!-- Title -->
									<h5 class="mb-0"><a href="#" class="stretched-link">App Development</a></h5>
		
									<!-- List -->
									<!-- <div class="hstack gap-3 gap-sm-4 flex-wrap mt-3">
										<span><i class="bi bi-geo-alt me-2"></i>UK, London</span>
										<span><i class="bi bi-clock me-2"></i>Full time</span>
										<span><i class="bi bi-briefcase me-2"></i>$29,000</span>
									</div> -->
								</div>
								<!-- Button -->
								<div><a href="#" class="btn btn-primary mb-0">Apply now<i class="bi bi-arrow-right ms-2"></i></a></div>
							</div>
						</div>

						<!-- Content item -->
						<div class="tab-pane fade" id="pills-development" role="tabpanel" aria-labelledby="pills-development-tab" tabindex="0">
							<!-- Job item -->
							<div class="card card-body bg-light d-md-flex justify-content-md-between align-items-md-center flex-md-row p-4 mb-3">
								<div class="mb-4 mb-md-0">
									<!-- Badge -->
									<div class="badge text-bg-dark mb-3">Information Technology</div>
									<!-- Title -->
									<h5 class="mb-0"><a href="#" class="stretched-link">web Development</a></h5>
		
									<!-- List -->
									<!-- <div class="hstack gap-3 gap-sm-4 flex-wrap mt-3">
										<span><i class="bi bi-geo-alt me-2"></i>USA, ontario</span>
										<span><i class="bi bi-clock me-2"></i>San Francisco</span>
										<span><i class="bi bi-briefcase me-2"></i>$32,000</span>
									</div> -->
								</div>
								<!-- Button -->
								<div><a href="#" class="btn btn-primary mb-0">Apply now<i class="bi bi-arrow-right ms-2"></i></a></div>
							</div>
		
							<!-- Job item -->
							<div class="card card-body bg-light d-md-flex justify-content-md-between align-items-md-center flex-md-row p-4 mb-3">
								<div class="mb-4 mb-md-0">
									<!-- Badge -->
									<div class="badge text-bg-dark mb-3">Development</div>
									<!-- Title -->
									<h5 class="mb-0"><a href="#" class="stretched-link">App Development</a></h5>
		
									<!-- List -->
									<!-- <div class="hstack gap-3 gap-sm-4 flex-wrap mt-3">
										<span><i class="bi bi-geo-alt me-2"></i>USA, New York</span>
										<span><i class="bi bi-clock me-2"></i>Full time</span>
										<span><i class="bi bi-briefcase me-2"></i>$41,000</span>
									</div> -->
								</div>
								<!-- Button -->
								<div><a href="#" class="btn btn-primary mb-0">Apply now<i class="bi bi-arrow-right ms-2"></i></a></div>
							</div>
						</div>

						<!-- Content item -->
						<div class="tab-pane fade" id="pills-hr" role="tabpanel" aria-labelledby="pills-hr-tab" tabindex="0">
							<!-- Job item -->
							<div class="card card-body bg-light d-md-flex justify-content-md-between align-items-md-center flex-md-row p-4 mb-3">
								<div class="mb-4 mb-md-0">
									<!-- Badge -->
									<div class="badge text-bg-dark mb-3">Manager</div>
									<!-- Title -->
									<h5 class="mb-0"><a href="#" class="stretched-link">Project Manager</a></h5>
		
									<!-- List -->
									<!-- <div class="hstack gap-3 gap-sm-4 flex-wrap mt-3">
										<span><i class="bi bi-geo-alt me-2"></i>Mumbai, India</span>
										<span><i class="bi bi-clock me-2"></i>Full time</span>
										<span><i class="bi bi-briefcase me-2"></i>$18,000</span>
									</div> -->
								</div>
								<!-- Button -->
								<div><a href="#" class="btn btn-primary mb-0">Apply now<i class="bi bi-arrow-right ms-2"></i></a></div>
							</div>
		
							<!-- Job item -->
							<div class="card card-body bg-light d-md-flex justify-content-md-between align-items-md-center flex-md-row p-4 mb-3">
								<div class="mb-4 mb-md-0">
									<!-- Badge -->
									<div class="badge text-bg-dark mb-3">Business</div>
									<!-- Title -->
									<h5 class="mb-0"><a href="#" class="stretched-link">Social Media Manager</a></h5>
		
									<!-- List -->
									<!-- <div class="hstack gap-3 gap-sm-4 flex-wrap mt-3">
										<span><i class="bi bi-geo-alt me-2"></i>UK, London</span>
										<span><i class="bi bi-clock me-2"></i>Full time</span>
										<span><i class="bi bi-briefcase me-2"></i>$29,000</span>
									</div> -->
								</div>
								<!-- Button -->
								<div><a href="#" class="btn btn-primary mb-0">Apply now<i class="bi bi-arrow-right ms-2"></i></a></div>
							</div>
						</div>

						<!-- Content item -->
						<div class="tab-pane fade" id="pills-marketing" role="tabpanel" aria-labelledby="pills-marketing-tab" tabindex="0">
							<div class="text-center justify-content-center p-sm-4">
								<span class="display-5 text-primary"><i class="bi bi-slash-circle"></i></span>
								<h5 class="mb-0 mt-2 mt-sm-4">There are no job openings available for this role.</h5>
							</div>
						</div>

						<!-- Content item -->
						<div class="tab-pane fade" id="pills-design" role="tabpanel" aria-labelledby="pills-design-tab" tabindex="0">
							<div class="text-center justify-content-center p-sm-4">
								<span class="display-5 text-primary"><i class="bi bi-slash-circle"></i></span>
								<h5 class="mb-0 mt-2 mt-sm-4">There are no job openings available for this role.</h5>
							</div>
						</div>
					</div>
					<!-- Tab content END -->
				</div>
			</div>
			<!-- List END -->
		</div>
</section>
<!-- =======================
Job list END -->

<!-- =======================
CTA START -->
<section class="bg-light position-relative overflow-hidden py-7">

	<!-- SVG decoration -->
	<figure class="position-absolute top-0 start-0 ms-n8 mt-5">
		<svg width="371" height="354" viewbox="0 0 371 354" fill="none" xmlns="http://www.w3.org/2000/svg">
			<ellipse cx="172.5" cy="176.5" rx="131.5" ry="125.5" fill="url(#paint0_linear_195_2)"></ellipse>
			<ellipse cx="185.5" cy="177" rx="185.5" ry="177" fill="url(#paint1_linear_195_2)"></ellipse>
			<defs>
			<lineargradient id="paint0_linear_195_2" x1="172.5" y1="51" x2="172.5" y2="302" gradientunits="userSpaceOnUse">
			<stop offset="0.0569271" stop-color="#D9D9D9" stop-opacity="0.5"></stop>
			<stop offset="0.998202" stop-color="#D9D9D9" stop-opacity="0"></stop>
			</lineargradient>
			<lineargradient id="paint1_linear_195_2" x1="185.5" y1="0" x2="185.5" y2="354" gradientunits="userSpaceOnUse">
			<stop offset="0.0569271" stop-color="#D9D9D9" stop-opacity="0.2"></stop>
			<stop offset="0.998202" stop-color="#D9D9D9" stop-opacity="0"></stop>
			</lineargradient>
			</defs>
		</svg>
	</figure>

	<!-- Decoration -->
	<div class="position-absolute end-0 bottom-0 me-sm-5 d-none d-md-block">
		<img src="assets/images/elements/cta-vector.svg" class="h-200px" alt="vector-img">
	</div>

	<div class="container position-relative">
		<div class="row align-items-center">
			<!-- Title and content -->
			<div class="col-md-10 col-xl-7 mb-4 mb-xl-0">
				<h2>Subscribe to our newsletter</h2>
				<p>Our passion for customer excellence is just one reason why we are the market leader. We've always worked very hard to give our customers the best experience.</p>
			</div>

			<!-- Input -->
			<form class="col-md-7 col-xl-4 ms-xl-auto">
				<input class="form-control mb-3" type="email" placeholder="Enter your email address">
				<a href="#" class="btn btn-dark mb-0 d-grid">Subscribe now</a>
			</form>
		</div>
	</div>
</section>
<!-- =======================
CTA START -->
	
@endsection