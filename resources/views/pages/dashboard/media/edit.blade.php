@extends('layouts.admin.app')
@section('content')

    <div class="page-header">
        <h4 class="page-title">Media</h4>
        <ul class="breadcrumbs">
            <li class="nav-home">
                <a href="{{route('admin.dashboard')}}">
                    <i class="flaticon-home"></i>
                </a>
            </li>
            <li class="separator">
                <i class="flaticon-right-arrow"></i>
            </li>
            <li class="nav-item">
                <a href="{{route('admin.media.edit', $media_list->id)}}">Edit Media</a>
            </li>
        </ul>
    </div>



    <div class="card">
        <div class="card-header">
            <div class="card-title">Create New Media</div>
        </div>
        <form action="{{route('admin.media.update', $media_list->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
               <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="medialist_title">Media Title</label>
                            <input type="text" class="form-control" id="medialist_title" name="medialist_title" value="{{$media_list->medialist_title}}">
                        </div>
                        <div class="form-group">
                            <label for="medialist_link">Medaia Link</label>
                            <input type="text" class="form-control" id="medialist_link" name="medialist_link" value="{{$media_list->medialist_link}}">
                        </div>
                        <div class="form-group">
                            <select class="form-control show-tick" name="media_category_id">
                                <option selected disabled>-- Please select--</option>
                                @foreach($media_cats as $key => $media_cat)
                                    <option value="{{ $media_cat->id }}"> {{ $media_cat->medialist_category_name }} </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="medialist_thumbnail mb-4">
                                <h4 class="hero_thumbnail-title">Set Thumbnail image</h4>
                                <input name="medialist_thumbnail" type="file" value="1"  class="imagecheck-input">
                            </label>
                        </div>
                    </div>
                </div>
            </div>


            <div class="card-action">
                <button class="btn btn-success" type="submit" name="submit">Update Media</button>
            </div>
        </form>
    </div>

@endsection
                
