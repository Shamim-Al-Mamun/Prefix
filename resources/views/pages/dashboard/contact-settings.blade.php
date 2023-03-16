@extends('layouts.admin.app')
@section('content')
<div class="page-header">
    <h4 class="page-title">Contact</h4>
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
            <a href="{{route('admin.dashboard')}}">Contact Settings</a>
        </li>
    </ul>
 </div>


 <div class="card">
    <form action="{{route('admin.contact.update')}}" method="POST" enctype="multipart/form-data">
        @csrf
        {{method_field('PUT')}}
        <div class="card-header d-flex justify-content-between align-items-center">
            <h4 class="card-title">About Settings</h4>
            <button class="btn btn-success" type="submit" name="submit">Save Header</button>
        </div>
        <div class="card-body">
            <ul class="nav nav-pills nav-secondary  nav-pills-no-bd nav-pills-icons" id="pills-tab-with-icon" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="pills-home-tab-icon" data-toggle="pill" href="#pills-home-icon" role="tab" aria-controls="pills-home-icon" aria-selected="true">
                        <i class="flaticon-technology-2"></i>
                        Phone Number
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="pills-profile-tab-icon" data-toggle="pill" href="#header-buttons" role="tab" aria-controls="pills-profile-icon" aria-selected="false">
                        <i class="flaticon-envelope-1"></i>
                        Email Address
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="pills-profile-tab-icon" data-toggle="pill" href="#pills-profile-icon" role="tab" aria-controls="pills-profile-icon" aria-selected="false">
                        <i class="flaticon-arrows-2"></i>
                        Location
                    </a>
                </li>

            </ul>
            <div class="tab-content mt-2 mb-3" id="pills-with-icon-tabContent">
                <div class="tab-pane fade show active" id="pills-home-icon" role="tabpanel" aria-labelledby="pills-home-tab-icon">
                    <div class="card-header">
                        <h4 class="card-title">Phone Box Details</h4>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="contact_phone_icon">Contact Box Icon</label>
                                <input type="text" class="form-control" id="contact_phone_icon" name="contact_phone_icon" value="{{$contact_settings->contact_phone_icon}}">
                                <small id="emailHelp" class="form-text text-muted">Type FontAwesome icon name <a href="https://www.fontawesome.com/icons" target="_blank">Visit FontAweosme</a></small>
                            </div>
                            <div class="form-group">
                                <label for="contact_phone_title">Contact Box Title</label>
                                <input type="text" class="form-control" id="contact_phone_title" name="contact_phone_title" value="{{$contact_settings->contact_phone_title}}">
                                <small id="emailHelp" class="form-text text-muted">Type contact box title.</small>
                            </div>
                            <div class="form-group">
                                <label for="contact_phone_text">Contact Info</label>
                                <textarea type="text" class="form-control" id="contact_phone_text" name="contact_phone_text">{{$contact_settings->contact_phone_text}}</textarea>
                                <small id="emailHelp" class="form-text text-muted">Add your contact details</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="header-buttons" role="tabpanel" aria-labelledby="header-buttons">
                <div class="card-header">
                        <h4 class="card-title">Email Box Details</h4>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="contact_email_icon">Contact Box Icon</label>
                                <input type="text" class="form-control" id="contact_email_icon" name="contact_email_icon" value="{{$contact_settings->contact_email_icon}}">
                                <small id="emailHelp" class="form-text text-muted">Type FontAwesome icon name <a href="https://www.fontawesome.com/icons" target="_blank">Visit FontAweosme</a></small>
                            </div>
                            <div class="form-group">
                                <label for="contact_email_title">Contact Box Title</label>
                                <input type="text" class="form-control" id="contact_email_title" name="contact_email_title" value="{{$contact_settings->contact_email_title}}">
                                <small id="emailHelp" class="form-text text-muted">Type contact box title.</small>
                            </div>
                            <div class="form-group">
                                <label for="contact_email_text">Contact Info</label>
                                <textarea type="text" class="form-control" id="contact_email_text" name="contact_email_text">{{$contact_settings->contact_email_text}}</textarea>
                                <small id="emailHelp" class="form-text text-muted">Add your contact details</small>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="tab-pane fade" id="pills-profile-icon" role="tabpanel" aria-labelledby="pills-profile-tab-icon">
                    <div class="card-header">
                        <h4 class="card-title">Address  Box</h4>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="contact_location_icon">Contact Box Icon</label>
                                <input type="text" class="form-control" id="contact_location_icon" name="contact_location_icon" value="{{$contact_settings->contact_location_icon}}">
                                <small id="emailHelp" class="form-text text-muted">Type FontAwesome icon name <a href="https://www.fontawesome.com/icons" target="_blank">Visit FontAweosme</a></small>
                            </div>
                            <div class="form-group">
                                <label for="contact_location_title">Contact Box Title</label>
                                <input type="text" class="form-control" id="contact_location_title" name="contact_location_title" value="{{$contact_settings->contact_location_title}}">
                                <small id="emailHelp" class="form-text text-muted">Type contact box title.</small>
                            </div>
                            <div class="form-group">
                                <label for="contact_location_text">Contact Info</label>
                                <textarea type="text" class="form-control" id="contact_location_text" name="contact_location_text">{{$contact_settings->contact_location_text}}</textarea>
                                <small id="emailHelp" class="form-text text-muted">Add your contact details</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>

<div class="card">

        <div class="card-header d-flex justify-content-between align-items-center">
            <h4 class="card-title">Area Settings</h4>
            <button class="btn btn-success" type="submit" name="submit">Save Header</button>
        </div>
        <div class="card-body">
            <ul class="nav nav-pills nav-secondary  nav-pills-no-bd nav-pills-icons" id="pills-tab-with-icon" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="pills-profile-tab-icon" data-toggle="pill" href="#pills-profile-icon-district" role="tab" aria-controls="pills-profile-icon" aria-selected="true">
                        <i class="flaticon-arrows-2"></i>
                        District
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="pills-profile-tab-icon" data-toggle="pill" href="#pills-profile-icon-upazilla" role="tab" aria-controls="pills-profile-icon" aria-selected="false">
                        <i class="flaticon-arrows-2"></i>
                        Upazilla
                    </a>
                </li>
            </ul>
            <div class="tab-content mt-2 mb-3" id="pills-with-icon-tabContent">

                <div class="tab-pane fade show active" id="pills-profile-icon-district" role="tabpanel" aria-labelledby="pills-profile-tab-icon">
                    <div class="card-header">
                        <h4 class="card-title">District Box</h4>
                    </div>
                    <form action="{{route('admin.area.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        {{method_field('POST')}}
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="contact_location_title">District Box</label>
                                    <input type="text" class="form-control" id="contact_location_title" name="contact_district_title" value="">
                                    <small id="emailHelp" class="form-text text-muted">Type district box title.</small>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <button class="btn btn-success" type="submit" name="submit">Save</button>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="tab-pane fade" id="pills-profile-icon-upazilla" role="tabpanel" aria-labelledby="pills-profile-tab-icon">
                    <div class="card-header">
                        <h4 class="card-title">Upazilla Box</h4>
                    </div>
                    <form action="{{route('admin.upazilla.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        {{method_field('POST')}}
                    <div class="row">
                        <div class="col-lg-6">
                            {{-- <div class="form-group">
                                <select class="form-control show-tick" name="pricing_category_id">
                                    <option selected disabled>-- Please select--</option>
                                    @foreach($pricing_cats as $key => $pricing_cat)
                                        <option value="{{ $pricing_cat->id }}"> {{ $pricing_cat->pricing_category_name }} </option>
                                    @endforeach
                                    <option selected value="1">Dhaka</option>
                                    <option selected value="2">Khulna</option>
                                </select>
                            </div> --}}
                            <div class="form-group">
                                <label for="contact_location_title">Upazilla Box</label>
                                <input type="text" class="form-control" id="contact_location_title" name="contact_upazilla_title" value="">
                                <small id="emailHelp" class="form-text text-muted">Type upazilla box title.</small>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <button class="btn btn-success" type="submit" name="submit">Save</button>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>

</div>

@endsection

@section('scripts')
	<script>
		ClassicEditor
			.create( document.querySelector( '#contact_phone_text' ) )
			.catch( error => {
				console.error( error );
			} );


		ClassicEditor
			.create( document.querySelector( '#contact_email_text' ) )
			.catch( error => {
				console.error( error );
			} );


		ClassicEditor
			.create( document.querySelector( '#contact_location_text' ) )
			.catch( error => {
				console.error( error );
			} );
	</script>
@endsection
