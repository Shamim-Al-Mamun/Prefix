@extends('layouts.admin.app')
@section('content')
    <div class="page-header">
        <h4 class="page-title">What We do Settings</h4>
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
                <a href="{{ route('admin.dashboard') }}">What We Do</a>
            </li>
        </ul>
    </div>


    <div class="card">
        <form action="{{ route('admin.whatWeDo.update') }}" method="POST" enctype="multipart/form-data">
            @csrf
            {{ method_field('PUT') }}
            <div class="card-header d-flex justify-content-between align-items-center">
                <h4 class="card-title">What We Do Settings</h4>
                <button class="btn btn-success" type="submit" name="submit">Save Header</button>
            </div>

            <div class="card-body">
                <ul class="nav nav-pills nav-secondary  nav-pills-no-bd nav-pills-icons" id="pills-tab-with-icon"
                    role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="pills-home-tab-icon" data-toggle="pill" href="#pills-home-icon"
                            role="tab" aria-controls="pills-home-icon" aria-selected="true">
                            <i class="flaticon-pencil"></i>
                            What We do Intro
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-profile-tab-icon" data-toggle="pill" href="#header-buttons"
                            role="tab" aria-controls="pills-profile-icon" aria-selected="false">
                            <i class="flaticon-check"></i>
                            What We do Content
                        </a>
                    </li>

                </ul>

                <div class="tab-content mt-2 mb-3" id="pills-with-icon-tabContent">
                    <div class="tab-pane fade show active" id="pills-home-icon" role="tabpanel"
                        aria-labelledby="pills-home-tab-icon">
                        <div class="card-header">
                            <h4 class="card-title">What We do Intro</h4>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">

                                <div class="form-group">
                                    <label for="title">What We do Section Title</label>
                                    <input type="text" class="form-control" id="title" name="title"
                                        value="{{ $whatWeDo->title }}" placeholder="Type here">
                                </div>
                                <div class="form-group">
                                    <label for="sub_title">What We do Section Sub Title</label>
                                    <input type="text" class="form-control" id="sub_title" name="sub_title"
                                        value="{{ $whatWeDo->sub_title }}" placeholder="Type here">
                                </div>

                                <div class="form-group">
                                    <label for="text">What We do Section Text</label>
                                    <textarea type="text" class="form-control" id="text" name="text" placeholder="Type here(maximum 600 characters...)" maxlength="600" rows="5">{{ $whatWeDo->text }}</textarea>
                                </div>


                                {{-- <div class="form-group">
                                    <label for="about_section_title_rich_desc">What We do Section Description</label>
                                    <textarea type="text" class="form-control" id="about_section_title_rich_desc" name="about_section_title_rich_desc">{{ $whatWeDo->text }}</textarea>
                                </div> --}}


                            </div>

                        </div>
                    </div>

                    <div class="tab-pane fade" id="header-buttons" role="tabpanel" aria-labelledby="header-buttons">
                        <div class="card-header">
                            <h4 class="card-title">What We do Content</h4>
                        </div>
                        <div class="row">

                            <div class="col-lg-6">

                                <div class="form-group">
                                    <label for="list1">What We do Section List One</label>
                                    <input type="text" class="form-control" id="list1" name="list1"
                                        value="{{ $whatWeDo->list1 }}"  placeholder="Type here">
                                </div>

                                <div class="form-group">
                                    <label for="list2">What We do Section List Two</label>
                                    <input type="text" class="form-control" id="list2" name="list2"
                                        value="{{ $whatWeDo->list2 }}"  placeholder="Type here">
                                </div>

                                <div class="form-group">
                                    <label for="list3">What We do Section List Three</label>
                                    <input type="text" class="form-control" id="list3" name="list3"
                                        value="{{ $whatWeDo->list3 }}"  placeholder="Type here">
                                </div>

                                <div class="form-group">
                                    <label for="list4">What We do Section List Four</label>
                                    <input type="text" class="form-control" id="list4" name="list4"
                                        value="{{ $whatWeDo->list4 }}"  placeholder="Type here">
                                </div>

                                <div class="form-group">
                                    <label for="list5">What We do Section List Five</label>
                                    <input type="text" class="form-control" id="list5" name="list5"
                                        value="{{ $whatWeDo->list5 }}"  placeholder="Type here">
                                </div>

                                <div class="form-group">
                                    <label for="list6">What We do Section List Six</label>
                                    <input type="text" class="form-control" id="list6" name="list6"
                                        value="{{ $whatWeDo->list6 }}"  placeholder="Type here">
                                </div>

                                <div class="form-group">
                                    <label for="list7">What We do Section List Seven</label>
                                    <input type="text" class="form-control" id="list7" name="list7"
                                        value="{{ $whatWeDo->list7 }}"  placeholder="Type here">
                                </div>

                                <div class="form-group">
                                    <label for="list8">What We do Section List Eight</label>
                                    <input type="text" class="form-control" id="list8" name="list8"
                                        value="{{ $whatWeDo->list8 }}"  placeholder="Type here">
                                </div>

                                <div class="form-group">
                                    <label for="list9">What We do Section List Nine</label>
                                    <input type="text" class="form-control" id="list9" name="list9"
                                        value="{{ $whatWeDo->list9 }}"  placeholder="Type here">
                                </div>

                                <div class="form-group">
                                    <label for="list10">What We do Section List Ten</label>
                                    <input type="text" class="form-control" id="list10" name="list10"
                                        value="{{ $whatWeDo->list10 }}"  placeholder="Type here">
                                </div>

                            </div>

                            <div class="col-lg-6">

                                <div class="quick-sidebar-wrapper">
                                    <ul class="nav nav-tabs nav-line nav-color-secondary" role="tablist">

                                        <li class="nav-item submenu"> <a class="nav-link active show" data-toggle="tab"
                                                href="#card1" role="tab" aria-selected="true">Card One</a>
                                        </li>
                                        <li class="nav-item submenu"> <a class="nav-link" data-toggle="tab"
                                                href="#card2" role="tab" aria-selected="false">Card Two</a>
                                        </li>
                                        <li class="nav-item submenu"> <a class="nav-link" data-toggle="tab"
                                                href="#card3" role="tab" aria-selected="false">Card Three</a>
                                        </li>
                                        <li class="nav-item submenu"> <a class="nav-link" data-toggle="tab"
                                                href="#card4" role="tab" aria-selected="false">Card Four</a>
                                        </li>
                                        <li class="nav-item submenu"> <a class="nav-link" data-toggle="tab"
                                                href="#card5" role="tab" aria-selected="false">Card FIve</a>
                                        </li>
                                        <li class="nav-item submenu"> <a class="nav-link" data-toggle="tab"
                                                href="#card6" role="tab" aria-selected="false">Card Six</a>
                                        </li>
                                    </ul>
                                    <div class="tab-content mt-3">

                                        <div class="tab-chat tab-pane fade active show" id="card1" role="tabpanel">
                                            {{-- Card One; --}}
                                            <div class="tab-pane fade show active" id="pills-One" role="tabpanel"
                                                aria-labelledby="pills-profile-icon">
                                                {{-- Title --}}
                                                <div class="form-group">
                                                    <label for="card1_title">Title</label>
                                                    <input type="text" class="form-control" id="card1_title"
                                                        name="card1_title" value="{{ $whatWeDo->card1_title }}" placeholder="Type here">
                                                </div>

                                                {{-- Text --}}
                                                <div class="form-group">
                                                    <label for="card1_text">Description</label>
                                                    <textarea type="text" class="form-control" id="card1_text" name="card1_text" placeholder="Type here(maximum 100 characters...)" maxlength="100">{{ $whatWeDo->card1_text }}</textarea>
                                                </div>

                                                {{-- Image --}}
                                                <div class="form-group">
                                                    <label for="about_section_title_desc">
                                                        Image</label>
                                                    @if (!empty($whatWeDo->card1_logo))
                                                        <figure class="imagecheck-figure">
                                                            <img src="{{ url($whatWeDo->card1_logo) }}" alt="title"
                                                                class="imagecheck-image">
                                                        </figure>
                                                    @else
                                                        <figure class="imagecheck-figure">
                                                            <img src="{{ asset('storage/img/no-preview.png') }}"
                                                                alt="#" class="imagecheck-image">
                                                        </figure>
                                                    @endif
                                                    <input type="file" class="form-control" id="card1_logo"
                                                        name="card1_logo">
                                                </div>
                                            </div>

                                        </div>

                                        <div class="tab-pane fade" id="card2" role="tabpanel">
                                            {{-- Card Two; --}}
                                            <div id="pills-Two">

                                                {{-- Title --}}
                                                <div class="form-group">
                                                    <label for="card2_title">Title</label>
                                                    <input type="text" class="form-control" id="card2_title"
                                                        name="card2_title" value="{{ $whatWeDo->card2_title }}" placeholder="Type here">
                                                </div>

                                                {{-- Text --}}
                                                <div class="form-group">
                                                    <label for="card2_text">
                                                        Description</label>
                                                    <textarea type="text" class="form-control" id="card2_text" name="card2_text"  placeholder="Type here(maximum 100 characters...)" maxlength="100">{{ $whatWeDo->card2_text }}</textarea>
                                                </div>

                                                {{-- Image --}}
                                                <div class="form-group">
                                                    <label for="about_section_title_desc">Image</label>
                                                    @if (!empty($whatWeDo->card2_logo))
                                                        <figure class="imagecheck-figure">
                                                            <img src="{{ url($whatWeDo->card2_logo) }}" alt="title"
                                                                class="imagecheck-image">
                                                        </figure>
                                                    @else
                                                        <figure class="imagecheck-figure">
                                                            <img src="{{ asset('storage/img/no-preview.png') }}"
                                                                alt="#" class="imagecheck-image">
                                                        </figure>
                                                    @endif
                                                    <input type="file" class="form-control" id="card2_logo"
                                                        name="card2_logo">
                                                </div>
                                            </div>

                                        </div>

                                        <div class="tab-pane fade" id="card3" role="tabpanel">
                                            {{-- Card Three; --}}
                                            <div id="pills-Two">

                                                {{-- Title --}}
                                                <div class="form-group">
                                                    <label for="card3_title">Title</label>
                                                    <input type="text" class="form-control" id="card3_title"
                                                        name="card3_title" value="{{ $whatWeDo->card3_title }}" placeholder="Type here">
                                                </div>

                                                {{-- Text --}}
                                                <div class="form-group">
                                                    <label for="card3_text">
                                                        Description</label>
                                                    <textarea type="text" class="form-control" id="card3_text" name="card3_text"  placeholder="Type here(maximum 100 characters...)" maxlength="100">{{ $whatWeDo->card3_text }}</textarea>
                                                </div>

                                                {{-- Image --}}
                                                <div class="form-group">
                                                    <label for="about_section_title_desc">Image</label>
                                                    @if (!empty($whatWeDo->card3_logo))
                                                        <figure class="imagecheck-figure">
                                                            <img src="{{ url($whatWeDo->card3_logo) }}" alt="title"
                                                                class="imagecheck-image">
                                                        </figure>
                                                    @else
                                                        <figure class="imagecheck-figure">
                                                            <img src="{{ asset('storage/img/no-preview.png') }}"
                                                                alt="#" class="imagecheck-image">
                                                        </figure>
                                                    @endif
                                                    <input type="file" class="form-control" id="card3_logo"
                                                        name="card3_logo">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="tab-pane fade" id="card4" role="tabpanel">
                                            {{-- Card Four; --}}
                                            <div id="pills-Two">

                                                {{-- Title --}}
                                                <div class="form-group">
                                                    <label for="card4_title">Title</label>
                                                    <input type="text" class="form-control" id="card4_title"
                                                        name="card4_title" value="{{ $whatWeDo->card4_title }}" placeholder="Type here">
                                                </div>

                                                {{-- Text --}}
                                                <div class="form-group">
                                                    <label for="card4_text">
                                                        Description</label>
                                                    <textarea type="text" class="form-control" id="card4_text" name="card4_text"  placeholder="Type here(maximum 100 characters...)" maxlength="100">{{ $whatWeDo->card4_text }}</textarea>
                                                </div>

                                                {{-- Image --}}
                                                <div class="form-group">
                                                    <label for="about_section_title_desc">Image</label>
                                                    @if (!empty($whatWeDo->card4_logo))
                                                        <figure class="imagecheck-figure">
                                                            <img src="{{ url($whatWeDo->card4_logo) }}" alt="title"
                                                                class="imagecheck-image">
                                                        </figure>
                                                    @else
                                                        <figure class="imagecheck-figure">
                                                            <img src="{{ asset('storage/img/no-preview.png') }}"
                                                                alt="#" class="imagecheck-image">
                                                        </figure>
                                                    @endif
                                                    <input type="file" class="form-control" id="card4_logo"
                                                        name="card4_logo">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="tab-pane fade" id="card5" role="tabpanel">
                                            {{-- Card Five; --}}
                                            <div id="pills-Two">

                                                {{-- Title --}}
                                                <div class="form-group">
                                                    <label for="card5_title">Title</label>
                                                    <input type="text" class="form-control" id="card5_title"
                                                        name="card5_title" value="{{ $whatWeDo->card5_title }}" placeholder="Type here">
                                                </div>

                                                {{-- Text --}}
                                                <div class="form-group">
                                                    <label for="card5_text">
                                                        Description</label>
                                                    <textarea type="text" class="form-control" id="card5_text" name="card5_text"  placeholder="Type here(maximum 100 characters...)" maxlength="100">{{ $whatWeDo->card5_text }}</textarea>
                                                </div>

                                                {{-- Image --}}
                                                <div class="form-group">
                                                    <label for="about_section_title_desc">Image</label>
                                                    @if (!empty($whatWeDo->card5_logo))
                                                        <figure class="imagecheck-figure">
                                                            <img src="{{ url($whatWeDo->card5_logo) }}" alt="title"
                                                                class="imagecheck-image">
                                                        </figure>
                                                    @else
                                                        <figure class="imagecheck-figure">
                                                            <img src="{{ asset('storage/img/no-preview.png') }}"
                                                                alt="#" class="imagecheck-image">
                                                        </figure>
                                                    @endif
                                                    <input type="file" class="form-control" id="card5_logo"
                                                        name="card5_logo">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="tab-pane fade" id="card6" role="tabpanel">
                                            {{-- Card Six; --}}
                                            <div id="pills-Two">

                                                {{-- Title --}}
                                                <div class="form-group">
                                                    <label for="card6_title">Title</label>
                                                    <input type="text" class="form-control" id="card6_title"
                                                        name="card6_title" value="{{ $whatWeDo->card6_title }}" placeholder="Type here">
                                                </div>

                                                {{-- Text --}}
                                                <div class="form-group">
                                                    <label for="card6_text">
                                                        Description</label>
                                                    <textarea type="text" class="form-control" id="card6_text" name="card6_text"  placeholder="Type here(maximum 100 characters...)" maxlength="100">{{ $whatWeDo->card6_text }}</textarea>
                                                </div>

                                                {{-- Image --}}
                                                <div class="form-group">
                                                    <label for="about_section_title_desc">Image</label>
                                                    @if (!empty($whatWeDo->card6_logo))
                                                        <figure class="imagecheck-figure">
                                                            <img src="{{ url($whatWeDo->card6_logo) }}" alt="title"
                                                                class="imagecheck-image">
                                                        </figure>
                                                    @else
                                                        <figure class="imagecheck-figure">
                                                            <img src="{{ asset('storage/img/no-preview.png') }}"
                                                                alt="#" class="imagecheck-image">
                                                        </figure>
                                                    @endif
                                                    <input type="file" class="form-control" id="card6_logo"
                                                        name="card6_logo">
                                                </div>
                                            </div>
                                        </div>
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
