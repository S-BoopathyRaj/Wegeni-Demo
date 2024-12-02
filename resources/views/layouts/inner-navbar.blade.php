<!-- Header START -->
<header class="header-sticky header-absolute header-sticky-on">
    <!-- Logo Nav START -->
    <nav class="navbar navbar-expand-xl px-lg-5">
        <div class="container">
            <!-- Logo START -->
            <a class="navbar-brand me-0" href="{{ url('/') }}">
                <img class="light-mode-item navbar-brand-item" src="{{ asset('assets/images/logo.svg') }}" alt="logo">
                <img class="dark-mode-item navbar-brand-item" src="{{ asset('assets/images/logo-light.svg') }}" alt="logo">
            </a>
            <!-- Logo END -->

            <!-- Main navbar START -->
            <div class="navbar-collapse collapse" id="navbarCollapse">
                <ul class="navbar-nav navbar-nav-scroll dropdown-hover mx-auto">

                    <!-- Nav item -->
                    <li class="nav-item"> <a class="nav-link active" href="{{ url('/') }}">Home</a> </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false">Solutions</a>
                        <ul class="dropdown-menu">

                            <li class="dropdown dropend">
                                <a class="nav-link dropdown-link dropdown-toggle" data-bs-toggle="dropdown" href="{{ url('solutions/tech-solutions') }}">Tech Solutions</a>
                                <ul class="dropdown-menu" data-bs-popper="none">
                                    <li> <a class="dropdown-item" href="{{ url('tech-solutions/it-products') }}">IT Products</a></li>
                                    <li> <a class="dropdown-item" href="{{ url('tech-solutions/it-services') }}">IT Services</a></li>
                                    <li> <a class="dropdown-item" href="{{ url('tech-solutions/e-commerce') }}">E-Commerce</a></li>
                                    <li> <a class="dropdown-item" href="{{ url('tech-solutions/web-applications') }}">Web Applications</a></li>
                                    <li> <a class="dropdown-item" href="{{ url('tech-solutions/custom-erp-solutions') }}">Custom ERP Solutions</a></li>
                                    <li> <a class="dropdown-item" href="{{ url('tech-solutions/custom-crm-solutions') }}">Custom CRM Solutions</a></li>
                                    <li> <a class="dropdown-item" href="{{ url('tech-solutions/customize-websites') }}">Customise Websites</a></li>
                                    <li> <a class="dropdown-item" href="{{ url('tech-solutions/cloud-vps') }}">Cloud & VPS</a></li>
                                    <li> <a class="dropdown-item" href="{{ url('tech-solutions/artificial-intelligence') }}">Artificial Intelligence</a></li>
                                    <li> <a class="dropdown-item" href="{{ url('tech-solutions/machine-learning') }}">Machine Learning</a></li>
                                </ul>
                            </li>

                            <!-- Additional dropdowns for Brand, Business, Event, Marketing, Ads, Media Solutions -->
                            <!-- Repeat similar structure for other categories as shown above -->

                            <!-- Example for Brand Solutions -->
                            <li class="dropdown dropend">
                                <a class="nav-link dropdown-link dropdown-toggle" data-bs-toggle="dropdown" href="{{ url('solutions/brand-solutions') }}">Brand Solutions</a>
                                <ul class="dropdown-menu" data-bs-popper="none">
                                    <li> <a class="dropdown-item" href="{{ url('brand-solutions/personal-branding') }}">Personal Branding</a></li>
                                    <!-- Add more items similarly -->
                                </ul>
                            </li>

                        </ul>
                    </li>

                    <!-- Nav item for Know Us -->
                    <li class="nav-item dropdown dropdown-fullwidth">
                        <a class="nav-link dropdown-toggle" href="#" id="megaMenu" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Know Us</a>
                        <div class="dropdown-menu py-0" aria-labelledby="megaMenu">

                            <!-- Dropdown columns for Nano Geni Solutions, Company, Our Platforms, Our Integrations -->
                            <!-- Example for Nano Geni Solutions -->
                            <div class="row p-2 p-sm-4 g-4">
                                <div class="col-md-6 col-xl-2">
                                    <ul class="list-unstyled">
                                        <li class="dropdown-header h6 mb-2">Nano Geni Solutions</li>
                                        <!-- Add items similarly -->
                                        <li> <a class="dropdown-item" href="#">Video Production</a> </li>
                                        <!-- Add more items as needed -->
                                    </ul>
                                </div>

                                <!-- Example for Company section -->
                                <div class="col-md-6 col-xl-3">
                                    <span class="dropdown-header h6 mb-2">Company</span>
                                    <!-- Dropdown items for company details -->
                                    @foreach (['About us' => 'company/about', 'Leadership' => 'company/team', 'Internship' => 'company/internship'] as $title => $link)
                                        <div class="dropdown-item d-flex bg-light-hover position-relative text-wrap py-3">
                                            <div class="icon-md border bg-body rounded flex-shrink-0"><i class='bi bi-boxes color-primary fs-6'></i></div>
                                            <div class='ms-2'>
                                                <a class='stretched-link heading-color fw-bold mb-0' href='{{ url($link) }}'>{{ $title }}</a>
                                                <!-- Add description if needed -->
                                            </div>
                                        </div>
                                    @endforeach
                                </div>

                                <!-- Add other sections similarly -->

                            </div>

                        </div>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
    <!-- Logo Nav END -->
</header>
<!-- Header END -->