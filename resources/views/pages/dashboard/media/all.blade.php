@extends('layouts.admin.app')
@section('content')

    <div class="page-header">
        <h4 class="page-title">All Media</h4>
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
                <a href="{{route('admin.media.all')}}">All Media</a>
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
                            <th>Thumbnail</th>
                            <th>Title</th>
                            <th>Category</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if(count($media_lists)>0)
                        @foreach ($media_lists as $media)
                        <tr>
                            <td>@if (!empty ($media->medialist_thumbnail) ) <div class="avatar"><img  class="avatar-img" src="{{url($media->medialist_thumbnail)}}"></div>@endif</td>
                            <td>@if (!empty ($media->medialist_title) ) {{$media->medialist_title}} @endif</td>
                            <td>{{ $media->media_category->medialist_category_name}}</td>

                            <td>
                                <div class="button-group">
                                   <a href="{{route('admin.media.edit', $media->id)}}" class="btn btn-secondary">Edit</a>
                                   <form action="{{route('admin.media.destroy', $media->id)}}" method="POST">
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
                
