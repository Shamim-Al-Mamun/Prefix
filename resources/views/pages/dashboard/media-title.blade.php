@extends('layouts.admin.app')
@section('content')
<div class="page-header">
    <h4 class="page-title">Section Title Settings</h4>
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
            <a href="{{route('admin.media-title')}}">Media Title</a>
        </li>
    </ul>
 </div>


 <div class="card">
    <form action="{{route('admin.media-title.update')}}" method="POST" enctype="multipart/form-data">
         @csrf
        {{method_field('PUT')}}
        <div class="card-header d-flex justify-content-between align-items-center">
            <h4 class="card-title">Media Section title</h4>
            <button class="btn btn-success" type="submit" name="submit">Save Now</button>
        </div>  
        <div class="card-body">
            
        <div class="row">
            <div class="col-lg-6"> 
                <div class="form-group">
                    <label for="media_section_label">Section Label</label>
                    <input type="text" class="form-control" id="media_section_label" name="media_section_label" value="{{$media_title->media_section_label}}">
                    <small id="emailHelp" class="form-text text-muted">Type section top label here.</small>
                </div>
                <div class="form-group">
                    <label for="media_section_first_title">Section First Focus Title</label>
                    <input type="text" class="form-control" id="media_section_first_title" name="media_section_first_title" value="{{$media_title->media_section_first_title}}">
                    <small id="media_section_first_title" class="form-text text-muted">Type section focus First title.</small>
                </div>
                <div class="form-group">
                    <label for="media_section_title_middle">Section Title</label>
                    <input type="text" class="form-control" id="media_section_title_middle" name="media_section_title_middle" value="{{$media_title->media_section_title_middle}}">
                    <small id="media_section_title_middle" class="form-text text-muted">Type section title.</small>
                </div>
                <div class="form-group">
                    <label for="media_section_title_last">Section Last Focus Title</label>
                    <input type="text" class="form-control" id="media_section_title_last" name="media_section_title_last" value="{{$media_title->media_section_title_last}}">
                    <small id="media_section_title_last" class="form-text text-muted">Type section focus 1st title.</small>
                </div>
                <div class="form-group">
                    <label for="media_section_title_desc">Section Description</label>
                    <textarea type="text" class="form-control" id="media_section_desc" name="media_section_title_desc">{{$media_title->media_section_title_desc}}</textarea>
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
			.create( document.querySelector( '#media_section_desc' ) )
			.catch( error => {
				console.error( error );
			} );
	</script>
@endsection

