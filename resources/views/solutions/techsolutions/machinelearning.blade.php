@extends('layouts.website')

@section('content')

<!-- =======================
Services start -->
<section class="pb-0">
	<div class="container">
		<!-- Title -->
		<div class="row g-4 g-md-5">

			<div class="col-md-6 col-lg-4">
				<h2 class="mb-0">Gen-i's Quantum ML Technologies</h2>
			</div>

			<!-- Item -->
			<div class="col-md-6 col-lg-4">
				<div class="card card-body border p-4 h-100">
					<h6 class="text-primary mb-4">01.</h6>
					<h5>Core Services Offered by Machine Learning Agencies</h5>
					<p class="mb-0">Machine learning agencies provide a range of services to help businesses harness the power of AI. </p>
				</div>
			</div>

			<!-- Item -->
			<div class="col-md-6 col-lg-4">
				<div class="card card-body border p-4 h-100">
					<h6 class="text-primary mb-4">02.</h6>
					<h5>Real-world machine learning use cases</h5>
					<p class="mb-0">Machine learning empowers sales and marketing. Key applications include churn modeling, segmentation, targeted marketing, and sales forecasting. </p>
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
				<img src="{{asset('assets/images/about/machinelearning.png')}}" class="rounded-3" alt="">
			</div>

			<div class="col-md-7 h-100">
				<div class="row g-4 g-lg-5">
					<!-- Feature item -->
					<div class="col-lg-6">
						<div class="card bg-light rounded h-100 overflow-hidden p-5">
							<!-- Card body -->
							<div class="card-body bg-transparent p-0">
								<div class="badge text-bg-secondary mb-3">Feature</div>
								<p class="small mb-0">Transform your data-driven strategies with advanced Machine Learning technologies that propel your business to new heights today.</p>
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
								<p class="small mb-0">Leverage powerful Machine Learning insights to enhance decision-making and achieve up to more accurate predictions and results.</p>
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
								<p class="small mb-0">Unlock significant growth and drive up to revenue by implementing state-of-the-art Machine Learning technologies tailored to your needs.</p>
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
			<h2>Transform Your Business with Machine Learning</h2>
			<p class="mb-0 inner-container-small ">WeGeni’s advanced Machine Learning solutions automate processes and uncover insights for smarter decision-making.</p>
		</div>

		<!-- Feature START -->
		<div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 g-5 g-lg-6">
			<!-- item -->
			<div class="col">
				<div class="card card-body bg-transparent text-center p-0">
					<span class="h4 text-primary"><img src="{{asset('assets/images/icons/Core Services Offered by Machine Learning Agencies.svg')}}"></span>
					<h6 class="mb-2">Core Services Offered by Machine Learning Agencies</h6>
					<div class="mb-0 d-flex justify-content-around">
						<ul class="list-group list-group-borderless text-start">
							<li class="list-group-item heading-color"><i class="bi bi-check-lg text-primary me-1"></i> Data Engineering and Preparation</li>
							<li class="list-group-item heading-color"><i class="bi bi-check-lg text-primary me-1"></i> ML Model Development</li>
							<li class="list-group-item heading-color"><i class="bi bi-check-lg text-primary me-1"></i> ML Algorithm Selection and Tuning</li>
							<li class="list-group-item heading-color"><i class="bi bi-check-lg text-primary me-1"></i> Model Deployment and Integration</li>
							<li class="list-group-item heading-color"><i class="bi bi-check-lg text-primary me-1"></i> Model Monitoring and Maintenance</li>
							<li class="list-group-item heading-color"><i class="bi bi-check-lg text-primary me-1"></i> Predictive Analytics</li>
							<li class="list-group-item heading-color"><i class="bi bi-check-lg text-primary me-1"></i> Anomaly Detection</li>
							<li class="list-group-item heading-color"><i class="bi bi-check-lg text-primary me-1"></i> Natural Language Processing</li>
							<li class="list-group-item heading-color"><i class="bi bi-check-lg text-primary me-1"></i> Computer Vision</li>
							<li class="list-group-item heading-color"><i class="bi bi-check-lg text-primary me-1"></i> Reinforcement Learning</li>
					    </ul>
					</div>
				</div>
			</div>
			
			<!-- item -->
			<div class="col">
				<div class="card card-body bg-transparent text-center p-0">
					<span class="h4 text-primary"><img src="{{asset('assets/images/icons/Real-world machine learning use cases.svg')}}"></span>
					<h6 class="mb-2">Real-world machine learning use cases</h6><br>
					<div class="mb-0 d-flex justify-content-around">
						<ul class="list-group list-group-borderless text-start">
							<li class="list-group-item heading-color"><i class="bi bi-check-lg text-primary me-1"></i> Speech Recognition</li>
							<li class="list-group-item heading-color"><i class="bi bi-check-lg text-primary me-1"></i> Customer Service</li>
							<li class="list-group-item heading-color"><i class="bi bi-check-lg text-primary me-1"></i> Computer Vision</li>
							<li class="list-group-item heading-color"><i class="bi bi-check-lg text-primary me-1"></i> Recommendation Engines</li>
							<li class="list-group-item heading-color"><i class="bi bi-check-lg text-primary me-1"></i> Fraud Detection</li>
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
				<p>Gen-i's Elite Tech Solutions employs a strategic and holistic approach to machine learning, encompassing data engineering, custom model development, algorithm optimization, seamless integration, and continuous monitoring. Our methodology is designed to unlock the full potential of our clients' data, driving innovation and improved decision-making. </p>
			</div>

			<!-- Service benefits -->
			<div class="col-md-6">
				<div class="card card-body bg-light border p-md-5">
					<h4 class="mb-3">Service benefits</h4>

					<!-- List -->
					<ul class="list-group list-group-borderless border-0">
						<li class="list-group-item heading-color d-flex mb-0"><i class="bi bi-patch-check text-primary me-2"></i>Data-Driven Precision</li>
						<li class="list-group-item heading-color d-flex mb-0"><i class="bi bi-patch-check text-primary me-2"></i>Scalability</li>
						<li class="list-group-item heading-color d-flex mb-0"><i class="bi bi-patch-check text-primary me-2"></i>Process Automation</li>
						<li class="list-group-item heading-color d-flex mb-0"><i class="bi bi-patch-check text-primary me-2"></i>Personalization</li>
						<li class="list-group-item heading-color d-flex mb-0"><i class="bi bi-patch-check text-primary me-2"></i>Future-Ready Insights</li>
						<li class="list-group-item heading-color d-flex mb-0"><i class="bi bi-patch-check text-primary me-2"></i>Enhanced Efficiency</li>
						<li class="list-group-item heading-color d-flex mb-0"><i class="bi bi-patch-check text-primary me-2"></i>Innovative Solutions</li>
						<li class="list-group-item heading-color d-flex mb-0"><i class="bi bi-patch-check text-primary me-2"></i>Rapid Deployment</li>
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
							What is machine learning? 
							</button>
						</div>
						<!-- Body -->
						<div id="collapse-1" class="accordion-collapse collapse show" aria-labelledby="heading-1" data-bs-parent="#accordionFaq">
							<div class="accordion-body mt-3 pb-0">
							Machine learning is a subset of artificial intelligence that involves the development of algorithms that allow computers to learn and make decisions from data. Unlike traditional programming, where instructions are explicitly coded, machine learning models improve their performance by identifying patterns and making predictions based on past experiences. 
							</div>
						</div>
					</div>

					<!-- Item -->
					<div class="accordion-item mb-3">
						<div class="accordion-header font-base" id="heading-2">
							<button class="accordion-button fw-semibold rounded collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-2" aria-expanded="false" aria-controls="collapse-2">
							How does machine learning work?
							</button>
						</div>
						<!-- Body -->
						<div id="collapse-2" class="accordion-collapse collapse" aria-labelledby="heading-2" data-bs-parent="#accordionFaq">
							<div class="accordion-body mt-3 pb-0">
							Machine learning works by feeding data into algorithms that process and analyze it to find patterns or relationships. The algorithms then use these patterns to make predictions or decisions without being explicitly programmed to perform specific tasks. The model's accuracy improves over time as it processes more data. 
							</div>
						</div>
					</div>

					<!-- Item -->
					<div class="accordion-item mb-3">
						<div class="accordion-header font-base" id="heading-3">
							<button class="accordion-button fw-semibold collapsed rounded" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-3" aria-expanded="false" aria-controls="collapse-3">
							What are the different types of machine learning?
							</button>
						</div>
						<!-- Body -->
						<div id="collapse-3" class="accordion-collapse collapse" aria-labelledby="heading-3" data-bs-parent="#accordionFaq">
							<div class="accordion-body mt-3 pb-0">
							The main types of machine learning are supervised learning, unsupervised learning, and reinforcement learning. Supervised learning involves training a model on labeled data, unsupervised learning identifies patterns in unlabeled data, and reinforcement learning focuses on training models to make decisions through trial and error. 
							</div>
						</div>
					</div>

					<!-- Item -->
					<div class="accordion-item mb-3">
						<div class="accordion-header font-base" id="heading-4">
							<button class="accordion-button fw-semibold collapsed rounded" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-4" aria-expanded="false" aria-controls="collapse-4">
							What are some common applications of machine learning? 
							</button>
						</div>
						<!-- Body -->
						<div id="collapse-4" class="accordion-collapse collapse" aria-labelledby="heading-4" data-bs-parent="#accordionFaq">
							<div class="accordion-body mt-3 pb-0">
							Machine learning is widely used in various applications such as predictive analytics, natural language processing, computer vision, and recommendation systems. Examples include email filtering, voice assistants, fraud detection, and personalized content recommendations. 
							</div>
						</div>
					</div>

					<!-- Item -->
					<div class="accordion-item mb-3">
						<div class="accordion-header font-base" id="heading-5">
							<button class="accordion-button fw-semibold collapsed rounded" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-5" aria-expanded="false" aria-controls="collapse-5">
							What skills are required to work in machine learning? 
							</button>
						</div>
						<!-- Body -->
						<div id="collapse-5" class="accordion-collapse collapse" aria-labelledby="heading-5" data-bs-parent="#accordionFaq">
							<div class="accordion-body mt-3 pb-0">
							To work in machine learning, one typically needs a strong foundation in mathematics and statistics, programming skills (especially in languages like Python), and knowledge of machine learning algorithms and frameworks. Familiarity with data processing and model evaluation techniques is also crucial. 
							</div>
						</div>
					</div>

					<!-- Item -->
					<div class="accordion-item mb-3">
						<div class="accordion-header font-base" id="heading-6">
							<button class="accordion-button fw-semibold collapsed rounded" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-6" aria-expanded="false" aria-controls="collapse-6">
							How can machine learning benefit businesses? 
							</button>
						</div>
						<!-- Body -->
						<div id="collapse-6" class="accordion-collapse collapse" aria-labelledby="heading-6" data-bs-parent="#accordionFaq">
							<div class="accordion-body mt-3 pb-0">
							Machine learning can benefit businesses by providing insights from data, automating routine tasks, and enhancing decision-making processes. It can lead to improved customer experiences, increased efficiency, and the ability to identify new opportunities and trends in the market. 
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