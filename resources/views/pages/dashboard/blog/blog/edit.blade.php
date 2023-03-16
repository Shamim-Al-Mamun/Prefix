@extends('layouts.admin.app')
@section('content')
    <div class="page-header">
        <h4 class="page-title">Blog Settings</h4>
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
                <a href="{{ route('admin.blog.all') }}">Blog lists</a>
            </li>
            <li class="separator">
                <i class="flaticon-right-arrow"></i>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.blog.edit', $blog->id) }}">Edit Blog</a>
            </li>
        </ul>
    </div>


    <div class="card">
        <form action="{{ route('admin.blog.update', $blog->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card-header d-flex justify-content-between align-items-center">
                <h4 class="card-title">Add Blog</h4>
                <button class="btn btn-success" type="submit" name="submit">Save Header</button>
            </div>

            <div class="card-body">
                <div class="tab-content mt-2 mb-3" id="pills-with-icon-tabContent">
                    <div class="tab-pane fade show active">
                        <div class="row">
                            <div class="col-lg-6">

                                <div class="form-group">
                                    <select class="form-control show-tick" name="blog_categories_id">
                                        <option selected disabled>-- Please select--</option>
                                        @foreach ($blogCategory as $key => $categiry)
                                            <option value="{{ $categiry->id }}"
                                                @if ($blog->blog_categories_id == $categiry->id) selected @endif>
                                                {{ $categiry->topic }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="title">Title</label>
                                    <input type="text" class="form-control" id="title" name="title"
                                        value="{{ $blog->title }}" placeholder="Type here">
                                </div>

                                <div class="form-group">
                                    <label for="text">Text</label>
                                    <textarea type="text" class="form-control" id="text" name="text" placeholder="Type here">{{ $blog->text }}</textarea>
                                </div>

                                {{-- Image --}}
                                <div class="form-group">
                                    <label for="about_section_title_desc">
                                        Image</label>
                                    @if (!empty($blog->img))
                                        <figure class="imagecheck-figure">
                                            <img src="{{ url($blog->img) }}" alt="title" class="imagecheck-image">
                                        </figure>
                                    @else
                                        <figure class="imagecheck-figure">
                                            <img src="{{ asset('storage/img/no-preview.png') }}" alt="#"
                                                class="imagecheck-image">
                                        </figure>
                                    @endif
                                    <input type="file" class="form-control" id="img" name="img">
                                </div>

                            </div>

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
            .create(document.querySelector('#text'))
            .catch(error => {
                console.error(error);
            });
    </script>
@endsection
