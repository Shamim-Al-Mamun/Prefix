@extends('layouts.admin.app')
@section('content')
    <div class="page-header">
        <h4 class="page-title">Question Settings</h4>
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
                <a href="{{ route('admin.question.all') }}">Question Us</a>
            </li>
        </ul>
    </div>


    <div class="card">
        <form action="{{ route('admin.question.update') }}" method="POST" enctype="multipart/form-data">
            @csrf
            {{ method_field('PUT') }}
            <div class="card-header d-flex justify-content-between align-items-center">
                <h4 class="card-title">Question Settings</h4>
                <button class="btn btn-success" type="submit" name="submit">Save Header</button>
            </div>

            <div class="card-body">
                
                <ul class="nav nav-pills nav-secondary  nav-pills-no-bd nav-pills-icons" id="pills-tab-with-icon"
                    role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="pills-home-tab-icon" data-toggle="pill" href="#pills-home-icon"
                            role="tab" aria-controls="pills-home-icon" aria-selected="true">
                            <i class="flaticon-pencil"></i>
                            Question Header
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-profile-tab-icon" data-toggle="pill" href="#header-buttons"
                            role="tab" aria-controls="pills-profile-icon" aria-selected="false">
                            <i class="flaticon-check"></i>
                            Question Buttons
                        </a>
                    </li>
                </ul>

                <div class="tab-content mt-2 mb-3" id="pills-with-icon-tabContent">
                    <div class="tab-pane fade show active" id="pills-home-icon" role="tabpanel"
                        aria-labelledby="pills-home-tab-icon">
                        <div class="card-header">
                            <h4 class="card-title"> Question Header</h4>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">

                                <div class="form-group">
                                    <label for="question_title">Question Section Title</label>
                                    <input type="text" class="form-control" id="question_title" name="question_title"
                                        value="{{ $question->question_title }}" placeholder="Type here">
                                </div>
                                <div class="form-group">
                                    <label for="question_text">Question Section Description</label>
                                    <textarea type="text" class="form-control" id="question_text" name="question_text" rows="4"
                                        placeholder="Type here (maximum 400 characters...)" maxlength="400">{{ $question->question_text }}</textarea>
                                </div>

                                <div class="card-header">
                                    <h4 class="card-title">Question Image</h4>
                                </div>
                                <div class="form-group">
                                    <figure class="imagecheck-figure">
                                        <img src="{{ url($question->question_bg_img) }}" alt="title"
                                            class="imagecheck-image">
                                    </figure>
                                    <input type="file" class="form-control" id="question_image" name="question_image">
                                </div>


                            </div>

                        </div>
                    </div>

                    <div class="tab-pane fade" id="header-buttons" role="tabpanel" aria-labelledby="header-buttons">
                        <div class="card-header">
                            <h4 class="card-title"> Question Buttons</h4>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">

                                <div class="form-group">
                                    <label for="question_btn1_text">Button One text</label>
                                    <input type="text" class="form-control" id="question_btn1_text"
                                        name="question_btn1_text" value="{{ $question->question_btn1_text }}"
                                        placeholder="Type here">
                                </div>
                                <div class="form-group">
                                    <label for="question_btn1_link">Button One link</label>
                                    <input type="text" class="form-control" id="question_btn1_link"
                                        name="question_btn1_link" value="{{ $question->question_btn1_link }}"
                                        placeholder="Type here">
                                </div>
                            </div>


                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="question_btn2_text">Button Two text</label>
                                    <input type="text" class="form-control" id="question_btn2_text"
                                        name="question_btn2_text" value="{{ $question->question_btn2_text }}"
                                        placeholder="Type here">
                                </div>
                                <div class="form-group">
                                    <label for="question_btn2_link">Button Two link</label>
                                    <input type="text" class="form-control" id="question_btn2_link"
                                        name="question_btn2_link" value="{{ $question->question_btn2_link }}"
                                        placeholder="Type here">
                                </div>
                            </div>

                        </div>

                    </div>


                </div>
            </div>

        </form>
    </div>
@endsection

@section('scripts')
    <script>
        ClassicEditor
            .create(document.querySelector('#about_section_title_rich_desc'))
            .catch(error => {
                console.error(error);
            });
    </script>
@endsection
