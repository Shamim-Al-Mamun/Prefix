@extends('layouts.admin.app')
@section('content')

    <div class="page-header">
        <h4 class="page-title">Features</h4>
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
                <a href="{{ route('admin.features.all') }}">All Features</a>
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
                                <th>Title</th>
                                <th>Description</th>
                                <th>Icon</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (count($features) > 0)
                                @foreach ($features as $feature)
                                    <tr>
                                        <td>{{ $feature->feature_title }}</td>
                                        <td>{{ Str::limit(strip_tags($feature->feature_text), 40) }}</td>
                                        <td> <i class="fa-solid {{ $feature->feature_icon }}" style='font-size:20px'></i>
                                        </td>
                                        <td>
                                            <div class="button-group">
                                                <a href="{{ route('admin.features.edit', $feature->id) }}"
                                                    class="btn btn-secondary">Edit</a>
                                                <form action="{{ route('admin.features.destroy', $feature->id) }}"
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
