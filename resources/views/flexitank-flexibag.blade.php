@extends('master')
@section('title')
Infinity Logistics Indonesia | Flexitank / Flexibag
@endsection('title')
@section('meta')
<meta name="description" content="Cost-effective and safe Flexitank solutions for bulk liquid
transportation. We provide flexible, efficient, and environmentally-friendly shipping options for
liquids, chemicals, and food-grade products worldwide."/>
<meta name="keywords" content="flexitank, bulk liquid transportation, liquid shipping, flexible tank,
cost-effective shipping, eco-friendly shipping, liquid storage, chemical transportation, food-grade
shipping, bulk liquid logistics, container shipping, liquid cargo, sustainable shipping, freight
solutions, flexible liquid packaging"/>
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
                            <a href="/nvocc"><i class="bi bi-arrow-right-circle"></i><span>NVOCC</span></a>
                            <a href="/freight-forwarding"><i class="bi bi-arrow-right-circle"></i><span>Freight Forwarding</span></a>
                            <a href="/domestic-forwarding"><i class="bi bi-arrow-right-circle"></i><span>Domestic Forwarding</span></a>
                            <a href="/flexitank-flexibag" class="active"><i class="bi bi-arrow-right-circle"></i><span>Flexitank / Flexibag</span></a>
                            <a href="/project-logistics"><i class="bi bi-arrow-right-circle"></i><span>Project Logistics</span></a>
                        </div>
                    </div>
                    <div class="service-box">
                        <h2>Download Catalog</h2>
                        <div class="download-catalog">
                            <a href="<?php echo url('/'); ?>/pdf/IBL-Brochures.pdf"><i class="bi bi-filetype-pdf"></i><span>IBL Brochures</span></a>
                            <a href="<?php echo url('/'); ?>/pdf/IBL-Profile.pdf"><i class="bi bi-filetype-pdf"></i><span>IBL Profile</span></a>
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
                                <img src="<?php echo url('/'); ?>/img/services details/FLEXITANK FLEXIBAG1.png" class="img-fluid services-img-swipe" alt="FLEXITANK FLEXIBAG1">
                            </div>
                            <div class="swiper-slide">
                                <img src="<?php echo url('/'); ?>/img/services details/FLEXITANK FLEXIBAG2.png" class="img-fluid services-img-swipe" alt="FLEXITANK FLEXIBAG2">
                            </div>
                            <div class="swiper-slide">
                                <img src="<?php echo url('/'); ?>/img/services details/FLEXITANK FLEXIBAG3.png" class="img-fluid services-img-swipe" alt="FLEXITANK FLEXIBAG3">
                            </div>
                            <div class="swiper-slide">
                                <img src="<?php echo url('/'); ?>/img/services details/FLEXITANK FLEXIBAG4.png" class="img-fluid services-img-swipe" alt="FLEXITANK FLEXIBAG4">
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                    <h3>Flexitank / Flexibag</h3>
                    <p>
                        Flexitank is a cost effective and efficient solution for transporting
                        non hazardous bulk liquids by converting a standard 20 ft container into a
                        high capacity liquid carrier. Made from durable Polyethylene and Polypropylene,
                        our Flexitanks offer capacities ranging from 18,000 to 24,000 liters, making
                        them ideal for products like edible oils, beverages, and light chemicals. With
                        easy installation and compatibility with standard containers, they help optimize
                        space, reduce handling costs, and ensure contamination free transport.
                    </p>
                    <p>
                        As one of the core products of Infinity Bulk Logistics (IBL), our Flexitanks are
                        tailored to meet diverse customer needs. Backed by expert technical teams and
                        in house production standards, we ensure performance, safety, and reliability in
                        every shipment. IBL continues to invest in research and development to support
                        sustainable logistics solutions that are flexible and environmentally conscious.
                    </p>
                    <p>
                        While our Flexitanks are manufactured in Malaysia through a certified partner,
                        our operations are fully supported from Surabaya, Indonesia. With a local
                        logistics team and strategic access to Tanjung Perak Port, we provide responsive
                        service, fast installation, and reliable after sales support across Indonesia.
                        This combination of global manufacturing quality and local operational capability
                        ensures trusted delivery every time, everywhere.
                    </p>
                    <a href="/flexitank-flexibag-details" class="more-details-btn">More Details</a>
                </div>
            </div>
        </div>
    </section>
    <!-- /Service Details Section -->
</main>
@endsection('content')