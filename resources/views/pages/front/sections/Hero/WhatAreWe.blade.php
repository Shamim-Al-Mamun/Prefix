  <!-- What We Do Area -->
  <section class="ISPTemplateV1-WhatWeDo-section">
      <div class="container">
          <div class="row g-0 align-items-center">
              <div class="col-lg-12 col-xl-6 col-12 wow fadeInLeft" data-wow-delay="100ms" data-wow-duration="1000ms">
                  <div class="WhatWeDo-content">
                      <div class="section-head">
                          <h3 class="section-head-big-title">{{ $whatWeDo->title }}</h3>
                          <span class="section-head-sm-title">{{ $whatWeDo->sub_title }}</span>
                      </div>
                      <p class="WhatWeDo-cont-text">
                          {{ $whatWeDo->text }}
                      </p>
                      <ul class="WhatWeDo-cont-list">
                          @if (!empty($whatWeDo->list1))
                              <li>
                                  {{ $whatWeDo->list1 }}
                              </li>
                          @endif

                          @if (!empty($whatWeDo->list2))
                              <li>
                                  {{ $whatWeDo->list2 }}
                              </li>
                          @endif

                          @if (!empty($whatWeDo->list3))
                              <li>
                                  {{ $whatWeDo->list3 }}
                              </li>
                          @endif

                          @if (!empty($whatWeDo->list4))
                              <li>
                                  {{ $whatWeDo->list4 }}
                              </li>
                          @endif

                          @if (!empty($whatWeDo->list5))
                              <li>
                                  {{ $whatWeDo->list5 }}
                              </li>
                          @endif

                          @if (!empty($whatWeDo->list6))
                              <li>
                                  {{ $whatWeDo->list6 }}
                              </li>
                          @endif

                          @if (!empty($whatWeDo->list7))
                              <li>
                                  {{ $whatWeDo->list7 }}
                              </li>
                          @endif

                          @if (!empty($whatWeDo->list8))
                              <li>
                                  {{ $whatWeDo->list8 }}
                              </li>
                          @endif

                          @if (!empty($whatWeDo->list9))
                              <li>
                                  {{ $whatWeDo->list9 }}
                              </li>
                          @endif

                          @if (!empty($whatWeDo->list10))
                              <li>
                                  {{ $whatWeDo->list10 }}
                              </li>
                          @endif
                      </ul>
                  </div>
              </div>

              <div class="col-lg-12 col-xl-6 col-12">
                  <div class="WhatWeDo-card-main">
                      <div class="row">
                          @if (!empty($whatWeDo->card1_title))
                              <div class="col-lg-4 col-xl-6 col-md-6 col-12 wow fadeInUp" data-wow-delay="110ms"
                                  data-wow-duration="1010ms">

                                  <div class="WhatWeDo-card-single">
                                      @if (!empty($whatWeDo->card1_logo))
                                          <div class="WhatWeDo-card-icon">
                                              <img src="{{ url($whatWeDo->card1_logo) }}" alt="title"
                                                  alt="#" />
                                          </div>
                                      @endif
                                      <div class="WhatWeDo-card-content">
                                          @if (!empty($whatWeDo->card1_title))
                                              <h4 class="WhatWeDo-card-cont-title"> {{ $whatWeDo->card1_title }}</h4>
                                          @endif
                                          <p class="WhatWeDo-card-cont-text">
                                              @if (!empty($whatWeDo->card1_text))
                                                  {{ $whatWeDo->card1_text }}
                                              @endif
                                          </p>
                                      </div>
                                  </div>
                              </div>
                          @endif

                          @if (!empty($whatWeDo->card2_title))
                              <div class="col-lg-4 col-xl-6 col-md-6 col-12 wow fadeInUp" data-wow-delay="110ms"
                                  data-wow-duration="1010ms">
                                  <div class="WhatWeDo-card-single">
                                      @if (!empty($whatWeDo->card2_logo))
                                          <div class="WhatWeDo-card-icon">
                                              <img src="{{ url($whatWeDo->card2_logo) }}" alt="title"
                                                  alt="#" />
                                          </div>
                                      @endif
                                      <div class="WhatWeDo-card-content">
                                          @if (!empty($whatWeDo->card2_title))
                                              <h4 class="WhatWeDo-card-cont-title"> {{ $whatWeDo->card2_title }}</h4>
                                          @endif
                                          <p class="WhatWeDo-card-cont-text">
                                              @if (!empty($whatWeDo->card2_text))
                                                  {{ $whatWeDo->card2_text }}
                                              @endif
                                          </p>
                                      </div>
                                  </div>
                              </div>
                          @endif

                          @if (!empty($whatWeDo->card3_title))
                              <div class="col-lg-4 col-xl-6 col-md-6 col-12 wow fadeInUp" data-wow-delay="110ms"
                                  data-wow-duration="1010ms">
                                  <div class="WhatWeDo-card-single">
                                      @if (!empty($whatWeDo->card3_logo))
                                          <div class="WhatWeDo-card-icon">
                                              <img src="{{ url($whatWeDo->card3_logo) }}" alt="title"
                                                  alt="#" />
                                          </div>
                                      @endif
                                      <div class="WhatWeDo-card-content">
                                          @if (!empty($whatWeDo->card3_title))
                                              <h4 class="WhatWeDo-card-cont-title"> {{ $whatWeDo->card3_title }}</h4>
                                          @endif
                                          <p class="WhatWeDo-card-cont-text">
                                              @if (!empty($whatWeDo->card3_text))
                                                  {{ $whatWeDo->card3_text }}
                                              @endif
                                          </p>
                                      </div>
                                  </div>
                              </div>
                          @endif

                          @if (!empty($whatWeDo->card4_title))
                              <div class="col-lg-4 col-xl-6 col-md-6 col-12 wow fadeInUp" data-wow-delay="110ms"
                                  data-wow-duration="1010ms">
                                  <div class="WhatWeDo-card-single">
                                      @if (!empty($whatWeDo->card4_logo))
                                          <div class="WhatWeDo-card-icon">
                                              <img src="{{ url($whatWeDo->card4_logo) }}" alt="title"
                                                  alt="#" />
                                          </div>
                                      @endif
                                      <div class="WhatWeDo-card-content">
                                          @if (!empty($whatWeDo->card4_title))
                                              <h4 class="WhatWeDo-card-cont-title"> {{ $whatWeDo->card4_title }}</h4>
                                          @endif
                                          <p class="WhatWeDo-card-cont-text">
                                              @if (!empty($whatWeDo->card4_text))
                                                  {{ $whatWeDo->card4_text }}
                                              @endif
                                          </p>
                                      </div>
                                  </div>
                              </div>
                          @endif

                          @if (!empty($whatWeDo->card5_title))
                              <div class="col-lg-4 col-xl-6 col-md-6 col-12 wow fadeInUp" data-wow-delay="110ms"
                                  data-wow-duration="1010ms">
                                  <div class="WhatWeDo-card-single">
                                      @if (!empty($whatWeDo->card5_logo))
                                          <div class="WhatWeDo-card-icon">
                                              <img src="{{ url($whatWeDo->card5_logo) }}" alt="title"
                                                  alt="#" />
                                          </div>
                                      @endif
                                      <div class="WhatWeDo-card-content">
                                          @if (!empty($whatWeDo->card5_title))
                                              <h4 class="WhatWeDo-card-cont-title"> {{ $whatWeDo->card5_title }}</h4>
                                          @endif
                                          <p class="WhatWeDo-card-cont-text">
                                              @if (!empty($whatWeDo->card5_text))
                                                  {{ $whatWeDo->card5_text }}
                                              @endif
                                          </p>
                                      </div>
                                  </div>
                              </div>
                          @endif
                          
                          @if (!empty($whatWeDo->card6_title))
                              <div class="col-lg-4 col-xl-6 col-md-6 col-12 wow fadeInUp" data-wow-delay="110ms"
                                  data-wow-duration="1010ms">
                                  <div class="WhatWeDo-card-single">
                                      @if (!empty($whatWeDo->card6_logo))
                                          <div class="WhatWeDo-card-icon">
                                              <img src="{{ url($whatWeDo->card6_logo) }}" alt="title"
                                                  alt="#" />
                                          </div>
                                      @endif
                                      <div class="WhatWeDo-card-content">
                                          @if (!empty($whatWeDo->card6_title))
                                              <h4 class="WhatWeDo-card-cont-title"> {{ $whatWeDo->card6_title }}</h4>
                                          @endif
                                          <p class="WhatWeDo-card-cont-text">
                                              @if (!empty($whatWeDo->card6_text))
                                                  {{ $whatWeDo->card6_text }}
                                              @endif
                                          </p>
                                      </div>
                                  </div>
                              </div>
                          @endif
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>
  <!-- End What We Do Area -->
