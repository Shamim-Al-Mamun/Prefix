    <!-- Contact Info Area -->
    <section class="contact-info-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="contact-info-card-main">
                        <div class="row">
                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="contact-info-card">
                                    <div class="contact-info-card-icon">
                                        <i class="fi fi-rs-marker"></i>
                                    </div>
                                    <div class="c-info-card-content">
                                        <h4 class="c-info-card-cont-title">Office Location</h4>
                                        <p class="c-info-card-address">
                                            {{ $footer_settings->footer_address }}
                                        </p>

                                        <div class="c-info-card-address-map-btn">
                                            <a href="{{ url($google_map->maps_iframe_code) }}" target="_blank">Open in
                                                map<i class="fi fi-tr-arrow-up-right-from-square"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="contact-info-card">
                                    <div class="contact-info-card-icon">
                                        <i class="fi fi-rr-phone-call"></i>
                                    </div>
                                    <div class="c-info-card-content">
                                        <h4 class="c-info-card-cont-title">Call Us</h4>
                                        <ul class="c-info-card-contact-list">
                                            <li>
                                                <a href="tel:++{{ $footer_settings->footer_phone }}"><img
                                                        src="./assets/img/contact-us-img/call-icon.svg"
                                                        alt="#" />+{{ $footer_settings->footer_phone }}</a>
                                            </li>
                                            <li>
                                                <a href="tel:+{{ $footer_settings->footer_email }}"><img
                                                        src="./assets/img/contact-us-img/call-icon.svg"
                                                        alt="#" />+{{ $footer_settings->footer_email }}</a>
                                            </li>
                                            {{-- <li>
                                                <a href="tel:+8801425534443"><img
                                                        src="./assets/img/contact-us-img/call-icon.svg"
                                                        alt="#" />+8801425534443</a>
                                            </li> --}}
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="contact-info-card">
                                    <div class="contact-info-card-icon">
                                        <i class="fi fi-rs-comment"></i>
                                    </div>
                                    <div class="c-info-card-content">
                                        <h4 class="c-info-card-cont-title">Chat With Us</h4>
                                        <ul class="c-info-card-chat-list">
                                            <li class="whatsapp">
                                                <a href="tel:++{{ $footer_settings->footer_phone }}"
                                                    target="_blank"><img
                                                        src="./assets/img/contact-us-img/whatsapp-icon.svg"
                                                        alt="#" />Open WhatsApp</a>
                                            </li>
                                            <li class="messenger">
                                                <a href="www.facebook.com" target="_blank"><img
                                                        src="./assets/img/contact-us-img/messenger-icon.svg"
                                                        alt="#" />Open Messenger</a>
                                            </li>
                                            {{-- <li class="www.telegram.com">
                                                <a href="#" target="_blank"><img
                                                        src="./assets/img/contact-us-img/telegram-icon.svg"
                                                        alt="#" />Open Telegram</a>
                                            </li> --}}
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="contact-us-info-map">
                @if (!empty($google_map->maps_iframe_code))
                    <div class="gmap_canvas">
                        <iframe id="gmap_canvas" src="{{ url($google_map->maps_iframe_code) }}" alt="#"
                            width="434" height="500"></iframe>
                    </div>
                @endif
            </div>
        </div>
    </section>
    <!-- End Contact Info Area -->
