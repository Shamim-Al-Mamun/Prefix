@extends('layouts.admin.app')
@section('content')

    <div class="page-header">
        <h4 class="page-title">All Messages</h4>
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
                <a href="{{ route('messages.all') }}">All User Messages</a>
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
                                <th>First name</th>
                                <th>Last name</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>Comments</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (count($messages_all) > 0)
                                @foreach ($messages_all as $comment)
                                    <tr>
                                        <td>{{ $comment->customer_first_name }}</td>
                                        <td>{{ $comment->customer_last_name }}</td>
                                        <td>{{ $comment->customer_number }}</td>
                                        <td>{{ $comment->customer_email }}</td>
                                        <td>{{ $comment->customer_comments }}</td>

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
