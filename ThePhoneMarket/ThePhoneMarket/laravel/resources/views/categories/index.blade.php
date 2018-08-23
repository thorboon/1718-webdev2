@extends("layouts.master")

@section("content")
    <div class="row col-s pt-3 pb-2">
        <div class="col-sm-8 text-left">
            <h1 class="h2">Categorieën</h1>
        </div>
        <div class="col-sm-4 text-right">
            <a class="btn btn-primary float-right" href="{{ route('categories.create') }}">Toevoegen</a>
        </div>
    </div>
    <table class="table table-hover bg-white">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Titel</th>
                <th scope="col">Created_at</th>
                <th scope="col">Updated_at</th>
                <th scope="col">Actions</th>
                <th scope="col">Delete</th>
            </tr>
        </thead>
        <tbody>
        @foreach($categories as $category)
            <tr>
                <th scope="row">{{ $category->id }}</th>
                <td>{{ $category->title }}</td>
                <td>{{ $category->created_at->toFormattedDateString() }}</td>
                <td>{{ $category->updated_at->diffForHumans() }}</td>
                <td>
                    <a class="btn btn-dark" href="/categories/{{ $category->id }}">
                        <i class="fa fa-eye"></i>
                    </a>
                    <a class="btn btn-info" href="/categories/{{ $category->id }}/edit">
                        <i class="fa fa-edit"></i>
                    </a>
                </td>
                <td>
                    <form method="POST" action="/categories/{{ $category->id }}">
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

    <div class="row col-s pt-3 pb-2">
        <div class="col-sm-8 text-left">
            <h1 class="h2">Subcategorieën</h1>
        </div>
        <div class="col-sm-4 text-right">
            <a class="btn btn-primary float-right" href="{{ route('subcategories.create') }}">Toevoegen</a>
        </div>
    </div>
    <table class="table table-hover bg-white">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Titel</th>
                <th scope="col">Created_at</th>
                <th scope="col">Updated_at</th>
                <th scope="col">Actions</th>
                <th scope="col">Delete</th>
            </tr>
        </thead>
        <tbody>
        @foreach($subcategories as $subcategory)
            <tr>
                <th scope="row">{{ $subcategory->id }}</th>
                <td>{{ $subcategory->title }}</td>
                <td>{{ $subcategory->created_at->toFormattedDateString() }}</td>
                <td>{{ $subcategory->updated_at->diffForHumans() }}</td>
                <td>
                    <a class="btn btn-dark" href="/subcategories/{{ $subcategory->id }}">
                        <i class="fa fa-eye"></i>
                    </a>
                    <a class="btn btn-info" href="/subcategories/{{ $subcategory->id }}/edit">
                        <i class="fa fa-edit"></i>
                    </a>
                </td>
                <td>
                    <form method="POST" action="/subcategories/{{ $subcategory->id }}">
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
@endsection