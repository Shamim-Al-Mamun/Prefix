@extends('layouts.admin.app')
@section('content')

    <div class="page-header">
        <h4 class="page-title">Coverage Area</h4>
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
                <a href="{{ route('admin.coverage.area') }}">Coverage area lists</a>
            </li>
        </ul>
    </div>

    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="add-row" class="display table table-striped table-hover ">
                        <thead>
                            <tr>
                                <th>City</th>
                                <th>District</th>
                                <th>Map</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (count($coverageArea) > 0)
                                @foreach ($coverageArea as $area)
                                    <tr>
                                        <td>
                                            @if (!empty($area->city))
                                                {{ $area->city }}
                                            @endif
                                        </td>
                                        <td>
                                            @if (!empty($area->district))
                                                {{ $area->district }}
                                            @endif
                                        </td>
                                        <td>
                                            @if (!empty($area->maps_iframe_code))
                                                {{ substr($area->maps_iframe_code, 0, 100) . '....' }}
                                            @endif
                                        </td>
                                        <td>
                                            <div class="button-group">
                                                <a href="{{ route('admin.coverage.area.edit', $area->id) }}"
                                                    class="btn btn-secondary">Edit</a>
                                                <form action="{{ route('admin.coverage.area.destroy', $area->id) }}"
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
