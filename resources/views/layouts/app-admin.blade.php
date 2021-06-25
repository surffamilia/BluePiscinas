<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Lucas Moraes Dutra Agricola">
    <meta name="description" content="Limpeza de piscinas e banho saudavel">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Blue Piscinas - @yield('titulo')</title>


    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/script.js') }}" ></script>
    <script src="{{ asset('js/calender.js') }}" ></script>
    
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.6.0/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.6.0/locales-all.js"></script>
    
    <!-- Fonts -->
    <link href="//fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/estilo.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@5.6.0/main.css">
    <link href="{{ asset('css/calendar.css') }}" rel="stylesheet">

</head>
<body>
    <div id="app">
        <nav class="navbar navbar-dark navbar-expand-md shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{asset('img/logo.png')}}" width="70px" height="40px" class="d-inline-block" alt="Logo Blue Piscinas">
                    
                  </a>
                <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto ">

                    </ul>

                    <ul class="navbar-nav ml-auto">
                        @guest('admin')
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login.admin') }}">Entrar</a>
                            </li>
                            
                        @else
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('admin.principal') }}">Pagina Inicial</a>                                
                        </li>
                        
                        <li class="nav-item  dropdown">
                            <a class="nav-link dropdown-toggle " data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Produtos</a>
                            <div class="dropdown-menu cardDiv">
                                <a class="dropdown-item text-light bg-dark" href="{{route('estoque')}}">Estoque</a>
                                <a class="dropdown-item text-light bg-dark" href="{{route('admin.produtos.adicionar')}}">Cadastrar Produto</a>
                                <a class="dropdown-item text-light bg-dark" href="{{route('admin.produtos')}}">Visualizar Produtos a venda</a>
                            
                            </div>                              
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('agenda') }}">Agenda</a>                                
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle " data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Controle</a>
                            <div class="dropdown-menu cardDiv">
                              <a class="dropdown-item text-light bg-dark" href="{{ route('controle.usuarios') }}">Usuarios</a>
                              <a class="dropdown-item text-light bg-dark" href="{{ route('controle.admin')}}">Administradores</a>
                            </div>
                          </li>
           
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->nome }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu cardDiv dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item text-light bg-dark" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
