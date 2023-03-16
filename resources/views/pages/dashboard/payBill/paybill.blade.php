@extends('layouts.admin.app')
@section('content')
    <div class="page-header">
        <h4 class="page-title">Paybill Settings</h4>
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
                <a href="{{ route('admin.paybill') }}">Paybill Title</a>
            </li>
        </ul>
    </div>

    <div class="card">
        <form action="{{ route('admin.paybill.title.update') }}" method="POST" enctype="multipart/form-data">
            @csrf
            {{ method_field('PUT') }}
            <div class="card-header d-flex justify-content-between align-items-center">
                <h4 class="card-title">Paybill Section Title</h4>
                <button class="btn btn-success" type="submit" name="submit">Save Header</button>
            </div>
            <div class="card-body">
                <div class="tab-content mt-2 mb-3" id="pills-with-icon-tabContent">

                    <div class="tab-pane fade show active" id="pay_bill_four">
                        <div class="row">
                            <div class="col-lg-6">

                                <div class="form-group">
                                    <label for="paybill_section_label">Paybill Section Label</label>
                                    <input type="text" class="form-control" id="paybill_section_label"
                                        name="paybill_section_label" placeholder="Type here"
                                        value="{{ $paybill->paybill_section_label }}">
                                </div>

                                <div class="form-group">
                                    <label for="paybill_section_title_desc">Paybill Section Description</label>
                                    <textarea type="text" class="form-control" id="paybill_text" placeholder="Type here (max 600 characters)" rows="6" maxlength="600"
                                        name="paybill_section_title_desc">{{ $paybill->paybill_section_title_desc }}</textarea>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
