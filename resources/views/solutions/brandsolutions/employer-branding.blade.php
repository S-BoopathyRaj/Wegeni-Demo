@extends('layouts.website')

@section('content')
    <!-- =======================
Services start -->
<section class="pb-0">
	<div class="container">
		<!-- Title -->
		<div class="row g-4 g-md-5">

			<div class="col-md-6 col-lg-4">
				<h2 class="mb-0">Gen-i's Employer Identity Excellence</h2>
			</div>

			<!-- Item -->
			<div class="col-md-6 col-lg-4">
				<div class="card card-body border p-4 h-100">
					<h6 class="text-primary mb-4">01.</h6>
					<h5>Strategy and Consulting </h5>
					<p class="mb-0">WeGeni specializes in employer branding strategy and consulting, helping organizations attract and retain top talent. </p>
				</div>
			</div>

			<!-- Item -->
			<div class="col-md-6 col-lg-4">
				<div class="card card-body border p-4 h-100">
					<h6 class="text-primary mb-4">02.</h6>
					<h5>Employer Brand Communication and Engagement </h5>
					<p class="mb-0">WeGeni cultivates a strong employer brand by effectively communicating our company culture, values, and employee experiences to attract and retain top talent. </p>
				</div>
			</div>

			<!-- Item -->
			<div class="col-md-6 col-lg-4">
				<div class="card card-body border p-4 h-100">
					<h6 class="text-primary mb-4">03.</h6>
					<h5>Employer Brand Measurement and Analysis</h5>
					<p class="mb-0">WeGeni leverages data-driven insights to measure the effectiveness of our employer brand, analyzing key metrics to optimize talent attraction and retention strategies. </p>
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
				<img src="{{asset('assets/images/about/employer.png')}}" class="rounded-3" alt="">
			</div>

			<div class="col-md-7 h-100">
				<div class="row g-4 g-lg-5">
					<!-- Feature item -->
					<div class="col-lg-6">
						<div class="card bg-light rounded h-100 overflow-hidden p-5">
							<!-- Card body -->
							<div class="card-body bg-transparent p-0">
								<div class="badge text-bg-secondary mb-3">Feature</div>
								<p class="small mb-0">Transform your company’s reputation and attract top talent with a compelling Employer Branding strategy today.</p>
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
								<p class="small mb-0">Optimize your recruitment and retention strategies with data-driven insights to enhance your Employer Branding today.</p>
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
								<p class="small mb-0">Drive significant growth and strengthen your organization's appeal by leveraging innovative Employer Branding strategies today.</p>
							</div>
		
							<!-- Card footer -->
							<div class="card-footer bg-transparent text-end p-0 mt-3">
								<span class="fs-1 fw-semibold heading-color">₹1.7M</span>
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
	    <div class=" text-center mb-4 mb-sm-6">
			<h2>Core Feature</h2>
			<p class="mb-0 inner-container-small">Attract and retain top talent with WeGeni’s Employer Branding. Build a powerful employer identity that stands out.</p>
		</div>

		<!-- Feature START -->
		<div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 g-5 g-lg-6">
			<!-- item -->
			<div class="col">
				<div class="card card-body bg-transparent text-center p-0">
					<span class="h4 text-primary"><img src="{{asset('assets/images/icons/Strategy and Consulting.svg')}}"></span>
					<h6 class="mb-2">Strategy and Consulting  </h6>
					<div class="mb-0 d-flex justify-content-around">
						<ul class="list-group list-group-borderless text-start">
							<li class="list-group-item heading-color"><i class="bi bi-check-lg text-primary me-1"></i> Employer Brand Audit and Assessment</li>
							<li class="list-group-item heading-color"><i class="bi bi-check-lg text-primary me-1"></i> Employee Value Proposition (EVP) Development</li>
							<li class="list-group-item heading-color"><i class="bi bi-check-lg text-primary me-1"></i> Employer Branding Strategy</li>
							<li class="list-group-item heading-color"><i class="bi bi-check-lg text-primary me-1"></i> Talent Personal Development</li>
						</ul>
					</div>
				</div>
			</div>
			
			<!-- item -->
			<div class="col">
				<div class="card card-body bg-transparent text-center p-0">
					<span class="h4 text-primary"><img src="{{asset('assets/images/icons/Employer Brand Communication and Engagement.svg')}}"></span>
					<h6 class="mb-2">Employer Brand Communication and Engagement   </h6>
					<div class="mb-0 d-flex justify-content-around">
						<ul class="list-group list-group-borderless text-start">
							<li class="list-group-item heading-color"><i class="bi bi-check-lg text-primary me-1"></i> Internal Communication Strategy</li>
							<li class="list-group-item heading-color"><i class="bi bi-check-lg text-primary me-1"></i> External Communication Strategy</li>
							<li class="list-group-item heading-color"><i class="bi bi-check-lg text-primary me-1"></i> Employer Branding Campaign Development and Execution</li>
							<li class="list-group-item heading-color"><i class="bi bi-check-lg text-primary me-1"></i>Social Media Management and Recruitment Marketing</li>
						</ul>
					</div>
				</div>
			</div>

			<!-- item -->
			<div class="col">
				<div class="card card-body bg-transparent text-center p-0">
					<span class="h4 text-primary"><img src="{{asset('assets/images/icons/Employer Brand Measurement and Analysis.svg')}}"></span>
					<h6 class="mb-2">Employer Brand Measurement and Analysis </h6>
					<div class="mb-0 d-flex justify-content-around">
						<ul class="list-group list-group-borderless text-start">
							<li class="list-group-item heading-color"><i class="bi bi-check-lg text-primary me-1"></i> Employer Brand Metrics and Analytics</li>
							<li class="list-group-item heading-color"><i class="bi bi-check-lg text-primary me-1"></i> Talent Attraction and Retention Analysis</li>
							<li class="list-group-item heading-color"><i class="bi bi-check-lg text-primary me-1"></i> Employee Satisfaction Surveys</li>
						</ul>
					</div>
				</div>
			</div>

			<!-- item -->
			<div class="col">
				<div class="card card-body bg-transparent text-center p-0">
					<span class="h4 text-primary"><img src="{{asset('assets/images/icons/Additional Services (2).svg')}}"></span>
					<h6 class="mb-2">Additional Services </h6>
					<div class="mb-0 d-flex justify-content-around">
						<ul class="list-group list-group-borderless text-start">
							<li class="list-group-item heading-color"><i class="bi bi-check-lg text-primary me-1"></i> Employer Branding Collateral Development</li>
							<li class="list-group-item heading-color"><i class="bi bi-check-lg text-primary me-1"></i> Candidate Experience Optimization</li>
							<li class="list-group-item heading-color"><i class="bi bi-check-lg text-primary me-1"></i> Diversity, Equity, and Inclusion (DEI) Strategy</li>
							<li class="list-group-item heading-color"><i class="bi bi-check-lg text-primary me-1"></i> Crisis Management and Reputation Management</li>
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
				<p>WeGeni is a strategic employer branding partner dedicated to transforming organizations into top talent magnets.</p>
				<p>Our comprehensive approach encompasses assessing an organization's employer brand health, crafting compelling value propositions, developing robust strategies, and executing impactful campaigns. By leveraging data-driven insights and expert guidance, we help clients attract, engage, and retain top talent while enhancing employer reputation and driving business success. </p>
			</div>

			<!-- Service benefits -->
			<div class="col-md-6">
				<div class="card card-body bg-light border p-md-5">
					<h4 class="mb-3">Service benefits</h4>

					<!-- List -->
					<ul class="list-group list-group-borderless border-0">
						<li class="list-group-item heading-color d-flex mb-0"><i class="bi bi-patch-check text-primary me-2"></i>Attract Top Talent</li>
						<li class="list-group-item heading-color d-flex mb-0"><i class="bi bi-patch-check text-primary me-2"></i>Boost Employee Retention</li>
						<li class="list-group-item heading-color d-flex mb-0"><i class="bi bi-patch-check text-primary me-2"></i>Enhance Company Reputation</li>
						<li class="list-group-item heading-color d-flex mb-0"><i class="bi bi-patch-check text-primary me-2"></i>Streamline Recruitment</li>
						<li class="list-group-item heading-color d-flex mb-0"><i class="bi bi-patch-check text-primary me-2"></i>Increase Employee Engagement</li>
						<li class="list-group-item heading-color d-flex mb-0"><i class="bi bi-patch-check text-primary me-2"></i>Align Brand Values</li>
						<li class="list-group-item heading-color d-flex mb-0"><i class="bi bi-patch-check text-primary me-2"></i>Strengthen Company Culture</li>
						<li class="list-group-item heading-color d-flex mb-0"><i class="bi bi-patch-check text-primary me-2"></i>Showcase Unique Benefits</li>
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
							What is Employer Branding? 
							</button>
						</div>
						<!-- Body -->
						<div id="collapse-1" class="accordion-collapse collapse show" aria-labelledby="heading-1" data-bs-parent="#accordionFaq">
							<div class="accordion-body mt-3 pb-0">
							Employer Branding is the process of creating and maintaining a positive image of a company as an employer. It involves promoting the company’s culture, values, and work environment to attract and retain top talent. 
							</div>
						</div>
					</div>

					<!-- Item -->
					<div class="accordion-item mb-3">
						<div class="accordion-header font-base" id="heading-2">
							<button class="accordion-button fw-semibold rounded collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-2" aria-expanded="false" aria-controls="collapse-2">
							Why is Employer Branding important for a company?
							</button>
						</div>
						<!-- Body -->
						<div id="collapse-2" class="accordion-collapse collapse" aria-labelledby="heading-2" data-bs-parent="#accordionFaq">
							<div class="accordion-body mt-3 pb-0">
							A strong Employer Brand helps attract high-quality candidates, reduces hiring costs, and increases employee retention. It also enhances overall company reputation, making it easier to compete in the talent market. 
							</div>
						</div>
					</div>

					<!-- Item -->
					<div class="accordion-item mb-3">
						<div class="accordion-header font-base" id="heading-3">
							<button class="accordion-button fw-semibold collapsed rounded" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-3" aria-expanded="false" aria-controls="collapse-3">
							How can we improve our Employer Brand? 
							</button>
						</div>
						<!-- Body -->
						<div id="collapse-3" class="accordion-collapse collapse" aria-labelledby="heading-3" data-bs-parent="#accordionFaq">
							<div class="accordion-body mt-3 pb-0">
							Improving your Employer Brand involves showcasing your company culture, engaging with employees on social media, highlighting employee success stories, and ensuring a positive candidate experience throughout the recruitment process. 
							</div>
						</div>
					</div>

					<!-- Item -->
					<div class="accordion-item mb-3">
						<div class="accordion-header font-base" id="heading-4">
							<button class="accordion-button fw-semibold collapsed rounded" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-4" aria-expanded="false" aria-controls="collapse-4">
							What role does employee experience play in Employer Branding? 
							</button>
						</div>
						<!-- Body -->
						<div id="collapse-4" class="accordion-collapse collapse" aria-labelledby="heading-4" data-bs-parent="#accordionFaq">
							<div class="accordion-body mt-3 pb-0">
							Employee experience is crucial to Employer Branding as it reflects how current employees view and interact with the company. Positive experiences lead to strong word-of-mouth promotion and a more attractive employer image. 
							</div>
						</div>
					</div>

					<!-- Item -->
					<div class="accordion-item mb-3">
						<div class="accordion-header font-base" id="heading-5">
							<button class="accordion-button fw-semibold collapsed rounded" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-5" aria-expanded="false" aria-controls="collapse-5">
							How can we measure the effectiveness of our Employer Branding efforts? 
							</button>
						</div>
						<!-- Body -->
						<div id="collapse-5" class="accordion-collapse collapse" aria-labelledby="heading-5" data-bs-parent="#accordionFaq">
							<div class="accordion-body mt-3 pb-0">
							Effectiveness can be measured through metrics such as employee engagement surveys, recruitment statistics, social media sentiment analysis, and feedback from job candidates and new hires. 
							</div>
						</div>
					</div>

					<!-- Item -->
					<div class="accordion-item mb-3">
						<div class="accordion-header font-base" id="heading-6">
							<button class="accordion-button fw-semibold collapsed rounded" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-6" aria-expanded="false" aria-controls="collapse-6">
							What are some common mistakes to avoid in Employer Branding? 
							</button>
						</div>
						<!-- Body -->
						<div id="collapse-6" class="accordion-collapse collapse" aria-labelledby="heading-6" data-bs-parent="#accordionFaq">
							<div class="accordion-body mt-3 pb-0">
							Common mistakes include failing to align branding messages with actual employee experiences, neglecting current employees’ feedback, and inconsistently applying branding across different platforms and communications. 
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