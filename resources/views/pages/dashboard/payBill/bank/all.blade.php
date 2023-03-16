@extends('layouts.admin.app')
@section('content')

    <div class="page-header">
        <h4 class="page-title">Pay bill</h4>
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
                <a href="{{ route('admin.paybill.bank.all') }}">All banks</a>
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
                                <th>Text</th>
                                <th>Img</th>
                                <th>Account_name</th>
                                <th>Account_no</th>
                                <th>Routing_no</th>
                                <th>Branch</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (count($banks) > 0)
                                @foreach ($banks as $bank)
                                    <tr>
                                        <td>
                                            @if (!empty($bank->title))
                                                {{ $bank->title }}
                                            @endif
                                        </td>
                                        <td>
                                            @if (!empty($bank->text))
                                                {{ $bank->text }}
                                            @endif
                                        </td>
                                        <td>
                                            @if (!empty($bank->img))
                                                <div class="avatar"><img class="avatar-img" src="{{ url($bank->img) }}">
                                                </div>
                                            @endif
                                        </td>
                                        <td>
                                            @if (!empty($bank->account_name))
                                                {{ $bank->account_name }}
                                            @endif
                                        </td>
                                        <td>
                                            @if (!empty($bank->account_no))
                                                {{ $bank->account_no }}
                                            @endif
                                        </td>
                                        <td>
                                            @if (!empty($bank->routing_no))
                                                {{ $bank->routing_no }}
                                            @endif
                                        </td>
                                        <td>
                                            @if (!empty($bank->branch))
                                                {{ $bank->branch }}
                                            @endif
                                        </td>

                                        <td>
                                            <div class="button-group">
                                                <a href="{{ route('admin.paybill.bank.edit', $bank->id) }}"
                                                    class="btn btn-secondary">Edit</a>
                                                <form action="{{ route('admin.paybill.bank.destroy', $bank->id) }}"
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
