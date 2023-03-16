@extends('layouts.admin.app')
@section('content')

    <div class="page-header">
        <h4 class="page-title">Pages</h4>
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
                <a href="{{route('admin.page.all')}}">All Pages</a>
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
                            <th>Page Title</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if(count($sitepages)>0)
                        @foreach ($sitepages as $page)
                        <tr>
                            <td>{{$page->id}}</td>
                            <td>{{$page->page_title}}</td>
                            <td>
                                <div class="button-group">
                                   <a href="{{route('admin.page.edit', $page->id)}}" class="btn btn-secondary">Edit</a>
                                   <a href="{{route('page.single', $page->id)}}" class="btn btn-primary">View</a>
                                   <form action="{{route('admin.page.destroy', $page->id)}}" method="POST">
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
                
