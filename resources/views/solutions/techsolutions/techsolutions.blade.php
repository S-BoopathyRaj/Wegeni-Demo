@extends('layouts.website')

@section('content')
    <!-- =======================
    Main Banner START -->
    <section class="pt-8 position-relative overflow-hidden">
        <div class="container pt-lg-4">
            <div class="row g-4 g-xxl-5">
                <div class="col-lg-7 position-relative mx-auto text-center">
                    <!-- Bread crumb -->
                    <!-- <div class="d-flex justify-content-center mb-3">
         <nav aria-label="breadcrumb">
          <ol class="breadcrumb breadcrumb-dots pb-0 mb-0">
           <li class="breadcrumb-item"><a href="#">Home</a></li>
           <li class="breadcrumb-item active" aria-current="page">Customer stories</li>
          </ol>
         </nav>
        </div> -->
                    <span
                        class="font-heading heading-color d-inline-block bg-light px-3 py-2 rounded-3 mb-4">{{ $menu->label }}</span>
                    <!-- Title -->
                    <h2 class="mb-3">{{ $menu->page_title }}</h2>
                    <p>{{ $menu->short_description }}</p>
                </div>
            </div>
        </div>
    </section>

    <!-- =======================
    Main Banner END -->
    <!-- =======================
    About START -->
    <section class="pt-0">
        <div class="container">
            <div class="row g-4 align-items-center">
                <!-- Image -->
                <div class="col-lg-6 col-xl-6 ms-auto h-100">
                    <div class="row align-items-center">
                        <div class="col-6 me-sm-n7">
                            <div class="position-relative">
                                <!-- SVG decoration -->
                                <figure class="text-primary position-absolute top-0 start-0 mt-n5 ms-n5">
                                    <svg width="111" height="71" viewbox="0 0 111 71" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M92.4335 8.12935C92.4029 8.01892 92.3733 7.90798 92.3427 7.79755C90.075 8.424 87.8078 9.04993 85.5395 9.67638C85.5762 9.80665 85.6125 9.93744 85.6482 10.0687C87.9103 9.42244 90.1719 8.77564 92.4335 8.12935M15.3001 60.9486C14.1257 60.2652 12.7044 59.8799 13.0538 58.1808C13.2768 57.1004 13.4645 55.963 13.9574 54.9982C15.4792 52.0166 16.8904 48.9301 18.8086 46.2106C21.3559 42.6001 24.9726 40.2261 29.5203 40.048C33.8593 39.8775 38.2167 40.1039 42.5649 40.2144C48.5375 40.3655 54.5352 40.8866 60.0899 37.8445C63.654 35.8924 66.6809 33.5194 68.5935 29.7735C70.7557 25.5375 73.0407 21.3412 75.6013 17.3367C79.1705 11.7552 84.2074 8.11866 90.9418 7.16806C91.6239 7.07188 92.4901 6.78384 92.9687 7.07646C93.7773 7.57161 94.4518 8.39448 94.9538 9.21888C95.1293 9.50641 94.7742 10.4463 94.4079 10.6631C93.6243 11.1277 92.6524 11.2626 91.8014 11.6326C91.1259 11.9257 90.5147 12.3669 89.877 12.7455C89.7592 12.8152 89.6398 12.9755 89.5357 12.9643C87.2639 12.7104 86.2364 14.6976 84.6605 15.6747C81.0188 17.9336 78.8394 21.4399 76.8645 25.0851C74.9993 28.5277 73.2244 32.0192 71.3235 35.4415C70.7817 36.4175 70.0588 37.3656 69.2134 38.0893C66.7595 40.192 64.2479 42.0591 61.1179 43.3451C55.0484 45.8386 48.9523 45.1313 42.7613 44.7669C38.9274 44.541 35.047 44.3303 31.237 44.6702C26.401 45.1013 23.0507 48.1505 20.3718 52.0247C19.6667 53.044 18.5959 53.8104 17.8827 54.8251C17.4102 55.4979 17.3128 56.4225 16.9817 57.2067C16.4649 58.4342 15.893 59.6382 15.3001 60.9486"
                                            fill="currentColor"></path>
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M14.2538 29.9021C14.3216 30.0239 14.3899 30.1462 14.4571 30.268C15.6065 29.6346 16.7563 29.0011 17.9061 28.3677C17.8297 28.2296 17.7532 28.0915 17.6768 27.9534C16.5361 28.6031 15.3944 29.2524 14.2538 29.9021M47.9832 29.8797C48.0133 29.9918 48.0434 30.104 48.0734 30.2161C49.474 29.8369 50.8741 29.4583 52.2747 29.0791C52.2446 28.9685 52.2151 28.8585 52.1855 28.7479C50.7849 29.1255 49.3843 29.5026 47.9832 29.8797M78.1082 0.896364C77.8503 1.11448 77.5924 1.3331 77.1938 1.67047H78.4716C79.3809 3.33742 78.806 4.55693 77.5613 5.62916C76.4767 6.56329 75.4727 7.62736 73.8672 7.57691C73.7015 7.57182 73.4253 7.63959 73.3794 7.74916C72.7693 9.19953 71.7005 9.13888 70.5461 8.61755C70.4794 9.30502 70.567 10.0047 70.3163 10.549C70.0466 11.135 69.4773 11.5927 69.0089 12.0773C66.299 14.8792 65.2419 18.5041 63.8831 22.0164C62.6334 25.2458 60.8913 28.2352 57.7925 30.1248C57.3873 30.3715 56.8608 30.4199 56.0912 30.6492C55.5917 31.4651 54.8552 32.4747 53.2701 32.624C52.3481 32.7111 51.499 33.5168 50.5734 33.6264C48.025 33.9276 45.4246 34.3501 42.8992 34.1223C40.5572 33.9108 38.226 33.0811 35.9956 32.2423C31.1445 30.4184 26.1848 30.1396 21.2114 31.2292C18.4494 31.8346 15.8888 33.1515 14.0091 35.4768C13.4403 36.1806 12.6636 36.7121 12.0117 37.3527C8.83693 40.4716 6.33646 44.0577 4.58266 48.1545C4.04189 49.4189 3.5266 50.6945 2.98788 51.9603C2.73355 52.5556 2.44456 52.8511 1.73509 52.3731C-0.0110662 51.1964 -0.275079 50.4269 0.224405 48.2605C2.22897 39.5619 7.51075 33.2325 14.6865 28.3137C17.8659 26.134 21.5952 25.6897 25.3133 25.7931C27.8214 25.8634 30.3433 26.341 32.805 26.8817C35.1006 27.3857 37.3126 28.2561 39.5822 28.8895C42.3406 29.6591 45.0939 29.1474 47.8303 28.6847C54.7329 27.5171 59.004 23.4193 61.1095 16.8331C63.4438 9.52976 68.1343 4.24607 75.0894 1.02173C75.9513 0.6227 76.9772 0.579383 77.9273 0.37146C77.9879 0.546258 78.0481 0.721056 78.1082 0.896364"
                                            fill="currentColor"></path>
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M90.5433 31.653C90.0089 32.2353 89.4658 32.81 88.9435 33.4024C88.7191 33.6568 88.3095 34.1157 88.3694 34.1961C89.1835 35.2898 88.3278 36.2024 87.7359 36.6203C86.2178 37.6933 86.7147 39.2165 86.5046 40.5702C86.3792 41.3751 85.3706 42.6368 84.6306 42.7754C84.5702 42.4081 84.5113 42.0494 84.4529 41.6908C84.1281 41.8496 83.7459 41.9467 83.4911 42.181C83.0525 42.5846 82.6927 43.0738 82.1826 43.6617C82.714 43.7654 83.0769 43.8362 83.4586 43.9101C83.5322 44.3719 83.6033 44.8166 83.6738 45.2562C82.2856 45.7677 80.8872 46.0135 79.8238 47.2018C79.2457 47.8484 78.4453 48.1509 78.9026 49.2183C78.9417 49.3088 78.3889 49.8193 78.2991 49.7727C76.1353 48.6517 74.9592 50.6489 74.3009 51.6946C73.7578 52.5561 73.1244 53.018 72.4249 53.3468C71.8884 53.5987 71.0758 53.2552 70.3834 53.1986C70.2109 53.1844 70.0317 53.2547 69.7647 53.3018C69.7962 53.713 69.8246 54.0854 69.8515 54.4486C68.612 54.9742 68.612 54.9742 65.7985 54.1957C65.5488 55.7457 64.287 56.2678 62.6536 55.4244C62.5612 55.733 62.4739 56.0264 62.4617 56.0669C60.773 56.03 59.0072 54.3363 57.554 56.8182C56.2754 55.4118 54.9491 56.0153 53.4984 56.7514C52.8183 57.0959 51.8986 57.0423 51.0869 57.0478C47.7725 57.0701 44.5133 57.2906 41.2892 58.2498C39.7096 58.7198 38.3712 59.6769 36.8814 60.1114C33.6639 61.0504 32.1879 63.896 29.9322 65.8573C28.8739 66.7775 28.3349 68.284 27.5354 69.5087C27.0476 70.2554 26.838 71.4341 25.4224 70.7355C24.3265 70.1952 23.9134 69.5037 24.4209 68.1767C26.7796 62.0126 30.5941 57.2239 36.8809 54.528C41.6146 52.4994 46.5467 52.4731 51.5194 52.3386C54.7334 52.2516 57.9428 52.0254 61.1562 51.8818C61.6531 51.86 62.5003 51.4098 62.2749 52.5839L62.2805 52.5612L61.6592 52.7964C61.6542 52.8687 61.6496 52.9411 61.6445 53.0134C61.9557 53.0417 62.2739 53.1237 62.5754 53.0842C62.9302 53.0382 63.2743 52.7837 63.617 52.7964C66.3843 52.8971 68.7161 51.561 71.0321 50.398C73.4929 49.1621 75.7881 47.5873 78.1042 46.0823C78.8097 45.6245 79.3467 44.9087 79.9609 44.3107L79.9203 44.3446C80.3746 43.9854 80.8278 43.6258 81.5684 43.0394C80.7319 42.9873 80.3071 42.961 79.635 42.9195C80.5446 41.8147 81.3024 40.765 82.1998 39.8509C82.7942 39.2448 83.2043 39.5094 83.6276 40.5859C84.3052 40.5389 84.958 40.4938 85.7402 40.4392C85.3645 39.9338 85.0478 39.5069 84.824 39.2069C84.2301 39.1583 83.4941 39.2721 83.3733 39.0511C83.1505 38.6443 83.2048 38.0251 83.2972 37.5223C83.4276 36.813 83.6469 36.1073 83.9281 35.4421C84.0971 35.0424 84.4555 34.7227 84.8641 34.191C84.5976 33.0938 85.0595 31.9642 87.0147 29.4575C87.2817 29.5895 87.5634 29.7282 87.9116 29.9002C87.737 28.2029 87.9105 27.9297 88.745 27.999V29.7378L88.7166 29.6988C89.0089 30.2958 89.3008 30.8922 89.6262 31.5584C89.7038 31.5372 89.9921 31.4573 90.2809 31.3768C90.3682 31.4689 90.456 31.561 90.5433 31.653"
                                            fill="currentColor"></path>
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M91.05 30.6099C90.964 30.5189 90.8775 30.4279 90.7915 30.3369C90.9735 28.4059 90.893 28.3199 89.2505 28.6784L89.2785 28.7169C89.874 28.1504 90.4695 27.5834 91.1385 26.9459C90.717 26.6759 90.314 26.4179 89.698 26.0234C90.224 25.7174 90.6 25.4874 90.9885 25.2804C91.117 25.2119 91.3395 25.2544 91.4145 25.1614C94.349 21.5449 98.2415 19.3599 102.545 17.8789C104.536 17.1939 106.637 16.8294 108.692 16.3369C108.986 16.2664 109.304 16.2954 109.61 16.2784L109.739 16.7114C107.162 17.4684 104.584 18.2254 102.007 18.9824C102.04 19.1079 102.073 19.2334 102.106 19.3594C104.782 18.6204 107.457 17.8809 110.107 17.1489C111.038 19.2034 110.894 19.4559 108.979 20.2784C106.467 21.3584 103.996 22.5329 101.497 23.6449C101 23.8659 100.529 24.2159 99.9335 23.6049C99.691 23.3574 98.983 23.5644 98.3565 23.5644V22.6369C97.762 23.0134 97.2515 23.3364 96.4335 23.8544C97.1575 23.9409 97.5115 23.9829 97.852 24.0239C97.852 24.1599 97.8865 24.2669 97.8475 24.3164C97.4145 24.8639 96.7665 25.1309 96.822 26.1504C96.86 26.8489 95.937 26.8254 95.5255 26.1679C95.154 26.5799 94.7805 26.9944 94.222 27.6134C94.3215 28.8909 93.3995 29.6384 91.681 29.1314C91.745 29.5474 91.8975 29.9319 91.815 30.2559C91.7715 30.4279 91.3185 30.4954 91.05 30.6099"
                                            fill="currentColor"></path>
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M74 47.3765C72.0934 48.234 70.1858 49.0911 68.2787 49.9486C68.1856 49.82 68.0931 49.6914 68 49.5629C68.2614 49.3936 68.5055 49.1993 68.7858 49.0587C70.1138 48.3931 71.4413 47.7261 72.7943 47.0989C73.0854 46.9643 73.4799 46.9944 73.8274 46.9486C73.8847 47.0911 73.9426 47.234 74 47.3765"
                                            fill="currentColor"></path>
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M62 51.9486C62.9157 50.1567 64.5931 50.4906 66 49.9486C65.9333 50.9163 64.7375 51.4739 62.0101 51.9147C62.0058 51.9236 62 51.9486 62 51.9486"
                                            fill="currentColor"></path>
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M80 43.8445C79.4723 43.9225 78.9099 43.9279 78.4273 44.0993C77.9537 44.2675 77.5613 44.6045 77 44.9486C77.1311 43.9131 78.3455 42.8058 79.1308 42.9637C79.4702 43.0315 79.6842 43.5573 79.9565 43.875C79.958 43.8745 80 43.8445 80 43.8445"
                                            fill="currentColor"></path>
                                    </svg>
                                </figure>
                                @if ($menu->image)
                                    <img src="{{ asset('storage/' . $menu->image) }}" class="rounded-4"
                                        alt="{{ $menu->image }}">
                                @else
                                    <div class="bg-secondary text-white d-flex align-items-center justify-content-center">
                                        <span>No Image Available</span>
                                    </div>
                                @endif
                                {{-- <img src="{{ asset('assets/images/about/17.jpg') }}" class="rounded-4" alt=""> --}}
                            </div>

                        </div>
                        <div class="col-6 position-relative">
                            <!-- Video image -->
                            <div class="card card-body overflow-hidden p-0 mb-4 mb-sm-7">
                                <img src="{{ asset('assets/images/about/18.jpg') }}" class="card-img" alt="video-img">
                                <div class="card-img-overlay d-flex p-3">
                                </div>
                            </div>

                            <img src="{{ asset('assets/images/about/14.jpg') }}" class="rounded-4" alt="">
                        </div>
                    </div>
                </div>
                <!-- Content -->
                <div class="col-lg-6 ps-md-5">
                    <h2 class="mb-4">{{$menu->questions}}</h2>
                    <p class="mb-0">Custom IT products cater to your unique needs, optimizing efficiency and security for
                        smoother operations.</p>

                    <hr class="my-4">

                    <!-- List -->
                    <div class="row row-cols-1 row-cols-sm-2">
                        <div class="col">
                            <ul class="list-group list-group-borderless mb-0">
								@foreach ($menu->list as $list)                                        
											<li class="list-group-item d-flex"><i
												class="bi bi-patch-check-fill text-primary me-2"></i>{{ $list }}</li>
                                    @endforeach
                                
                              
                            </ul>
                        </div>

                    </div>


                </div>
            </div> <!-- Row END -->

        </div>
    </section>
    <!-- =======================
    About END -->

    <section class="pt-0">
        <div class="container">
            <!-- Title -->
            <div class="inner-container text-center mb-4 mb-sm-6">
                <h2 class="mb-0">Our Comprehensive Services</h2>
            </div>

            <!-- Service list START -->
            <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 g-4">
                <!-- Service item -->
                <div class="col">
                    <div class="card card-hover-shadow border h-100 p-4">
                        <!-- Card body -->
                        <div class="card-body p-0">
                            <!-- Icon -->
                            <figure class="text-primary mb-4">
								@if ($menu->icon)
                                <img src="{{ asset('storage/' . $menu->icon) }}" class="card-img-top"
                                    alt="{{ $menu->icon }}" style="height: 50px; width: 50px; object-fit: cover;">
                            @else
                                <div class="bg-secondary text-white d-flex align-items-center justify-content-center"
                                    style="height: 200px;">
                                    <span>No Image Available</span>
                                </div>
                            @endif
                            </figure>

                            <!-- Content -->
                            <h5 class="mb-3">Core Services Offered by IT Product Agencies</h5>
                            <p>IT product agencies specialize in delivering innovative software solutions and hardware
                                products to meet the diverse needs of businesses and consumers.</p>
                        </div>
                    </div>
                </div>

                <!-- Service item -->
                <div class="col">
                    <div class="card card-hover-shadow border h-100 p-4">
                        <!-- Card body -->
                        <div class="card-body p-0">
                            <!-- Icon -->
                            <figure class="text-primary mb-4">
                                <svg width="50" height="50" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M3 5.75H5M10.5 5.75H21M3 18.25H5M10.5 18.25H21M21 12H19M13.5 12H3"
                                        stroke="currentColor" stroke-opacity="0.25" stroke-width="1.5"
                                        stroke-linecap="round" stroke-linejoin="round"></path>
                                    <path
                                        d="M4.25 5.75C4.25 3.817 5.817 2.25 7.75 2.25V2.25C9.683 2.25 11.25 3.817 11.25 5.75V5.75C11.25 7.683 9.683 9.25 7.75 9.25V9.25C5.817 9.25 4.25 7.683 4.25 5.75V5.75Z"
                                        fill="currentColor"></path>
                                    <path
                                        d="M4.25 18.25C4.25 16.317 5.817 14.75 7.75 14.75V14.75C9.683 14.75 11.25 16.317 11.25 18.25V18.25C11.25 20.183 9.683 21.75 7.75 21.75V21.75C5.817 21.75 4.25 20.183 4.25 18.25V18.25Z"
                                        fill="currentColor"></path>
                                    <path
                                        d="M12.75 12C12.75 10.067 14.317 8.5 16.25 8.5V8.5C18.183 8.5 19.75 10.067 19.75 12V12C19.75 13.933 18.183 15.5 16.25 15.5V15.5C14.317 15.5 12.75 13.933 12.75 12V12Z"
                                        fill="currentColor"></path>
                                </svg>
                            </figure>

                            <!-- Content -->
                            <h5 class="mb-3">Market Analysis and Product Definition</h5>
                            <p>Effective strategy and planning are essential for the successful development and launch of IT
                                products.</p>
                        </div>
                    </div>
                </div>

                <!-- Service item -->
                <div class="col">
                    <div class="card card-hover-shadow border h-100 p-4">
                        <!-- Card body -->
                        <div class="card-body p-0">
                            <!-- Icon -->
                            <figure class="text-primary mb-4">
                                <svg width="50" height="50" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M20.2402 6.75391C21.2543 9.81065 21.2543 11.8485 20.2402 14.9052"
                                        stroke="currentColor" stroke-opacity="0.25" stroke-width="1.5"
                                        stroke-linecap="round" stroke-linejoin="round"></path>
                                    <path
                                        d="M2.25047 12.9739C2.25055 14.0922 3.15715 14.9988 4.27547 14.9988V14.9988L4.25651 19.4911C4.25125 20.7361 5.25945 21.7481 6.50452 21.7474V21.7474C7.74497 21.7468 8.75021 20.741 8.75021 19.5006V15.1105H10V6.55981H6.46978C5.09959 6.55981 4.41449 6.55981 3.87962 6.79848C3.26038 7.07479 2.76505 7.57015 2.48879 8.18941C2.25016 8.72431 2.25021 9.4094 2.25031 10.7796L2.25047 12.9739Z"
                                        fill="currentColor"></path>
                                    <path
                                        d="M11.0002 15.8122C13.9211 18.3111 15.3815 19.5606 16.6274 19.37C17.1377 19.2919 17.6157 19.0718 18.0068 18.7348C18.9616 17.912 18.9616 15.99 18.9616 12.146V9.4287C18.9616 5.58267 18.9616 3.65966 18.0199 2.83775C17.6138 2.48322 17.1124 2.2559 16.5781 2.18405C15.3393 2.01748 13.893 3.28476 11.0002 5.81933V5.81933V15.8122V15.8122Z"
                                        fill="currentColor" fill-opacity="0.25"></path>
                                </svg>
                            </figure>

                            <!-- Content -->
                            <h5 class="mb-3">Product Development and Design</h5>
                            <p>Product development is a comprehensive process. The goal is to deliver a product that aligns
                                with customer needs and drives business growth.</p>
                        </div>
                    </div>
                </div>

                <!-- Service item -->
                <div class="col">
                    <div class="card card-hover-shadow border h-100 p-4">
                        <!-- Card body -->
                        <div class="card-body p-0">
                            <!-- Icon -->
                            <figure class="text-primary mb-4">
                                <svg width="50" height="50" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M17.523 8.92914C17.523 9.94279 16.6746 10.7645 15.6281 10.7645C14.5816 10.7645 13.7333 9.94279 13.7333 8.92914C13.7333 7.91548 14.5816 7.09375 15.6281 7.09375C16.6746 7.09375 17.523 7.91548 17.523 8.92914Z"
                                        fill="currentColor"></path>
                                    <path
                                        d="M10.485 8.92914C10.485 9.94279 9.63664 10.7645 8.59015 10.7645C7.54366 10.7645 6.69531 9.94279 6.69531 8.92914C6.69531 7.91548 7.54366 7.09375 8.59015 7.09375C9.63664 7.09375 10.485 7.91548 10.485 8.92914Z"
                                        fill="currentColor"></path>
                                    <path
                                        d="M11.0264 15.2219C11.0264 16.2355 10.178 17.0573 9.13154 17.0573C8.08504 17.0573 7.2367 16.2355 7.2367 15.2219C7.2367 14.2082 8.08504 13.3865 9.13154 13.3865C10.178 13.3865 11.0264 14.2082 11.0264 15.2219Z"
                                        fill="currentColor"></path>
                                    <path
                                        d="M21.748 9.45998C21.4753 4.55256 14.4854 1.4706 9.28231 2.41642C4.07925 3.36223 1.56208 8.48915 2.41245 13.4547C3.23924 18.2826 8.68956 21.7459 12.1134 21.7459C15 21.7459 17.25 20.6058 17.25 18.9959C17.25 18.9959 17.2846 18.5254 16.98 17.9961C16.7157 17.5369 16.4642 17.3392 16.07 16.9961C15.8584 16.8119 15.5273 16.5296 15.15 15.9959C14.9079 15.6534 14.8139 15.4137 14.8 15.3435C14.7846 14.9174 15.0127 14.407 15.5 14.2561C15.6439 14.2115 15.8105 14.2221 16 14.2459C18 14.3961 22 13.9961 21.748 9.45998Z"
                                        fill="currentColor" fill-opacity="0.25"></path>
                                </svg>
                            </figure>

                            <!-- Content -->
                            <h5 class="mb-3">Market Strategy</h5>
                            <p>A product marketing strategy defines product positioning, pricing, and promotion. It
                                identifies target audiences and charts the product's journey from development to growth.</p>
                        </div>
                    </div>
                </div>

                <!-- Service item -->
                <div class="col">
                    <div class="card card-hover-shadow border h-100 p-4">
                        <!-- Card body -->
                        <div class="card-body p-0">
                            <!-- Icon -->
                            <figure class="text-primary mb-4">
                                <svg width="50" height="50" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M8 18V15M12 13V18M16 18V11M6.5 11.5L7.9646 9.7913C8.91547 8.68195 10.3837 8.16067 11.8212 8.42204V8.42204C13.812 8.78401 15.8538 8.14622 17.2846 6.71542L17.5 6.5"
                                        stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round"></path>
                                    <path
                                        d="M13.2 2.25H10.8C7.23775 2.25 5.45663 2.25 4.20802 3.15717C3.80477 3.45015 3.45015 3.80477 3.15717 4.20802C2.25 5.45663 2.25 7.23775 2.25 10.8V13.2C2.25 16.7622 2.25 18.5434 3.15717 19.792C3.45015 20.1952 3.80477 20.5499 4.20802 20.8428C5.45663 21.75 7.23775 21.75 10.8 21.75H13.2C16.7622 21.75 18.5434 21.75 19.792 20.8428C20.1952 20.5499 20.5499 20.1952 20.8428 19.792C21.75 18.5434 21.75 16.7622 21.75 13.2V10.8C21.75 7.23775 21.75 5.45663 20.8428 4.20802C20.5499 3.80477 20.1952 3.45015 19.792 3.15717C18.5434 2.25 16.7622 2.25 13.2 2.25Z"
                                        fill="currentColor" fill-opacity="0.25"></path>
                                </svg>
                            </figure>

                            <!-- Content -->
                            <h5 class="mb-3">Product Management</h5>
                            <p>A robust market strategy is essential for IT product success. It involves target market
                                identification, product positioning, and effective marketing and sales execution.</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Service list END -->
        </div>
    </section>


    <section class="pt-0">
        <div class="container">
            <!-- Title -->
            <div class="inner-container-small text-center mb-4 mb-sm-5">
                <h2 class="mb-4">Understanding of your website's impact</h2>
                <p class="mb-4">There is nothing that can stop you from achieving what you want, except yourself. If you
                    devote yourself to it you will achieve your goal.</p>
            </div>

            <!-- Image -->
            <img src="{{ asset('assets/images/elements/integration-2.svg') }}" class="mt-5" alt="">
            <!-- Feature -->
            <div class="row justify-content-center g-sm-6 mt-6">
                <!-- Feature item -->
                <div class="col-sm-6 col-lg-4 mb-5 mb-sm-0">
                    <div class="card card-body text-center bg-transparent p-0">
                        <!-- Icon -->
                        <figure class="text-primary mb-4">
                            <svg width="50" height="50" viewbox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M13.1 8.25C13.1 6.73122 14.3312 5.5 15.85 5.5C17.3688 5.5 18.6 6.73122 18.6 8.25C18.6 9.76878 17.3688 11 15.85 11C14.3312 11 13.1 9.76878 13.1 8.25Z"
                                    fill="currentColor" fill-opacity="0.25"></path>
                                <path
                                    d="M21.5948 16.2194C21.4645 15.6034 21.3994 15.2953 21.3081 15.031C20.748 13.4092 19.3144 12.2471 17.6119 12.0346C17.3343 12 17.0195 12 16.3898 12H15.2359C14.5857 12 14.2606 12 13.9682 12.0385C12.4638 12.2365 11.1605 13.1794 10.5017 14.5463C10.3737 14.812 10.272 15.1207 10.0686 15.7383V15.7383C9.82585 16.4751 9.70449 16.8435 9.66869 17.1384C9.4797 18.6948 10.5211 20.1343 12.0585 20.4417C12.3498 20.5 12.7377 20.5 13.5134 20.5H18.1248C18.7369 20.5 19.043 20.5 19.2835 20.4607C20.7862 20.2149 21.8665 18.8823 21.796 17.3613C21.7848 17.1178 21.7214 16.8183 21.5948 16.2194V16.2194Z"
                                    fill="currentColor" fill-opacity="0.25"></path>
                                <path
                                    d="M5.6 6.25C5.6 4.73122 6.83122 3.5 8.35 3.5C9.86878 3.5 11.1 4.73122 11.1 6.25C11.1 7.76878 9.86878 9 8.35 9C6.83122 9 5.6 7.76878 5.6 6.25Z"
                                    fill="currentColor"></path>
                                <path
                                    d="M14.0948 14.2194C13.9645 13.6034 13.8994 13.2953 13.8081 13.031C13.248 11.4092 11.8144 10.2471 10.1119 10.0346C9.83431 10 9.51946 10 8.88976 10H7.73587C7.08569 10 6.7606 10 6.46821 10.0385C4.96381 10.2365 3.66052 11.1794 3.00174 12.5463C2.87371 12.812 2.77199 13.1207 2.56857 13.7383V13.7383C2.32585 14.4751 2.20449 14.8435 2.16869 15.1384C1.9797 16.6948 3.02108 18.1343 4.55849 18.4417C4.84977 18.5 5.23765 18.5 6.01343 18.5H10.6248C11.2369 18.5 11.543 18.5 11.7835 18.4607C13.2862 18.2149 14.3665 16.8823 14.296 15.3613C14.2848 15.1178 14.2214 14.8183 14.0948 14.2194V14.2194Z"
                                    fill="currentColor"></path>
                            </svg>
                        </figure>
                        <!-- Title -->
                        <h6 class="mb-2">Core Services Offered by IT Product Agencies </h6>
                        <div class="mb-0 d-flex justify-content-around">
                            <ul class="list-group list-group-borderless text-start">
                                <li class="list-group-item heading-color"><i class="bi bi-check-lg text-primary me-1"></i>
                                    Software Development</li>
                                <li class="list-group-item heading-color"><i class="bi bi-check-lg text-primary me-1"></i>
                                    Product Design and Development</li>
                                <li class="list-group-item heading-color"><i class="bi bi-check-lg text-primary me-1"></i>
                                    IT Consulting</li>
                                <li class="list-group-item heading-color"><i class="bi bi-check-lg text-primary me-1"></i>
                                    Quality Assurance and Testing</li>
                                <li class="list-group-item heading-color"><i class="bi bi-check-lg text-primary me-1"></i>
                                    IT Infrastructure Solutions</li>
                                <li class="list-group-item heading-color"><i class="bi bi-check-lg text-primary me-1"></i>
                                    Cloud Services</li>
                                <li class="list-group-item heading-color"><i class="bi bi-check-lg text-primary me-1"></i>
                                    Cybersecurity Solutions</li>
                                <li class="list-group-item heading-color"><i class="bi bi-check-lg text-primary me-1"></i>
                                    Data Analytics and Business Intelligence</li>
                                <li class="list-group-item heading-color"><i class="bi bi-check-lg text-primary me-1"></i>
                                    IoT Solutions</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Feature item -->
                <div class="col-sm-6 col-lg-4 mb-5 mb-sm-0">
                    <div class="card card-body text-center bg-transparent p-0">
                        <!-- Icon -->
                        <figure class="text-primary mb-4">
                            <svg width="50" height="50" viewbox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M2.47802 7.91541C2.25 8.79872 2.25 9.94639 2.25 12C2.25 14.3276 2.25 15.4914 2.582 16.4256C3.16141 18.0559 4.44414 19.3386 6.07444 19.918C7.0086 20.25 8.1724 20.25 10.5 20.25H13.5C15.8276 20.25 16.9914 20.25 17.9256 19.918C19.5559 19.3386 20.8386 18.0559 21.418 16.4256C21.75 15.4914 21.75 14.3276 21.75 12C21.75 9.94641 21.75 8.79874 21.522 7.91543L17.754 10.692C16.6402 11.5127 15.7625 12.1595 15.002 12.6178C14.2228 13.0874 13.5145 13.3926 12.7288 13.4929C12.2452 13.5547 11.7557 13.5547 11.2721 13.493C10.4864 13.3926 9.77801 13.0875 8.99883 12.618C8.23833 12.1597 7.36057 11.5129 6.24672 10.6922L2.47802 7.91541Z"
                                    fill="currentColor" fill-opacity="0.25"></path>
                                <path
                                    d="M3.0918 6.50448L7.1064 9.46247C8.25686 10.3101 9.0791 10.915 9.77299 11.3332C10.455 11.7442 10.9601 11.941 11.462 12.005C11.8195 12.0507 12.1812 12.0507 12.5387 12.005C13.0406 11.9409 13.5457 11.7441 14.2277 11.3331C14.9215 10.9149 15.7438 10.31 16.8942 9.46225L20.9081 6.50449C20.2273 5.38896 19.1791 4.52754 17.9255 4.082C16.9913 3.75 15.8275 3.75 13.4999 3.75L10.4999 3.75C8.17235 3.75 7.00855 3.75 6.07439 4.082C4.82076 4.52754 3.77264 5.38895 3.0918 6.50448Z"
                                    fill="currentColor"></path>
                            </svg>
                        </figure>
                        <!-- Title -->
                        <h6 class="mb-2">Market Analysis and Product Definition</h6>
                        <div class="mb-0 d-flex justify-content-around">
                            <ul class="list-group list-group-borderless text-start">
                                <li class="list-group-item heading-color"><i class="bi bi-check-lg text-primary me-1"></i>
                                    Identify target market</li>
                                <li class="list-group-item heading-color"><i class="bi bi-check-lg text-primary me-1"></i>
                                    Market research</li>
                                <li class="list-group-item heading-color"><i class="bi bi-check-lg text-primary me-1"></i>
                                    Competitive analysis</li>
                                <li class="list-group-item heading-color"><i class="bi bi-check-lg text-primary me-1"></i>
                                    Product positioning</li>
                                <li class="list-group-item heading-color"><i class="bi bi-check-lg text-primary me-1"></i>
                                    Product roadmap</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Feature item -->
                <div class="col-sm-6 col-lg-4 mb-5 mb-sm-0">
                    <div class="card card-body text-center bg-transparent p-0">
                        <!-- Icon -->
                        <figure class="text-primary mb-4">
                            <svg width="50" height="50" viewbox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M13 2.24609H11C8.1877 2.24609 6.78155 2.24609 5.79581 2.96228C5.47745 3.19358 5.19748 3.47354 4.96619 3.7919C4.25 4.77764 4.25 6.18379 4.25 8.99609V14.9961C4.25 17.8084 4.25 19.2145 4.96619 20.2003C5.19748 20.5186 5.47745 20.7986 5.79581 21.0299C6.78155 21.7461 8.1877 21.7461 11 21.7461H13C15.8123 21.7461 17.2184 21.7461 18.2042 21.0299C18.5226 20.7986 18.8025 20.5186 19.0338 20.2003C19.75 19.2145 19.75 17.8084 19.75 14.9961V8.99609C19.75 6.18379 19.75 4.77764 19.0338 3.7919C18.8025 3.47354 18.5226 3.19358 18.2042 2.96228C17.2184 2.24609 15.8123 2.24609 13 2.24609Z"
                                    fill="currentColor" fill-opacity="0.25"></path>
                                <path d="M8.5 11.9961H15.5M8.5 15.9961H15.5" stroke="currentColor" stroke-width="1.5"
                                    stroke-linecap="round" stroke-linejoin="round"></path>
                                <path
                                    d="M15.75 3.75V4.6C15.75 5.91241 15.75 6.56861 15.4158 7.02862C15.3078 7.17719 15.1772 7.30784 15.0286 7.41578C14.5686 7.75 13.9124 7.75 12.6 7.75H11.4C10.0876 7.75 9.43139 7.75 8.97138 7.41578C8.82281 7.30784 8.69216 7.17719 8.58422 7.02862C8.25 6.56861 8.25 5.91241 8.25 4.6V3.75H15.75Z"
                                    fill="currentColor"></path>
                            </svg>
                        </figure>
                        <!-- Title -->
                        <h6 class="mb-2">Product Development and Design</h6>
                        <div class="mb-0 d-flex justify-content-around">
                            <ul class="list-group list-group-borderless text-start">
                                <li class="list-group-item heading-color"><i class="bi bi-check-lg text-primary me-1"></i>
                                    Agile development methodology</li>
                                <li class="list-group-item heading-color"><i class="bi bi-check-lg text-primary me-1"></i>
                                    User-centered design</li>
                                <li class="list-group-item heading-color"><i class="bi bi-check-lg text-primary me-1"></i>
                                    Minimum viable product (MVP)</li>
                                <li class="list-group-item heading-color"><i class="bi bi-check-lg text-primary me-1"></i>
                                    Iterative development</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Feature item -->
                <div class="col-sm-6 col-lg-4 mb-5 mb-sm-0">
                    <div class="card card-body text-center bg-transparent p-0">
                        <!-- Icon -->
                        <figure class="text-primary mb-4">
                            <svg width="50" height="50" viewbox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M3.40004 19.9486C3.41524 20.1897 3.42283 20.3103 3.51172 20.4294C3.53619 20.4622 3.58073 20.5068 3.61353 20.5312C3.73269 20.6201 3.85325 20.6277 4.09437 20.6429C5.14741 20.7093 7.28849 20.6476 8.66268 19.2734C9.39454 18.5415 9.77757 17.5687 9.97243 16.6534C10.0108 16.473 10.03 16.3828 10.0112 16.2837C10.0053 16.253 9.99478 16.2174 9.98295 16.1884C9.94486 16.0951 9.87386 16.0241 9.73186 15.8821L8.16087 14.3111C8.01887 14.1691 7.94787 14.0981 7.85449 14.06C7.82551 14.0482 7.78998 14.0376 7.75923 14.0318C7.66016 14.0129 7.56997 14.0321 7.38958 14.0705C6.47423 14.2654 5.50139 14.6484 4.76953 15.3803C3.39534 16.7544 3.33368 18.8955 3.40004 19.9486Z"
                                    fill="currentColor"></path>
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M7.04843 13.0663L7.93731 13.1078L10.9032 16.0736L10.9447 16.9625C11.0272 18.7304 12.4846 20.1213 14.2544 20.1213C16.0138 20.1213 17.4665 18.7461 17.5627 16.9893L17.7857 12.9211C20.6676 9.51412 20.609 5.66245 20.4622 4.21821V4.21819C20.4392 3.99163 20.4276 3.87834 20.3419 3.76603C20.3181 3.73498 20.2756 3.69283 20.2443 3.6694C20.1313 3.58465 20.0178 3.57415 19.7909 3.55317C18.3545 3.42034 14.536 3.39413 11.0864 6.22543L7.02164 6.44822C5.26483 6.54451 3.88965 7.99713 3.88965 9.75657C3.88965 11.5264 5.28055 12.9837 7.04843 13.0663ZM14.8799 11.3516C14.8799 12.5942 13.8725 13.6016 12.6299 13.6016C11.3872 13.6016 10.3799 12.5942 10.3799 11.3516C10.3799 10.1089 11.3872 9.10156 12.6299 9.10156C13.8725 9.10156 14.8799 10.1089 14.8799 11.3516Z"
                                    fill="currentColor" fill-opacity="0.25"></path>
                            </svg>
                        </figure>
                        <!-- Title -->
                        <h6 class="mb-2">Market Strategy </h6>
                        <div class="mb-0 d-flex justify-content-around">
                            <ul class="list-group list-group-borderless text-start">
                                <li class="list-group-item heading-color"><i
                                        class="bi bi-check-lg text-primary me-1"></i>Launch plan</li>
                                <li class="list-group-item heading-color"><i class="bi bi-check-lg text-primary me-1"></i>
                                    Pricing strategy</li>
                                <li class="list-group-item heading-color"><i class="bi bi-check-lg text-primary me-1"></i>
                                    Sales and distribution channels</li>
                                <li class="list-group-item heading-color"><i class="bi bi-check-lg text-primary me-1"></i>
                                    Marketing and promotion</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Feature item -->
                <div class="col-sm-6 col-lg-4 mb-5 mb-sm-0">
                    <div class="card card-body text-center bg-transparent p-0">
                        <!-- Icon -->
                        <figure class="text-primary mb-4">
                            <svg width="50" height="50" viewbox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M9.99948 4.2936V4.25C9.99948 3.14543 10.8949 2.25 11.9995 2.25C13.104 2.25 13.9995 3.14543 13.9995 4.25V4.29294C16.3224 5.08517 17.9271 7.38584 17.6997 9.9788C17.5721 11.4329 18.028 12.8781 18.9669 13.9957L19.458 14.5804C20.7616 16.1323 19.6583 18.5 17.6315 18.5H14.2629H9.73662H6.36944C4.34265 18.5 3.23933 16.1323 4.54295 14.5804L5.03403 13.9957C5.97289 12.8781 6.42878 11.4329 6.30123 9.9788C6.07384 7.38656 7.67766 5.08645 9.99948 4.2936Z"
                                    fill="currentColor" fill-opacity="0.25"></path>
                                <path
                                    d="M14 19.5V19H10V19.5C10 20.6046 10.8954 21.5 12 21.5C13.1046 21.5 14 20.6046 14 19.5Z"
                                    fill="currentColor"></path>
                            </svg>
                        </figure>
                        <!-- Title -->
                        <h6 class="mb-2">Product Management</h6>
                        <div class="mb-0 d-flex justify-content-around">
                            <ul class="list-group list-group-borderless text-start">
                                <li class="list-group-item heading-color"><i class="bi bi-check-lg text-primary me-1"></i>
                                    Product lifecycle management</li>
                                <li class="list-group-item heading-color"><i class="bi bi-check-lg text-primary me-1"></i>
                                    Customer feedback</li>
                                <li class="list-group-item heading-color"><i class="bi bi-check-lg text-primary me-1"></i>
                                    Product updates and enhancements</li>
                                <li class="list-group-item heading-color"><i
                                        class="bi bi-check-lg text-primary me-1"></i>Metrics and analytics</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div> <!-- Row END -->

        </div>
    </section>
    </main>
    <!-- =======================
    Feature END -->
@endsection
