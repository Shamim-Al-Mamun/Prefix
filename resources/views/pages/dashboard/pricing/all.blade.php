@extends('layouts.admin.app')
@section('content')

    <div class="page-header">
        <h4 class="page-title">Pricing</h4>
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
                <a href="{{ route('admin.pricing.all') }}">All Pricing</a>
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
                                <th>Sl</th>
                                <th>Title</th>
                                <th>Desc</th>
                                <th>Price</th>
                                <th>Category</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (count($pricings) > 0)
                                @foreach ($pricings as $pricing)
                                    <tr>
                                        <td>{{ $loop->index + 1 }}</td>
                                        <td>{{ $pricing->pricing_title }}</td>
                                        <td>{!! $pricing->pricing_price_desc !!}</td>
                                        <td>{{ $pricing->pricing_price_amount }}</td>
                                        <td>
                                            @if (!empty($pricing->pricing_category->pricing_category_name))
                                                {{ $pricing->pricing_category->pricing_category_name }}
                                            @endif
                                        </td>
                                        <td>
                                            <div class="button-group">
                                                <a href="{{ route('admin.pricing.edit', $pricing->id) }}"
                                                    class="btn btn-secondary">Edit</a>
                                                <form action="{{ route('admin.pricing.destroy', $pricing->id) }}"
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
