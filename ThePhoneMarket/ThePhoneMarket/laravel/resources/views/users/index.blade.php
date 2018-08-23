@extends("layouts.master")

@section("content")
    <div class="row pt-3 pb-2">
        <div class="col-sm-8 text-left">
            <h1 class="h2">Gebruikers</h1>
        </div>
        <div class="col-sm-4 text-right">
            <a class="btn btn-primary float-right" href="{{ route('users.create') }}">Toevoegen</a>
        </div>
    </div>
    <table class="table table-hover bg-white">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Naam</th>
            <th scope="col">Created_at</th>
            <th scope="col">Updated_at</th>
            <th scope="col">Action</th>
            <th scope="col">Delete</th>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
            <tr>
                <th scope="row">{{ $user->id }}</th>
                <td>{{ $user->fullName() }}</td>
                <td>{{ $user->created_at->toFormattedDateString() }}</td>
                <td>{{ $user->updated_at->diffForHumans() }}</td>
                <td>
                    <a class="btn btn-dark" href="/users/{{ $user->id }}">
                        <i class="fa fa-eye"></i>
                    </a>
                    <a class="btn btn-info" href="/users/{{ $user->id }}/edit">
                        <i class="fa fa-edit"></i>
                    </a>
                </td>
                <td>
                    <form method="POST" action="/users/{{ $user->id }}">
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
    {{ $users->links() }} <!-- Temporary inline PHP, to be moved to controller eventually -->
@endsection