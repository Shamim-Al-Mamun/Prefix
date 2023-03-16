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
                <a href="{{ route('admin.clients.all') }}">Clients</a>
            </li>
            <li class="separator">
                <i class="flaticon-right-arrow"></i>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.clients.edit', $client->id) }}">Edit Client</a>
            </li>
        </ul>
    </div>

    <form action="{{ route('admin.clients.update', $client->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h4 class="card-title">Edit Client</h4>
                <button class="btn btn-success" type="submit" name="submit">Save Header</button>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="funfact_desc">Title</label>
                            {{-- <input type="text" class="form-control" id="funfact_desc" name="funfact_desc" value="{{$funfacts->funfact_desc}}"> --}}
                            <input type="text" class="form-control" id="client_desc" name="title"
                                placeholder="Type here" value="{{ $client->title }}">
                        </div>

                        @if (!empty($client->client_logo))
                            <figure class="imagecheck-figure">
                                <img src="{{ url($client->client_logo) }}" alt="#" class="imagecheck-image">
                            </figure>
                        @else
                            <figure class="imagecheck-figure">
                                <img src="{{ asset('storage/img/no-preview.png') }}" alt="#"
                                    class="imagecheck-image">
                            </figure>
                        @endif
                    </div>

                    <div class="form-group">
                        <label class="hero_thumbnail mb-1">
                            <h4 class="bg-light p-2 border rounded fw-bold">upload image</h4>
                            <input name="client_logo" type="file" value="1" class="imagecheck-input">
                        </label>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-action">
            <button class="btn btn-success" type="submit" name="submit">Update Client</button>
        </div>
        </div>
    </form>
@endsection
