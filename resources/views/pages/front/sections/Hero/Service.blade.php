  <!-- Service Area -->
  <section class="ISPTemplateV1-service">
      <div class="container">
          <div class="row">

              @if (count($features) > 0)
                  @foreach ($features as $feature)
                      <div class="col-lg-6 col-xl-3 col-md-6 col-12 wow fadeInUp" data-wow-delay="100ms"
                          data-wow-duration="1000ms">
                          <div class="service-card-single">
                              <div class="service-card-icon">
                                  @if (!empty($feature->feature_icon))
                                      <i class="fa-solid {{ $feature->feature_icon }}" style='font-size:48px'></i>
                                  @endif
                              </div>
                              <div class="service-card-content">
                                  @if (!empty($feature->feature_title))
                                      <h4 class="service-card-cont-title">{{ $feature->feature_title }}</h4>
                                  @endif
                                  @if (!empty($feature->feature_text))
                                      <p class="service-card-cont-text">
                                          {{ $feature->feature_text }}
                                      </p>
                                  @endif
                              </div>
                          </div>
                      </div>
                  @endforeach
              @endif

          </div>
      </div>
  </section>
  <!-- End Service Area -->
