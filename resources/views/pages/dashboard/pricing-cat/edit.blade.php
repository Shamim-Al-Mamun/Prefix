@extends('layouts.admin.app')
@section('content')
    <div class="page-header">
        <h4 class="page-title">Edit Category</h4>
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
                <a href="{{ route('admin.pricing-cat.edit', $pricing_cats->id) }}">Edit Media</a>
            </li>
        </ul>
    </div>



    <form action="{{ route('admin.pricing-cat.update', $pricing_cats->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h4 class="card-title">Create New Category</h4>
                <button class="btn btn-success" type="submit" name="submit">Save Header</button>
            </div>

            <div class="card-body">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="medialist_category_name">Category name</label>
                            <input type="text" class="form-control" id="pricing_category_name"
                                name="pricing_category_name" placeholder="Type here"
                                value="{{ $pricing_cats->pricing_category_name }}">
                        </div>
                        <div class="form-group">
                            <label for="pricing_category_slug">Category Slug</label>
                            <input type="text" class="form-control" id="pricing_category_slug"
                                name="pricing_category_slug" placeholder="Type here"
                                value="{{ $pricing_cats->pricing_category_slug }}">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
