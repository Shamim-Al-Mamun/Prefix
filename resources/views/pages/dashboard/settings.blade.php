@extends('layouts.admin.app')


@section('content')
    <div class="page-header">
        <h4 class="page-title">Settings</h4>
        <ul class="breadcrumbs">
            <li class="nav-home">
                <a href="#">
                    <i class="flaticon-home"></i>
                </a>
            </li>
            <li class="separator">
                <i class="flaticon-right-arrow"></i>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.settings') }}">Site Settings</a>
            </li>
        </ul>
    </div>


    <div class="card">
        <form action="{{ route('admin.settings.update') }}" method="POST" enctype="multipart/form-data">
            @csrf
            {{ method_field('PUT') }}
            <div class="card-header d-flex justify-content-between align-items-center">
                <h4 class="card-title">Site Settings</h4>
                <button class="btn btn-success" type="submit" name="submit">Save Header</button>
            </div>
            {{-- <div class="card-body">
            <div class="row">
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="site_title">Site Title</label>
                        <input type="text" class="form-control" id="site_title" name="site_title" placeholder="Type here" required value="{{$site_settings->site_title}}">
                        <small id="emailHelp" class="form-text text-muted">Type site title</small>
                    </div>
                    <div class="form-group">
                        <label for="header_favicon">Set Favicon</label>
                        <figure class="imagecheck-figure">
                            <img src="{{url($site_settings->header_favicon)}}" alt="title" class="imagecheck-image">
                        </figure>
                        <input type="file" class="form-control" id="header_favicon" name="header_favicon">
                    </div>
                </div>
            </div>
        </div> --}}


            <div class="card-body">

                <ul class="nav nav-pills nav-secondary  nav-pills-no-bd nav-pills-icons" id="pills-tab-with-icon"
                    role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="pills-home-tab-icon" data-toggle="pill" href="#pills-home-icon"
                            role="tab" aria-controls="pills-home-icon" aria-selected="true">
                            <i class="flaticon-pencil"></i>
                            Icon & title
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-profile-tab-icon" data-toggle="pill" href="#header-buttons"
                            role="tab" aria-controls="pills-profile-icon" aria-selected="false">
                            <i class="flaticon-check"></i>
                            Color & theme
                        </a>
                    </li>
                </ul>

                <div class="tab-content mt-2 mb-3" id="pills-with-icon-tabContent">
                    <div class="tab-pane fade show active" id="pills-home-icon" role="tabpanel"
                        aria-labelledby="pills-home-tab-icon">
                        <div class="card-header">
                            <h4 class="card-title">Icon & title</h4>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="site_title">Site Title</label>
                                    <input type="text" class="form-control" id="site_title" name="site_title"
                                        placeholder="Type here" required value="{{ $site_settings->site_title }}">
                                    <small id="emailHelp" class="form-text text-muted">Type site title</small>
                                </div>
                                <div class="form-group">
                                    <label for="header_favicon">Set Favicon</label>
                                    <figure class="imagecheck-figure">
                                        <img src="{{ url($site_settings->header_favicon) }}" alt="title"
                                            class="imagecheck-image">
                                    </figure>
                                    <input type="file" class="form-control" id="header_favicon" name="header_favicon">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="header-buttons" role="tabpanel" aria-labelledby="header-buttons">
                        <div class="card-header">
                            <h4 class="card-title">Color & theme</h4>
                        </div>

                        {{-- <div class="py-3 ps-3">
                            <small id="emailHelp" class="form-text text-muted">Choose your desired color from here <a
                                    href="https://htmlcolorcodes.com/color-picker" class="text-decoration-underline"
                                    target="_blank">htmlcolorcodes.com</a></small>
                        </div> --}}

                        <div class="row">

                            <div class="col-lg-2">
                                <div class=" form-group example circle">
                                    <label for="primary_color" style="display:block">Primary color</label>
                                    <input type="text" class="coloris instance2"
                                        value="{{ $site_theme->primary_color }}" name="primary_color">
                                </div>
                            </div>

                            <div class="col-lg-2">
                                <div class=" form-group example circle">
                                    <label for="secondary_color" style="display:block">Secondary color</label>
                                    <input type="text" class="coloris instance2"
                                        value="{{ $site_theme->secondary_color }}" name="secondary_color">
                                </div>
                            </div>

                            <div class="col-lg-2">
                                <div class=" form-group example circle">
                                    <label for="heading_color" style="display:block">Heading color</label>
                                    <input type="text" class="coloris instance2"
                                        value="{{ $site_theme->heading_color }}" name="heading_color">
                                </div>
                            </div>

                            <div class="col-lg-2">
                                <div class=" form-group example circle">
                                    <label for="sub_headin_color" style="display:block">Sub Heading color</label>
                                    <input type="text" class="coloris instance2"
                                        value="{{ $site_theme->sub_headin_color }}" name="sub_headin_color">
                                </div>
                            </div>

                            <div class="col-lg-2">
                                <div class=" form-group example circle">
                                    <label for="paragraph_color" style="display:block">Paragraph color</label>
                                    <input type="text" class="coloris instance2"
                                        value="{{ $site_theme->paragraph_color }}" name="paragraph_color">
                                </div>
                            </div>

                        </div>
                    </div>


                </div>
            </div>


        </form>
    </div>
@endsection
