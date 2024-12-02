@extends('layouts.website')

@section('content')

<!-- =======================
Services start -->
<section class="pb-0">
	<div class="container">
		<!-- Title -->
		<div class="row g-4 g-md-5">

			<div class="col-md-6 col-lg-4">
				<h2 class="mb-0">Gen-i's Horizon Web Services</h2>
			</div>

			<!-- Item -->
			<div class="col-md-6 col-lg-4">
				<div class="card card-body border p-4 h-100">
					<h6 class="text-primary mb-4">01.</h6>
					<h5>Core Web Application Development Services</h5>
					<p class="mb-0">Core web application development services cover the entire software lifecycle. This includes requirements, design, development, deployment, testing, and maintenance.</p>
				</div>
			</div>

			<!-- Item -->
			<div class="col-md-6 col-lg-4">
				<div class="card card-body border p-4 h-100">
					<h6 class="text-primary mb-4">02.</h6>
					<h5>Specialized Web Application Development Services</h5>
					<p class="mb-0">Web application development caters to various needs. Enterprise, mobile, and progressive web apps are key domains. Cloud-based development ensures scalability and flexibility. </p>
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
		<div class="text-center mb-4 mb-sm-7">
			<h2 class="mb-0 mt-3">Empower Your Business Growth with Our Innovative Solutions</h2>
		</div>

		<div class="row g-4 g-lg-5">
			<!-- Iamge -->
			<div class="col-md-5 h-100">
				<img src="{{asset('assets/images/about/webapplication.png')}}" class="rounded-3" alt="">
			</div>

			<div class="col-md-7 h-100">
				<div class="row g-4 g-lg-5">
					<!-- Feature item -->
					<div class="col-lg-6">
						<div class="card bg-light rounded h-100 overflow-hidden p-5">
							<!-- Card body -->
							<div class="card-body bg-transparent p-0">
								<div class="badge text-bg-secondary mb-3">Feature</div>
								<p class="small mb-0">Transform your web application’s capabilities with cutting-edge technology that drives exceptional user experiences and business growth.<p>
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
								<p class="small mb-0">Achieve remarkable insights and operational efficiency with data-driven analytics tailored for your web application.</p>
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
								<p class="small mb-0">Leverage advanced tech solutions to unlock significant growth and drive substantial revenue with your web application.</p>
							</div>
		
							<!-- Card footer -->
							<div class="card-footer bg-transparent text-end p-0 mt-3">
								<span class="fs-1 fw-semibold heading-color">₹3.1M</span>
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
					<h2>Your Trusted Web Development Companion</h2>
					<p class="mb-0 inner-container-small">WeGeni's data-driven web apps unlock opportunities, optimize operations, and maximize ROI for sustainable growth. </p>
				</div>

				<!-- Feature START -->
				<div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 g-5 g-lg-6">
					<!-- item -->
					<div class="col">
						<div class="card card-body bg-transparent text-center p-0">
							<span class="h4 text-primary"><img src="{{asset('assets/images/icons/Core Web Application Development Services.svg')}}"></span>
							<h6 class="mb-2">Core Web Application Development Services</h6>
					        <div class="mb-0 d-flex justify-content-around">
						        <ul class="list-group list-group-borderless text-start">
							        <li class="list-group-item heading-color"><i class="bi bi-check-lg text-primary me-1"></i> Custom Web Application Development</li>
							        <li class="list-group-item heading-color"><i class="bi bi-check-lg text-primary me-1"></i> Web Application Design</li>
							        <li class="list-group-item heading-color"><i class="bi bi-check-lg text-primary me-1"></i> Front-End Development</li>
							        <li class="list-group-item heading-color"><i class="bi bi-check-lg text-primary me-1"></i> Back-End Development</li>
							        <li class="list-group-item heading-color"><i class="bi bi-check-lg text-primary me-1"></i> Web Application Architecture</li>
						        </ul>
					        </div>
						</div>
					</div>

					<!-- item -->
					<div class="col">
						<div class="card card-body bg-transparent text-center p-0">
							<span class="h4 text-primary"><img src="{{asset('assets/images/icons/Specialized Web Application Development Services.svg')}}"></span>
							<h6 class="mb-2">Specialized Web Application Development Services</h6>
					        <div class="mb-0 d-flex justify-content-around">
						        <ul class="list-group list-group-borderless text-start">
							        <li class="list-group-item heading-color"><i class="bi bi-check-lg text-primary me-1"></i> Enterprise Web Application Development</li>
							        <li class="list-group-item heading-color"><i class="bi bi-check-lg text-primary me-1"></i> Mobile Web Application Development</li>
							        <li class="list-group-item heading-color"><i class="bi bi-check-lg text-primary me-1"></i> Progressive Web Application (PWA) Development</li>
							        <li class="list-group-item heading-color"><i class="bi bi-check-lg text-primary me-1"></i> Cloud-Based Web Application Development</li>
						        </ul>
					        </div>
						</div>
					</div>

					<!-- item -->
					<div class="col">
						<div class="card card-body bg-transparent text-center p-0">
							<span class="h4 text-primary"><img src="{{asset('assets/images/icons/Additional Web Application Services.svg')}}"></span>
							<h6 class="mb-2">Additional Web Application Services</h6>
					        <div class="mb-0 d-flex justify-content-around">
						        <ul class="list-group list-group-borderless text-start">
							        <li class="list-group-item heading-color"><i class="bi bi-check-lg text-primary me-1"></i> Additional Web Application Services</li>
							        <li class="list-group-item heading-color"><i class="bi bi-check-lg text-primary me-1"></i> Web Application Deployment</li>
							        <li class="list-group-item heading-color"><i class="bi bi-check-lg text-primary me-1"></i> Web Application Maintenance</li>
							        <li class="list-group-item heading-color"><i class="bi bi-check-lg text-primary me-1"></i> Web Application Integration </li>
							        <li class="list-group-item heading-color"><i class="bi bi-check-lg text-primary me-1"></i> Web Application Security</li>
									<li class="list-group-item heading-color"><i class="bi bi-check-lg text-primary me-1"></i> Web Application Performance Optimization</li>
									<li class="list-group-item heading-color"><i class="bi bi-check-lg text-primary me-1"></i> Web Application Migration</li>
									<li class="list-group-item heading-color"><i class="bi bi-check-lg text-primary me-1"></i> Web Application Consulting</li>
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
				<p>Gen-i's Elite Tech Solutions employs a rigorous, client-centric approach to web application development. </p>
				<p>Our methodology encompasses comprehensive requirements analysis, usercentric design, agile development, full-stack expertise, rigorous testing, seamless deployment, ongoing maintenance, and expert consultation. This holistic framework ensures the delivery of high-quality, tailored web applications that exceed client expectations and drive tangible business value. </p>
			</div>

			<!-- Service benefits -->
			<div class="col-md-6">
				<div class="card card-body bg-light border p-md-5">
					<h4 class="mb-3">Service benefits</h4>

					<!-- List -->
					<ul class="list-group list-group-borderless border-0">
						<li class="list-group-item heading-color d-flex mb-0"><i class="bi bi-patch-check text-primary me-2"></i>Tailored Solutions </li>
						<li class="list-group-item heading-color d-flex mb-0"><i class="bi bi-patch-check text-primary me-2"></i>Enhanced User Experience </li>
						<li class="list-group-item heading-color d-flex mb-0"><i class="bi bi-patch-check text-primary me-2"></i>Scalability and Flexibility </li>
						<li class="list-group-item heading-color d-flex mb-0"><i class="bi bi-patch-check text-primary me-2"></i>Performance Optimization </li>
						<li class="list-group-item heading-color d-flex mb-0"><i class="bi bi-patch-check text-primary me-2"></i>Seamless Integration </li>
						<li class="list-group-item heading-color d-flex mb-0"><i class="bi bi-patch-check text-primary me-2"></i>Continuous Improvement </li>
						<li class="list-group-item heading-color d-flex mb-0"><i class="bi bi-patch-check text-primary me-2"></i>Competitive Advantage  </li>
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
							What is a web application, and how does it differ from a website? 
							</button>
						</div>
						<!-- Body -->
						<div id="collapse-1" class="accordion-collapse collapse show" aria-labelledby="heading-1" data-bs-parent="#accordionFaq">
							<div class="accordion-body mt-3 pb-0">
							A web application is an interactive program that runs on a web server and can be accessed through a web browser. Unlike traditional websites, which primarily display static content, web applications provide dynamic and interactive user experiences, often enabling users to perform tasks such as managing data, collaborating, and customizing their interface. 
							</div>
						</div>
					</div>

					<!-- Item -->
					<div class="accordion-item mb-3">
						<div class="accordion-header font-base" id="heading-2">
							<button class="accordion-button fw-semibold rounded collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-2" aria-expanded="false" aria-controls="collapse-2">
							What are the key benefits of using web applications for businesses? 
							</button>
						</div>
						<!-- Body -->
						<div id="collapse-2" class="accordion-collapse collapse" aria-labelledby="heading-2" data-bs-parent="#accordionFaq">
							<div class="accordion-body mt-3 pb-0">
							Web applications offer numerous benefits, including accessibility from any device with internet access, easy updates and maintenance, and enhanced collaboration among users. They can also be customized to meet specific business needs, providing scalability and flexibility to support growth and changing requirements. 							</div>
						</div>
					</div>

					<!-- Item -->
					<div class="accordion-item mb-3">
						<div class="accordion-header font-base" id="heading-3">
							<button class="accordion-button fw-semibold collapsed rounded" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-3" aria-expanded="false" aria-controls="collapse-3">
							How do you ensure the security of web applications? 
							</button>
						</div>
						<!-- Body -->
						<div id="collapse-3" class="accordion-collapse collapse" aria-labelledby="heading-3" data-bs-parent="#accordionFaq">
							<div class="accordion-body mt-3 pb-0">
							We implement comprehensive security measures to protect web applications, including data encryption, secure authentication protocols, regular security audits, and adherence to best practices for secure coding. Our team constantly monitors for vulnerabilities and updates applications to safeguard against emerging threats. 							</div>
						</div>
					</div>

					<!-- Item -->
					<div class="accordion-item mb-3">
						<div class="accordion-header font-base" id="heading-4">
							<button class="accordion-button fw-semibold collapsed rounded" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-4" aria-expanded="false" aria-controls="collapse-4">
							Can web applications integrate with existing systems and third-party services? 
							</button>
						</div>
						<!-- Body -->
						<div id="collapse-4" class="accordion-collapse collapse" aria-labelledby="heading-4" data-bs-parent="#accordionFaq">
							<div class="accordion-body mt-3 pb-0">
							Yes, web applications can be seamlessly integrated with existing systems and third-party services using APIs and custom integrations. This capability enables businesses to enhance functionality, streamline operations, and leverage existing technology investments for a more cohesive digital ecosystem. 
						</div>
					</div>

					<!-- Item -->
					<div class="accordion-item mb-3">
						<div class="accordion-header font-base" id="heading-5">
							<button class="accordion-button fw-semibold collapsed rounded" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-5" aria-expanded="false" aria-controls="collapse-5">
							How do you approach the design and development of web applications? 
							</button>
						</div>
						<!-- Body -->
						<div id="collapse-5" class="accordion-collapse collapse" aria-labelledby="heading-5" data-bs-parent="#accordionFaq">
							<div class="accordion-body mt-3 pb-0">
							Our design and development process begins with understanding your business goals and user needs. We then create wireframes and prototypes to ensure the application's design aligns with your brand and user experience expectations. Our agile development approach ensures a high-quality product delivered on time and within budget, with ongoing collaboration and feedback. 
							</div>
						</div>
					</div>

					<!-- Item -->
					<div class="accordion-item mb-3">
						<div class="accordion-header font-base" id="heading-6">
							<button class="accordion-button fw-semibold collapsed rounded" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-6" aria-expanded="false" aria-controls="collapse-6">
							How do you handle updates and maintenance for web applications? 
							</button>
						</div>
						<!-- Body -->
						<div id="collapse-6" class="accordion-collapse collapse" aria-labelledby="heading-6" data-bs-parent="#accordionFaq">
							<div class="accordion-body mt-3 pb-0">
							We offer ongoing support and maintenance services to ensure your web application remains up-to-date and performs optimally. This includes regular updates, bug fixes, and enhancements based on user feedback and technological advancements. Our proactive approach ensures minimal disruption and continuous improvement of your application. 
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