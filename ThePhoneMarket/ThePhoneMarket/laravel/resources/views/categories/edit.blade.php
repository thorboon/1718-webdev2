@extends("layouts.master")

@section("content")
    <h1 class="h2 pt-3 pb-2">Edit Form: {{ $currentCategory->title }}</h1>
    <div class="card">
        <div class="card-header">
            {{ $currentCategory->title }}
        </div>
        <div class="card-body">
            <form method="POST" action="/auctions/{{ $currentCategory->id }}">
                {{ csrf_field() }}
                {{ method_field('PATCH') }}
                <div class="row">
                    <div class="form-group col-md-12">
                        <label for="title">Titel:</label>
                        <input type="text" class="form-control" name="title" id="title" value="{{ $currentCategory->title }}">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-12">
                        <label for="description">Beschrijving:</label>
                        <textarea class="form-control" name="description" id="description">{{ $currentCategory->description }}</textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-12">
                        <a class="btn btn-dark" href="{{ route('categories.index') }}">
                            <i class="fa fa-chevron-left"></i>
                        </a>
                        <button type="submit" class="btn btn-success">Update</button>
                    </div>
                </div>
            </form>
        </div>

    </div>
@endsection