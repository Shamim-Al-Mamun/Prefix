@extends('layouts.admin.app')
@section('content')
<div class="page-header">
    <h4 class="page-title">Dashboard</h4>
    <ul class="breadcrumbs">
        <li class="nav-home">
            <a href="#">
                <i class="flaticon-home"></i>
            </a>
        </li>
        <li class="separator">
            <i class="flaticon-right-arrow"></i>
        </li>
        <li class="nav-item">
            <a href="{{route('admin.dashboard')}}">Dashboard</a>
        </li>
    </ul>
 </div>

 <div class="row">
    <div class="col-md-4">
        <div class="card card-info card-annoucement card-round card-dashboard__inner">
            <div class="card-body text-center">
                <div class="card-opening">Welcome, {{ Auth::user()->name }}</div>
                <div class="card-desc">
                    Hello! Welcome to your awesome website dashboard. You can view edit changed everything from the left side control panel!
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card card-secondary card-annoucement card-round  card-dashboard__inner">
            <div class="card-body text-center">
                <div class="card-opening">Header Settings</div>
                <div class="card-desc">
                    You can upload header logo, Contact information, Buttons & many more from header settings.
                </div>
                <div class="card-detail">
                <a href="{{route('admin.header')}}"> <div class="btn btn-light btn-rounded">Header Settings</div></a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card card-danger card-annoucement card-round  card-dashboard__inner">
            <div class="card-body text-center">
                <div class="card-opening">Footer Settings</div>
                <div class="card-desc">
                   Manage footer page, links, contact infomration & many more from footer settings
                </div>
                <div class="card-detail">
                     <a href="{{route('admin.footer')}}"><div class="btn btn-light btn-rounded">Footer Settings</div></a>
                </div>
            </div>
        </div>
    </div>

 </div>

 
@endsection
                