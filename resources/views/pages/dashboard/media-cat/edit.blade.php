@extends('layouts.admin.app')
@section('content')

    <div class="page-header">
        <h4 class="page-title">Edit Category</h4>
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
                <a href="{{route('admin.media-cat.edit', $media_cats->id)}}">Edit Category</a>
            </li>
        </ul>
    </div>



    <div class="card">
        <div class="card-header">
            <div class="card-title">Create New Category</div>
        </div>
        <form action="{{route('admin.media-cat.update', $media_cats->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            
            <div class="card-body">
               <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="medialist_category_name">Category name</label>
                            <input type="text" class="form-control" id="medialist_category_name" name="medialist_category_name" value="{{$media_cats->medialist_category_name}}">
                        </div>
                        <div class="form-group">
                            <label for="medialist_category_slug">Category Slug</label>
                            <input type="text" class="form-control" id="medialist_category_slug" name="medialist_category_slug" value="{{$media_cats->medialist_category_slug}}">
                        </div>
                    </div>
                </div>
            </div>

            <div class="card-action">
                <button class="btn btn-success" type="submit" name="submit">Update Category</button>
            </div>
        </form>
    </div>

@endsection
                
