@extends('layouts.admin.app')
@section('content')
    <div class="page-header">
        <h4 class="page-title">Add New Page</h4>
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
                <a href="{{ route('admin.page.all') }}">All Page</a>
            </li>
            <li class="separator">
                <i class="flaticon-right-arrow"></i>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.page.addnew') }}">Add New Page</a>
            </li>
        </ul>
    </div>

    <form action="{{ route('admin.page.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h4 class="card-title">Create Page</h4>
                <button class="btn btn-success" type="submit" name="submit">Save Header</button>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label for="page_title">Page Title</label>
                            <input type="text" class="form-control" id="page_title" name="page_title" value=""
                                placeholder="Type here">
                        </div>
                        <div class="form-group">
                            <label for="page_description">Page Description</label>
                            <input type="text" class="form-control" id="page_description" name="page_description"
                                value="" placeholder="Type here">
                        </div>
                        <div class="form-group">
                            <label for="page_content">Page Content</label>
                            <textarea type="text" class="form-control" id="page_content" name="page_content" placeholder="Type here"
                                rows="6"></textarea>
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
            .create(document.querySelector('#page_content'))
            .catch(error => {
                console.error(error);
            });
    </script>
@endsection
