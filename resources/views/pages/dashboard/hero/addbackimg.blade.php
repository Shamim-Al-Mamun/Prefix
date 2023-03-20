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
                <a href="{{ route('admin.hero.background') }}">Add Slider Img</a>
            </li>
        </ul>
    </div>

    <form action="{{ route('admin.hero.background.update') }}" method="POST" enctype="multipart/form-data">
        @csrf
        {{ method_field('PUT') }}
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h4 class="card-title">Add Slider Img</h4>
                <button class="btn btn-success" type="submit" name="submit">Save Header</button>
            </div>
            <div class="card-body">

                <div class="tab-content mt-2 mb-3" id="pills-with-icon-tabContent">

                    <div class="tab-pane fade show active" id="slider_tab_one" role="tabpanel"
                        aria-labelledby="pills-home-tab-icon">
                        <div class="row">
                            <div class="col-lg-6">

                                <div class="form-group">
                                    @if (!empty($headerSettings->hero_img))
                                        <figure class="imagecheck-figure">
                                            <img src="{{ url($headerSettings->hero_img) }}" alt="title"
                                                class="imagecheck-image">
                                        </figure>
                                    @else
                                        <figure class="imagecheck-figure">
                                            <img src="{{ asset('storage/img/no-preview.png') }}" alt="#"
                                                class="imagecheck-image">
                                        </figure>
                                    @endif
                                    <input type="file" class="form-control" id="hero_img" name="hero_img">
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </form>
@endsection
