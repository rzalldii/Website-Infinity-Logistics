@extends('layouts.app')
@section('title', __('messages.services_title'))
@section('meta_description', __('messages.services_meta_description'))
@section('canonical', route('services'))
@section('content')
    <main class="main">
        <!-- Services Section -->
        <section id="services" class="services section">
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
        </section>
        <!-- /Services Section -->
        <!-- Solutions Section -->
        <section id="solutions" class="solutions section light-background">
            <div class="container" data-aos="fade-up">
                <ul class="nav nav-tabs row  d-flex" data-aos="fade-up" data-aos-delay="100">
                    <li class="nav-item col-3">
                        <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#solutions-tab-1">
                            <div class="icon">
                                <img src="{{ asset('img/icons/SHIP.webp') }}" alt="SHIP" class="img-active" loading="lazy">
                                <img src="{{ asset('img/icons/SHIP-A.webp') }}" alt="SHIP-A" class="img-inactive"
                                    loading="lazy">
                            </div>
                            <span class="d-none d-lg-block" x-text="translations.messages.ocean_freight"></span>
                        </a>
                    </li>
                    <li class="nav-item col-3">
                        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#solutions-tab-2">
                            <div class="icon">
                                <img src="{{ asset('img/icons/PLANE.webp') }}" alt="PLANE" class="img-active"
                                    loading="lazy">
                                <img src="{{ asset('img/icons/PLANE-A.webp') }}" alt="PLANE-A" class="img-inactive"
                                    loading="lazy">
                            </div>
                            <span class="d-none d-lg-block" x-text="translations.messages.air_freight"></span>
                        </a>
                    </li>
                    <li class="nav-item col-3">
                        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#solutions-tab-3">
                            <div class="icon">
                                <img src="{{ asset('img/icons/TRUCK.webp') }}" alt="TRUCK" class="img-active"
                                    loading="lazy">
                                <img src="{{ asset('img/icons/TRUCK-A.webp') }}" alt="TRUCK-A" class="img-inactive"
                                    loading="lazy">
                            </div>
                            <span class="d-none d-lg-block" x-text="translations.messages.road_freight"></span>
                        </a>
                    </li>
                    <li class="nav-item col-3">
                        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#solutions-tab-4">
                            <div class="icon">
                                <img src="{{ asset('img/icons/WAREHOUSE.webp') }}" alt="WAREHOUSE" class="img-active"
                                    loading="lazy">
                                <img src="{{ asset('img/icons/WAREHOUSE-A.webp') }}" alt="WAREHOUSE-A" class="img-inactive"
                                    loading="lazy">
                            </div>
                            <span class="d-none d-lg-block" x-text="translations.messages.warehouse_services"></span>
                        </a>
                    </li>
                </ul>
                <div class="tab-content" data-aos="fade-up" data-aos-delay="200">
                    <div class="tab-pane fade active show" id="solutions-tab-1">
                        <div class="row">
                            <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                                <h2 x-text="translations.messages.ocean_freight"></h2>
                                <p x-text="translations.messages.ocean_freight_description"></p>
                                <ul>
                                    <li><i class="bi bi-check2-all"></i> <span x-text="translations.messages.fcl"></span>
                                    </li>
                                    <li><i class="bi bi-check2-all"></i> <span x-text="translations.messages.lcl"></span>
                                    </li>
                                    <li><i class="bi bi-check2-all"></i> <span
                                            x-text="translations.messages.reefer_container"></span></li>
                                    <li><i class="bi bi-check2-all"></i> <span
                                            x-text="translations.messages.iso_tank"></span></li>
                                </ul>
                            </div>
                            <div class="col-lg-6 order-1 order-lg-2 text-center">
                                <img src="{{ asset('img/services-1.webp') }}" alt="Ocean Freight" class="img-fluid"
                                    loading="lazy">
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="solutions-tab-2">
                        <div class="row">
                            <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                                <h2 x-text="translations.messages.air_freight"></h2>
                                <p x-text="translations.messages.air_freight_description"></p>
                                <ul>
                                    <li><i class="bi bi-check2-all"></i> <span
                                            x-text="translations.messages.domestic"></span></li>
                                    <li><i class="bi bi-check2-all"></i> <span
                                            x-text="translations.messages.export_import"></span></li>
                                    <li><i class="bi bi-check2-all"></i> <span
                                            x-text="translations.messages.consolidation"></span></li>
                                    <li><i class="bi bi-check2-all"></i> <span
                                            x-text="translations.messages.full_charter"></span></li>
                                </ul>
                            </div>
                            <div class="col-lg-6 order-1 order-lg-2 text-center">
                                <img src="{{ asset('img/services-2.webp') }}" alt="Air Freight" class="img-fluid"
                                    loading="lazy">
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="solutions-tab-3">
                        <div class="row">
                            <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                                <h2 x-text="translations.messages.road_freight"></h2>
                                <p x-text="translations.messages.road_freight_description"></p>
                                <ul>
                                    <li><i class="bi bi-check2-all"></i> <span x-text="translations.messages.ftl"></span>
                                    </li>
                                    <li><i class="bi bi-check2-all"></i> <span x-text="translations.messages.ltl"></span>
                                    </li>
                                    <li><i class="bi bi-check2-all"></i> <span
                                            x-text="translations.messages.haulage"></span></li>
                                    <li><i class="bi bi-check2-all"></i> <span
                                            x-text="translations.messages.contract_carriage"></span></li>
                                </ul>
                            </div>
                            <div class="col-lg-6 order-1 order-lg-2 text-center">
                                <img src="{{ asset('img/services-3.webp') }}" alt="Road Freight" class="img-fluid"
                                    loading="lazy">
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="solutions-tab-4">
                        <div class="row">
                            <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                                <h2 x-text="translations.messages.warehouse_services"></h2>
                                <p x-text="translations.messages.warehouse_services_description"></p>
                                <ul>
                                    <li><i class="bi bi-check2-all"></i> <span
                                            x-text="translations.messages.warehouse_management"></span></li>
                                    <li><i class="bi bi-check2-all"></i> <span
                                            x-text="translations.messages.modular_storage"></span></li>
                                    <li><i class="bi bi-check2-all"></i> <span
                                            x-text="translations.messages.integrated_warehouse"></span></li>
                                </ul>
                            </div>
                            <div class="col-lg-6 order-1 order-lg-2 text-center">
                                <img src="{{ asset('img/services-4.webp') }}" alt="Warehouse" class="img-fluid"
                                    loading="lazy">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Solutions Section -->
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
    </main>
@endsection