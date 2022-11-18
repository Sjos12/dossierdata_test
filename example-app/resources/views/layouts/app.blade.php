<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <title>Dossier Data Test</title>
</head>

<body>

    <!-- As a heading -->
    <nav class="navbar bg-dark">
        <div class="container-fluid d-flex justify-content-between ">
            <a href="{{ route('dashboard') }}" class="navbar-brand mb-0 h1 text-light">Dossier Data Test</a>
            <!-- <button class="btn btn-secondary">Login</button> -->
        </div>

    </nav>
    <div class="container my-5">
        @if(\Session::has('message'))
        <div class="alert alert-success" role="alert">
            {{ \Session::get('message') }}
        </div>
        @endisset

        @yield('content')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>