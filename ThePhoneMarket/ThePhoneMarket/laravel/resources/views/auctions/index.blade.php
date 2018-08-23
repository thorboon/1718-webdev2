@extends("layouts.master")

@section("content")
    <div class="row pt-3 pb-2">
        <div class="col-sm-8 text-left">
            <h1 class="h2">Veilingen</h1>
        </div>
        <div class="col-sm-4 text-right">
            <a class="btn btn-primary float-right" href="{{ route('auctions.create') }}">Toevoegen</a>
        </div>
    </div>
    <table class="table table-hover bg-white">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Categorie</th>
            <th scope="col">Titel</th>
            <th scope="col">Gebruiker</th>
            <th scope="col">Created_at</th>
            <th scope="col">Updated_at</th>
            <th scope="col">Action</th>
            <th scope="col">Delete</th>
        </tr>
        </thead>
        <tbody>
        @foreach($auctions as $auction)
            <tr>
                <th scope="row">{{ $auction->id }}</th>
                <td>{{ $auction->category->title }}</td>
                <td>{{ $auction->title }}</td>
                <td>{{ $auction->user->fullName() }}</td>
                <td>{{ $auction->created_at->toFormattedDateString() }}</td>
                <td>{{ $auction->updated_at->diffForHumans() }}</td>
                <td>
                    <a class="btn btn-dark" href="/auctions/{{ $auction->id }}">
                        <i class="fa fa-eye"></i>
                    </a>
                    <a class="btn btn-info" href="/auctions/{{ $auction->id }}/edit">
                        <i class="fa fa-edit"></i>
                    </a>
                </td>
                <td>
                    <form method="POST" action="/auctions/{{ $auction->id }}">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}

                        <button type="submit" class="btn btn-danger">
                            <i class="fa fa-trash"></i>
                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {{ $auctions->links() }} <!-- Temporary inline PHP, to be moved to controller eventually -->
@endsection