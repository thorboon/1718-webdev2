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
    <!-- Custom styles for this template -->
    <link href="/css/main.css" rel="stylesheet">
</head>

<body>
@include("partials.navbar")

<div class="container-fluid">

    <div class="row">
        <main role="main" class="col-md-8 m-auto">
            @yield("content")
        </main>
    </div>

    @include('partials.flash')
</div>


</body>
</html>
