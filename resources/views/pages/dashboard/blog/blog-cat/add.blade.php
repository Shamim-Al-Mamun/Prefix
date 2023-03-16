@extends('layouts.admin.app')
@section('content')
    <div class="page-header">
        <h4 class="page-title">Blog Settings</h4>
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
                <a href="{{ route('admin.blog.category.all') }}"> Blog Categories</a>
            </li>
            <li class="separator">
                <i class="flaticon-right-arrow"></i>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.blog.category.addnew') }}"> Add Blog Category</a>
            </li>
        </ul>
    </div>


    <div class="card">
        <form action="{{ route('admin.blog.category.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            {{-- {{ method_field('PUT') }} --}}
            <div class="card-header d-flex justify-content-between align-items-center">
                <h4 class="card-title">Add Blog Category</h4>
                <button class="btn btn-success" type="submit" name="submit">Save Header</button>
            </div>

            <div class="card-body">

                <div class="tab-content mt-2 mb-3" id="pills-with-icon-tabContent">
                    <div class="tab-pane fade show active" id="pills-home-icon" role="tabpanel"
                        aria-labelledby="pills-home-tab-icon">

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="topic">Blog Topic</label>
                                    <input type="text" class="form-control" id="topic" name="topic" value=""
                                        placeholder="Type here">
                                </div>


                                <div class="form-group">
                                    <label for="icon">Blog Topic Icon</label>
                                    <input type="text" class="form-control" id="icon" name="icon" value=""
                                        placeholder="Type here">
                                    <small id="emailHelp" class="form-text text-muted">Type FontAwesome icon name <a
                                            href="https://www.fontawesome.com/icons" target="_blank">Visit
                                            FontAweosme</a></small>
                                </div>

                            </div>

                        </div>
                    </div>

                </div>
            </div>

        </form>
    </div>
@endsection
