@extends('layouts.admin.app')
@section('content')

    <div class="page-header">
        <h4 class="page-title">Products</h4>
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
                <a href="{{route('admin.product.all')}}">Products lists</a>
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
                            <th>Thumbnail</th>
                            <th>Title</th>
                            <th>Price</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if(count($products)>0)
                        @foreach ($products as $product)
                        <tr>
                            <td>@if (!empty ($product->product_thumbnail) ) <div class="avatar"><img  class="avatar-img" src="{{url($product->product_thumbnail)}}"></div>@endif</td>
                            <td>	@if (!empty ($product->product_title) ) {{$product->product_title}} @endif</td>
                            <td>	@if (!empty ($product->product_price) ) {{$product->product_price}} @endif</td>
                            {{-- <td>@if (!empty ($product->product_desc) ) {{Str::limit(strip_tags($product->product_desc),40)}} @endif</td> --}}
                            <td>
                                <div class="button-group">
                                   <a href="{{route('admin.product.edit', $product->id)}}" class="btn btn-secondary">Edit</a>
                                   <form action="{{route('admin.product.destroy', $product->id)}}" method="POST">
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

