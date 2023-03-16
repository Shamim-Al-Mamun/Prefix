@extends('layouts.admin.app')
@section('content')

    <div class="page-header">
        <h4 class="page-title">Clients</h4>
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
                <a href="{{ route('admin.clients.all') }}">All Clients</a>
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
                                <th>title</th>
                                <th>Logo</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (count($clients) > 0)
                                @foreach ($clients as $Client)
                                    <tr>
                                        <td>{{ $Client->title }}</td>
                                        <td>
                                            @if (!empty($Client->client_logo))
                                                {{-- <figure class="imagecheck-figure">
                                                    <img src="{{ url($Client->client_logo) }}" alt="title"
                                                        class="imagecheck-image">
                                                </figure> --}}
                                                <div class="avatar">
                                                    <img class="avatar-img" src="{{ url($Client->client_logo) }}">
                                                </div>
                                            @endif
                                        </td>
                                        <td>
                                            <div class="button-group">
                                                <a href="{{ route('admin.clients.edit', $Client->id) }}"
                                                    class="btn btn-secondary">Edit</a>
                                                <form action="{{ route('admin.clients.destroy', $Client->id) }}"
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
