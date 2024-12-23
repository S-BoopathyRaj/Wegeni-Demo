@extends('layout')

@section('content')
    <div class="page-wrapper">
        <div class="page-header d-print-none">
            <div class="container-xl">
                <div class="row g-2 align-items-center">
                    <div class="col">
                        <div class="page-pretitle">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item active" aria-current="page">
                                        <h1 class="mb-0 d-inline-block fs-6 lh-1">Dashboard</h1>
                                    </li>
                                </ol>
                            </nav>

                        </div>
                    </div>
                    <div class="col-auto ms-auto d-print-none">
                        <div class="btn-list">
                            <button class="btn btn-outline-primary  manage-widget" type="button" data-bs-toggle="modal"
                                data-bs-target="#widgets-management-modal">
                                <svg class="icon icon-left svg-icon-ti-ti-layout-dashboard"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M5 4h4a1 1 0 0 1 1 1v6a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1v-6a1 1 0 0 1 1 -1" />
                                    <path d="M5 16h4a1 1 0 0 1 1 1v2a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1v-2a1 1 0 0 1 1 -1" />
                                    <path
                                        d="M15 12h4a1 1 0 0 1 1 1v6a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1v-6a1 1 0 0 1 1 -1" />
                                    <path d="M15 4h4a1 1 0 0 1 1 1v2a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1v-2a1 1 0 0 1 1 -1" />
                                </svg>
                                Manage Widgets

                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="page-body page-content">
            <div class="container-xl">


                <div class="row">
                    <div class="col-12">
                        <v-check-for-updates check-update-url="#" v-slot="{ hasNewVersion, message }" v-cloak>
                            <div role="alert" class="alert alert-warning" v-if="hasNewVersion">
                                <div class="d-flex">
                                    <div>
                                        <svg class="icon alert-icon svg-icon-ti-ti-alert-circle"
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0" />
                                            <path d="M12 8v4" />
                                            <path d="M12 16h.01" />
                                        </svg>
                                    </div>
                                    <div class="w-100">


                                        , please go to <a href="#" class="text-warning fw-bold">System
                                            Updater</a> to upgrade to the
                                        latest version!

                                    </div>
                                </div>



                            </div>
                        </v-check-for-updates>
                    </div>

                    <div class="col-12">
                        <div role="alert" class="alert alert-info resume-setup-wizard-wrapper">
                            <div class="d-flex">
                                <div>
                                    <svg class="icon alert-icon svg-icon-ti-ti-info-circle"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0" />
                                        <path d="M12 9h.01" />
                                        <path d="M11 12h1v4h1" />
                                    </svg>
                                </div>
                                <div class="w-100">


                                    <a href="#" class="resume-setup-wizard">Click here</a> to finish
                                    Quick setup Wizard!

                                </div>
                            </div>



                        </div>

                    </div>

                    <div class="col-12">
                        <div class="row row-cards">
                            <div class="col dashboard-widget-item col-12 col-md-6 col-lg-3">
                                <a class="text-white d-block rounded position-relative overflow-hidden text-decoration-none bg-pink"
                                    href="#" style="">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="details px-4 py-3 d-flex flex-column justify-content-between">
                                            <div class="desc fw-medium">Theme</div>
                                            <div class="number fw-bolder">
                                                <span>1</span>
                                            </div>
                                        </div>
                                        <div class="visual ps-1 position-absolute end-0">
                                            <svg class="icon me-n2 svg-icon-ti-ti-palette"
                                                style="opacity: .1; --bb-icon-size: 80px;"
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                <path
                                                    d="M12 21a9 9 0 0 1 0 -18c4.97 0 9 3.582 9 8c0 1.06 -.474 2.078 -1.318 2.828c-.844 .75 -1.989 1.172 -3.182 1.172h-2.5a2 2 0 0 0 -1 3.75a1.3 1.3 0 0 1 -1 2.25" />
                                                <path d="M8.5 10.5m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                                                <path d="M12.5 7.5m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                                                <path d="M16.5 10.5m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                                            </svg>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div class="col dashboard-widget-item col-12 col-md-6 col-lg-3">
                                <a class="text-white d-block rounded position-relative overflow-hidden text-decoration-none bg-info"
                                    href="#" style="">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="details px-4 py-3 d-flex flex-column justify-content-between">
                                            <div class="desc fw-medium">Users</div>
                                            <div class="number fw-bolder">
                                                <span>1</span>
                                            </div>
                                        </div>
                                        <div class="visual ps-1 position-absolute end-0">
                                            <svg class="icon me-n2 svg-icon-ti-ti-users"
                                                style="opacity: .1; --bb-icon-size: 80px;"
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                <path d="M9 7m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" />
                                                <path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                                                <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                                                <path d="M21 21v-2a4 4 0 0 0 -3 -3.85" />
                                            </svg>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div class="col dashboard-widget-item col-12 col-md-6 col-lg-3">
                                <a class="text-white d-block rounded position-relative overflow-hidden text-decoration-none bg-success"
                                    href="#" style="">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="details px-4 py-3 d-flex flex-column justify-content-between">
                                            <div class="desc fw-medium">Plugins</div>
                                            <div class="number fw-bolder">
                                                <span>18</span>
                                            </div>
                                        </div>
                                        <div class="visual ps-1 position-absolute end-0">
                                            <svg class="icon me-n2 svg-icon-ti-ti-plug"
                                                style="opacity: .1; --bb-icon-size: 80px;"
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                <path
                                                    d="M9.785 6l8.215 8.215l-2.054 2.054a5.81 5.81 0 1 1 -8.215 -8.215l2.054 -2.054z" />
                                                <path d="M4 20l3.5 -3.5" />
                                                <path d="M15 4l-3.5 3.5" />
                                                <path d="M20 9l-3.5 3.5" />
                                            </svg>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div class="col dashboard-widget-item col-12 col-md-6 col-lg-3">
                                <a class="text-white d-block rounded position-relative overflow-hidden text-decoration-none bg-yellow"
                                    href="#" style="">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="details px-4 py-3 d-flex flex-column justify-content-between">
                                            <div class="desc fw-medium">Pages</div>
                                            <div class="number fw-bolder">
                                                <span>29</span>
                                            </div>
                                        </div>
                                        <div class="visual ps-1 position-absolute end-0">
                                            <svg class="icon me-n2 svg-icon-ti-ti-files"
                                                style="opacity: .1; --bb-icon-size: 80px;"
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                <path d="M15 3v4a1 1 0 0 0 1 1h4" />
                                                <path
                                                    d="M18 17h-7a2 2 0 0 1 -2 -2v-10a2 2 0 0 1 2 -2h4l5 5v7a2 2 0 0 1 -2 2z" />
                                                <path d="M16 17v2a2 2 0 0 1 -2 2h-7a2 2 0 0 1 -2 -2v-10a2 2 0 0 1 2 -2h2" />
                                            </svg>
                                        </div>
                                    </div>
                                </a>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="mb-3 col-12">

                </div>

                <div class="col-12">
                    <div id="list_widgets" class="row row-cards" data-bb-toggle="widgets-list" data-url="#">
                        <div class="widget-item col-12 d-flex col-md-6 col-sm-6" id="widget_posts_recent" data-url="#">
                            <div class="card card-sm flex-fill">
                                <div class="card-header">
                                    <h4 class="card-title">
                                        Recent Posts
                                    </h4>

                                    <div class="card-actions btn-actions"></div>
                                </div>
                                <div class="d-flex flex-column justify-content-between h-100 widget-content  "
                                    style="min-height: 10rem;"></div>
                            </div>
                        </div>

                        <div class="widget-item col-12 d-flex col-md-6 col-sm-6" id="widget_audit_logs" data-url="#">
                            <div class="card card-sm flex-fill">
                                <div class="card-header">
                                    <h4 class="card-title">
                                        Activity Logs
                                    </h4>

                                    <div class="card-actions btn-actions"></div>
                                </div>
                                <div class="d-flex flex-column justify-content-between h-100 widget-content  "
                                    style="min-height: 10rem;"></div>
                            </div>
                        </div>

                    </div>

                </div>
                <footer class="footer position-sticky footer-transparent d-print-none">
                    <div class="container-xl">
                        <div class="text-start">
                            <div class="d-flex flex-wrap gap-3 justify-content-center justify-content-lg-between">
                                <div class="order-2 order-lg-1">
                                    Copyright 2024 © Your App. Version <span class="fw-medium">1.6.2</span>
                                </div>
                                <div class="order-1 order-lg-2">
                                    Page loaded in 1.44 seconds
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>

            </div>

        </div>


    </div>
@endsection
