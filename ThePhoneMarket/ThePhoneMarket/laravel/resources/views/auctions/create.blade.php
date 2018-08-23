@extends("layouts.master")

@section("content")
    <h1 class="h2 pt-3 pb-2">Maak een Veiling</h1>
    <div class="card">
        <div class="card-header">
            Maak een Veiling
        </div>
        <div class="card-body">
            <form method="POST" action="/auctions" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputTitle">Titel</label>
                        <input type="text" class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" name="title" id="inputTitle">
                        @if ($errors->has('title'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('title') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group col-md-3">
                        <label for="category">Categorie</label>
                        <select class="form-control" name="category" id="category">
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->title }}</option>
                            @endforeach
                        </select>
                    </div>
                    
                </div>
                <div class="form-row">
                    
                    <div class="form-group col-md-3">
                        <label for="status">Staat</label>
                        <select class="form-control" name="status" id="status">
                            <option>Nieuw</option>
                            <option>Oud</option>
                            <option>Tweedehands</option>
                        </select>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="inputPrice">Prijs</label>
                        <input class="form-control{{ $errors->has('price') ? ' is-invalid' : '' }}" name="price" id="inputPrice">
                        @if ($errors->has('price'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('price') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group col-md-3">
                        <label for="inputMinBid">Min. bod</label>
                        <input class="form-control{{ $errors->has('min_bid') ? ' is-invalid' : '' }}" name="min_bid" id="inputMinBid">
                        @if ($errors->has('min_bid'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('min_bid') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputDescription">Beschrijving</label>
                        <textarea rows="5" class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}" name="description" id="inputDescription"></textarea>
                        @if ($errors->has('description'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('description') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group col-md-3">
                        <label for="timer">Timer</label>
                        <input type="time" id="timer" class="form-control">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="shipment">Verzending</label>
                        <select class="form-control" name="shipment" id="shipment">
                            <option>BPOST</option>
                            <option>DHL</option>
                            <option>Ophaalpunt</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <a class="btn btn-dark" href="{{ route('auctions.index') }}">Annuleren</a>
                    <button type="submit" class="btn btn-primary">Toevoegen</button>
                </div>
            </form>
        </div>
    </div>
@endsection