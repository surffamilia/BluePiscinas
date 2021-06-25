@extends('layouts.app-admin')
@section('titulo', 'Produtos')

@section('content')



    



    


<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="btn btn-primary mb-2" aria-current="page" href="#">
              
              Limpeza de Piscinas
            </a>
          </li>
          <li class="nav-item">
            <a class="btn btn-primary mb-2" href="#">
              
              Produtos Vendidos
            </a>
          </li>
          <li class="nav-item">
            <a class="btn btn-primary mb-2" href="#">
             
              Compra de Produtos
            </a>
          </li>
          <li class="nav-item">
            <a class="btn btn-primary mb-2" href="#">
              
              Ganhos Totais
            </a>
          </li>
          
        </ul>

       
    </nav>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Administraçao de Finanças</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group me-2">
            <button type="button" class="btn btn-sm btn-danger">Imprimir</button>
            </div>
          
        </div>
      </div>

      

     
    </main>
  </div>
</div>


    

@endsection