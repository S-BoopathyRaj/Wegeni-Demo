<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin | Your App</title>
    <meta name="csrf-token" content="XGHH30R6Ece3fpjnQ1v9nEKBBVa33ptxNoHHiYFx">
    <link href="{{ asset('storage/general/favicon.png') }}" rel="icon shortcut">
    <meta property="og:image" content="{{asset('storage/general/favicon.png')}}">
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
    </style>

    <link media="all" type="text/css" rel="stylesheet" href="{{asset('vendor/core/core/base/css/core.css')}}">
    <link media="all" type="text/css" rel="stylesheet" href="{{asset('vendor/core/plugins/language/css/language.css')}}">
    <link media="all" type="text/css" rel="stylesheet" href="{{asset('vendor/core/packages/slug/css/slug.css')}}">
    <script src="{{asset('vendor/core/core/base/libraries/jquery.min.js')}}"></script>
    <script src="{{asset('vendor/core/core/base/js/app.js')}}"></script>
    <script>
        window.siteUrl = "http://127.0.0.1:8000";
    </script>
</head>

<body class="page-sidebar-closed-hide-logo page-content-white page-container-bg-solid" data-bs-theme="dark">
    @yield('content')
</body>

</html>
