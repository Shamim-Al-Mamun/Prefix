    <!-- Blog Page Area -->
    <section class="blog-section-area">
        <div class="container">
            <div class="row">

                @if (count($blogs) > 0)
                    @foreach ($blogs as $blog)
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="blog-card-single offer-card-single">
                                <div class="blog-card-single-img">
                                    @if (!empty($blog->img))
                                        <img src="{{ url($blog->img) }}" alt="#" />
                                    @endif
                                    <span class="blog-card-badge offer-badge"><i class="fa solid {{ $blog->icon }}"></i>
                                        {{ $blog->topic }}</span>
                                </div>
                                <div class="blog-card-content">
                                    <h4 class="blog-card-cont-title">
                                        {{ $blog->title }}
                                    </h4>
                                    <div class="blog-card-cont-btn">
                                        <a class="ISPTemplateV1-btn" href="{{ route('page.blog', $blog->id) }}">Read more<i
                                                class="fi fi-rr-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>

            {{-- <div class="row">
                <div class="col-12">
                    <div class="blog-section-bottom">
                        <a class="ISPTemplateV1-btn" href="/blog">Load more</a>
                    </div>
                </div>
            </div> --}}

        </div>
    </section>
    <!-- End Blog Page Area -->
