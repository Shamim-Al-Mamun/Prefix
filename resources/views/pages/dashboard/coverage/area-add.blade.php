@extends('layouts.admin.app')
@section('content')
    <div class="page-header">
        <h4 class="page-title">Coverage setting</h4>
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
                <a href="{{ route('admin.coverage.area') }}">Coverage area lists</a>
            </li>
            <li class="separator">
                <i class="flaticon-right-arrow"></i>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.coverage.add') }}">Add new coverage area</a>
            </li>
        </ul>
    </div>

    <form action="{{ route('admin.coverage.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h4 class="card-title">Create New coverage area</h4>
                <button class="btn btn-success" type="submit" name="submit">Save Header</button>
            </div>
            <div class="card-body">

                <div class="row">
                    <div class="col-lg-6">

                        <div class="form-group">
                            <label for="city">City</label>
                            <input type="text" class="form-control" id="city" name="city" value=""
                                placeholder="Type here">
                        </div>

                        <div class="form-group">
                            <label for="district">District</label>
                            <input type="text" class="form-control" id="district" name="district" value=""
                                placeholder="Type here">
                        </div>

                        <div class="form-group">
                            <label for="maps_iframe_code">iframe</label>
                            <input type="text" class="form-control" id="maps_iframe_code" name="maps_iframe_code"
                                value=""
                                placeholder="<iframe src= 'https://www.google.com/maps/embed?pb=!1m18!dftfrtr'></iframe>">
                            <small id="emailHelp" class="form-text text-muted">Embed a map <a
                                    href="https://www.google.com/maps" target="_blank">visit google map</a></small>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
