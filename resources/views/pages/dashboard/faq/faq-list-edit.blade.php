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
                <a href="{{ route('admin.faq.list.answer.edit', $faqListTitle->id) }}">Edit</a>
            </li>
        </ul>
    </div>

    <div class="card">

        <form action="{{ route('admin.faq.list.answer.update', $faqListTitle->id) }}" method="POST"
            enctype="multipart/form-data">
            @csrf
            {{ method_field('PUT') }}
            <div class="card-header d-flex justify-content-between align-items-center">
                <div class="card-title">Edit Faq list</div>
                <button class="btn btn-success" type="submit" name="submit">Save Header</button>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-6">

                        <div class="form-group">
                            <label for="faq_list_title">Faq list Title</label>
                            <input type="text" class="form-control" id="faq_list_title" name="faq_list_title" placeholder="Type here"
                                value="{{ $faqListTitle->faq_list_title }}">
                        </div>
                        <div class="form-group">
                            <label for="faq_list_text">Faq list Text</label>
                            <textarea type="text" class="form-control" id="faq_list_text" name="faq_list_text"
                                placeholder="Type here(maximum 600 characters)" maxlength="600" rows="7">
                                {{ $faqListTitle->faq_list_text }}
                            </textarea>
                        </div>

                    </div>

                    {{-- <div class="col-lg-6">

                        @if (count($faqListTitle->FaqListAnswer) > 0)
                            @foreach ($faqListTitle->FaqListAnswer as $answers)
                                <div class="form-group">
                                    <label for="faq_list_answer">Answer ( {{ $loop->index + 1 }} )</label>
                                    <input type="text" class="form-control" id="faq_list_answer"
                                        name="answers[{{ $answers->id }}]" value="{{ $answers->faq_list_answer }}">
                                </div>
                            @endforeach
                        @endif

                    </div> --}}

                </div>
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
