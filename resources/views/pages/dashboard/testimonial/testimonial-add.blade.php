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
                <a href="{{ route('admin.testimonial.list.addnew') }}">Add New</a>
            </li>
        </ul>
    </div>

    <form action="{{ route('admin.testimonial.list.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="card">
            <div class="card-body">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h4 class="card-title">Create Testimonial</h4>
                    <button class="btn btn-success" type="submit" name="submit">Save Header</button>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="testimonial_name">Name</label>
                            <input type="text" class="form-control" id="testimonial_name" name="testimonial_name"
                                value="" placeholder="Type here" maxlength="50">
                        </div>
                        <div class="form-group">
                            <label for="testimonial_title">Title</label>
                            <input type="text" class="form-control" id="testimonial_title" name="testimonial_title"
                                value="" placeholder="Type here" maxlength="50">
                        </div>
                        <div class="form-group">
                            <label for="testimonial_text">Text</label>
                            <textarea type="text" class="form-control" id="testimonial_text" name="testimonial_text" value=""
                                maxlength="200" rows="3" placeholder="Type here(max 200 characters)"></textarea>
                        </div>

                        {{-- <div class="form-group">
                            <label for="testimonial_rating">Rating</label>
                            <input type="number" class="form-control" id="testimonial_rating" name="testimonial_rating"
                                value="">
                        </div> --}}

                        <div class="form-group">
                            <label for="exampleSelect1">Select Rating</label>
                            <select class="form-control" id="testimonial_rating" name="testimonial_rating">
                                <option>5</option>
                                <option>4</option>
                                <option>3</option>
                                <option>2</option>
                                <option>1</option>
                            </select>
                        </div>

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
