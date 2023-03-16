    <!-- Blog Single Page Area -->
    <section class="blog-single-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-xl-8 col-12">
                    <div class="blog-single-main">

                        <div class="blog-single-main-top">

                            <a class="blog-single-main-top-btn" href="/blogs"><i class="fi fi-rs-arrow-left"></i>Back to
                                blog
                            </a>

                            <div class="blog-single-main-share">
                                <ul class="blog-single-main-share-list">
                                    <li>Share:</li>
                                    <li>
                                        <a href="#" target="_blank"><i class="icofont-facebook"></i></a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank"><i class="icofont-skype"></i></a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank"><i class="icofont-whatsapp"></i></a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank"><i class="icofont-instagram"></i></a>
                                    </li>
                                </ul>
                            </div>

                        </div>

                        <div class="blog-single-main-bottom">
                            <div class="blog-single-main-img">
                                @if (!empty($blog->img))
                                    <img src="{{ url($blog->img) }}" alt="#" />
                                @endif
                                <span class="blog-card-badge offer-badge"><i class="fa solid {{ $blog->icon }}"></i>
                                    {{ $blog->topic }}</span>
                                <div class="blog-single-meta-main">
                                    <ul class="blog-single-meta-list">
                                        <li>
                                            <a href="#"><i class="fi fi-rr-alarm-clock"></i>
                                                @if (!empty($blog->created_at->diffForHumans()))
                                                    {{ $blog->created_at->diffForHumans() }}
                                                @endif
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fi fi-rr-user"></i>by Admin</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="blog-single-main-content">
                                <h3 class="blog-single-main-cont-title">
                                    {{ $blog->title }}

                                </h3>

                                {!! $blog->text !!}

                                {{-- <div class="blog-details-commnets">
                                    <h4 class="blog-details-commnets-title">
                                        Total Comments <span>(10)</span>
                                    </h4>
                                    <div class="blog-details-comt-inner">
                                        <div class="blog-single-commnets">
                                            <div class="blog-single-commnets-top">
                                                <div class="blog-single-comnt-left">
                                                    <div class="blog-single-cmnt-img">
                                                        <img src="./assets/img/blog/sm-img-1.jpg" alt="#" />
                                                    </div>
                                                    <div class="blog-single-comnt-tag">
                                                        <span class="blog-single-cmnt-date"><i
                                                                class="fi fi-rr-calendar"></i>November
                                                            05,2022</span>
                                                        <h6 class="blog-single-cmnt-title">
                                                            Jaedul Kabila
                                                        </h6>
                                                    </div>
                                                </div>
                                                <div class="blog-single-comnt-right">
                                                    <a href="#"><i class="fi fi-ss-reply-all"></i>Reply</a>
                                                </div>
                                            </div>
                                            <div class="blog-single-comnt-bottom">
                                                <p class="blog-single-comnt-bottom-text">
                                                    it is a long established fact that a reader will be
                                                    distracted by the readable content of a page when
                                                    looking at its layout. The point of using Lorem
                                                    Ipsum is that it has a more-or-less normal
                                                    distribution of letters, as opposed to using
                                                    'Content here, content here', making it look like
                                                    readable English.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="blog-single-commnets single-comnt-list">
                                            <div class="blog-single-commnets-top">
                                                <div class="blog-single-comnt-left">
                                                    <div class="blog-single-cmnt-img">
                                                        <img src="./assets/img/blog/sm-img-2.jpg" alt="#" />
                                                    </div>
                                                    <div class="blog-single-comnt-tag">
                                                        <span class="blog-single-cmnt-date"><i
                                                                class="fi fi-rr-calendar"></i>November
                                                            05,2022</span>
                                                        <h6 class="blog-single-cmnt-title">
                                                            Jaccia Islam
                                                        </h6>
                                                    </div>
                                                </div>
                                                <div class="blog-single-comnt-right">
                                                    <a href="#"><i class="fi fi-ss-reply-all"></i>Reply</a>
                                                </div>
                                            </div>
                                            <div class="blog-single-comnt-bottom">
                                                <p class="blog-single-comnt-bottom-text">
                                                    it is a long established fact that a reader will be
                                                    distracted by the readable content of a page when
                                                    looking at its layout. The point of using Lorem
                                                    Ipsum is that it has a more-or-less normal
                                                    distribution of letters, as opposed to using
                                                    'Content here, content here', making it look like
                                                    readable English.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="blog-single-commnets">
                                            <div class="blog-single-commnets-top">
                                                <div class="blog-single-comnt-left">
                                                    <div class="blog-single-cmnt-img">
                                                        <img src="./assets/img/blog/sm-img-3.jpg" alt="#" />
                                                    </div>
                                                    <div class="blog-single-comnt-tag">
                                                        <span class="blog-single-cmnt-date"><i
                                                                class="fi fi-rr-calendar"></i>November
                                                            05,2022</span>
                                                        <h6 class="blog-single-cmnt-title">
                                                            Meheraj Chowdhory
                                                        </h6>
                                                    </div>
                                                </div>
                                                <div class="blog-single-comnt-right">
                                                    <a href="#"><i class="fi fi-ss-reply-all"></i>Reply</a>
                                                </div>
                                            </div>
                                            <div class="blog-single-comnt-bottom">
                                                <p class="blog-single-comnt-bottom-text">
                                                    it is a long established fact that a reader will be
                                                    distracted by the readable content of a page when
                                                    looking at its layout. The point of using Lorem
                                                    Ipsum is that it has a more-or-less normal
                                                    distribution of letters, as opposed to using
                                                    'Content here, content here', making it look like
                                                    readable English.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div> --}}

                            </div>
                        </div>

                        {{-- <div class="blog-details-form">
                            <form action="#" method="post">
                                <div class="blog-details-form-box">
                                    <div class="blog-details-form-top">
                                        <h3 class="blog-details-form-title">Post a comments</h3>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-12">
                                            <div class="form-group">
                                                <input name="name" placeholder="Your name" required="" />
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-12">
                                            <div class="form-group">
                                                <input name="email" placeholder="Your email" required="" />
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <textarea name="message" placeholder="Your comments" required=""></textarea>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="blog-details-form-btn">
                                                <button type="submit" class="comnt-form-btn">
                                                    Post comment
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div> --}}

                    </div>
                </div>

                <div class="col-lg-12 col-xl-4 col-12">
                    <div class="blog-sidebar-area">

                        {{-- <div class="blog-sidebar-widget seacrh-bar">
                            <form action="#" method="post">
                                <input type="text" placeholder="Search" required="" /><button type="submit"
                                    class="seacrh-bar-btn">
                                    <i class="fi fi-rr-search"></i>
                                </button>
                            </form>
                        </div> --}}

                        <div class="blog-sidebar-widget sidebar-topic">
                            <h4 class="b-sidebar-widget-title">Topics</h4>
                            <ul class="sidebar-topic-list">

                                {{-- {{ dd($blogCategory) }} --}}
                                @if (count($blogCategory) > 0)
                                    @foreach ($blogCategory as $Category)
                                        <li>
                                            <a href="#">
                                                {{ $Category->topic }}</a>
                                        </li>
                                    @endforeach
                                @endif
                            </ul>
                        </div>
                        <div class="blog-sidebar-widget recents-post">
                            <h4 class="b-sidebar-widget-title">Recent posts</h4>

                            @if (count($blogs) > 0)
                                @foreach ($blogs->slice(0, 4) as $blog)
                                    <div class="blog-sid-recent-post-inner">
                                        <div class="blog-sid-recent-post-single">
                                            <div class="blog-sid-recent-img">
                                                @if (!empty($blog->img))
                                                    <img src="{{ url($blog->img) }}" alt="#" />
                                                @endif
                                            </div>
                                            <div class="blog-sid-recent-content">
                                                <ul class="blog-sid-recent-cont-list">
                                                    <li>
                                                        <a href="#"><i class="fi fi-rr-calendar"></i>
                                                            @if (!empty($blog->created_at->diffForHumans()))
                                                                {{ $blog->created_at->diffForHumans() }}
                                                            @endif
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#"><i class="fi fi-rs-calendar-clock"></i>
                                                            {{ $blog->topic }}</a>
                                                    </li>
                                                </ul>
                                                <h6 class="blog-sid-recent-cont-title">
                                                    {{ $blog->title }}
                                                </h6>
                                                <a class="blog-sid-recent-cont-btn"
                                                    href="{{ route('page.blog', $blog->id) }}">Read More<i
                                                        class="fi fi-rs-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @endif
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End Blog Single Page Area -->
