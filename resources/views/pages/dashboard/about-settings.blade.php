@extends('layouts.admin.app')
@section('content')
    <div class="page-header">
        <h4 class="page-title">About Settings</h4>
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
                <a href="{{ route('admin.about') }}">About Us</a>
            </li>
        </ul>
    </div>


    <div class="card">
        <form action="{{ route('admin.about.update') }}" method="POST" enctype="multipart/form-data">
            @csrf
            {{ method_field('PUT') }}
            <div class="card-header d-flex justify-content-between align-items-center">
                <h4 class="card-title">About Settings</h4>
                <button class="btn btn-success" type="submit" name="submit">Save Header</button>
            </div>

            <div class="card-body">
                <ul class="nav nav-pills nav-secondary  nav-pills-no-bd nav-pills-icons" id="pills-tab-with-icon"
                    role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="pills-home-tab-icon" data-toggle="pill" href="#pills-home-icon"
                            role="tab" aria-controls="pills-home-icon" aria-selected="true">
                            <i class="flaticon-pencil"></i>
                            About Content
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-profile-tab-icon" data-toggle="pill" href="#header-buttons"
                            role="tab" aria-controls="pills-profile-icon" aria-selected="false">
                            <i class="flaticon-check"></i>
                            About Section Title
                        </a>
                    </li>

                    {{-- <li class="nav-item">
                        <a class="nav-link" id="pills-profile-tab-icon" data-toggle="pill" href="#pills-profile-icon"
                            role="tab" aria-controls="pills-profile-icon" aria-selected="false">
                            <i class="flaticon-network"></i>
                            About Progress
                        </a>
                    </li> --}}

                </ul>

                <div class="tab-content mt-2 mb-3" id="pills-with-icon-tabContent">
                    <div class="tab-pane fade show active" id="pills-home-icon" role="tabpanel"
                        aria-labelledby="pills-home-tab-icon">
                        <div class="card-header">
                            <h4 class="card-title">About Content</h4>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">

                                <div class="form-group">
                                    <label for="about_section_label">About Section Label</label>
                                    <input type="text" class="form-control" id="about_section_label"
                                        name="about_section_label" value="{{ $about_settings->about_section_label }}"
                                        placeholder="Type here">
                                </div>
                                <div class="form-group">
                                    <label for="about_section_title_desc">About Section Description</label>
                                    <textarea type="text" class="form-control" id="about_section_title_desc" rows="4"
                                        placeholder="Type here (maximum 400 characters...)" maxlength="400" name="about_section_title_desc">{{ $about_settings->about_section_title_desc }}</textarea>
                                </div>

                                <div class="card-header">
                                    <h4 class="card-title">About Image</h4>
                                </div>
                                <div class="form-group">
                                    @if (!empty($about_settings->about_image))
                                        <figure class="imagecheck-figure">
                                            <img src="{{ url($about_settings->about_image) }}" alt="title"
                                                class="imagecheck-image">
                                        </figure>
                                    @else
                                        <figure class="imagecheck-figure">
                                            <img src="{{ asset('storage/img/no-preview.png') }}" alt="#"
                                                class="imagecheck-image">
                                        </figure>
                                    @endif
                                    {{-- <input type="file" class="form-control" id="about_image" name="about_image"> --}}
                                </div>
                                <div class="form-group">
                                    <label class="hero_thumbnail mb-1">
                                        <h4 class="bg-light p-2 border rounded fw-bold">upload image</h4>
                                        <input name="hero_thumbnail" type="file" value="1" class="imagecheck-input"
                                            id="about_image" name="about_image">
                                    </label>
                                </div>

                            </div>

                        </div>
                    </div>

                    <div class="tab-pane fade" id="header-buttons" role="tabpanel" aria-labelledby="header-buttons">
                        <div class="card-header">
                            <h4 class="card-title">About Section Title</h4>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">

                                <div class="form-group">
                                    <label for="about_section_first_title">About Section First Title</label>
                                    <input type="text" class="form-control" id="about_section_first_title"
                                        name="about_section_first_title"
                                        value="{{ $about_settings->about_section_first_title }}" placeholder="Type here">
                                </div>
                                <div class="form-group">
                                    <label for="about_section_title_middle">About Section Middle Title</label>
                                    <input type="text" class="form-control" id="about_section_title_middle"
                                        name="about_section_title_middle"
                                        value="{{ $about_settings->about_section_title_middle }}" placeholder="Type here">
                                </div>
                                <div class="form-group">
                                    <label for="about_section_title_last">About Section Last Title</label>
                                    <input type="text" class="form-control" id="about_section_title_last"
                                        name="about_section_title_last"
                                        value="{{ $about_settings->about_section_title_last }}" placeholder="Type here">
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="about_section_title_rich_desc">About Section Big Description</label>
                                    <textarea type="text" class="form-control" id="about_section_title_rich_desc"
                                        name="about_section_title_rich_desc" placeholder="Type here">{{ $about_settings->about_section_title_rich_desc }}</textarea>
                                </div>
                            </div>

                        </div>

                    </div>

                </div>
            </div>

        </form>
    </div>
@endsection

@section('scripts')
    <script>
        ClassicEditor
            .create(document.querySelector('#about_section_title_rich_desc'))
            .catch(error => {
                console.error(error);
            });
    </script>
@endsection
