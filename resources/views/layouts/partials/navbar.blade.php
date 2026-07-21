<header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">
        <a href="{{ route('home') }}" class="logo d-flex align-items-center me-auto">
            <img src="{{ asset('img/logo.webp') }}" width="36" height="36" alt="Logo Infinity">
            <h1 class="sitename">Infinity Logistics Indonesia</h1>
        </a>
        <nav id="navmenu" class="navmenu">
            <ul>
                <li><a href="{{ route('about') }}" x-text="translations.messages.about"></a></li>
                <li class="dropdown"><a href="{{ route('services') }}"><span
                            x-text="translations.messages.services"></span> <i
                            class="bi bi-chevron-down toggle-dropdown"></i></a>
                    <ul>
                        <li class="dropdown"><a href="{{ route('nvocc') }}"><span
                                    x-text="translations.messages.nvocc"></span> <i
                                    class="bi bi-chevron-down toggle-dropdown"></i></a>
                            <ul>
                                <li><a href="{{ route('nvocc-schedule') }}"
                                        x-text="translations.messages.nvocc_schedule"></a></li>
                            </ul>
                        </li>
                        <li><a href="{{ route('freight-forwarding') }}"
                                x-text="translations.messages.freight_forwarding"></a></li>
                        <li><a href="{{ route('domestic-forwarding') }}"
                                x-text="translations.messages.domestic_forwarding"></a></li>
                        <li class="dropdown"><a href="{{ route('flexitank-flexibag') }}"><span
                                    x-text="translations.messages.flexitank_flexibag"></span> <i
                                    class="bi bi-chevron-down toggle-dropdown"></i></a>
                            <ul>
                                <li><a href="{{ route('flexitank-flexibag-details') }}"
                                        x-text="translations.messages.flexitank_flexibag_details"></a></li>
                            </ul>
                        </li>
                        <li><a href="{{ route('project-logistics') }}"
                                x-text="translations.messages.project_logistics"></a></li>
                        <li><a href="{{ route('customs-clearance') }}"
                                x-text="translations.messages.customs_clearance"></a></li>
                    </ul>
                </li>
                <li><a href="{{ route('contact') }}" x-text="translations.messages.contact"></a></li>
            </ul>
            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>
    </div>
</header>