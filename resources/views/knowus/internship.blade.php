@extends('layouts.website')

@section('content')

<!-- =======================
Career detail START -->
<section class="pt-8">
	<div class="container">
		<div class="row">
			<div class="col-lg-10 col-xl-8 mx-auto">
				<!-- Breadcrumb & title -->
				<div class="text-center mb-5">
					<!-- Breadcrumb -->
					<div class="d-flex justify-content-center mb-2">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb breadcrumb-dots mb-1">
								<li class="breadcrumb-item"><a href="#">Home</a></li>
								<li class="breadcrumb-item active" aria-current="page">Portfolio Showcase</li>
							</ol>
						</nav>
					</div>
					<!-- Title -->
					<h2>UI/UX and Product Designer</h2>
				</div>

				<!-- Info -->
				<div class="card card-body bg-dark d-md-flex justify-content-md-between align-items-md-center flex-md-row p-5 mb-6" data-bs-theme="dark">
					<div class="mb-3 mb-md-0">
						<!-- Title -->
						<h4 class="mb-0">Information</h4>
						<!-- List -->
						<div class="hstack gap-3 gap-md-4 flex-wrap mt-3">
							<span class="badge text-bg-white">IT</span>
							<span><i class="bi bi-geo-alt me-2"></i>USA, ontario</span>
							<span><i class="bi bi-clock me-2"></i>San Francisco</span>
							<span><i class="bi bi-briefcase me-2"></i>$32,000</span>
						</div>
					</div>	
					<!-- Button -->
					<a href="#contact-form" class="btn btn-primary mb-0">Apply now<i class="bi bi-arrow-right ms-2"></i></a>
				</div>

				<!-- Detail list -->
				<div class="row">
					<div class="col-md-6">
						<h6>Skills:</h6>
						<ul class="list-group list-group-borderless mb-4">
							<li class="list-group-item d-flex mb-0"><i class="bi bi-patch-check text-primary me-2"></i>Involving The Team In Decisions That Affect Them</li>
							<li class="list-group-item d-flex mb-0"><i class="bi bi-patch-check text-primary me-2"></i>Displays technical or professional expertise</li>
							<li class="list-group-item d-flex mb-0"><i class="bi bi-patch-check text-primary me-2"></i>Displays high integrity and honesty</li>
							<li class="list-group-item d-flex mb-0"><i class="bi bi-patch-check text-primary me-2"></i>Solves problems and analyzes issues</li>
							<li class="list-group-item d-flex mb-0"><i class="bi bi-patch-check text-primary me-2"></i>Communicates powerfully and prolifically</li>
						</ul>
					</div>

					<div class="col-md-6">
						<h6>Responsibilities:</h6>
						<ul class="list-group list-group-borderless mb-4">
							<li class="list-group-item d-flex mb-0"><i class="bi bi-patch-check text-primary me-2"></i>Writing SEO Performant Code</li>
							<li class="list-group-item d-flex mb-0"><i class="bi bi-patch-check text-primary me-2"></i>Converting Design to Code</li>
						</ul>
					</div>

					<div class="col-md-6">
						<h6>Experience:</h6>
						<ul class="list-group list-group-borderless mb-4">
							<li class="list-group-item mb-0"><i class="bi bi-patch-check text-primary me-2"></i>Bachelor Degree</li>
						</ul>
					</div>

					<div class="col-md-6">
						<h6>Educational requirements:</h6>
						<p>Ideally, 2 years to 4 years experience in an agency environment working in multi-tiered tasks</p>
					</div>
				</div>

				<!-- Description -->
				<h6 class="mt-4">Description</h6>
				<p>Perceived end knowledge certainly day sweetness why cordially. Ask a quick six seven offer see among. Handsome met debating sir dwelling age material. As style lived he worse dried. Offered related so visitors we private removed. Moderate do subjects to distance.</p>
				<p>Speedily say has suitable disposal add boy. On fourth doubt miles of child. Exercise joy man children rejoiced. Yet uncommonly his ten who diminution astonished. Demesne's new manners savings staying had. Under folly balls, death own point now men. Match way she avoids seeing death. She drifts their fat off.</p>
				<p>Passage its ten led hearted removal cordial. Preference any astonished unreserved Mrs. Prosperous understood Middletons in conviction an uncommonly do. Supposing so be resolving breakfast am or perfectly. It drew a hill from me. Valley by oh twenty direct me so. Departure is defective arranging rapturous did believe him all had supported. Family months lasted simply set nature vulgar him. Picture for attempt joy excited ten carried manners talking how. Suspicion neglected the resolving agreement perceived</p>
				
				<!-- Email detail -->
				<div class="row mt-5">
					<div class="col-md-6">
						<h6>Apply via E-mail</h6>
						<p>If you need to send us mail regarding job opportunities, please write to us at <a href="#">info@example.com</a> for more information.</p>
					</div>

					<div class="col-md-6">
						<h6>Apply via phone number</h6>
						<p class="mb-1">Apply Now Via Whats App, Send us Your Resume on:</p>
						<a href="#">+79 2589 63598</a>
					</div>
				</div>

				<!-- Form -->
				<div class="card card-body bg-light border p-sm-5 mt-5" id="contact-form">

					<form class="row g-4">
						<div class="col-md-6">
							<label class="form-label heading-color">Your name *</label>
							<input type="text" class="form-control form-control-lg" placeholder="Full name">
						</div>

						<div class="col-md-6">
							<label class="form-label heading-color">Email address *</label>
							<input type="email" class="form-control form-control-lg" id="floatingInput" placeholder="name@example.com">
						</div>

						<div class="col-md-6">
							<label class="form-label heading-color">Phone number *</label>
							<input type="text" class="form-control form-control-lg" placeholder="(xxx) xx xxxx">
						</div>

						<div class="col-md-6">
							<label class="form-label heading-color">Applying for (Job position) *</label>
							<input type="text" class="form-control form-control-lg" placeholder="job title">
						</div>

						<div class="col-12">
							<label class="form-label heading-color">Message *</label>
							<textarea class="form-control" placeholder="Write your message here...." id="floatingTextarea2" style="height: 150px"></textarea>
						</div>
						<!-- Button -->
						<div class="col-12 d-grid">
							<button class="btn btn-lg btn-primary mb-0">Send a message</button>
						</div>	
					</form>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- =======================
Career detail END -->

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
	<div class="position-absolute end-0 bottom-0 me-sm-5">
		<img src="{{asset('assets/images/elements/cta-vector.svg')}}" class="h-200px" alt="vector-img">
	</div>

	<div class="container position-relative">
		<div class="row align-items-center">
			<!-- Title and content -->
			<div class="col-md-7">
				<h2>Subscribe to our newsletter</h2>
				<p>Our passion for customer excellence is just one reason why we are the market leader. We've always worked very hard to give our customers the best experience.</p>
			</div>

			<!-- Input -->
			<form class="col-md-5 col-lg-4 ms-auto">
				<input class="form-control mb-3" type="email" placeholder="Enter your email address">
				<a href="#" class="btn btn-dark mb-0 d-grid">Subscribe now</a>
			</form>
		</div>
	</div>
</section>
<!-- =======================
CTA START -->
	
@endsection