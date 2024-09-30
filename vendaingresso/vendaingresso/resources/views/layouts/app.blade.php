<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Venda de Ingressos</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Venda de Ingressos</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarIngressos" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Ingressos
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarIngressos">
                        <a class="dropdown-item" href="{{ route('ingressos.create') }}">Criar</a>
                        <a class="dropdown-item" href="{{ route('ingressos.index') }}">Ver Disponíveis</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarClientes" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Clientes
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarClientes">
                        <a class="dropdown-item" href="{{ route('clientes.create') }}">Criar</a>
                        <a class="dropdown-item" href="{{ route('clientes.index') }}">Ver Clientes Cadastrados</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarEventos" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Eventos
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarEventos">
                        <a class="dropdown-item" href="{{ route('eventos.create') }}">Criar</a>
                        <a class="dropdown-item" href="{{ route('eventos.index') }}">Ver Disponíveis</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('vendas.index') }}">Vendas</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container mt-4">
        @yield('content')
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
