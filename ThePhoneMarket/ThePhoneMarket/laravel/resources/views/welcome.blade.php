@extends ('layouts.master');

@section("content")
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Dashboard</h1>
    </div>
    <div class="row">
        @include("partials.card", array('card_title' => 'veilingen'))
        @include("partials.card", array('card_title' => 'gebruikers'))
        @include("partials.card", array('card_title' => 'categoriën'))
    </div>
@endsection