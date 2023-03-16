@extends('layouts.admin.app')
@section('content')

    <div class="page-header">
        <h4 class="page-title">Category</h4>
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
                <a href="{{route('admin.pricing-cat.all')}}">Pricing Category</a>
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
                            <th>Category ID</th>
                            <th>Category Name</th>
                            <th>Category Slug</th>
                            <th>Date Created</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if(count($pricing_cats)>0)
                        @foreach ($pricing_cats as $pricing_cat)
                        <tr>
                            <td>	@if (!empty ($pricing_cat->id) ) {{$pricing_cat->id}} @endif</td>
                            <td>	@if (!empty ($pricing_cat->pricing_category_name) ) {{$pricing_cat->pricing_category_name}} @endif</td>

                            <td>	@if (!empty ($pricing_cat->pricing_category_slug) ) {{$pricing_cat->pricing_category_slug}} @endif</td>
                            <td>	@if (!empty ($pricing_cat->created_at->diffForHumans()) ) {{$pricing_cat->created_at->diffForHumans()}} @endif</td> 
                            <td>
                                <div class="button-group">
                                   <a href="{{route('admin.pricing-cat.edit', $pricing_cat->id)}}" class="btn btn-secondary">Edit</a>
                                   <form action="{{route('admin.pricing-cat.destroy', $pricing_cat->id)}}" method="POST">
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
                
