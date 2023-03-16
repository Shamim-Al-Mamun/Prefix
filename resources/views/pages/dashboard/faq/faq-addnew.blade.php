@extends('layouts.admin.app')
@section('content')
    <div class="page-header">
        <h4 class="page-title">Faq list</h4>
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
                <a href="{{ route('admin.faq.list.all') }}">Faq list</a>
            </li>
            <li class="separator">
                <i class="flaticon-right-arrow"></i>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.faq.list.addnew') }}">Add New</a>
            </li>
        </ul>
    </div>

    <div class="card">
        <div class="card-header">
            <div class="card-title">Create Faq list</div>
        </div>
        <form action="{{ route('admin.faq.list.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="faq_list_title">Faq list Title</label>
                            <input type="text" class="form-control" id="faq_list_title" name="faq_list_title"
                                value="" placeholder="Type here">
                        </div>
                        <div class="form-group">
                            <label for="faq_list_text">Faq list Text</label>
                            <textarea type="text" class="form-control" id="faq_list_text" name="faq_list_text"
                                placeholder="Type here(maximum 600 characters)" maxlength="600" rows="7">
                            </textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-action">
                <button class="btn btn-success" type="submit" name="submit">Create list</button>
            </div>
        </form>
    </div>
@endsection

@section('scripts')
    <script>
        ClassicEditor
            .create(document.querySelector('#faq_list_text'))
            .catch(error => {
                console.error(error);
            });
    </script>
@endsection
