    <!-- Contact Form Area -->
    <section class="contact-us-form-area">
        @if (!empty($contact_title->contact_section_title_last))
            <div class="contact-form-img">
                <img src="{{ url($contact_title->contact_section_title_last) }}" alt="#" />
            </div>
        @endif

        <div class="container space z-index-common">
            <div class="row align-items-center justify-content-end">
                <div class="col-lg-6">
                    <div class="contact-us-form-content">
                        <div class="contact-us-form-cont-top">
                            <h4 class="contact-form-cont-title">{{ $contact_title->contact_section_first_title }}</h4>
                            <p class="contact-form-cont-text">
                                {{ $contact_title->contact_section_title_desc }}
                            </p>
                        </div>
                        <div class="contact-form-main">
                            <form action="{{ route('contact-form') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <input type="text" name="FirstName" placeholder="Full name" required />
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <input type="text" name="LastName" placeholder="Last name" required />
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="form-group">
                                            <input type="text" name="Phone" placeholder="Phone number"
                                                required />
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="form-group">
                                            <input type="email" name="Email" placeholder="Email address" required />
                                        </div>
                                    </div>
                                    {{-- <div class="col-12">
                                        <div class="form-group">
                                            <input type="text" name="subject" placeholder="Subject" required />
                                        </div>
                                    </div> --}}
                                    <div class="col-12">
                                        <div class="form-group">
                                            <textarea name="Message" placeholder="Message" required></textarea>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="contact-form-button">
                                            <button type="submit" method="post" class="ISPTemplateV1-btn">
                                                Send message<i class="fi fi-rr-arrow-right"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Contact Form Area -->
