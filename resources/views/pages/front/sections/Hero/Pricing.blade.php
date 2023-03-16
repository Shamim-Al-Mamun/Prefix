    <!-- Pricing Area -->
    <section class="ISPTemplateV1-pricing-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-12">
                    <div class="section-head">
                        <h3 class="section-head-big-title"> {{ $pricing_title->pricing_section_first_title }}</h3>
                        <span class="section-head-sm-title"> {{ $pricing_title->pricing_section_title_middle }}</span>
                    </div>
                </div>
            </div>
            <div class="pricing-tab-area">
                <div class="row">
                    <div class="col-12">
                        <div class="pricing-tab-menu">
                            <div class="list-group" id="list-tab" role="tablist">
                                @foreach ($pricing_category as $item)
                                    <a class="list-group-item {{ $loop->index == 0 ? 'active' : '' }}"
                                        data-bs-toggle="list" href="#pack{{ $item->id }}"
                                        role="tab">{{ $item->pricing_category_name }}</a>
                                @endforeach
                                {{-- <a class="list-group-item" data-bs-toggle="list" href="#corporate-internet"
                                    role="tab">Corporate internet
                                </a> --}}

                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="pricing-tab-details">
                            <div class="tab-content" id="nav-tabContent">
                                @foreach ($pricing_category as $item)
                                    <div class="tab-pane fade {{ $loop->index == 0 ? 'active show' : '' }}"
                                        id="pack{{ $item->id }}" role="tabpanel">
                                        <div class="row pricing-home-showmore-box showMoreItems showMoreItemsList">
                                            @foreach ($item->pricing as $element)
                                                <div class="col-lg-6 col-xl-4 col-md-6 col-12">
                                                    <div class="pricing-card-single">
                                                        <div class="pricing-card-head">
                                                            <div class="pricing-card-icon">
                                                                <img src="./assets/img/pricing-icon/icon-1.svg"
                                                                    alt="#" />
                                                            </div>
                                                            <h4 class="pricing-card-title">
                                                                {{ $element->pricing_title }}</h4>
                                                            <h3 class="pricing-card-price">
                                                                {{ $element->pricing_price_amount }}BDT<span>/per
                                                                    month</span>
                                                            </h3>
                                                            <div class="pricing-card-btn">
                                                                <button class="ISPTemplateV1-btn" type="button"
                                                                    data-bs-toggle="offcanvas"
                                                                    data-bs-target="#pricing{{ $element->id }}"
                                                                    aria-controls="offcanvasRight">
                                                                    {{ $element->pricing_price_button_text }}
                                                                    <i class="fi fi-rr-arrow-right"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                        <div class="pricing-card-bottom">
                                                            <div class="pricing-card-bottom-head">
                                                                <h6 class="pricing-card-bottom-title">
                                                                    Features
                                                                </h6>
                                                            </div>

                                                            <div class=" pricing-card-list pricing_list">
                                                                {!! $element->pricing_price_desc !!}</div>

                                                            {{-- <ul class="pricing-card-list">
                                                                <li>
                                                                    <i class="fi fi-sr-check"></i>Internet speed -
                                                                    30 Mb (2AM to 8PM)
                                                                </li>
                                                                <li>
                                                                    <i class="fi fi-sr-check"></i>Internet speed -
                                                                    10 Mb (8PM to 2AM)
                                                                </li>
                                                                <li>
                                                                    <i class="fi fi-sr-check"></i>BDIX Bandwith -
                                                                    Unlimited
                                                                </li>
                                                                <li>
                                                                    <i class="fi fi-sr-check"></i>Youtube &amp;
                                                                    Facebook - Unlimited
                                                                </li>
                                                                <li>
                                                                    <i class="fi fi-sr-check"></i>Only IPv6 public
                                                                    IP
                                                                </li>
                                                                <li>
                                                                    <i class="fi fi-sr-check"></i>24/7 Support
                                                                    (Online &amp; Offline)
                                                                </li>
                                                            </ul> --}}
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                @endforeach

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Pricing Area -->

    <!-- Pricing Order Request Modal -->
    @if (count($pricings) > 0)
        @foreach ($pricings as $pricing)
            <div class="offcanvas offcanvas-end pricing-order-request-modal" id="pricing{{ $pricing->id }}"
                tabindex="-1" aria-labelledby="offcanvasRightLabel">
                <div class="pricing-request-modal-header">
                    <h3>Package Order Request</h3>
                    <button type="button" data-bs-dismiss="offcanvas" aria-label="Close">
                        <i class="fi fi-rr-cross"></i>
                    </button>
                </div>
                <div class="pricing-request-modal-body">

                    <form method="POST" class="pricing-request-modal-form" action="{{ route('order-package') }}"
                        enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <label>Selected package</label>

                            <select class="form-select" name="package_list" aria-label=".form-select-lg example">

                                {{-- <option>{{ $pricing->pricing_title }} - <span>
                                        {{ $pricing->pricing_price_amount }}</span></option>
                                <option value="1">Basic package - <span>1500TK</span></option>
                                <option value="2">Premium package - <span>2500TK</span></option> --}}

                                <option selected value="{{ $pricing->pricing_title }}">
                                    {{ $pricing->pricing_title }}</option>

                            </select>

                            {{-- <select name="package_list" class="form-select" aria-label="Default select example">

                                <option selected value="{{ $pricing->pricing_title }}">{{ $pricing->pricing_title }}
                                </option>

                            </select> --}}
                        </div>

                        {{-- <div class="form-group">
                            <label>Price</label>
                            <input type="text" name="price" value="{{ $pricing->pricing_price_amount }}" required
                                disabled />
                        </div> --}}

                        <div class="form-group">
                            <label>First Name*</label>
                            <input type="text" name="FirstName" required />
                        </div>

                        <div class="form-group">
                            <label>Last Name *</label>
                            <input type="text" name="LastName" required />
                        </div>

                        <div class="form-group">
                            <label>Phone number *</label>
                            <input type="tel" name="Phone" required />
                        </div>
                        <div class="form-group">
                            <label>Email (optional)</label>
                            <input type="email" name="Email" required />
                        </div>
                        {{-- <div class="form-group">
                            <label>Your postion *</label>
                            <select class="form-select" aria-label=".form-select-lg example">
                                <option>Student</option>
                                <option value="1">Job holder</option>
                                <option value="2">Businessmen</option>
                            </select>
                        </div> --}}
                        <div class="form-group">
                            <label>Full address *</label>
                            <input type="text" name="Address" required />
                        </div>
                        {{-- <div class="form-group">
                            <label>Line type *</label>
                            <select class="form-select" aria-label=".form-select-lg example">
                                <option>Optical fiber</option>
                                <option value="1">CAT5E</option>
                                <option value="2">CAT6</option>
                            </select>
                        </div> --}}

                        <div class="form-group">
                            <label>Message</label>
                            <input type="text" name="Message" required />
                        </div>
                        <div class="pricing-request-modal-btn">
                            <button type="submit" class="ISPTemplateV1-btn">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        @endforeach
    @endif
    <!-- End Pricing Order Request Modal -->
