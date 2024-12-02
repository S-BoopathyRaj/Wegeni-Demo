@extends('layouts.website')

@section('content')

<!-- =======================
Services start -->
<section class="pb-0">
	<div class="container">
		<!-- Title -->
		<div class="row g-4 g-md-5">

			<div class="col-md-6 col-lg-4">
				<h2 class="mb-0">Gen-i's Video Vortex</h2>
			</div>

			<!-- Item -->
			<div class="col-md-6 col-lg-4">
				<div class="card card-body border p-4 h-100">
					<h6 class="text-primary mb-4">01.</h6>
					<h5>Our Core Services</h5>
					<p class="mb-0">Our Video Advertising services create captivating videos that drive engagement and conversions. We optimize for visibility, deliver high-quality production, and leverage analytics for performance.</p>
				</div>
			</div>

			<!-- Item -->
			<div class="col-md-6 col-lg-4">
				<div class="card card-body border p-4 h-100">
					<h6 class="text-primary mb-4">02.</h6>
					<h5>Our Video Production Expertise</h5>
					<p class="mb-0">We craft compelling video stories that resonate with your audience. Our expert team handles every stage of production, from concept to completion. We optimize videos for maximum reach and engagement. Our videos elevate your brand and drive results.</p>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- =======================
Services END -->

<!-- =======================
Our solution START -->
<Section class="pt-0">
	<div class="container pt-8">
		<!-- Title -->
		<div class=" text-center mb-4 mb-sm-7">
			<h2 class="mb-0 mt-3">Empower Your Business Growth with Our Innovative Solutions</h2>
		</div>

		<div class="row g-4 g-lg-5">
			<!-- Iamge -->
			<div class="col-md-5 h-100">
				<img src="{{asset('assets/images/about/video.png')}}" class="rounded-3" alt="">
			</div>

			<div class="col-md-7 h-100">
				<div class="row g-4 g-lg-5">
					<!-- Feature item -->
					<div class="col-lg-6">
						<div class="card bg-light rounded h-100 overflow-hidden p-5">
							<!-- Card body -->
							<div class="card-body bg-transparent p-0">
								<div class="badge text-bg-secondary mb-3">Feature</div>
								<p class="small mb-0">Amplify your brand’s reach and impact with compelling video advertisements that captivate your audience today.</p>
							</div>
		
							<!-- Card footer -->
							<div class="card-footer bg-transparent text-end p-0 mt-3">
								<span class="fs-1 fw-semibold heading-color">42%</span>
							</div>
						</div>
					</div>

					<!-- Feature item -->
					<div class="col-lg-6">
						<div class="card bg-light rounded h-100 overflow-hidden p-5">
							<!-- Card body -->
							<div class="card-body bg-transparent p-0">
								<div class="badge text-bg-primary mb-3">Analytics</div>
								<p class="small mb-0">Harness the power of video to drive engagement and boost your brand’s visibility, resulting in exponential growth today.</p>
							</div>
		
							<!-- Card footer -->
							<div class="card-footer bg-transparent text-end p-0 mt-3">
								<span class="fs-1 fw-semibold heading-color">5X</span>
							</div>
						</div>
					</div>

					<!-- Feature item -->
					<div class="col-12">
						<div class="card bg-light rounded h-100 overflow-hidden p-5">
							<!-- Card body -->
							<div class="card-body bg-transparent p-0">
								<div class="badge text-bg-success mb-3">Revenue</div>
								<p class="small mb-0">Unlock unprecedented business growth by leveraging high-performing video advertisements that maximize ROI today.</p>
							</div>
		
							<!-- Card footer -->
							<div class="card-footer bg-transparent text-end p-0 mt-3">
								<span class="fs-1 fw-semibold heading-color">₹2.3M</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</Section>
<!-- =======================
Our solution END -->

<!-- =======================
Core feature START -->
<section class="pt-4">
	<div class="container">
		<!-- Title -->
		<div class=" text-center mb-4 mb-sm-6">
			<h2>Make Your Message Pop with WeGeni's Video Advertisements</h2>
			<p class="mb-0 inner-container-small">Captivating videos that showcase your brand's story and attract attention. Perfect for engaging and converting your audience.</p>
		</div>

		<!-- Feature START -->
		<div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 g-5 g-lg-6">
			<!-- item -->
			<div class="col">
				<div class="card card-body bg-transparent text-center p-0">
					<span class="h4 text-primary"><img src="{{asset('assets/images/icons/Our Core Services.svg')}}"></span>
					<h6 class="mb-2"> Our Core Services</h6>
					<div class="mb-0 d-flex justify-content-around">
						<ul class="list-group list-group-borderless text-start">
							<li class="list-group-item heading-color"><i class="bi bi-check-lg text-primary me-1"></i>Video Concept Development & Strategy</li>
							<li class="list-group-item heading-color"><i class="bi bi-check-lg text-primary me-1"></i>Scriptwriting & Storyboarding</li>
							<li class="list-group-item heading-color"><i class="bi bi-check-lg text-primary me-1"></i>Pre-Production Planning & Logistics</li>
							<li class="list-group-item heading-color"><i class="bi bi-check-lg text-primary me-1"></i>High-Quality Video Production</li>
							<li class="list-group-item heading-color"><i class="bi bi-check-lg text-primary me-1"></i>Post-Production Magic</li>
							<li class="list-group-item heading-color"><i class="bi bi-check-lg text-primary me-1"></i>Video Distribution & Optimization</li>
							<li class="list-group-item heading-color"><i class="bi bi-check-lg text-primary me-1"></i>Video Analytics & Optimization</li>
							<li class="list-group-item heading-color"><i class="bi bi-check-lg text-primary me-1"></i>Video Advertising & Promotion</li>
							<li class="list-group-item heading-color"><i class="bi bi-check-lg text-primary me-1"></i>Video Marketing Consulting</li>
						</ul>
					</div>
				</div>
			</div>
			
			<!-- item -->
			<div class="col">
				<div class="card card-body bg-transparent text-center p-0">
					<span class="h4 text-primary"><img src="{{asset('assets/images/icons/Our Video Production Expertise.svg')}}"></span>
					<h6 class="mb-2"> Our Video Production Expertise</h6>
					<div class="mb-0 d-flex justify-content-around">
					    <ul class="list-group list-group-borderless text-start">
							<li class="list-group-item heading-color"><i class="bi bi-check-lg text-primary me-1"></i>Explainer Videos</li>
							<li class="list-group-item heading-color"><i class="bi bi-check-lg text-primary me-1"></i>Brand Videos</li>
							<li class="list-group-item heading-color"><i class="bi bi-check-lg text-primary me-1"></i>Promotional Videos</li>
							<li class="list-group-item heading-color"><i class="bi bi-check-lg text-primary me-1"></i>Testimonial Videos</li>
							<li class="list-group-item heading-color"><i class="bi bi-check-lg text-primary me-1"></i>Product Demonstration Videos</li>
							<li class="list-group-item heading-color"><i class="bi bi-check-lg text-primary me-1"></i>Live-Action Videos</li>
							<li class="list-group-item heading-color"><i class="bi bi-check-lg text-primary me-1"></i>Animation & Motion Graphics</li>
							<li class="list-group-item heading-color"><i class="bi bi-check-lg text-primary me-1"></i>Event Coverage Videos</li>
							<li class="list-group-item heading-color"><i class="bi bi-check-lg text-primary me-1"></i>Social Media Videos</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<!-- Feature END -->
	</div>
</section>
<!-- =======================
Core feature END -->

<!-- =======================
Approach and Benefits START -->
<section class="pt-6">
	<div class="container">
		<div class="row g-4 g-lg-7">
			<!-- Our Approach -->
			<div class="col-md-6">
				<h4 class="mb-4">Our Approach</h4>
				<p>Our approach to video production centers on a deep understanding of your brand and target audience. </p>
				<p>We collaborate closely with you to develop a compelling narrative, meticulously plan and execute the production, and leverage data-driven insights to optimize results. By combining creative storytelling with technical expertise, we craft videos that not only captivate but also drive tangible business outcomes. Our commitment to open communication, timely delivery, and exceptional customer service ensures a seamless and rewarding partnership. </p>
			</div>

			<!-- Service benefits -->
			<div class="col-md-6">
				<div class="card card-body bg-light border p-md-5">
					<h4 class="mb-3">Service benefits</h4>

					<!-- List -->
					<ul class="list-group list-group-borderless border-0">
						<li class="list-group-item heading-color d-flex mb-0"><i class="bi bi-patch-check text-primary me-2"></i>Clear Messaging</li>
						<li class="list-group-item heading-color d-flex mb-0"><i class="bi bi-patch-check text-primary me-2"></i>Increased Engagement</li>
						<li class="list-group-item heading-color d-flex mb-0"><i class="bi bi-patch-check text-primary me-2"></i>Brand Recognition</li>
						<li class="list-group-item heading-color d-flex mb-0"><i class="bi bi-patch-check text-primary me-2"></i>Versatile Formats</li>
						<li class="list-group-item heading-color d-flex mb-0"><i class="bi bi-patch-check text-primary me-2"></i>High Production Quality</li>
						<li class="list-group-item heading-color d-flex mb-0"><i class="bi bi-patch-check text-primary me-2"></i>Targeted Reach</li>
						<li class="list-group-item heading-color d-flex mb-0"><i class="bi bi-patch-check text-primary me-2"></i>Creative Storytelling</li>
						<li class="list-group-item heading-color d-flex mb-0"><i class="bi bi-patch-check text-primary me-2"></i>Performance Analytics</li>
						<li class="list-group-item heading-color d-flex mb-0"><i class="bi bi-patch-check text-primary me-2"></i>Enhanced Visibility</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- =======================
Approach and Benefits END -->


<!-- =======================
Faq START -->
<section class="pt-0">
	<div class="container">
		<div class="row">
			<div class="col-lg-7 mx-auto">
				<h2 class="text-center mb-5">You have questions we have answers</h2>
				<!-- Accordion START -->
				<div class="accordion accordion-icon accordion-bg-light" id="accordionFaq">
					<!-- Item -->
					<div class="accordion-item mb-3">
						<div class="accordion-header font-base" id="heading-1">
							<button class="accordion-button fw-semibold rounded collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-1" aria-expanded="true" aria-controls="collapse-1">
							What are video advertisements?
							</button>
						</div>
						<!-- Body -->
						<div id="collapse-1" class="accordion-collapse collapse show" aria-labelledby="heading-1" data-bs-parent="#accordionFaq">
							<div class="accordion-body mt-3 pb-0">
							Video advertisements are promotional content designed to engage viewers through audiovisual elements. They can appear on various platforms, including social media, websites, and streaming services, and aim to increase brand awareness and drive customer actions.
							</div>
						</div>
					</div>

					<!-- Item -->
					<div class="accordion-item mb-3">
						<div class="accordion-header font-base" id="heading-2">
							<button class="accordion-button fw-semibold rounded collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-2" aria-expanded="false" aria-controls="collapse-2">
							How do video advertisements benefit my business?
							</button>
						</div>
						<!-- Body -->
						<div id="collapse-2" class="accordion-collapse collapse" aria-labelledby="heading-2" data-bs-parent="#accordionFaq">
							<div class="accordion-body mt-3 pb-0">
							Video advertisements enhance engagement by combining visual and auditory stimuli, making them more memorable. They help in capturing audience attention, conveying complex messages effectively, and increasing conversion rates by prompting viewers to take action.
							</div>
						</div>
					</div>

					<!-- Item -->
					<div class="accordion-item mb-3">
						<div class="accordion-header font-base" id="heading-3">
							<button class="accordion-button fw-semibold collapsed rounded" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-3" aria-expanded="false" aria-controls="collapse-3">
							What types of video advertisements are available?
							</button>
						</div>
						<!-- Body -->
						<div id="collapse-3" class="accordion-collapse collapse" aria-labelledby="heading-3" data-bs-parent="#accordionFaq">
							<div class="accordion-body mt-3 pb-0">
							Common types include pre-roll ads (shown before other content), mid-roll ads (displayed during content), and post-roll ads (appearing after content). Additionally, there are interactive videos and shoppable videos that offer enhanced viewer interaction.
							</div>
						</div>
					</div>

					<!-- Item -->
					<div class="accordion-item mb-3">
						<div class="accordion-header font-base" id="heading-4">
							<button class="accordion-button fw-semibold collapsed rounded" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-4" aria-expanded="false" aria-controls="collapse-4">
							How can I measure the success of a video advertisement? 
							</button>
						</div>
						<!-- Body -->
						<div id="collapse-4" class="accordion-collapse collapse" aria-labelledby="heading-4" data-bs-parent="#accordionFaq">
							<div class="accordion-body mt-3 pb-0">
							Success can be measured through key performance indicators such as view count, click-through rate, conversion rate, and engagement metrics (likes, shares, comments). Analytics tools and platforms provide detailed insights into these metrics.
							</div>
						</div>
					</div>

					<!-- Item -->
					<div class="accordion-item mb-3">
						<div class="accordion-header font-base" id="heading-5">
							<button class="accordion-button fw-semibold collapsed rounded" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-5" aria-expanded="false" aria-controls="collapse-5">
							What is the ideal length for a video advertisement?
							</button>
						</div>
						<!-- Body -->
						<div id="collapse-5" class="accordion-collapse collapse" aria-labelledby="heading-5" data-bs-parent="#accordionFaq">
							<div class="accordion-body mt-3 pb-0">
							The ideal length depends on the platform and message. Generally, shorter videos (15-30 seconds) perform well on social media, while longer formats (up to 2 minutes) can be effective for detailed content on platforms like YouTube
							</div>
						</div>
					</div>

						<!-- Item -->
						<div class="accordion-item mb-3">
						<div class="accordion-header font-base" id="heading-6">
							<button class="accordion-button fw-semibold collapsed rounded" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-6" aria-expanded="false" aria-controls="collapse-6">
							How do I create an effective video advertisement? 
							</button>
						</div>
						<!-- Body -->
						<div id="collapse-6" class="accordion-collapse collapse" aria-labelledby="heading-6" data-bs-parent="#accordionFaq">
							<div class="accordion-body mt-3 pb-0">
							An effective video advertisement should have a clear and compelling message, high-quality visuals and audio, and a strong call-to-action. Tailoring the content to your target audience and optimizing it for the platform where it will be shown are also crucial for success.
							</div>
						</div>
					</div>
				</div>
				<!-- Accordion END -->
			</div>
		</div>
	</div>
</section>
<!-- =======================
Faq END -->
    
@endsection