    <!-- Media Server Area -->
    <section class="ISPTemplateV1-media-server">
        <div class="container">
            <div class="row">

                <div class="col-lg-4 col-xl-3 col-12">
                    <div class="media-server-tab-menu">
                        <div class="list-group" id="list-tab" role="tablist">

                            @if (count($media_category) > 0)
                                @foreach ($media_category as $medias)
                                    <a class="list-group-item {{ $medias->id == 1 ? 'active' : '' }}"
                                        data-bs-toggle="list" href="#server{{ $medias->id }}" role="tab">FTP
                                        Servers
                                    </a>
                                @endforeach
                            @endif

                        </div>
                    </div>
                </div>

                <div class="col-lg-8 col-xl-9 col-12">
                    <div class="media-server-tab-details">
                        <div class="tab-content" id="nav-tabContent">

                            @foreach ($media_category as $medias)
                                <div class="tab-pane fade {{ $medias->id == 1 ? 'active show' : '' }}"
                                    id="server{{ $medias->id }}" role="tabpanel">
                                    <div class="row">
                                        @foreach ($medias->medialist as $media)
                                            <div class="col-lg-4 col-md-4 col-12">
                                                <div class="media-server-single">

                                                    @if (!empty($media->medialist_thumbnail))
                                                        <div class="media-server-icon">
                                                            <img src="{{ url($media->medialist_thumbnail) }}"
                                                                alt="#" />
                                                        </div>
                                                    @endif

                                                    <div class="media-server-content">
                                                        <h4 class="media-server-cont-title">
                                                            {{ $media->medialist_title }}</h4>
                                                        <div class="media-server-bottom">

                                                            @if (!empty($media->medialist_link))
                                                                <a href="{{ url($media->medialist_link) }}"target="_blank"
                                                                    class="media-server-btn">Visit
                                                                    site<i class="fi fi-rr-arrow-right"></i>
                                                                </a>
                                                            @endif

                                                        </div>
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
    </section>
    <!-- End Media Server Area -->
