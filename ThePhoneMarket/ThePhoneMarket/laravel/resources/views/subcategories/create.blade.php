@extends("layouts.master")

@section("content")
    <h1 class="h2 pt-3 pb-2">Maak een Subcategorie</h1>
    <div class="card">
        <div class="card-header">
            Maak een Subcategorie
        </div>
        <div class="card-body">
            <form method="POST" action="/categories">
                {{ csrf_field() }}
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="title">Titel</label>
                        <input type="text" class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" name="title" id="title">
                        @if ($errors->has('title'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('title') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="category">Categorie</label>
                        <select class="form-control" name="category" id="category">
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->title }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="description">Beschrijving</label>
                        <textarea class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}" name="description" id="description"></textarea>
                        @if ($errors->has('description'))
                                <span class="invalid-feedback">
                                <strong>{{ $errors->first('description') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="form-group">
                    <a class="btn btn-dark" href="{{ route('categories.index') }}">Annuleren</a>
                    <button type="submit" class="btn btn-primary">Toevoegen</button>
                </div>
            </form>
        </div>
    </div>
@endsection