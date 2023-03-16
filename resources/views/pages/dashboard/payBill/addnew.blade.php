@extends('layouts.admin.app')
@section('content')
    <div class="page-header">
        <h4 class="page-title">Pay Bill</h4>
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
                <a href="{{ route('admin.paybill.all') }}">Pay Bill lists</a>
            </li>
            <li class="separator">
                <i class="flaticon-right-arrow"></i>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.paybill.addnew') }}">Add New</a>
            </li>
        </ul>
    </div>

    <form action="{{ route('admin.paybill.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h4 class="card-title">Create Pay bill</h4>
                <button class="btn btn-success" type="submit" name="submit">Save Header</button>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="option">Pay bill Title</label>
                            <input type="text" class="form-control" id="option" name="option" value=""
                                placeholder="Type here">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
