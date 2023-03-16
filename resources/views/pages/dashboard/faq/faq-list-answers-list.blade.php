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
        <form action="{{ route('admin.faq.list.answer.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-6">

                        <div class="form-group">
                            <select class="form-control show-tick" name="faq_list_id">
                                <option selected disabled>-- Please select--</option>
                                @foreach ($faqListTitle as $key => $faqListTitleEach)
                                    <option value="{{ $faqListTitleEach->id }}"> {{ $faqListTitleEach->faq_list_title }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="faq_list_answer">Answers list</label>
                            <input type="text" class="form-control" id="faq_list_answer" name="faq_list_answer"
                                value="">
                        </div>

                    </div>

                    <div class="col-lg-6">

                        {{-- <div class="form-group">
                            <select class="form-control show-tick" name="pricing_category_id">
                                <option selected disabled>-- Please select--</option>
                                @foreach ($faqListTitle as $key => $faqListTitleEach)
                                    <option value="{{ $faqListTitleEach->id }}"> {{ $faqListTitleEach->faq_list_title }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="faq_list_title">Answers list</label>
                            <input type="text" class="form-control" id="faq_list_title" name="faq_list_title"
                                value="">
                        </div> --}}

                    </div>
                </div>
            </div>
            <div class="card-action">
                <button class="btn btn-success" type="submit" name="submit">Create list answer</button>
            </div>
        </form>
    </div>
@endsection
