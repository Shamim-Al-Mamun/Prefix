{{-- <div class="row m-0 py-2 text-white"
    style="background-color:#0081c9" id="myElement">
    <div class="col-6" align="center">
        <div class="row m-0">
            <div>
                <span class="pe-4"> <i class="fa fa-phone px-2"></i>Phone: <a
                        href="tel:{{ $header_settings->header_phone }}">{{ $header_settings->header_phone }}</a>
                </span>
                <span> <i class="fa fa-envelope-open px-2"></i><a
                        href="mailto:{{ $header_settings->header_email }}">Email:
                        {{ $header_settings->header_email }}</a>
                </span>

            </div>
            <div class="">
            </div>
        </div>
    </div>

    <div class="col-6" align="center">
        <div>
            <div class="">
                <span class="pe-4">
                    <a href="{{ $header_settings->header_button_url }}"
                        class="">{{ $header_settings->header_button }}</a>
                </span>
                <span class="pe-4">
                    <a href="{{ $header_settings->header_button_two_url }}"
                        class="">{{ $header_settings->header_button_two }}</a>
                </span>
                <span class="pe-4">
                    <a href="{{ $header_settings->header_button_three_url }}"
                        class="">{{ $header_settings->header_button_three }}</a>
                </span>
            </div>
        </div>
    </div>

</div> --}}

<div class="ISPTemplateV1-topbar">
    <div class="container">
        <div class="row align-items-center">

            <div class="col-lg-6 col-md-7 col-12">
                <div class="ISPTemplateV1-topbar-contact">
                    <ul class="ISPTemplateV1-topbar-contact-list">
                        @if (!empty($header_settings->header_phone))
                            <li>
                                <a href="{{ $header_settings->header_phone }}">
                                    <i class="fi-sr-phone-call"></i>{{ $header_settings->header_phone }}</a>
                            </li>
                        @endif
                        @if (!empty($header_settings->header_email))
                            <li>
                                <a href="mailto:{{ $header_settings->header_email }}"><i
                                        class="fi fi-sr-envelope"></i>{{ $header_settings->header_email }}</a>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>

            <div class="col-lg-6 col-md-5 col-12">
                <div class="ISPTemplateV1-topbar-selfcare-links">
                    <ul class="ISPTemplateV1-topbar-selfcare-links-list">

                        @if (!empty($header_settings->header_button_url))
                            <li>
                                <a href="{{ $header_settings->header_button_url }}"
                                    target="_blank">{{ $header_settings->header_button }}</a>
                            </li>
                        @endif

                        @if (!empty($header_settings->header_button_two_url))
                            <li>
                                <a href="{{ $header_settings->header_button_two_url }}"
                                    target="_blank">{{ $header_settings->header_button_two }}</a>
                            </li>
                        @endif

                        @if (!empty($header_settings->header_button_three_url))
                            <li>
                                <a href="{{ $header_settings->header_button_three_url }}"
                                    target="_blank">{{ $header_settings->header_button_three }}</a>
                            </li>
                        @endif

                    </ul>
                </div>
            </div>

        </div>
    </div>
</div>



<!-- Mobile Menu Modal -->
<div class="modal mobile-menu-modal offcanvas-modal fade" id="offcanvas-modal">
    <div class="modal-dialog offcanvas-dialog">
        <div class="modal-content">
            <div class="modal-header offcanvas-header">
                <!-- offcanvas-logo-start -->
                <div class="offcanvas-logo">
                    @if (!empty($header_settings->header_logo))
                        <a href="/">
                            <img src="{{ url($header_settings->header_logo) }}" alt="#" />
                        </a>
                    @endif
                </div>
                <!-- offcanvas-logo-end -->
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <i class="icofont-close-line"></i>
                </button>
            </div>
            <div class="mobile-menu-modal-main-body">
                <!-- offcanvas-menu start -->
                <nav id="offcanvas-menu" class="offcanvas-menu">
                    <ul id="mobile-nav" class="list-none offcanvas-men-list">

                        <li class="link">
                            <a href="/">Home</a>
                        </li>

                        <li class="link">
                            <a href="/aboutus">About us</a>
                        </li>

                        {{-- <li class="link">
                            <a href="/mediaserver">Media server</a>
                        </li> --}}

                        <li class="link">
                            <a href="/pricing">Pricing</a>
                        </li>

                        <li class="link">
                            <a href="/paybill">Pay bill</a>
                        </li>

                        <li class="link">
                            <a href="/coverage">Coverage</a>
                        </li>

                        <li class="link">
                            <a href="/contactus">Contact</a>
                        </li>

                        <li class="header-more-menu">
                            <div class="dropdown">
                                <button class="dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    More<i class="fi-rr-angle-small-down"></i>
                                </button>
                                <ul class="dropdown-menu">

                                    <li class="link">
                                        <a class="dropdown-item" href="/blog">Blog & offer</a>
                                    </li>

                                    <li class="link">
                                        <a class="dropdown-item" href="/speed">Speed test</a>
                                    </li>

                                </ul>
                            </div>
                        </li>
                    </ul>
                    <div class="offcanvas-btn">
                        <a href="{{ $header_settings->header_main_button_url }}"
                            class="ISPTemplateV1-btn">{{ $header_settings->header_main_button }}</a>
                        {{-- <a href="#" class="ISPTemplateV1-btn">Self care</a> --}}
                    </div>
                </nav>
                <!-- offcanvas-menu end -->
            </div>
        </div>
    </div>
</div>
<!-- End Mobile Menu Modal -->

<!-- Header Area -->
<header id="active-sticky" class="ISPTemplateV1-header">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-3 col-xl-2 col-md-3 col-12">
                <div class="header-logo">

                    @if (!empty($header_settings->header_logo))
                        <a href="/">
                            <img src="{{ url($header_settings->header_logo) }}" alt="#" />
                        </a>
                    @endif

                </div>
            </div>
            <div class="col-lg-10 col-md-10 col-12">
                <div class="header-menu-right">

                    <ul class="header-menu-list">

                        <li class="link">
                            <a href="/">Home</a>
                        </li>

                        <li class="link">
                            <a href="/aboutus">About us</a>
                        </li>

                        {{-- <li class="link">
                            <a href="/mediaserver">Media server</a>
                        </li> --}}

                        <li class="link">
                            <a href="/pricing">Pricing</a>
                        </li>

                        <li class="link">
                            <a href="/paybill">Pay bill</a>
                        </li>

                        <li class="link">
                            <a href="/coverage">Coverage</a>
                        </li>

                        <li class="link">
                            <a href="/contactus">Contact</a>
                        </li>

                        <li class="header-more-menu">
                            <div class="dropdown">
                                <button class="dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    More<i class="fi-rr-angle-small-down"></i>
                                </button>
                                <ul class="dropdown-menu">
                                    <li class="link">
                                        <a class="dropdown-item" href="/blogs">Blog & offer</a>
                                    </li>
                                    <li class="link">
                                        <a class="dropdown-item" href="/speed">Speed test</a>
                                    </li>

                                </ul>
                            </div>
                        </li>
                    </ul>
                    <div class="header-menu-btn">
                        <a href="{{ $header_settings->header_main_button_url }}" target="_blank"
                            class="ISPTemplateV1-btn">{{ $header_settings->header_main_button }}</a>
                        {{-- <a href="#" class="ISPTemplateV1-btn">Self care</a> --}}
                    </div>
                </div>
            </div>
            <div class="col-auto">
                <button type="button" class="mobile-menu-offcanvas-toggler" data-bs-toggle="modal"
                    data-bs-target="#offcanvas-modal">
                    <span class="line"></span>
                    <span class="line"></span>
                    <span class="line"></span>
                </button>
            </div>
        </div>
    </div>
</header>
<!-- End Header Area -->

<script>
    const currentLocation = window.location.pathname;
    const menuItems = document.querySelectorAll('.link');

    menuItems.forEach(item => {
        const anchor = item.querySelector("a")
        const href = (anchor.getAttribute("href"))
        if (href === currentLocation) {
            item.classList.add('active');
        } else {
            item.classList.remove('active');
        }
    });

    // if (window.innerWidth < 600) {
    //     document.getElementById("myElement").style.display = "none";
    // }
</script>
