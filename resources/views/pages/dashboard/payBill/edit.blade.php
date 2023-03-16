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
                <a href="{{ route('admin.paybill.edit', $option->id) }}">Edit Pay bill steps</a>
            </li>
        </ul>
    </div>


    <div class="card">
        <form action="{{ route('admin.paybill.update', $option->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            {{-- {{ method_field('PUT') }} --}}
            <div class="card-header d-flex justify-content-between align-items-center">
                <h4 class="card-title">Pay Bill Settings</h4>
                <button class="btn btn-success" type="submit" name="submit">Save Header</button>
            </div>

            <div class="card-body">
                <ul class="nav nav-pills nav-secondary  nav-pills-no-bd nav-pills-icons" id="pills-tab-with-icon"
                    role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="pills-home-tab-icon" data-toggle="pill" href="#pills-home-icon"
                            role="tab" aria-controls="pills-home-icon" aria-selected="true">
                            <i class="flaticon-pencil"></i>
                            Title
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-profile-tab-icon" data-toggle="pill" href="#header-buttons"
                            role="tab" aria-controls="pills-profile-icon" aria-selected="false">
                            <i class="flaticon-check"></i>
                            Edit Steps
                        </a>
                    </li>

                </ul>

                <div class="tab-content mt-2 mb-3" id="pills-with-icon-tabContent">

                    <div class="tab-pane fade show active" id="pills-home-icon" role="tabpanel"
                        aria-labelledby="pills-home-tab-icon">
                        <div class="card-header">
                            <h4 class="card-title"> Title</h4>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="option">Pay bill Title</label>
                                        <input type="text" class="form-control" id="option" name="option"
                                            value="{{ $option->option }}">
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>

                    <div class="tab-pane fade" id="header-buttons" role="tabpanel" aria-labelledby="header-buttons">
                        <div class="card-header">
                            <h4 class="card-title">Steps</h4>
                        </div>
                        <div class="row">

                            <div class="col-lg-6">


                                <div class="quick-sidebar-wrapper">
                                    <ul class="nav nav-tabs nav-line nav-color-secondary" role="tablist">

                                        @if (count($option->PayBillOptionSteps) > 0)
                                            @foreach ($option->PayBillOptionSteps as $step)
                                                @if (!empty($step->text))
                                                    <li class="nav-item submenu">
                                                        <a class="nav-link {{ $loop->index == 0 ? 'active show' : '' }}"
                                                            data-toggle="tab" href="#step{{ $step->id }}" role="tab"
                                                            aria-selected="true">Step {{ $loop->index + 1 }}
                                                        </a>
                                                    </li>
                                                @endif
                                            @endforeach
                                        @endif

                                    </ul>
                                    <div class="tab-content mt-3">

                                        @if (count($option->PayBillOptionSteps) > 0)
                                            @foreach ($option->PayBillOptionSteps as $step)
                                                @if (!empty($step->text))
                                                    <div class="tab-chat tab-pane fade  {{ $loop->index == 0 ? 'active show' : '' }}"
                                                        id="step{{ $step->id }}" role="tabpanel">

                                                        {{-- Image --}}
                                                        <div class="form-group">
                                                            <label for="about_section_title_desc">
                                                                Image</label>
                                                            @if (!empty($step->img))
                                                                <figure class="imagecheck-figure">
                                                                    <img src="{{ url($step->img) }}" alt="title"
                                                                        class="imagecheck-image">
                                                                </figure>
                                                            @else
                                                                <figure class="imagecheck-figure">
                                                                    <img src="{{ asset('storage/img/no-preview.png') }}"
                                                                        alt="#" class="imagecheck-image">
                                                                </figure>
                                                            @endif
                                                            <input type="file" class="form-control" id="step_img"
                                                                name="step_img[{{ $step->id }}]">
                                                        </div>

                                                        {{-- Text --}}
                                                        <div class="form-group">
                                                            <label for="text">Description</label>
                                                            <textarea type="text" class="form-control" id="text" name="text[{{ $step->id }}]"
                                                                placeholder="Type here(max 600 characters)" maxlength="600" rows="4" required>{{ $step->text }}</textarea>
                                                        </div>

                                                    </div>
                                                @endif
                                            @endforeach
                                        @endif

                                    </div>

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

{{-- @section('scripts')
    <script>
        ClassicEditor
            .create(document.querySelector('#about_section_title_rich_desc'))
            .catch(error => {
                console.error(error);
            });
    </script>
@endsection --}}
