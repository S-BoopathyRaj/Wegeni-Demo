@extends('layouts.website')

@section('content')

<!-- =======================
Services start -->
<section class="pb-0">
	<div class="container">
		<!-- Title -->
		<div class="row g-4 g-md-5">

			<div class="col-md-6 col-lg-4">
				<h2 class="mb-0">Gen-i's Logistics Leverage</h2>
			</div>

			<!-- Item -->
			<div class="col-md-6 col-lg-4">
				<div class="card card-body border p-4 h-100">
					<h6 class="text-primary mb-4">01.</h6>
					<h5>Transportation Management </h5>
					<p class="mb-0">Transportation management is a crucial component of logistics management. It involves the strategic planning, execution, and optimization of the movement of goods and services from one location to another. </p>
				</div>
			</div>

			<!-- Item -->
			<div class="col-md-6 col-lg-4">
				<div class="card card-body border p-4 h-100">
					<h6 class="text-primary mb-4">02.</h6>
					<h5>Warehousing and Distribution System </h5>
					<p class="mb-0">Warehousing and distribution are crucial components of logistics management, ensuring that products are stored efficiently and delivered to customers on time. </p>
				</div>
			</div>

			<!-- Item -->
			<div class="col-md-6 col-lg-4">
				<div class="card card-body border p-4 h-100">
					<h6 class="text-primary mb-4">03.</h6>
					<h5>Supply Chain Optimization </h5>
					<p class="mb-0">Supply chain optimization in logistics management involves using various strategies and technologies to enhance the efficiency and effectiveness of the supply chain. </p>
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
				<img src="{{asset('assets/images/about/logistic Management.png')}}" class="rounded-3" alt="">
			</div>

			<div class="col-md-7 h-100">
				<div class="row g-4 g-lg-5">
					<!-- Feature item -->
					<div class="col-lg-6">
						<div class="card bg-light rounded h-100 overflow-hidden p-5">
							<!-- Card body -->
							<div class="card-body bg-transparent p-0">
								<div class="badge text-bg-secondary mb-3">Feature</div>
								<p class="small mb-0">Optimize your supply chain and streamline operations with advanced logistic management tools to achieve peak efficiency today.</p>
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
								<p class="small mb-0">Enhance your logistics operations with actionable insights and data-driven solutions to drive efficiency and performance improvements today.</p>
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
								<p class="small mb-0">Maximize operational efficiency and drive substantial growth by leveraging innovative tools and technologies in Logistic Management today.</p>
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
			<p class="mb-0 inner-container-small">Master your logistics with WeGeni’s expert management solutions. Achieve seamless operations and reliability every step of the way.</p>
		</div>

		<!-- Feature START -->
		<div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 g-5 g-lg-6">
			<!-- item -->
			<div class="col">
				<div class="card card-body bg-transparent text-center p-0">
					<span class="h4 text-primary"><img src="{{asset('assets/images/icons/Transportation Management.svg')}}"></span>
					<h6 class="mb-2">Transportation Management </h6>
					<div class="mb-0 d-flex justify-content-around">
						<ul class="list-group list-group-borderless text-start">
							<li class="list-group-item heading-color"><i class="bi bi-check-lg text-primary me-1"></i>Freight Forwarding</li>
							<li class="list-group-item heading-color"><i class="bi bi-check-lg text-primary me-1"></i>Carrier Management</li>
							<li class="list-group-item heading-color"><i class="bi bi-check-lg text-primary me-1"></i>Load Consolidation</li>
							<li class="list-group-item heading-color"><i class="bi bi-check-lg text-primary me-1"></i>Route Optimization</li>
					</div>
				</div>
			</div>
			
			<!-- item -->
			<div class="col">
				<div class="card card-body bg-transparent text-center p-0">
					<span class="h4 text-primary"><img src="{{asset('assets/images/icons/Warehousing and Distribution System.svg')}}"></span>
					<h6 class="mb-2">Warehousing and Distribution System </h6>
					<div class="mb-0 d-flex justify-content-around">
						<ul class="list-group list-group-borderless text-start">
							<li class="list-group-item heading-color"><i class="bi bi-check-lg text-primary me-1"></i>Warehouse Management System (WMS)</li>
							<li class="list-group-item heading-color"><i class="bi bi-check-lg text-primary me-1"></i>Distribution Management System (DMS)</li>
							<li class="list-group-item heading-color"><i class="bi bi-check-lg text-primary me-1"></i> Order Fulfillment Software</li>
							<li class="list-group-item heading-color"><i class="bi bi-check-lg text-primary me-1"></i>Inventory Management Software</li>
						</ul>
					</div>
				</div>
			</div>

			<!-- item -->
			<div class="col">
				<div class="card card-body bg-transparent text-center p-0">
					<span class="h4 text-primary"><img src="{{asset('assets/images/icons/Supply Chain Optimization.svg')}}"></span>
					<h6 class="mb-2">Supply Chain Optimization </h6>
					<div class="mb-0 d-flex justify-content-around">
						<ul class="list-group list-group-borderless text-start">
							<li class="list-group-item heading-color"><i class="bi bi-check-lg text-primary me-1"></i>Supply Chain Analysis</li>
							<li class="list-group-item heading-color"><i class="bi bi-check-lg text-primary me-1"></i>Supply Chain Design</li>
							<li class="list-group-item heading-color"><i class="bi bi-check-lg text-primary me-1"></i>Supply Chain Visibility</li>
							<li class="list-group-item heading-color"><i class="bi bi-check-lg text-primary me-1"></i> Supply Chain Risk Management</li>
						</ul>
					</div>
				</div>
			</div>

			<!-- item -->
			<div class="col">
				<div class="card card-body bg-transparent text-center p-0">
					<span class="h4 text-primary"><img src="{{asset('assets/images/icons/Value-Added Services.svg')}}"></span>
					<h6 class="mb-2">Value-Added Services  </h6>
					<div class="mb-0 d-flex justify-content-around">
						<ul class="list-group list-group-borderless text-start">
							<li class="list-group-item heading-color"><i class="bi bi-check-lg text-primary me-1"></i>Customs Brokerage</li>
							<li class="list-group-item heading-color"><i class="bi bi-check-lg text-primary me-1"></i>Packaging and Labeling</li>
							<li class="list-group-item heading-color"><i class="bi bi-check-lg text-primary me-1"></i> Reverse Logistics</li>
							<li class="list-group-item heading-color"><i class="bi bi-check-lg text-primary me-1"></i>Supply Chain Consulting</li>
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
				<p>Our logistics management approach encompasses the entire supply chain, from sourcing to delivery. </p>
				<p>We optimize transportation through efficient routing, load consolidation, and carrier management while ensuring seamless warehousing and distribution with advanced software solutions. Our supply chain expertise includes comprehensive analysis, strategic design, and robust risk management. We offer value-added services like customs brokerage, packaging, and reverse logistics to provide end-to-end solutions.</p>
			</div>

			<!-- Service benefits -->
			<div class="col-md-6">
				<div class="card card-body bg-light border p-md-5">
					<h4 class="mb-3">Service benefits</h4>

					<!-- List -->
					<ul class="list-group list-group-borderless border-0">
						<li class="list-group-item heading-color d-flex mb-0"><i class="bi bi-patch-check text-primary me-2"></i>Efficient Coordination</li>
						<li class="list-group-item heading-color d-flex mb-0"><i class="bi bi-patch-check text-primary me-2"></i>Cost Reduction</li>
						<li class="list-group-item heading-color d-flex mb-0"><i class="bi bi-patch-check text-primary me-2"></i>Timely Deliveries</li>
						<li class="list-group-item heading-color d-flex mb-0"><i class="bi bi-patch-check text-primary me-2"></i>Inventory Control</li>
						<li class="list-group-item heading-color d-flex mb-0"><i class="bi bi-patch-check text-primary me-2"></i>Risk Management</li>
						<li class="list-group-item heading-color d-flex mb-0"><i class="bi bi-patch-check text-primary me-2"></i>Customer Satisfaction</li>
						<li class="list-group-item heading-color d-flex mb-0"><i class="bi bi-patch-check text-primary me-2"></i>Data-Driven Decisions</li>
						<li class="list-group-item heading-color d-flex mb-0"><i class="bi bi-patch-check text-primary me-2"></i>Flexibility</li>
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
							What is supply logistics management, and why is it important for businesses? 
							</button>
						</div>
						<!-- Body -->
						<div id="collapse-1" class="accordion-collapse collapse show" aria-labelledby="heading-1" data-bs-parent="#accordionFaq">
							<div class="accordion-body mt-3 pb-0">
							Supply logistics management involves planning, implementing, and controlling the efficient flow and storage of goods, services, and information from point of origin to point of consumption. It is crucial for businesses as it enhances customer satisfaction, reduces operational costs, and increases overall efficiency by ensuring timely delivery and inventory accuracy. 
							</div>
						</div>
					</div>

					<!-- Item -->
					<div class="accordion-item mb-3">
						<div class="accordion-header font-base" id="heading-2">
							<button class="accordion-button fw-semibold rounded collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-2" aria-expanded="false" aria-controls="collapse-2">
							How can supply logistics management improve operational efficiency? 
							</button>
						</div>
						<!-- Body -->
						<div id="collapse-2" class="accordion-collapse collapse" aria-labelledby="heading-2" data-bs-parent="#accordionFaq">
							<div class="accordion-body mt-3 pb-0">
							Supply logistics management improves operational efficiency by optimizing processes such as inventory control, transportation, and warehousing. By leveraging data and technology, businesses can reduce lead times, minimize waste, and streamline operations, resulting in cost savings and better resource allocation. 
							</div>
						</div>
					</div>

					<!-- Item -->
					<div class="accordion-item mb-3">
						<div class="accordion-header font-base" id="heading-3">
							<button class="accordion-button fw-semibold collapsed rounded" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-3" aria-expanded="false" aria-controls="collapse-3">
							What are the key components of effective supply logistics management? 
							</button>
						</div>
						<!-- Body -->
						<div id="collapse-3" class="accordion-collapse collapse" aria-labelledby="heading-3" data-bs-parent="#accordionFaq">
							<div class="accordion-body mt-3 pb-0">
							The key components of effective supply logistics management include demand forecasting, inventory management, transportation management, warehousing, and order fulfillment. Integrating these components with technology solutions helps businesses maintain seamless operations and adapt to changing market demands. 
							</div>
						</div>
					</div>

					<!-- Item -->
					<div class="accordion-item mb-3">
						<div class="accordion-header font-base" id="heading-4">
							<button class="accordion-button fw-semibold collapsed rounded" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-4" aria-expanded="false" aria-controls="collapse-4">
							How does technology impact supply logistics management? 
							</button>
						</div>
						<!-- Body -->
						<div id="collapse-4" class="accordion-collapse collapse" aria-labelledby="heading-4" data-bs-parent="#accordionFaq">
							<div class="accordion-body mt-3 pb-0">
							Technology plays a pivotal role in supply logistics management by providing tools such as automation, data analytics, and real-time tracking. These tools enhance visibility across the supply chain, enable predictive analytics for demand forecasting, and improve decision-making, leading to more responsive and agile logistics operations. 
							</div>
						</div>
					</div>

					<!-- Item -->
					<div class="accordion-item mb-3">
						<div class="accordion-header font-base" id="heading-5">
							<button class="accordion-button fw-semibold collapsed rounded" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-5" aria-expanded="false" aria-controls="collapse-5">
							What are the challenges faced in supply logistics management, and how can they be overcome? 
							</button>
						</div>
						<!-- Body -->
						<div id="collapse-5" class="accordion-collapse collapse" aria-labelledby="heading-5" data-bs-parent="#accordionFaq">
							<div class="accordion-body mt-3 pb-0">
							Common challenges in supply logistics management include fluctuating demand, transportation delays, and inventory mismanagement. These challenges can be overcome by implementing robust planning strategies, leveraging technology for real-time monitoring, and establishing strong relationships with suppliers and logistics partners. 
							</div>
						</div>
					</div>

						<!-- Item -->
						<div class="accordion-item mb-3">
						<div class="accordion-header font-base" id="heading-6">
							<button class="accordion-button fw-semibold collapsed rounded" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-6" aria-expanded="false" aria-controls="collapse-6">
							How can businesses optimize their supply logistics management strategy? 
							</button>
						</div>
						<!-- Body -->
						<div id="collapse-6" class="accordion-collapse collapse" aria-labelledby="heading-6" data-bs-parent="#accordionFaq">
							<div class="accordion-body mt-3 pb-0">
							Businesses can optimize their supply logistics management strategy by adopting a customer-centric approach, investing in technology, and continuously analyzing and improving their processes. Collaborating with experienced logistics partners and using data-driven insights can further enhance efficiency and drive business growth. 
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