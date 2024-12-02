<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>@isset($page_title) {{ $page_title }} @endisset</title>
    <meta name="description" content="@isset($meta_description) {{ $meta_description }} @endisset">
    <meta name="keywords" content="@isset($meta_keywords) {{ $meta_keywords }} @endisset">
    <link rel="canonical" href="@isset($url) {{ $url }} @endisset" />

    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="@isset($page_title) {{ $page_title }} @endisset" />
    <meta property="og:description" content="@isset($meta_description) {{ $meta_description }} @endisset" />
    <meta property="og:url" content="@isset($url) {{ $url }} @endisset" />
    <meta property="og:site_name" content="@isset($page_title) {{ $page_title }} @endisset" />
    <meta property="article:modified_time" content="2022-09-27T15:35:30+00:00" />
    <meta property="og:image" content="@isset($image) {{ $image }} @endisset" />
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="600" />
    <meta property="og:image:type" content="@isset($image) {{ $image }} @endisset" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="@isset($page_title) {{ $page_title }} @endisset" />
    <meta name="twitter:description" content="@isset($meta_description) {{ $meta_description }} @endisset" />
    <meta name="twitter:image" content="@isset($image) {{ $image }} @endisset" />
    <meta name="p:domain_verify" content="c30c835ebc2e62a9b16b0505c88ffda5" />

    <!-- Favicons -->
    <link href="{{ asset('assets/images/favicon.png') }}" rel="icon">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/glightbox/css/glightbox.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Variables CSS Files. Uncomment your preferred color scheme -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <!-- <link href="{{ asset('assets/css/variables-blue.css') }}" rel="stylesheet"> -->
    <!-- <link href="{{ asset('assets/css/variables-green.css') }}" rel="stylesheet"> -->
    <!-- <link href="{{ asset('assets/css/variables-orange.css') }}" rel="stylesheet"> -->
    <!-- <link href="{{ asset('assets/css/variables-purple.css') }}" rel="stylesheet"> -->
    <!-- <link href="{{ asset('assets/css/variables-red.css') }}" rel="stylesheet"> -->
    <!-- <link href="{{ asset('assets/css/variables-pink.css') }}" rel="stylesheet"> -->

    <!-- Facebook Pixel Code (optional) -->
    <!-- Add Facebook Pixel if required -->

    <!-- Google Tag Manager -->
    <script>
        (function(w,d,s,l,i){
            w[l]=w[l]||[];
            w[l].push({'gtm.start': new Date().getTime(),event:'gtm.js'});
            var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';
            j.async=true;j.src='https://www.googletagmanager.com/gtm.js?id='+i+dl;
            f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-53MPB3B2');
    </script>

    <!-- Structured Data (JSON-LD) -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Business",
        "@id": "",
        "image": "https://wegeni.com/logo.png",
        "Organization": "WeGeni",
        "name": "WeGeni",
        "url": "https://wegeni.com",
        "sameAs": [
            "https://www.instagram.com/wegeni",
            "https://www.linkedin.com/company/wegeni",
            "https://twitter.com/wegeni"
        ]
    }
    </script>

    <!-- Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-DJV6YPPX3C"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){ dataLayer.push(arguments); }
        gtag('js', new Date());
        gtag('config', 'G-DJV6YPPX3C');
    </script>

</head>
