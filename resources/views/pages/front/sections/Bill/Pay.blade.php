    <!-- Paybill Area -->
    <section class="isp-standard-v1-paybill" style="min-height: 800px">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="paybill-tab-area">
                        <div class="row">

                            <div class="col-12">
                                <div class="paybill-tab-menu">
                                    <div class="list-group" id="list-tab" role="tablist">

                                        @if (count($payBillOptions) > 0)
                                            @foreach ($payBillOptions as $payBillCategory)
                                                <a class="list-group-item  {{ $payBillCategory->id == 1 ? 'active' : '' }}"
                                                    data-bs-toggle="list" href="#bill{{ $payBillCategory->id }}"
                                                    role="tab"
                                                    aria-selected="true">{{ $payBillCategory->option }}</a>
                                            @endforeach
                                        @endif

                                        <a class="list-group-item" data-bs-toggle="list" href="#bank" role="tab"
                                            aria-selected="false" tabindex="-1">Bank
                                        </a>

                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="paybill-tab-details">
                                    <div class="tab-content" id="nav-tabContent">

                                        @if (count($payBillOptions) > 0)
                                            @foreach ($payBillOptions as $payBillSubCategory)
                                                <div class="tab-pane fade  {{ $payBillSubCategory->id == 1 ? 'active show' : '' }}"
                                                    id="bill{{ $payBillSubCategory->id }}" role="tabpanel">
                                                    <div class="paybill-tab-single">
                                                        <div class="row">
                                                            <div class="col-lg-6 col-md-6 col-12">
                                                                <div class="paybill-tab-single-details">
                                                                    <div class="tab-content" id="nav-tabContent">

                                                                        @if (count($payBillSubCategory->PayBillOptionSteps) > 0)
                                                                            @foreach ($payBillSubCategory->PayBillOptionSteps as $payBillImg)
                                                                                @if (!empty($payBillImg->img))
                                                                                    <div class="tab-pane fade  {{ $loop->index == 0 ? 'active show' : '' }}"
                                                                                        id="bill-img{{ $payBillImg->id }}"
                                                                                        role="tabpanel">
                                                                                        <div
                                                                                            class="paybill-tab-single-screenshot">

                                                                                            @if (!empty($payBillImg->img))
                                                                                                <div
                                                                                                    class="paybill-tab-single-scrrensht-img">
                                                                                                    <img src="{{ url($payBillImg->img) }}"
                                                                                                        alt="#" />
                                                                                                </div>
                                                                                            @endif
                                                                                        </div>
                                                                                    </div>
                                                                                @endif
                                                                            @endforeach
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-lg-6 col-md-6 col-12">
                                                                <div class="paybill-tab-single-menu">
                                                                    <div class="list-group" id="list-tab"
                                                                        role="tablist">

                                                                        @if (count($payBillSubCategory->PayBillOptionSteps) > 0)
                                                                            @foreach ($payBillSubCategory->PayBillOptionSteps as $payBillText)
                                                                                @if (!empty($payBillText->text))
                                                                                    <a class="list-group-item  {{ $loop->index == 0 ? 'active' : '' }}"
                                                                                        data-bs-toggle="list"
                                                                                        href="#bill-img{{ $payBillText->id }}"
                                                                                        role="tab"
                                                                                        aria-selected="true">
                                                                                        <div
                                                                                            class="paybill-tab-list-group-single">
                                                                                            <span
                                                                                                class="paybill-tab-single-num">{{ $loop->index + 1 }}</span>
                                                                                            <h5
                                                                                                class="paybill-tab-list-group-title">
                                                                                                {{ $payBillText->text }}
                                                                                            </h5>
                                                                                        </div>
                                                                                    </a>
                                                                                @endif
                                                                            @endforeach
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        @endif

                                        <div class="tab-pane fade" id="bank" role="tabpanel">
                                            <div class="row">
                                                @if (count($PayBillBank) > 0)
                                                    @foreach ($PayBillBank as $bank)
                                                        <div class="col-lg-4 col-md-6 col-12">
                                                            <div class="paybill-bank-card">
                                                                <div class="paybill-bank-card-top">

                                                                    @if (!empty($bank->img))
                                                                        <div class="paybill-bank-card-icon">
                                                                            <img src="{{ url($bank->img) }}"
                                                                                alt="#" />
                                                                        </div>
                                                                    @endif

                                                                    <div class="paybill-bank-card-content">
                                                                        <h5 class="p-bank-card-cont-title">
                                                                            {{ $bank->title }}
                                                                        </h5>
                                                                        <p class="p-bank-card-cont-text">
                                                                            {{ $bank->text }}
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                                <ul class="p-bank-card-cont-list">
                                                                    <li><span>Account name:</span> {{ $bank->text }}
                                                                    </li>
                                                                    <li>
                                                                        <span>Account no:</span>
                                                                        {{ $bank->account_no }}
                                                                    </li>
                                                                    <li><span>Routing no:</span>
                                                                        {{ $bank->routing_no }}
                                                                    </li>
                                                                    <li><span>Branch:</span> {{ $bank->branch }}</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Paybill Area -->
