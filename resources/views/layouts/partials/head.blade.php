<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="csrf-token" content="{{ csrf_token() }}">

<title>@yield('title', 'Infinity Logistics Indonesia')</title>

<!-- Bing Webmaster Tools -->
<meta name="msvalidate.01" content="87838AA91B500CE846EA59FACB669B69" />

<!-- Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-7GKDNCWX4R"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag() { dataLayer.push(arguments); }
    gtag('js', new Date());
    gtag('config', 'G-7GKDNCWX4R');
</script>

<!-- SEO -->
<meta name="description" content="@yield('meta_description', __('messages.home_meta_description'))">
<link rel="canonical" href="@yield('canonical', url()->current())">

<!-- Open Graph -->
<meta property="og:title" content="@yield('title', 'Infinity Logistics Indonesia')">
<meta property="og:description" content="@yield('meta_description', __('messages.home_meta_description'))">
<meta property="og:url" content="@yield('canonical', url()->current())">
<meta property="og:image" content="{{ url('img/hero-img.webp') }}">
<meta property="og:type" content="website">
<meta property="og:site_name" content="Infinity Logistics Indonesia">

<!-- Favicons -->
<link href="{{ asset('img/favicon.webp') }}" rel="icon" alt="Icon Infinity">
<link href="{{ asset('img/apple-touch-icon.webp') }}" rel="apple-touch-icon" alt="Touch Icon Infinity">

<!-- Fonts -->
<link href="https://fonts.googleapis.com" rel="preconnect">
<link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
<link
    href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
    rel="stylesheet" media="print" onload="this.media='all'">
<link
    href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet" media="print" onload="this.media='all'">
<link
    href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap"
    rel="stylesheet" media="print" onload="this.media='all'">

<!-- Preload Styles -->
<link href="{{ asset('vendor/aos/css/aos.css') }}" rel="preload" as="style">
<link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="preload" as="style">
<link href="{{ asset('vendor/bootstrap-icons/bootstrap-icons.min.css') }}" rel="preload" as="style">
<link href="{{ asset('vendor/glightbox/css/glightbox.min.css') }}" rel="preload" as="style">
<link href="{{ asset('vendor/sweetalert2/css/sweetalert2.min.css') }}" rel="preload" as="style">
<link href="{{ asset('vendor/swiper/css/swiper-bundle.min.css') }}" rel="preload" as="style">
<link href="{{ asset('css/main.css') }}" rel="preload" as="style">

<!-- Stylesheets -->
<link href="{{ asset('vendor/aos/css/aos.css') }}" rel="stylesheet">
<link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ asset('vendor/bootstrap-icons/bootstrap-icons.min.css') }}" rel="stylesheet">
<link href="{{ asset('vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
<link href="{{ asset('vendor/sweetalert2/css/sweetalert2.min.css') }}" rel="stylesheet">
<link href="{{ asset('vendor/swiper/css/swiper-bundle.min.css') }}" rel="stylesheet">
<link href="{{ asset('css/main.css') }}" rel="stylesheet">

@stack('style')