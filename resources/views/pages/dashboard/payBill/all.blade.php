@extends('layouts.admin.app')
@section('content')

    <div class="page-header">
        <h4 class="page-title">Pay Bill</h4>
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
                <a href="{{ route('admin.paybill.all') }}">Pay Bill lists</a>
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
                                <th>Options</th>
                                <th>Steps</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (count($payBillOptions) > 0)
                                @foreach ($payBillOptions as $option)
                                    <tr>
                                        <td>
                                            {{ $loop->index + 1 }}
                                        </td>
                                        <td>
                                            @if (!empty($option->option))
                                                {{ $option->option }}
                                            @endif
                                        </td>
                                        <td>
                                            @if (!empty($option->PayBillOptionSteps))
                                                {{ count($option->PayBillOptionSteps) }}
                                            @endif
                                        </td>
                                        <td>
                                            <div class="button-group">
                                                <a href="{{ route('admin.paybill.steps.edit', $option->id) }}"
                                                    class="btn btn-info">Steps
                                                </a>
                                                <a href="{{ route('admin.paybill.edit', $option->id) }}"
                                                    class="btn btn-secondary">Edit
                                                </a>
                                                <form action="{{ route('admin.paybill.destroy', $option->id) }}"
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
