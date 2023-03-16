  <!-- About Area -->
  <section class="ISPTemplateV1-about-section">
      <div class="container">
          <div class="row g-0 align-items-center">
              <div class="col-lg-6 col-12 wow fadeInLeft" data-wow-delay="100ms" data-wow-duration="1000ms">
                  <div class="about-section-content">
                      <div class="section-head">
                          <h3 class="section-head-big-title">{{ $about_us->about_section_first_title }}</h3>
                          <span class="section-head-sm-title">{{ $about_us->about_section_title_middle }}</span>
                      </div>
                      <div class="about-section-quote">
                          <i class="fi fi-bs-quote-right"></i>
                          <p class="about-section-quote-text">
                              {{ $about_us->about_section_title_last }}
                          </p>
                      </div>

                      <p class="about-section-text">{!! $about_us->about_section_title_rich_desc !!} </p>
                      <div class="about-section-btn">
                          <a class="ISPTemplateV1-btn" href="/contactus">Contact us<i
                                  class="fi fi-rr-arrow-right"></i></a>
                      </div>
                  </div>
              </div>
              <div class="col-lg-6 col-12 wow fadeInRight" data-wow-delay="110ms" data-wow-duration="1010ms">
                  <div class="about-section-img">
                      @if (!empty($about_us->about_image))
                          <img src="<?php echo $about_us->about_image; ?>" alt="#">
                      @endif

                  </div>
              </div>
          </div>
      </div>
  </section>
  <!-- End About Area -->
