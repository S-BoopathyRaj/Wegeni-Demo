<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Meta Tags -->
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<!-- Dynamic Title -->
    <title>{{ $page_title ?? 'Default Title' }}</title>
    
	<!-- Dynamic Meta Tags -->
    <meta name="description" content="{{ $meta_description ?? 'Default Description' }}">
    <meta name="keywords" content="{{ $meta_keywords ?? 'Default Keywords' }}">
    <link rel="canonical" href="{{ $url ?? url()->current() }}" />
	
	<!-- Open Graph Meta Tags -->
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="{{ $page_title ?? 'Default Title' }}" />
    <meta property="og:description" content="{{ $meta_description ?? 'Default Description' }}" />
    <meta property="og:url" content="{{ $url ?? url()->current() }}" />
    <meta property="og:site_name" content="{{ $page_title ?? 'Default Title' }}" />
    <meta property="article:modified_time" content="2022-09-27T15:35:30+00:00" />
    <meta property="og:image" content="{{ $image ?? asset('default-image.png') }}" />
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="600" />
    <meta property="og:image:type" content="{{ $image_type ?? 'image/png' }}" />
    
	<!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="{{ $page_title ?? 'Default Title' }}" />
    <meta name="twitter:description" content="{{ $meta_description ?? 'Default Description' }}" />
    <meta name="twitter:image" content="{{ $image ?? asset('default-image.png') }}" />
    
	<!-- Domain Verification -->
    <meta name="p:domain_verify" content="c30c835ebc2e62a9b16b0505c88ffda5" />

	<!-- Dark Mode Script -->
	<script>
		const storedTheme = localStorage.getItem('theme');
		const getPreferredTheme = () => {
			return storedTheme || (window.matchMedia('(prefers-color-scheme: light)').matches ? 'light' : 'dark');
		};
		const setTheme = (theme) => {
			if (theme === 'auto' && window.matchMedia('(prefers-color-scheme: dark)').matches) {
				document.documentElement.setAttribute('data-bs-theme', 'dark');
			} else {
				document.documentElement.setAttribute('data-bs-theme', theme);
			}
		};
		setTheme(getPreferredTheme());
		window.addEventListener('DOMContentLoaded', () => {
			const el = document.querySelector('.theme-icon-active');
			if (el) {
				const showActiveTheme = (theme) => {
					const activeThemeIcon = document.querySelector('.theme-icon-active use');
					const btnToActive = document.querySelector(`[data-bs-theme-value="${theme}"]`);
					const svgOfActiveBtn = btnToActive.querySelector('.mode-switch use').getAttribute('href');
					document.querySelectorAll('[data-bs-theme-value]').forEach(element => element.classList.remove('active'));
					btnToActive.classList.add('active');
					activeThemeIcon.setAttribute('href', svgOfActiveBtn);
				};
				window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', () => {
					if (storedTheme !== 'light' && storedTheme !== 'dark') {
						setTheme(getPreferredTheme());
					}
				});
				showActiveTheme(getPreferredTheme());
				document.querySelectorAll('[data-bs-theme-value]').forEach(toggle => {
					toggle.addEventListener('click', () => {
						const theme = toggle.getAttribute('data-bs-theme-value');
						localStorage.setItem('theme', theme);
						setTheme(theme);
						showActiveTheme(theme);
					});
				});
			}
		});
	</script>

	<!-- Favicon -->
	<link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}">

	<!-- Google Fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Puvi:wght@400;500;600;700&display=swap" rel="stylesheet">

	<!-- Plugins CSS -->
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/font-awesome/css/all.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}">

	<!-- Theme CSS -->
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">

	<!-- Google Tag -->
	{{-- Uncomment the following to enable Google Tag --}}
	{{-- 
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-DEXFC3C67M"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());
		gtag('config', 'G-DEXFC3C67M');
	</script>
	--}}
</head>
