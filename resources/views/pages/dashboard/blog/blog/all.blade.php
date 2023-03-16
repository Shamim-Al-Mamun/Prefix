@extends('layouts.admin.app')
@section('content')

    <div class="page-header">
        <h4 class="page-title">Blogs</h4>
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
                <a href="{{ route('admin.blog.all') }}"> All blogs</a>
            </li>
        </ul>
    </div>

    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="add-row" class="display table table-striped table-hover">
                        <thead>
                            <tr class="text-center">
                                <th>Title</th>
                                <th>Text</th>
                                <th>Category</th>
                                <th>Thumbnail</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (count($blogs) > 0)
                                @foreach ($blogs as $blog)
                                    <tr class="text-center">
                                        <td>
                                            @if (!empty($blog->title))
                                                {{ $blog->title }}
                                            @endif
                                        <td>
                                            @if (!empty($blog->text))
                                                {!! $blog->text !!}
                                            @endif
                                        </td>
                                        </td>
                                        <td>
                                            @if (!empty($blog->topic))
                                                {{ $blog->topic }}
                                            @endif
                                        </td>
                                        <td>
                                            @if (!empty($blog->img))
                                                <div class="avatar"><img class="avatar-img" src="{{ url($blog->img) }}">
                                                </div>
                                            @endif
                                        </td>
                                        <td>
                                            <div class="button-group">
                                                <a href="{{ route('admin.blog.edit', $blog->id) }}"
                                                    class="btn btn-secondary">Edit</a>
                                                <form action="{{ route('admin.blog.destroy', $blog->id) }}" method="POST">
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
