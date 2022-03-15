<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title') </title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>

<body>
    <header class="navbar-dark bg-primary">
        <div class="container">
            <nav class="navbar navbar-expand-lg">
                <a class="navbar-brand" href="/">
                    <img src="/img/logo.png" width="50px">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link text-white" href="/">Início</a>
                        </li>

                        <li class="nav-item">
                            <a href="/" class="nav-link text-white">Eventos</a>
                        </li>

                        <li class="nav-item">
                            <a href="/events/create" class="nav-link text-white">Criar Eventos</a>
                        </li>

                        <li class="nav-item">
                            <a href="/" class="nav-link text-white">Entrar</a>
                        </li>

                        <li class="nav-item">
                            <a href="/" class="nav-link text-white">Cadastrar</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>

    @yield('content')

    <footer class="container">
        <hr>
        <p>Minha loja &copy; {{ date('m-Y')}} </p>
    </footer>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>