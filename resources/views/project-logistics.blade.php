@extends('master')
@section('title')
Infinity Logistics Indonesia | Project Logistics
@endsection('title')
@section('meta')
<meta name="description" content="Specialized project logistics services for complex and oversized
shipments. We offer tailored solutions to manage, transport, and deliver large-scale projects safely,
efficiently, and on time."/>
<meta name="keywords" content="project logistics, project cargo, heavy lift transportation, oversized
cargo, logistics solutions, large-scale project shipping, industrial logistics, project freight
forwarding, supply chain management, transport solutions, custom logistics, engineering projects,
global project shipping, specialized cargo, turnkey logistics"/>
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
                            <a href="/flexitank-flexibag"><i class="bi bi-arrow-right-circle"></i><span>Flexitank / Flexibag</span></a>
                            <a href="/project-logistics" class="active"><i class="bi bi-arrow-right-circle"></i><span>Project Logistics</span></a>
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
                                <img src="<?php echo url('/'); ?>/img/services details/PROJECT LOGISTICS1.png" class="img-fluid services-img-swipe" alt="PROJECT LOGISTICS1">
                            </div>
                            <div class="swiper-slide">
                                <img src="<?php echo url('/'); ?>/img/services details/PROJECT LOGISTICS2.png" class="img-fluid services-img-swipe" alt="PROJECT LOGISTICS2">
                            </div>
                            <div class="swiper-slide">
                                <img src="<?php echo url('/'); ?>/img/services details/PROJECT LOGISTICS3.png" class="img-fluid services-img-swipe" alt="PROJECT LOGISTICS3">
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                    <h3>Project Logistics</h3>
                    <p>
                        Project logistics involves the planning, transportation, and management of
                        containers used for heavy, oversized, or complex cargo, which is essential in
                        large scale projects like power plants, oil and gas developments, and renewable
                        energy infrastructure. Selecting the right container type is critical due to the
                        cargo is size and shape. A thorough cargo survey helps determine accurate
                        dimensions and weight, and a detailed loading plan, including lashing and
                        blocking, is essential for safe transport. Special permits and documentation,
                        like Out of Gauge (OOG) declarations, are often required.
                    </p>
                    <p>
                        Multimodal transportation, combining trucks, ships, and trains, is typically
                        used to efficiently move such project cargo. Close coordination between the
                        technical and logistics teams ensures safety and operational efficiency
                        throughout the process. This requires careful planning of every aspect of the
                        transportation journey.
                    </p>
                    <p>
                        Surabaya is well positioned to operate in project logistics due to its strategic
                        location and robust infrastructure. The Port of Tanjung Perak, a key gateway for
                        international trade, along with access to roads, railways, and airports, enables
                        smooth multimodal transportation. With the city is established logistics network
                        and experienced companies, Surabaya can effectively support the management of
                        complex project cargo for large industrial and infrastructure projects.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- /Service Details Section -->
</main>
@endsection('content')