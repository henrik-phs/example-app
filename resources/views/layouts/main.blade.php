<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title') </title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    <link rel="stylesheet" href="/css/styles.css">

</head>

<body>
    <header class="navbar-dark bg-primary">
        <div class="container">
            <nav class="navbar navbar-expand-lg">
                <a class="navbar-brand" href="/">
                    <img src="/img/logo.png" width="50px">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="/" class="nav-link text-white">Eventos</a>
                        </li>

                        <li class="nav-item">
                            <a href="/events/create" class="nav-link text-white">Criar Eventos</a>
                        </li>

                        @auth
                            <li class="nav-item">
                                <a class="nav-link text-white" href="/dashboard">Meus Eventos</a>
                            </li>

                            <li class="nav-item">
                                <form action="/logout" method="POST">
                                    @csrf
                                    <a class="nav-link text-white" href="/logout"
                                        onclick="event.preventDefault();this.closest('form').submit();">Sair</a>
                                </form>
                            </li>
                        @endauth

                        @guest
                            <li class="nav-item">
                                <a href="/login" class="nav-link text-white">Entrar</a>
                            </li>

                            <li class="nav-item">
                                <a href="/register" class="nav-link text-white">Cadastrar</a>
                            </li>
                        @endguest
                    </ul>
                </div>
            </nav>
        </div>
    </header>

    <main>
        <div class="container-fluid">
            <div class="row">
                @if (session('msg'))
                    <p class="msg">{{ session('msg') }}</p>
                @endif
                @yield('content')
            </div>
        </div>
    </main>

    <footer class="container-fluid">
        <div class="col-md-10 offset-md-1">
            <hr>
            <p>HDC Events &copy; {{ date('Y') }} </p>
        </div>
    </footer>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>
