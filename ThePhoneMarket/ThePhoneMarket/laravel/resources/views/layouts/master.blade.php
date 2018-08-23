<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>{{ config("app.name") . ' - ' . 'Dashboard' }}</title>

    <!-- Bootstrap CDN-->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome CDN -->
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="/css/main.css" rel="stylesheet">

</head>

<body>
@include("partials.navbar")

<div class="container-fluid">
    <div class="row">
        @include("partials.sidebar")

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
            @yield("content")
        </main>
    </div>

    @include('partials.flash')
</div>


</body>
</html>
