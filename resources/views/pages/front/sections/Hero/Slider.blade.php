  <!-- Hero Area -->
  <section class="ISPTemplateV1-hero"
      @if (!empty($header_settings->hero_img)) style="background-image: url('{{ url($header_settings->hero_img) }}')" @endif>
      <div class="container">
          <div class="row align-items-center">
              <div class="col-12">
                  <div class="hero-slider">

                      @if (count($heros) > 0)
                          @foreach ($heros as $hero)
                              <div class="hero-single-slider">
                                  <div class="row align-items-center">
                                      <div class="col-lg-6 col-12">
                                          @if (!empty($hero->hero_thumbnail))
                                              <div class="hero-img">
                                                  <img src="{{ url($hero->hero_thumbnail) }}" alt="#" />
                                              </div>
                                          @endif
                                      </div>
                                      <div class="col-lg-6 col-12">
                                          <div class="hero-content">
                                              {{-- <span class="hero-cont-sm-title">Welcome to</span> --}}
                                              @if (!empty($hero->hero_title))
                                                  <h1 class="hero-cont-big-title">
                                                      {{ $hero->hero_title }}
                                                  </h1>
                                              @endif
                                              @if (!empty($hero->hero_text))
                                                  <p class="hero-cont-text">
                                                      {{ $hero->hero_text }}
                                                  </p>
                                              @endif
                                              <div class="hero-content-btn">
                                                  @if (!empty($hero->hero_main_button))
                                                      <a href="{{ $hero->hero_main_button_link }}"
                                                          class="ISPTemplateV1-btn">
                                                          {{ $hero->hero_main_button }}
                                                      </a>
                                                  @endif
                                                  @if (!empty($hero->hero_main_button_two))
                                                      <a href="{{ $hero->hero_main_button_two_link }}"
                                                          class="ISPTemplateV1-btn secondary">
                                                          {{ $hero->hero_main_button_two }}
                                                      </a>
                                                  @endif
                                              </div>
                                          </div>
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
  <!-- End Hero Area -->
