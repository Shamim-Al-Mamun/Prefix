  <!-- Faq Area -->
  <div class="faq-area">
      <div class="container">
          <div class="row">
              <div class="col-lg-8 col-12 wow fadeInLeft" data-wow-delay="100ms" data-wow-duration="1000ms">
                  <div class="section-head">
                      <h3 class="section-head-big-title">{{ $faqTitle->faq_title }}</h3>
                      <span class="section-head-sm-title">{{ $faqTitle->faq_sub_title }}</span>
                  </div>
              </div>
          </div>

          <div class="faq-area-wrapper">
              <div class="row g-0 align-items-center">
                  <div class="col-lg-12 col-xl-6 col-12 wow fadeInLeft" data-wow-delay="110ms"
                      data-wow-duration="1010ms">
                      <div class="faq-area-inner">
                          <div class="accordion" id="accordionExample">
                              @if (count($faqListTitle) > 0)
                                  @foreach ($faqListTitle as $faq)
                                      <!-- Faq Item -->
                                      <div class="accordion-item">
                                          <h2 class="accordion-header" id="1">
                                              <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                  data-bs-target="#collapse{{ $faq->id }}" aria-expanded="true"
                                                  aria-controls="collapse1">
                                                  <span class="title">{{ $faq->faq_list_title }}</span>
                                              </button>
                                          </h2>
                                          <div id="collapse{{ $faq->id }}"
                                              class="accordion-collapse collapse {{ $faq->id == 1 ? 'show' : '' }}"
                                              aria-labelledby="heading1" data-bs-parent="#accordionExample">
                                              <div class="accordion-body">
                                                  <div class="faq-main-body">
                                                      <p class="faq-main-body-text">
                                                          {!! $faq->faq_list_text !!}
                                                      </p>
                                                      {{-- <ul class="faq-main-body-list">
                                                          @if (count($faq->FaqListAnswer) > 0)
                                                              @foreach ($faq->FaqListAnswer as $answer)
                                                                  <li>{{ $answer->faq_list_answer }}</li>
                                                              @endforeach
                                                          @endif
                                                      </ul> --}}
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  @endforeach
                              @endif

                          </div>
                      </div>
                  </div>
                  <div class="col-lg-12 col-xl-6 col-12 wow fadeInRight" data-wow-delay="120ms"
                      data-wow-duration="1020ms">
                      @if (!empty($faqTitle->faq_bg_img))
                          <div class="faq-img">
                              <img src="{{ url($faqTitle->faq_bg_img) }}" alt="#" />
                          </div>
                      @endif
                  </div>
              </div>
          </div>

      </div>
  </div>
  <!-- End Faq Area -->
