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
                <a href="{{ route('admin.blog.title.all') }}">Blog Title</a>
            </li>
        </ul>
    </div>


    <div class="card">
        <form action="{{ route('admin.blog.title.update', $blogTitle->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            {{-- {{ method_field('PUT') }} --}}
            <div class="card-header d-flex justify-content-between align-items-center">
                <h4 class="card-title">Blog Header</h4>
                <button class="btn btn-success" type="submit" name="submit">Save Header</button>
            </div>

            <div class="card-body">

                <div class="tab-content mt-2 mb-3" id="pills-with-icon-tabContent">
                    <div class="tab-pane fade show active" id="pills-home-icon" role="tabpanel"
                        aria-labelledby="pills-home-tab-icon">

                        <div class="row">
                            <div class="col-lg-6">
                                @if (!empty($blogTitle->label))
                                    <div class="form-group">
                                        <label for="label">Blog Section Title</label>
                                        <input type="text" class="form-control" id="label" name="label"
                                            placeholder="Type here" value="{{ $blogTitle->label }}">
                                    </div>
                                @endif
                                @if (!empty($blogTitle->description))
                                    <div class="form-group">
                                        <label for="description">Blog Section Sub title</label>
                                        <textarea type="text" class="form-control" id="description" name="description" rows="4"
                                            placeholder="Type here (maximum 400 characters...)" maxlength="400">{{ $blogTitle->description }}</textarea>
                                    </div>
                                @endif
                            </div>

                        </div>
                    </div>

                </div>
            </div>

        </form>
    </div>
@endsection
