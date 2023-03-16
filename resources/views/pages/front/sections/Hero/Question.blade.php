  <!-- Call Action Area -->
  @if (!empty($question->question_bg_img))
      <section class="call-to-action-area" style="background-image: url(' {{ $question->question_bg_img }}')">
          <div class="container">
              <div class="row">
                  <div class="col-lg-10 offset-lg-1 col-xl-8 offset-xl-2 col-12">
                      <div class="call-to-action-content">
                          <h3 class="call-to-action-cont-title">
                              {{ $question->question_title }}
                          </h3>
                          <p class="call-to-action-cont-text">
                              {{ $question->question_text }}
                          </p>
                          <div class="call-to-action-btn">
                              <a href="{{ $question->question_btn1_link }}" class="ISPTemplateV1-btn"><i
                                      class="fi fi-rs-call-outgoing"></i>
                                  {{ $question->question_btn1_text }}</a><a class="ISPTemplateV1-btn secondary"
                                  href="{{ $question->question_btn2_link }}"> {{ $question->question_btn2_text }}<i
                                      class="fi fi-rr-arrow-right"></i></a>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </section>
  @endif
  <!-- End Call Action Area -->
