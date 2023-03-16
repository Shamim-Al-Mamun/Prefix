@extends('layouts.admin.app')
@section('content')
    <div class="page-header">
        <h4 class="page-title">Testimonial Settings</h4>
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
                <a href="{{ route('admin.testimonial.all') }}">Testimonial</a>
            </li>
        </ul>
    </div>


    <div class="card">
        <form action="{{ route('admin.testimonial.update', $testimonial->id) }}" method="POST"
            enctype="multipart/form-data">
            @csrf
            {{ method_field('PUT') }}
            <div class="card-header d-flex justify-content-between align-items-center">
                <h4 class="card-title">Testimonial Titles</h4>
                <button class="btn btn-success" type="submit" name="submit">Save Header</button>
            </div>

            <div class="card-body">

                <div class="tab-content mt-2 mb-3" id="pills-with-icon-tabContent">
                    <div class="tab-pane fade show active" id="pills-home-icon" role="tabpanel"
                        aria-labelledby="pills-home-tab-icon">
                        <div class="row">
                            <div class="col-lg-6">

                                <div class="form-group">
                                    <label for="testimonial_title">Testimonial Section Title</label>
                                    <input type="text" class="form-control" id="testimonial_title"
                                        name="testimonial_title" value="{{ $testimonial->testimonial_title }}"
                                        placeholder="Type here">
                                </div>
                                <div class="form-group">
                                    <label for="testimonial_sub_title">Testimonial Section Sub title</label>
                                    <textarea type="text" class="form-control" id="testimonial_sub_title" name="testimonial_sub_title"
                                        placeholder="Type here(maximum 300 characters)" maxlength="300" rows="4">{{ $testimonial->testimonial_sub_title }}</textarea>
                                </div>

                            </div>

                        </div>
                    </div>

                </div>
            </div>

        </form>
    </div>
@endsection
