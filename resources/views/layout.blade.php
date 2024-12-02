<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard | WeGeni </title>
    <meta name="csrf-token" content="IZO8YC5P8ph77MtQmelBnBNG1Ej5NQ2xLtz7azQn">

    <link href="{{ asset('assets/images/favicon.png') }}" rel="icon shortcut">
    <meta property="og:image" content="{{ asset('assets/images/favicon.png') }}">

    <meta name="description" content="Copyright 2024 © Your App. Version 1.6.2">
    <meta property="og:description" content="Copyright 2024 © Your App. Version 1.6.2">



    <style>
        :root {
            --primary-font: "Inter";
            --primary-color: #206bc4;
            --primary-color-rgb: 32, 107, 196;
            --secondary-color: #6c7a91;
            --secondary-color-rgb: 108, 122, 145;
            --heading-color: inherit;
            --text-color: #182433;
            --text-color-rgb: 24, 36, 51;
            --link-color: #206bc4;
            --link-color-rgb: 32, 107, 196;
            --link-hover-color: #206bc4;
            --link-hover-color-rgb: 32, 107, 196;
        }

        /* Active menu item */
.nav-link.active {
    background-color: #0056b3;  /* Change to your preferred background color */
    color: white;               /* Change the text color when active */
}



/* Show menu content */
.nav-link.show {
    background-color: #0056b3;  /* Light background when showing dropdown content */
}

/* Hover effect for active links */
.nav-link:hover {
    background-color: #0056b3;  /* Darker blue on hover */
                  /* Text color on hover */
}

.nav-link-icon {
    transition: transform 0.3s ease; /* Smooth transition for icon rotation */
}

/* Optional: if you want the icon to rotate when the item is expanded */
.nav-link.show .nav-link-icon {
    transform: rotate(90deg); /* Rotate icon when 'show' class is active */
}

    </style>

    <link media="all" type="text/css" rel="stylesheet"
        href="{{ asset('vendor/core/core/base/libraries/font-awesome/css/fontawesome.min.css') }}">
    <link media="all" type="text/css" rel="stylesheet"
        href="{{ asset('vendor/core/core/base/libraries/select2/css/select2.min.css') }}">
    <link media="all" type="text/css" rel="stylesheet"
        href="{{ asset('vendor/core/core/base/css/libraries/select2.css') }}">
    <link media="all" type="text/css" rel="stylesheet"
        href="{{ asset('vendor/core/core/base/libraries/toastr/toastr.min.css') }}">
    <link media="all" type="text/css" rel="stylesheet"
        href="{{ asset('vendor/core/core/base/libraries/mcustom-scrollbar/jquery.mCustomScrollbar.css') }}">
    <link media="all" type="text/css" rel="stylesheet"
        href="{{ asset('vendor/core/core/base/libraries/flatpickr/flatpickr.min.css') }}">
    <link media="all" type="text/css" rel="stylesheet"
        href="{{ asset('vendor/core/core/base/libraries/spectrum/spectrum.css') }}">
    <link media="all" type="text/css" rel="stylesheet"
        href="{{ asset('vendor/core/core/base/libraries/fancybox/jquery.fancybox.min.css') }}">
    <link media="all" type="text/css" rel="stylesheet" href="{{ asset('vendor/core/core/base/css/core.css') }}">
    <link media="all" type="text/css" rel="stylesheet"
        href="{{ asset('vendor/core/plugins/language/css/language.css') }}">
    <link media="all" type="text/css" rel="stylesheet"
        href="{{ asset('vendor/core/packages/get-started/css/get-started.css') }}">

    <script src="{{ asset('vendor/core/core/base/libraries/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/core/core/base/js/app.js') }}"></script>
    <script src="{{ asset('vendor/core/core/base/libraries/vue.global.min.js') }}"></script>
    <script src="{{ asset('vendor/core/core/base/js/vue-app.js') }}"></script>
</head>

<body class="page-sidebar-closed-hide-logo page-content-white page-container-bg-solid " style="">
    <div id="app">
        <header class="navbar navbar-expand-md d-none d-lg-flex d-print-none" data-bs-theme="dark">
            <div class="container-fluid">
                <button class="navbar-toggler d-none d-lg-block me-2 ms-n1" type="button"
                    data-bb-toggle="navbar-minimal" data-bb-target="#sidebar-menu-main" aria-controls="navbar-menu"
                    aria-expanded="false" aria-label="Toggle navigation" data-url="#" data-method="PATCH">
                    <svg class="icon  svg-icon-ti-ti-menu-2" xmlns="http://www.w3.org/2000/svg" width="24"
                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M4 6l16 0" />
                        <path d="M4 12l16 0" />
                        <path d="M4 18l16 0" />
                    </svg> </button>

                <h1 class="navbar-brand navbar-brand-autodark me-4">
                    <a href="#">
                        <img src="{{ asset('assets/images/logo-light.svg') }}" style="max-height: 32px; height: auto;"
                            alt="Your App" class="navbar-brand-image">
                    </a>
                </h1>

                <div class="flex-row navbar-nav order-md-last">
                    <div class="d-flex align-items-center me-3">
                        <div class="">
                            <label class="form-label sr-only" for="global-search-input">
                                Search


                            </label>

                            <div class="input-group input-group-flat">


                                <input class="form-control" type="text" name="keyword" id="global-search-input"
                                    placeholder="Search" tabindex="0" data-bb-toggle="gs-navbar-input"
                                    autocomplete="off" />


                                <div class="input-group-text">
                                    <kbd>ctrl/cmd + k</kbd>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="d-flex align-items-center me-3">
                        <a class="btn" type="button" href="{{ route('welcome') }}" target="_blank">
                            <svg class="icon icon-left svg-icon-ti-ti-world" xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0" />
                                <path d="M3.6 9h16.8" />
                                <path d="M3.6 15h16.8" />
                                <path d="M11.5 3a17 17 0 0 0 0 18" />
                                <path d="M12.5 3a17 17 0 0 1 0 18" />
                            </svg>
                            View website

                        </a>
                    </div>

                    <div class="d-none d-md-flex me-2">
                        <a href="#" class="px-0 nav-link hide-theme-dark" title="Enable dark mode"
                            data-bs-toggle="tooltip" data-bs-placement="bottom">
                            <svg class="icon  svg-icon-ti-ti-moon" xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path
                                    d="M12 3c.132 0 .263 0 .393 0a7.5 7.5 0 0 0 7.92 12.446a9 9 0 1 1 -8.313 -12.454z" />
                            </svg> </a>

                        <div class="nav-item d-none d-md-flex me-2">
                            <a class="px-0 nav-link" data-bs-toggle="offcanvas" href="#notification-sidebar"
                                role="button" aria-controls="notification-sidebar">
                                <svg class="icon  svg-icon-ti-ti-bell" xmlns="http://www.w3.org/2000/svg"
                                    width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path
                                        d="M10 5a2 2 0 1 1 4 0a7 7 0 0 1 4 6v3a4 4 0 0 0 2 3h-16a4 4 0 0 0 2 -3v-3a7 7 0 0 1 4 -6" />
                                    <path d="M9 17v1a3 3 0 0 0 6 0v-1" />
                                </svg> <span class="badge bg-blue text-blue-fg badge-pill notification-count">0</span>
                            </a>
                        </div>

                    </div>

                    <div class="dropdown nav-item">
                        <a href="#" class="p-0 nav-link d-flex lh-1 text-reset" data-bs-toggle="dropdown"
                            aria-label="Open user menu">
                            <span class="crop-image-original avatar avatar-sm"
                                style="background-image: url(storage/teams/2-3.png)"></span>
                            <div class="d-none d-xl-block ps-2">
                                <div>Emory Bailey</div>
                                <div class="mt-1 small text-muted">selena12@roob.com</div>
                            </div>
                        </a>

                        <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-end">
                            <a class="dropdown-item" href="#">
                                <svg class="icon dropdown-item-icon svg-icon-ti-ti-user"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" />
                                    <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                                </svg>
                                Profile

                            </a>

                            <a class="dropdown-item" href="#">
                                <svg class="icon dropdown-item-icon svg-icon-ti-ti-logout"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path
                                        d="M14 8v-2a2 2 0 0 0 -2 -2h-7a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h7a2 2 0 0 0 2 -2v-2" />
                                    <path d="M9 12h12l-3 -3" />
                                    <path d="M18 15l3 -3" />
                                </svg>
                                Logout

                            </a>
                        </div>
                    </div>
                </div>

                <div class="collapse navbar-collapse" id="navbar-menu"></div>
            </div>
        </header>
        <div class="d-block d-lg-flex">
            <aside class="navbar navbar-vertical navbar-expand-lg flex-auto" data-bs-theme="dark" id="sidebar-menu-main">
                <div class="container-xl">
                     
                  <!-- Toggle Button for Mobile -->
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#sidebar-menu"
                    aria-controls="sidebar-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
              
                  <div class="collapse navbar-collapse" id="sidebar-menu">
                    <ul class="navbar-nav">
                      <li class="nav-item">
                        <a class="nav-link nav-priority--9999 {{ request()->routeIs('dashboard') ? 'active' : '' }}" href="{{route('dashboard')}}" id="cms-core-dashboard" title="Dashboard">
                          <span class="nav-link-icon d-md-none d-lg-inline-block" title="Dashboard">
                            <svg class="icon svg-icon-ti-ti-home" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                              viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                              stroke-linejoin="round">
                              <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                              <path d="M5 12l-2 0l9 -9l9 9l-2 0" />
                              <path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" />
                              <path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6" />
                            </svg>
                          </span>
                          <span class="nav-link-title text-truncate">Dashboard</span>
                        </a>
                      </li>
                      <li class="nav-item ">
                        <a class="nav-link nav-priority-2 {{ request()->routeIs('menu.index') ? 'active show' : '' }}" href="{{route('menu.index')}}" id="cms-core-page" title="Pages">
                          <span class="nav-link-icon d-md-none d-lg-inline-block" title="Pages">
                            <svg class="icon svg-icon-ti-ti-notebook" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                              viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                              stroke-linejoin="round">
                              <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                              <path d="M6 4h11a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-11a1 1 0 0 1 -1 -1v-14a1 1 0 0 1 1 -1m3 0v18" />
                              <path d="M13 8l2 0" />
                              <path d="M13 12l2 0" />
                            </svg>
                          </span>
                          <span class="nav-link-title text-truncate">Solutions</span>
                        </a>
                      </li>
                            <li class="nav-item dropdown ">
                                <a class="nav-link dropdown-toggle nav-priority-3" href="#cms-plugins-blog"
                                    id="cms-plugins-blog" data-bs-toggle="dropdown" data-bs-auto-close="false"
                                    role="button" aria-expanded="false" title="Blog">
                                    <span class="nav-link-icon d-md-none d-lg-inline-block" title="Blog">
                                        <svg class="icon  svg-icon-ti-ti-article" xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path
                                                d="M3 4m0 2a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2z" />
                                            <path d="M7 8h10" />
                                            <path d="M7 12h10" />
                                            <path d="M7 16h10" />
                                        </svg> </span>
        
                                    <span class="nav-link-title text-truncate">
                                        Blog
        
                                    </span>
                                </a>
        
        
                                <div class="dropdown-menu animate slideIn dropdown-menu-start">
        
        
                                    <a class="dropdown-item nav-priority-10" href="#"
                                        id="cms-plugins-blog-post" title="Posts">
                                        <span class="nav-link-icon d-md-none d-lg-inline-block" title="Posts">
                                            <svg class="icon  svg-icon-ti-ti-file-text"
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                <path d="M14 3v4a1 1 0 0 0 1 1h4" />
                                                <path
                                                    d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z" />
                                                <path d="M9 9l1 0" />
                                                <path d="M9 13l6 0" />
                                                <path d="M9 17l6 0" />
                                            </svg> </span>
        
                                        <span class="nav-link-title text-truncate">
                                            Posts
        
                                        </span>
                                    </a>
        
        
        
                                    <a class="dropdown-item nav-priority-20" href="#"
                                        id="cms-plugins-blog-categories" title="Categories">
                                        <span class="nav-link-icon d-md-none d-lg-inline-block" title="Categories">
                                            <svg class="icon  svg-icon-ti-ti-folder"
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                <path
                                                    d="M5 4h4l3 3h7a2 2 0 0 1 2 2v8a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-11a2 2 0 0 1 2 -2" />
                                            </svg> </span>
        
                                        <span class="nav-link-title text-truncate">
                                            Categories
        
                                        </span>
                                    </a>
        
        
        
                                    <a class="dropdown-item nav-priority-30" href="#"
                                        id="cms-plugins-blog-tags" title="Tags">
                                        <span class="nav-link-icon d-md-none d-lg-inline-block" title="Tags">
                                            <svg class="icon  svg-icon-ti-ti-tag" xmlns="http://www.w3.org/2000/svg"
                                                width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                <path d="M7.5 7.5m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                                                <path
                                                    d="M3 6v5.172a2 2 0 0 0 .586 1.414l7.71 7.71a2.41 2.41 0 0 0 3.408 0l5.592 -5.592a2.41 2.41 0 0 0 0 -3.408l-7.71 -7.71a2 2 0 0 0 -1.414 -.586h-5.172a3 3 0 0 0 -3 3z" />
                                            </svg> </span>
        
                                        <span class="nav-link-title text-truncate">
                                            Tags
        
                                        </span>
                                    </a>
        
                                </div>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link nav-priority-5" href="#" id="cms-plugins-career"
                                    title="Careers">
                                    <span class="nav-link-icon d-md-none d-lg-inline-block" title="Careers">
                                        <svg class="icon  svg-icon-ti-ti-news" xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path
                                                d="M16 6h3a1 1 0 0 1 1 1v11a2 2 0 0 1 -4 0v-13a1 1 0 0 0 -1 -1h-10a1 1 0 0 0 -1 1v12a3 3 0 0 0 3 3h11" />
                                            <path d="M8 8l4 0" />
                                            <path d="M8 12l4 0" />
                                            <path d="M8 16l4 0" />
                                        </svg> </span>
        
                                    <span class="nav-link-title text-truncate">
                                        Careers
        
                                    </span>
                                </a>
        
        
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link nav-priority-5" href="#" id="cms-plugins-gallery"
                                    title="Galleries">
                                    <span class="nav-link-icon d-md-none d-lg-inline-block" title="Galleries">
                                        <svg class="icon  svg-icon-ti-ti-camera" xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path
                                                d="M5 7h1a2 2 0 0 0 2 -2a1 1 0 0 1 1 -1h6a1 1 0 0 1 1 1a2 2 0 0 0 2 2h1a2 2 0 0 1 2 2v9a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-9a2 2 0 0 1 2 -2" />
                                            <path d="M9 13a3 3 0 1 0 6 0a3 3 0 0 0 -6 0" />
                                        </svg> </span>
        
                                    <span class="nav-link-title text-truncate">
                                        Galleries
        
                                    </span>
                                </a>
        
        
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link nav-priority-5" href="#" id="cms-plugins-team"
                                    title="Teams">
                                    <span class="nav-link-icon d-md-none d-lg-inline-block" title="Teams">
                                        <svg class="icon  svg-icon-ti-ti-users" xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path d="M9 7m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" />
                                            <path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                                            <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                                            <path d="M21 21v-2a4 4 0 0 0 -3 -3.85" />
                                        </svg> </span>
        
                                    <span class="nav-link-title text-truncate">
                                        Teams
        
                                    </span>
                                </a>
        
        
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link nav-priority-5" href="#" id="cms-plugins-testimonial"
                                    title="Testimonials">
                                    <span class="nav-link-icon d-md-none d-lg-inline-block" title="Testimonials">
                                        <svg class="icon  svg-icon-ti-ti-user-star" xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" />
                                            <path d="M6 21v-2a4 4 0 0 1 4 -4h.5" />
                                            <path
                                                d="M17.8 20.817l-2.172 1.138a.392 .392 0 0 1 -.568 -.41l.415 -2.411l-1.757 -1.707a.389 .389 0 0 1 .217 -.665l2.428 -.352l1.086 -2.193a.392 .392 0 0 1 .702 0l1.086 2.193l2.428 .352a.39 .39 0 0 1 .217 .665l-1.757 1.707l.414 2.41a.39 .39 0 0 1 -.567 .411l-2.172 -1.138z" />
                                        </svg> </span>
        
                                    <span class="nav-link-title text-truncate">
                                        Testimonials
        
                                    </span>
                                </a>
        
        
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link nav-priority-10" href="#" id="cms-plugins-announcement"
                                    title="Announcements">
                                    <span class="nav-link-icon d-md-none d-lg-inline-block" title="Announcements">
                                        <svg class="icon  svg-icon-ti-ti-speakerphone"
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path d="M18 8a3 3 0 0 1 0 6" />
                                            <path d="M10 8v11a1 1 0 0 1 -1 1h-1a1 1 0 0 1 -1 -1v-5" />
                                            <path
                                                d="M12 8h0l4.524 -3.77a.9 .9 0 0 1 1.476 .692v12.156a.9 .9 0 0 1 -1.476 .692l-4.524 -3.77h-8a1 1 0 0 1 -1 -1v-4a1 1 0 0 1 1 -1h8" />
                                        </svg> </span>
        
                                    <span class="nav-link-title text-truncate">
                                        Announcements
        
                                    </span>
                                </a>
        
        
                            </li>
                            <li class="nav-item dropdown ">
                                <a class="nav-link dropdown-toggle nav-priority-10" href="#cms-core-portfolio"
                                    id="cms-core-portfolio" data-bs-toggle="dropdown" data-bs-auto-close="false"
                                    role="button" aria-expanded="false" title="Portfolio">
                                    <span class="nav-link-icon d-md-none d-lg-inline-block" title="Portfolio">
                                        <svg class="icon  svg-icon-ti-ti-briefcase" xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path
                                                d="M3 7m0 2a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v9a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2z" />
                                            <path d="M8 7v-2a2 2 0 0 1 2 -2h4a2 2 0 0 1 2 2v2" />
                                            <path d="M12 12l0 .01" />
                                            <path d="M3 13a20 20 0 0 0 18 0" />
                                        </svg> </span>
        
                                    <span class="nav-link-title text-truncate">
                                        Portfolio
        
                                    </span>
                                </a>
        
        
                                <div class="dropdown-menu animate slideIn dropdown-menu-start">
        
        
                                    <a class="dropdown-item nav-priority-1" href="#"
                                        id="cms-core-portfolio-projects" title="Projects">
                                        <span class="nav-link-icon d-md-none d-lg-inline-block" title="Projects">
                                            <svg class="icon  svg-icon-ti-ti-point" xmlns="http://www.w3.org/2000/svg"
                                                width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                <path d="M12 12m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" />
                                            </svg> </span>
        
                                        <span class="nav-link-title text-truncate">
                                            Projects
        
                                        </span>
                                    </a>
        
        
        
                                    <a class="dropdown-item nav-priority-2" href="#"
                                        id="cms-core-portfolio-service-categories" title="Service Categories">
                                        <span class="nav-link-icon d-md-none d-lg-inline-block"
                                            title="Service Categories">
                                            <svg class="icon  svg-icon-ti-ti-point" xmlns="http://www.w3.org/2000/svg"
                                                width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                <path d="M12 12m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" />
                                            </svg> </span>
        
                                        <span class="nav-link-title text-truncate">
                                            Service Categories
        
                                        </span>
                                    </a>
        
        
        
                                    <a class="dropdown-item nav-priority-3" href="#"
                                        id="cms-core-portfolio-services" title="Services">
                                        <span class="nav-link-icon d-md-none d-lg-inline-block" title="Services">
                                            <svg class="icon  svg-icon-ti-ti-point" xmlns="http://www.w3.org/2000/svg"
                                                width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                <path d="M12 12m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" />
                                            </svg> </span>
        
                                        <span class="nav-link-title text-truncate">
                                            Services
        
                                        </span>
                                    </a>
        
        
        
                                    <a class="dropdown-item nav-priority-4" href="#"
                                        id="cms-core-portfolio-packages" title="Packages">
                                        <span class="nav-link-icon d-md-none d-lg-inline-block" title="Packages">
                                            <svg class="icon  svg-icon-ti-ti-point" xmlns="http://www.w3.org/2000/svg"
                                                width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                <path d="M12 12m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" />
                                            </svg> </span>
        
                                        <span class="nav-link-title text-truncate">
                                            Packages
        
                                        </span>
                                    </a>
        
        
        
                                    <a class="dropdown-item nav-priority-5" href="#"
                                        id="cms-core-portfolio-quotation-requests" title="Quotation Requests">
                                        <span class="nav-link-icon d-md-none d-lg-inline-block"
                                            title="Quotation Requests">
                                            <svg class="icon  svg-icon-ti-ti-point" xmlns="http://www.w3.org/2000/svg"
                                                width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                <path d="M12 12m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" />
                                            </svg> </span>
        
                                        <span class="nav-link-title text-truncate">
                                            Quotation Requests
        
                                        </span>
                                    </a>
        
        
        
                                    <a class="dropdown-item nav-priority-5" href="#"
                                        id="cms-core-portfolio-custom-fields" title="Custom Fields">
                                        <span class="nav-link-icon d-md-none d-lg-inline-block" title="Custom Fields">
                                            <svg class="icon  svg-icon-ti-ti-point" xmlns="http://www.w3.org/2000/svg"
                                                width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                <path d="M12 12m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" />
                                            </svg> </span>
        
                                        <span class="nav-link-title text-truncate">
                                            Custom Fields
        
                                        </span>
                                    </a>
        
                                </div>
                            </li>
                            <li class="nav-item dropdown ">
                                <a class="nav-link dropdown-toggle nav-priority-120" href="#cms-plugins-contact"
                                    id="cms-plugins-contact" data-bs-toggle="dropdown" data-bs-auto-close="false"
                                    role="button" aria-expanded="false" title="Contact">
                                    <span class="nav-link-icon d-md-none d-lg-inline-block" title="Contact">
                                        <svg class="icon  svg-icon-ti-ti-mail" xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path
                                                d="M3 7a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-10z" />
                                            <path d="M3 7l9 6l9 -6" />
                                        </svg> </span>
        
                                    <span class="nav-link-title text-truncate">
                                        Contact
                                        <span
                                            class="badge badge-sm bg-primary text-primary-fg badge-pill menu-item-count unread-contacts"
                                            data-url="#" style="display: none"></span>
        
                                    </span>
                                </a>
        
        
                                <div class="dropdown-menu animate slideIn dropdown-menu-start">
        
        
                                    <a class="dropdown-item nav-priority-120" href="#"
                                        id="cms-plugins-contact-list" title="Contacts">
                                        <span class="nav-link-icon d-md-none d-lg-inline-block" title="Contacts">
                                            <svg class="icon  svg-icon-ti-ti-cube" xmlns="http://www.w3.org/2000/svg"
                                                width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                <path
                                                    d="M21 16.008v-8.018a1.98 1.98 0 0 0 -1 -1.717l-7 -4.008a2.016 2.016 0 0 0 -2 0l-7 4.008c-.619 .355 -1 1.01 -1 1.718v8.018c0 .709 .381 1.363 1 1.717l7 4.008a2.016 2.016 0 0 0 2 0l7 -4.008c.619 -.355 1 -1.01 1 -1.718z" />
                                                <path d="M12 22v-10" />
                                                <path d="M12 12l8.73 -5.04" />
                                                <path d="M3.27 6.96l8.73 5.04" />
                                            </svg> </span>
        
                                        <span class="nav-link-title text-truncate">
                                            Contacts
        
                                        </span>
                                    </a>
        
        
        
                                    <a class="dropdown-item nav-priority-130" href="#"
                                        id="cms-plugins-contact-custom-fields" title="Custom Fields">
                                        <span class="nav-link-icon d-md-none d-lg-inline-block" title="Custom Fields">
                                            <svg class="icon  svg-icon-ti-ti-cube-plus"
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                <path
                                                    d="M21 12.5v-4.509a1.98 1.98 0 0 0 -1 -1.717l-7 -4.008a2.016 2.016 0 0 0 -2 0l-7 4.007c-.619 .355 -1 1.01 -1 1.718v8.018c0 .709 .381 1.363 1 1.717l7 4.008a2.016 2.016 0 0 0 2 0" />
                                                <path d="M12 22v-10" />
                                                <path d="M12 12l8.73 -5.04" />
                                                <path d="M3.27 6.96l8.73 5.04" />
                                                <path d="M16 19h6" />
                                                <path d="M19 16v6" />
                                            </svg> </span>
        
                                        <span class="nav-link-title text-truncate">
                                            Custom Fields
        
                                        </span>
                                    </a>
        
                                </div>
                            </li>
                            <li class="nav-item dropdown ">
                                <a class="nav-link dropdown-toggle nav-priority-420" href="#cms-plugins-faq"
                                    id="cms-plugins-faq" data-bs-toggle="dropdown" data-bs-auto-close="false"
                                    role="button" aria-expanded="false" title="FAQs">
                                    <span class="nav-link-icon d-md-none d-lg-inline-block" title="FAQs">
                                        <svg class="icon  svg-icon-ti-ti-help-octagon"
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path
                                                d="M12.802 2.165l5.575 2.389c.48 .206 .863 .589 1.07 1.07l2.388 5.574c.22 .512 .22 1.092 0 1.604l-2.389 5.575c-.206 .48 -.589 .863 -1.07 1.07l-5.574 2.388c-.512 .22 -1.092 .22 -1.604 0l-5.575 -2.389a2.036 2.036 0 0 1 -1.07 -1.07l-2.388 -5.574a2.036 2.036 0 0 1 0 -1.604l2.389 -5.575c.206 -.48 .589 -.863 1.07 -1.07l5.574 -2.388a2.036 2.036 0 0 1 1.604 0z" />
                                            <path d="M12 16v.01" />
                                            <path d="M12 13a2 2 0 0 0 .914 -3.782a1.98 1.98 0 0 0 -2.414 .483" />
                                        </svg> </span>
        
                                    <span class="nav-link-title text-truncate">
                                        FAQs
        
                                    </span>
                                </a>
        
        
                                <div class="dropdown-menu animate slideIn dropdown-menu-start">
        
        
                                    <a class="dropdown-item nav-priority-0" href="#" id="cms-plugins-faq-list"
                                        title="FAQs">
                                        <span class="nav-link-icon d-md-none d-lg-inline-block" title="FAQs">
                                            <svg class="icon  svg-icon-ti-ti-list-check"
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                <path d="M3.5 5.5l1.5 1.5l2.5 -2.5" />
                                                <path d="M3.5 11.5l1.5 1.5l2.5 -2.5" />
                                                <path d="M3.5 17.5l1.5 1.5l2.5 -2.5" />
                                                <path d="M11 6l9 0" />
                                                <path d="M11 12l9 0" />
                                                <path d="M11 18l9 0" />
                                            </svg> </span>
        
                                        <span class="nav-link-title text-truncate">
                                            FAQs
        
                                        </span>
                                    </a>
        
        
        
                                    <a class="dropdown-item nav-priority-10" href="#"
                                        id="cms-plugins-faq-category" title="Categories">
                                        <span class="nav-link-icon d-md-none d-lg-inline-block" title="Categories">
                                            <svg class="icon  svg-icon-ti-ti-folder"
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                <path
                                                    d="M5 4h4l3 3h7a2 2 0 0 1 2 2v8a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-11a2 2 0 0 1 2 -2" />
                                            </svg> </span>
        
                                        <span class="nav-link-title text-truncate">
                                            Categories
        
                                        </span>
                                    </a>
        
                                </div>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link nav-priority-430" href="#" id="cms-plugins-newsletter"
                                    title="Newsletters">
                                    <span class="nav-link-icon d-md-none d-lg-inline-block" title="Newsletters">
                                        <svg class="icon  svg-icon-ti-ti-mail" xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path
                                                d="M3 7a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-10z" />
                                            <path d="M3 7l9 6l9 -6" />
                                        </svg> </span>
        
                                    <span class="nav-link-title text-truncate">
                                        Newsletters
        
                                    </span>
                                </a>
        
        
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link nav-priority-999" href="#" id="cms-core-media"
                                    title="Media">
                                    <span class="nav-link-icon d-md-none d-lg-inline-block" title="Media">
                                        <svg class="icon  svg-icon-ti-ti-folder" xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path
                                                d="M5 4h4l3 3h7a2 2 0 0 1 2 2v8a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-11a2 2 0 0 1 2 -2" />
                                        </svg> </span>
        
                                    <span class="nav-link-title text-truncate">
                                        Media
        
                                    </span>
                                </a>
        
        
                            </li>
                            <li class="nav-item dropdown ">
                                <a class="nav-link dropdown-toggle nav-priority-2000" href="#cms-core-appearance"
                                    id="cms-core-appearance" data-bs-toggle="dropdown" data-bs-auto-close="false"
                                    role="button" aria-expanded="false" title="Appearance">
                                    <span class="nav-link-icon d-md-none d-lg-inline-block" title="Appearance">
                                        <svg class="icon  svg-icon-ti-ti-brush" xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path d="M3 21v-4a4 4 0 1 1 4 4h-4" />
                                            <path d="M21 3a16 16 0 0 0 -12.8 10.2" />
                                            <path d="M21 3a16 16 0 0 1 -10.2 12.8" />
                                            <path d="M10.6 9a9 9 0 0 1 4.4 4.4" />
                                        </svg> </span>
        
                                    <span class="nav-link-title text-truncate">
                                        Appearance
        
                                    </span>
                                </a>
        
        
                                <div class="dropdown-menu animate slideIn dropdown-menu-start">
        
        
                                    <a class="dropdown-item nav-priority-1" href="#" id="cms-core-theme"
                                        title="Themes">
                                        <span class="nav-link-icon d-md-none d-lg-inline-block" title="Themes">
                                            <svg class="icon  svg-icon-ti-ti-palette"
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                <path
                                                    d="M12 21a9 9 0 0 1 0 -18c4.97 0 9 3.582 9 8c0 1.06 -.474 2.078 -1.318 2.828c-.844 .75 -1.989 1.172 -3.182 1.172h-2.5a2 2 0 0 0 -1 3.75a1.3 1.3 0 0 1 -1 2.25" />
                                                <path d="M8.5 10.5m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                                                <path d="M12.5 7.5m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                                                <path d="M16.5 10.5m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                                            </svg> </span>
        
                                        <span class="nav-link-title text-truncate">
                                            Themes
        
                                        </span>
                                    </a>
        
        
        
                                    <a class="dropdown-item nav-priority-2" href="#" id="cms-core-menu"
                                        title="Menus">
                                        <span class="nav-link-icon d-md-none d-lg-inline-block" title="Menus">
                                            <svg class="icon  svg-icon-ti-ti-tournament"
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                <path d="M4 4m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                                                <path d="M20 10m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                                                <path d="M4 12m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                                                <path d="M4 20m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                                                <path d="M6 12h3a1 1 0 0 1 1 1v6a1 1 0 0 1 -1 1h-3" />
                                                <path d="M6 4h7a1 1 0 0 1 1 1v10a1 1 0 0 1 -1 1h-2" />
                                                <path d="M14 10h4" />
                                            </svg> </span>
        
                                        <span class="nav-link-title text-truncate">
                                            Menus
        
                                        </span>
                                    </a>
        
        
        
                                    <a class="dropdown-item nav-priority-3" href="#" id="cms-core-widget"
                                        title="Widgets">
                                        <span class="nav-link-icon d-md-none d-lg-inline-block" title="Widgets">
                                            <svg class="icon  svg-icon-ti-ti-layout"
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                <path
                                                    d="M4 4m0 2a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v1a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2z" />
                                                <path
                                                    d="M4 13m0 2a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v3a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2z" />
                                                <path
                                                    d="M14 4m0 2a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2z" />
                                            </svg> </span>
        
                                        <span class="nav-link-title text-truncate">
                                            Widgets
        
                                        </span>
                                    </a>
        
        
        
                                    <a class="dropdown-item nav-priority-4" href="#" id="cms-core-theme-option"
                                        title="Theme Options">
                                        <span class="nav-link-icon d-md-none d-lg-inline-block" title="Theme Options">
                                            <svg class="icon  svg-icon-ti-ti-list-tree"
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                <path d="M9 6h11" />
                                                <path d="M12 12h8" />
                                                <path d="M15 18h5" />
                                                <path d="M5 6v.01" />
                                                <path d="M8 12v.01" />
                                                <path d="M11 18v.01" />
                                            </svg> </span>
        
                                        <span class="nav-link-title text-truncate">
                                            Theme Options
        
                                        </span>
                                    </a>
        
        
        
                                    <a class="dropdown-item nav-priority-5" href="#"
                                        id="cms-core-appearance-custom-css" title="Custom CSS">
                                        <span class="nav-link-icon d-md-none d-lg-inline-block" title="Custom CSS">
                                            <svg class="icon  svg-icon-ti-ti-file-type-css"
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                <path d="M14 3v4a1 1 0 0 0 1 1h4" />
                                                <path d="M5 12v-7a2 2 0 0 1 2 -2h7l5 5v4" />
                                                <path d="M8 16.5a1.5 1.5 0 0 0 -3 0v3a1.5 1.5 0 0 0 3 0" />
                                                <path
                                                    d="M11 20.25c0 .414 .336 .75 .75 .75h1.25a1 1 0 0 0 1 -1v-1a1 1 0 0 0 -1 -1h-1a1 1 0 0 1 -1 -1v-1a1 1 0 0 1 1 -1h1.25a.75 .75 0 0 1 .75 .75" />
                                                <path
                                                    d="M17 20.25c0 .414 .336 .75 .75 .75h1.25a1 1 0 0 0 1 -1v-1a1 1 0 0 0 -1 -1h-1a1 1 0 0 1 -1 -1v-1a1 1 0 0 1 1 -1h1.25a.75 .75 0 0 1 .75 .75" />
                                            </svg> </span>
        
                                        <span class="nav-link-title text-truncate">
                                            Custom CSS
        
                                        </span>
                                    </a>
        
        
        
                                    <a class="dropdown-item nav-priority-6" href="#"
                                        id="cms-core-appearance-custom-js" title="Custom JS">
                                        <span class="nav-link-icon d-md-none d-lg-inline-block" title="Custom JS">
                                            <svg class="icon  svg-icon-ti-ti-file-type-js"
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                <path d="M14 3v4a1 1 0 0 0 1 1h4" />
                                                <path d="M3 15h3v4.5a1.5 1.5 0 0 1 -3 0" />
                                                <path
                                                    d="M9 20.25c0 .414 .336 .75 .75 .75h1.25a1 1 0 0 0 1 -1v-1a1 1 0 0 0 -1 -1h-1a1 1 0 0 1 -1 -1v-1a1 1 0 0 1 1 -1h1.25a.75 .75 0 0 1 .75 .75" />
                                                <path d="M5 12v-7a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2h-1" />
                                            </svg> </span>
        
                                        <span class="nav-link-title text-truncate">
                                            Custom JS
        
                                        </span>
                                    </a>
        
        
        
                                    <a class="dropdown-item nav-priority-6" href="#"
                                        id="cms-core-appearance-custom-html" title="Custom HTML">
                                        <span class="nav-link-icon d-md-none d-lg-inline-block" title="Custom HTML">
                                            <svg class="icon  svg-icon-ti-ti-file-type-html"
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                <path d="M14 3v4a1 1 0 0 0 1 1h4" />
                                                <path d="M5 12v-7a2 2 0 0 1 2 -2h7l5 5v4" />
                                                <path d="M2 21v-6" />
                                                <path d="M5 15v6" />
                                                <path d="M2 18h3" />
                                                <path d="M20 15v6h2" />
                                                <path d="M13 21v-6l2 3l2 -3v6" />
                                                <path d="M7.5 15h3" />
                                                <path d="M9 15v6" />
                                            </svg> </span>
        
                                        <span class="nav-link-title text-truncate">
                                            Custom HTML
        
                                        </span>
                                    </a>
        
        
        
                                    <a class="dropdown-item nav-priority-6" href="#"
                                        id="cms-core-appearance-robots-txt" title="Robots.txt Editor">
                                        <span class="nav-link-icon d-md-none d-lg-inline-block"
                                            title="Robots.txt Editor">
                                            <svg class="icon  svg-icon-ti-ti-file-type-txt"
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                <path d="M14 3v4a1 1 0 0 0 1 1h4" />
                                                <path d="M14 3v4a1 1 0 0 0 1 1h4" />
                                                <path d="M16.5 15h3" />
                                                <path d="M5 12v-7a2 2 0 0 1 2 -2h7l5 5v4" />
                                                <path d="M4.5 15h3" />
                                                <path d="M6 15v6" />
                                                <path d="M18 15v6" />
                                                <path d="M10 15l4 6" />
                                                <path d="M10 21l4 -6" />
                                            </svg> </span>
        
                                        <span class="nav-link-title text-truncate">
                                            Robots.txt Editor
        
                                        </span>
                                    </a>
        
                                </div>
                            </li>
                            <li class="nav-item dropdown ">
                                <a class="nav-link dropdown-toggle nav-priority-3000" href="#cms-core-plugins"
                                    id="cms-core-plugins" data-bs-toggle="dropdown" data-bs-auto-close="false"
                                    role="button" aria-expanded="false" title="Plugins">
                                    <span class="nav-link-icon d-md-none d-lg-inline-block" title="Plugins">
                                        <svg class="icon  svg-icon-ti-ti-plug" xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path
                                                d="M9.785 6l8.215 8.215l-2.054 2.054a5.81 5.81 0 1 1 -8.215 -8.215l2.054 -2.054z" />
                                            <path d="M4 20l3.5 -3.5" />
                                            <path d="M15 4l-3.5 3.5" />
                                            <path d="M20 9l-3.5 3.5" />
                                        </svg> </span>
        
                                    <span class="nav-link-title text-truncate">
                                        Plugins
        
                                    </span>
                                </a>
        
        
                                <div class="dropdown-menu animate slideIn dropdown-menu-start">
        
        
                                    <a class="dropdown-item nav-priority-1" href="#"
                                        id="cms-core-plugins-installed" title="Installed Plugins">
                                        <span class="nav-link-icon d-md-none d-lg-inline-block"
                                            title="Installed Plugins">
                                            <svg class="icon  svg-icon-ti-ti-square-check"
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                <path
                                                    d="M3 3m0 2a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v14a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2z" />
                                                <path d="M9 12l2 2l4 -4" />
                                            </svg> </span>
        
                                        <span class="nav-link-title text-truncate">
                                            Installed Plugins
        
                                        </span>
                                    </a>
        
        
        
                                    <a class="dropdown-item nav-priority-2" href="#"
                                        id="cms-core-plugins-marketplace" title="Add New Plugin">
                                        <span class="nav-link-icon d-md-none d-lg-inline-block"
                                            title="Add New Plugin">
                                            <svg class="icon  svg-icon-ti-ti-square-rounded-plus"
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                <path
                                                    d="M12 3c7.2 0 9 1.8 9 9s-1.8 9 -9 9s-9 -1.8 -9 -9s1.8 -9 9 -9z" />
                                                <path d="M15 12h-6" />
                                                <path d="M12 9v6" />
                                            </svg> </span>
        
                                        <span class="nav-link-title text-truncate">
                                            Add New Plugin
        
                                        </span>
                                    </a>
        
                                </div>
                            </li>
                            <li class="nav-item dropdown ">
                                <a class="nav-link dropdown-toggle nav-priority-9000" href="#cms-core-tools"
                                    id="cms-core-tools" data-bs-toggle="dropdown" data-bs-auto-close="false"
                                    role="button" aria-expanded="false" title="Tools">
                                    <span class="nav-link-icon d-md-none d-lg-inline-block" title="Tools">
                                        <svg class="icon  svg-icon-ti-ti-tool" xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path
                                                d="M7 10h3v-3l-3.5 -3.5a6 6 0 0 1 8 8l6 6a2 2 0 0 1 -3 3l-6 -6a6 6 0 0 1 -8 -8l3.5 3.5" />
                                        </svg> </span>
        
                                    <span class="nav-link-title text-truncate">
                                        Tools
        
                                    </span>
                                </a>
        
        
                                <div class="dropdown-menu animate slideIn dropdown-menu-start">
        
        
                                    <a class="dropdown-item nav-priority-9000" href="#"
                                        id="cms-packages-data-synchronize" title="Export/Import Data">
                                        <span class="nav-link-icon d-md-none d-lg-inline-block"
                                            title="Export/Import Data">
                                            <svg class="icon  svg-icon-ti-ti-package-import"
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                <path d="M12 21l-8 -4.5v-9l8 -4.5l8 4.5v4.5" />
                                                <path d="M12 12l8 -4.5" />
                                                <path d="M12 12v9" />
                                                <path d="M12 12l-8 -4.5" />
                                                <path d="M22 18h-7" />
                                                <path d="M18 15l-3 3l3 3" />
                                            </svg> </span>
        
                                        <span class="nav-link-title text-truncate">
                                            Export/Import Data
        
                                        </span>
                                    </a>
        
                                </div>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link nav-priority-9999" href="#" id="cms-core-settings"
                                    title="Settings">
                                    <span class="nav-link-icon d-md-none d-lg-inline-block" title="Settings">
                                        <svg class="icon  svg-icon-ti-ti-settings"
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path
                                                d="M10.325 4.317c.426 -1.756 2.924 -1.756 3.35 0a1.724 1.724 0 0 0 2.573 1.066c1.543 -.94 3.31 .826 2.37 2.37a1.724 1.724 0 0 0 1.065 2.572c1.756 .426 1.756 2.924 0 3.35a1.724 1.724 0 0 0 -1.066 2.573c.94 1.543 -.826 3.31 -2.37 2.37a1.724 1.724 0 0 0 -2.572 1.065c-.426 1.756 -2.924 1.756 -3.35 0a1.724 1.724 0 0 0 -2.573 -1.066c-1.543 .94 -3.31 -.826 -2.37 -2.37a1.724 1.724 0 0 0 -1.065 -2.572c-1.756 -.426 -1.756 -2.924 0 -3.35a1.724 1.724 0 0 0 1.066 -2.573c-.94 -1.543 .826 -3.31 2.37 -2.37c1 .608 2.296 .07 2.572 -1.065z" />
                                            <path d="M9 12a3 3 0 1 0 6 0a3 3 0 0 0 -6 0" />
                                        </svg> </span>
        
                                    <span class="nav-link-title text-truncate">
                                        Settings
        
                                    </span>
                                </a>
        
        
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link nav-priority-10000" href="#" id="cms-core-system"
                                    title="Platform Administration">
                                    <span class="nav-link-icon d-md-none d-lg-inline-block"
                                        title="Platform Administration">
                                        <svg class="icon  svg-icon-ti-ti-user-shield"
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path d="M6 21v-2a4 4 0 0 1 4 -4h2" />
                                            <path
                                                d="M22 16c0 4 -2.5 6 -3.5 6s-3.5 -2 -3.5 -6c1 0 2.5 -.5 3.5 -1.5c1 1 2.5 1.5 3.5 1.5z" />
                                            <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" />
                                        </svg> </span>
        
                                    <span class="nav-link-title text-truncate">
                                        Platform Administration
        
                                    </span>
                                </a>
        
        
                            </li>
                        </ul>
                    </div>
                </div>
            </aside>
            @yield('content')
        </div>
        
      

     
    </div>
    
</body>
<script type="text/javascript">
    var BotbleVariables = BotbleVariables || {};

    BotbleVariables.languages = {
        tables: JSON.parse(
            '{\u0022id\u0022:\u0022ID\u0022,\u0022name\u0022:\u0022Name\u0022,\u0022slug\u0022:\u0022Slug\u0022,\u0022title\u0022:\u0022Title\u0022,\u0022order_by\u0022:\u0022Order By\u0022,\u0022order\u0022:\u0022Order\u0022,\u0022status\u0022:\u0022Status\u0022,\u0022created_at\u0022:\u0022Created At\u0022,\u0022updated_at\u0022:\u0022Updated At\u0022,\u0022description\u0022:\u0022Description\u0022,\u0022operations\u0022:\u0022Operations\u0022,\u0022url\u0022:\u0022URL\u0022,\u0022author\u0022:\u0022Author\u0022,\u0022notes\u0022:\u0022Notes\u0022,\u0022column\u0022:\u0022Column\u0022,\u0022origin\u0022:\u0022Origin\u0022,\u0022after_change\u0022:\u0022After changes\u0022,\u0022views\u0022:\u0022Views\u0022,\u0022browser\u0022:\u0022Browser\u0022,\u0022session\u0022:\u0022Session\u0022,\u0022activated\u0022:\u0022activated\u0022,\u0022deactivated\u0022:\u0022deactivated\u0022,\u0022is_featured\u0022:\u0022Is featured\u0022,\u0022edit\u0022:\u0022Edit\u0022,\u0022delete\u0022:\u0022Delete\u0022,\u0022restore\u0022:\u0022Restore\u0022,\u0022activate\u0022:\u0022Activate\u0022,\u0022deactivate\u0022:\u0022Deactivate\u0022,\u0022excel\u0022:\u0022Excel\u0022,\u0022export\u0022:\u0022Export\u0022,\u0022csv\u0022:\u0022CSV\u0022,\u0022pdf\u0022:\u0022PDF\u0022,\u0022print\u0022:\u0022Print\u0022,\u0022reset\u0022:\u0022Reset\u0022,\u0022reload\u0022:\u0022Reload\u0022,\u0022display\u0022:\u0022Display\u0022,\u0022all\u0022:\u0022All\u0022,\u0022add_new\u0022:\u0022Add New\u0022,\u0022action\u0022:\u0022Actions\u0022,\u0022delete_entry\u0022:\u0022Delete\u0022,\u0022view\u0022:\u0022View Detail\u0022,\u0022save\u0022:\u0022Save\u0022,\u0022show_from\u0022:\u0022Show from\u0022,\u0022to\u0022:\u0022to\u0022,\u0022in\u0022:\u0022in\u0022,\u0022records\u0022:\u0022records\u0022,\u0022no_data\u0022:\u0022No data to display\u0022,\u0022no_record\u0022:\u0022No record\u0022,\u0022confirm_delete\u0022:\u0022Confirm delete\u0022,\u0022confirm_delete_msg\u0022:\u0022Do you really want to delete this record?\u0022,\u0022confirm_delete_many_msg\u0022:\u0022Do you really want to delete selected record(s)?\u0022,\u0022confirm_delete_all_msg\u0022:\u0022Do you really want to delete all record?\u0022,\u0022cancel\u0022:\u0022Cancel\u0022,\u0022template\u0022:\u0022Template\u0022,\u0022email\u0022:\u0022Email\u0022,\u0022phone\u0022:\u0022Phone\u0022,\u0022last_login\u0022:\u0022Last login\u0022,\u0022shortcode\u0022:\u0022Shortcode\u0022,\u0022image\u0022:\u0022Image\u0022,\u0022bulk_changes\u0022:\u0022Bulk changes\u0022,\u0022submit\u0022:\u0022Submit\u0022,\u0022please_select_record\u0022:\u0022Please select at least one record to perform this action!\u0022,\u0022checkbox\u0022:\u0022Checkbox\u0022,\u0022toggle_columns\u0022:\u0022Toggle Columns\u0022}'
        ),
        notices_msg: JSON.parse(
            '{\u0022create_success_message\u0022:\u0022Created successfully\u0022,\u0022update_success_message\u0022:\u0022Updated successfully\u0022,\u0022delete_success_message\u0022:\u0022Deleted successfully\u0022,\u0022success_header\u0022:\u0022Success!\u0022,\u0022error_header\u0022:\u0022Error!\u0022,\u0022no_select\u0022:\u0022Please select at least one record to perform this action!\u0022,\u0022processing_request\u0022:\u0022We are processing your request.\u0022,\u0022error\u0022:\u0022Error!\u0022,\u0022success\u0022:\u0022Success!\u0022,\u0022info\u0022:\u0022Info!\u0022,\u0022enum\u0022:{\u0022validate_message\u0022:\u0022The :attribute value you have entered is invalid.\u0022}}'
        ),
        pagination: JSON.parse(
            '{\u0022previous\u0022:\u0022\\u0026laquo; Previous\u0022,\u0022next\u0022:\u0022Next \\u0026raquo;\u0022}'
        ),
    };
    BotbleVariables.authorized =
        "0";
    BotbleVariables.authorize_url = "#";

    BotbleVariables.menu_item_count_url = "#";
</script>


<script src="{{ asset('vendor/core/core/base/js/core-ui.js') }}"></script>
<script src="{{ asset('vendor/core/core/base/libraries/excanvas.min.js') }}"></script>
<script src="{{ asset('vendor/core/core/base/libraries/ie8.fix.min.js') }}"></script>
<script src="{{ asset('vendor/core/core/base/libraries/modernizr/modernizr.min.js') }}"></script>
<script src="{{ asset('vendor/core/core/base/libraries/select2/js/select2.min.js') }}"></script>
<script src="{{ asset('vendor/core/core/base/libraries/flatpickr/flatpickr.min.js') }}"></script>
<script src="{{ asset('vendor/core/core/base/libraries/jquery-cookie/jquery.cookie.js') }}"></script>
<script src="{{ asset('vendor/core/core/base/js/core.js') }}"></script>
<script src="{{ asset('vendor/core/core/base/libraries/toastr/toastr.min.js') }}"></script>
<script src="{{ asset('vendor/core/core/base/libraries/mcustom-scrollbar/jquery.mCustomScrollbar.js') }}"></script>
<script src="{{ asset('vendor/core/core/base/libraries/stickytableheaders/jquery.stickytableheaders.js') }}"></script>
<script src="{{ asset('vendor/core/core/base/libraries/jquery-waypoints/jquery.waypoints.min.js') }}"></script>
<script src="{{ asset('vendor/core/core/base/libraries/spectrum/spectrum.js') }}"></script>
<script src="{{ asset('vendor/core/core/base/libraries/fancybox/jquery.fancybox.min.js') }}"></script>
<script src="{{ asset('vendor/core/core/base/libraries/fslightbox.js') }}"></script>
<script src="{{ asset('vendor/core/core/base/libraries/sortable/sortable.min.js') }}"></script>
<script src="{{ asset('vendor/core/core/base/libraries/counterup/jquery.counterup.min.js') }}"></script>
<script src="{{ asset('vendor/core/core/base/libraries/jquery-ui/jquery-ui.min.js') }}"></script>
<script src="{{ asset('vendor/core/plugins/language/js/language-global.js') }}"></script>
<script src="{{ asset('vendor/core/core/dashboard/js/dashboard.js') }}"></script>
<script src="{{ asset('vendor/core/core/dashboard/js/check-for-updates.js') }}"></script>
<script src="{{ asset('vendor/core/packages/get-started/js/get-started.js') }}"></script>
<script src="{{ asset('vendor/core/plugins/blog/js/blog.js') }}"></script>
<script src="{{ asset('vendor/core/plugins/audit-log/js/audit-log.js') }}"></script>
</html>
