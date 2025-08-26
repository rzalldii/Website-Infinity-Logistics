@extends('master')
@section('title')
Infinity Logistics Indonesia | Freight Forwarding
@endsection('title')
@section('meta')
<meta name="description" content="Efficient freight forwarding services for global shipping needs. We
handle all aspects of logistics, ensuring secure, timely, and cost-effective delivery of goods worldwide
by land, sea, or air."/>
<meta name="keywords" content="freight forwarding, logistics services, international shipping, cargo
transportation, shipping solutions, global freight, ocean freight, air freight, customs clearance,
supply chain management, cargo handling, logistics provider, door-to-door delivery, shipping company,
import export, freight services"/>
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
                            <a href="/freight-forwarding" class="active"><i class="bi bi-arrow-right-circle"></i><span>Freight Forwarding</span></a>
                            <a href="/domestic-forwarding"><i class="bi bi-arrow-right-circle"></i><span>Domestic Forwarding</span></a>
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
                                <img src="<?php echo url('/'); ?>/img/services details/FREIGHT FORWARDING1.png" class="img-fluid services-img-swipe" alt="FREIGHT FORWARDING1">
                            </div>
                            <div class="swiper-slide">
                                <img src="<?php echo url('/'); ?>/img/services details/FREIGHT FORWARDING2.png" class="img-fluid services-img-swipe" alt="FREIGHT FORWARDING2">
                            </div>
                            <div class="swiper-slide">
                                <img src="<?php echo url('/'); ?>/img/services details/FREIGHT FORWARDING3.png" class="img-fluid services-img-swipe" alt="FREIGHT FORWARDING3">
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                    <h3>Freight Forwarding</h3>
                    <p>
                        We offer integrated freight forwarding services, covering both ocean and air
                        transport, to facilitate international import and export activities for a wide
                        range of industries. Backed by our local transport network and modern logistics
                        facilities, we provide door to door delivery solutions combined with customs
                        documentation and regulatory compliance. Our scope of services includes Cargo
                        space arrangement with shipping lines and airlines, Transportation, loading,
                        and terminal coordination, Customs clearance and permit processing, Coordination
                        with overseas partners for seamless cargo movement.
                    </p>
                    <p>
                        Surabaya Branch Specialized Forwarding Division. Our Surabaya branch serves as a
                        key operational hub, offering specialized forwarding services to meet specific
                        cargo requirements:
                    </p>
                    <ul>
                        <li><i class="bi bi-check-circle"></i> <span>LCL (Less than Container Load): Efficient consolidation service for cost effective shipping.</span></li>
                        <li><i class="bi bi-check-circle"></i> <span>Air Freight: Rapid and secure transportation for time sensitive cargo.</span></li>
                        <li><i class="bi bi-check-circle"></i> <span>Reefer Cargo: Expertise in handling temperature sensitive goods, ensuring cold chain integrity.</span></li>
                        <li><i class="bi bi-check-circle"></i> <span>Isotank Handling: Safe and compliant transportation of bulk liquid cargo in accordance with international safety standards.</span></li>
                    </ul>
                    <p>
                        Through our expertise, network, and commitment to operational excellence, we
                        deliver integrated logistics solutions either as part of a comprehensive supply
                        chain service or as stand alone forwarding support.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- /Service Details Section -->
</main>
@endsection('content')