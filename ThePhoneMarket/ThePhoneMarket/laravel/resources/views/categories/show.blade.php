@extends("layouts.master")

@section("content")
    <div class="card mt-3 mb-2">
        <div class="card-header">
            <h4 class="pull-left">{{ $currentCategory->title }}</h4>
        </div>

        <div class="card-body">
            <h6 class="card-title">Beschrijving</h6>
            <p class="card-text">{{ $currentCategory->description }}</p>
            <hr>
        </div>
    </div>
    <a class="btn btn-dark" href="{{ route('categories.index') }}">
        <i class="fa fa-chevron-left"></i>
    </a>
    <a class="btn btn-success" href="{{ route('categories.edit', $currentCategory->id) }}">Bewerken</a>
@endsection