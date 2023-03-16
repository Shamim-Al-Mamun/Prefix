@extends('layouts.admin.app')
@section('content')
    <div class="page-header">
        <h4 class="page-title">Explore Settings</h4>
        <ul class="breadcrumbs">
            <li class="nav-home">
                <a href="/dashboard">
                    <i class="flaticon-home"></i>
                </a>
            </li>
            <li class="separator">
                <i class="flaticon-right-arrow"></i>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.explore') }}">Explore</a>
            </li>
        </ul>
    </div>


    <div class="card">
        <form action="{{ route('admin.explore.update') }}" method="POST" enctype="multipart/form-data">
            @csrf
            {{ method_field('PUT') }}
            <div class="card-header d-flex justify-content-between align-items-center">
                <h4 class="card-title">Explore Settings</h4>
                <button class="btn btn-success" type="submit" name="submit">Save Header</button>
            </div>

            <div class="card-body">
                <ul class="nav nav-pills nav-secondary  nav-pills-no-bd nav-pills-icons" id="pills-tab-with-icon"
                    role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="pills-home-tab-icon" data-toggle="pill" href="#pills-home-icon"
                            role="tab" aria-controls="pills-home-icon" aria-selected="true">
                            <i class="flaticon-pencil"></i>
                            Card One
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-profile-tab-icon" data-toggle="pill" href="#header-buttons"
                            role="tab" aria-controls="pills-profile-icon" aria-selected="false">
                            <i class="flaticon-check"></i>
                            Card Two
                        </a>
                    </li>

                </ul>

                <div class="tab-content mt-2 mb-3" id="pills-with-icon-tabContent">
                    <div class="tab-pane fade show active" id="pills-home-icon" role="tabpanel"
                        aria-labelledby="pills-home-tab-icon">
                        <div class="card-header">
                            <h4 class="card-title">Explore Card One Content</h4>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">

                                <div class="form-group">
                                    <label for="card1_button_text">Button Text</label>
                                    <input type="text" class="form-control" id="card1_button_text"
                                        name="card1_button_text" value="{{ $explore->card1_button_text }}"
                                        placeholder="Type here">
                                </div>
                                <div class="form-group">
                                    <label for="card1_button_link">Button Link</label>
                                    <input type="text" class="form-control" id="card1_button_link"
                                        name="card1_button_link" value="{{ $explore->card1_button_link }}"
                                        placeholder="Type here">
                                </div>

                                <div class="card-header">
                                    <h4 class="card-title">Card Image</h4>
                                </div>
                                <div class="form-group">
                                    @if (!empty($explore->card1_img))
                                        <figure class="imagecheck-figure">
                                            <img src="{{ url($explore->card1_img) }}" alt="title"
                                                class="imagecheck-image">
                                        </figure>
                                    @else
                                        <figure class="imagecheck-figure">
                                            <img src="{{ asset('storage/img/no-preview.png') }}" alt="#"
                                                class="imagecheck-image">
                                        </figure>
                                    @endif
                                    <input type="file" class="form-control" id="card1_img" name="card1_img">
                                </div>

                            </div>

                        </div>
                    </div>

                    <div class="tab-pane fade" id="header-buttons" role="tabpanel" aria-labelledby="header-buttons">
                        <div class="card-header">
                            <h4 class="card-title">Explore Card Two Content</h4>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">

                                <div class="form-group">
                                    <label for="card2_button_text">Button Text</label>
                                    <input type="text" class="form-control" id="card2_button_text"
                                        name="card2_button_text" value="{{ $explore->card2_button_text }}"
                                        placeholder="Type here">
                                </div>
                                <div class="form-group">
                                    <label for="card2_button_link">Button Link</label>
                                    <input type="text" class="form-control" id="card2_button_link"
                                        name="card2_button_link" value="{{ $explore->card2_button_link }}"
                                        placeholder="Type here">
                                </div>

                                <div class="card-header">
                                    <h4 class="card-title">Card Image</h4>
                                </div>
                                <div class="form-group">
                                    @if (!empty($explore->card2_img))
                                        <figure class="imagecheck-figure">
                                            <img src="{{ url($explore->card2_img) }}" alt="title"
                                                class="imagecheck-image">
                                        </figure>
                                    @else
                                        <figure class="imagecheck-figure">
                                            <img src="{{ asset('storage/img/no-preview.png') }}" alt="#"
                                                class="imagecheck-image">
                                        </figure>
                                    @endif
                                    <input type="file" class="form-control" id="card2_img" name="card2_img">
                                </div>

                            </div>

                        </div>

                    </div>

                </div>
            </div>

        </form>
    </div>
@endsection

{{-- @section('scripts')
    <script>
        ClassicEditor
            .create(document.querySelector('#about_section_title_rich_desc'))
            .catch(error => {
                console.error(error);
            });
    </script>
@endsection --}}
