  <!-- Footer Area -->
  <footer class="footer-area">
      <div class="container">
          <div class="footer-top">
              <div class="row">
                  <div class="col-lg-4 col-md-5 col-12">
                      <div class="footer-about">
                          @if (!empty($footer_settings->footer_logo))
                              <div class="footer-logo">
                                  <a href="/"><img src="{{ url($footer_settings->footer_logo) }}"
                                          alt="#" /></a>
                              </div>
                          @endif
                          <div class="footer-about-content">
                              <h4 class="footer-about-cont-title">
                                  {{ $footer_settings->footer_heading }}
                              </h4>
                              <p class="footer-about-cont-text">
                                  {{ $footer_settings->footer_text }}
                              </p>
                          </div>
                      </div>
                  </div>
                  <div class="col-lg-3 offset-lg-1 col-md-3 col-12">
                      <div class="footer-widget quick-links">
                          <h3 class="footer-widget-title">Quick Links</h3>
                          <ul class="quick-links-list">

                              <li><a href="{{ $footer_settings->footer_link_one_url }}"><i
                                          class="fa-solid fa-angles-right"></i>{{ $footer_settings->footer_link_one }}</a>
                              </li>
                              <li><a href="{{ $footer_settings->footer_link_five_url }}"><i
                                          class="fa-solid fa-angles-right"></i>{{ $footer_settings->footer_link_five }}</a>
                              </li>

                          </ul>
                      </div>
                  </div>
                  <div class="col-lg-4 col-md-4 col-12">
                      <div class="footer-widget footer-contact">
                          <h3 class="footer-widget-title">Contacts</h3>
                          <div class="footer-contact-inner">
                              <div class="footer-contact-single">
                                  <i class="fi fi-rs-marker"></i>
                                  <div class="footer-contact-content">
                                      <p class="footer-contact-cont-text">
                                          {{ $footer_settings->footer_address }}
                                      </p>
                                  </div>
                              </div>
                              <div class="footer-contact-single">
                                  <i class="fi fi-rr-phone-call"></i>
                                  <ul class="footer-contact-list">
                                      <li><a
                                              href="{{ $footer_settings->footer_phone }}">{{ $footer_settings->footer_phone }}</a>
                                      </li>
                                      <li>
                                          <a href="{{ $footer_settings->footer_email }}">
                                              {{ $footer_settings->footer_email }}</a>
                                      </li>
                                  </ul>
                              </div>
                              <div class="footer-contact-social">
                                  <h5 class="footer-contact-social-title">Follow us:</h5>
                                  <ul class="footer-contact-social-list">

                                      <li>
                                          <a target="_blank" rel="noreferrer"
                                              href=" {{ $footer_settings->footer_facebook_url }}"><i
                                                  class="icofont-facebook"></i></a>
                                      </li>

                                      <li>
                                          <a target="_blank" rel="noreferrer"
                                              href=" {{ $footer_settings->footer_twitter_url }}"><i
                                                  class="icofont-skype"></i></a>
                                      </li>

                                      <li>
                                          <a target="_blank" rel="noreferrer"
                                              href=" {{ $footer_settings->footer_instagram_url }}"><i
                                                  class="icofont-instagram"></i></a>
                                      </li>

                                      <li>
                                          <a target="_blank" rel="noreferrer"
                                              href=" {{ $footer_settings->footer_linkedin_url }}"><i
                                                  class="icofont-whatsapp"></i></a>
                                      </li>

                                  </ul>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="footer-bottom">
              <div class="row align-items-center">
                  <div class="col-12">
                      <ul class="footer-pay-options">
                          <li>Pay With |</li>
                          @if (!empty($footer_settings->footer_large_image))
                              <li>
                                  <a href="#" target="_blank"><img
                                          src="{{ url($footer_settings->footer_large_image) }}" alt="#" /></a>
                              </li>
                          @endif

                          @if (!empty($footer_settings->footer_bg_image))
                              <li>
                                  <a href="#" target="_blank"><img
                                          src="{{ url($footer_settings->footer_bg_image) }}" alt="#" /></a>
                              </li>
                          @endif
                          {{-- <li>
                              <a href="#" target="_blank"><img src="./assets/img/payment-icon/amex.svg"
                                      alt="#" /></a>
                          </li>
                          <li>
                              <a href="#" target="_blank"><img src="./assets/img/payment-icon/paypal.svg"
                                      alt="#" /></a>
                          </li>
                          <li>
                              <a href="#" target="_blank"><img src="./assets/img/payment-icon/payoneer.svg"
                                      alt="#" /></a>
                          </li>
                          <li>
                              <a href="#" target="_blank"><img src="./assets/img/payment-icon/bkash.svg"
                                      alt="#" /></a>
                          </li>
                          <li>
                              <a href="#" target="_blank"><img src="./assets/img/payment-icon/nagad.svg"
                                      alt="#" /></a>
                          </li>
                          <li>
                              <a href="#" target="_blank"><img src="./assets/img/payment-icon/rocket.svg"
                                      alt="#" /></a>
                          </li>
                          <li>
                              <a href="#" target="_blank"><img src="./assets/img/payment-icon/upay.svg"
                                      alt="#" /></a>
                          </li> --}}
                          <li>| Verifyby SSL Commerz</li>
                      </ul>
                  </div>
                  <div class="col-lg-12 col-xl-6 col-12">
                      <p class="footer-copyright-text">
                      <div class="footer-copyright-text">{!! $footer_settings->footer_copyright !!} Developed By <a
                              href="https://getup.com.bd">Getup Limited</a></div>
                      </p>
                  </div>
                  <div class="col-lg-12 col-xl-6 col-12">
                      <ul class="footer-terms-privacy-list">
                          <li><a
                                  href="{{ $footer_settings->footer_link_three_url }}">{{ $footer_settings->footer_link_three }}</a>
                          </li>

                          <li><a
                                  href="{{ $footer_settings->footer_link_two_url }}">{{ $footer_settings->footer_link_two }}</a>
                          </li>
                          <li><a
                                  href="{{ $footer_settings->footer_link_four_url }}">{{ $footer_settings->footer_link_four }}</a>
                          </li>
                      </ul>
                  </div>
              </div>
          </div>
      </div>
  </footer>
  <!-- End Footer Area -->
