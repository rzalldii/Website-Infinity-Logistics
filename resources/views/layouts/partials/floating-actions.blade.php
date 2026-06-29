<!-- WhatsApp Floating Chat Widget -->
<div class="wa-hover-zone">
    <div class="wa-popup" id="waPopup">
        <div class="wa-popup-header">
            <div class="wa-popup-header-icon">
                <i class="bi bi-whatsapp"></i>
            </div>
            <div class="wa-popup-header-text">
                <strong>Start a Conversation</strong>
                <span>Click one of our members below</span>
            </div>
            <button class="wa-popup-close" id="waClose" aria-label="Close">&times;</button>
        </div>
        <div class="wa-popup-agents">
            <a :href="'https://wa.me/628113299943?text=' + encodeURIComponent('Hi, I\'m interested in your services. (via website)')"
                class="wa-agent" target="_blank" rel="noopener" aria-label="WhatsApp">
                <div class="wa-agent-info">
                    <span>FREIGHT FORWARDING</span>
                </div>
                <i class="bi bi-whatsapp"></i>
            </a>
            <a :href="'https://wa.me/6281330681408?text=' + encodeURIComponent('Hi, I\'m interested in your services. (via website)')"
                class="wa-agent" target="_blank" rel="noopener">
                <div class="wa-agent-info">
                    <span>NVOCC</span>
                </div>
                <i class="bi bi-whatsapp"></i>
            </a>
            <a :href="'https://wa.me/6282139131081?text=' + encodeURIComponent('Hi, I\'m interested in your services. (via website)')"
                class="wa-agent" target="_blank" rel="noopener">
                <div class="wa-agent-info">
                    <span>DOMESTIC</span>
                </div>
                <i class="bi bi-whatsapp"></i>
            </a>
            <a :href="'https://wa.me/6281999198916?text=' + encodeURIComponent('Hi, I\'m interested in your services. (via website)')"
                class="wa-agent" target="_blank" rel="noopener" aria-label="WhatsApp">
                <div class="wa-agent-info">
                    <span>FLEXITANK</span>
                </div>
                <i class="bi bi-whatsapp"></i>
            </a>
            <a :href="'https://wa.me/6281216882027?text=' + encodeURIComponent('Hi, I\'m interested in your services. (via website)')"
                class="wa-agent" target="_blank" rel="noopener" aria-label="WhatsApp">
                <div class="wa-agent-info">
                    <span>WAREHOUSE</span>
                </div>
                <i class="bi bi-whatsapp"></i>
            </a>
        </div>
    </div>
    <button class="wa-widget" id="waButton" aria-label="WhatsApp">
        <i class="bi bi-whatsapp"></i>
    </button>
</div>
<!-- Scroll Top -->
<a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center" aria-label="Scroll"><i
        class="bi bi-shift-fill"></i></a>
<!-- Preloader -->
<div id="preloader"></div>