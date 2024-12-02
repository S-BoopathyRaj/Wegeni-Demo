@extends('layouts.website')

@section('content')

<!-- =======================
Services start -->
<section class="pb-0">
	<div class="container">
		<!-- Title -->
		<div class="row g-4 g-md-5">

			<div class="col-md-6 col-lg-4">
				<h2 class="mb-0">Gen-i's Visionary Blueprint</h2>
			</div>

			<!-- Item -->
			<div class="col-md-6 col-lg-4">
				<div class="card card-body border p-4 h-100">
					<h6 class="text-primary mb-4">01.</h6>
					<h5>Strategic Formulation </h5>
					<p class="mb-0">WeGeni is a strategic consulting firm. We specialize in crafting bespoke strategies to propel business growth and success. </p>
				</div>
			</div>

			<!-- Item -->
			<div class="col-md-6 col-lg-4">
				<div class="card card-body border p-4 h-100">
					<h6 class="text-primary mb-4">02.</h6>
					<h5>Strategic Implementation </h5>
					<p class="mb-0">We specialize in strategic implementation. We transform innovative ideas into tangible results.  </p>
				</div>
			</div>

			<!-- Item -->
			<div class="col-md-6 col-lg-4">
				<div class="card card-body border p-4 h-100">
					<h6 class="text-primary mb-4">03.</h6>
					<h5>Strategic Evaluation and Refinement </h5>
					<p class="mb-0">We assess your strategic direction, identify areas for improvement, and refine your plans to achieve optimal outcomes. </p>
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
				<img src="{{asset('assets/images/about/Strategic Planning.png')}}" class="rounded-3" alt="">
			</div>

			<div class="col-md-7 h-100">
				<div class="row g-4 g-lg-5">
					<!-- Feature item -->
					<div class="col-lg-6">
						<div class="card bg-light rounded h-100 overflow-hidden p-5">
							<!-- Card body -->
							<div class="card-body bg-transparent p-0">
								<div class="badge text-bg-secondary mb-3">Feature</div>
								<p class="small mb-0">Elevate your strategic planning and drive transformative results with tailored business solutions today.</p>
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
								<p class="small mb-0">Drive your success with strategic insights that optimize your planning and align your business solutions for maximum impact.</p>
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
								<p class="small mb-0">Drive your success with strategic insights that optimize your planning and align your business solutions for maximum impact.</p>
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
			<h2>Core Feature</h2>
			<p class="mb-0 inner-container-small">Chart your path to success with WeGeni’s strategic planning. Transform your vision into actionable goals and drive growth.</p>
		</div>

		<!-- Feature START -->
		<div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 g-5 g-lg-6">
			<!-- item -->
			<div class="col">
				<div class="card card-body bg-transparent text-center p-0">
					<span class="h4 text-primary"><img src="{{asset('assets/images/icons/Strategic Formulation.svg')}}"></span>
					<h6 class="mb-2">Strategic Formulation </h6>
					<div class="mb-0 d-flex justify-content-around">
						<ul class="list-group list-group-borderless text-start">
							<li class="list-group-item heading-color"><i class="bi bi-check-lg text-primary me-1"></i>Vision, Mission, and Values Development</li>
							<li class="list-group-item heading-color"><i class="bi bi-check-lg text-primary me-1"></i>SWOT Analysis</li>
							<li class="list-group-item heading-color"><i class="bi bi-check-lg text-primary me-1"></i> Market Analysis</li>
							<li class="list-group-item heading-color"><i class="bi bi-check-lg text-primary me-1"></i> Goal Setting</li>
							<li class="list-group-item heading-color"><i class="bi bi-check-lg text-primary me-1"></i> Strategy Development</li>
						</ul>
					</div>
				</div>
			</div>
			
			<!-- item -->
			<div class="col">
				<div class="card card-body bg-transparent text-center p-0">
					<span class="h4 text-primary"><img src="{{asset('assets/images/icons/Strategic Implementation.svg')}}"></span>
					<h6 class="mb-2">Strategic Implementation  </h6>
					<div class="mb-0 d-flex justify-content-around">
						<ul class="list-group list-group-borderless text-start">
							<li class="list-group-item heading-color"><i class="bi bi-check-lg text-primary me-1"></i> Operational Planning</li>
							<li class="list-group-item heading-color"><i class="bi bi-check-lg text-primary me-1"></i> Resource Allocation</li>
							<li class="list-group-item heading-color"><i class="bi bi-check-lg text-primary me-1"></i> Change Management</li>
							<li class="list-group-item heading-color"><i class="bi bi-check-lg text-primary me-1"></i> Performance Measurement</li>
							<li class="list-group-item heading-color"><i class="bi bi-check-lg text-primary me-1"></i> Strategic Alignment</li>
						</ul>
					</div>
				</div>
			</div>

			<!-- item -->
			<div class="col">
				<div class="card card-body bg-transparent text-center p-0">
					<span class="h4 text-primary"><img src="{{asset('assets/images/icons/Strategic Evaluation and Refinement.svg')}}"></span>
					<h6 class="mb-2">Strategic Evaluation and Refinement </h6>
					<div class="mb-0 d-flex justify-content-around">
						<ul class="list-group list-group-borderless text-start">
							<li class="list-group-item heading-color"><i class="bi bi-check-lg text-primary me-1"></i> Performance Assessment</li>
							<li class="list-group-item heading-color"><i class="bi bi-check-lg text-primary me-1"></i> Gap Analysis</li>
							<li class="list-group-item heading-color"><i class="bi bi-check-lg text-primary me-1"></i> Strategic Review</li>
							<li class="list-group-item heading-color"><i class="bi bi-check-lg text-primary me-1"></i>Scenario Planning</li>
						</ul>
					</div>
				</div>
			</div>

			<!-- item -->
			<div class="col">
				<div class="card card-body bg-transparent text-center p-0">
					<span class="h4 text-primary"><img src="{{asset('assets/images/icons/Additional Services (3).svg')}}"></span>
					<h6 class="mb-2">Additional Services </h6>
					<div class="mb-0 d-flex justify-content-around">
						<ul class="list-group list-group-borderless text-start">
							<li class="list-group-item heading-color"><i class="bi bi-check-lg text-primary me-1"></i>Business Model Innovation</li>
							<li class="list-group-item heading-color"><i class="bi bi-check-lg text-primary me-1"></i> Mergers and Acquisitions</li>
							<li class="list-group-item heading-color"><i class="bi bi-check-lg text-primary me-1"></i> Risk Management</li>
							<li class="list-group-item heading-color"><i class="bi bi-check-lg text-primary me-1"></i> Sustainability Strategy</li>
							<li class="list-group-item heading-color"><i class="bi bi-check-lg text-primary me-1"></i> Digital Transformation</li>
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
				<p>Our comprehensive approach encompasses strategy formulation, implementation, and evaluation.</p>
				<p>We excel in crafting tailored strategies, setting clear objectives, and executing plans effectively. By leveraging SWOT analysis, market research, and goal setting, we develop robust roadmaps for growth. Our expertise in operational planning, resource allocation, and change management ensures seamless strategy execution. Continuous performance evaluation, gap analysis, and scenario planning refine our strategies for optimal results. We offer additional services like business model innovation, mergers and acquisitions, risk management, sustainability, and digital transformation to address emerging challenges and opportunities.</p>
			</div>

			<!-- Service benefits -->
			<div class="col-md-6">
				<div class="card card-body bg-light border p-md-5">
					<h4 class="mb-3">Service benefits</h4>

					<!-- List -->
					<ul class="list-group list-group-borderless border-0">
						<li class="list-group-item heading-color d-flex mb-0"><i class="bi bi-patch-check text-primary me-2"></i>Clear Vision</li>
						<li class="list-group-item heading-color d-flex mb-0"><i class="bi bi-patch-check text-primary me-2"></i>Informed Decisions</li>
						<li class="list-group-item heading-color d-flex mb-0"><i class="bi bi-patch-check text-primary me-2"></i>Enhanced Efficiency</li>
						<li class="list-group-item heading-color d-flex mb-0"><i class="bi bi-patch-check text-primary me-2"></i>Risk Management</li>
						<li class="list-group-item heading-color d-flex mb-0"><i class="bi bi-patch-check text-primary me-2"></i>Competitive Edge</li>
						<li class="list-group-item heading-color d-flex mb-0"><i class="bi bi-patch-check text-primary me-2"></i>Goal Alignment</li>
						<li class="list-group-item heading-color d-flex mb-0"><i class="bi bi-patch-check text-primary me-2"></i>Adaptability</li>
						<li class="list-group-item heading-color d-flex mb-0"><i class="bi bi-patch-check text-primary me-2"></i>Long-Term Growth</li>
						<li class="list-group-item heading-color d-flex mb-0"><i class="bi bi-patch-check text-primary me-2"></i>Performance Tracking</li>
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
							What is strategic planning, and why is it important for businesses? 
							</button>
						</div>
						<!-- Body -->
						<div id="collapse-1" class="accordion-collapse collapse show" aria-labelledby="heading-1" data-bs-parent="#accordionFaq">
							<div class="accordion-body mt-3 pb-0">
							Strategic planning is a process that helps businesses set long-term goals and create a roadmap to achieve them. It's crucial for aligning resources, guiding decision-making, and ensuring that everyone in the organization is working towards common objectives. 
							</div>
						</div>
					</div>

					<!-- Item -->
					<div class="accordion-item mb-3">
						<div class="accordion-header font-base" id="heading-2">
							<button class="accordion-button fw-semibold rounded collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-2" aria-expanded="false" aria-controls="collapse-2">
							How does strategic planning differ from operational planning? 
							</button>
						</div>
						<!-- Body -->
						<div id="collapse-2" class="accordion-collapse collapse" aria-labelledby="heading-2" data-bs-parent="#accordionFaq">
							<div class="accordion-body mt-3 pb-0">
							Strategic planning focuses on long-term goals and the overall direction of the organization, while operational planning is concerned with day-to-day operations and short-term objectives. Strategic planning sets the foundation for operational plans. 
							</div>
						</div>
					</div>

					<!-- Item -->
					<div class="accordion-item mb-3">
						<div class="accordion-header font-base" id="heading-3">
							<button class="accordion-button fw-semibold collapsed rounded" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-3" aria-expanded="false" aria-controls="collapse-3">
							What are the key components of a successful strategic plan? 
							</button>
						</div>
						<!-- Body -->
						<div id="collapse-3" class="accordion-collapse collapse" aria-labelledby="heading-3" data-bs-parent="#accordionFaq">
							<div class="accordion-body mt-3 pb-0">
							A successful strategic plan includes a clear vision and mission statement, well-defined goals, a SWOT analysis (Strengths, Weaknesses, Opportunities, Threats), and a detailed action plan with timelines and responsibilities. 
							</div>
						</div>
					</div>

					<!-- Item -->
					<div class="accordion-item mb-3">
						<div class="accordion-header font-base" id="heading-4">
							<button class="accordion-button fw-semibold collapsed rounded" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-4" aria-expanded="false" aria-controls="collapse-4">
							How often should a strategic plan be reviewed and updated? 
							</button>
						</div>
						<!-- Body -->
						<div id="collapse-4" class="accordion-collapse collapse" aria-labelledby="heading-4" data-bs-parent="#accordionFaq">
							<div class="accordion-body mt-3 pb-0">
							A strategic plan should be reviewed annually to ensure it remains relevant and aligned with the organization's goals and market conditions. However, significant changes in the business environment may necessitate more frequent updates. 
							</div>
						</div>
					</div>

					<!-- Item -->
					<div class="accordion-item mb-3">
						<div class="accordion-header font-base" id="heading-5">
							<button class="accordion-button fw-semibold collapsed rounded" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-5" aria-expanded="false" aria-controls="collapse-5">
							Who should be involved in the strategic planning process? 
							</button>
						</div>
						<!-- Body -->
						<div id="collapse-5" class="accordion-collapse collapse" aria-labelledby="heading-5" data-bs-parent="#accordionFaq">
							<div class="accordion-body mt-3 pb-0">
							The strategic planning process should involve key stakeholders, including senior management, department heads, and other relevant team members. Involving a diverse group ensures a comprehensive understanding of the organization's needs and opportunities.
							</div>
						</div>
					</div>

					<!-- Item -->
					<div class="accordion-item mb-3">
						<div class="accordion-header font-base" id="heading-6">
							<button class="accordion-button fw-semibold collapsed rounded" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-6" aria-expanded="false" aria-controls="collapse-6">
							How can strategic planning benefit my organization? 
							</button>
						</div>
						<!-- Body -->
						<div id="collapse-6" class="accordion-collapse collapse" aria-labelledby="heading-6" data-bs-parent="#accordionFaq">
							<div class="accordion-body mt-3 pb-0">
							Strategic planning provides a clear direction, improves organizational efficiency, enhances decision-making, and increases the ability to anticipate and respond to market changes. It fosters alignment and collaboration across all levels of the organization. 
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