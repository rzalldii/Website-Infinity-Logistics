<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>@yield('title')</title>
    @yield('meta')

    <!-- Favicons -->
    <link href="<?php echo url('/'); ?>/img/favicon.png" rel="icon" alt="Icon Infinity">
    <link href="<?php echo url('/'); ?>/img/apple-touch-icon.png" rel="apple-touch-icon" alt="Touch Icon Infinity">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?php echo url('/'); ?>/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo url('/'); ?>/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="<?php echo url('/'); ?>/vendor/aos/aos.css" rel="stylesheet">
    <link href="<?php echo url('/'); ?>/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="<?php echo url('/'); ?>/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="<?php echo url('/'); ?>/css/main.css" rel="stylesheet">
</head>

<!-- WhatsApp Floating Chat Widget -->
<div class="wa-hover-zone">
    <a href="https://wa.me/6282233658035" class="wa-widget" target="_blank" aria-label="WhatsApp"><i class="bi bi-whatsapp"></i></a>
</div>

<body class="index-page">
    <header id="header" class="header d-flex align-items-center sticky-top">
        <div class="container-fluid container-xl position-relative d-flex align-items-center">
            <a href="/" class="logo d-flex align-items-center me-auto">
                <img src="<?php echo url('/'); ?>/img/logo.png" alt="Logo Infinity">
                <h1 class="sitename">Infinity Logistics Indonesia</h1>
            </a>
            <nav id="navmenu" class="navmenu">
                <ul>
                    @yield('navigation')
                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>
            <!-- <a class="btn-getstarted" href="#">Login</a> -->
        </div>
    </header>

    @yield('content')

    <footer id="footer" class="footer">
        <div class="container footer-top">
            <div class="row gy-4">
                <div class="col-lg-3 col-md-6 footer-about">
                    <h3 class="d-flex align-items-center">
                        Head Office
                    </h3>
                    <div class="footer-contact">
                        <p>
                            Plaza BRI, 12th Floor, Suite 1206,
                            Jl. Jendral Basuki Rahmad 122,
                            Surabaya City, East Java, Indonesia
                        </p>
                        <p class="mt-3"><strong><i class="bi bi-telephone-fill"></i> Call :</strong> <span>+62-31-549-2926</span></p>
                        <p><strong><i class="bi bi-envelope-fill"></i> Email :</strong> <span>cssurabaya@infinity-sby.com</span></p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 footer-about">
                    <h3 class="d-flex align-items-center">
                        Warehouse
                    </h3>
                    <div class="footer-contact">
                        <p>
                            Jl. Pergudangan Margomulyo Permai J10,
                            Surabaya City, East Java, Indonesia
                        </p>
                        <p class="mt-3"><strong><i class="bi bi-telephone-fill"></i> Call :</strong> <span>+62-81-938-685-643</span></p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 footer-links">
                    <h4>Useful Links</h4>
                    <ul>
                        <li><i class="bi bi-chevron-right"></i><a href="/#about">About</a></li>
                        <li><i class="bi bi-chevron-right"></i><a href="/#services">Services</a></li>
                        <li><i class="bi bi-chevron-right"></i><a href="/#contact">Contact</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="/terms-and-conditions">Terms and Conditions</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="/privacy-policy">Privacy Policy</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-3 footer-links">
                    <h4>Core Business</h4>
                    <ul>
                        <li><i class="bi bi-chevron-right"></i><a href="/nvocc">NVOCC</a></li>
                        <li><i class="bi bi-chevron-right"></i><a href="/freight-forwarding">Freight Forwarding</a></li>
                        <li><i class="bi bi-chevron-right"></i><a href="/domestic-forwarding">Domestic Forwarding</a></li>
                        <li><i class="bi bi-chevron-right"></i><a href="/flexitank-flexibag">Flexitank / Flexibag</a></li>
                        <li><i class="bi bi-chevron-right"></i><a href="/project-logistics">Project Logistics</a></li>
                    </ul>
                </div>
                <!-- <div class="col-lg-3 col-md-12">
                    <h4>Social Media</h4>
                    <div class="social-links d-flex">
                        <a href="https://www.linkedin.com/company/infinity-logistics-and-transport" aria-label="LinkedIn" class="linkedin"><i class="bi bi-linkedin"></i></a>
                        <a href="https://www.facebook.com/infinitylogisticsandtransport" aria-label="Facebook" class="facebook"><i class="bi bi-facebook"></i></a>
                        <a href="https://www.instagram.com/" aria-label="Instagram" class="instagram"><i class="bi bi-instagram"></i></a>
                        <a href="https://www.tiktok.com/" aria-label="TikTok" class="tiktok"><i class="bi bi-tiktok"></i></a>
                        <a href="https://x.com/" aria-label="TwitterX" class="twitter-x"><i class="bi bi-x-twitter"></i></a>
                        <a href="https://www.youtube.com/" aria-label="YouTube" class="youtube"><i class="bi bi-youtube"></i></a>
                    </div>
                    <div class="footer-logo">
                        <img src="<?php echo url('/'); ?>/img/infinity.png" class="img-fluid" alt="Big Logo Infinity">
                    </div>
                </div> -->
            </div>
        </div>
        <div class="container copyright text-center mt-4">
            <p><span>Copyright </span>©  <span>2025 </span><strong class="px-1 sitename">INFINITY LOGISTICS INDONESIA</strong> <span>All Rights Reserved.</span></p>
        </div>
    </footer>

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center" aria-label="Scroll"><i class="bi bi-shift-fill"></i></a>

    <!-- Preloader -->
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="<?php echo url('/'); ?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo url('/'); ?>/vendor/php-email-form/validate.js"></script>
    <script src="<?php echo url('/'); ?>/vendor/aos/aos.js"></script>
    <script src="<?php echo url('/'); ?>/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="<?php echo url('/'); ?>/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="<?php echo url('/'); ?>/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
    <script src="<?php echo url('/'); ?>/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="<?php echo url('/'); ?>/vendor/swiper/swiper-bundle.min.js"></script>

    <!-- Main JS File -->
    <script src="<?php echo url('/'); ?>/js/main.js"></script>

    <script>
        const waWidget = document.querySelector('.wa-widget');
        window.addEventListener('scroll', () => {
            if (window.scrollY > 100) {
            waWidget.classList.add('show');
            } else {
            waWidget.classList.remove('show');
            }
        });
    </script>
</body>

</html>