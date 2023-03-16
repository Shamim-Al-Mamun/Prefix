@extends('layouts.admin.app')
@section('content')

    <div class="page-header">
        <h4 class="page-title">All Order Request</h4>
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
                <a href="{{ route('customer.order.all') }}">All Package Order Request</a>
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
                                <th>Package</th>
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
                            @if (count($order_request_all) > 0)
                                @foreach ($order_request_all as $order)
                                    <tr>
                                        <td>{{ $loop->index + 1 }}</td>
                                        <td>{{ $order->package_name }}</td>
                                        <td>{{ $order->customer_first_name }}</td>
                                        <td>{{ $order->customer_last_name }}</td>
                                        <td>{{ $order->customer_number }}</td>
                                        <td>{{ $order->customer_email }}</td>
                                        <td>{{ $order->customer_address }}</td>
                                        {{-- <td>{{ $order->customer_district}}</td>
                            <td>{{ $order->customer_upazilla}}</td> --}}
                                        <td>{{ $order->customer_comments }}</td>

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
