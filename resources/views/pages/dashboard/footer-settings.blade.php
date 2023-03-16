@extends('layouts.admin.app')
@section('content')
    <div class="page-header">
        <h4 class="page-title">Footer Settings</h4>
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
                <a href="{{ route('admin.footer') }}">Footer</a>
            </li>
        </ul>
    </div>


    <div class="card">
        <form action="{{ route('admin.footer.update') }}" method="POST" enctype="multipart/form-data">
            @csrf
            {{ method_field('PUT') }}
            <div class="card-header d-flex justify-content-between align-items-center">
                <h4 class="card-title">Footer Settings</h4>
                <button class="btn btn-success" type="submit" name="submit">Save Header</button>
            </div>
            <div class="card-body">
                <ul class="nav nav-pills nav-secondary  nav-pills-no-bd nav-pills-icons" id="pills-tab-with-icon"
                    role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="pills-home-tab-icon" data-toggle="pill" href="#footer_tab_one"
                            role="tab" aria-controls="footer_tab_one" aria-selected="true">
                            <i class="flaticon-picture"></i>
                            Footer About
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-profile-tab-icon" data-toggle="pill" href="#footer_tab_two"
                            role="tab" aria-controls="footer_tab_two" aria-selected="false">
                            <i class="flaticon-check"></i>
                            Footer Links
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-profile-tab-icon" data-toggle="pill" href="#footer_tab_three"
                            role="tab" aria-controls="footer_tab_three" aria-selected="false">
                            <i class="flaticon-list"></i>
                            Footer Contact Info
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-profile-tab-icon" data-toggle="pill" href="#footer_copyright"
                            role="tab" aria-controls="footer_copyright" aria-selected="false">
                            <i class="flaticon-pencil"></i>
                            Footer Copyright
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-profile-tab-icon" data-toggle="pill" href="#footer_tab_four"
                            role="tab" aria-controls="footer_tab_four" aria-selected="false">
                            <i class="flaticon-picture"></i>
                            Footer payment logo
                        </a>
                    </li>
                </ul>
                <div class="tab-content mt-2 mb-3" id="pills-with-icon-tabContent">
                    <div class="tab-pane fade show active" id="footer_tab_one" role="tabpanel"
                        aria-labelledby="pills-home-tab-icon">

                        <div class="row">

                            <div class="col-lg-6">
                                <div class="card-header">
                                    <h4 class="card-title">Logo</h4>
                                </div>
                                <div class="form-group">
                                    <figure class="imagecheck-figure">
                                        <img src="{{ url($footer_settings->footer_logo) }}" alt="title"
                                            class="imagecheck-image">
                                    </figure>
                                    <input type="file" class="form-control" id="footer_logo" name="footer_logo">
                                </div>
                                <div class="form-group">
                                    <label for="footer_heading">Headig Title</label>
                                    <input type="text" class="form-control" id="footer_heading" name="footer_heading"
                                        placeholder="Type here" required value="{{ $footer_settings->footer_heading }}" />
                                    <small id="emailHelp" class="form-text">Type footer title here.</small>
                                </div>
                                <div class="form-group">
                                    <label for="footer_text">Footer Text</label>
                                    <textarea type="text" class="form-control" id="footer_text" name="footer_text" placeholder="Type here"
                                        rows="3" required value="">{{ $footer_settings->footer_text }}</textarea>
                                    <small id="emailHelp" class="form-text">Type footer text here.</small>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="card-header">
                                    <h4 class="card-title">Social links</h4>
                                </div>

                                <div class="form-group">
                                    <label for="footer_facebook_url">Facebook URL</label>
                                    <div class="input-group mb-3">
                                        {{-- <div class="input-group-prepend">
                                            <span class="input-group-text"
                                                id="basic-addon3">https://facebook.com/social_link</span>
                                        </div> --}}
                                        <input type="text" class="form-control" id="footer_facebook_url"
                                            name="footer_facebook_url" value="{{ $footer_settings->footer_facebook_url }}"
                                            required placeholder="https://www.facebook.com/Xspeed">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="footer_twitter_url">Skype URL</label>
                                    <div class="input-group mb-3">
                                        {{-- <div class="input-group-prepend">
                                            <span class="input-group-text"
                                                id="basic-addon3">https://twitter.com/social_link</span>
                                        </div> --}}
                                        <input type="text" class="form-control" id="footer_twitter_url"
                                            name="footer_twitter_url" value="{{ $footer_settings->footer_twitter_url }}"
                                            required placeholder="https://www.skype.com/Xspeed">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="footer_instagram_url">Instagram URL</label>
                                    <div class="input-group mb-3">
                                        {{-- <div class="input-group-prepend">
                                            <span class="input-group-text"
                                                id="basic-addon3">https://instagram.com/social_link</span>
                                        </div> --}}
                                        <input type="text" class="form-control" id="footer_instagram_url"
                                            name="footer_instagram_url" required
                                            placeholder="https://www.instagram.com/Xspeed"
                                            value="{{ $footer_settings->footer_instagram_url }}">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="footer_linkedin_url">Whatsapp URL</label>
                                    <div class="input-group mb-3">
                                        {{-- <div class="input-group-prepend">
                                            <span class="input-group-text"
                                                id="basic-addon3">https://linkedin.com/social_link</span>
                                        </div> --}}
                                        <input type="text" class="form-control" id="footer_linkedin_url"
                                            name="footer_linkedin_url" required
                                            placeholder="https://www.whatsapp.com/Xspeed"
                                            value="{{ $footer_settings->footer_linkedin_url }}">
                                    </div>
                                </div>

                                {{--
                                <div class="form-group">
                                    <label for="footer_youtube_url">Instagram URL</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"
                                                id="basic-addon3">https://youtube.com/social_link</span>
                                        </div>
                                        <input type="text" class="form-control" id="footer_youtube_url"
                                            name="footer_youtube_url" value="{{ $footer_settings->footer_youtube_url }}">
                                    </div>
                                </div> --}}

                            </div>
                        </div>

                    </div>


                    <div class="tab-pane fade" id="footer_tab_two" role="tabpanel" aria-labelledby="footer_tab_two">
                        <div class="card-header">
                            <h4 class="card-title">Footer Links</h4>
                        </div>

                        <div class="row">

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="footer_link_one">Link Text One</label>
                                    <input type="text" class="form-control" id="footer_link_one"
                                        name="footer_link_one" placeholder="Type here" required
                                        value="{{ $footer_settings->footer_link_one }}">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="footer_link_one_url">Link URL One</label>
                                    <div class="input-group mb-3">
                                        {{-- <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon3">https://youtsite.com/path_url</span>
                                    </div> --}}
                                        <input type="text" class="form-control" id="footer_link_one_url"
                                            name="footer_link_one_url" placeholder="www.xspeed.com/aboutus" required
                                            value="{{ $footer_settings->footer_link_one_url }}">
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="footer_link_two">Link Text Two</label>
                                    <input type="text" class="form-control" id="footer_link_two"
                                        name="footer_link_two" placeholder="Type here" required
                                        value="{{ $footer_settings->footer_link_two }}">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="footer_link_two_url">Link URL Two</label>
                                    <div class="input-group mb-3">
                                        {{-- <div class="input-group-prepend">
                                            <span class="input-group-text"
                                                id="basic-addon3">https://youtsite.com/path_url</span>
                                        </div> --}}
                                        <input type="text" class="form-control" id="footer_link_two_url"
                                            name="footer_link_two_url" placeholder="www.xspeed.com/page-3" required
                                            value="{{ $footer_settings->footer_link_two_url }}">
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="footer_link_three">Link Text Three</label>
                                    <input type="text" class="form-control" id="footer_link_three"
                                        name="footer_link_three" value="{{ $footer_settings->footer_link_three }}"
                                        placeholder="Type here" required>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="footer_link_three_url">Link URL Three</label>
                                    <div class="input-group mb-3">
                                        {{-- <div class="input-group-prepend">
                                            <span class="input-group-text"
                                                id="basic-addon3">https://youtsite.com/path_url</span>
                                        </div> --}}
                                        <input type="text" class="form-control" id="footer_link_three_url"
                                            name="footer_link_three_url" placeholder="www.xspeed.com/page-1" required
                                            value="{{ $footer_settings->footer_link_three_url }}">
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="footer_link_four">Link Text Four</label>
                                    <input type="text" class="form-control" id="footer_link_four"
                                        name="footer_link_four" value="{{ $footer_settings->footer_link_four }}">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="footer_link_four_url">Link URL Four</label>
                                    <div class="input-group mb-3">
                                        {{-- <div class="input-group-prepend">
                                            <span class="input-group-text"
                                                id="basic-addon3">https://youtsite.com/path_url</span>
                                        </div> --}}
                                        <input type="text" class="form-control" id="footer_link_four_url"
                                            name="footer_link_four_url" placeholder="www.xspeed.com/page-2" required
                                            value="{{ $footer_settings->footer_link_four_url }}">
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="footer_link_five">Link Text Five</label>
                                    <input type="text" class="form-control" id="footer_link_five"
                                        name="footer_link_five" value="{{ $footer_settings->footer_link_five }}">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="footer_link_five_url">Link URL Five</label>
                                    <div class="input-group mb-3">
                                        {{-- <div class="input-group-prepend">
                                            <span class="input-group-text"
                                                id="basic-addon3">https://youtsite.com/path_url</span>
                                        </div> --}}
                                        <input type="text" class="form-control" id="footer_link_five_url"
                                            name="footer_link_five_url"
                                            value="{{ $footer_settings->footer_link_five_url }}"
                                            placeholder="www.xspeed.com/contactus" required>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>

                    <div class="tab-pane fade" id="footer_tab_three" role="tabpanel" aria-labelledby="footer_tab_three">
                        <div class="card-header">
                            <h4 class="card-title">Footer Contact Info</h4>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">

                                <div class="form-group">
                                    <label for="footer_address">Office Address</label>
                                    <input type="text" class="form-control" id="footer_address" name="footer_address"
                                        value="{{ $footer_settings->footer_address }}" placeholder="Type here" required>
                                    <small id="emailHelp" class="form-text text-muted">Type Office address.</small>
                                </div>
                                <div class="form-group">
                                    <label for="footer_phone">Phone Number</label>
                                    <input type="number" class="form-control" id="footer_phone" name="footer_phone"
                                        value="{{ $footer_settings->footer_phone }}" placeholder="Type here" required>
                                    <small id="emailHelp" class="form-text text-muted">Type phone number.</small>
                                </div>
                                <div class="form-group">
                                    <label for="footer_email">Email Address</label>
                                    <input type="text" class="form-control" id="footer_email" name="footer_email"
                                        value="{{ $footer_settings->footer_email }}" placeholder="Type here" required>
                                    <small id="emailHelp" class="form-text text-muted">Type email address.</small>
                                </div>
                            </div>
                            {{-- <div class="col-lg-6">
                                <div class="card-header">
                                    <h4 class="card-title">Support Info</h4>
                                </div>
                                <div class="form-group">
                                    <label for="support_title">Support Title</label>
                                    <input type="text" class="form-control" id="support_title" name="support_title"
                                        value="{{ $footer_settings->support_title }}" placeholder="Type here" required>
                                    <small id="support_title" class="form-text text-muted">Type title here.</small>
                                </div>
                                <div class="form-group">
                                    <label for="support_number">Support Number</label>
                                    <input type="text" class="form-control" id="support_number" name="support_number"
                                        value="{{ $footer_settings->support_number }} " placeholder="Type here" required>
                                    <small id="support_number" class="form-text text-muted">Type support number.</small>
                                </div>
                            </div> --}}
                        </div>

                    </div>

                    <div class="tab-pane fade" id="footer_copyright" role="tabpanel" aria-labelledby="footer_copyright">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card-header">
                                    <h4 class="card-title">Foote Copyright</h4>
                                </div>
                                <div class="form-group">
                                    <label for="footer_copyright">Footer Copyright</label>
                                    <textarea type="text" class="form-control" id="footer_copy" name="footer_copyright" required
                                        placeholder="Type here(max 200 characters)" maxlength="200">{{ $footer_settings->footer_copyright }}</textarea>
                                    <small id="emailHelp" class="form-text">Type footer Copyright text here.</small>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="footer_tab_four" role="tabpanel" aria-labelledby="footer_tab_four">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card-header">
                                    <h4 class="card-title">Payment logo One</h4>
                                </div>
                                <div class="form-group">
                                    <figure class="imagecheck-figure">
                                        <img src="{{ url($footer_settings->footer_large_image) }}" alt="title"
                                            class="imagecheck-image">
                                    </figure>
                                    <input type="file" class="form-control" id="footer_large_image"
                                        name="footer_large_image">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="card-header">
                                    <h4 class="card-title">Payment logo Two</h4>
                                </div>
                                <div class="form-group">
                                    <figure class="imagecheck-figure">
                                        <img src="{{ url($footer_settings->footer_bg_image) }}" alt="title"
                                            class="imagecheck-image">
                                    </figure>
                                    <input type="file" class="form-control" id="footer_bg_image"
                                        name="footer_bg_image">
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
            .create(document.querySelector('#footer_copy'))
            .catch(error => {
                console.error(error);
            });
    </script>
@endsection
