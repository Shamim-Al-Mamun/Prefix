@extends('layouts.admin.app')
@section('content')
    <div class="page-header">
        <h4 class="page-title">Header Settings</h4>
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
                <a href="{{ route('admin.header') }}">Header</a>
            </li>
        </ul>
    </div>


    <div class="card">
        <form action="{{ route('admin.header.update') }}" method="POST" enctype="multipart/form-data">
            @csrf
            {{ method_field('PUT') }}
            <div class="card-header d-flex justify-content-between align-items-center">
                <h4 class="card-title">Header Settings</h4>
                <button class="btn btn-success" type="submit" name="submit">Save Header</button>
            </div>
            <div class="card-body">
                <ul class="nav nav-pills nav-secondary  nav-pills-no-bd nav-pills-icons" id="pills-tab-with-icon"
                    role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="pills-home-tab-icon" data-toggle="pill" href="#pills-home-icon"
                            role="tab" aria-controls="pills-home-icon" aria-selected="true">
                            <i class="flaticon-picture"></i>
                            Logo & Contacts
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-profile-tab-icon" data-toggle="pill" href="#header-buttons"
                            role="tab" aria-controls="pills-profile-icon" aria-selected="false">
                            <i class="flaticon-check"></i>
                            Header Buttons
                        </a>
                    </li>
                    {{--   <li class="nav-item">
                    <a class="nav-link" id="pills-profile-tab-icon" data-toggle="pill" href="#pills-profile-icon" role="tab" aria-controls="pills-profile-icon" aria-selected="false">
                        <i class="flaticon-network"></i>
                        Buttons & Social
                    </a>
                </li> --}}
                </ul>
                <div class="tab-content mt-2 mb-3" id="pills-with-icon-tabContent">
                    <div class="tab-pane fade show active" id="pills-home-icon" role="tabpanel"
                        aria-labelledby="pills-home-tab-icon">

                        <div class="row">

                            <div class="col-lg-6">
                                <div class="card-header">
                                    <h4 class="card-title">Top Contact</h4>
                                </div>
                                <div class="form-group">
                                    <label for="header_phone">Phone Number</label>
                                    <input type="text" class="form-control" id="header_phone" name="header_phone"
                                        value="{{ $header_settings->header_phone }}">
                                    <small id="emailHelp" class="form-text text-muted">Type phone number.</small>
                                </div>
                                <div class="form-group">
                                    <label for="header_email">Header Email</label>
                                    <input type="text" class="form-control" id="header_email" name="header_email"
                                        value="{{ $header_settings->header_email }}">
                                    <small id="emailHelp" class="form-text text-muted">Type email address.</small>
                                </div>
                            </div>

                            <div class="col-lg-3">
                                <div class="card-header">
                                    <h4 class="card-title">Logo</h4>
                                </div>
                                <div class="form-group">
                                    <figure class="imagecheck-figure">
                                        <img src="{{ url($header_settings->header_logo) }}" alt="title"
                                            class="imagecheck-image">
                                    </figure>
                                    <input type="file" class="form-control" id="header_logo" name="header_logo">
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="tab-pane fade" id="header-buttons" role="tabpanel" aria-labelledby="header-buttons">
                        <div class="card-header">
                            <h4 class="card-title">Header Buttons</h4>
                        </div>

                        {{-- <div class="row">

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="header_button">Hero Button Text</label>
                                    <input type="text" class="form-control" id="header_button" name="header_button"
                                        value="{{ $header_settings->header_button }}" placeholder="Type here">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="header_button_url">Hero Button URL</label>
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" id="header_button_url"
                                            name="header_button_url" value="{{ $header_settings->header_button_url }}"
                                            placeholder="www.selfcare.com">
                                    </div>
                                </div>
                            </div>

                        </div> --}}

                        <div class="row">

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="header_main_button">Main Button Text</label>
                                    <input type="text" class="form-control" id="header_main_button"
                                        name="header_main_button" value="{{ $header_settings->header_main_button }}"
                                        placeholder="Type here">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="header_main_button_url">Main Button URL</label>
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" id="header_main_button_url"
                                            name="header_main_button_url"
                                            value="{{ $header_settings->header_main_button_url }}"
                                            placeholder="Type here">
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="header_button">Button Text One</label>
                                    <input type="text" class="form-control" id="header_button" name="header_button"
                                        value="{{ $header_settings->header_button }}" placeholder="Type here">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="header_button_url">Button URL One</label>
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" id="header_button_url"
                                            name="header_button_url" value="{{ $header_settings->header_button_url }}"
                                            placeholder="Type here">
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="header_button_two">Button Text Two</label>
                                    <input type="text" class="form-control" id="header_button_two"
                                        name="header_button_two" value="{{ $header_settings->header_button_two }}"
                                        placeholder="Type here">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="header_button_two_url">Button URL Two</label>
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" id="header_button_two_url"
                                            name="header_button_two_url"
                                            value="{{ $header_settings->header_button_two_url }}"
                                            placeholder="Type here">
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="header_button_three">Button Text Three</label>
                                    <input type="text" class="form-control" id="header_button_three"
                                        name="header_button_three" value="{{ $header_settings->header_button_three }}"
                                        placeholder="Type here">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="header_button_three_url">Button URL Three</label>
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" id="header_button_three_url"
                                            name="header_button_three_url"
                                            value="{{ $header_settings->header_button_three_url }}"
                                            placeholder="Type here">
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    {{-- <div class="tab-pane fade" id="pills-profile-icon" role="tabpanel" aria-labelledby="pills-profile-tab-icon">
                    <div class="card-header">
                        <h4 class="card-title">Header Social Links</h4>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">

                            <div class="form-group">
                                <label for="header_facebook_url">Facebook URL</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon3">https://facebook.com/social_link</span>
                                    </div>
                                    <input type="text" class="form-control"  id="header_facebook_url" name="header_facebook_url" value="{{$header_settings->header_facebook_url}}">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="header_twitter_url">Twitter URL</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon3">https://twitter.com/social_link</span>
                                    </div>
                                    <input type="text" class="form-control"  id="header_twitter_url" name="header_twitter_url" value="{{$header_settings->header_twitter_url}}">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="header_linkedin_url">Linkedin URL</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon3">https://linkedin.com/social_link</span>
                                    </div>
                                    <input type="text" class="form-control"  id="header_linkedin_url" name="header_linkedin_url" value="{{$header_settings->header_linkedin_url}}">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="header_instagram_url">Instagram URL</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon3">https://instagram.com/social_link</span>
                                    </div>
                                    <input type="text" class="form-control"  id="header_instagram_url" name="header_instagram_url" value="{{$header_settings->header_instagram_url}}">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="header_youtube_url">Instagram URL</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon3">https://youtube.com/social_link</span>
                                    </div>
                                    <input type="text" class="form-control"  id="header_youtube_url" name="header_youtube_url" value="{{$header_settings->header_youtube_url}}">
                                </div>
                            </div>

                         </div>

                    </div>
                </div> --}}


                </div>
            </div>
        </form>
    </div>
@endsection
