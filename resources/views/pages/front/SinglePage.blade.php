@extends('layouts.front.app')
@section('content')
    {{-- <!-- Breadcrumbs -->
<section class="breadcrumbs__content" style="background-image: url(img/breadcrumbs-bg.png);">
    <div class="container">
        <div class="row">
            <!-- Breadcrumb-Content -->
            <div class="col-12">
                <div class="breadcrumb-content">
                    <h2 class="breadcrumb__title">{{$site_page->page_title}}</h2>
                    <ul class="breadcrumb__menu list-none">
                        <li><a href="/">Home</a></li>
                        <li class="active"><a href="{{route('page.single', $site_page->id)}}">{{$site_page->page_title}}</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End breadcrumbs --> --}}

    <!-- Breadcrumbs Area -->
    <section class="ISPTemplateV1-breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 col-xl-6 offset-xl-3 col-md-8 offset-md-2 col-12">
                    <div class="breadcrumbs-content">
                        <h4 class="breadcrumbs-cont-title"> {{ $site_page->page_title }}</h4>
                        <p class="breadcrumbs-cont-text">
                            {{ $site_page->page_description }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Breadcrumbs Area -->


    <!-- Content -->
    <section class="ISPTemplateV1-policy-terms-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1 col-12">
                        {!! $site_page->page_content !!}
                    </div>
                </div>
            </div>
    </section>
    <!-- End Content -->
@endsection
