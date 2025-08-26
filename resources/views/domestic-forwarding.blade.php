@extends('master')
@section('title')
Infinity Logistics Indonesia | Domestic Forwarding
@endsection('title')
@section('meta')
<meta name="description" content="Reliable domestic shipping services for fast and secure delivery
across the country. We offer efficient logistics solutions for timely and cost-effective transportation
of goods within national borders."/>
<meta name="keywords" content="domestic shipping, national shipping, domestic freight, local logistics,
cargo transportation, domestic delivery, shipping services, freight services, nationwide shipping,
shipping company, domestic freight forwarding, local delivery solutions, secure shipping, fast shipping,
transportation services"/>
@endsection('meta')
@section('navigation')
<li><a href="/">Home</a></li>
<li><a href="/#about">About</a></li>
<li class="dropdown"><a href="/#services" class="active"><span>Services</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
    <ul>
        <li><a href="/nvocc">NVOCC</a></li>
        <li><a href="/freight-forwarding">Freight Forwarding</a></li>
        <li><a href="/domestic-forwarding">Domestic Forwarding</a></li>
        <li><a href="/flexitank-flexibag">Flexitank / Flexibag</a></li>
        <li><a href="/project-logistics">Project Logistics</a></li>
    </ul>
</li>
<li><a href="/#contact">Contact</a></li>
@endsection('navigation')
@section('content')
<main class="main">
    <!-- Page Title -->
    <div class="page-title">
        <div class="container d-lg-flex justify-content-between align-items-center">
            <h1 class="mb-2 mb-lg-0">Service Details</h1>
        </div>
    </div>
    <!-- End Page Title -->
    <!-- Service Details Section -->
    <section id="service-details" class="service-details section">
        <div class="container">
            <div class="row gy-5">
                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-box">
                        <h2>Services List</h2>
                        <div class="services-list">
                            <a href="nvocc"><i class="bi bi-arrow-right-circle"></i><span>NVOCC</span></a>
                            <a href="/freight-forwarding"><i class="bi bi-arrow-right-circle"></i><span>Freight Forwarding</span></a>
                            <a href="/domestic-forwarding" class="active"><i class="bi bi-arrow-right-circle"></i><span>Domestic Forwarding</span></a>
                            <a href="/flexitank-flexibag"><i class="bi bi-arrow-right-circle"></i><span>Flexitank / Flexibag</span></a>
                            <a href="/project-logistics"><i class="bi bi-arrow-right-circle"></i><span>Project Logistics</span></a>
                        </div>
                    </div>
                    <div class="service-box">
                        <h2>Download Catalog</h2>
                        <div class="download-catalog">
                            <a href="<?php echo url('/'); ?>/pdf/Company-Profile-INF.pdf"><i class="bi bi-filetype-pdf"></i><span>Company Profile INF</span></a>
                        </div>
                    </div>
                    <div class="help-box d-flex flex-column justify-content-center align-items-center">
                        <i class="bi bi-headset help-icon"></i>
                        <h2>Have a Question?</h2>
                        <p class="d-flex align-items-center mt-2 mb-0"><i class="bi bi-telephone me-2"></i> <span>+62-31-549-2926</span></p>
                        <p class="d-flex align-items-center mt-1 mb-0"><i class="bi bi-envelope me-2"></i> <span>cssurabaya@infinity-sby.com</span></p>
                    </div>
                </div>
                <div class="col-lg-8 ps-lg-5" data-aos="fade-up" data-aos-delay="200">
                    <div class="service-details-slider swiper init-swiper">
                        <script type="application/json" class="swiper-config">
                            {
                                "loop": true,
                                "speed": 600,
                                "autoplay": {
                                    "delay": 5000
                                },
                                "slidesPerView": "auto",
                                "pagination": {
                                    "el": ".swiper-pagination",
                                    "type": "bullets",
                                    "clickable": true
                                }
                            }
                        </script>
                        <div class="swiper-wrapper align-items-center">
                            <div class="swiper-slide">
                                <img src="<?php echo url('/'); ?>/img/services details/DOMESTIC FORWARDING1.png" class="img-fluid services-img-swipe" alt="DOMESTIC FORWARDING1">
                            </div>
                            <div class="swiper-slide">
                                <img src="<?php echo url('/'); ?>/img/services details/DOMESTIC FORWARDING2.png" class="img-fluid services-img-swipe" alt="DOMESTIC FORWARDING2">
                            </div>
                            <div class="swiper-slide">
                                <img src="<?php echo url('/'); ?>/img/services details/DOMESTIC FORWARDING3.png" class="img-fluid services-img-swipe" alt="DOMESTIC FORWARDING3">
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                    <h3>Domestic Forwarding</h3>
                    <p>
                        Domestic freight forwarding refers to the end to end planning, coordination and
                        execution of cargo transportation within a single country. Unlike international
                        freight forwarding which involves complex customs procedures, cross border
                        regulations, and overseas logistics domestic freight forwarding focuses entirely
                        on the movement of goods across local and regional networks.
                    </p>
                    <p>
                        One of its key advantages is efficiency both in terms of time and cost. Domestic
                        shipments are typically faster and more economical compared to international
                        transit, making them an ideal option for businesses seeking reliable,
                        short to mid distance delivery solutions. The service offers flexible
                        transportation modes, including road, rail, sea, and air each tailored to meet
                        specific cargo requirements, lead times, and budget constraints. This multimodal
                        flexibility allows companies to optimize logistics performance based on their
                        supply chain needs.
                    </p>
                    <p>
                        Furthermore, domestic freight forwarding is often part of a fully integrated
                        logistics offering. It may include value added services such as real time
                        cargo tracking, cargo insurance, warehousing, and inventory management, all of
                        which contribute to a seamless, transparent, and reliable delivery process
                        within national borders. Whether supporting daily distribution flows, regional
                        retail delivery, or time critical industrial cargo, domestic freight forwarding
                        ensures that goods move smoothly from origin to destination efficiently and with
                        full visibility.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- /Service Details Section -->
</main>
@endsection('content')