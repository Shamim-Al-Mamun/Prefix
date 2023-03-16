@extends('layouts.admin.app')
@section('content')
    <div class="page-header">
        <h4 class="page-title">Testimonial</h4>
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
                <a href="{{ route('admin.testimonial.list.all') }}">Testimonial lists</a>
            </li>
            <li class="separator">
                <i class="flaticon-right-arrow"></i>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.testimonial.edit', $testimonial->id) }}">Edit</a>
            </li>
        </ul>
    </div>

    <form action="{{ route('admin.testimonial.list.update', $testimonial->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="card">
            <div class="card-body">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h4 class="card-title">Update Testimonial</h4>
                    <button class="btn btn-success" type="submit" name="submit">Save Header</button>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        {{-- <div class="form-group">
                            <label for="testimonial_name">Name</label>
                            <input type="text" class="form-control" id="testimonial_name" name="testimonial_name"
                                value="{{ $testimonial->testimonial_name }}">
                        </div>
                        <div class="form-group">
                            <label for="testimonial_title">Title</label>
                            <input type="text" class="form-control" id="testimonial_title" name="testimonial_title"
                                value=" {{ $testimonial->testimonial_title }}">
                        </div>
                        <div class="form-group">
                            <label for="testimonial_text">Text</label>
                            <textarea type="text" class="form-control" id="testimonial_text" name="testimonial_text"
                                value=" {{ $testimonial->testimonial_text }}">{{ $testimonial->testimonial_text }}</textarea>
                        </div>

                        <div class="form-group">
                            <label for="testimonial_rating">Rating</label>
                            <input type="number" class="form-control" id="testimonial_rating" name="testimonial_rating"
                                value="{{ $testimonial->testimonial_rating }}">
                        </div>
                        <div class="form-group">
                            <label class="funfact_thumbnail mb-4">
                                <span class="imagecheck-figure">
                                    <h4 class="hero_thumbnail-title">Set Testimonial image</h4>
                                </span>
                                <input name="testimonial_img" type="file" class="imagecheck-input">
                            </label>
                        </div> --}}


                        <div class="form-group">
                            <label for="testimonial_name">Name</label>
                            <input type="text" class="form-control" id="testimonial_name" name="testimonial_name"
                                value="{{ $testimonial->testimonial_name }}" placeholder="Type here" maxlength="50">
                        </div>
                        <div class="form-group">
                            <label for="testimonial_title">Title</label>
                            <input type="text" class="form-control" id="testimonial_title" name="testimonial_title"
                                value="{{ $testimonial->testimonial_title }}" placeholder="Type here" maxlength="50">
                        </div>
                        <div class="form-group">
                            <label for="testimonial_text">Text</label>
                            <textarea type="text" class="form-control" id="testimonial_text" name="testimonial_text"
                                value="{{ $testimonial->testimonial_text }}" maxlength="200" rows="3"
                                placeholder="Type here(max 200 characters)">{{ $testimonial->testimonial_text }}</textarea>
                        </div>

                        <div class="form-group">
                            <label for="exampleSelect1">Select Rating</label>
                            <select class="form-control" id="testimonial_rating" name="testimonial_rating">
                                <option selected>5</option>
                                <option>4</option>
                                <option>3</option>
                                <option>2</option>
                                <option>1</option>
                            </select>
                        </div>

                        @if (!empty($testimonial->testimonial_img))
                            <figure class="imagecheck-figure">
                                <img src="{{ url($testimonial->testimonial_img) }}" alt="title" class="imagecheck-image">
                            </figure>
                        @else
                            <figure class="imagecheck-figure">
                                <img src="{{ asset('storage/img/no-preview.png') }}" alt="#"
                                    class="imagecheck-image">
                            </figure>
                        @endif

                        <div class="form-group">
                            <label class="hero_thumbnail mb-1">
                                <h4 class="bg-light p-2 border rounded fw-bold">upload image</h4>
                                <input name="testimonial_img" type="file" value="1" class="imagecheck-input">
                            </label>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
