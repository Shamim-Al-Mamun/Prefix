@extends('layouts.admin.app')
@section('content')

    <div class="page-header">
        <h4 class="page-title">Testimonial</h4>
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
                <a href="{{ route('admin.testimonial.list.all') }}">Testimonial list</a>
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
                                <th>Name</th>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Image</th>
                                <th>Rating</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (count($testimonialList) > 0)
                                @foreach ($testimonialList as $testimonial)
                                    <tr>
                                        <td>
                                            @if (!empty($testimonial->testimonial_name))
                                                {{ $testimonial->testimonial_name }}
                                            @endif
                                        </td>
                                        <td>
                                            @if (!empty($testimonial->testimonial_title))
                                                {{ $testimonial->testimonial_title }}
                                            @endif
                                        </td>
                                        <td>
                                            @if (!empty($testimonial->testimonial_text))
                                                {{ $testimonial->testimonial_text }}
                                            @endif
                                        </td>
                                        <td>
                                            @if (!empty($testimonial->testimonial_img))
                                                <div class="avatar"><img class="avatar-img"
                                                        src="{{ url($testimonial->testimonial_img) }}"></div>
                                            @endif
                                        </td>
                                        <td>
                                            @if (!empty($testimonial->testimonial_rating))
                                                {{ $testimonial->testimonial_rating }}
                                            @endif
                                        </td>
                                        <td>
                                            <div class="button-group">
                                                <a href="{{ route('admin.testimonial.edit', $testimonial->id) }}"
                                                    class="btn btn-secondary">Edit</a>
                                                <form action="{{ route('admin.testimonial.destroy', $testimonial->id) }}"
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
