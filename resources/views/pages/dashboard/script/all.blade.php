@extends('layouts.admin.app')
@section('content')

    <div class="page-header">
        <h4 class="page-title">Scripts setting</h4>
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
                <a href="{{ route('admin.script.all') }}">Scripts lists</a>
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
                                <th>SL</th>
                                <th>Title</th>
                                <th>script</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (count($scripts) > 0)
                                @foreach ($scripts as $script)
                                    <tr>
                                        <td>
                                            {{ $loop->index + 1 }}
                                        </td>
                                        <td>
                                            @if (!empty($script->title))
                                                {{ $script->title }}
                                            @else
                                                N/A
                                            @endif
                                        </td>
                                        <td>
                                            @if (!empty($script->script))
                                                {{ $script->script }}
                                            @endif
                                        </td>

                                        {{-- <td>@if (!empty($product->product_desc)) {{Str::limit(strip_tags($product->product_desc),40)}} @endif</td> --}}
                                        <td>
                                            <div class="button-group">
                                                <a href="{{ route('admin.script.edit', $script->id) }}"
                                                    class="btn btn-secondary">Edit</a>
                                                <form action="{{ route('admin.script.destroy', $script->id) }}"
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
