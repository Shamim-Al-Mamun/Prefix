  <!-- Testimonial Area -->
  <section class="ISPTemplateV1-testimonial">
      <div class="container">
          <div class="row">
              <div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2 col-12 wow fadeInUp" data-wow-delay="100ms"
                  data-wow-duration="1000ms">
                  <div class="section-head text-center">
                      <h3 class="section-head-big-title">{{ $testimonialTitle->testimonial_title }}</h3>
                      <span class="section-head-sm-title">
                          {{ $testimonialTitle->testimonial_sub_title }}</span>
                  </div>
              </div>
          </div>

          <div class="row">
              <div class="col-12 wow fadeInUp" data-wow-delay="110ms" data-wow-duration="1010ms">
                  <div class="testimonial-slider-inner">

                      @if (count($testimonialList) > 0)
                          @foreach ($testimonialList as $testimonial)
                              <div class="testimonial-single">
                                  <div class="testimonial-single-top">
                                      <i class="fi fi-sr-quote-right"></i>
                                      <p class="testimonial-content-text">
                                          {{ $testimonial->testimonial_text }}
                                      </p>
                                      <ul class="testimonial-rattings-list">

                                          @if ($testimonial->testimonial_rating == 1)
                                              <li>
                                                  <img src="./assets/img/star-icon.svg" alt="#" />
                                              </li>
                                          @elseif ($testimonial->testimonial_rating == 2)
                                              <li>
                                                  <img src="./assets/img/star-icon.svg" alt="#" />
                                              </li>
                                              <li>
                                                  <img src="./assets/img/star-icon.svg" alt="#" />
                                              </li>
                                          @elseif ($testimonial->testimonial_rating == 3)
                                              <li>
                                                  <img src="./assets/img/star-icon.svg" alt="#" />
                                              </li>
                                              <li>
                                                  <img src="./assets/img/star-icon.svg" alt="#" />
                                              </li>
                                              <li>
                                                  <img src="./assets/img/star-icon.svg" alt="#" />
                                              </li>
                                          @elseif ($testimonial->testimonial_rating == 4)
                                              <li>
                                                  <img src="./assets/img/star-icon.svg" alt="#" />
                                              </li>
                                              <li>
                                                  <img src="./assets/img/star-icon.svg" alt="#" />
                                              </li>
                                              <li>
                                                  <img src="./assets/img/star-icon.svg" alt="#" />
                                              </li>
                                              <li>
                                                  <img src="./assets/img/star-icon.svg" alt="#" />
                                              </li>
                                          @elseif ($testimonial->testimonial_rating == 5)
                                              <li>
                                                  <img src="./assets/img/star-icon.svg" alt="#" />
                                              </li>
                                              <li>
                                                  <img src="./assets/img/star-icon.svg" alt="#" />
                                              </li>
                                              <li>
                                                  <img src="./assets/img/star-icon.svg" alt="#" />
                                              </li>
                                              <li>
                                                  <img src="./assets/img/star-icon.svg" alt="#" />
                                              </li>
                                          @endif

                                      </ul>
                                  </div>
                                  <div class="testimonial-single-bottom">
                                      @if (!empty($testimonial->testimonial_img))
                                          <div class="testimonial-img">
                                              <img src="{{ url($testimonial->testimonial_img) }}" alt="#" />
                                          </div>
                                      @endif

                                      <div class="testimonial-content-info">
                                          <h5 class="testimonial-info-name"> {{ $testimonial->testimonial_name }}</h5>
                                          <span class="testimonial-info-label">
                                              {{ $testimonial->testimonial_title }}</span>
                                      </div>
                                  </div>
                              </div>
                          @endforeach
                      @endif

                  </div>
              </div>
          </div>

      </div>
  </section>
  <!-- End Testimonial Area -->
