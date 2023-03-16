@extends('layouts.admin.app')
@section('content')

    <div class="page-header">
        <h4 class="page-title">Hero Slider</h4>
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
                <a href="{{ route('admin.hero.all') }}">Hero Slider</a>
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
                                <th>Thumbnail</th>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (count($heros) > 0)
                                @foreach ($heros as $hero)
                                    <tr>
                                        <td>
                                            @if (!empty($hero->hero_thumbnail))
                                                <div class="avatar">
                                                    <img class="avatar-img" src="{{ url($hero->hero_thumbnail) }}">
                                                </div>
                                            @endif
                                        </td>
                                        <td>
                                            @if (!empty($hero->hero_title))
                                                {{ $hero->hero_title }}
                                            @endif
                                        </td>
                                        <td>
                                            @if (!empty($hero->hero_title))
                                                {{ Str::limit(strip_tags($hero->hero_text), 40) }}
                                            @endif
                                        </td>
                                        <td>
                                            <div class="button-group">
                                                <a href="{{ route('admin.hero.edit', $hero->id) }}"
                                                    class="btn btn-secondary">Edit</a>
                                                <form action="{{ route('admin.hero.destroy', $hero->id) }}" method="POST">
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
