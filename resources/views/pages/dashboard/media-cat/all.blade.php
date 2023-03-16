@extends('layouts.admin.app')
@section('content')

    <div class="page-header">
        <h4 class="page-title">All Category</h4>
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
                <a href="{{route('admin.media-cat.all')}}">Media Category</a>
            </li>
        </ul>
    </div>



  <div class="col-md-12">
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table id="add-row" class="display table table-striped table-hover" >
                    <thead>
                        <tr>
                            <th>Category ID</th>
                            <th>Category Name</th>
                            <th>Category Slug</th>
                            <th>Date Created</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if(count($media_cats)>0)
                        @foreach ($media_cats as $media_cat)
                        <tr>
                            <td>	@if (!empty ($media_cat->id) ) {{$media_cat->id}} @endif</td>
                            <td>	@if (!empty ($media_cat->medialist_category_name) ) {{$media_cat->medialist_category_name}} @endif</td>

                            <td>	@if (!empty ($media_cat->medialist_category_slug) ) {{$media_cat->medialist_category_slug}} @endif</td>
                            <td>	@if (!empty ($media_cat->created_at->diffForHumans()) ) {{$media_cat->created_at->diffForHumans()}} @endif</td> 
                            <td>
                                <div class="button-group">
                                   <a href="{{route('admin.media-cat.edit', $media_cat->id)}}" class="btn btn-secondary">Edit</a>
                                   <form action="{{route('admin.media-cat.destroy', $media_cat->id)}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <input type="submit" name="submit" value="Delete" class="btn btn-danger">
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
                
