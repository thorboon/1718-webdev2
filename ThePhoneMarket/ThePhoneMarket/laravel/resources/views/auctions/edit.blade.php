@extends("layouts.master")

@section("content")
    <h1 class="h2 pt-3 pb-2">Edit Form: {{ $currentAuction->title }}</h1>
    <div class="card">
        <div class="card-header">
            {{ $currentAuction->title }}
        </div>
        <div class="card-body">
            <form method="POST" action="/auctions/{{ $currentAuction->id }}" enctype="multipart/form-data">
                {{ csrf_field() }}
                {{ method_field('PATCH') }}
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="title">Titel:</label>
                        <input type="text" class="form-control" name="title" id="title" value="{{ $currentAuction->title }}">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="category">Categorie:</label>
                        <select class="form-control" name="category" id="category">
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->title }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-12">
                        <label for="description">Beschrijving:</label>
                        <textarea class="form-control" name="description" id="description">{{ $currentAuction->description }}</textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-4">
                        <label for="dimensions">Afmetingen:</label>
                        <input type="text" class="form-control" name="dimensions" id="dimensions" value="{{ $currentAuction->dimensions }}">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="price">Prijs:</label>
                        <input type="text" class="form-control" name="price" id="price" value="{{ $currentAuction->price }}">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="minBid">Minimum bod:</label>
                        <input type="text" class="form-control" name="min_bid" id="minBid" value="{{ $currentAuction->min_bid }}">
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-md-4">
                        <label for="image">Afbeelding:</label>
                        <input type="file" class="form-control" name="image" id="image" value="{{ $currentAuction->image }}">
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-md-12">
                        <a class="btn btn-dark" href="{{ route('auctions.index') }}">
                            <i class="fa fa-chevron-left"></i>
                        </a>
                        <button type="submit" class="btn btn-success">Update</button>
                    </div>
                </div>
            </form>
        </div>

    </div>
@endsection