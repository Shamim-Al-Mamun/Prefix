@extends('layouts.admin.app')
@section('content')
    <div class="page-header">
        <h4 class="page-title">Contacts Settings</h4>
        <ul class="breadcrumbs">
            <li class="nav-home">
                <a href="#">
                    <i class="flaticon-home"></i>
                </a>
            </li>
            <li class="separator">
                <i class="flaticon-right-arrow"></i>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.contact-title') }}">Contacts Title</a>
            </li>
        </ul>
    </div>


    <div class="card">
        <form action="{{ route('admin.contact-title.update') }}" method="POST" enctype="multipart/form-data">
            @csrf
            {{ method_field('PUT') }}
            <div class="card-header d-flex justify-content-between align-items-center">
                <h4 class="card-title">Contact Section title</h4>
                <button class="btn btn-success" type="submit" name="submit">Save Now</button>
            </div>
            <div class="card-body">

                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="contact_section_label">Contacts Section Label</label>
                            <input type="text" class="form-control" id="contact_section_label"
                                name="contact_section_label" value="{{ $contact_title->contact_section_label }}"
                                placeholder="Type here">
                            {{-- <small id="emailHelp" class="form-text text-muted">Type section top label here.</small> --}}
                        </div>
                        <div class="form-group">
                            <label for="contact_section_title_middle">Contacts Section Description</label>
                            <textarea type="text" class="form-control" id="contact_section_title_middle" name="contact_section_title_middle"
                                placeholder="Type here(max 400 characters)" maxlength="400" rows="4">{{ $contact_title->contact_section_title_middle }}</textarea>
                            {{-- <small id="contact_section_title_middle" class="form-text text-muted">Type section
                                title.</small> --}}
                        </div>

                        <div class="form-group">
                            <label for="contact_section_first_title">First title</label>
                            <input type="text" class="form-control" id="contact_section_first_title"
                                name="contact_section_first_title" value="{{ $contact_title->contact_section_first_title }}"
                                placeholder="Type here">
                            {{-- <small id="contact_section_first_title" class="form-text text-muted">Type section focus First
                                title.</small> --}}
                        </div>
                        <div class="form-group">
                            <label for="contact_section_title_desc">Description</label>
                            <textarea type="text" class="form-control" id="contact_section_desc" name="contact_section_title_desc"
                                placeholder="Type here(max 300 characters)" maxlength="300" rows="3">{{ $contact_title->contact_section_title_desc }}</textarea>
                        </div>

                        {{-- <div class="form-group">
                            <label for="contact_section_title_last">Section Last Focus Title</label>
                            <input type="text" class="form-control" id="contact_section_title_last"
                                name="contact_section_title_last" value="{{ $contact_title->contact_section_title_last }}">
                            <small id="contact_section_title_last" class="form-text text-muted">Type section focus 1st
                                title.</small>
                        </div> --}}

                        <div class="card-header">
                            <h4 class="card-title">Contact Image</h4>
                        </div>
                        <div class="form-group">
                            @if (!empty($contact_title->contact_section_title_last))
                                <figure class="imagecheck-figure">
                                    <img src="{{ url($contact_title->contact_section_title_last) }}" alt="title"
                                        class="imagecheck-image">
                                </figure>
                            @else
                                <figure class="imagecheck-figure">
                                    <img src="{{ asset('storage/img/no-preview.png') }}" alt="#"
                                        class="imagecheck-image">
                                </figure>
                            @endif

                            {{-- <input type="file" class="form-control" id="contact_section_title_last"
                                name="contact_section_title_last"> --}}
                        </div>


                        <div class="form-group">
                            <label class="hero_thumbnail mb-1">
                                <h4 class="bg-light p-2 border rounded fw-bold">upload image</h4>
                                <input name="contact_section_title_last" type="file" value="1" class="imagecheck-input">
                            </label>
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
            .create(document.querySelector('#contact_section_desc'))
            .catch(error => {
                console.error(error);
            });
    </script>
@endsection --}}
