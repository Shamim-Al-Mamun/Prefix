@extends('layouts.admin.app')
@section('content')

    <div class="page-header">
        <h4 class="page-title">Hero Slider</h4>
        <ul class="breadcrumbs">
            <li class="nav-home">
                <a href="{{route('admin.dashboard')}}">
                    <i class="flaticon-home"></i>
                </a>
            </li>
            <li class="separator">
                <i class="flaticon-right-arrow"></i>
            </li>
            <li class="nav-item">
                <a href="{{route('admin.funfacts.all')}}">All FunFacts</a>
            </li>
        </ul>
    </div>



  <div class="col-md-12">
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table id="add-row" class="display table table-striped table-hover" >
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if(count($funfacts)>0)
                        @foreach ($funfacts as $funfact)
                        <tr>
                            <td>{{$funfact->id}}</td>
                            <td>{{$funfact->funfact_title}}</td>
                            <td>{{$funfact->funfact_desc}}</td>
                            <td>
                                <div class="button-group">
                                   <a href="{{route('admin.funfacts.edit', $funfact->id)}}" class="btn btn-secondary">Edit</a>
                                   <form action="{{route('admin.funfacts.destroy', $funfact->id)}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <input type="submit" name="submit" value="Delete" class="btn btn-danger">
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
                
