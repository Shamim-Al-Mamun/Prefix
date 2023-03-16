  <!-- Banner Area -->
  <section class="ISPTemplateV1-banner">
      <div class="container">
          <div class="row">

              @if (!empty($explore->card1_img))
                  <div class="col-lg-6 col-12">
                      <div class="banner-single">
                          <div class="banner-single-img">
                              <img src="{{ url($explore->card1_img) }}" alt="#" />
                              <div class="banner-single-btn">
                                  @if (!empty($explore->card1_button_link) && !empty($explore->card1_button_text))
                                      <a href={{ $explore->card1_button_link }} target="_blank"
                                          class="ISPTemplateV1-btn">{{ $explore->card1_button_text }}</a>
                                  @endif
                              </div>
                          </div>
                      </div>
                  </div>
              @endif

              @if (!empty($explore->card2_img))
                  <div class="col-lg-6 col-12">
                      <div class="banner-single">
                          <div class="banner-single-img">
                              <img src="{{ url($explore->card2_img) }}" alt="#" />
                              <div class="banner-single-btn">
                                  @if (!empty($explore->card2_button_text) && !empty($explore->card2_button_text))
                                      <a href={{ $explore->card2_button_text }} target="_blank"
                                          class="ISPTemplateV1-btn">{{ $explore->card2_button_text }}</a>
                                  @endif
                              </div>
                          </div>
                      </div>
                  </div>
              @endif

          </div>
      </div>
  </section>
  <!-- End Banner Area -->
