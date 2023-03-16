@extends('layouts.admin.app')
@section('content')
    <div class="page-header">
        <h4 class="page-title">Hero Slider</h4>
        <ul class="breadcrumbs">
            <li class="nav-home">
                <a href="{{ route('admin.dashboard') }}">
                    <i class="flaticon-home"></i>
                </a>
            </li>
            <li class="separator">
                <i class="flaticon-right-arrow"></i>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.hero.all') }}">Hero Slider</a>
            </li>
            <li class="separator">
                <i class="flaticon-right-arrow"></i>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.hero.addnew') }}">Add New Slider</a>
            </li>
        </ul>
    </div>

    <form action="{{ route('admin.hero.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="card">
            {{-- <div class="card-header">
            <div class="card-title">Create New Slider</div>
            <div class="card-action">
                <button class="btn btn-success" type="submit" name="submit">Create Slider</button>
            </div>
        </div> --}}
            <div class="card-header d-flex justify-content-between align-items-center">
                <h4 class="card-title">Create New Slider</h4>
                <button class="btn btn-success" type="submit" name="submit">Save Header</button>
            </div>
            <div class="card-body">

                <ul class="nav nav-pills nav-secondary  nav-pills-no-bd nav-pills-icons" id="pills-tab-with-icon"
                    role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="pills-home-tab-icon" data-toggle="pill" href="#slider_tab_one"
                            role="tab" aria-controls="slider_tab_one" aria-selected="true">
                            <i class="flaticon-picture"></i>
                            Hero Content
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-profile-tab-icon" data-toggle="pill" href="#slider_tab_two"
                            role="tab" aria-controls="slider_tab_two" aria-selected="false">
                            <i class="flaticon-check"></i>
                            Hero Buttons
                        </a>
                    </li>
                    {{-- <li class="nav-item">
                        <a class="nav-link" id="pills-profile-tab-icon" data-toggle="pill" href="#slider_tab_three" role="tab" aria-controls="slider_tab_three" aria-selected="false">
                            <i class="flaticon-list"></i>
                            Hero Links
                        </a>
                    </li> --}}
                </ul>

                <div class="tab-content mt-2 mb-3" id="pills-with-icon-tabContent">

                    <div class="tab-pane fade show active" id="slider_tab_one" role="tabpanel"
                        aria-labelledby="pills-home-tab-icon">
                        <div class="row">
                            <div class="col-lg-6">
                                {{-- <div class="form-group">
                                    <label for="hero_sub_title">Title</label>
                                    <input type="text" class="form-control" id="hero_sub_title" name="hero_sub_title"
                                        placeholder="Type here">
                                </div> --}}
                                <div class="form-group">
                                    <label for="hero_title">Title</label>
                                    <input type="text" class="form-control" id="hero_title" name="hero_title"
                                        placeholder="Type here">
                                </div>
                                <div class="form-group">
                                    <label for="hero_text">Description</label>
                                    <textarea type="text" class="form-control" id="hero_text" placeholder="Type here (maximum 600 characters...)"
                                        rows="6" name="hero_text"></textarea>
                                </div>

                                <div class="form-group">
                                    <label class="hero_thumbnail mb-1">
                                        <h4 class="bg-light p-2 border rounded fw-bold">upload image</h4>
                                        <input name="hero_thumbnail" type="file" value="1" class="imagecheck-input">
                                    </label>
                                </div>
                                
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="slider_tab_two" role="tabpanel" aria-labelledby="pills-home-tab-icon">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label for="hero_main_button">Button One Text</label>
                                    <input type="text" class="form-control" id="hero_main_button" name="hero_main_button"
                                        value="" placeholder="Type here">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label for="hero_main_button_link">Button One URL</label>
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" id="hero_main_button_link"
                                            name="hero_main_button_link" value="" placeholder="Type here">
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="row">

                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label for="hero_main_button_two">Button Two Text</label>
                                    <input type="text" class="form-control" id="hero_main_button_two"
                                        name="hero_main_button_two" value="" placeholder="Type here">
                                </div>
                            </div>

                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label for="hero_main_button_two_link">Button Two URL</label>
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" id="hero_main_button_two_link"
                                            name="hero_main_button_two_link" value="" placeholder="Type here">
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    {{-- <div class="tab-pane fade" id="slider_tab_three" role="tabpanel"
                        aria-labelledby="pills-home-tab-icon">

                        <div id="accordion">
                            <div class="card accordion-card">
                                <div class="accordion-title" id="headingOne">
                                    <h5 class="mb-0">
                                        <a class="btn btn-link" data-toggle="collapse" data-target="#collapseOne"
                                            aria-expanded="true" aria-controls="collapseOne">
                                            Hero Button Links #1
                                        </a>
                                    </h5>
                                </div>

                                <div id="collapseOne" class="collapse " aria-labelledby="headingOne"
                                    data-parent="#accordion">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="hero_link_button">Button Text</label>
                                                    <input type="text" class="form-control" id="hero_link_button"
                                                        name="hero_link_button" value="">
                                                </div>
                                                <div class="form-group">
                                                    <label for="hero_link_button_url">Button URL</label>
                                                    <div class="input-group mb-3">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"
                                                                id="basic-addon3">https://youtsite.com/path_url</span>
                                                        </div>
                                                        <input type="url" class="form-control"
                                                            id="hero_link_button_url" name="hero_link_button_url"
                                                            value="">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="hero_link_button_thumbnail mb-4">
                                                        <h4 class="hero_thumbnail-title">Set Thumbnail image</h4>
                                                        <input name="hero_link_button_thumbnail" type="file"
                                                            class="imagecheck-input">
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card accordion-card">
                                <div class="accordion-title" id="headingTwo">
                                    <h5 class="mb-0">
                                        <a class="btn btn-link collapsed" data-toggle="collapse"
                                            data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            Hero Button Links #2
                                        </a>
                                    </h5>
                                </div>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                    data-parent="#accordion">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="hero_link_button_two">Button Text</label>
                                                    <input type="text" class="form-control" id="hero_link_button_two"
                                                        name="hero_link_button_two" value="">
                                                </div>
                                                <div class="form-group">
                                                    <label for="hero_link_button_two_url">Button URL</label>
                                                    <div class="input-group mb-3">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"
                                                                id="basic-addon3">https://youtsite.com/path_url</span>
                                                        </div>
                                                        <input type="url" class="form-control"
                                                            id="hero_link_button_two_url" name="hero_link_button_two_url"
                                                            value="">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="hero_link_button_two_thumbnail mb-4">
                                                        <h4 class="hero_thumbnail-title">Set Thumbnail image</h4>
                                                        <input name="hero_link_button_two_thumbnail" type="file"
                                                            class="imagecheck-input">
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card accordion-card">
                                <div class="accordion-title" id="headingTwo">
                                    <h5 class="mb-0">
                                        <a class="btn btn-link collapsed" data-toggle="collapse"
                                            data-target="#collapseThree" aria-expanded="false"
                                            aria-controls="collapseThree">
                                            Hero Button Links #3
                                        </a>
                                    </h5>
                                </div>
                                <div id="collapseThree" class="collapse" aria-labelledby="headingTwo"
                                    data-parent="#accordion">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="hero_link_button_three">Button Text</label>
                                                    <input type="text" class="form-control"
                                                        id="hero_link_button_three" name="hero_link_button_three"
                                                        value="">
                                                </div>
                                                <div class="form-group">
                                                    <label for="hero_link_button_three_url">Button URL</label>
                                                    <div class="input-group mb-3">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"
                                                                id="basic-addon3">https://youtsite.com/path_url</span>
                                                        </div>
                                                        <input type="url" class="form-control"
                                                            id="hero_link_button_three_url"
                                                            name="hero_link_button_three_url" value="">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="hero_link_button_three_thumbnail mb-4">
                                                        <h4 class="hero_thumbnail-title">Set Thumbnail image</h4>
                                                        <input name="hero_link_button_three_thumbnail" type="file"
                                                            class="imagecheck-input">
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card accordion-card">
                                <div class="accordion-title" id="headingTwo">
                                    <h5 class="mb-0">
                                        <a class="btn btn-link collapsed" data-toggle="collapse"
                                            data-target="#collapseFour" aria-expanded="false"
                                            aria-controls="collapseFour">
                                            Hero Button Links #4
                                        </a>
                                    </h5>
                                </div>
                                <div id="collapseFour" class="collapse" aria-labelledby="headingTwo"
                                    data-parent="#accordion">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="hero_link_button_four">Button Text</label>
                                                    <input type="text" class="form-control" id="hero_link_button_four"
                                                        name="hero_link_button_four" value="">
                                                </div>
                                                <div class="form-group">
                                                    <label for="hero_link_button_four_url">Button URL</label>
                                                    <div class="input-group mb-3">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"
                                                                id="basic-addon3">https://youtsite.com/path_url</span>
                                                        </div>
                                                        <input type="url" class="form-control"
                                                            id="hero_link_button_four_url"
                                                            name="hero_link_button_four_url" value="">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="hero_link_button_four_thumbnail mb-4">
                                                        <h4 class="hero_thumbnail-title">Set Thumbnail image</h4>
                                                        <input name="hero_link_button_four_thumbnail" type="file"
                                                            class="imagecheck-input">
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}

                </div>
            </div>
        </div>
    </form>
@endsection
