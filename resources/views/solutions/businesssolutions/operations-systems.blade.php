@extends('layouts.website')

@section('content')

<!-- =======================
Services start -->
<section class="pb-0">
	<div class="container">
		<!-- Title -->
		<div class="row g-4 g-md-5">

			<div class="col-md-6 col-lg-4">
				<h2 class="mb-0">Gen-i's Operational Excellence Hub</h2>
			</div>

			<!-- Item -->
			<div class="col-md-6 col-lg-4">
				<div class="card card-body border p-4 h-100">
					<h6 class="text-primary mb-4">01.</h6>
					<h5>Operational Efficiency and Process Improvement </h5>
					<p class="mb-0">Optimizing operations and enhancing processes for maximum efficiency and productivity. </p>
				</div>
			</div>

			<!-- Item -->
			<div class="col-md-6 col-lg-4">
				<div class="card card-body border p-4 h-100">
					<h6 class="text-primary mb-4">02.</h6>
					<h5>Systems Implementation and Integration </h5>
					<p class="mb-0">WeGeni specializes in seamlessly integrating and implementing complex systems to optimize business performance and efficiency. </p>
				</div>
			</div>

			<!-- Item -->
			<div class="col-md-6 col-lg-4">
				<div class="card card-body border p-4 h-100">
					<h6 class="text-primary mb-4">03.</h6>
					<h5>Technology and Digital Transformation </h5>
					<p class="mb-0">We empower businesses to thrive in the digital age through innovative solutions and strategic guidance. </p>
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
				<img src="{{asset('assets/images/about/operations system.png')}}" class="rounded-3" alt="">
			</div>

			<div class="col-md-7 h-100">
				<div class="row g-4 g-lg-5">
					<!-- Feature item -->
					<div class="col-lg-6">
						<div class="card bg-light rounded h-100 overflow-hidden p-5">
							<!-- Card body -->
							<div class="card-body bg-transparent p-0">
								<div class="badge text-bg-secondary mb-3">Feature</div>
								<p class="small mb-0">Optimize your operations and systems to achieve peak performance and drive exceptional results with advanced business solutions today.</p>
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
								<p class="small mb-0">Enhance your operations and systems with precise data insights, optimizing performance and maximizing impact through tailored business solutions.</p>
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
								<p class="small mb-0">Maximize your operational efficiency and achieve significant growth by leveraging advanced business solutions and systems today.</p>
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
		<div class="text-center mb-4 mb-sm-6">
			<h2>Core Feature</h2>
			<p class="mb-0 inner-container-small ">Streamline your operations with WeGeni’s efficient systems solutions. Optimize performance and drive success with our tailored strategies.</p>
		</div>

		<!-- Feature START -->
		<div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 g-5 g-lg-6">
			<!-- item -->
			<div class="col">
				<div class="card card-body bg-transparent text-center p-0">
					<span class="h4 text-primary"><img src="{{asset('assets/images/icons/Operational Efficiency and Process Improvement.svg')}}"></span>
					<h6 class="mb-2">Operational Efficiency and Process Improvement </h6>
					<div class="mb-0 d-flex justify-content-around">
						<ul class="list-group list-group-borderless text-start">
							<li class="list-group-item heading-color"><i class="bi bi-check-lg text-primary me-1"></i>Process Mapping and Optimization</li>
							<li class="list-group-item heading-color"><i class="bi bi-check-lg text-primary me-1"></i>Business Process Reengineering (BPR)</li>
							<li class="list-group-item heading-color"><i class="bi bi-check-lg text-primary me-1"></i> Lean Six Sigma Implementation</li>
							<li class="list-group-item heading-color"><i class="bi bi-check-lg text-primary me-1"></i> Change Management</li>
							<li class="list-group-item heading-color"><i class="bi bi-check-lg text-primary me-1"></i> Operational Performance Management</li>
						</ul>
					</div>
				</div>
			</div>
			
			<!-- item -->
			<div class="col">
				<div class="card card-body bg-transparent text-center p-0">
					<span class="h4 text-primary"><img src="{{asset('assets/images/icons/Systems Implementation and Integration.svg')}}"></span>
					<h6 class="mb-2">Systems Implementation and Integration  </h6>
					<div class="mb-0 d-flex justify-content-around">
						<ul class="list-group list-group-borderless text-start">
							<li class="list-group-item heading-color"><i class="bi bi-check-lg text-primary me-1"></i>Systems Selection and Implementation</li>
							<li class="list-group-item heading-color"><i class="bi bi-check-lg text-primary me-1"></i>System Integration</li>
							<li class="list-group-item heading-color"><i class="bi bi-check-lg text-primary me-1"></i> Data Management and Governance</li>
							<li class="list-group-item heading-color"><i class="bi bi-check-lg text-primary me-1"></i> IT Infrastructure Management</li>
							<li class="list-group-item heading-color"><i class="bi bi-check-lg text-primary me-1"></i> Cloud Computing Solutions</li>
						</ul>
					</div>
				</div>
			</div>

			<!-- item -->
			<div class="col">
				<div class="card card-body bg-transparent text-center p-0">
					<span class="h4 text-primary"><img src="{{asset('assets/images/icons/Technology and Digital Transformation.svg')}}"></span>
					<h6 class="mb-2">Technology and Digital Transformation  </h6>
					<div class="mb-0 d-flex justify-content-around">
						<ul class="list-group list-group-borderless text-start">
							<li class="list-group-item heading-color"><i class="bi bi-check-lg text-primary me-1"></i>Digital Transformation Strategy</li>
							<li class="list-group-item heading-color"><i class="bi bi-check-lg text-primary me-1"></i>IT Consulting</li>
							<li class="list-group-item heading-color"><i class="bi bi-check-lg text-primary me-1"></i>IT Audit and Security</li>
							<li class="list-group-item heading-color"><i class="bi bi-check-lg text-primary me-1"></i>Cybersecurity Solutions</li>
							<li class="list-group-item heading-color"><i class="bi bi-check-lg text-primary me-1"></i> Business Intelligence and Analytics</li>
						</ul>
					</div>
				</div>
			</div>

			<!-- item -->
			<div class="col">
				<div class="card card-body bg-transparent text-center p-0">
					<span class="h4 text-primary"><img src="{{asset('assets/images/icons/Additional Services (3).svg')}}"></span>
					<h6 class="mb-2">Additional Services  </h6>
					<div class="mb-0 d-flex justify-content-around">
						<ul class="list-group list-group-borderless text-start">
							<li class="list-group-item heading-color"><i class="bi bi-check-lg text-primary me-1"></i>Outsourcing and Offshoring</li>
							<li class="list-group-item heading-color"><i class="bi bi-check-lg text-primary me-1"></i>Project Management</li>
							<li class="list-group-item heading-color"><i class="bi bi-check-lg text-primary me-1"></i> Quality Assurance and Control</li>
							<li class="list-group-item heading-color"><i class="bi bi-check-lg text-primary me-1"></i> Supply Chain Management </li>
							<li class="list-group-item heading-color"><i class="bi bi-check-lg text-primary me-1"></i>Customer Relationship Management (CRM) Implementation</li>
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
				<p>Our company specializes in optimizing business operations and leveraging technology to drive growth and efficiency.</p>
				<p>We offer a comprehensive suite of services including process improvement, systems implementation, digital transformation, IT consulting, and cybersecurity. Our approach focuses on identifying bottlenecks, streamlining processes, and implementing robust IT infrastructure to enhance overall performance. </p>
			</div>

			<!-- Service benefits -->
			<div class="col-md-6">
				<div class="card card-body bg-light border p-md-5">
					<h4 class="mb-3">Service benefits</h4>

					<!-- List -->
					<ul class="list-group list-group-borderless border-0">
						<li class="list-group-item heading-color d-flex mb-0"><i class="bi bi-patch-check text-primary me-2"></i>Enhanced Efficiency</li>
						<li class="list-group-item heading-color d-flex mb-0"><i class="bi bi-patch-check text-primary me-2"></i>Cost Savings</li>
						<li class="list-group-item heading-color d-flex mb-0"><i class="bi bi-patch-check text-primary me-2"></i>Real-Time Insights</li>
						<li class="list-group-item heading-color d-flex mb-0"><i class="bi bi-patch-check text-primary me-2"></i>Scalable Solutions</li>
						<li class="list-group-item heading-color d-flex mb-0"><i class="bi bi-patch-check text-primary me-2"></i>Improved Accuracy</li>
						<li class="list-group-item heading-color d-flex mb-0"><i class="bi bi-patch-check text-primary me-2"></i>Seamless Integration</li>
						<li class="list-group-item heading-color d-flex mb-0"><i class="bi bi-patch-check text-primary me-2"></i>Increased Agility</li>
						<li class="list-group-item heading-color d-flex mb-0"><i class="bi bi-patch-check text-primary me-2"></i>Enhanced Collaboration</li>
						<li class="list-group-item heading-color d-flex mb-0"><i class="bi bi-patch-check text-primary me-2"></i>Risk Management</li>
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
							What are the key components of an effective operations management system?
							</button>
						</div>
						<!-- Body -->
						<div id="collapse-1" class="accordion-collapse collapse show" aria-labelledby="heading-1" data-bs-parent="#accordionFaq">
							<div class="accordion-body mt-3 pb-0">
							An effective operations management system includes process optimization, supply chain management, quality control, and resource planning. These components work together to improve efficiency, reduce costs, and enhance overall business performance. 
							</div>
						</div>
					</div>

					<!-- Item -->
					<div class="accordion-item mb-3">
						<div class="accordion-header font-base" id="heading-2">
							<button class="accordion-button fw-semibold rounded collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-2" aria-expanded="false" aria-controls="collapse-2">
							How can businesses leverage technology to improve their operations? 
							</button>
						</div>
						<!-- Body -->
						<div id="collapse-2" class="accordion-collapse collapse" aria-labelledby="heading-2" data-bs-parent="#accordionFaq">
							<div class="accordion-body mt-3 pb-0">
							Businesses can use technology to automate routine tasks, streamline communication, and analyze data for better decision-making. Implementing systems like ERP, CRM, and advanced analytics tools can lead to significant improvements in productivity and efficiency.
							</div>
						</div>
					</div>

					<!-- Item -->
					<div class="accordion-item mb-3">
						<div class="accordion-header font-base" id="heading-3">
							<button class="accordion-button fw-semibold collapsed rounded" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-3" aria-expanded="false" aria-controls="collapse-3">
							What are the benefits of process re-engineering in operations management? 
							</button>
						</div>
						<!-- Body -->
						<div id="collapse-3" class="accordion-collapse collapse" aria-labelledby="heading-3" data-bs-parent="#accordionFaq">
							<div class="accordion-body mt-3 pb-0">
							Process re-engineering involves analyzing and redesigning workflows to improve efficiency. The benefits include cost reduction, improved quality, faster turnaround times, and enhanced customer satisfaction. It allows organizations to stay competitive in a rapidly changing market. 
							</div>
						</div>
					</div>

					<!-- Item -->
					<div class="accordion-item mb-3">
						<div class="accordion-header font-base" id="heading-4">
							<button class="accordion-button fw-semibold collapsed rounded" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-4" aria-expanded="false" aria-controls="collapse-4">
							How does systems integration contribute to operational efficiency? 
							</button>
						</div>
						<!-- Body -->
						<div id="collapse-4" class="accordion-collapse collapse" aria-labelledby="heading-4" data-bs-parent="#accordionFaq">
							<div class="accordion-body mt-3 pb-0">
							Systems integration connects different software applications and IT systems, allowing seamless data flow and collaboration. This enhances operational efficiency by reducing redundancy, improving communication, and enabling faster and more informed decision-making across departments. 
							</div>
						</div>
					</div>

					<!-- Item -->
					<div class="accordion-item mb-3">
						<div class="accordion-header font-base" id="heading-5">
							<button class="accordion-button fw-semibold collapsed rounded" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-5" aria-expanded="false" aria-controls="collapse-5">
							What role does strategic planning play in operations management? 
							</button>
						</div>
						<!-- Body -->
						<div id="collapse-5" class="accordion-collapse collapse" aria-labelledby="heading-5" data-bs-parent="#accordionFaq">
							<div class="accordion-body mt-3 pb-0">
							Strategic planning in operations management involves setting long-term goals and aligning resources to achieve them. It helps organizations anticipate challenges, allocate resources effectively, and adapt to market changes, ensuring sustainable growth and competitive advantage. 
							</div>
						</div>
					</div>

					<!-- Item -->
					<div class="accordion-item mb-3">
						<div class="accordion-header font-base" id="heading-6">
							<button class="accordion-button fw-semibold collapsed rounded" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-6" aria-expanded="false" aria-controls="collapse-6">
							How can businesses ensure the security of their operations and systems? 
							</button>
						</div>
						<!-- Body -->
						<div id="collapse-6" class="accordion-collapse collapse" aria-labelledby="heading-6" data-bs-parent="#accordionFaq">
							<div class="accordion-body mt-3 pb-0">
							Businesses can ensure the security of their operations and systems by implementing robust cybersecurity measures such as firewalls, encryption, and regular security audits. Employee training and awareness programs are also crucial to prevent security breaches and protect sensitive data. 
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