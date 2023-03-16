@extends('layouts.admin.app')
@section('content')
    <div class="page-header">
        <h4 class="page-title">Settings</h4>
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
                <a href="{{ route('admin.seo') }}">Site Settings</a>
            </li>
        </ul>
    </div>


    <div class="card">
        <form action="{{ route('admin.seo.update') }}" method="POST" enctype="multipart/form-data">
            @csrf
            {{ method_field('PUT') }}
            <div class="card-header d-flex justify-content-between align-items-center">
                <h4 class="card-title">Meta tag</h4>
                <button class="btn btn-success" type="submit" name="submit">Save Header</button>
            </div>
            <div class="card-body">

                {{-- <ul class="nav nav-pills nav-secondary  nav-pills-no-bd nav-pills-icons" id="pills-tab-with-icon"
                    role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="pills-home-tab-icon" data-toggle="pill" href="#pills-home-icon"
                            role="tab" aria-controls="pills-home-icon" aria-selected="true">
                            <i class="flaticon-pencil"></i>
                            Meta tag
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-profile-tab-icon" data-toggle="pill" href="#header-buttons"
                            role="tab" aria-controls="pills-profile-icon" aria-selected="false">
                            <i class="flaticon-check"></i>
                            Script
                        </a>
                    </li>
                </ul> --}}




                <div class="tab-content mt-2 mb-3" id="pills-with-icon-tabContent">

                    <div class="tab-pane fade show active" id="pills-home-icon" role="tabpanel"
                        aria-labelledby="pills-home-tab-icon">
                        {{-- <div class="card-header">
                            <h4 class="card-title">Meta tag</h4>
                        </div> --}}
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="meta_name">Meta Name</label>
                                    <input type="text" class="form-control" id="meta_name" name="meta_name"
                                        placeholder="Type here" required value="{{ $seo_settings->meta_name }}">
                                    <small id="emailHelp" class="form-text text-muted">Type meta name</small>
                                </div>
                                <div class="form-group">
                                    <label for="meta_description">Meta description</label>
                                    <textarea type="text" class="form-control" id="meta_description" name="meta_description" placeholder="Type here"
                                        required>{{ $seo_settings->meta_description }}</textarea>
                                    <small id="emailHelp" class="form-text text-muted">Type meta description</small>
                                </div>
                                <div class="form-group">
                                    <label for="meta_keywords">Meta keywords</label>
                                    <input type="text" class="form-control" id="meta_keywords" name="meta_keywords"
                                        placeholder="Type here" required value="{{ $seo_settings->meta_keywords }}">
                                    <small id="emailHelp" class="form-text text-muted">Type meta keywords</small>
                                </div>
                                <div class="form-group">
                                    <label for="meta_author">Auhtor Name</label>
                                    <input type="text" class="form-control" id="meta_author" name="meta_author"
                                        placeholder="Type here" required value="{{ $seo_settings->meta_author }}">
                                    <small id="emailHelp" class="form-text text-muted">Type meta author</small>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- <div class="tab-pane fade" id="header-buttons" role="tabpanel" aria-labelledby="header-buttons">
                        <div class="card-header">
                            <h4 class="card-title">Script</h4>
                        </div>

                        <div class="row">

                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="meta_name">All scripts</label>

                                </div>
                            </div>


                            <div class="col-lg-8">
                                <div class="form-group">
                                    <label for="meta_name">Add script</label>
                                    <textarea type="text" class="form-control" id="hero_text" placeholder="<script src='assets/js/jquery.min.js'></script>"
                                        rows="6" name="hero_text"></textarea>

                                </div>
                            </div>

                        </div>
                    </div> --}}


                </div>
            </div>
        </form>
    </div>
@endsection
