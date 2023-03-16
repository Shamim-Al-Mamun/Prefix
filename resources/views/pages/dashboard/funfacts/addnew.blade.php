@extends('layouts.admin.app')
@section('content')

    <div class="page-header">
        <h4 class="page-title">FunFacts</h4>
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
                <a href="{{route('admin.funfacts.all')}}">Fun Facts</a>
            </li>
            <li class="separator">
                <i class="flaticon-right-arrow"></i>
            </li>
            <li class="nav-item">
                <a href="{{route('admin.funfacts.addnew')}}">Add New FunFact</a>
            </li>
        </ul>
    </div>

    <div class="card">
        <div class="card-header">
            <div class="card-title">Create FunFact</div>
        </div>
        <form action="{{route('admin.funfacts.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="funfact_countdown">FunFact Number</label>
                            <input type="text" class="form-control" id="funfact_countdown" name="funfact_countdown" value="">
                        </div>
                        <div class="form-group">
                            <label for="funfact_countdown_after">FunFact After Text</label>
                            <input type="text" class="form-control" id="funfact_countdown_after" name="funfact_countdown_after" value="">
                        </div>
                        <div class="form-group">
                            <label for="funfact_desc">Feature Text</label>
                            <input type="text" class="form-control" id="funfact_desc" name="funfact_desc" value="">
                        </div>
                        <div class="form-group">
                            <label class="funfact_thumbnail mb-4">
                                <buttonn class="imagecheck-figure">
                                    <h4 class="hero_thumbnail-title">Set FunFact image</h4>
                                </buttonn>
                                <input name="funfact_thumbnail" type="file" class="imagecheck-input">
                            </label>
                        </div>
                    </div>
                </div>
             </div>
            <div class="card-action">
                <button class="btn btn-success" type="submit" name="submit">Create FunFact</button>
            </div>
        </form>
    </div>
@endsection
                
