@extends('layouts.admin.app')
@section('content')
    <div class="page-header">
        <h4 class="page-title">Pricing</h4>
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
                <a href="{{ route('admin.pricing.all') }}">Pricing lists</a>
            </li>
            <li class="separator">
                <i class="flaticon-right-arrow"></i>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.pricing.addnew') }}">Add New Pricing</a>
            </li>
        </ul>
    </div>

    <form action="{{ route('admin.pricing.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h4 class="card-title">Add new package</h4>
                <button class="btn btn-success" type="submit" name="submit">Save Header</button>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-6">

                        <div class="form-group">
                            <select class="form-control show-tick" name="pricing_category_id">
                                <option selected disabled>-- Please select--</option>
                                @foreach ($pricing_cats as $key => $pricing_cat)
                                    <option value="{{ $pricing_cat->id }}"> {{ $pricing_cat->pricing_category_name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="pricing_title">Type Title</label>
                            <input type="text" class="form-control" id="pricing_title" name="pricing_title"
                                value="" placeholder="Type here">
                        </div>

                        {{-- <div class="form-group">
                            <label for="pricing_megabytes">Type Megabyte</label>
                            <input type="text" class="form-control" id="pricing_megabytes" name="pricing_megabytes" value="">
                        </div> --}}

                        <div class="form-group">
                            <label for="pricing_price_amount">Type Amount</label>
                            <input type="number" class="form-control" id="pricing_price_amount" name="pricing_price_amount"
                                value="" placeholder="Type here">
                        </div>

                        {{-- <div class="form-group">
                            <label for="pricing_price_amount_bottom">Type Package info</label>
                            <textarea type="text" class="form-control" id="pricing_price_amount_bottom" name="pricing_price_amount_bottom" value="">
                            <textarea type="text" class="form-control" id="pricing_price_amount_bottom" name="pricing_price_amount_bottom"
                                value=""></textarea>
                        </div> --}}

                        <div class="form-group">
                            <label for="pricing_price_desc">Pricing Lists</label>
                            <textarea type="text" class="form-control" id="pricing_price_desc" name="pricing_price_desc" placeholder="Type here"></textarea>
                        </div>

                        {{-- <div class="form-group">
                            <label for="pricing_price_offer_desc">Offer Lists</label>
                            <textarea type="text" class="form-control" id="pricing_price_offer_desc" name="pricing_price_offer_desc"></textarea>
                        </div> --}}

                        <div class="form-group">
                            <label for="pricing_price_button_text">Button Text</label>
                            <input type="text" class="form-control" id="pricing_price_button_text"
                                name="pricing_price_button_text" value="" placeholder="Type here" maxlength="20">
                        </div>

                        {{-- <div class="form-group">
                            <label for="pricing_price_button_url">Button URL</label>
                            <input type="text" class="form-control" id="pricing_price_button_url"
                                name="pricing_price_button_url" value="">
                        </div> --}}

                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection

@section('scripts')
    <script>
        ClassicEditor
            .create(document.querySelector('#pricing_price_desc'))
            .catch(error => {
                console.error(error);
            });
    </script>
    <script>
        ClassicEditor
            .create(document.querySelector('#pricing_price_amount_bottom'))
            .catch(error => {
                console.error(error);
            });
    </script>
    <script>
        ClassicEditor
            .create(document.querySelector('#pricing_price_offer_desc'))
            .catch(error => {
                console.error(error);
            });
    </script>
@endsection
