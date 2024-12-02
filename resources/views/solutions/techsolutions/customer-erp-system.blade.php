@extends('layouts.website')

@section('content')
<!-- =======================
Services start -->
<section class="pb-0">
	<div class="container">
		<!-- Title -->
		<div class="row g-4 g-md-5">

			<div class="col-md-6 col-lg-4">
				<h2 class="mb-0">Gen-i's Elite Custom ERP Systems</h2>
			</div>

			<!-- Item -->
			<div class="col-md-6 col-lg-4">
				<div class="card card-body border p-4 h-100">
					<h6 class="text-primary mb-4">01.</h6>
					<h5>ERP Consulting and Needs Assessment</h5>
					<p class="mb-0">ERP consulting and needs assessment involve a comprehensive evaluation of business processes. This includes process analysis, client collaboration, ERP selection, and implementation planning. </p>
				</div>
			</div>

			<!-- Item -->
			<div class="col-md-6 col-lg-4">
				<div class="card card-body border p-4 h-100">
					<h6 class="text-primary mb-4">02.</h6>
					<h5>ERP Custom Development and Implementation</h5>
					<p class="mb-0">ERP custom development and implementation tailor systems to specific needs. This involves design, development, deployment, data migration, and user training.  </p>
				</div>
			</div>

			<!-- Item -->
			<div class="col-md-6 col-lg-4">
				<div class="card card-body border p-4 h-100">
					<h6 class="text-primary mb-4">03.</h6>
					<h5>ERP Integration and Optimization</h5>
					<p class="mb-0">ERP integration seamlessly connects the system with other enterprise applications. Optimization, support, maintenance, and upgrades ensure optimal system performance and user satisfaction. </p>
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
				<img src="{{asset('assets/images/about/customerp.png')}}" class="rounded-3" alt="">
			</div>

			<div class="col-md-7 h-100">
				<div class="row g-4 g-lg-5">
					<!-- Feature item -->
					<div class="col-lg-6">
						<div class="card bg-light rounded h-100 overflow-hidden p-5">
							<!-- Card body -->
							<div class="card-body bg-transparent p-0">
								<div class="badge text-bg-secondary mb-3">Feature</div>
								<p class="small mb-0">Transform your operations with a tailored ERP system, driving efficiency and innovation to propel your business forward today.
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
								<p class="small mb-0">Enhance your strategic decision-making with advanced analytics from your custom ERP system, providing insights that propel growth and efficiency.</p>
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
								<p class="small mb-0">Maximize your business growth by leveraging a custom ERP solution, utilizing advanced technology to achieve unprecedented revenue potential.</p>
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
			<h2>Our ERP solutions can help</h2>
			<p class="mb-0 inner-container-small">Our approach ensures tailored ERP solutions through expert consulting, custom design, and continuous support, driving efficiency and business value.</p>
		</div>

		<!-- Feature START -->
		<div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 g-5 g-lg-6">
			<!-- item -->
			<div class="col">
				<div class="card card-body bg-transparent text-center p-0">
					<span class="h4 text-primary"><img src="{{asset('assets/images/icons/ERP Consulting and Needs Assessment.svg')}}"></span>
					<h6 class="mb-2">ERP Consulting and Needs Assessment</h6>
					<div class="mb-0 d-flex justify-content-around">
						    <ul class="list-group list-group-borderless text-start">
							    <li class="list-group-item heading-color"><i class="bi bi-check-lg text-primary me-1"></i> Business Process Analysis</li>
							    <li class="list-group-item heading-color"><i class="bi bi-check-lg text-primary me-1"></i> Requirements Gathering</li>
							    <li class="list-group-item heading-color"><i class="bi bi-check-lg text-primary me-1"></i> ERP Solution Selection</li>
							    <li class="list-group-item heading-color"><i class="bi bi-check-lg text-primary me-1"></i> Gap Analysis</li>
						    </ul>
					</div>
				</div>
			</div>
			
			<!-- item -->
			<div class="col">
				<div class="card card-body bg-transparent text-center p-0">
					<span class="h4 text-primary"><img src="{{asset('assets/images/icons/ERP Custom Development and Implementation.svg')}}"></span>
					<h6 class="mb-2">ERP Custom Development and Implementation</h6>
					<div class="mb-0 d-flex justify-content-around">
						<ul class="list-group list-group-borderless text-start">
							<li class="list-group-item heading-color"><i class="bi bi-check-lg text-primary me-1"></i> ERP System Design</li>
							<li class="list-group-item heading-color"><i class="bi bi-check-lg text-primary me-1"></i> ERP Development</li>
							<li class="list-group-item heading-color"><i class="bi bi-check-lg text-primary me-1"></i> ERP Implementation</li>
							<li class="list-group-item heading-color"><i class="bi bi-check-lg text-primary me-1"></i> Data Migration</li>
							<li class="list-group-item heading-color"><i class="bi bi-check-lg text-primary me-1"></i> User Training</li>
						 </ul>
					 </div>
				</div>
			</div>

			<!-- item -->
			<div class="col">
				<div class="card card-body bg-transparent text-center p-0">
					<span class="h4 text-primary"><img src="{{asset('assets/images/icons/ERP Integration and Optimization.svg')}}"></span>
					<h6 class="mb-2">ERP Integration and Optimization</h6>
					<div class="mb-0 d-flex justify-content-around">
						<ul class="list-group list-group-borderless text-start">
							<li class="list-group-item heading-color"><i class="bi bi-check-lg text-primary me-1"></i> System Integration</li>
							<li class="list-group-item heading-color"><i class="bi bi-check-lg text-primary me-1"></i> ERP Optimization</li>
							<li class="list-group-item heading-color"><i class="bi bi-check-lg text-primary me-1"></i> ERP Support and Maintenance</li>
							<li class="list-group-item heading-color"><i class="bi bi-check-lg text-primary me-1"></i> ERP Upgrades</li>
					    </ul>
					</div>
				</div>
			</div>

			<!-- item -->
			<div class="col">
				<div class="card card-body bg-transparent text-center p-0">
					<span class="h4 text-primary"><img src="{{asset('assets/images/icons/Additional ERP Services.svg')}}"></span>
					<h6 class="mb-2">Additional ERP Services</h6>
					<div class="mb-0 d-flex justify-content-around">
						<ul class="list-group list-group-borderless text-start">
							<li class="list-group-item heading-color"><i class="bi bi-check-lg text-primary me-1"></i> ERP Cloud Migration</li>
							<li class="list-group-item heading-color"><i class="bi bi-check-lg text-primary me-1"></i> ERP Cloud Migration</li>
							<li class="list-group-item heading-color"><i class="bi bi-check-lg text-primary me-1"></i> ERP Reporting and Analytics</li>
							<li class="list-group-item heading-color"><i class="bi bi-check-lg text-primary me-1"></i> ERP Business Intelligence</li>
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
				<p>At Gen-i's Elite Tech Solutions, we specialize in developing custom ERP solutions tailored to our clients' unique business needs. </p>
				<p>Our approach involves a comprehensive needs assessment, strategic ERP consulting, customized system design, agile development and deployment, data migration and user training, seamless integration, and ongoing optimization and support. This holistic methodology ensures the successful implementation of ERP systems that drive operational efficiency, improve decision-making, and deliver tangible business value. </p>
			</div>

			<!-- Service benefits -->
			<div class="col-md-6">
				<div class="card card-body bg-light border p-md-5">
					<h4 class="mb-3">Service benefits</h4>

					<!-- List -->
					<ul class="list-group list-group-borderless border-0">
						<li class="list-group-item heading-color d-flex mb-0"><i class="bi bi-patch-check text-primary me-2"></i>Data Security </li>
						<li class="list-group-item heading-color d-flex mb-0"><i class="bi bi-patch-check text-primary me-2"></i>Increased Productivity </li>
						<li class="list-group-item heading-color d-flex mb-0"><i class="bi bi-patch-check text-primary me-2"></i>Better Customer Service </li>
						<li class="list-group-item heading-color d-flex mb-0"><i class="bi bi-patch-check text-primary me-2"></i>Enhanced Efficiency </li>
						<li class="list-group-item heading-color d-flex mb-0"><i class="bi bi-patch-check text-primary me-2"></i>Scalability  </li>
						<li class="list-group-item heading-color d-flex mb-0"><i class="bi bi-patch-check text-primary me-2"></i>Cost Reduction  </li>
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
							What are Custom ERP Solutions, and why should I consider them for my business? 
							</button>
						</div>
						<!-- Body -->
						<div id="collapse-1" class="accordion-collapse collapse show" aria-labelledby="heading-1" data-bs-parent="#accordionFaq">
							<div class="accordion-body mt-3 pb-0">
							Custom ERP (Enterprise Resource Planning) solutions are tailored software systems designed to meet a business's specific needs and processes. Unlike off-the-shelf ERP systems, custom solutions offer greater flexibility, scalability, and integration capabilities, allowing businesses to streamline operations, improve efficiency, and gain a competitive edge in their industry. 
							</div>
						</div>
					</div>

					<!-- Item -->
					<div class="accordion-item mb-3">
						<div class="accordion-header font-base" id="heading-2">
							<button class="accordion-button fw-semibold rounded collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-2" aria-expanded="false" aria-controls="collapse-2">
							How do Custom ERP Solutions differ from standard ERP systems? 
							</button>
						</div>
						<!-- Body -->
						<div id="collapse-2" class="accordion-collapse collapse" aria-labelledby="heading-2" data-bs-parent="#accordionFaq">
							<div class="accordion-body mt-3 pb-0">
							Custom ERP solutions are specifically designed to fit the unique requirements of your business, ensuring a seamless alignment with your existing workflows and processes. While standard ERP systems offer generic features, custom solutions provide personalized functionalities, better data insights, and a higher return on investment as they adapt to your evolving business needs. 
							</div>
						</div>
					</div>

					<!-- Item -->
					<div class="accordion-item mb-3">
						<div class="accordion-header font-base" id="heading-3">
							<button class="accordion-button fw-semibold collapsed rounded" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-3" aria-expanded="false" aria-controls="collapse-3">
							What is the implementation process for a Custom ERP Solution? 
							</button>
						</div>
						<!-- Body -->
						<div id="collapse-3" class="accordion-collapse collapse" aria-labelledby="heading-3" data-bs-parent="#accordionFaq">
							<div class="accordion-body mt-3 pb-0">
							The implementation process typically involves several stages, including discovery, design, development, testing, and deployment. We start by understanding your business processes and goals, followed by designing a tailored solution. Our team then develops and tests the system, ensuring it meets your requirements before deploying it into your business environment. 
							</div>
						</div>
					</div>

					<!-- Item -->
					<div class="accordion-item mb-3">
						<div class="accordion-header font-base" id="heading-4">
							<button class="accordion-button fw-semibold collapsed rounded" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-4" aria-expanded="false" aria-controls="collapse-4">
							How long does it take to implement a Custom ERP Solution?
							</button>
						</div>
						<!-- Body -->
						<div id="collapse-4" class="accordion-collapse collapse" aria-labelledby="heading-4" data-bs-parent="#accordionFaq">
							<div class="accordion-body mt-3 pb-0">
							The implementation timeline for a Custom ERP Solution can vary depending on the complexity of your business processes and specific requirements. On average, it can take anywhere from a few months to a year. Our team works closely with you to ensure a smooth and efficient implementation process, minimizing disruptions to your operations. 
							</div>
						</div>
					</div>

					<!-- Item -->
					<div class="accordion-item mb-3">
						<div class="accordion-header font-base" id="heading-5">
							<button class="accordion-button fw-semibold collapsed rounded" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-5" aria-expanded="false" aria-controls="collapse-5">
							What kind of support and maintenance do you provide for Custom ERP Solutions? 
							</button>
						</div>
						<!-- Body -->
						<div id="collapse-5" class="accordion-collapse collapse" aria-labelledby="heading-5" data-bs-parent="#accordionFaq">
							<div class="accordion-body mt-3 pb-0">
							We offer comprehensive support and maintenance services to ensure your Custom ERP Solution runs smoothly and efficiently. Our services include regular updates, troubleshooting, system monitoring, and user training. We are committed to providing ongoing support to help you maximize the value of your ERP system. 							</div>
						</div>
					</div>

					<!-- Item -->
					<div class="accordion-item mb-3">
						<div class="accordion-header font-base" id="heading-6">
							<button class="accordion-button fw-semibold collapsed rounded" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-6" aria-expanded="false" aria-controls="collapse-6">
							Can Custom ERP Solutions integrate with other software systems? 
							</button>
						</div>
						<!-- Body -->
						<div id="collapse-6" class="accordion-collapse collapse" aria-labelledby="heading-6" data-bs-parent="#accordionFaq">
							<div class="accordion-body mt-3 pb-0">
							Yes, Custom ERP Solutions are designed to seamlessly integrate with other software systems your business uses. Our team ensures that your ERP system communicates effectively with existing applications, such as CRM, accounting, and supply chain management software, providing a unified platform for all your business operations. </div>
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