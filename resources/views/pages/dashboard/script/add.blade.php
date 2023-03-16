@extends('layouts.admin.app')
@section('content')
    <div class="page-header">
        <h4 class="page-title">Scripts setting</h4>
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
                <a href="{{ route('admin.script.all') }}">Scripts lists</a>
            </li>
            <li class="separator">
                <i class="flaticon-right-arrow"></i>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.script.addnew') }}">Add New Script</a>
            </li>
        </ul>
    </div>

    <form action="{{ route('admin.script.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h4 class="card-title">Create New Script</h4>
                <button class="btn btn-success" type="submit" name="submit">Save Header</button>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-12">

                        <div class="form-group">
                            <label for="title">script Title</label>
                            <input type="text" class="form-control" id="title" name="title"
                                placeholder="Type here">
                        </div>

                    </div>

                    <div class="col-lg-12">

                        <div class="form-group">
                            <label for="meta_name">Add script</label>
                            <textarea type="text" class="form-control" id="hero_text" placeholder="<script src='assets/js/jquery.min.js'></script>" rows="4"
                                name="script"></textarea>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
