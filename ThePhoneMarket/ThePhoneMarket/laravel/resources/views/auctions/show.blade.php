@extends("layouts.master")

@section("content")
    <div class="card mt-3 mb-2">
        <div class="card-header">
            <p class="pull-right">Categorie: {{ $currentAuction->category->title }}</p>
            <h4 class="pull-left">{{ $currentAuction->title }}</h4>
        </div>
        <div class="card-body">
            
            <img src="{{ asset('storage/images/'.$currentAuction->image) }}" style="width:150px; heigth:150px;"></img>
    </div>
        <div class="card-body">
            <h6 class="card-title">Beschrijving</h6>
            <p class="card-text">{{ $currentAuction->description }}</p>
            <hr>
            <div class="row">
                <div class="col-sm-4">
                    <h6 class="card-title">Afmetingen</h6>
                    <p class="card-text">{{ $currentAuction->dimensions }}</p>
                </div>
                <div class="col-sm-4">
                    <h6 class="card-title">Prijs</h6>
                    <p class="card-text">€ {{ $currentAuction->price }}</p>
                </div>
                <div class="col-sm-4">
                    <h6 class="card-title">Minimum bod</h6>
                    <p class="card-text">€ {{ $currentAuction->min_bid }}</p>
                </div>
            </div>
        </div>
        <div class="card-footer text-muted">
            Geplaatst door: {{ $currentAuction->user->fullName() }}
        </div>
    </div>
    <a class="btn btn-dark" href="{{ route('auctions.index') }}">
        <i class="fa fa-chevron-left"></i>
    </a>
    <a class="btn btn-success" href="{{ route('auctions.edit', $currentAuction->id) }}">Bewerken</a>
@endsection