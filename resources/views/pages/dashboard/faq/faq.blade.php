@extends('layouts.admin.app')
@section('content')
    <div class="page-header">
        <h4 class="page-title">Faq Settings</h4>
        <ul class="breadcrumbs">
            <li class="nav-home">
                <a href="/dashboard">
                    <i class="flaticon-home"></i>
                </a>
            </li>
            <li class="separator">
                <i class="flaticon-right-arrow"></i>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.faq') }}">Faq</a>
            </li>
        </ul>
    </div>


    <div class="card">
        <form action="{{ route('admin.faq.update') }}" method="POST" enctype="multipart/form-data">
            @csrf
            {{ method_field('PUT') }}
            <div class="card-header d-flex justify-content-between align-items-center">
                <h4 class="card-title"> Faq Section Title</h4>
                <button class="btn btn-success" type="submit" name="submit">Save Header</button>
            </div>

            <div class="card-body">
                <div class="tab-content mt-2 mb-3" id="pills-with-icon-tabContent">
                    <div class="tab-pane fade show active" id="pills-home-icon" role="tabpanel"
                        aria-labelledby="pills-home-tab-icon">

                        <div class="row">
                            <div class="col-lg-6">

                                <div class="form-group">
                                    <label for="faq_title">About Section First Title</label>
                                    <input type="text" class="form-control" id="faq_title" name="faq_title"
                                        value="{{ $faqTitle->faq_title }}" placeholder="Type here">
                                </div>
                                <div class="form-group">
                                    <label for="faq_sub_title">About Section Middle Title</label>
                                    <input type="text" class="form-control" id="faq_sub_title" name="faq_sub_title"
                                        value="{{ $faqTitle->faq_sub_title }}" placeholder="Type here">
                                </div>

                                <div class="card-header">
                                    <h4 class="card-title">Faq Image</h4>
                                </div>
                                <div class="form-group">
                                    @if (!empty($faqTitle->faq_bg_img))
                                        <figure class="imagecheck-figure">
                                            <img src="{{ url($faqTitle->faq_bg_img) }}" alt="title"
                                                class="imagecheck-image">
                                        </figure>
                                    @else
                                        <figure class="imagecheck-figure">
                                            <img src="{{ asset('storage/img/no-preview.png') }}" alt="#"
                                                class="imagecheck-image">
                                        </figure>
                                    @endif
                                    <input type="file" class="form-control" id="faq_bg_img" name="faq_bg_img">
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>

        </form>
    </div>
@endsection
