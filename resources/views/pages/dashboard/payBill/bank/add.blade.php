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
                <a href="{{ route('admin.paybill.bank.all') }}">Bank lists</a>
            </li>
            <li class="separator">
                <i class="flaticon-right-arrow"></i>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.paybill.bank.addnew') }}">Add New</a>
            </li>
        </ul>
    </div>

    <form action="{{ route('admin.paybill.bank.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h4 class="card-title">Add New Bank</h4>
                <button class="btn btn-success" type="submit" name="submit">Save Header</button>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-6">

                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" class="form-control" id="title" name="title" value=""
                                placeholder="Type here">
                        </div>

                        <div class="form-group">
                            <label for="text">sub title</label>
                            <textarea type="text" class="form-control" id="text" name="text" value=""
                                placeholder="Type here(max 100 characters)" maxlength="100"></textarea>
                        </div>

                        <div class="form-group">
                            <label for="account_name">account_name</label>
                            <input type="text" class="form-control" id="account_name" name="account_name" value=""
                                placeholder="Type here">
                        </div>

                        <div class="form-group">
                            <label for="account_no">account_no</label>
                            <input type="number" class="form-control" id="account_no" name="account_no" value=""
                                placeholder="Type here">
                        </div>

                        <div class="form-group">
                            <label for="routing_no">routing_no</label>
                            <input type="number" class="form-control" id="routing_no" name="routing_no" value=""
                                placeholder="Type here">
                        </div>

                        <div class="form-group">
                            <label for="branch">branch</label>
                            <input type="text" class="form-control" id="branch" name="branch" value=""
                                placeholder="Type here">
                        </div>

                        <div class="form-group">
                            <label for="about_section_title_desc">
                                Bank Image</label>

                            <figure class="imagecheck-figure">
                                <img src="{{ asset('storage/img/no-preview.png') }}" alt="#"
                                    class="imagecheck-image">
                            </figure>

                            <input type="file" class="form-control" id="img" name="img">
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
