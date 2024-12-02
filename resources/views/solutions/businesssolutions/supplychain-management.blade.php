@extends('layouts.website')

@section('content')

<!-- =======================
Services start -->
<section class="pb-0">
	<div class="container">
		<!-- Title -->
		<div class="row g-4 g-md-5">

			<div class="col-md-6 col-lg-4">
				<h2 class="mb-0">Gen-i's Supply Chain Savvy</h2>
			</div>

			<!-- Item -->
			<div class="col-md-6 col-lg-4">
				<div class="card card-body border p-4 h-100">
					<h6 class="text-primary mb-4">01.</h6>
					<h5>Strategic Supply Chain Consulting </h5>
					<p class="mb-0">We provide strategic advisory services to identify opportunities, mitigate risks, and develop a clear roadmap to optimize your supply chain operations. </p>
				</div>
			</div>

			<!-- Item -->
			<div class="col-md-6 col-lg-4">
				<div class="card card-body border p-4 h-100">
					<h6 class="text-primary mb-4">02.</h6>
					<h5>Supply Chain Planning and Optimization </h5>
					<p class="mb-0">We provide strategic advisory services to identify opportunities, mitigate risks, and develop a clear roadmap to optimize your supply chain operations. </p>
				</div>
			</div>

			<!-- Item -->
			<div class="col-md-6 col-lg-4">
				<div class="card card-body border p-4 h-100">
					<h6 class="text-primary mb-4">03.</h6>
					<h5>Supply Chain Execution and Operations </h5>
					<p class="mb-0">We streamline operations from procurement to delivery, ensuring timely, efficient, and cost-effective movement of goods while meeting customer demands. </p>
				</div>
			</div>

			<!-- Item -->
			<div class="col-md-6 col-lg-4">
				<div class="card card-body border p-4 h-100">
					<h6 class="text-primary mb-4">04.</h6>
					<h5>Supply Chain Technology and Analytics </h5>
					<p class="mb-0">Supply chain technology and analytics are transforming the way businesses manage their supply chains, making them more efficient, resilient, and responsive. </p>
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
				<img src="{{asset('assets/images/about/supply chain.png')}}" class="rounded-3" alt="">
			</div>

			<div class="col-md-7 h-100">
				<div class="row g-4 g-lg-5">
					<!-- Feature item -->
					<div class="col-lg-6">
						<div class="card bg-light rounded h-100 overflow-hidden p-5">
							<!-- Card body -->
							<div class="card-body bg-transparent p-0">
								<div class="badge text-bg-secondary mb-3">Feature</div>
								<p class="small mb-0">Optimize your operations and achieve seamless efficiency with advanced Supply Chain Management strategies today.</p>
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
								<p class="small mb-0">Optimize your operations and enhance efficiency with data-driven insights tailored for effective Supply Chain Management strategies today.</p>
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
								<p class="small mb-0">Maximize profitability and streamline your operations by leveraging state-of-the-art Supply Chain Management solutions today.</p>
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
			<p class="mb-0 inner-container-small">Optimize your supply chain with WeGeni’s efficient management solutions. Experience smooth operations from start to finish.</p>
		</div>

		<!-- Feature START -->
		<div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 g-5 g-lg-6">
			<!-- item -->
			<div class="col">
				<div class="card card-body bg-transparent text-center p-0">
					<span class="h4 text-primary"><img src="{{asset('assets/images/icons/Strategic Supply Chain Consulting.svg')}}"></span>
					<h6 class="mb-2">Strategic Supply Chain Consulting </h6>
					<div class="mb-0 d-flex justify-content-around">
						<ul class="list-group list-group-borderless text-start">
							<li class="list-group-item heading-color"><i class="bi bi-check-lg text-primary me-1"></i>Supply Chain Assessment and Analysis</li>
							<li class="list-group-item heading-color"><i class="bi bi-check-lg text-primary me-1"></i>Supply Chain Strategy Development</li>
							<li class="list-group-item heading-color"><i class="bi bi-check-lg text-primary me-1"></i> Supply Chain Network Design</li>
							<li class="list-group-item heading-color"><i class="bi bi-check-lg text-primary me-1"></i> Risk Management and Mitigation</li>
						</ul>
					</div>
				</div>
			</div>
			
			<!-- item -->
			<div class="col">
				<div class="card card-body bg-transparent text-center p-0">
					<span class="h4 text-primary"><img src="{{asset('assets/images/icons/Supply Chain Planning and Optimization.svg')}}"></span>
					<h6 class="mb-2">Supply Chain Planning and Optimization </h6>
					<div class="mb-0 d-flex justify-content-around">
						<ul class="list-group list-group-borderless text-start">
							<li class="list-group-item heading-color"><i class="bi bi-check-lg text-primary me-1"></i>Demand Forecasting and Planning </li>
							<li class="list-group-item heading-color"><i class="bi bi-check-lg text-primary me-1"></i>Supply Planning and Optimization</li>
							<li class="list-group-item heading-color"><i class="bi bi-check-lg text-primary me-1"></i> Inventory Management</li>
							<li class="list-group-item heading-color"><i class="bi bi-check-lg text-primary me-1"></i> Transportation and Logistics Management</li>
						</ul>
					</div>
				</div>
			</div>

			<!-- item -->
			<div class="col">
				<div class="card card-body bg-transparent text-center p-0">
					<span class="h4 text-primary"><img src="{{asset('assets/images/icons/Supply Chain Execution and Operations.svg')}}"></span>
					<h6 class="mb-2">Supply Chain Execution and Operations  </h6>
					<div class="mb-0 d-flex justify-content-around">
						<ul class="list-group list-group-borderless text-start">
							<li class="list-group-item heading-color"><i class="bi bi-check-lg text-primary me-1"></i>Procurement and Sourcing </li>
							<li class="list-group-item heading-color"><i class="bi bi-check-lg text-primary me-1"></i>Production Planning and Scheduling</li>
							<li class="list-group-item heading-color"><i class="bi bi-check-lg text-primary me-1"></i>Order Fulfillment and Distribution</li>
							<li class="list-group-item heading-color"><i class="bi bi-check-lg text-primary me-1"></i> Returns Management</li>
						</ul>
					</div>
				</div>
			</div>

			<!-- item -->
			<div class="col">
				<div class="card card-body bg-transparent text-center p-0">
					<span class="h4 text-primary"><img src="{{asset('assets/images/icons/Supply Chain Technology and Analytics.svg')}}"></span>
					<h6 class="mb-2">Supply Chain Technology and Analytics  </h6>
					<div class="mb-0 d-flex justify-content-around">
						<ul class="list-group list-group-borderless text-start">
							<li class="list-group-item heading-color"><i class="bi bi-check-lg text-primary me-1"></i>Supply Chain Visibility</li>
							<li class="list-group-item heading-color"><i class="bi bi-check-lg text-primary me-1"></i>Supply Chain Analytics</li>
							<li class="list-group-item heading-color"><i class="bi bi-check-lg text-primary me-1"></i> Supply Chain Software Implementation</li>
							<li class="list-group-item heading-color"><i class="bi bi-check-lg text-primary me-1"></i> Supply Chain Digital Transformation</li>
							<li class="list-group-item heading-color"><i class="bi bi-check-lg text-primary me-1"></i> Supply Chain Finance</li>
							<li class="list-group-item heading-color"><i class="bi bi-check-lg text-primary me-1"></i> Supply Chain Sustainability</li>
							<li class="list-group-item heading-color"><i class="bi bi-check-lg text-primary me-1"></i> Supply Chain Compliance</li>
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
				<p>Our approach to supply chain management encompasses a holistic view of the entire value chain, from strategic planning to operational execution. </p>
				<p>We offer comprehensive services including strategic consulting, demand and supply planning, network optimization, procurement, production, distribution, and returns management. By leveraging advanced analytics and technology, we drive efficiency, reduce costs, improve visibility, and build resilience into your supply chain.</p>
			</div>

			<!-- Service benefits -->
			<div class="col-md-6">
				<div class="card card-body bg-light border p-md-5">
					<h4 class="mb-3">Service benefits</h4>

					<!-- List -->
					<ul class="list-group list-group-borderless border-0">
						<li class="list-group-item heading-color d-flex mb-0"><i class="bi bi-patch-check text-primary me-2"></i>Improved Efficiency</li>
						<li class="list-group-item heading-color d-flex mb-0"><i class="bi bi-patch-check text-primary me-2"></i>Cost Savings</li>
						<li class="list-group-item heading-color d-flex mb-0"><i class="bi bi-patch-check text-primary me-2"></i>Enhanced Visibility</li>
						<li class="list-group-item heading-color d-flex mb-0"><i class="bi bi-patch-check text-primary me-2"></i>Risk Reduction</li>
						<li class="list-group-item heading-color d-flex mb-0"><i class="bi bi-patch-check text-primary me-2"></i>Better Supplier Relations</li>
						<li class="list-group-item heading-color d-flex mb-0"><i class="bi bi-patch-check text-primary me-2"></i>Increased Accuracy</li>
						<li class="list-group-item heading-color d-flex mb-0"><i class="bi bi-patch-check text-primary me-2"></i>Faster Response Time</li>
						<li class="list-group-item heading-color d-flex mb-0"><i class="bi bi-patch-check text-primary me-2"></i>Resource Optimization</li>
						<li class="list-group-item heading-color d-flex mb-0"><i class="bi bi-patch-check text-primary me-2"></i>Scalable Solutions</li>
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
								What is Supply Chain Management? 
							</button>
						</div>
						<!-- Body -->
						<div id="collapse-1" class="accordion-collapse collapse show" aria-labelledby="heading-1" data-bs-parent="#accordionFaq">
							<div class="accordion-body mt-3 pb-0">
							Was out laughter raptures returned outweigh. Luckily cheered colonel I do we attack highest enabled. Tried law yet style child. The bore of true of no be deal. Drawings offended yet answered Jennings perceive laughing six did far. Rooms oh fully taken by worse do. Points afraid but may end law lasted.
							</div>
						</div>
					</div>

					<!-- Item -->
					<div class="accordion-item mb-3">
						<div class="accordion-header font-base" id="heading-2">
							<button class="accordion-button fw-semibold rounded collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-2" aria-expanded="false" aria-controls="collapse-2">
							How does Supply Chain Management improve business efficiency? 
							</button>
						</div>
						<!-- Body -->
						<div id="collapse-2" class="accordion-collapse collapse" aria-labelledby="heading-2" data-bs-parent="#accordionFaq">
							<div class="accordion-body mt-3 pb-0">
							SCM optimizes processes by reducing waste, minimizing costs, and improving production cycles. By aligning supply and demand, it enables businesses to respond swiftly to market changes and customer needs, leading to better resource utilization and increased profitability. 
							</div>
						</div>
					</div>

					<!-- Item -->
					<div class="accordion-item mb-3">
						<div class="accordion-header font-base" id="heading-3">
							<button class="accordion-button fw-semibold collapsed rounded" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-3" aria-expanded="false" aria-controls="collapse-3">
							What are the key components of an effective Supply Chain Management strategy? 
							</button>
						</div>
						<!-- Body -->
						<div id="collapse-3" class="accordion-collapse collapse" aria-labelledby="heading-3" data-bs-parent="#accordionFaq">
							<div class="accordion-body mt-3 pb-0">
							An effective SCM strategy includes demand forecasting, inventory management, supplier relationship management, logistics, and continuous process improvement. Integration of technology and data analytics also plays a crucial role in enhancing decision-making and operational efficiency. 
							</div>
						</div>
					</div>

					<!-- Item -->
					<div class="accordion-item mb-3">
						<div class="accordion-header font-base" id="heading-4">
							<button class="accordion-button fw-semibold collapsed rounded" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-4" aria-expanded="false" aria-controls="collapse-4">
							How does technology impact Supply Chain Management? 
							</button>
						</div>
						<!-- Body -->
						<div id="collapse-4" class="accordion-collapse collapse" aria-labelledby="heading-4" data-bs-parent="#accordionFaq">
							<div class="accordion-body mt-3 pb-0">
							Technology significantly enhances SCM by providing real-time data and analytics, enabling better decision-making, and automating processes. Tools like AI, IoT, and blockchain improve transparency, traceability, and collaboration, leading to more resilient and responsive supply chains. 
							</div>
						</div>
					</div>

					<!-- Item -->
					<div class="accordion-item mb-3">
						<div class="accordion-header font-base" id="heading-5">
							<button class="accordion-button fw-semibold collapsed rounded" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-5" aria-expanded="false" aria-controls="collapse-5">
							What are the challenges faced in Supply Chain Management? 
							</button>
						</div>
						<!-- Body -->
						<div id="collapse-5" class="accordion-collapse collapse" aria-labelledby="heading-5" data-bs-parent="#accordionFaq">
							<div class="accordion-body mt-3 pb-0">
							Common challenges in SCM include demand variability, supply chain disruptions, inventory management, and cost control. Navigating these challenges requires strategic planning, robust risk management, and adaptability to changing market conditions. 
							</div>
						</div>
					</div>

						<!-- Item -->
						<div class="accordion-item mb-3">
						<div class="accordion-header font-base" id="heading-6">
							<button class="accordion-button fw-semibold collapsed rounded" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-6" aria-expanded="false" aria-controls="collapse-6">
							How can businesses benefit from outsourcing Supply Chain Management? 
							</button>
						</div>
						<!-- Body -->
						<div id="collapse-6" class="accordion-collapse collapse" aria-labelledby="heading-6" data-bs-parent="#accordionFaq">
							<div class="accordion-body mt-3 pb-0">
							Outsourcing SCM allows businesses to leverage specialized expertise and resources, reducing operational costs and enhancing scalability. It also enables companies to focus on core competencies while improving service quality and efficiency through expert management of supply chain functions. 
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