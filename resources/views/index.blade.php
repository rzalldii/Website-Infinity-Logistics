@extends('master')
@section('title')
Infinity Logistics Indonesia
@endsection('title')
@section('meta')
<meta name="description" content="Professional freight forwarding services for international shipments.
We provide integrated logistics solutions with fast, secure, and efficient delivery worldwide."/>
<meta name="keywords" content="freight forwarding, logistics services, international shipping, supply
chain management, global logistics, transportation solutions, NVOCC, air freight, ocean freight, customs
clearance, cargo management, logistics provider, shipment tracking, bulk shipping, project logistics,
freight services, secure shipping, logistics company, door-to-door delivery, import export logistics,
forwarder surabaya, forwarding surabaya, shipping line surabaya, logistics surabaya, infinity surabaya,
pelayaran surabaya, logistik surabaya, freight forwarder surabaya, freight forwarding surabaya,
flexibag surabaya, flexitank surabaya, flexibag indonesia, flexitank indonesia, flexibag, flexitank,
forwarder indonesia, forwarding indonesia, shipping line indonesia, logistics indonesia, infinity
indonesia, logistik indonesia, freight forwarder indonesia, freight forwarding indonesia"/>
@endsection('meta')
@section('navigation')
<li><a href="/#hero" class="active">Home</a></li>
<li><a href="/#about">About</a></li>
<li class="dropdown"><a href="/#services"><span>Services</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
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
    <!-- Hero Section -->
    <section id="hero" class="hero section">
        <div class="container">
            <div class="row gy-4">
                <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center" data-aos="fade-up">
                    <h1>Next Decade. Next Wave.</h1>
                    <p>AT INFINITY, WE ASPIRE TO LEAP TO THE NEXT LEVEL OF ACHIEVEMENTS, GOING FROM GOOD TO GREAT</p>
                    <div class="d-flex">
                        <a href="/#about" class="btn-get-started">Get Started</a>
                        <a href="https://www.youtube.com/watch?v=zx4s5h1Fats&ab_channel=MuhammadMohdAzam" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>
                    </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-out" data-aos-delay="100">
                    <img src="<?php echo url('/'); ?>/img/hero-img.png" class="img-fluid animated" alt="Container Infinity">
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
                        <h2>
                            <i class="bi bi-eye-fill icon"> Vision</i>
                        </h2>
                        <p>To Become The Leading Regional Logistics Provider By Empowering Export Growth Through World Class Services</p>
                    </div>
                </div>
                <div class="col-lg-4 d-flex" data-aos="fade-up" data-aos-delay="200">
                    <div class="service-item position-relative text-center">
                        <h2>
                            <i class="bi bi-bullseye icon"> Mission</i>
                        </h2>
                        <p>To Deliver Innovative And Reliable Logistics Solutions Through Our Integrated Global Network Ensuring The Seamless Flow Of Export Goods</p>
                    </div>
                </div>
		        <div class="col-lg-4 d-flex" data-aos="fade-up" data-aos-delay="300">
                    <div class="service-item position-relative text-center">
                        <h2>
                            <i class="bi bi-gem icon"> Core Values</i>
                        </h2>
                        <p>Integrity, People Driven, Technology Oriented, Customer Focus, Innovation & Excellence, Teamwork, HSEC Responbility</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Featured Services Section -->
    <!-- About Section -->
    <section id="about" class="about section">
        <div class="container section-title" data-aos="fade-up">
            <span>About Us<br></span>
            <h2>About</h2>
        </div>
        <div class="container">
            <div class="row gy-4">
                <div class="col-lg-6 position-relative align-self-start" data-aos="fade-up" data-aos-delay="100">
                    <img src="<?php echo url('/'); ?>/img/about.png" class="img-fluid" alt="About Infinity">
                    <!-- <a href="https://www.youtube.com/watch?v=zx4s5h1Fats&ab_channel=MuhammadMohdAzam" class="glightbox pulsating-play-btn"></a> -->
                </div>
                <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="200">
                    <p> We are a logistics service provider headquartered in Malaysia, with a strong
                        operational presence in Surabaya, Indonesia, and across Southeast Asia. Our
                        services cover five key areas: 
                    </p>
                    <ul>
                        <li><i class="bi bi-check2-all"></i> <span>NVOCC (Non-Vessel Operating Common Carrier)</span></li>
                        <li><i class="bi bi-check2-all"></i> <span>Freight Forwarding Services</span></li>
                        <li><i class="bi bi-check2-all"></i> <span>Domestic Forwarding Services</span></li>
                        <li><i class="bi bi-check2-all"></i> <span>Flexitank Solutions and Related Services</span></li>
                        <li><i class="bi bi-check2-all"></i> <span>Project Logistics Services</span></li>
                    </ul>
                    <p> With a solid presence in the region, we specialize in providing efficient and
                        reliable logistics solutions across a wide range of industries. Our aim is to
                        ensure seamless operations across multiple countries. Our team is dedicated to
                        delivering high-quality, efficient logistics services to meet the diverse needs
                        of our clients.
                    </p>
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
                        <span data-purecounter-start="0" data-purecounter-end="352" data-purecounter-duration="1" class="purecounter"></span>
                        <p>Clients Active</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="stats-item text-center w-100 h-100">
                        <span data-purecounter-start="0" data-purecounter-end="18934" data-purecounter-duration="1" class="purecounter"></span>
                        <p>Shipments Handled</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="stats-item text-center w-100 h-100">
                        <span data-purecounter-start="0" data-purecounter-end="9470" data-purecounter-duration="1" class="purecounter"></span>
                        <p>Containers Moved</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="stats-item text-center w-100 h-100">
                        <span data-purecounter-start="0" data-purecounter-end="1501" data-purecounter-duration="1" class="purecounter"></span>
                        <p>Project Cargo</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Stats Section -->
    <!-- Services Section -->
    <section id="services" class="services section light-background">
        <div class="container section-title" data-aos="fade-up">
            <span>Our Services</span>
            <h2>Services</h2>
        </div>
        <div class="container">
            <div class="row gy-4">
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-item position-relative">
                        <div class="icon">
                            <img src="<?php echo url('/'); ?>/img/services/NVOCC.png" alt="NVOCC">
                        </div>
                        <a href="/nvocc" class="stretched-link">
                            <h3>NVOCC</h3>
                        </a>
                        <p>
                            We provide non-vessel operating common carrier (NVOCC) services for shipping.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="service-item position-relative">
                        <div class="icon">
                            <img src="<?php echo url('/'); ?>/img/services/FREIGHT FORWARDING.png" alt="FREIGHT FORWARDING">
                        </div>
                        <a href="/freight-forwarding" class="stretched-link">
                            <h3>Freight Forwarding</h3>
                        </a>
                        <p>
                            Manages the logistics of transporting goods efficiently.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="service-item position-relative">
                        <div class="icon">
                            <img src="<?php echo url('/'); ?>/img/services/DOMESTIC FORWARDING.png" alt="DOMESTIC FORWARDING">
                        </div>
                        <a href="/domestic-forwarding" class="stretched-link">
                            <h3>Domestic Forwarding</h3>
                        </a>
                        <p>
                            Focuses on transportation and logistics within the country.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="service-item position-relative">
                        <div class="icon">
                            <img src="<?php echo url('/'); ?>/img/services/FLEXITANK FLEXIBAG.png" alt="FLEXITANK FLEXIBAG">
                        </div>
                        <a href="/flexitank-flexibag" class="stretched-link">
                            <h3>Flexitank / Flexibag</h3>
                        </a>
                        <p>
                            Turns a container into a bulk liquid carrier for non hazardous liquids.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
                    <div class="service-item position-relative">
                        <div class="icon">
                            <img src="<?php echo url('/'); ?>/img/services/PROJECT LOGISTICS.png" alt="PROJECT LOGISTICS">
                        </div>
                        <a href="/project-logistics" class="stretched-link">
                            <h3>Project Logistics</h3>
                        </a>
                        <p>
                            Handle large scale and complex logistical projects.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
                    <div class="service-item position-relative">
                        <div class="icon">
                            <img src="<?php echo url('/'); ?>/img/services/SEE ALL.png" alt="SEE ALL">
                        </div>
                        <a href="/nvocc" class="stretched-link">
                            <h3>See All</h3>
                        </a>
                        <p>
                            Service Details
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Services Section -->
    <!-- Call To Action Section -->
    <!-- <section id="call-to-action" class="call-to-action section accent-background">
        <div class="container">
            <div class="row justify-content-center" data-aos="zoom-in" data-aos-delay="100">
                <div class="col-xl-10">
                    <div class="text-center">
                        <h3>HEADQUARTERS INFINITY</h3>
                        <a class="cta-btn" href="https://www.infinity.com.my/"><span>Website Malaysia</span></a>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- /Call To Action Section -->
    <!-- Team Section -->
    <section id="team" class="team section">
        <div class="container section-title" data-aos="fade-up">
            <span>Our Management</span>
            <h2>Management</h2>
        </div>
        <div class="container">
            <div class="row gy-5 justify-content-center">
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="member">
                        <div class="pic"><img src="<?php echo url('/'); ?>/img/team.png" class="img-fluid" alt="Member Infinity"></div>
                        <div class="member-info">
                            <h3>Ayu Wulan Maya Sary</h3>
                            <span>Director</span>
                            <!-- <div class="social">
                                <a href=""><i class="bi bi-twitter-x"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Team Section -->
    <!-- Testimonials Section -->
    <section id="testimonials" class="testimonials section light-background">
        <div class="container section-title" data-aos="fade-up">
            <span>Our Clients</span>
            <h2>Clients</h2>
        </div>
        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <div class="swiper init-swiper" data-speed="600" data-delay="5000" data-breakpoints="{ &quot;320&quot;: { &quot;slidesPerView&quot;: 1, &quot;spaceBetween&quot;: 40 }, &quot;1200&quot;: { &quot;slidesPerView&quot;: 3, &quot;spaceBetween&quot;: 20 } }">
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
                        },
                        "breakpoints": {
                            "320": {
                            "slidesPerView": 1,
                            "spaceBetween": 40
                            },
                            "1200": {
                            "slidesPerView": 3,
                            "spaceBetween": 20
                            }
                        }
                    }
                </script>
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="testimonial-item" "="">
                            <p></p>
                            <img src="<?php echo url('/'); ?>/img/testimonials/testimonials-1.png" class="testimonial-img" alt="AJINOMOTO INDONESIA">
                            <h3>PT. AJINOMOTO INDONESIA</h3>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <p></p>
                            <img src="<?php echo url('/'); ?>/img/testimonials/testimonials-2.png" class="testimonial-img" alt="WILMAR CAHAYA INDONESIA">
                            <h3>PT. WILMAR CAHAYA INDONESIA</h3>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <p></p>
                            <img src="<?php echo url('/'); ?>/img/testimonials/testimonials-3.png" class="testimonial-img" alt="GUDANG GARAM">
                            <h3>PT. GUDANG GARAM</h3>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <p></p>
                            <img src="<?php echo url('/'); ?>/img/testimonials/testimonials-4.png" class="testimonial-img" alt="SINAR MAS AGRO RESOURCES AND TECHNOLOGY">
                            <h3>PT. SINAR MAS AGRO RESOURCES AND TECHNOLOGY</h3>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <p></p>
                            <img src="<?php echo url('/'); ?>/img/testimonials/testimonials-5.png" class="testimonial-img" alt="INDO OIL PERKASA">
                            <h3>PT. INDO OIL PERKASA</h3>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <p></p>
                            <img src="<?php echo url('/'); ?>/img/testimonials/testimonials-6.png" class="testimonial-img" alt="GUNTNER INDONESIA">
                            <h3>PT. GUNTNER INDONESIA</h3>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <p></p>
                            <img src="<?php echo url('/'); ?>/img/testimonials/testimonials-7.png" class="testimonial-img" alt="KEMIRA CHEMICALS INDONESIA">
                            <h3>PT. KEMIRA CHEMICALS INDONESIA</h3>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <p></p>
                            <img src="<?php echo url('/'); ?>/img/testimonials/testimonials-8.png" class="testimonial-img" alt="SAHATI HAMPARAN TANGGUH">
                            <h3>PT. SAHATI HAMPARAN TANGGUH</h3>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <p></p>
                            <img src="<?php echo url('/'); ?>/img/testimonials/testimonials-9.png" class="testimonial-img" alt="DUNIA KIMIA JAYA">
                            <h3>PT. DUNIA KIMIA JAYA</h3>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <p></p>
                            <img src="<?php echo url('/'); ?>/img/testimonials/testimonials-10.png" class="testimonial-img" alt="LOKA REFRACTORIES WIRA JATIM">
                            <h3>PT. LOKA REFRACTORIES WIRA JATIM</h3>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>
    <!-- /Testimonials Section -->
    <!-- Contact Section -->
    <section id="contact" class="contact section">
        <div class="container section-title" data-aos="fade-up">
            <span>Contact Us</span>
            <h2>Contact</h2>
        </div>
        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <div class="row gy-4">
                <div class="col-lg-5">
                    <div class="info-wrap">
                        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="200">
                            <i class="bi bi-geo-alt flex-shrink-0"></i>
                            <div>
                                <h3>Our Address</h3>
                                <p>Plaza BRI, 12th Floor, Suite 1206,</p>
                                <p>Jl. Jendral Basuki Rahmad 122,</p>
                                <p>Surabaya City, East Java Indonesia</p>
                            </div>
                        </div>
                        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
                            <i class="bi bi-telephone flex-shrink-0"></i>
                            <div>
                                <h3>Call Us</h3>
                                <p>+62-31-549-2926</p>
                            </div>
                        </div>
                        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
                            <i class="bi bi-envelope flex-shrink-0"></i>
                            <div>
                                <h3>Email Us</h3>
                                <p>cssurabaya@infinity-sby.com</p>
                            </div>
                        </div>
                        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="500">
                            <i class="bi bi-clock flex-shrink-0"></i>
                            <div>
                                <h3>Our Working Hours</h3>
                                <p>Monday to Friday - 08:30 to 17:00 WIB</p>
                                <p>Saturday - 08:30 to 13:00 WIB</p>
                                <p>Sunday - Closed</p>
                            </div>
                        </div>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3629.241613433687!2d112.73795435839659!3d-7.273136269158283!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fbddceec0c2d%3A0x3a125fab20e07b6b!2sPT.%20Infinity%20Logistics%20Indonesia!5e0!3m2!1sen!2sus!4v1752200391253!5m2!1sen!2sus"
                            title="Google Maps" frameborder="0" style="border:0; width: 100%; height: 310px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
                <div class="col-lg-7">
                    <form action="{{ route('send.email') }}" method="POST" id="contact-form" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
                        @csrf
                        @honeypot
                        <div class="row gy-4">
                            <div class="cf-turnstile" data-sitekey="{{ env('TURNSTILE_SITE_KEY') }}" data-size="flexible" data-theme="light"></div>
                            <h4 class="text-center">
                                GET IN TOUCH
                            </h4>
                            <p>
                                <strong>You can reach anytime.</strong> Contact us via call or email, or simply fill out the form below and we will get back to you within one working day.
                            </p>
                            <div class="col-md-12">
                                <input type="text" name="name" id="name-field" class="form-control" placeholder="Your Name" required="">
                            </div>
                            <div class="col-md-12">
                                <input type="email" name="email" id="email-field" class="form-control" placeholder="Your Email" required="">
                            </div>
                            <div class="col-md-12">
                                <textarea rows="10" name="message" id="message-field"  class="form-control" placeholder="Your Message" required=""></textarea>
                            </div>
                            <div class="col-md-12">
                                <div class="form-check">
                                    <input type="checkbox" name="subscribe" id="subscribe-checkbox" class="form-check-input" value="yes">
                                    <label for="subscribe-checkbox" class="form-check-label">
                                        <strong>Join Our Newsletter.</strong> Subscribe to our newsletter and receive the latest news about our services!
                                    </label>
                                </div>
                            </div>
                            <input type="hidden" name="recaptcha_token" id="recaptcha_token">
                            <input type="hidden" name="turnstile_token" id="turnstile_token">
                            <div class="col-md-12">
                                <button type="submit" id="submit-button"><i class="bi bi-send-fill"></i><span> Send Message</span></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- /Contact Section -->

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://www.google.com/recaptcha/api.js?render={{ env('RECAPTCHA_SITE_KEY') }}&badge=bottomleft"></script>
    <script src="https://challenges.cloudflare.com/turnstile/v0/api.js" async defer></script>

    <script>
        document.getElementById("submit-button").addEventListener("click", function (e) {
            e.preventDefault();

            const form = document.getElementById("contact-form");
            const name = document.getElementById("name-field").value.trim();
            const email = document.getElementById("email-field").value.trim();
            const message = document.getElementById("message-field").value.trim();

            if (!name || !email || !message) {
                Swal.fire({
                    icon: "warning",
                    title: "Incomplete Form",
                    allowOutsideClick: false,
                    showConfirmButton: false,
                    timer: 2000,
                });
                return;
            }

            grecaptcha.ready(function () {
                grecaptcha.execute("{{ env('RECAPTCHA_SITE_KEY') }}", { action: "submit" }).then(function (token) {
                    document.getElementById("recaptcha_token").value = token;

                    const turnstileToken = turnstile.getResponse();
                    document.getElementById("turnstile_token").value = turnstileToken;

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
                        const data = await response.json().catch(() => ({}));

                        if (response.ok) {
                            Swal.fire({
                                icon: "success",
                                title: "Success!",
                                text: data.message || "Message sent successfully.",
                                allowOutsideClick: false,
                                showConfirmButton: false,
                                timer: 3000,
                            });
                            form.reset();
                        } else {
                            let errorText = "Message not sent.";

                            if (data.errors) {
                                errorText = Object.values(data.errors).flat().join("\n");
                            } else if (data.message) {
                                errorText = data.message;
                            }

                            Swal.fire({
                                icon: "error",
                                title: "Failed!",
                                text: errorText,
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
                            text: "Unable to connect to the server.",
                            allowOutsideClick: false,
                            showConfirmButton: false,
                            timer: 3000,
                        });
                    });
                });
            });
        });
    </script>
</main>
@endsection('content')