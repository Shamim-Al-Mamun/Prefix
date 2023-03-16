@extends('layouts.admin.app')
@section('content')
    <div class="page-header">
        <h4 class="page-title">Pay Bill Settings</h4>
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
                <a href="{{ route('admin.paybill.all') }}">Pay bill lists</a>
            </li>
            <li class="separator">
                <i class="flaticon-right-arrow"></i>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.paybill.steps.edit', $option->id) }}">Add Pay bill steps</a>
            </li>
        </ul>
    </div>


    <div class="card">
        <form action="{{ route('admin.paybill.steps.store', $option->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card-header d-flex justify-content-between align-items-center">
                <h4 class="card-title">Pay bill steps</h4>
                <button class="btn btn-success" type="submit" name="submit">Save Header</button>
            </div>

            <div class="card-body">

                <div class="tab-content mt-2 mb-3" id="pills-with-icon-tabContent">

                    <div class="tab-pane fade show active" id="pills-home-icon" role="tabpanel"
                        aria-labelledby="pills-home-tab-icon">

                        <div class="row">
                            <div class="col-lg-6">

                                {{-- Image --}}
                                <div class="form-group">
                                    <label for="about_section_title_desc">
                                        Image</label>

                                    <figure class="imagecheck-figure">
                                        <img src="{{ asset('storage/img/no-preview.png') }}" alt="#"
                                            class="imagecheck-image">
                                    </figure>

                                    {{-- <input type="file" class="form-control" id="step_img" name="step_img"> --}}
                                </div>


                                <div class="form-group">
                                    <label class="hero_thumbnail mb-1">
                                        <h4 class="bg-light p-2 border rounded fw-bold">upload image</h4>
                                        <input name="step_img" type="file" value="step_img" class="imagecheck-input">
                                    </label>
                                </div>

                                {{-- Text --}}
                                <div class="form-group">
                                    <label for="card1_text">Description</label>
                                    <textarea type="text" class="form-control" id="text" name="text" placeholder="Type here(max 600 characters)"
                                        maxlength="600" rows="4"></textarea>
                                </div>


                            </div>

                        </div>
                    </div>


                </div>

            </div>

    </div>
    </form>
    </div>
@endsection
