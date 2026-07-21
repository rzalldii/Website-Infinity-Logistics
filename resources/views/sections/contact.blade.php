@extends('layouts.app')
@section('title', __('messages.contact_title'))
@section('meta_description', __('messages.contact_meta_description'))
@section('canonical', route('contact'))
@section('content')
    <main class="main">
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