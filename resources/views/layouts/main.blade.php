<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- BOOSTRAP --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    {{-- FONTES DO GOOGLE --}}

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    {{-- CSS E JS DA APLICAÇÃO --}}
    <link rel="stylesheet" href="/css/styles.css">
    <script src="/js/script.js"></script>


    <title>@yield('title')</title>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="collapse navbar-collapse d-flex justify-content-center" id="navbar">
                <a href="/" class="navbar-brand d-flex justify-content-start">
                    <img src="/img/logoarch.png" alt="">
                </a>
                <ul class="navbar-nav">
                    <li class="nav-item m-2">
                        <a href="/" class="nav-link bg-danger rounded text-light fw-bold">Eventos</a>
                    </li>
                    <li class="nav-item m-2">
                        <a href="/events/create" class="nav-link bg-primary rounded text-light fw-bold">Criar Eventos</a>
                    </li>
                    <li class="nav-item m-2">
                        <a href="/" class="nav-link bg-success rounded text-light fw-bold">Entrar</a>
                    </li>
                    <li class="nav-item m-2">
                        <a href="/" class="nav-link bg-warning rounded text-light fw-bold">Cadastrar</a>
                    </li>
                    
                </ul>
            </div>
        </nav>
    </header>
    <div class="container">
        @yield('content')
    
        <footer>
            <p>Dourado Dev &copy; 2025</p>
        </footer>

    </div>

    {{-- SCRIPT DO BOOSTRAP  --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>