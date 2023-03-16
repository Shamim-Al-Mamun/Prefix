    <!-- Coverage Area -->
    <section class="ISPTemplateV1-coverage">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-xl-3 col-md-3 col-12">

                    <div class="coverage-sidebar-search">

                        <div class="coverage-search-form">
                            <form action="#" method="post">
                                <button type="submit" class="seacrh-bar-btn">
                                    <i class="fi fi-rr-search"></i></button><input type="text"
                                    placeholder="Search place" required="" />
                            </form>
                        </div>

                        <div class="coverage-sidebar-card-main" id="list-tab" role="tablist">

                            @if (count($coverageArea) > 0)
                                @foreach ($coverageArea as $area)
                                    <a class="coverage-s-card-single {{ $area->id == 1 ? 'active' : '' }}"
                                        data-bs-toggle="list" href="#area{{ $area->id }}" role="tab">
                                        <div class="coverage-s-card-icon">
                                            <i class="fi fi-rs-marker"></i>
                                        </div>
                                        <div class="coverage-s-card-content">
                                            <h6 class="coverage-s-card-cont-title">{{ $area->city }}</h6>
                                            <p class="coverage-s-card-cont-text">{{ $area->district }}</p>
                                        </div>
                                    </a>
                                @endforeach
                            @endif
                        </div>

                    </div>

                </div>

                <div class="col-lg-8 col-xl-9 col-12">

                    <div class=" coverage-area-map pricing-tab-details">
                        <div class="tab-content" id="nav-tabContent">

                            @if (count($coverageArea) > 0)
                                @foreach ($coverageArea as $area)
                                    {{-- <div class="tab-pane fade show" id="area{{ $area->id }}"
                                                role="tabpanel">
                                                One
                                            </div> --}}

                                    @if (!empty($area->maps_iframe_code))
                                        <div class="gmap_canvas tab-pane fade {{ $area->id == 1 ? 'active show' : '' }}"
                                            id="area{{ $area->id }}">
                                            @if (!empty($area->maps_iframe_code))
                                                {{-- <iframe id="gmap_canvas"
                                                            src="{{ url($area->maps_iframe_code) }}" marginheight="0"
                                                            marginwidth="0" width="100%" height="600"
                                                            frameborder="0"></iframe> --}}
                                                {!! $area->maps_iframe_code !!}
                                            @endif
                                        </div>
                                    @endif
                                @endforeach
                            @endif

                        </div>
                    </div>

                    {{-- <div class="coverage-area-map">
                        @if (!empty($google_map->maps_iframe_code))
                            <div class="gmap_canvas">
                                <iframe id="gmap_canvas" src="{{ url($google_map->maps_iframe_code) }}" marginheight="0"
                                    marginwidth="0" width="434" height="500" frameborder="0"></iframe>
                            </div>
                        @endif
                    </div> --}}
                </div>

            </div>
        </div>
    </section>
    <!-- End Coverage Area -->
