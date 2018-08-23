@extends("layouts.master")

@section("content")
    <div class="card mt-3 mb-2">
        <h4 class="card-header">
                {{ $currentUser->fullName() }}</h4>
        <div class="card-body">
                {{-- <img src="<// ?php echo asset('storage/avatars/o1EJ77O7GxNl0wXaWFrJrykhtJF5RKnh2Jg3HRM7.jpeg' )?>" style="width:150px; heigth:150px; border-radius:50%;"></img> --}}
                <img src="{{ asset('storage/avatars/'.$currentUser->avatar) }}" style="width:150px; heigth:150px; border-radius:50%;"></img>
        </div>
        
       
        <div class="card-body">
            <h6 class="card-title">Voornaam</h6>
            <p class="card-text">{{ $currentUser->firstname }}</p>
            <h6 class="card-title">Achternaam</h6>
            <p class="card-text">{{ $currentUser->lastname }}</p>
            <h6 class="card-title">E-mail</h6>
            <p class="card-text">{{ $currentUser->email }}</p>
            <h6 class="card-title">Telefoonnummer</h6>
            <p class="card-text">{{ $currentUser->phonenumber }}</p>
            <h6 class="card-title">Zip</h6>
            <p class="card-text">{{ $currentUser->zip }}</p>
        </div>

    </div>
    <a class="btn btn-dark" href="{{ route('users.index') }}">Terug</a>
    <a class="btn btn-success" href="{{ route('users.edit', $currentUser->id) }}">Bewerken</a>
@endsection