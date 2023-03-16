@extends('layouts.admin.app')
@section('content')
    <div class="page-header">
        <h4 class="page-title">Features</h4>
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
                <a href="{{ route('admin.features.all') }}">Features</a>
            </li>
            <li class="separator">
                <i class="flaticon-right-arrow"></i>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.features.edit', $features->id) }}">Edit Feature</a>
            </li>
        </ul>
    </div>

    <form action="{{ route('admin.features.update', $features->id) }}" method="POST" enctype="multipart/form-data">
        <div class="card">
            @csrf
            <div class="card-body">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h4 class="card-title">Edit Feature</h4>
                    <button class="btn btn-success" type="submit" name="submit">Save Header</button>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="feature_title">Title</label>
                            <input type="text" class="form-control" id="feature_title" name="feature_title"
                                value="{{ $features->feature_title }}" placeholder="Type here">
                        </div>
                        <div class="form-group">
                            <label for="feature_text">Description</label>
                            <textarea type="text" class="form-control" id="feature_text" name="feature_text" value=""
                                placeholder="Type here (maximum 150 characters...)" rows="3">{{ $features->feature_text }}</textarea>
                        </div>

                        <div class="form-group">
                            <label for="feature_icon">Feature Icon</label>
                            <input type="text" class="form-control" id="feature_icon" name="feature_icon"
                                value="{{ $features->feature_icon }}" placeholder="fa-solid fa fa-wifi">
                            <small id="emailHelp" class="form-text text-muted">Type FontAwesome icon name <a
                                    href="https://www.fontawesome.com/icons" target="_blank">Visit FontAweosme</a></small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
