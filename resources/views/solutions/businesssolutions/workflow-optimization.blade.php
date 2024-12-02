@extends('layouts.website')

@section('content')

<!-- =======================
Services start -->
<section class="pb-0">
	<div class="container">
		<!-- Title -->
		<div class="row g-4 g-md-5">

			<div class="col-md-6 col-lg-4">
				<h2 class="mb-0">Seamless Workflow Solutions</h2>
			</div>

			<!-- Item -->
			<div class="col-md-6 col-lg-4">
				<div class="card card-body border p-4 h-100">
					<h6 class="text-primary mb-4">01.</h6>
					<h5>Process Analysis and Design </h5>
					<p class="mb-0">Workflow optimization streamlines processes to boost efficiency, reduce waste, and enhance performance. </p>
				</div>
			</div>

			<!-- Item -->
			<div class="col-md-6 col-lg-4">
				<div class="card card-body border p-4 h-100">
					<h6 class="text-primary mb-4">02.</h6>
					<h5>Technology Implementation </h5>
					<p class="mb-0">Implementing technology in workflow optimization can significantly enhance efficiency and productivity . </p>
				</div>
			</div>

			<!-- Item -->
			<div class="col-md-6 col-lg-4">
				<div class="card card-body border p-4 h-100">
					<h6 class="text-primary mb-4">03.</h6>
					<h5>Change Management and Training </h5>
					<p class="mb-0">Change management involves planning, communication, stakeholder engagement, and monitoring to implement changes smoothly. </p>
				</div>
			</div>

			<!-- Item -->
			<div class="col-md-6 col-lg-4">
				<div class="card card-body border p-4 h-100">
					<h6 class="text-primary mb-4">04.</h6>
					<h5>Performance Measurement and Improvement </h5>
					<p class="mb-0">Optimizing workflows and measuring performance are crucial for enhancing efficiency and productivity in any organization. </p>
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
				<img src="{{asset('assets/images/about/workflow.png')}}" class="rounded-3" alt="">
			</div>

			<div class="col-md-7 h-100">
				<div class="row g-4 g-lg-5">
					<!-- Feature item -->
					<div class="col-lg-6">
						<div class="card bg-light rounded h-100 overflow-hidden p-5">
							<!-- Card body -->
							<div class="card-body bg-transparent p-0">
								<div class="badge text-bg-secondary mb-3">Feature</div>
								<p class="small mb-0">Streamline your operations and enhance efficiency with tailored Workflow Management solutions designed for optimal performance.</p>
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
								<p class="small mb-0">Streamline your operations and enhance efficiency with tailored Workflow Management solutions designed for optimal performance.</p>
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
								<p class="small mb-0">Maximize your operational efficiency and boost your financial performance with advanced workflow optimization solutions today.</p>
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
			<p class="mb-0 inner-container-small">Boost your team's efficiency with WeGeni’s Workflow Optimization. Simplify processes and achieve more with less effort.</p>
		</div>

		<!-- Feature START -->
		<div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 g-5 g-lg-6">
			<!-- item -->
			<div class="col">
				<div class="card card-body bg-transparent text-center p-0">
					<span class="h4 text-primary"><img src="{{asset('assets/images/icons/Process Analysis and Design.svg')}}"></span>
					<h6 class="mb-2">Process Analysis and Design   </h6>
					<div class="mb-0 d-flex justify-content-around">
						<ul class="list-group list-group-borderless text-start">
							<li class="list-group-item heading-color"><i class="bi bi-check-lg text-primary me-1"></i>Comprehensive Workflow Mapping</li>
							<li class="list-group-item heading-color"><i class="bi bi-check-lg text-primary me-1"></i>Process Assessment</li>
							<li class="list-group-item heading-color"><i class="bi bi-check-lg text-primary me-1"></i> Process Redesign</li>
						</ul>
					</div>
				</div>
			</div>
			
			<!-- item -->
			<div class="col">
				<div class="card card-body bg-transparent text-center p-0">
					<span class="h4 text-primary"><img src="{{asset('assets/images/icons/Technology Implementation (2).svg')}}"></span>
					<h6 class="mb-2">Technology Implementation </h6>
					<div class="mb-0 d-flex justify-content-around">
						<ul class="list-group list-group-borderless text-start">
							<li class="list-group-item heading-color"><i class="bi bi-check-lg text-primary me-1"></i>Workflow Automation</li>
							<li class="list-group-item heading-color"><i class="bi bi-check-lg text-primary me-1"></i>Software Selection and Integration</li>
							<li class="list-group-item heading-color"><i class="bi bi-check-lg text-primary me-1"></i> System Optimization</li>		
						</ul>
					</div>
				</div>
			</div>

			<!-- item -->
			<div class="col">
				<div class="card card-body bg-transparent text-center p-0">
					<span class="h4 text-primary"><img src="{{asset('assets/images/icons/Change Management and Training.svg')}}"></span>
					<h6 class="mb-2">Change Management and Training  </h6>
					<div class="mb-0 d-flex justify-content-around">
						<ul class="list-group list-group-borderless text-start">
							<li class="list-group-item heading-color"><i class="bi bi-check-lg text-primary me-1"></i>Resistance Management</li>
							<li class="list-group-item heading-color"><i class="bi bi-check-lg text-primary me-1"></i>Change Communication</li>
							<li class="list-group-item heading-color"><i class="bi bi-check-lg text-primary me-1"></i> User Training</li>
						</ul>
					</div>
				</div>
			</div>

			<!-- item -->
			<div class="col">
				<div class="card card-body bg-transparent text-center p-0">
					<span class="h4 text-primary"><img src="{{asset('assets/images/icons/Performance Measurement and Improvement.svg')}}"></span>
					<h6 class="mb-2">Performance Measurement and Improvement </h6>
					<div class="mb-0 d-flex justify-content-around">
						<ul class="list-group list-group-borderless text-start">
							<li class="list-group-item heading-color"><i class="bi bi-check-lg text-primary me-1"></i>Key Performance Indicator (KPI) Development </li>
							<li class="list-group-item heading-color"><i class="bi bi-check-lg text-primary me-1"></i>Performance Monitoring and Analysis</li>
							<li class="list-group-item heading-color"><i class="bi bi-check-lg text-primary me-1"></i> Continuous Improvement</li>
							<li class="list-group-item heading-color"><i class="bi bi-check-lg text-primary me-1"></i> Business Process Reengineering (BPR)</li>
							<li class="list-group-item heading-color"><i class="bi bi-check-lg text-primary me-1"></i> Lean Six Sigma</li>
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
				<p>Our workflow optimization approach encompasses a holistic view of your processes, combining in-depth analysis, strategic redesign, and technology implementation. </p>
				<p>We meticulously map and assess existing workflows to identify inefficiencies, then develop and implement optimized solutions. By leveraging automation, appropriate software, and effective change management, we drive process improvements, enhance productivity, and deliver measurable results. Our commitment to continuous improvement ensures long-term success through performance monitoring, data-driven decision-making, and the adoption of industry best practices like Lean Six Sigma and digital transformation.</p>
			</div>

			<!-- Service benefits -->
			<div class="col-md-6">
				<div class="card card-body bg-light border p-md-5">
					<h4 class="mb-3">Service benefits</h4>

					<!-- List -->
					<ul class="list-group list-group-borderless border-0">
						<li class="list-group-item heading-color d-flex mb-0"><i class="bi bi-patch-check text-primary me-2"></i>Reduced Bottlenecks</li>
						<li class="list-group-item heading-color d-flex mb-0"><i class="bi bi-patch-check text-primary me-2"></i>Improved Productivity</li>
						<li class="list-group-item heading-color d-flex mb-0"><i class="bi bi-patch-check text-primary me-2"></i>Cost Savings</li>
						<li class="list-group-item heading-color d-flex mb-0"><i class="bi bi-patch-check text-primary me-2"></i>Enhanced Accuracy</li>
						<li class="list-group-item heading-color d-flex mb-0"><i class="bi bi-patch-check text-primary me-2"></i>Faster Turnaround</li>
						<li class="list-group-item heading-color d-flex mb-0"><i class="bi bi-patch-check text-primary me-2"></i>Better Resource Management</li>
						<li class="list-group-item heading-color d-flex mb-0"><i class="bi bi-patch-check text-primary me-2"></i>Increased Collaboration</li>
						<li class="list-group-item heading-color d-flex mb-0"><i class="bi bi-patch-check text-primary me-2"></i>Scalable Solutions</li>
						<li class="list-group-item heading-color d-flex mb-0"><i class="bi bi-patch-check text-primary me-2"></i>Clearer Insights</li>
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
							What is workflow optimization, and why is it important for my business? 
							</button>
						</div>
						<!-- Body -->
						<div id="collapse-1" class="accordion-collapse collapse show" aria-labelledby="heading-1" data-bs-parent="#accordionFaq">
							<div class="accordion-body mt-3 pb-0">
							Workflow optimization is the process of analyzing and improving your business processes to increase efficiency and productivity. It’s important because it helps reduce waste, save time, and enhance the overall performance of your organization, leading to cost savings and improved customer satisfaction. 
							</div>
						</div>
					</div>

					<!-- Item -->
					<div class="accordion-item mb-3">
						<div class="accordion-header font-base" id="heading-2">
							<button class="accordion-button fw-semibold rounded collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-2" aria-expanded="false" aria-controls="collapse-2">
							How can workflow optimization benefit my company? 
							</button>
						</div>
						<!-- Body -->
						<div id="collapse-2" class="accordion-collapse collapse" aria-labelledby="heading-2" data-bs-parent="#accordionFaq">
							<div class="accordion-body mt-3 pb-0">
							Workflow optimization can streamline operations, eliminate bottlenecks, and automate repetitive tasks. By enhancing efficiency and productivity, your company can improve its competitive edge, reduce operational costs, and focus more on strategic initiatives and innovation. 
							</div>
						</div>
					</div>

					<!-- Item -->
					<div class="accordion-item mb-3">
						<div class="accordion-header font-base" id="heading-3">
							<button class="accordion-button fw-semibold collapsed rounded" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-3" aria-expanded="false" aria-controls="collapse-3">
							What are some common techniques used in workflow optimization? 
							</button>
						</div>
						<!-- Body -->
						<div id="collapse-3" class="accordion-collapse collapse" aria-labelledby="heading-3" data-bs-parent="#accordionFaq">
							<div class="accordion-body mt-3 pb-0">
							Common techniques include process mapping, task automation, lean management, and continuous improvement strategies like Six Sigma. These techniques help identify inefficiencies, simplify complex workflows, and implement solutions that enhance productivity and accuracy. 
							</div>
						</div>
					</div>

					<!-- Item -->
					<div class="accordion-item mb-3">
						<div class="accordion-header font-base" id="heading-4">
							<button class="accordion-button fw-semibold collapsed rounded" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-4" aria-expanded="false" aria-controls="collapse-4">
							How do I know if my company needs workflow optimization? 
							</button>
						</div>
						<!-- Body -->
						<div id="collapse-4" class="accordion-collapse collapse" aria-labelledby="heading-4" data-bs-parent="#accordionFaq">
							<div class="accordion-body mt-3 pb-0">
							Signs that your company may benefit from workflow optimization include frequent bottlenecks, high error rates, employee frustration, and missed deadlines. If you're facing these challenges or looking to improve operational efficiency, workflow optimization could be the solution. 
							</div>
						</div>
					</div>

					<!-- Item -->
					<div class="accordion-item mb-3">
						<div class="accordion-header font-base" id="heading-5">
							<button class="accordion-button fw-semibold collapsed rounded" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-5" aria-expanded="false" aria-controls="collapse-5">
							How long does it typically take to optimize a workflow? 
							</button>
						</div>
						<!-- Body -->
						<div id="collapse-5" class="accordion-collapse collapse" aria-labelledby="heading-5" data-bs-parent="#accordionFaq">
							<div class="accordion-body mt-3 pb-0">
							The duration of workflow optimization varies based on the complexity and scope of the processes involved. A simple optimization might take a few weeks, while more complex workflows may require several months to achieve desired results. It’s important to continuously monitor and adjust as needed. 
							</div>
						</div>
					</div>

					
					<!-- Item -->
					<div class="accordion-item mb-3">
						<div class="accordion-header font-base" id="heading-6">
							<button class="accordion-button fw-semibold collapsed rounded" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-6" aria-expanded="false" aria-controls="collapse-6">
							Can workflow optimization be customized to fit my specific industry needs? 
							</button>
						</div>
						<!-- Body -->
						<div id="collapse-6" class="accordion-collapse collapse" aria-labelledby="heading-6" data-bs-parent="#accordionFaq">
							<div class="accordion-body mt-3 pb-0">
							Absolutely. Workflow optimization can be tailored to meet the unique requirements of different industries, whether you're in healthcare, manufacturing, finance, or any other sector. Customized solutions ensure that the specific challenges and goals of your industry are addressed effectively. 

 
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