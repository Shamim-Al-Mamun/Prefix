@extends('layouts.admin.app')
@section('content')
    <div class="page-header">
        <h4 class="page-title">Pricing Settings</h4>
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
                <a href="{{ route('admin.pricing-title') }}">Pricing Title</a>
            </li>
        </ul>
    </div>


    <div class="card">
        <form action="{{ route('admin.pricing-title.update') }}" method="POST" enctype="multipart/form-data">
            @csrf
            {{ method_field('PUT') }}
            <div class="card-header d-flex justify-content-between align-items-center">
                <h4 class="card-title">Pricing title</h4>
                <button class="btn btn-success" type="submit" name="submit">Save Now</button>
            </div>
            <div class="card-body">

                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="pricing_section_label">Pricing Section Label</label>
                            <input type="text" class="form-control" id="pricing_section_label"
                                name="pricing_section_label" placeholder="Type here"
                                value="{{ $pricing_title->pricing_section_label }}">
                            {{-- <small id="emailHelp" class="form-text text-muted">Type section top label here.</small> --}}
                        </div>
                        <div class="form-group">
                            <label for="pricing_section_first_title">Pricing Section First Focus Title</label>
                            <input type="text" class="form-control" id="pricing_section_first_title"
                                name="pricing_section_first_title" placeholder="Type here"
                                value="{{ $pricing_title->pricing_section_first_title }}">
                            {{-- <small id="pricing_section_first_title" class="form-text text-muted">Type section focus First title.</small> --}}
                        </div>
                        <div class="form-group">
                            <label for="pricing_section_title_middle">Pricing Section Title</label>
                            <input type="text" class="form-control" id="pricing_section_title_middle"
                                name="pricing_section_title_middle" placeholder="Type here"
                                value="{{ $pricing_title->pricing_section_title_middle }}">
                            {{-- <small id="pricing_section_title_middle" class="form-text text-muted">Type section title.</small> --}}
                        </div>
                        {{-- <div class="form-group">
                            <label for="pricing_section_title_last">Section Last Focus Title</label>
                            <input type="text" class="form-control" id="pricing_section_title_last"
                                name="pricing_section_title_last" value="{{ $pricing_title->pricing_section_title_last }}">
                        </div> --}}
                        <div class="form-group">
                            <label for="pricing_section_title_desc">Pricing Section Description</label>
                            <textarea type="text" class="form-control" id="pricing_section_desc" name="pricing_section_title_desc"
                                placeholder="Type here(max 400 characters)" maxlength="400" rows="4">{{ $pricing_title->pricing_section_title_desc }}</textarea>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
