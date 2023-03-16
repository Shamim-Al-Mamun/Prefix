@extends('layouts.admin.app')
@section('content')

    <div class="page-header">
        <h4 class="page-title">Faq Setting</h4>
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
                <a href="{{ route('admin.faq.list.all') }}">Faq List</a>
            </li>
        </ul>
    </div>

    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="add-row" class="display table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Text</th>
                                {{-- <th>Answers</th> --}}
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (count($faqListTitle) > 0)
                                @foreach ($faqListTitle as $faqListTitle)
                                    <tr>
                                        <td>
                                            @if (!empty($faqListTitle->faq_list_title))
                                                {{ $faqListTitle->faq_list_title }}
                                            @endif
                                        </td>
                                        <td>
                                            @if (!empty($faqListTitle->faq_list_text))
                                                {!! $faqListTitle->faq_list_text !!}
                                            @endif
                                        </td>
                                        {{-- <td>
                                            @if (!empty($faqListTitle->FaqListAnswer))
                                                {{ count($faqListTitle->FaqListAnswer) }}
                                            @endif
                                        </td> --}}
                                        <td>
                                            <div class="button-group">
                                                <a href="{{ route('admin.faq.list.answer.edit', $faqListTitle->id) }}"
                                                    class="btn btn-secondary">Edit</a>
                                                <form action="{{ route('admin.faq.list.destroy', $faqListTitle->id) }}"
                                                    method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <input type="submit" name="submit" value="Delete"
                                                        class="btn btn-danger">
                                                </form>
                                            </div>

                                        </td>
                                    </tr>
                                @endforeach
                            @endif


                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
