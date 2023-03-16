@extends('layouts.admin.app')
@section('content')
    <div class="page-header">
        <h4 class="page-title">Coverage Settings</h4>
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
                <a href="{{ route('admin.coverage') }}">Coverage Title</a>
            </li>
        </ul>
    </div>


    <div class="card">
        <form action="{{ route('admin.coverage.update') }}" method="POST" enctype="multipart/form-data">
            @csrf
            {{ method_field('PUT') }}
            <div class="card-header d-flex justify-content-between align-items-center">
                <h4 class="card-title">Coverage Title</h4>
                <button class="btn btn-success" type="submit" name="submit">Save Now</button>
            </div>
            <div class="card-body">

                <div class="row">
                    <div class="col-lg-6">

                        <div class="form-group">
                            <label for="label">Coverage Section Title</label>
                            <input type="text" class="form-control" id="label"
                                name="label" placeholder="Type here"
                                value="{{ $coverageTitle->label }}">
                        </div>

                        <div class="form-group">
                            <label for="pricing_section_title_desc">Coverage Section Description</label>
                            <textarea type="text" class="form-control" id="description" name="description"
                                placeholder="Type here(max 400 characters)" maxlength="400" rows="4">{{ $coverageTitle->description }}</textarea>
                        </div>

                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection

