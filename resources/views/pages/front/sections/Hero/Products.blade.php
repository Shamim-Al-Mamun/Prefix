  <!-- Product Area -->
  <section class="ISPTemplateV1-our-product">
      <div class="container">
          <div class="row">
              <div class="col-lg-8 col-md-8 col-12 wow fadeInLeft" data-wow-delay="100ms" data-wow-duration="1000ms">
                  <div class="section-head">
                      <h3 class="section-head-big-title">{{ $product_title->product_section_first_title }}</h3>
                      {{-- <h5 class="section-head-big-title">{{ $product_title->product_section_title_middle }}</h5> --}}
                      <span class="section-head-sm-title">{{ $product_title->product_section_title_last }}</span>
                  </div>
              </div>
          </div>

          <div class="row product-showmore-box showMoreItems showMoreItemsList wow fadeInUp" data-wow-delay="120ms"
              data-wow-duration="1020ms">
              @if (count($products) > 0)
                  @foreach ($products as $product)
                      <div class="col-lg-3 col-md-4 col-12">
                          <div class="product-card">
                              @if (!empty($product->product_thumbnail))
                                  <div class="product-card-img">
                                      <img src="{{ url($product->product_thumbnail) }}" alt="" /><span
                                          class="product-card-price-off">-20%
                                          OFF</span>
                                  </div>
                              @endif
                              <div class="product-card-content">
                                  <div class="product-card-content-top">
                                      <h5 class="product-card-price">
                                          {{-- <del class="product-card-discount">৳:2000</del> --}}
                                          <span class="product-card-main-price">{{ $product->product_price }}</span>
                                      </h5>
                                      <h4 class="product-card-title">{{ $product->product_title }}</h4>
                                  </div>
                                  <div class="product-card-btn">
                                      <button class="ISPTemplateV1-btn" type="button" data-bs-toggle="offcanvas"
                                          data-bs-target="#product{{ $product->id }}" aria-controls="offcanvasRight2">
                                          Buy now<i class="fi fi-rs-shopping-cart-add"></i>
                                      </button>
                                  </div>
                              </div>
                          </div>
                      </div>
                  @endforeach
              @endif
          </div>

          {{-- <div class="row">
              <div class="col-12">
                  <div class="product-section-bottom">
                      <button class="ISPTemplateV1-btn">
                          <i class="fi fi-sr-plus"></i>Load more
                      </button>
                  </div>
              </div>
          </div> --}}
      </div>
  </section>
  <!-- End Product Area -->

  @if (count($products) > 0)
      @foreach ($products as $product)
          <!-- Product Order Request Modal -->
          <div class="offcanvas offcanvas-end pricing-order-request-modal product-order-form-modal" tabindex="-1"
              id="product{{ $product->id }}" aria-labelledby="offcanvasRightLabel">
              <div class="pricing-request-modal-header">
                  <h3>Product Order Request</h3>
                  <button type="button" data-bs-dismiss="offcanvas" aria-label="Close">
                      <i class="fi fi-rr-cross"></i>
                  </button>
              </div>
              <div class="pricing-request-modal-body">

                  <form method="POST" class="pricing-request-modal-form" action="{{ route('order-product') }}"
                      enctype="multipart/form-data">
                      @csrf

                      <div class="form-group">
                          <label>Selected package</label>

                          <select class="form-select" name="product_list" aria-label=".form-select-lg example">

                              {{-- <option>{{ $pricing->pricing_title }} - <span>
                                        {{ $pricing->pricing_price_amount }}</span></option>
                                <option value="1">Basic package - <span>1500TK</span></option>
                                <option value="2">Premium package - <span>2500TK</span></option> --}}

                              <option selected value="{{ $product->product_title }}">
                                  {{ $product->product_title }}</option>

                          </select>

                      </div>

                      {{-- <div class="form-group">
                          <label>Price</label>
                          <input type="text" name="Price" value="{{ $product->product_price }}" required
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
                          <label>Delivery metod</label>
                          <select class="form-select" aria-label=".form-select-lg example">
                              <option>Cash on delivary</option>
                              <option value="1">Store pickup</option>
                          </select>
                      </div> --}}

                      <div class="form-group">
                          <label>Delivery address</label>
                          <input type="text" name="Address" required />
                      </div>

                      {{-- <div class="form-group">
                          <label>District</label>
                          <input type="text" name="District" required />
                      </div>

                      <div class="form-group">
                          <label>Upazilla</label>
                          <input type="text" name="Upazilla" required />
                      </div> --}}

                      <div class="form-group">
                          <label>Message</label>
                          <input type="text" name="Message" required />
                      </div>

                      <div class="pricing-request-modal-btn">
                          <button type="submit" class="ISPTemplateV1-btn">Place order</button>
                      </div>

                  </form>
              </div>
          </div>
      @endforeach
  @endif
  <!-- End Product Order Request Modal -->
