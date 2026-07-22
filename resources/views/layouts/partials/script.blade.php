<!-- Scripts -->
<script src="{{ asset('vendor/alpinejs/cdn.min.js') }}" defer></script>
<script src="{{ asset('vendor/aos/js/aos.js') }}"></script>
<script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('vendor/glightbox/js/glightbox.min.js') }}"></script>
<script src="{{ asset('vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
<script src="{{ asset('vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('vendor/purecounterjs/purecounter_vanilla.js') }}"></script>
<script src="{{ asset('vendor/sweetalert2/js/sweetalert2.all.min.js') }}"></script>
<script src="{{ asset('vendor/swiper/js/swiper-bundle.min.js') }}"></script>
<script src="{{ asset('vendor/php-email-form/validate.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>

<!-- Language Switcher Script -->
<script>
    function languageSwitcher() {
        return {
            currentLang: '{{ app()->getLocale() }}',
            loading: false,
            translations: {
                messages: @json(trans('messages'))
            },
            async toggleLanguage() {
                this.loading = true;
                const newLang = this.currentLang === 'en' ? 'id' : 'en';
                try {
                    const response = await fetch('{{ route("language.switch") }}', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                        },
                        body: JSON.stringify({
                            locale: newLang
                        })
                    });
                    const data = await response.json();
                    if (data.success) {
                        this.currentLang = data.locale;
                        this.translations = data.translations;
                        document.documentElement.lang = data.locale;
                    }
                } catch (error) {
                } finally {
                    this.loading = false;
                }
            }
        }
    }
</script>

@stack('script')