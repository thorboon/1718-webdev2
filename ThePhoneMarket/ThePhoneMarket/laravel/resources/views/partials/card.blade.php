<div class="col-sm-4">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Totaal aantal {{ $card_title }}</h5>
            <p class="card-text">
                @if($card_title == 'veilingen')
                    {{ App\Auction::count() }}
                @elseif($card_title == 'categoriën')
                    {{ App\Category::count() }}
                @else
                    {{ App\User::count() }}
                @endif
            </p>
        </div>
    </div>
</div>
