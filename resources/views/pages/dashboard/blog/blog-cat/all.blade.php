@extends('layouts.admin.app')
@section('content')

    <div class="page-header">
        <h4 class="page-title">Blog setting</h4>
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
                <a href="{{ route('admin.blog.category.all') }}">Blog Categories</a>
            </li>
        </ul>
    </div>

    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="add-row" class="display table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>Thumbnail</th>
                                <th>Topic</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (count($blogCategory) > 0)
                                @foreach ($blogCategory as $Category)
                                    <tr>
                                        <td>
                                            @if (!empty($Category->icon))
                                                <span class="blog-card-badge offer-badge"><i
                                                        class="fa solid {{ $Category->icon }}"></i>
                                                </span>
                                            @endif
                                        </td>
                                        <td>
                                            @if (!empty($Category->topic))
                                                {{ $Category->topic }}
                                            @endif
                                        </td>
                                        <td>
                                            <div class="button-group">
                                                <a href="{{ route('admin.blog.category.edit', $Category->id) }}"
                                                    class="btn btn-secondary">Edit</a>
                                                <form action="{{ route('admin.blog.category.destroy', $Category->id) }}"
                                                    method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <input type="submit" name="submit" value="Delete"
                                                        class="btn btn-danger">
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
