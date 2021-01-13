<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- CSRF Token --}}
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/back.css') }}">
    <title>@yield('title')</title>
</head>

<body class="bg-dark text-white">
    <div class="container">
        <div class="text-center">
            <main class="form-signin">
                <img class="mb-4" src="{{ asset('storage/logoZOOFT.svg') }}" alt="Logo Zooft" title="Logo Zooft"
                    width="150">                

                <form method="POST" action="{{ route('iniciarSesion') }}">
                    {{ csrf_field() }}

                    <input type="email" id="email" name="email" class="form-control" placeholder="Correo electrónico" required
                        autofocus>
                    <input type="password" id="password" name="password" class="form-control" placeholder="Contraseña" required>

                    <button class="w-100 btn btn-lg btn-primary" type="submit">Iniciar sesión</button>
                    <p class="mt-5 mb-3 text-muted">COPYRIGHT&copy; 2020</p>
                </form>
            </main>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous">
    </script>
</body>

</html>