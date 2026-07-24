@extends('layouts.app')
@section('title', 'Infinity Logistics Indonesia')
@section('meta_description', __('messages.home_meta_description'))
@section('canonical', route('home'))
@section('content')
    <main class="main">
        <!-- Hero Section -->
        <section id="hero" class="hero section">
            <div class="container">
                <div class="row gy-4">
                    <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center" data-aos="fade-up">
                        <h2 x-text="translations.messages.hero_title"></h2>
                        <p x-text="translations.messages.hero_subtitle"></p>
                        <div class="d-flex">
                            <a href="/#about" class="btn-get-started" x-text="translations.messages.get_started"></a>
                            <a href="https://www.youtube.com/watch?v=zx4s5h1Fats&ab_channel=MuhammadMohdAzam"
                                class="glightbox btn-watch-video d-flex align-items-center"><i
                                    class="bi bi-play-circle"></i><span
                                    x-text="translations.messages.watch_video"></span></a>
                        </div>
                    </div>
                    <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-out" data-aos-delay="100">
                        <img src="{{ asset('img/hero-img.webp') }}" alt="Container Infinity" class="img-fluid animated"
                            fetchpriority="high" />
                    </div>
                </div>
            </div>
        </section>
        <!-- /Hero Section -->
        <!-- Featured Services Section -->
        <section id="featured-services" class="featured-services section">
            <div class="container">
                <div class="row gy-4">
                    <div class="col-lg-4 d-flex" data-aos="fade-up" data-aos-delay="100">
                        <div class="service-item position-relative text-center">
                            <div class="icon-title">
                                <div class="icon"><i class="bi bi-eye icon"></i></div>
                                <h2 x-text="translations.messages.vision"></h2>
                            </div>
                            <p x-text="translations.messages.vision_text"></p>
                        </div>
                    </div>
                    <div class="col-lg-4 d-flex" data-aos="fade-up" data-aos-delay="200">
                        <div class="service-item position-relative text-center">
                            <div class="icon-title">
                                <div class="icon"><i class="bi bi-bullseye icon"></i></div>
                                <h2 x-text="translations.messages.mission"></h2>
                            </div>
                            <p x-text="translations.messages.mission_text"></p>
                        </div>
                    </div>
                    <div class="col-lg-4 d-flex" data-aos="fade-up" data-aos-delay="300">
                        <div class="service-item position-relative text-center">
                            <div class="icon-title">
                                <div class="icon"><i class="bi bi-gem icon"></i></div>
                                <h2 x-text="translations.messages.core_values"></h2>
                            </div>
                            <p x-text="translations.messages.core_values_text"></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Featured Services Section -->
        <!-- About Section -->
        <section id="about" class="about section">
            <div class="container section-title" data-aos="fade-up">
                <span x-text="translations.messages.about_section"><br></span>
                <h2 x-text="translations.messages.about"></h2>
            </div>
            <div class="container">
                <div class="row align-items-center">
                    <div class="row gy-4">
                        <div class="col-lg-6 position-relative align-self-start" data-aos="fade-up" data-aos-delay="100">
                            <img src="{{ asset('img/about.webp') }}" alt="About Infinity" class="img-fluid" loading="lazy">
                        </div>
                        <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="200">
                            <p x-text="translations.messages.about_description"></p>
                            <ul>
                                <li><i class="bi bi-check2-all"></i> <span
                                        x-text="translations.messages.about_service_1"></span></li>
                                <li><i class="bi bi-check2-all"></i> <span
                                        x-text="translations.messages.about_service_2"></span></li>
                                <li><i class="bi bi-check2-all"></i> <span
                                        x-text="translations.messages.about_service_3"></span></li>
                                <li><i class="bi bi-check2-all"></i> <span
                                        x-text="translations.messages.about_service_4"></span></li>
                                <li><i class="bi bi-check2-all"></i> <span
                                        x-text="translations.messages.about_service_5"></span></li>
                                <li><i class="bi bi-check2-all"></i> <span
                                        x-text="translations.messages.about_service_6"></span></li>
                            </ul>
                            <p x-text="translations.messages.about_description_2"></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /About Section -->
        <!-- Stats Section -->
        <section id="stats" class="stats section">
            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <div class="row gy-4">
                    <div class="col-lg-3 col-md-6">
                        <div class="stats-item text-center w-100 h-100">
                            <span data-purecounter-start="0" data-purecounter-end="20" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p x-text="translations.messages.years_experience"></p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="stats-item text-center w-100 h-100">
                            <span data-purecounter-start="0" data-purecounter-end="20000" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p x-text="translations.messages.shipments_handled"></p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="stats-item text-center w-100 h-100">
                            <span data-purecounter-start="0" data-purecounter-end="350" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p x-text="translations.messages.clients_active"></p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="stats-item text-center w-100 h-100">
                            <span data-purecounter-start="0" data-purecounter-end="40" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p x-text="translations.messages.countries_served"></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="button-container">
                <a href="{{ route('about') }}" class="more-details-btn" x-text="translations.messages.read_more_about"></a>
            </div>
        </section>
        <!-- /Stats Section -->
        <!-- Services Section -->
        <section id="services" class="services section light-background">
            <div class="container section-title" data-aos="fade-up">
                <span x-text="translations.messages.services_section"></span>
                <h2 x-text="translations.messages.services"></h2>
            </div>
            <div class="container">
                <div class="row gy-4">
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="service-item position-relative">
                            <div class="icon">
                                <img src="{{ asset('img/icons/NVOCC.webp') }}" alt="NVOCC" loading="lazy">
                            </div>
                            <a href="{{ route('nvocc') }}" class="stretched-link">
                                <h3 x-text="translations.messages.nvocc"></h3>
                            </a>
                            <p x-text="translations.messages.nvocc_tagline"></p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="service-item position-relative">
                            <div class="icon">
                                <img src="{{ asset('img/icons/FREIGHT FORWARDING.webp') }}" alt="FREIGHT FORWARDING"
                                    loading="lazy">
                            </div>
                            <a href="{{ route('freight-forwarding') }}" class="stretched-link">
                                <h3 x-text="translations.messages.freight_forwarding"></h3>
                            </a>
                            <p x-text="translations.messages.freight_forwarding_tagline"></p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="service-item position-relative">
                            <div class="icon">
                                <img src="{{ asset('img/icons/DOMESTIC FORWARDING.webp') }}" alt="DOMESTIC FORWARDING"
                                    loading="lazy">
                            </div>
                            <a href="{{ route('domestic-forwarding') }}" class="stretched-link">
                                <h3 x-text="translations.messages.domestic_forwarding"></h3>
                            </a>
                            <p x-text="translations.messages.domestic_forwarding_tagline"></p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                        <div class="service-item position-relative">
                            <div class="icon">
                                <img src="{{ asset('img/icons/FLEXITANK FLEXIBAG.webp') }}" alt="FLEXITANK FLEXIBAG"
                                    loading="lazy">
                            </div>
                            <a href="{{ route('flexitank-flexibag') }}" class="stretched-link">
                                <h3 x-text="translations.messages.flexitank_flexibag"></h3>
                            </a>
                            <p x-text="translations.messages.flexitank_flexibag_tagline"></p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
                        <div class="service-item position-relative">
                            <div class="icon">
                                <img src="{{ asset('img/icons/PROJECT LOGISTICS.webp') }}" alt="PROJECT LOGISTICS"
                                    loading="lazy">
                            </div>
                            <a href="{{ route('project-logistics') }}" class="stretched-link">
                                <h3 x-text="translations.messages.project_logistics"></h3>
                            </a>
                            <p x-text="translations.messages.project_logistics_tagline"></p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
                        <div class="service-item position-relative">
                            <div class="icon">
                                <img src="{{ asset('img/icons/CUSTOMS CLEARANCE.webp') }}" alt="CUSTOMS CLEARANCE"
                                    loading="lazy">
                            </div>
                            <a href="{{ route('customs-clearance') }}" class="stretched-link">
                                <h3 x-text="translations.messages.customs_clearance"></h3>
                            </a>
                            <p x-text="translations.messages.customs_clearance_tagline"></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="button-container">
                <a href="{{ route('services') }}" class="more-details-btn"
                    x-text="translations.messages.read_more_services"></a>
            </div>
        </section>
        <!-- /Services Section -->
        <!-- Call To Action Section -->
        <section id="call-to-action" class="call-to-action section accent-background">
            <div class="container">
                <div class="row justify-content-center" data-aos="zoom-in" data-aos-delay="100">
                    <div class="col-xl-10">
                        <div class="text-center">
                            <h2 x-text="translations.messages.cta_title"></h2>
                            <p x-text="translations.messages.cta_description"></p>
                            <a class="cta-btn" href="{{ route('contact') }}" x-text="translations.messages.get_quote"></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Call To Action Section -->
        <!-- Team Section -->
        <section id="team" class="team section light-background">
            <div class="container section-title" data-aos="fade-up">
                <span x-text="translations.messages.management_section"></span>
                <h2 x-text="translations.messages.management_title"></h2>
            </div>
            <div class="container">
                <div class="row gy-5 justify-content-center">
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="member">
                            <div class="pic"><img src="{{ asset('img/team.webp') }}" class="img-fluid" alt="Member Infinity"
                                    loading="lazy"></div>
                            <div class="member-info">
                                <h3>Ayu Wulan Maya Sary</h3>
                                <span x-text="translations.messages.director"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Team Section -->
        <!-- Clients Section -->
        <section id="clients" class="clients section">
            <div class="container section-title" data-aos="fade-up">
                <span x-text="translations.messages.clients_section"></span>
                <h2 x-text="translations.messages.clients_title"></h2>
            </div>
            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <div class="d-flex flex-column">
                    <div class="marquee marquee-left w-100 d-flex align-items-center overflow-hidden">
                        <div class="marquee-content d-flex align-items-center">
                            <div class="marquee-tag hstack justify-content-center">
                                <img src="{{ asset('img/clients/clients-1.webp') }}" class="img-fluid"
                                    alt="MEGA HARAPAN SUKSES">
                            </div>
                            <div class="marquee-tag hstack justify-content-center">
                                <img src="{{ asset('img/clients/clients-2.webp') }}" class="img-fluid"
                                    alt="AJINOMOTO INDONESIA">
                            </div>
                            <div class="marquee-tag hstack justify-content-center">
                                <img src="{{ asset('img/clients/clients-3.webp') }}" class="img-fluid"
                                    alt="AGROMINA WICAKSANA">
                            </div>
                            <div class="marquee-tag hstack justify-content-center">
                                <img src="{{ asset('img/clients/clients-4.webp') }}" class="img-fluid" alt="ANTAMAS">
                            </div>
                            <div class="marquee-tag hstack justify-content-center">
                                <img src="{{ asset('img/clients/clients-5.webp') }}" class="img-fluid"
                                    alt="ASAHIMAS FLAT GLASS">
                            </div>
                            <div class="marquee-tag hstack justify-content-center">
                                <img src="{{ asset('img/clients/clients-6.webp') }}" class="img-fluid" alt="BONANZA MEGAH">
                            </div>
                            <div class="marquee-tag hstack justify-content-center">
                                <img src="{{ asset('img/clients/clients-7.webp') }}" class="img-fluid"
                                    alt="CITRA NUTRINDO LANGGENG">
                            </div>
                            <div class="marquee-tag hstack justify-content-center">
                                <img src="{{ asset('img/clients/clients-8.webp') }}" class="img-fluid"
                                    alt="COMEXTRA MAJORA">
                            </div>
                            <div class="marquee-tag hstack justify-content-center">
                                <img src="{{ asset('img/clients/clients-9.webp') }}" class="img-fluid"
                                    alt="DELTA HIJAU ABADI">
                            </div>
                            <div class="marquee-tag hstack justify-content-center">
                                <img src="{{ asset('img/clients/clients-10.webp') }}" class="img-fluid"
                                    alt="DUNIA KIMIA JAYA">
                            </div>
                            <div class="marquee-tag hstack justify-content-center">
                                <img src="{{ asset('img/clients/clients-11.webp') }}" class="img-fluid"
                                    alt="ECOOILS JAYA INDONESIA">
                            </div>
                            <div class="marquee-tag hstack justify-content-center">
                                <img src="{{ asset('img/clients/clients-12.webp') }}" class="img-fluid"
                                    alt="GAPURA MAS LESTARI">
                            </div>
                            <div class="marquee-tag hstack justify-content-center">
                                <img src="{{ asset('img/clients/clients-13.webp') }}" class="img-fluid" alt="GUDANG GARAM">
                            </div>
                            <div class="marquee-tag hstack justify-content-center">
                                <img src="{{ asset('img/clients/clients-14.webp') }}" class="img-fluid"
                                    alt="GUNTNER INDONESIA">
                            </div>
                            <div class="marquee-tag hstack justify-content-center">
                                <img src="{{ asset('img/clients/clients-15.webp') }}" class="img-fluid"
                                    alt="INDO OIL PERKASA">
                            </div>
                            <div class="marquee-tag hstack justify-content-center">
                                <img src="{{ asset('img/clients/clients-16.webp') }}" class="img-fluid"
                                    alt="INDOKEMIKA JAYATAMA">
                            </div>
                            <div class="marquee-tag hstack justify-content-center">
                                <img src="{{ asset('img/clients/clients-17.webp') }}" class="img-fluid"
                                    alt="KEMIRA CHEMICALS INDONESIA">
                            </div>
                            <div class="marquee-tag hstack justify-content-center">
                                <img src="{{ asset('img/clients/clients-18.webp') }}" class="img-fluid"
                                    alt="KIRANA MEGATARA">
                            </div>
                            <div class="marquee-tag hstack justify-content-center">
                                <img src="{{ asset('img/clients/clients-1.webp') }}" class="img-fluid"
                                    alt="MEGA HARAPAN SUKSES">
                            </div>
                            <div class="marquee-tag hstack justify-content-center">
                                <img src="{{ asset('img/clients/clients-2.webp') }}" class="img-fluid"
                                    alt="AJINOMOTO INDONESIA">
                            </div>
                            <div class="marquee-tag hstack justify-content-center">
                                <img src="{{ asset('img/clients/clients-3.webp') }}" class="img-fluid"
                                    alt="AGROMINA WICAKSANA">
                            </div>
                            <div class="marquee-tag hstack justify-content-center">
                                <img src="{{ asset('img/clients/clients-4.webp') }}" class="img-fluid" alt="ANTAMAS">
                            </div>
                            <div class="marquee-tag hstack justify-content-center">
                                <img src="{{ asset('img/clients/clients-5.webp') }}" class="img-fluid"
                                    alt="ASAHIMAS FLAT GLASS">
                            </div>
                            <div class="marquee-tag hstack justify-content-center">
                                <img src="{{ asset('img/clients/clients-6.webp') }}" class="img-fluid" alt="BONANZA MEGAH">
                            </div>
                            <div class="marquee-tag hstack justify-content-center">
                                <img src="{{ asset('img/clients/clients-7.webp') }}" class="img-fluid"
                                    alt="CITRA NUTRINDO LANGGENG">
                            </div>
                            <div class="marquee-tag hstack justify-content-center">
                                <img src="{{ asset('img/clients/clients-8.webp') }}" class="img-fluid"
                                    alt="COMEXTRA MAJORA">
                            </div>
                            <div class="marquee-tag hstack justify-content-center">
                                <img src="{{ asset('img/clients/clients-9.webp') }}" class="img-fluid"
                                    alt="DELTA HIJAU ABADI">
                            </div>
                            <div class="marquee-tag hstack justify-content-center">
                                <img src="{{ asset('img/clients/clients-10.webp') }}" class="img-fluid"
                                    alt="DUNIA KIMIA JAYA">
                            </div>
                            <div class="marquee-tag hstack justify-content-center">
                                <img src="{{ asset('img/clients/clients-11.webp') }}" class="img-fluid"
                                    alt="ECOOILS JAYA INDONESIA">
                            </div>
                            <div class="marquee-tag hstack justify-content-center">
                                <img src="{{ asset('img/clients/clients-12.webp') }}" class="img-fluid"
                                    alt="GAPURA MAS LESTARI">
                            </div>
                            <div class="marquee-tag hstack justify-content-center">
                                <img src="{{ asset('img/clients/clients-13.webp') }}" class="img-fluid" alt="GUDANG GARAM">
                            </div>
                            <div class="marquee-tag hstack justify-content-center">
                                <img src="{{ asset('img/clients/clients-14.webp') }}" class="img-fluid"
                                    alt="GUNTNER INDONESIA">
                            </div>
                            <div class="marquee-tag hstack justify-content-center">
                                <img src="{{ asset('img/clients/clients-15.webp') }}" class="img-fluid"
                                    alt="INDO OIL PERKASA">
                            </div>
                            <div class="marquee-tag hstack justify-content-center">
                                <img src="{{ asset('img/clients/clients-16.webp') }}" class="img-fluid"
                                    alt="INDOKEMIKA JAYATAMA">
                            </div>
                            <div class="marquee-tag hstack justify-content-center">
                                <img src="{{ asset('img/clients/clients-17.webp') }}" class="img-fluid"
                                    alt="KEMIRA CHEMICALS INDONESIA">
                            </div>
                            <div class="marquee-tag hstack justify-content-center">
                                <img src="{{ asset('img/clients/clients-18.webp') }}" class="img-fluid"
                                    alt="KIRANA MEGATARA">
                            </div>
                        </div>
                    </div>
                    <div class="marquee marquee-right w-100 d-flex align-items-center overflow-hidden">
                        <div class="marquee-content d-flex align-items-center">
                            <div class="marquee-tag hstack justify-content-center">
                                <img src="{{ asset('img/clients/clients-19.webp') }}" class="img-fluid"
                                    alt="LOKA REFRACTORIES WIRA JATIM">
                            </div>
                            <div class="marquee-tag hstack justify-content-center">
                                <img src="{{ asset('img/clients/clients-20.webp') }}" class="img-fluid"
                                    alt="LOUISIANA FAR EAST">
                            </div>
                            <div class="marquee-tag hstack justify-content-center">
                                <img src="{{ asset('img/clients/clients-21.webp') }}" class="img-fluid"
                                    alt="MEGA SURYA ERATAMA">
                            </div>
                            <div class="marquee-tag hstack justify-content-center">
                                <img src="{{ asset('img/clients/clients-22.webp') }}" class="img-fluid"
                                    alt="MITRA FINEX ANTARNUSA">
                            </div>
                            <div class="marquee-tag hstack justify-content-center">
                                <img src="{{ asset('img/clients/clients-23.webp') }}" class="img-fluid"
                                    alt="NYLEX INDONESIA">
                            </div>
                            <div class="marquee-tag hstack justify-content-center">
                                <img src="{{ asset('img/clients/clients-24.webp') }}" class="img-fluid"
                                    alt="OMYA INDONESIA">
                            </div>
                            <div class="marquee-tag hstack justify-content-center">
                                <img src="{{ asset('img/clients/clients-25.webp') }}" class="img-fluid"
                                    alt="PRIMA BERSAUDARA">
                            </div>
                            <div class="marquee-tag hstack justify-content-center">
                                <img src="{{ asset('img/clients/clients-26.webp') }}" class="img-fluid"
                                    alt="PROTAS MALANG INDONESIA">
                            </div>
                            <div class="marquee-tag hstack justify-content-center">
                                <img src="{{ asset('img/clients/clients-27.webp') }}" class="img-fluid"
                                    alt="PUTERA RACKINDO SEJAHTERA">
                            </div>
                            <div class="marquee-tag hstack justify-content-center">
                                <img src="{{ asset('img/clients/clients-28.webp') }}" class="img-fluid"
                                    alt="SAHATI HAMPARAN TANGGUH">
                            </div>
                            <div class="marquee-tag hstack justify-content-center">
                                <img src="{{ asset('img/clients/clients-29.webp') }}" class="img-fluid"
                                    alt="SEMESTA AGRO TANI INDONESIA">
                            </div>
                            <div class="marquee-tag hstack justify-content-center">
                                <img src="{{ asset('img/clients/clients-30.webp') }}" class="img-fluid"
                                    alt="SINAR MAS AGRO RESOURCES AND TECHNOLOGY">
                            </div>
                            <div class="marquee-tag hstack justify-content-center">
                                <img src="{{ asset('img/clients/clients-31.webp') }}" class="img-fluid"
                                    alt="SORINI AGRO ASIA CORPORINDO">
                            </div>
                            <div class="marquee-tag hstack justify-content-center">
                                <img src="{{ asset('img/clients/clients-32.webp') }}" class="img-fluid"
                                    alt="SUMBER ANUGERAH UTAMA">
                            </div>
                            <div class="marquee-tag hstack justify-content-center">
                                <img src="{{ asset('img/clients/clients-33.webp') }}" class="img-fluid"
                                    alt="SURYA TRIMEGAH WISESA">
                            </div>
                            <div class="marquee-tag hstack justify-content-center">
                                <img src="{{ asset('img/clients/clients-34.webp') }}" class="img-fluid"
                                    alt="TIGA RASA INDONESIA">
                            </div>
                            <div class="marquee-tag hstack justify-content-center">
                                <img src="{{ asset('img/clients/clients-35.webp') }}" class="img-fluid"
                                    alt="WILMAR CAHAYA INDONESIA">
                            </div>
                            <div class="marquee-tag hstack justify-content-center">
                                <img src="{{ asset('img/clients/clients-36.webp') }}" class="img-fluid" alt="XINYI GLASS">
                            </div>
                            <div class="marquee-tag hstack justify-content-center">
                                <img src="{{ asset('img/clients/clients-19.webp') }}" class="img-fluid"
                                    alt="LOKA REFRACTORIES WIRA JATIM">
                            </div>
                            <div class="marquee-tag hstack justify-content-center">
                                <img src="{{ asset('img/clients/clients-20.webp') }}" class="img-fluid"
                                    alt="LOUISIANA FAR EAST">
                            </div>
                            <div class="marquee-tag hstack justify-content-center">
                                <img src="{{ asset('img/clients/clients-21.webp') }}" class="img-fluid"
                                    alt="MEGA SURYA ERATAMA">
                            </div>
                            <div class="marquee-tag hstack justify-content-center">
                                <img src="{{ asset('img/clients/clients-22.webp') }}" class="img-fluid"
                                    alt="MITRA FINEX ANTARNUSA">
                            </div>
                            <div class="marquee-tag hstack justify-content-center">
                                <img src="{{ asset('img/clients/clients-23.webp') }}" class="img-fluid"
                                    alt="NYLEX INDONESIA">
                            </div>
                            <div class="marquee-tag hstack justify-content-center">
                                <img src="{{ asset('img/clients/clients-24.webp') }}" class="img-fluid"
                                    alt="OMYA INDONESIA">
                            </div>
                            <div class="marquee-tag hstack justify-content-center">
                                <img src="{{ asset('img/clients/clients-25.webp') }}" class="img-fluid"
                                    alt="PRIMA BERSAUDARA">
                            </div>
                            <div class="marquee-tag hstack justify-content-center">
                                <img src="{{ asset('img/clients/clients-26.webp') }}" class="img-fluid"
                                    alt="PROTAS MALANG INDONESIA">
                            </div>
                            <div class="marquee-tag hstack justify-content-center">
                                <img src="{{ asset('img/clients/clients-27.webp') }}" class="img-fluid"
                                    alt="PUTERA RACKINDO SEJAHTERA">
                            </div>
                            <div class="marquee-tag hstack justify-content-center">
                                <img src="{{ asset('img/clients/clients-28.webp') }}" class="img-fluid"
                                    alt="SAHATI HAMPARAN TANGGUH">
                            </div>
                            <div class="marquee-tag hstack justify-content-center">
                                <img src="{{ asset('img/clients/clients-29.webp') }}" class="img-fluid"
                                    alt="SEMESTA AGRO TANI INDONESIA">
                            </div>
                            <div class="marquee-tag hstack justify-content-center">
                                <img src="{{ asset('img/clients/clients-30.webp') }}" class="img-fluid"
                                    alt="SINAR MAS AGRO RESOURCES AND TECHNOLOGY">
                            </div>
                            <div class="marquee-tag hstack justify-content-center">
                                <img src="{{ asset('img/clients/clients-31.webp') }}" class="img-fluid"
                                    alt="SORINI AGRO ASIA CORPORINDO">
                            </div>
                            <div class="marquee-tag hstack justify-content-center">
                                <img src="{{ asset('img/clients/clients-32.webp') }}" class="img-fluid"
                                    alt="SUMBER ANUGERAH UTAMA">
                            </div>
                            <div class="marquee-tag hstack justify-content-center">
                                <img src="{{ asset('img/clients/clients-33.webp') }}" class="img-fluid"
                                    alt="SURYA TRIMEGAH WISESA">
                            </div>
                            <div class="marquee-tag hstack justify-content-center">
                                <img src="{{ asset('img/clients/clients-34.webp') }}" class="img-fluid"
                                    alt="TIGA RASA INDONESIA">
                            </div>
                            <div class="marquee-tag hstack justify-content-center">
                                <img src="{{ asset('img/clients/clients-35.webp') }}" class="img-fluid"
                                    alt="WILMAR CAHAYA INDONESIA">
                            </div>
                            <div class="marquee-tag hstack justify-content-center">
                                <img src="{{ asset('img/clients/clients-36.webp') }}" class="img-fluid" alt="XINYI GLASS">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Clients Section -->
        <!-- Contact Section -->
        <section id="contact" class="contact section">
            <div class="container section-title" data-aos="fade-up">
                <span x-text="translations.messages.contact_section"></span>
                <h2 x-text="translations.messages.contact"></h2>
            </div>
            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <div class="row gy-4">
                    <div class="col-lg-5">
                        <div class="info-wrap">
                            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="200">
                                <i class="bi bi-geo-alt flex-shrink-0"></i>
                                <div>
                                    <h2 x-text="translations.messages.our_address"></h2>
                                    <p x-text="translations.messages.head_office_address"></p>
                                </div>
                            </div>
                            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
                                <i class="bi bi-telephone flex-shrink-0"></i>
                                <div>
                                    <h2 x-text="translations.messages.call_us"></h2>
                                    <p>+6231 549 2926</p>
                                </div>
                            </div>
                            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
                                <i class="bi bi-envelope flex-shrink-0"></i>
                                <div>
                                    <h2 x-text="translations.messages.email_us"></h2>
                                    <p>cssurabaya@infinity-sby.com</p>
                                </div>
                            </div>
                            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="500">
                                <i class="bi bi-clock flex-shrink-0"></i>
                                <div>
                                    <h2 x-text="translations.messages.working_hours"></h2>
                                    <p x-text="translations.messages.monday_friday"></p>
                                    <p x-text="translations.messages.saturday"></p>
                                    <p x-text="translations.messages.sunday"></p>
                                </div>
                            </div>
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3629.241613433687!2d112.73795435839659!3d-7.273136269158283!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fbddceec0c2d%3A0x3a125fab20e07b6b!2sPT.%20Infinity%20Logistics%20Indonesia!5e0!3m2!1sen!2sus!4v1752200391253!5m2!1sen!2sus"
                                title="Google Maps" frameborder="0" style="border:0; width: 100%; height: 245px;"
                                allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <form action="{{ route('send.email') }}" method="POST" id="contact-form" class="php-email-form"
                            data-aos="fade-up" data-aos-delay="200">
                            @csrf
                            @honeypot
                            <div class="row gy-4 info-form">
                                <h2 class="text-center" x-text="translations.messages.get_in_touch"></h2>
                                <p>
                                    <strong x-text="translations.messages.contact_intro"></strong>
                                    <span x-text="translations.messages.contact_description"></span>
                                </p>
                                <div class="col-md-6">
                                    <div class="inputgroup">
                                        <input type="text" name="name" id="name-field" class="form-control"
                                            autocomplete="off" required>
                                        <label for="name-field" class="form-label"
                                            x-text="translations.messages.placeholder_name"></label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="inputgroup">
                                        <input type="email" name="email" id="email-field" class="form-control"
                                            autocomplete="off" required>
                                        <label for="email-field" class="form-label"
                                            x-text="translations.messages.placeholder_email"></label>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="inputgroup">
                                        <select name="subject" id="subject-field" class="form-select" required>
                                            <option value="" disabled selected></option>
                                            <option value="quotation" x-text="translations.messages.subject_rfq"></option>
                                            <option value="general" x-text="translations.messages.subject_general"></option>
                                            <option value="partnership" x-text="translations.messages.subject_partnership">
                                            </option>
                                            <option value="technical" x-text="translations.messages.subject_technical">
                                            </option>
                                            <option value="feedback" x-text="translations.messages.subject_feedback">
                                            </option>
                                            <option value="other" x-text="translations.messages.subject_other"></option>
                                        </select>
                                        <label for="subject-field" class="form-label"
                                            x-text="translations.messages.placeholder_subject"></label>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="inputgroup">
                                        <textarea rows="10" name="message" id="message-field" class="form-control"
                                            required></textarea>
                                        <label for="message-field" class="form-label"
                                            x-text="translations.messages.placeholder_message"></label>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-check">
                                        <input type="checkbox" name="subscribe" id="subscribe-checkbox"
                                            class="form-check-input" value="yes">
                                        <label for="subscribe-checkbox" class="form-check-label">
                                            <strong x-text="translations.messages.join_newsletter"></strong>
                                            <span x-text="translations.messages.newsletter_description"></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="button-wrapper">
                                        <button type="submit" id="submit-button">
                                            <div class="icon-wrapper">
                                                <i class="bi bi-send-fill"></i>
                                            </div>
                                            <span x-text="translations.messages.send_message"></span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Contact Section -->
    </main>
@endsection
@push('script')
    <script>
        document.getElementById("submit-button").addEventListener("click", function (e) {
            e.preventDefault();
            const form = document.getElementById("contact-form");
            const name = document.getElementById("name-field").value.trim();
            const email = document.getElementById("email-field").value.trim();
            const subject = document.getElementById("subject-field").value.trim();
            const message = document.getElementById("message-field").value.trim();
            if (!name || !email || !subject || !message) {
                Swal.fire({
                    icon: "warning",
                    title: "Incomplete Form",
                    allowOutsideClick: false,
                    showConfirmButton: false,
                    timer: 2000,
                });
                return;
            }
            const formData = new FormData(form);
            Swal.fire({
                title: 'Loading',
                allowOutsideClick: false,
                didOpen: () => {
                    Swal.showLoading();
                }
            });
            fetch("{{ route('send.email') }}", {
                method: "POST",
                headers: {
                    "X-CSRF-TOKEN": document.querySelector('input[name="_token"]').value
                },
                body: formData
            })
                .then(async response => {
                    if (response.ok) {
                        Swal.fire({
                            icon: "success",
                            title: "Success!",
                            allowOutsideClick: false,
                            showConfirmButton: false,
                            timer: 3000,
                        });
                        form.reset();
                    } else {
                        Swal.fire({
                            icon: "error",
                            title: "Failed!",
                            allowOutsideClick: false,
                            showConfirmButton: false,
                            timer: 3000,
                        });
                    }
                })
                .catch(error => {
                    Swal.fire({
                        icon: "error",
                        title: "Error!",
                        allowOutsideClick: false,
                        showConfirmButton: false,
                        timer: 3000,
                    });
                });
        });
    </script>
@endpush