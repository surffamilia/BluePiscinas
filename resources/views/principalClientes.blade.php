
<!doctype html>
<html lang="pt-br">
  <head>
    <title> Blue Piscinas </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">  
    <meta name="author" content="Lucas Agricola">
    <meta name="description" content="Venha agendar a limpeza da sua piscina e tome um banho saudavel">
    <meta name="keywords" content="html5, tecnologia">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    

    <!--Estilos-->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/estilo.css') }}" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="carousel.css" rel="stylesheet">
  </head>
  <body>
    
<header>
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <a class="navbar-brand" href="{{ url('/') }}">
        <img src="../img/logo.png" width="70px" height="40px" class="d-inline-block" alt="Logo Blue Piscinas">
    </a>
    
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>


    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav ml-auto menu">
        @if (Route::has('login'))
        @auth
        <li class="nav-item">
            <a class="nav-link" href="{{ route('bluepiscinas') }}">Area Cliente</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('produto.usuario')}}">Produtos</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('agendar') }}">Agendar Limpeza</a>
        </li>
    @else
        <li class="nav-item">
            <a class="nav-link" href="{{ route('agendar') }}">Agendar Limpeza</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('produto.usuario')}}">Produtos</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('login') }}">Entrar</a>
        </li>
    @if (Route::has('register'))
        <li class="nav-item">
            <a class="nav-link" href="{{ route('register') }}">Cadastrar-me</a>
        </li>
    @endif
    @endauth
    @endif
      </ul>
    </div>
  </nav>
</header>

<main role="main">

  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>      
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="https://audaxco.com/wp-content/uploads/2020/10/CABECALHO-BLOG-3.jpg" alt="">

        <div class="container">
          <div class="carousel-caption text-left ">
            <h1 class="shadow-lg p-3 mb-5 bg-body rounded text-dark" >Agende Sua Limpeza</h1>
          
            <p><a class="btn btn-outline-dark" href="{{ route('agendar') }}">Agendar</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <a href="{{ route('produto.usuario') }}"><img width="100%" src="https://i.ytimg.com/vi/wl0Wmt-n8fI/maxresdefault.jpg" alt="">
        
      </div>      
    </div>
    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>


 <div class="container marketing">

    <!-- Three columns of text below the carousel -->
    <div class="row">
      <div class="col-lg-4">
        <img class="bd-placeholder-img rounded-circle" width="140" height="140" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRXzKeh-3a1n0YhU-RS8o3aTvzCDdmiglDOUA&usqp=CAU" alt="">
        
        <h2>Nome do cliente</h2>
        <p>Comentario</p>
        
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
        <img class="bd-placeholder-img rounded-circle" width="140" height="140" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRXzKeh-3a1n0YhU-RS8o3aTvzCDdmiglDOUA&usqp=CAU" alt="">
        
        <h2>Nome do cliente</h2>
        <p>Comentario</p>
        
      </div>
      <div class="col-lg-4">
        <img class="bd-placeholder-img rounded-circle" width="140" height="140" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRXzKeh-3a1n0YhU-RS8o3aTvzCDdmiglDOUA&usqp=CAU" alt="">
        
        <h2>Nome do cliente</h2>
        <p>Comentario</p>
        
      </div>
    </div><!-- /.row -->


    <!-- START THE FEATURETTES -->

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-6">
        <h2 class="featurette-heading">Questionario<br><span class="text-muted">1°Etapa</span></h2>
        <p class="lead">São feitas perguntas referente a piscina 
            <ul>
                <li>Quantas pessoas usam</li>
                <li>Com qual Frequencia</li>
                <li>Se usam o chuveiro antes de entrar</li>
                
            </ul>    
            
        </p>
      </div>
      <div class="col-md-6">
        <img class="featurette-image img-fluid mx-auto" width="500" height="500" src="https://mundonativodigital.files.wordpress.com/2017/04/questionarios.jpg" alt="">
      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-6 order-md-2">
        <h2 class="featurette-heading">Inicio Tratamento <br> <span class="text-muted">2°Etapa</span></h2>
        <p class="lead">E coletado dados da agua no local para fazer o controle do PH de acordo com os dados </p>
      </div>
      <div class="col-md-6 order-md-1">
        <img class="featurette-image img-fluid mx-auto" width="500" height="500" src=" https://www.mundoagua.com.br/wp-content/uploads/2016/03/tratamento-ph-agua.jpg" alt="">
     
      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-6">
        <h2 class="featurette-heading">Começando a Limpeza <span class="text-muted">3°Etapa</span></h2>
        <p class="lead">Aqui os produtos serão jogados na piscina:
          <ul>
            <li>Em alguns casos tera uma espera de 1 dia para eles fazerem efeito</li>
            <li>Em outros casos a espera podera ser de 1 hora</li>
            <li>Por ultimo sera feito o teste de ph para você tomar o banho Saudavel na sua Piscina</li>
          </ul>

        </p>
      </div>
      <div class="col-md-6">
        <img class="featurette-image img-fluid mx-auto" width="500" height="500" src=" https://www.jornalcontabil.com.br/wp-content/uploads/2019/12/piscina-1.jpg" alt="">
        
      </div>
    </div>

    <hr class="featurette-divider">

    <!-- /END THE FEATURETTES -->

  </div><!-- /.container -->


  <!-- FOOTER -->
  <footer class="container">
    <p class="float-right"><a href="#">Volte ao Inicio</a></p>
    <p>&copy; 2021 Company, LucasDev &middot; </p>
  </footer>
</main>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
      <script>window.jQuery || document.write('<script src="/docs/4.6/assets/js/vendor/jquery.slim.min.js"><\/script>')</script>
      <script src="/docs/4.6/dist/js/bootstrap.bundle.min.js"></script>

      
  </body>
</html>
