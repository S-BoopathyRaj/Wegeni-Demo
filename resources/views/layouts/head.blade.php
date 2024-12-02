<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <!-- Dynamic Title -->
    <title>{{ $page_title ?? '' }}</title>

    <!-- Meta Descriptions -->
    <meta name="description" content="{{ $meta_description ?? '' }}">
    <meta name="keywords" content="{{ $meta_keywords ?? '' }}">
    <link rel="canonical" href="{{ $url ?? '' }}" />

    <!-- Open Graph Tags -->
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="{{ $page_title ?? '' }}" />
    <meta property="og:description" content="{{ $meta_description ?? '' }}" />
    <meta property="og:url" content="{{ $url ?? '' }}" />
    <meta property="og:site_name" content="{{ $page_title ?? '' }}" />
    <meta property="article:modified_time" content="2022-09-27T15:35:30+00:00" />
    <meta property="og:image" content="{{ $image ?? '' }}" />
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="600" />
    <meta property="og:image:type" content="{{ $image ?? '' }}" />

    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="{{ $page_title ?? '' }}" />
    <meta name="twitter:description" content="{{ $meta_description ?? '' }}" />
    <meta name="twitter:image" content="{{ $image ?? '' }}" />

    <meta name="p:domain_verify" content="c30c835ebc2e62a9b16b0505c88ffda5" />

    <!-- Favicons -->
    <link href="{{ asset('assets/images/favicon.png') }}" rel="icon">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/glightbox/css/glightbox.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/font-awesome/css/all.min.css') }}" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

    <!-- Optional Variables CSS (Comment or uncomment based on need) -->
    <!-- <link href="{{ asset('assets/css/variables-blue.css') }}" rel="stylesheet"> -->
    <!-- <link href="{{ asset('assets/css/variables-green.css') }}" rel="stylesheet"> -->
    <!-- <link href="{{ asset('assets/css/variables-orange.css') }}" rel="stylesheet"> -->
    <!-- <link href="{{ asset('assets/css/variables-purple.css') }}" rel="stylesheet"> -->
    <!-- <link href="{{ asset('assets/css/variables-red.css') }}" rel="stylesheet"> -->
    <!-- <link href="{{ asset('assets/css/variables-pink.css') }}" rel="stylesheet"> -->

    <!-- Facebook Pixel Code -->
    {{-- 
    <script>
    ! function(f, b, e, v, n, t, s) {
        if (f.fbq) return;
        n = f.fbq = function() {
            n.callMethod ? n.callMethod.apply(n, arguments) : n.queue.push(arguments)
        };
        if (!f._fbq) f._fbq = n;
        n.push = n;
        n.loaded = !0;
        n.version = '2.0';
        n.queue = [];
        t = b.createElement(e);
        t.async = !0;
        t.src = v;
        s = b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t, s)
    }(window, document, 'script', 'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '849344579049783');
    fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
        src="https://www.facebook.com/tr?id=849344579049783&ev=PageView&noscript=1" /></noscript>
    --}}
    <!-- End Facebook Pixel Code -->

    <!-- Google Tag Manager -->
    <script>
    (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start': new Date().getTime(),event:'gtm.js'});
    var f=d.getElementsByTagName(s)[0], j=d.createElement(s), dl=l!='dataLayer'?'&l='+l:''; j.async=true;
    j.src='https://www.googletagmanager.com/gtm.js?id='+i+dl; f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-53MPB3B2');
    </script>
    
    <!-- JSON-LD Schema -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Business",
        "@id": "",
        "image": "https://wegeni.com/logo.png",
        "name": "WeGeni",
        "url": "https://wegeni.com",
        "sameAs": [
            "https://www.instagram.com/wegeni",
            "https://www.linkedin.com/company/wegeni",
            "https://twitter.com/wegeni"
        ]
    }
    </script>

    <!-- Google Tag -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-DJV6YPPX3C"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
      gtag('config', 'G-DJV6YPPX3C');
    </script>

</head>
