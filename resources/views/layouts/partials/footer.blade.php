<footer id="footer" class="footer">
    <div class="container footer-top">
        <div class="row gy-4">
            <div class="col-lg-3 col-md-6 footer-about">
                <h3 class="d-flex align-items-center" x-text="translations.messages.head_office"></h3>
                <div>
                    <a href="https://maps.app.goo.gl/usmiAqCiVkk7Db569">
                        <span x-text="translations.messages.head_office_address"></span>
                    </a>
                    <p class="mt-3"></p>
                    <a href="tel:+62315492926">
                        <strong><i class="bi bi-telephone-fill"></i> <span x-text="translations.messages.call"></span>
                            :</strong>
                        <span>+6231 549 2926</span>
                    </a>
                    <p></p>
                    <a href="mailto:cssurabaya@infinity-sby.com">
                        <strong><i class="bi bi-envelope-fill"></i> <span x-text="translations.messages.email"></span>
                            :</strong>
                        <span>cssurabaya@infinity-sby.com</span>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 footer-about">
                <h3 class="d-flex align-items-center" x-text="translations.messages.warehouse"></h3>
                <div>
                    <a href="https://maps.app.goo.gl/R1yCKxVYq4VN2HqA9">
                        <span x-text="translations.messages.warehouse_address"></span>
                    </a>
                    <p class="mt-3"></p>
                    <a href="https://maps.app.goo.gl/Za8DtDNG7ctwwvSz6">
                        <span x-text="translations.messages.warehouse_address2"></span>
                    </a>
                    <p class="mt-3"></p>
                    <a href="https://maps.app.goo.gl/KvPuH4JfjdNN5ktt9">
                        <span x-text="translations.messages.warehouse_address3"></span>
                    </a>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 footer-links">
                <h4 x-text="translations.messages.useful_links"></h4>
                <ul>
                    <li><i class="bi bi-chevron-right"></i><a href="{{ route('about') }}"
                            x-text="translations.messages.about"></a></li>
                    <li><i class="bi bi-chevron-right"></i><a href="{{ route('services') }}"
                            x-text="translations.messages.services"></a></li>
                    <li><i class="bi bi-chevron-right"></i><a href="{{ route('contact') }}"
                            x-text="translations.messages.contact"></a></li>
                </ul>
            </div>
            <div class="col-lg-4 col-md-12">
                <h4 x-text="translations.messages.follow_us"></h4>
                <p x-text="translations.messages.follow_desc"></p>
                <div class="social-links d-flex">
                    <a href="https://www.linkedin.com/company/infinity-logistics-and-transport" class="linkedin"
                        target="_blank" rel="noopener noreferrer" aria-label="LinkedIn"><i
                            class="bi bi-linkedin"></i></a>
                    <a href="https://www.facebook.com/infinitylogisticsandtransport" class="facebook" target="_blank"
                        rel="noopener noreferrer" aria-label="Facebook"><i class="bi bi-facebook"></i></a>
                    <a href="https://www.instagram.com/infinitysurabaya.id/" class="instagram" target="_blank"
                        rel="noopener noreferrer" aria-label="Instagram"><i class="bi bi-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>
    <div class="container copyright mt-4">
        <div class="copyright-wrapper">
            <div class="language-switcher">
                <button @click="toggleLanguage()" :disabled="loading" class="lang-toggle-btn"
                    :class="{ 'loading': loading }">
                    <span class="lang-option" :class="{ 'active': currentLang === 'id' }">ID</span>
                    <span class="lang-option" :class="{ 'active': currentLang === 'en' }">EN</span>
                    <span class="toggle-indicator" :class="{ 'slide-right': currentLang === 'en' }"></span>
                </button>
            </div>
            <div class="copyright-content">
                <p>
                    <span>&copy; </span>
                    <span> {{ date('Y') }}</span>
                    <strong class="px-1 sitename">PT. INFINITY LOGISTICS INDONESIA</strong>
                    <span>All Rights Reserved.</span>
                </p>
                <div class="credits">
                    Designed and Developed with <i class="bi bi-heart-fill"></i> by IT Infinity
                </div>
            </div>
            <div class="copyright-spacer"></div>
        </div>
    </div>
</footer>