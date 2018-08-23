@extends("layouts.master")

@section("content")
    <h1 class="h2 pt-3 pb-2">Edit Form: {{ $currentUser->fullName() }}</h1>
    <div class="card">
        <div class="card-header">
            {{ $currentUser->fullName() }}
        </div>
        <div class="card-body">
            <form method="POST" action="/users/{{ $currentUser->id }}" enctype="multipart/form-data">
                {{ csrf_field() }}
                {{ method_field('PATCH') }}
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="firstname">Voornaam:</label>
                        <input type="text" class="form-control" name="firstname" id="firstname" value="{{ $currentUser->firstname }}">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="lastname">Achternaam:</label>
                        <input type="text" class="form-control" name="lastname" id="lastname" value="{{ $currentUser->lastname }}">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-12">
                        <label for="email">E-mail:</label>
                        <input type="text" class="form-control" name="email" id="email" value="{{ $currentUser->email }}">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-4">
                        <label for="phonenumber">Telefoonnummer:</label>
                        <input type="text" class="form-control" name="phonenumber" id="phonenumber" value="{{ $currentUser->phonenumber }}">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="zip">Zip:</label>
                        <input type="text" class="form-control" name="zip" id="zip" value="{{ $currentUser->zip }}">
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-md-4">
                        <label for="avatar">Profielfoto:</label> 
                        <input type="file" class="form-control" name="avatar" id="avatar" value="{{ $currentUser->avatar }}">    
                    </div>
                </div>
                

                <div class="row">
                    <div class="form-group col-md-12">
                        <a class="btn btn-dark" href="{{ route('users.index') }}">
                            <i class="fa fa-chevron-left"></i>
                        </a>
                        <button type="submit" class="btn btn-success">Update</button>
                    </div>
                </div>
            </form>
        </div>

    </div>
@endsection