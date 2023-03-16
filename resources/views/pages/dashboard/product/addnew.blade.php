@extends('layouts.admin.app')
@section('content')
    <div class="page-header">
        <h4 class="page-title">Product</h4>
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
                <a href="{{ route('admin.product.all') }}">Products lists</a>
            </li>
            <li class="separator">
                <i class="flaticon-right-arrow"></i>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.product.addnew') }}">Add New product</a>
            </li>
        </ul>
    </div>

    <form action="{{ route('admin.product.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h4 class="card-title">Create New Product</h4>
                <button class="btn btn-success" type="submit" name="submit">Save Header</button>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-6">

                        <div class="form-group">
                            <label for="product_title">Product Title</label>
                            <input type="text" class="form-control" id="product_title" name="product_title"
                                placeholder="Type here">
                        </div>

                        <div class="form-group">
                            <label for="product_price">Product Price</label>
                            <input type="text" class="form-control" id="product_price" name="product_price"
                                placeholder="Type here">
                        </div>

                        {{-- <div class="form-group">
                            <label for="product_desc">Product Desc</label>
                            <textarea type="text" class="form-control" id="product_desc" name="product_desc"></textarea>
                        </div> --}}

                        {{-- <div class="form-group">
                            <label for="product_quick_view_desc">Product Popup Desc</label>
                            <textarea type="text" class="form-control" id="product_quick_view_desc" name="product_quick_view_desc"></textarea>
                        </div> --}}

                        {{-- <div class="form-group">
                            <label for="prodcut_button">Button Text</label>
                            <input type="text" class="form-control" id="prodcut_button" name="prodcut_button" value="">
                        </div> --}}

                        {{-- <div class="form-group">
                            <label for="prodcut_button_url">Button URL</label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon3">https://youtsite.com/path_url</span>
                                </div>
                                <input type="text" class="form-control"  id="prodcut_button_url" name="prodcut_button_url" value="">
                            </div>
                        </div> --}}

                        {{-- <div class="form-group">
                            <label class="product_thumbnail mb-4">
                                <h4 class="hero_thumbnail-title">Set Thumbnail image</h4>
                                <input name="product_thumbnail" type="file" value="1" class="imagecheck-input">
                            </label>
                        </div> --}}

                        <div class="form-group">
                            <label class="hero_thumbnail mb-1">
                                <h4 class="bg-light p-2 border rounded fw-bold">upload image</h4>
                                <input name="product_thumbnail" type="file" value="1" class="imagecheck-input">
                            </label>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection

@section('scripts')
    <script>
        ClassicEditor
            .create(document.querySelector('#product_quick_view_desc'))
            .catch(error => {
                console.error(error);
            });
    </script>
@endsection
