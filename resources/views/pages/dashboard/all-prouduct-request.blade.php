@extends('layouts.admin.app')
@section('content')

    <div class="page-header">
        <h4 class="page-title">All Product Request</h4>
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
                <a href="{{ route('order.product.all') }}">All Product Order Request</a>
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
                                <th>Product name</th>
                                <th>First name</th>
                                <th>Last name</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>Address</th>
                                {{-- <th>District</th>
                            <th>Upazilla</th> --}}
                                <th>Comment</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (count($order_product_request_all) > 0)
                                @foreach ($order_product_request_all as $product)
                                    <tr>
                                        <td>{{ $loop->index + 1 }}</td>
                                        <td>{{ $product->product_name }}</td>
                                        <td>{{ $product->customer_first_name }}</td>
                                        <td>{{ $product->customer_last_name }}</td>
                                        <td>{{ $product->customer_number }}</td>
                                        <td>{{ $product->customer_email }}</td>
                                        <td>{{ $product->customer_address }}</td>
                                        {{-- <td>{{ $product->customer_district}}</td>
                            <td>{{ $product->customer_upazilla}}</td> --}}
                                        <td>{{ $product->customer_comments }}</td>

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
