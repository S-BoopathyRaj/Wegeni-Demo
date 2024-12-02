@extends('layouts.website')

@section('content')

<!-- =======================
Services start -->
<section class="pb-0">
	<div class="container">
		<!-- Title -->
		<div class="row g-4 g-md-5">

			<div class="col-md-6 col-lg-4">
				<h2 class="mb-0">Gen-i's Project Precision Pros</h2>
			</div>

			<!-- Item -->
			<div class="col-md-6 col-lg-4">
				<div class="card card-body border p-4 h-100">
					<h6 class="text-primary mb-4">01.</h6>
					<h5>Project Planning and Initiation </h5>
					<p class="mb-0">We provide expert guidance to define project scope, set clear objectives, and build a solid foundation for successful execution. </p>
				</div>
			</div>

			<!-- Item -->
			<div class="col-md-6 col-lg-4">
				<div class="card card-body border p-4 h-100">
					<h6 class="text-primary mb-4">02.</h6>
					<h5>Project Execution and Control </h5>
					<p class="mb-0">WeGeni specializes in project execution and control. We deliver projects on time, within budget, and to the highest quality standards </p>
				</div>
			</div>

			<!-- Item -->
			<div class="col-md-6 col-lg-4">
				<div class="card card-body border p-4 h-100">
					<h6 class="text-primary mb-4">03.</h6>
					<h5>Project Closing and Evaluation </h5>
					<p class="mb-0">Project closing and evaluation are crucial phases in the project management lifecycle. They ensure that the project is formally completed, and valuable insights are gathered for future projects </p>
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
				<img src="{{asset('assets/images/about/project management.png')}}" class="rounded-3" alt="">
			</div>

			<div class="col-md-7 h-100">
				<div class="row g-4 g-lg-5">
					<!-- Feature item -->
					<div class="col-lg-6">
						<div class="card bg-light rounded h-100 overflow-hidden p-5">
							<!-- Card body -->
							<div class="card-body bg-transparent p-0">
								<div class="badge text-bg-secondary mb-3">Feature</div>
								<p class="small mb-0">Revolutionize your operations and unlock new efficiencies with cutting-edge Process Re-Engineering strategies today.</p>
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
								<p class="small mb-0">Optimize your operations and achieve significant improvements with data-driven insights from Process Re-Engineering today.</p>
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
								<p class="small mb-0">Maximize your business’s efficiency and profitability by implementing innovative Process Re-Engineering solutions with Business Solution.</p>
							</div>
		
							<!-- Card footer -->
							<div class="card-footer bg-transparent text-end p-0 mt-3">
								<span class="fs-1 fw-semibold heading-color">₹1.8M</span>
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
			<p class="mb-0 inner-container-small">Optimize your projects with WeGeni’s expert management solutions. Achieve efficiency and excellence every step of the way.</p>
		</div>

		<!-- Feature START -->
		<div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 g-5 g-lg-6">
			<!-- item -->
			<div class="col">
				<div class="card card-body bg-transparent text-center p-0">
					<span class="h4 text-primary"><img src="{{asset('assets/images/icons/Project Planning and Initiation.svg')}}"></span>
					<h6 class="mb-2">Project Planning and Initiation </h6>
					<div class="mb-0 d-flex justify-content-around">
						<ul class="list-group list-group-borderless text-start">
							<li class="list-group-item heading-color"><i class="bi bi-check-lg text-primary me-1"></i>Project Scoping and Definition</li>
							<li class="list-group-item heading-color"><i class="bi bi-check-lg text-primary me-1"></i>Feasibility Studies</li>
							<li class="list-group-item heading-color"><i class="bi bi-check-lg text-primary me-1"></i> Work Breakdown Structure (WBS) Development</li>
							<li class="list-group-item heading-color"><i class="bi bi-check-lg text-primary me-1"></i> Resource Allocation</li>
							<li class="list-group-item heading-color"><i class="bi bi-check-lg text-primary me-1"></i> Risk Assessment and Mitigation Planning</li>
						</ul>
					</div>
				</div>
			</div>
			
			<!-- item -->
			<div class="col">
				<div class="card card-body bg-transparent text-center p-0">
					<span class="h4 text-primary"><img src="{{asset('assets/images/icons/Project Execution and Control.svg')}}"></span>
					<h6 class="mb-2">Project Execution and Control  </h6>
					<div class="mb-0 d-flex justify-content-around">
						<ul class="list-group list-group-borderless text-start">
							<li class="list-group-item heading-color"><i class="bi bi-check-lg text-primary me-1"></i>Project Scheduling and Timeline Development</li>
							<li class="list-group-item heading-color"><i class="bi bi-check-lg text-primary me-1"></i>Task Assignment and Delegation</li>
							<li class="list-group-item heading-color"><i class="bi bi-check-lg text-primary me-1"></i> Progress Monitoring and Tracking</li>
							<li class="list-group-item heading-color"><i class="bi bi-check-lg text-primary me-1"></i> Quality Control and Assurance</li>
							<li class="list-group-item heading-color"><i class="bi bi-check-lg text-primary me-1"></i> Change Management</li>
							<li class="list-group-item heading-color"><i class="bi bi-check-lg text-primary me-1"></i> Issue Resolution</li>
							<li class="list-group-item heading-color"><i class="bi bi-check-lg text-primary me-1"></i> Communication Management</li>
						</ul>
					</div>
				</div>
			</div>

			<!-- item -->
			<div class="col">
				<div class="card card-body bg-transparent text-center p-0">
					<span class="h4 text-primary"><img src="{{asset('assets/images/icons/Project Closing and Evaluation.svg')}}"></span>
					<h6 class="mb-2">Project Closing and Evaluation  </h6>
					<div class="mb-0 d-flex justify-content-around">
						<ul class="list-group list-group-borderless text-start">
							<li class="list-group-item heading-color"><i class="bi bi-check-lg text-primary me-1"></i>Project Delivery and Handoff</li>
							<li class="list-group-item heading-color"><i class="bi bi-check-lg text-primary me-1"></i>Performance Evaluation</li>
							<li class="list-group-item heading-color"><i class="bi bi-check-lg text-primary me-1"></i> Lessons Learned Analysis</li>
							<li class="list-group-item heading-color"><i class="bi bi-check-lg text-primary me-1"></i> Documentation and Archiving</li>
						</ul>
					</div>
				</div>
			</div>

			<!-- item -->
			<div class="col">
				<div class="card card-body bg-transparent text-center p-0">
					<span class="h4 text-primary"><img src="{{asset('assets/images/icons/Other Services in Project Management.svg')}}"></span>
					<h6 class="mb-2">Other Services in Project Management   </h6>
					<div class="mb-0 d-flex justify-content-around">
						<ul class="list-group list-group-borderless text-start">
							<li class="list-group-item heading-color"><i class="bi bi-check-lg text-primary me-1"></i>Agile Project Management</li>
							<li class="list-group-item heading-color"><i class="bi bi-check-lg text-primary me-1"></i>Portfolio Management</li>
							<li class="list-group-item heading-color"><i class="bi bi-check-lg text-primary me-1"></i> Project Management Office (PMO) Setup</li>
							<li class="list-group-item heading-color"><i class="bi bi-check-lg text-primary me-1"></i> Project Management Software Implementation</li>
							<li class="list-group-item heading-color"><i class="bi bi-check-lg text-primary me-1"></i> Training and Development</li>
							<li class="list-group-item heading-color"><i class="bi bi-check-lg text-primary me-1"></i> Financial Management</li>
							<li class="list-group-item heading-color"><i class="bi bi-check-lg text-primary me-1"></i> Contract Management</li>
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
				<p>Seamless system integration and data management </p>
				<p>We excel in defining project scope, allocating resources, creating detailed schedules, and implementing robust control mechanisms. Our expertise in risk management, quality assurance, and effective communication ensures projects are delivered on time, within budget, and to the highest standards. We offer additional services such as agile project management, portfolio management, and PMO setup to address diverse project needs.</p>
			</div>

			<!-- Service benefits -->
			<div class="col-md-6">
				<div class="card card-body bg-light border p-md-5">
					<h4 class="mb-3">Service benefits</h4>

					<!-- List -->
					<ul class="list-group list-group-borderless border-0">
						<li class="list-group-item heading-color d-flex mb-0"><i class="bi bi-patch-check text-primary me-2"></i>Efficient Planning</li>
						<li class="list-group-item heading-color d-flex mb-0"><i class="bi bi-patch-check text-primary me-2"></i>Resource Optimization</li>
						<li class="list-group-item heading-color d-flex mb-0"><i class="bi bi-patch-check text-primary me-2"></i>Risk Management</li>
						<li class="list-group-item heading-color d-flex mb-0"><i class="bi bi-patch-check text-primary me-2"></i>Clear Communication</li>
						<li class="list-group-item heading-color d-flex mb-0"><i class="bi bi-patch-check text-primary me-2"></i>Budget Control</li>
						<li class="list-group-item heading-color d-flex mb-0"><i class="bi bi-patch-check text-primary me-2"></i>On-Time Delivery</li>
						<li class="list-group-item heading-color d-flex mb-0"><i class="bi bi-patch-check text-primary me-2"></i>Quality Assurance</li>
						<li class="list-group-item heading-color d-flex mb-0"><i class="bi bi-patch-check text-primary me-2"></i>Scalability</li>
						<li class="list-group-item heading-color d-flex mb-0"><i class="bi bi-patch-check text-primary me-2"></i>Enhanced Productivity</li>
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
							What is Project Management, and why is it important? 
							</button>
						</div>
						<!-- Body -->
						<div id="collapse-1" class="accordion-collapse collapse show" aria-labelledby="heading-1" data-bs-parent="#accordionFaq">
							<div class="accordion-body mt-3 pb-0">
							Project Management involves planning, executing, and overseeing a project to meet specific goals within a specified timeframe. It's crucial for ensuring that projects are completed efficiently, within budget, and with high quality, aligning with the organization's strategic objectives. 
							</div>
						</div>
					</div>

					<!-- Item -->
					<div class="accordion-item mb-3">
						<div class="accordion-header font-base" id="heading-2">
							<button class="accordion-button fw-semibold rounded collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-2" aria-expanded="false" aria-controls="collapse-2">
							What are the key phases of a project management lifecycle? 
							</button>
						</div>
						<!-- Body -->
						<div id="collapse-2" class="accordion-collapse collapse" aria-labelledby="heading-2" data-bs-parent="#accordionFaq">
							<div class="accordion-body mt-3 pb-0">
							The key phases include Initiation, Planning, Execution, Monitoring & Controlling, and Closing. Each phase is essential for setting clear goals, ensuring project alignment with business objectives, and delivering successful outcomes. 
							</div>
						</div>
					</div>

					<!-- Item -->
					<div class="accordion-item mb-3">
						<div class="accordion-header font-base" id="heading-3">
							<button class="accordion-button fw-semibold collapsed rounded" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-3" aria-expanded="false" aria-controls="collapse-3">
							How do you handle changes in project scope? 
							</button>
						</div>
						<!-- Body -->
						<div id="collapse-3" class="accordion-collapse collapse" aria-labelledby="heading-3" data-bs-parent="#accordionFaq">
							<div class="accordion-body mt-3 pb-0">
							We handle changes in project scope through a structured change management process that includes evaluating the impact, obtaining necessary approvals, and updating project plans. This ensures that changes are managed without jeopardizing project success. 
							</div>
						</div>
					</div>

					<!-- Item -->
					<div class="accordion-item mb-3">
						<div class="accordion-header font-base" id="heading-4">
							<button class="accordion-button fw-semibold collapsed rounded" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-4" aria-expanded="false" aria-controls="collapse-4">
							What tools and methodologies do you use in Project Management? 
							</button>
						</div>
						<!-- Body -->
						<div id="collapse-4" class="accordion-collapse collapse" aria-labelledby="heading-4" data-bs-parent="#accordionFaq">
							<div class="accordion-body mt-3 pb-0">
							We utilize industry-standard tools such as Microsoft Project, Trello, and Jira, along with methodologies like Agile, Waterfall, and Scrum. These tools and methodologies enable us to tailor our approach to suit the unique needs of each project. 
							</div>
						</div>
					</div>

					<!-- Item -->
					<div class="accordion-item mb-3">
						<div class="accordion-header font-base" id="heading-5">
							<button class="accordion-button fw-semibold collapsed rounded" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-5" aria-expanded="false" aria-controls="collapse-5">
							How do you ensure effective communication in a project? 
							</button>
						</div>
						<!-- Body -->
						<div id="collapse-5" class="accordion-collapse collapse" aria-labelledby="heading-5" data-bs-parent="#accordionFaq">
							<div class="accordion-body mt-3 pb-0">
							Effective communication is ensured through regular meetings, clear documentation, and collaboration tools like Slack and Microsoft Teams. Our approach fosters transparency and ensures that all stakeholders are aligned throughout the project lifecycle. 
							</div>
						</div>
					</div>

						<!-- Item -->
						<div class="accordion-item mb-3">
						<div class="accordion-header font-base" id="heading-6">
							<button class="accordion-button fw-semibold collapsed rounded" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-6" aria-expanded="false" aria-controls="collapse-6">
							How do you measure the success of a project?
							</button>
						</div>
						<!-- Body -->
						<div id="collapse-6" class="accordion-collapse collapse" aria-labelledby="heading-6" data-bs-parent="#accordionFaq">
							<div class="accordion-body mt-3 pb-0">
							We measure success by evaluating project deliverables against predefined objectives, timelines, and budgets. Key Performance Indicators (KPIs) and stakeholder satisfaction are also assessed to ensure the project meets or exceeds expectations. 
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