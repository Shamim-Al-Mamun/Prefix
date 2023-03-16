@extends('layouts.admin.app')
@section('content')
<div class="page-header">
    <h4 class="page-title">Maps</h4>
    <ul class="breadcrumbs">
        <li class="nav-home">
            <a href="{{route('admin.maps')}}">
                <i class="flaticon-home"></i>
            </a>
        </li>
        <li class="separator">
            <i class="flaticon-right-arrow"></i>
        </li>
        <li class="nav-item">
            <a href="{{route('admin.maps')}}">Maps Settings</a>
        </li>
    </ul>
 </div>


 <div class="card">
    <form action="{{route('admin.maps.update')}}" method="POST" enctype="multipart/form-data">
        @csrf
        {{method_field('PUT')}}
        <div class="card-header d-flex justify-content-between align-items-center">
            <h4 class="card-title">Maps Settings</h4>
            <button class="btn btn-success" type="submit" name="submit">Save Header</button>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-12">
                    <div class="form-group">
                        <label for="maps_iframe_code">Google Map Iframe</label>
                        <textarea type="text" class="form-control" id="maps_iframe_code" name="maps_iframe_code">{{$maps_settings->maps_iframe_code}}</textarea>
                        <small id="emailHelp" class="form-text text-muted">Add Google Maps iframe code here.</small>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>

@endsection
