<div class="wrapper">
    <div class="main-header">
        <!-- Logo Header -->
        <div class="logo-header" data-background-color="blue">

            <a href="{{ route('admin.dashboard') }}" class="logo">
                {{-- <img src="{{ asset('assets/img/getup-logo.svg') }}" alt="navbar brand" class="navbar-brand"> --}}
                <img src="{{ asset('assets/img/polli-logo.png') }}" alt="navbar brand" class="navbar-brand">
            </a>

            {{-- @if (!empty($header_settings->header_logo))
                <a href="{{ route('admin.dashboard') }}" class="logo"><img
                        src="{{ url($header_settings->header_logo) }}" alt="navbar brand" class="navbar-brand"></a>
            @endif --}}


            <button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse"
                data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon">
                    <i class="icon-menu"></i>
                </span>
            </button>
            <button class="topbar-toggler more"><i class="icon-options-vertical"></i></button>
            <div class="nav-toggle">
                <button class="btn btn-toggle toggle-sidebar">
                    <i class="icon-menu"></i>
                </button>
            </div>
        </div>
        <!-- End Logo Header -->

        <!-- Navbar Header -->
        <nav class="navbar navbar-header navbar-expand-lg" data-background-color="blue2">

            <div class="container-fluid">
                <div class="collapse" id="search-nav">
                    <form class="navbar-left navbar-form nav-search mr-md-3">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <button type="submit" class="btn btn-search pr-1">
                                    <i class="fa fa-search search-icon"></i>
                                </button>
                            </div>
                            <input type="text" placeholder="Search ..." class="form-control">
                        </div>
                    </form>
                </div>
                <ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
                    <li class="nav-item toggle-nav-search hidden-caret">
                        <a class="nav-link" data-toggle="collapse" href="#search-nav" role="button"
                            aria-expanded="false" aria-controls="search-nav">
                            <i class="fa fa-search"></i>
                        </a>
                    </li>
                    <li class="nav-item dropdown hidden-caret">
                        <a class="nav-link dropdown-toggle" href="#" id="messageDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-envelope"></i>
                        </a>
                    </li>
                    <li class="nav-item dropdown hidden-caret">
                        <a class="nav-link dropdown-toggle" href="{{ url('') }}" target="_blank">
                            <i class="fas fa-location-arrow"></i>
                        </a>

                    </li>
                </ul>
            </div>
        </nav>
        <!-- End Navbar -->
    </div>

    <!-- Sidebar -->
    <div class="sidebar sidebar-style-2">
        <div class="sidebar-wrapper scrollbar scrollbar-inner">
            <div class="sidebar-content">
                <div class="user">
                    <div class="avatar-sm float-left mr-2">
                        <img src="{{ asset('assets/img/profile.jpg') }}" alt="..."
                            class="avatar-img rounded-circle">
                    </div>
                    <div class="info">
                        <a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
                            <span>
                                {{ Auth::user()->name }}
                                <span class="user-level">Administrator</span>
                                <span class="caret"></span>
                            </span>
                        </a>
                        <div class="clearfix"></div>

                        <div class="collapse in" id="collapseExample">
                            <ul class="nav">
                                <!-- <li>
                                    <a href="#profile">
                                    <span class="link-collapse">My Profile</span>
                                    </a>
                                    </li>
                                    <li>
                                    <a href="#edit">
                                    <span class="link-collapse">Edit Profile</span>
                                    </a>
                                </li> -->
                                <li>
                                    <!-- Authentication -->
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf

                                        <x-dropdown-link :href="route('logout')"
                                            onclick="event.preventDefault();
															this.closest('form').submit();">
                                            <span class="link-collapse">{{ __('Log Out') }}</span>
                                        </x-dropdown-link>
                                    </form>

                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                {{-- -------------------------------------------------- Dashboard Sections -------------------------------------- --}}

                <ul class="nav nav-primary">
                    <li class="nav-item {{ in_array(request()->path(), ['dashboard']) ? 'active' : '' }}">
                        <a href="{{ route('admin.dashboard') }}" class="collapsed" aria-expanded="false">
                            <i class="fas fa-home"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>

                    {{-- -------------------------------------------------- Home Sections -------------------------------------- --}}

                    <li class="nav-section">
                        <span class="sidebar-mini-icon">
                            <i class="fa fa-ellipsis-h"></i>
                        </span>
                        <h4 class="text-section text-info">Home Sections</h4>
                    </li>

                    {{-- Hero Slider --}}

                    <li class="nav-item">
                        <a data-toggle="collapse" href="#Hero">
                            <i class="fas fa-th-list"></i>
                            <p>Hero sliders</p>
                            <span class="caret"></span>
                        </a>
                        <div class="collapse {{ in_array(request()->path(), ['dashboard/hero/addnew', 'dashboard/hero/all', 'dashboard/hero/background']) ? 'show' : '' }}"
                            id="Hero">
                            <ul class="nav nav-collapse">
                                <li>
                                    <a class="{{ request()->is('dashboard/hero/background') ? 'bg-primary text-white ' : '' }}"
                                        href="{{ route('admin.hero.background') }}">
                                        <span class="sub-item">Slider background</span>
                                    </a>
                                    <a class="{{ request()->is('dashboard/hero/all') ? 'bg-primary text-white ' : '' }}"
                                        href="{{ route('admin.hero.all') }}">
                                        <span class="sub-item">All slider</span>
                                    </a>
                                    <a class="{{ request()->is('dashboard/hero/addnew') ? 'bg-primary text-white ' : '' }}"
                                        href="{{ route('admin.hero.addnew') }}">
                                        <span class="sub-item">Add new slider</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    {{-- Features --}}

                    <li class="nav-item">
                        <a data-toggle="collapse" href="#menu_2">
                            <i class="fas fa-th-list"></i>
                            <p>Features</p>
                            <span class="caret"></span>
                        </a>
                        <div class="collapse {{ in_array(request()->path(), ['dashboard/features/addnew', 'dashboard/features/all']) ? 'show' : '' }}"
                            id="menu_2">
                            <ul class="nav nav-collapse">
                                <li>
                                    <a href="{{ route('admin.features.all') }}"
                                        class="{{ request()->is('dashboard/features/all') ? 'bg-primary text-white ' : '' }}">
                                        <span class="sub-item">All Features</span>
                                    </a>
                                    <a href="{{ route('admin.features.addnew') }}"
                                        class="{{ request()->is('dashboard/features/addnew') ? 'bg-primary text-white ' : '' }}">
                                        <span class="sub-item">Add new feature</span>
                                    </a>
                                </li>

                            </ul>
                        </div>
                    </li>

                    {{-- Explore --}}

                    <li class="nav-item">
                        <a data-toggle="collapse" href="#Explore">
                            <i class="fas fa-th-list"></i>
                            <p>Explore</p>
                            <span class="caret"></span>
                        </a>
                        <div class="collapse {{ in_array(request()->path(), ['dashboard/explore']) ? 'show' : '' }}"
                            id="Explore">
                            <ul class="nav nav-collapse">
                                <li>
                                    <a href="{{ route('admin.explore') }}"
                                        class="{{ request()->is('dashboard/explore') ? 'bg-primary text-white ' : '' }}">
                                        <span class="sub-item">Edit Explore</span>
                                    </a>
                                </li>

                            </ul>
                        </div>
                    </li>

                    {{-- Questions --}}

                    <li class="nav-item">
                        <a data-toggle="collapse" href="#Question">
                            <i class="fas fa-th-list"></i>
                            <p>Questions</p>
                            <span class="caret"></span>
                        </a>
                        <div class="collapse {{ in_array(request()->path(), ['dashboard/question/all']) ? 'show' : '' }}"
                            id="Question">
                            <ul class="nav nav-collapse">
                                <li>
                                    <a href="{{ route('admin.question.all') }}"
                                        class="{{ request()->is('dashboard/question/all') ? 'bg-primary text-white ' : '' }}">
                                        <span class="sub-item">Edit Questions</span>
                                    </a>
                                </li>

                            </ul>
                        </div>
                    </li>

                    {{-- <li class="nav-item">
                        <a href="{{ route('admin.question.all') }}">
                            <i class="fas fa-th-list"></i>
                            <p>Question</p>
                        </a>
                    </li> --}}

                    {{-- Faq --}}

                    <li class="nav-item">
                        <a data-toggle="collapse" href="#Faq">
                            <i class="fas fa-th-list"></i>
                            <p>Faq</p>
                            <span class="caret"></span>
                        </a>
                        <div class="collapse {{ in_array(request()->path(), ['dashboard/faq/list', 'dashboard/faq', 'dashboard/faq/list/addnew']) ? 'show' : '' }}"
                            id="Faq">
                            <ul class="nav nav-collapse">
                                <li>
                                    <a href="{{ route('admin.faq') }}"
                                        class="{{ request()->is('dashboard/faq') ? 'bg-primary text-white ' : '' }}">
                                        <span class="sub-item">Faq Titles</span>
                                    </a>
                                    <a href="{{ route('admin.faq.list.all') }}"
                                        class="{{ request()->is('dashboard/faq/list') ? 'bg-primary text-white ' : '' }}">
                                        <span class="sub-item">Faq lists</span>
                                    </a>
                                    <a href="{{ route('admin.faq.list.addnew') }}"
                                        class="{{ request()->is('dashboard/faq/list/addnew') ? 'bg-primary text-white ' : '' }}">
                                        <span class="sub-item">Add new Faq</span>
                                    </a>

                                    {{--
                                    <a href="{{ route('admin.faq.list.answers.create') }}">
                                        <span class="sub-item">Add Faq list answers</span>
                                    </a>
                                     --}}
                                </li>

                            </ul>
                        </div>
                    </li>

                    {{-- Testimonial --}}

                    <li class="nav-item">
                        <a data-toggle="collapse" href="#Testimonial">
                            <i class="fas fa-th-list"></i>
                            <p>Testimonial</p>
                            <span class="caret"></span>
                        </a>
                        <div class="collapse {{ in_array(request()->path(), ['dashboard/testimonial', 'dashboard/testimonial/all', 'dashboard/testimonial/addnew']) ? 'show' : '' }}"
                            id="Testimonial">
                            <ul class="nav nav-collapse">
                                <li>
                                    <a href="{{ route('admin.testimonial.all') }}"
                                        class="{{ request()->is('dashboard/testimonial') ? 'bg-primary text-white ' : '' }}">
                                        <span class="sub-item">Testimonial Titles</span>
                                    </a>
                                    <a href="{{ route('admin.testimonial.list.all') }}"
                                        class="{{ request()->is('dashboard/testimonial/all') ? 'bg-primary text-white ' : '' }}">
                                        <span class="sub-item">Testimonial lists</span>
                                    </a>
                                    <a href="{{ route('admin.testimonial.list.addnew') }}"
                                        class="{{ request()->is('dashboard/testimonial/addnew') ? 'bg-primary text-white ' : '' }}">
                                        <span class="sub-item">Add new Testimonial</span>
                                    </a>

                                </li>

                            </ul>
                        </div>
                    </li>

                    {{-- -------------------------------------------------- About Us Sections -------------------------------------- --}}

                    <li class="nav-section">
                        <span class="sidebar-mini-icon">
                            <i class="fa fa-ellipsis-h"></i>
                        </span>
                        <h4 class="text-section text-info">About Us Sections</h4>
                    </li>

                    {{-- About Us --}}

                    <li class="nav-item">
                        <a data-toggle="collapse" href="#about">
                            <i class="fas fa-th-list"></i>
                            <p>About Us</p>
                            <span class="caret"></span>
                        </a>
                        <div class="collapse {{ in_array(request()->path(), ['dashboard/about']) ? 'show' : '' }}"
                            id="about">
                            <ul class="nav nav-collapse">
                                <li>
                                    <a href="{{ route('admin.about') }}"
                                        class="{{ request()->is('dashboard/about') ? 'bg-primary text-white ' : '' }}">
                                        <span class="sub-item">Edit About Us</span>
                                    </a>
                                </li>

                            </ul>
                        </div>
                    </li>

                    {{-- Clients --}}

                    <li class="nav-item">
                        <a data-toggle="collapse" href="#Clients">
                            <i class="fas fa-th-list"></i>
                            <p>Clients</p>
                            <span class="caret"></span>
                        </a>
                        <div class="collapse {{ in_array(request()->path(), ['dashboard/clients/addnew', 'dashboard/clients/all']) ? 'show' : '' }}"
                            id="Clients">
                            <ul class="nav nav-collapse">
                                <li>
                                    <a href="{{ route('admin.clients.all') }}"
                                        class="{{ request()->is('dashboard/clients/all') ? 'bg-primary text-white ' : '' }}">
                                        <span class="sub-item">All Clients</span>
                                    </a>
                                    <a href="{{ route('admin.clients.addnew') }}"
                                        class="{{ request()->is('dashboard/clients/addnew') ? 'bg-primary text-white ' : '' }}">
                                        <span class="sub-item">Add new Client</span>
                                    </a>
                                </li>

                            </ul>
                        </div>
                    </li>

                    {{-- What We Do --}}

                    <li class="nav-item">
                        <a data-toggle="collapse" href="#What_We_Do">
                            <i class="fas fa-th-list"></i>
                            <p>What We Do</p>
                            <span class="caret"></span>
                        </a>
                        <div class="collapse {{ in_array(request()->path(), ['dashboard/whatWeDo']) ? 'show' : '' }}"
                            id="What_We_Do">
                            <ul class="nav nav-collapse">
                                <li>
                                    <a href="{{ route('admin.whatWeDo') }}"
                                        class="{{ request()->is('dashboard/whatWeDo') ? 'bg-primary text-white ' : '' }}">
                                        <span class="sub-item">Edit What We Do</span>
                                    </a>
                                </li>

                            </ul>
                        </div>
                    </li>

                    {{-- -------------------------------------------------- Pricing Sections -------------------------------------- --}}
                    <li class="nav-section">
                        <span class="sidebar-mini-icon">
                            <i class="fa fa-ellipsis-h"></i>
                        </span>
                        <h4 class="text-section text-info">Pricing Sections</h4>
                    </li>

                    {{-- Pricing Category --}}
                    <li class="nav-item">
                        <a data-toggle="collapse" href="#Pricing_cat">
                            <i class="fas fa-th-list"></i>
                            <p>Pricing Category</p>
                            <span class="caret"></span>
                        </a>
                        <div class="collapse {{ in_array(request()->path(), ['dashboard/pricing-cat/all', 'dashboard/pricing-cat/addnew']) ? 'show' : '' }}"
                            id="Pricing_cat">
                            <ul class="nav nav-collapse">
                                <li>
                                    <a href="{{ route('admin.pricing-cat.all') }}"
                                        class="{{ request()->is('dashboard/pricing-cat/all') ? 'bg-primary text-white ' : '' }}">
                                        <span class="sub-item">Pricing Categories</span>
                                    </a>
                                    <a href="{{ route('admin.pricing-cat.addnew') }}"
                                        class="{{ request()->is('dashboard/pricing-cat/addnew') ? 'bg-primary text-white ' : '' }}">
                                        <span class="sub-item">Add Pricing Category</span>
                                    </a>
                                </li>

                            </ul>
                        </div>
                    </li>

                    {{-- Pricing --}}
                    <li class="nav-item">
                        <a data-toggle="collapse" href="#Pricing">
                            <i class="fas fa-th-list"></i>
                            <p>Pricing</p>
                            <span class="caret"></span>
                        </a>
                        <div class="collapse {{ in_array(request()->path(), ['dashboard/pricing-title', 'dashboard/pricing/all', 'dashboard/pricing/addnew']) ? 'show' : '' }}"
                            id="Pricing">
                            <ul class="nav nav-collapse">
                                <li>
                                    <a href="{{ route('admin.pricing-title') }}"
                                        class="{{ request()->is('dashboard/pricing-title') ? 'bg-primary text-white ' : '' }}">
                                        <span class="sub-item">Pricing Section Title</span>
                                    </a>
                                    <a href="{{ route('admin.pricing.all') }}"
                                        class="{{ request()->is('dashboard/pricing/all') ? 'bg-primary text-white ' : '' }}">
                                        <span class="sub-item">All Package</span>
                                    </a>
                                    <a href="{{ route('admin.pricing.addnew') }}"
                                        class="{{ request()->is('dashboard/pricing/addnew') ? 'bg-primary text-white ' : '' }}">
                                        <span class="sub-item">Add New package</span>
                                    </a>
                                </li>

                            </ul>
                        </div>
                    </li>

                    {{-- All Package Request --}}
                    <li class="nav-item">
                        <a href="{{ route('customer.order.all') }}"
                            class="{{ request()->is('dashboard/order-request/all') ? 'bg-primary' : '' }}">
                            <i class="fas fa-th-list"></i>
                            <p class="{{ request()->is('dashboard/order-request/all') ? 'text-white ' : '' }}">
                                All Package Request</p>
                        </a>
                    </li>

                    {{-- -------------------------------------------------- Paybill Sections -------------------------------------- --}}

                    <li class="nav-section">
                        <span class="sidebar-mini-icon">
                            <i class="fa fa-ellipsis-h"></i>
                        </span>
                        <h4 class="text-section text-info">Paybill Sections</h4>
                    </li>


                    {{-- Paybill --}}
                    <li class="nav-item">
                        <a data-toggle="collapse" href="#Paybill">
                            <i class="fas fa-th-list"></i>
                            <p>Paybill</p>
                            <span class="caret"></span>
                        </a>
                        <div class="collapse {{ in_array(request()->path(), ['dashboard/paybill', 'dashboard/paybill/all', 'dashboard/paybill/addnew', 'dashboard/paybill/bank/all', 'dashboard/paybill/bank/addnew']) ? 'show' : '' }}"
                            id="Paybill">
                            <ul class="nav nav-collapse">
                                <li>
                                    <a href="{{ route('admin.paybill') }}"
                                        class="{{ request()->is('dashboard/paybill') ? 'bg-primary text-white ' : '' }}">
                                        <span class="sub-item">Paybill Titles</span>
                                    </a>
                                    {{-- <a href="{{ route('admin.paybill.all') }}"
                                        class="{{ request()->is('dashboard/paybill/all') ? 'bg-primary text-white ' : '' }}">
                                        <span class="sub-item">Paybill lists</span>
                                    </a>
                                    <a href="{{ route('admin.paybill.addnew') }}"
                                        class="{{ request()->is('dashboard/paybill/addnew') ? 'bg-primary text-white ' : '' }}">
                                        <span class="sub-item">Add new Paybill</span>
                                    </a>
                                    <a href="{{ route('admin.paybill.bank.all') }}"
                                        class="{{ request()->is('dashboard/paybill/bank/all') ? 'bg-primary text-white ' : '' }}">
                                        <span class="sub-item">Bank lists</span>
                                    </a>
                                    <a href="{{ route('admin.paybill.bank.addnew') }}"
                                        class="{{ request()->is('dashboard/paybill/bank/addnew') ? 'bg-primary text-white ' : '' }}">
                                        <span class="sub-item">Add New Bank</span>
                                    </a> --}}

                                <li class="nav-item">
                                    <a data-toggle="collapse" href="#Mobile_Banks">
                                        <i class="fas fa-th-list"></i>
                                        <p>Mobile Banks</p>
                                        <span class="caret"></span>
                                    </a>
                                    <div class="collapse {{ in_array(request()->path(), ['dashboard/paybill/all', 'dashboard/paybill/addnew']) ? 'show' : '' }}"
                                        id="Mobile_Banks">
                                        <ul class="nav nav-collapse">
                                            <li>

                                                <a href="{{ route('admin.paybill.all') }}"
                                                    class="{{ request()->is('dashboard/paybill/all') ? 'bg-primary text-white ' : '' }}">
                                                    <span class="sub-item">Paybill lists</span>
                                                </a>
                                                <a href="{{ route('admin.paybill.addnew') }}"
                                                    class="{{ request()->is('dashboard/paybill/addnew') ? 'bg-primary text-white ' : '' }}">
                                                    <span class="sub-item">Add new Paybill</span>
                                                </a>
                                            </li>

                                        </ul>
                                    </div>
                                </li>


                                <li class="nav-item">
                                    <a data-toggle="collapse" href="#Banks">
                                        <i class="fas fa-th-list"></i>
                                        <p>Banks</p>
                                        <span class="caret"></span>
                                    </a>
                                    <div class="collapse {{ in_array(request()->path(), ['dashboard/paybill/bank/all', 'dashboard/paybill/bank/addnew']) ? 'show' : '' }}"
                                        id="Banks">
                                        <ul class="nav nav-collapse">
                                            <li>

                                                <a href="{{ route('admin.paybill.bank.all') }}"
                                                    class="{{ request()->is('dashboard/paybill/bank/all') ? 'bg-primary text-white ' : '' }}">
                                                    <span class="sub-item">Bank lists</span>
                                                </a>
                                                <a href="{{ route('admin.paybill.bank.addnew') }}"
                                                    class="{{ request()->is('dashboard/paybill/bank/addnew') ? 'bg-primary text-white ' : '' }}">
                                                    <span class="sub-item">Add New Bank</span>
                                                </a>
                                            </li>

                                        </ul>
                                    </div>
                                </li>


                    </li>

                </ul>
            </div>
            </li>

            {{-- -------------------------------------------------- Coverage Sections -------------------------------------- --}}

            <li class="nav-section">
                <span class="sidebar-mini-icon">
                    <i class="fa fa-ellipsis-h"></i>
                </span>
                <h4 class="text-section text-info">Coverage Sections</h4>
            </li>

            {{-- Coverage --}}
            <li class="nav-item">
                <a data-toggle="collapse" href="#Coverage">
                    <i class="fas fa-th-list"></i>
                    <p>Coverage</p>
                    <span class="caret"></span>
                </a>
                <div class="collapse {{ in_array(request()->path(), ['dashboard/coverage', 'dashboard/coverage/area', 'dashboard/coverage/area/add']) ? 'show' : '' }}"
                    id="Coverage">
                    <ul class="nav nav-collapse">
                        <li>
                            <a href="{{ route('admin.coverage') }}"
                                class="{{ request()->is('dashboard/coverage') ? 'bg-primary text-white ' : '' }}">
                                <span class="sub-item">Contact Section Title</span>
                            </a>
                            <a href="{{ route('admin.coverage.area') }}"
                                class="{{ request()->is('dashboard/coverage/area') ? 'bg-primary text-white ' : '' }}">
                                <span class="sub-item">Coverage list</span>
                            </a>
                            <a href="{{ route('admin.coverage.add') }}"
                                class="{{ request()->is('dashboard/coverage/area/add') ? 'bg-primary text-white ' : '' }}">
                                <span class="sub-item">Add new coverage</span>
                            </a>
                        </li>

                    </ul>
                </div>
            </li>


            {{-- -------------------------------------------------- Blog Sections -------------------------------------- --}}

            <li class="nav-section">
                <span class="sidebar-mini-icon">
                    <i class="fa fa-ellipsis-h"></i>
                </span>
                <h4 class="text-section text-info">Blog Sections</h4>
            </li>

            {{-- Blog --}}

            <li class="nav-item">
                <a data-toggle="collapse" href="#Blog">
                    <i class="fas fa-th-list"></i>
                    <p>Blog</p>
                    <span class="caret"></span>
                </a>
                <div class="collapse collapse {{ in_array(request()->path(), ['dashboard/blog/title/all', 'dashboard/blog/category/all', 'dashboard/blog/category/addnew', 'dashboard/blog/all', 'dashboard/blog/all', 'dashboard/blog/addnew']) ? 'show' : '' }}"
                    id="Blog">
                    <ul class="nav nav-collapse">
                        <li>
                            <a href="{{ route('admin.blog.title.all') }}"
                                class="{{ request()->is('dashboard/blog/title/all') ? 'bg-primary text-white ' : '' }}">
                                <span class="sub-item">Blog Section Title</span>
                            </a>


                        <li class="nav-item">
                            <a data-toggle="collapse" href="#Blog_cat">
                                <i class="fas fa-th-list"></i>
                                <p>Blog Category</p>
                                <span class="caret"></span>
                            </a>
                            <div class="collapse collapse {{ in_array(request()->path(), ['dashboard/blog/category/all', 'dashboard/blog/category/addnew']) ? 'show' : '' }}"
                                id="Blog_cat">
                                <ul class="nav nav-collapse">
                                    <li>

                                        <a href="{{ route('admin.blog.category.all') }}"
                                            class="{{ request()->is('dashboard/blog/category/all') ? 'bg-primary text-white ' : '' }}">
                                            <span class="sub-item">Blog Category list</span>
                                        </a>
                                        <a href="{{ route('admin.blog.category.addnew') }}"
                                            class="{{ request()->is('dashboard/blog/category/addnew') ? 'bg-primary text-white ' : '' }}">
                                            <span class="sub-item">Add new Blog Category</span>
                                        </a>

                                    </li>

                                </ul>
                            </div>
                        </li>

                        <li class="nav-item">
                            <a data-toggle="collapse" href="#Blog_single">
                                <i class="fas fa-th-list"></i>
                                <p>Blog</p>
                                <span class="caret"></span>
                            </a>
                            <div class="collapse collapse {{ in_array(request()->path(), ['dashboard/blog/all', 'dashboard/blog/addnew']) ? 'show' : '' }}"
                                id="Blog_single">
                                <ul class="nav nav-collapse">
                                    <li>

                                        <a href="{{ route('admin.blog.all') }}"
                                            class="{{ request()->is('dashboard/blog/all') ? 'bg-primary text-white ' : '' }}">
                                            <span class="sub-item">Blog list</span>
                                        </a>
                                        <a href="{{ route('admin.blog.addnew') }}"
                                            class="{{ request()->is('dashboard/blog/addnew') ? 'bg-primary text-white ' : '' }}">
                                            <span class="sub-item">Add new Blog</span>
                                        </a>

                                    </li>

                                </ul>
                            </div>
                        </li>
            </li>

            </ul>
        </div>
        </li>

        {{-- -------------------------------------------------- Contacts Sections -------------------------------------- --}}

        <li class="nav-section">
            <span class="sidebar-mini-icon">
                <i class="fa fa-ellipsis-h"></i>
            </span>
            <h4 class="text-section text-info">Contacts Sections</h4>
        </li>

        {{-- Contacts --}}

        <li class="nav-item">
            <a data-toggle="collapse" href="#Contacts">
                <i class="fas fa-th-list"></i>
                <p>Contacts</p>
                <span class="caret"></span>
            </a>
            <div class="collapse {{ in_array(request()->path(), ['dashboard/contact-title', 'dashboard/maps']) ? 'show' : '' }}"
                id="Contacts">
                <ul class="nav nav-collapse">
                    <li>
                        <a href="{{ route('admin.contact-title') }}"
                            class="{{ request()->is('dashboard/contact-title') ? 'bg-primary text-white ' : '' }}">
                            <span class="sub-item">Contact Section Title</span>
                        </a>
                        {{-- <a href="{{ route('admin.contact') }}">
                                        <span class="sub-item">Contact Box</span>
                                    </a> --}}
                        <a href="{{ route('admin.maps') }}"
                            class="{{ request()->is('dashboard/maps') ? 'bg-primary text-white ' : '' }}">
                            <span class="sub-item">Google Maps</span>
                        </a>
                    </li>

                </ul>
            </div>
        </li>


        {{-- -------------------------------------------------- Media Sections -------------------------------------- --}}

        {{-- <li class="nav-section">
                        <span class="sidebar-mini-icon">
                            <i class="fa fa-ellipsis-h"></i>
                        </span>
                        <h4 class="text-section text-info">Media Sections</h4>
                    </li> --}}

        {{-- Media --}}

        {{-- <li class="nav-item">
                        <a data-toggle="collapse" href="#media_cat">
                            <i class="fas fa-th-list"></i>
                            <p>Media Category</p>
                            <span class="caret"></span>
                        </a>
                        <div class="collapse" id="media_cat">
                            <ul class="nav nav-collapse">
                                <li>
                                    <a href="{{ route('admin.media-cat.all') }}">
                                        <span class="sub-item">All Media Category</span>
                                    </a>
                                    <a href="{{ route('admin.media-cat.addnew') }}">
                                        <span class="sub-item">Add New Media Category</span>
                                    </a>
                                </li>

                            </ul>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a data-toggle="collapse" href="#media">
                            <i class="fas fa-th-list"></i>
                            <p>Media</p>
                            <span class="caret"></span>
                        </a>
                        <div class="collapse" id="media">
                            <ul class="nav nav-collapse">
                                <li>
                                    <a href="{{ route('admin.media-title') }}">
                                        <span class="sub-item">Media Section Title</span>
                                    </a>
                                    <a href="{{ route('admin.media.all') }}">
                                        <span class="sub-item">All Media</span>
                                    </a>
                                    <a href="{{ route('admin.media.addnew') }}">
                                        <span class="sub-item">Add New Media</span>
                                    </a>
                                </li>

                            </ul>
                        </div>
                    </li> --}}

        {{-- -------------------------------------------------- Products Sections -------------------------------------- --}}

        <li class="nav-section">
            <span class="sidebar-mini-icon">
                <i class="fa fa-ellipsis-h"></i>
            </span>
            <h4 class="text-section text-info">Products Sections</h4>
        </li>

        {{-- Products --}}

        <li class="nav-item">
            <a data-toggle="collapse" href="#products">
                <i class="fas fa-th-list"></i>
                <p>Products</p>
                <span class="caret"></span>
            </a>
            <div class="collapse {{ in_array(request()->path(), ['dashboard/product-title', 'dashboard/product/all', 'dashboard/product/addnew']) ? 'show' : '' }}"
                id="products">
                <ul class="nav nav-collapse">
                    <li>
                        <a href="{{ route('admin.product-title') }}"
                            class="{{ request()->is('dashboard/product-title') ? 'bg-primary text-white ' : '' }}">
                            <span class="sub-item">Products Section Title</span>
                        </a>
                        <a href="{{ route('admin.product.all') }}"
                            class="{{ request()->is('dashboard/product/all') ? 'bg-primary text-white ' : '' }}">
                            <span class="sub-item">All Products</span>
                        </a>
                        <a href="{{ route('admin.product.addnew') }}"
                            class="{{ request()->is('dashboard/product/addnew') ? 'bg-primary text-white ' : '' }}">
                            <span class="sub-item">Add new product</span>
                        </a>
                    </li>

                </ul>
            </div>
        </li>

        {{-- All Product Request --}}

        <li class="nav-item">
            <a href="{{ route('order.product.all') }}"
                class="{{ request()->is('dashboard/order-product-request/all') ? 'bg-primary' : '' }}">
                <i class="fas fa-th-list"></i>
                <p class="{{ request()->is('dashboard/order-product-request/all') ? 'text-white ' : '' }}">
                    All Product Request</p>
            </a>
        </li>


        {{-- -------------------------------------------------- Messages Sections -------------------------------------- --}}

        <li class="nav-section">
            <span class="sidebar-mini-icon">
                <i class="fa fa-ellipsis-h"></i>
            </span>
            <h4 class="text-section text-info">Messages Sections</h4>
        </li>

        {{-- All Messages --}}

        <li class="nav-item">
            <a href="{{ route('messages.all') }}"
                class="{{ request()->is('dashboard/messages/all') ? 'bg-primary' : '' }}">
                <i class="fas fa-th-list"></i>
                <p class="{{ request()->is('dashboard/messages/all') ? 'text-white ' : '' }}">
                    All Messages</p>
            </a>
        </li>

        {{-- -------------------------------------------------- Pages Sections -------------------------------------- --}}

        <li class="nav-section">
            <span class="sidebar-mini-icon">
                <i class="fa fa-ellipsis-h"></i>
            </span>
            <h4 class="text-section text-info">Pages Sections</h4>
        </li>

        <li class="nav-item">
            <a data-toggle="collapse" href="#pages">
                <i class="fas fa-th-list"></i>
                <p>Pages</p>
                <span class="caret"></span>
            </a>
            <div class="collapse {{ in_array(request()->path(), ['dashboard/page/all', 'dashboard/page/addnew']) ? 'show' : '' }}"
                id="pages">
                <ul class="nav nav-collapse">
                    <li>
                        <a href="{{ route('admin.page.all') }}"
                            class="{{ request()->is('dashboard/page/all') ? 'bg-primary text-white' : '' }}">
                            <span class="sub-item">All Pages</span>
                        </a>
                        <a href="{{ route('admin.page.addnew') }}"
                            class="{{ request()->is('dashboard/page/addnew') ? 'bg-primary text-white' : '' }}">
                            <span class="sub-item">Add New Page</span>
                        </a>
                    </li>

                </ul>
            </div>
        </li>

        {{-- -------------------------------------------------- Appearances Sections -------------------------------------- --}}

        <li class="nav-section">
            <span class="sidebar-mini-icon">
                <i class="fa fa-ellipsis-h"></i>
            </span>
            <h4 class="text-section text-info">Appearances Sections</h4>
        </li>

        <li class="nav-item">
            <a href="{{ route('admin.header') }}"
                class="{{ request()->is('dashboard/header') ? 'bg-primary' : '' }}">
                <i class="fas fa-bolt"></i>
                <p class="{{ request()->is('dashboard/header') ? 'text-white' : '' }}">Header Settings
                </p>
            </a>
        </li>

        <li class="nav-item">
            <a href="{{ route('admin.footer') }}"
                class="{{ request()->is('dashboard/footer') ? 'bg-primary' : '' }}">
                <i class="fas fa-th-list"></i>
                <p class="{{ request()->is('dashboard/footer') ? 'text-white' : '' }}">Footer
                    Settings</p>
            </a>
        </li>

        <li class="nav-item">
            <a data-toggle="collapse" href="#theme_settings">
                <i class="fas fa-cog"></i>
                <p>Settings</p>
                <span class="caret"></span>
            </a>
            <div class="collapse  {{ in_array(request()->path(), ['dashboard/seo', 'dashboard/settings', 'dashboard/link']) ? 'show' : '' }}"
                id="theme_settings">
                <ul class="nav nav-collapse">
                    <li>
                        <a href="{{ route('admin.settings') }}"
                            class="{{ request()->is('dashboard/settings') ? 'bg-primary text-white' : '' }}">
                            <span class="sub-item">Site Settings</span>
                        </a>
                        <a href="{{ route('admin.seo') }}"
                            class="{{ request()->is('dashboard/seo') ? 'bg-primary text-white ' : '' }}">
                            <span class="sub-item">SEO Settings</span>
                        </a>
                        <a href="{{ route('admin.link') }}"
                            class="{{ request()->is('dashboard/link') ? 'bg-primary text-white ' : '' }}">
                            <span class="sub-item">Link Settings</span>
                        </a>
                    </li>

                </ul>
            </div>
        </li>

        <li class="nav-item">
            <a data-toggle="collapse" href="#Scripts">
                <i class="fas fa-th-list"></i>
                <p>Scripts</p>
                <span class="caret"></span>
            </a>
            <div class="collapse {{ in_array(request()->path(), ['dashboard/script/all', 'dashboard/script/addnew']) ? 'show' : '' }}"
                id="Scripts">
                <ul class="nav nav-collapse">
                    <li>
                        <a href="{{ route('admin.script.all') }}"
                            class="{{ request()->is('dashboard/script/all') ? 'bg-primary text-white' : '' }}">
                            <span class="sub-item">All Scripts</span>
                        </a>
                        <a href="{{ route('admin.script.addnew') }}"
                            class="{{ request()->is('dashboard/script/addnew') ? 'bg-primary text-white' : '' }}">
                            <span class="sub-item">Add New Script</span>
                        </a>
                    </li>

                </ul>
            </div>
        </li>

        </ul>
    </div>
</div>
</div>
<!-- End Sidebar -->
<div class="main-panel">
    <div class="content">
        <div class="page-inner">
