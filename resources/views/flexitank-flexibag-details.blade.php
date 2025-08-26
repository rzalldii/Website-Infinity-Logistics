@extends('master')
@section('title')
Infinity Logistics Indonesia | Flexitank / Flexibag Details
@endsection('title')
@section('meta')
<meta name="description" content="Explore the advantages of Flexitank solutions for bulk liquid
transportation. Learn about our safe, cost-effective, and eco-friendly options for shipping liquids,
chemicals, and food-grade products in flexible, large-volume containers."/>
<meta name="keywords" content="flexitank details, flexitank solutions, bulk liquid transportation,
flexible tank shipping, liquid cargo, cost-effective shipping, eco-friendly packaging, liquid storage
solutions, chemical transport, food-grade flexitank, bulk liquid logistics, liquid shipping container,
sustainable liquid transport, flexitank shipping advantages"/>
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
            <div class="d-flex align-items-center">
                <a href="/flexitank-flexibag" class="more-details-btn me-3" aria-label="Flexitank Details">
                    <i class="bi bi-arrow-left"></i>
                </a>
                <h1 class="mb-0">Flexitank / Flexibag Details</h1>
            </div>
        </div>
    </div>
    <!-- End Page Title -->
    <!-- Flexitank Details Section -->
    <section id="flexitank-details" class="flexitank-details section">
        <div class="container">
            <div class="blog-card row align-items-center g-4">
                <div class="flexitank-details-slider swiper init-swiper col-lg-6">
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
                            <img src="<?php echo url('/'); ?>/img/flexitank details/MULTILAYER1.png" class="img-fluid rounded services-img-swipe" alt="MULTILAYER1">
                        </div>
                        <div class="swiper-slide">
                            <img src="<?php echo url('/'); ?>/img/flexitank details/MULTILAYER2.png" class="img-fluid rounded services-img-swipe" alt="MULTILAYER2">
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
                <div class="col-lg-6">
                    <h2>MULTILAYER</h2>
                    <p>
                        Our Flexitanks are fabricated from FDA approved food grade Polyethylene and
                        Polypropylene which are suitable for a wide range of non hazardous liquid cargo.
                    </p>
                    <ul>
                        <li><i class="bi bi-check-circle"></i> <span>Beta Tank</span></li>
                    </ul>
                    <p>
                        A 20 ft bulk container liner made from 2 layers of 125 micron Polyethylene
                        sewn into a woven Polypropylene outer.
                    </p>
                    <ul>
                        <li><i class="bi bi-check-circle"></i> <span>Gamma Tank</span></li>
                    </ul>
                    <p>
                        A 20 ft bulk container liner made from 3 layers of 125 micron Polyethylene
                        sewn into a woven Polypropylene outer.
                    </p>
                    <ul>
                        <li><i class="bi bi-check-circle"></i> <span>Delta Tank</span></li>
                    </ul>
                    <p>
                        A 20 ft bulk container liner made from 4 layers of 125 micron Polyethylene
                        sewn into a woven Polypropylene outer.
                    </p>
                    <ul>
                        <li><i class="bi bi-check-circle"></i> <span>Epsilon Tank</span></li>
                    </ul>
                    <p>
                        A 20 ft bulk container liner made of 5 layers (4 layers of 125 micron
                        Polyethylene and 1 of layer Barrier Film of 100 micron EVOH Liner) sewn into
                        a woven Polypropylene outer.
                    </p>
                </div>
            </div>
            <div class="blog-card row align-items-center g-4">
                <div class="flexitank-details-slider swiper init-swiper col-lg-6">
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
                            <img src="<?php echo url('/'); ?>/img/flexitank details/PP WOVEN1.png" class="img-fluid rounded services-img-swipe" alt="PP WOVEN1">
                        </div>
                        <div class="swiper-slide">
                            <img src="<?php echo url('/'); ?>/img/flexitank details/PP WOVEN2.png" class="img-fluid rounded services-img-swipe" alt="PP WOVEN2">
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
                <div class="col-lg-6">
                    <h2>PP WOVEN & FILM</h2>
                    <p>
                        A PP Woven is a Flexitank is outer layer which helps to support the Flexitank
                        and stabilizes the liquid dynamics. The Film is manufactured from food
                        approved polymers using monomers listed as approved stated substances in SI 3i45
                        and additives listed approves in EU directive 93/3/EC.
                    </p>
                    <ul>
                        <li><i class="bi bi-check-circle"></i> <span>Polyethylene Liner</span></li>
                    </ul>
                    <p>
                        Fabricated from FDA approved food grade 5 layer co-extruded tubular film made
                        from a blend of resins based around polyethylene.
                    </p>
                    <ul>
                        <li><i class="bi bi-check-circle"></i> <span>EVOH Liner</span></li>
                    </ul>
                    <p>
                        Specially coated Ethyl Vinyl Alcohol based film that provides good gas barrier
                        properties.
                    </p>
                </div>
            </div>
            <div class="blog-card row align-items-center g-4">
                <div class="flexitank-details-slider swiper init-swiper col-lg-6">
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
                            <img src="<?php echo url('/'); ?>/img/flexitank details/VALVE1.png" class="img-fluid rounded services-img-swipe" alt="VALVE1">
                        </div>
                        <div class="swiper-slide">
                            <img src="<?php echo url('/'); ?>/img/flexitank details/VALVE2.png" class="img-fluid rounded services-img-swipe" alt="VALVE2">
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
                <div class="col-lg-6">
                    <h2>VALVE</h2>
                    <p>
                        A Flexitank valve is a secure connection point used for filling and discharging
                        liquids. It ensures a tight seal to prevent leaks and contamination during the
                        loading and unloading process.
                    </p>
                    <ul>
                        <li><i class="bi bi-check-circle"></i> <span>3" PP Butterfly Flange Valve With Gland</span></li>
                    </ul>
                    <p>
                        One filling flange - 3”diameter which is attached to main body by the 360 degree
                        impact welded seal.
                    </p>
                    <ul>
                        <li><i class="bi bi-check-circle"></i> <span>3" PP Butterfly Flange Compression Valve</span></li>
                    </ul>
                    <p>
                        Fabricated from food grade Polyethylene supplied with butterfly valve,
                        elbow-butterfly valve and Banjo valve.
                    </p>
                </div>
            </div>
            <div class="blog-card row align-items-center g-4">
                <div class="flexitank-details-slider swiper init-swiper col-lg-6">
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
                            <img src="<?php echo url('/'); ?>/img/flexitank details/BULKHEAD1.png" class="img-fluid rounded services-img-swipe" alt="BULKHEAD1">
                        </div>
                        <div class="swiper-slide">
                            <img src="<?php echo url('/'); ?>/img/flexitank details/BULKHEAD2.png" class="img-fluid rounded services-img-swipe" alt="BULKHEAD2">
                        </div>
                        <div class="swiper-slide">
                            <img src="<?php echo url('/'); ?>/img/flexitank details/BULKHEAD3.png" class="img-fluid rounded services-img-swipe" alt="BULKHEAD3">
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
                <div class="col-lg-6">
                    <h2>BULKHEAD</h2>
                    <p>
                        A Bulkhead is a retaining walls that restrains the Flexitank from coming out of
                        the container when it is fully loaded. We offer 3 types of Bulkheads.
                    </p>
                    <ul>
                        <li><i class="bi bi-check-circle"></i> <span>Bulkhead A</span></li>
                    </ul>
                    <p>
                        Consist of 4 steel bars and is used together with Top Load - Top Discharge
                        Flexitank.
                    </p>
                    <ul>
                        <li><i class="bi bi-check-circle"></i> <span>Bulkhead B</span></li>
                    </ul>
                    <p>
                        Consists of 2 steel bars and 1 steel frame and is used together with Top
                        Load - Bottom Discharge Flexitank and Bottom Load - Bottom Discharge
                        Flexitank.
                    </p>
                    <ul>
                        <li><i class="bi bi-check-circle"></i> <span>Bulkhead C</span></li>
                    </ul>
                    <p>
                        Consist of 2 steel frames and can be used with any types of Flexitank.
                    </p>
                </div>
            </div>
            <div class="blog-card row align-items-center g-4">
                <div class="flexitank-details-slider swiper init-swiper col-lg-6">
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
                            <img src="<?php echo url('/'); ?>/img/flexitank details/HEATING PAD1.png" class="img-fluid rounded services-img-swipe" alt="HEATING PAD1">
                        </div>
                        <div class="swiper-slide">
                            <img src="<?php echo url('/'); ?>/img/flexitank details/HEATING PAD2.png" class="img-fluid rounded services-img-swipe" alt="HEATING PAD2">
                        </div>
                        <div class="swiper-slide">
                            <img src="<?php echo url('/'); ?>/img/flexitank details/HEATING PAD3.png" class="img-fluid rounded services-img-swipe" alt="HEATING PAD3">
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
                <div class="col-lg-6">
                    <h2>HEATING PAD</h2>
                    <p>
                        The Heating Pad is used to liquefy solidified cargo at point of discharge. It
                        provides heat transfer through tubes made from EPDM extruded rubber. Maximum
                        heat input is 124°C and maximum pressure is 300PSI (20 bar). This is provided
                        by wet low pressure steam. The unit can be reused if it is not damaged in
                        return transit.
                    </p>
                </div>
            </div>
            <div class="blog-card row align-items-center g-4">
                <div class="flexitank-details-slider swiper init-swiper col-lg-6">
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
                            <img src="<?php echo url('/'); ?>/img/flexitank details/INSULATION LINER1.png" class="img-fluid rounded services-img-swipe" alt="INSULATION LINER1">
                        </div>
                        <div class="swiper-slide">
                            <img src="<?php echo url('/'); ?>/img/flexitank details/INSULATION LINER2.png" class="img-fluid rounded services-img-swipe" alt="INSULATION LINER2">
                        </div>
                        <div class="swiper-slide">
                            <img src="<?php echo url('/'); ?>/img/flexitank details/INSULATION LINER3.png" class="img-fluid rounded services-img-swipe" alt="INSULATION LINER3">
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
                <div class="col-lg-6">
                    <h2>INSULATION LINER</h2>
                    <p>
                        Temperature fluctuations which occur when container travels through different
                        climates can cause issues such as product spoilage and solidification.
                        Therefore, the Insulation Liner reduces the rate of temperature fluctuation
                        enabling product to retain their original characteristics as much as possible.
                        Benefits of Insulation Liner:
                    </p>
                    <ul>
                        <li><i class="bi bi-check-circle"></i> <span>Easy handling and installation.</span></li>
                        <li><i class="bi bi-check-circle"></i> <span>Reduces temperature fluctuation.</span></li>
                        <li><i class="bi bi-check-circle"></i> <span>ISO shipping containers compatible.</span></li>
                        <li><i class="bi bi-check-circle"></i> <span>Packed environment maintained.</span></li>
                    </ul>
                </div>
            </div>
            <div class="blog-card row align-items-center g-4">
                <div class="flexitank-details-slider swiper init-swiper col-lg-6">
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
                            <img src="<?php echo url('/'); ?>/img/flexitank details/TUB LINER1.png" class="img-fluid rounded services-img-swipe" alt="TUB LINER1">
                        </div>
                        <div class="swiper-slide">
                            <img src="<?php echo url('/'); ?>/img/flexitank details/TUB LINER2.png" class="img-fluid rounded services-img-swipe" alt="TUB LINER2">
                        </div>
                        <div class="swiper-slide">
                            <img src="<?php echo url('/'); ?>/img/flexitank details/TUB LINER3.png" class="img-fluid rounded services-img-swipe" alt="TUB LINER3">
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
                <div class="col-lg-6">
                    <h2>TUB LINER</h2>
                    <p>
                        Tub Liner is the most effective and efficient liner container for spillage and
                        leakage of Flexitank. It is made out of 125 micron Polyethylene and acts as a
                        protective layer for the Flexitank. Benefits of Tub Liner:
                    </p>
                    <ul>
                        <li><i class="bi bi-check-circle"></i> <span>Container leakage can be minimized by pumping out with less wastage.</span></li>
                        <li><i class="bi bi-check-circle"></i> <span>Losses are measurable by weighing the tub with or without spillage.</span></li>
                        <li><i class="bi bi-check-circle"></i> <span>Leakage is contained, preventing stains and reducing cleaning costs.</span></li>
                        <li><i class="bi bi-check-circle"></i> <span>Recyclable and biodegradable.</span></li>
                    </ul>
                </div>
            </div>
            <div class="blog-card row align-items-center g-4">
                <div class="flexitank-details-slider swiper init-swiper col-lg-6">
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
                            <img src="<?php echo url('/'); ?>/img/flexitank details/HEAT EXCHANGER1.png" class="img-fluid rounded services-img-swipe" alt="HEAT EXCHANGER1">
                        </div>
                        <div class="swiper-slide">
                            <img src="<?php echo url('/'); ?>/img/flexitank details/HEAT EXCHANGER2.png" class="img-fluid rounded services-img-swipe" alt="HEAT EXCHANGER2">
                        </div>
                        <div class="swiper-slide">
                            <img src="<?php echo url('/'); ?>/img/flexitank details/HEAT EXCHANGER3.png" class="img-fluid rounded services-img-swipe" alt="HEAT EXCHANGER3">
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
                <div class="col-lg-6">
                    <h2>HEAT EXCHANGER</h2>
                    <p>
                        A heat exchanger is a piece of equipment built for efficient heat transfer from
                        one medium to another. The medium may be separated by a solid wall to prevent
                        mixing or they may be in direct contact. With heat exchanger you can:
                    </p>
                    <ul>
                        <li><i class="bi bi-check-circle"></i> <span>Dissolve solidified cargo homogenously.</span></li>
                        <li><i class="bi bi-check-circle"></i> <span>Solve winter and low temperature issues.</span></li>
                        <li><i class="bi bi-check-circle"></i> <span>Quick heating and energy efficient.</span></li>
                        <li><i class="bi bi-check-circle"></i> <span>Minimizes heating cost and carbon footprint.</span></li>
                    </ul>
                    <p>
                        So, you can now thaw your cargo with our Heat Exchangers!
                    </p>
                </div>
            </div>
            <div class="d-flex flex-column gap-5 gap-xl-10">
                <div class="d-flex flex-column gap-8">
                    <h3 class="text-center">CERTIFICATES</h3>
                    <div class="marquee w-100 d-flex align-items-center overflow-hidden">
                        <div class="marquee-content d-flex align-items-center gap-8">
                            <div class="marquee-tag hstack justify-content-center">
                                <img src="<?php echo url('/'); ?>/img/certificates/certificate-1.png" class="img-fluid" alt="FSSC 22000">
                            </div>
                            <div class="marquee-tag hstack justify-content-center">
                                <img src="<?php echo url('/'); ?>/img/certificates/certificate-2.png" class="img-fluid" alt="ISO 22000">
                            </div>
                            <div class="marquee-tag hstack justify-content-center">
                                <img src="<?php echo url('/'); ?>/img/certificates/certificate-3.png" class="img-fluid" alt="ISO 14001">
                            </div>
                            <div class="marquee-tag hstack justify-content-center">
                                <img src="<?php echo url('/'); ?>/img/certificates/certificate-4.png" class="img-fluid" alt="ISO 9001">
                            </div>
                            <div class="marquee-tag hstack justify-content-center">
                                <img src="<?php echo url('/'); ?>/img/certificates/certificate-5.png" class="img-fluid" alt="HACCP">
                            </div>
                            <div class="marquee-tag hstack justify-content-center">
                                <img src="<?php echo url('/'); ?>/img/certificates/certificate-6.png" class="img-fluid" alt="SUCI PURE HALAL IFRC">
                            </div>
                            <div class="marquee-tag hstack justify-content-center">
                                <img src="<?php echo url('/'); ?>/img/certificates/certificate-7.png" class="img-fluid" alt="GMP FDA">
                            </div>
                            <div class="marquee-tag hstack justify-content-center">
                                <img src="<?php echo url('/'); ?>/img/certificates/certificate-8.png" class="img-fluid" alt="KLBD">
                            </div>
                            <div class="marquee-tag hstack justify-content-center">
                                <img src="<?php echo url('/'); ?>/img/certificates/certificate-9.png" class="img-fluid" alt="COA">
                            </div>
                            <div class="marquee-tag hstack justify-content-center">
                                <img src="<?php echo url('/'); ?>/img/certificates/certificate-1.png" class="img-fluid" alt="FSSC 22000">
                            </div>
                            <div class="marquee-tag hstack justify-content-center">
                                <img src="<?php echo url('/'); ?>/img/certificates/certificate-2.png" class="img-fluid" alt="ISO 22000">
                            </div>
                            <div class="marquee-tag hstack justify-content-center">
                                <img src="<?php echo url('/'); ?>/img/certificates/certificate-3.png" class="img-fluid" alt="ISO 14001">
                            </div>
                            <div class="marquee-tag hstack justify-content-center">
                                <img src="<?php echo url('/'); ?>/img/certificates/certificate-4.png" class="img-fluid" alt="ISO 9001">
                            </div>
                            <div class="marquee-tag hstack justify-content-center">
                                <img src="<?php echo url('/'); ?>/img/certificates/certificate-5.png" class="img-fluid" alt="HACCP">
                            </div>
                            <div class="marquee-tag hstack justify-content-center">
                                <img src="<?php echo url('/'); ?>/img/certificates/certificate-6.png" class="img-fluid" alt="SUCI PURE HALAL IFRC">
                            </div>
                            <div class="marquee-tag hstack justify-content-center">
                                <img src="<?php echo url('/'); ?>/img/certificates/certificate-7.png" class="img-fluid" alt="GMP FDA">
                            </div>
                            <div class="marquee-tag hstack justify-content-center">
                                <img src="<?php echo url('/'); ?>/img/certificates/certificate-8.png" class="img-fluid" alt="KLBD">
                            </div>
                            <div class="marquee-tag hstack justify-content-center">
                                <img src="<?php echo url('/'); ?>/img/certificates/certificate-9.png" class="img-fluid" alt="COA">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Flexitank Details Section -->
</main>
@endsection('content')