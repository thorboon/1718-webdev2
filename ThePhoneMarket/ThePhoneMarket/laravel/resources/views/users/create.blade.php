@extends("layouts.master")

@section("content")
    <h1 class="h2 pt-3 pb-2">Maak een Gebruiker</h1>
    <div class="card">
        <div class="card-header">
            Maak een Gebruiker
        </div>
        <div class="card-body">
            <form method="POST" action="/users" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputEmail">E-mail</label>
                        <input type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" id="inputEmail">
                        @if ($errors->has('email'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputPassword">Wachtwoord</label>
                        <input type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" id="inputPassword">
                        @if ($errors->has('password'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputFirstName">Voornaam</label>
                        <input type="text" class="form-control{{ $errors->has('firstname') ? ' is-invalid' : '' }}" name="firstname" id="inputFirstName">
                        @if ($errors->has('firstname'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('firstname') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputLastName">Achternaam</label>
                        <input type="text" class="form-control{{ $errors->has('lastname') ? ' is-invalid' : '' }}" name="lastname" id="inputLastName">
                        @if ($errors->has('lastname'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('lastname') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-8">
                        <label for="inputPhoneNumber">Telefoonnummer</label>
                        <input type="tel" class="form-control{{ $errors->has('phonenumber') ? ' is-invalid' : '' }}" name="phonenumber" id="inputPhoneNumber">
                        @if ($errors->has('phonenumber'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('phonenumber') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group col-md-4">
                        <label for="inputZip">Zip</label>
                        <input type="text" class="form-control{{ $errors->has('zip') ? ' is-invalid' : '' }}" name="zip" id="inputZip">
                        @if ($errors->has('zip'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('zip') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-8">
                        <label for="inputAvatar">Avatar</label>
                        <input type="file" class="form-control{{ $errors->has('avatar') ? ' is-invalid' : '' }}" name="avatar" id="inputAvatar">
                        @if ($errors->has('avatar'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('avatar') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group">
                    <a class="btn btn-dark" href="{{ route('users.index') }}">Annuleren</a>
                    <button type="submit" class="btn btn-primary">Toevoegen</button>
                </div>
            </form>
        </div>
    </div>
@endsection