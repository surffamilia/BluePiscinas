@section('titulo', 'Principal')
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card border border-dark  ">
                <div class="card-header border border-dark   "><h5>Bem vindo ao seu espaço {{ Auth::user()->nome }}</h5></div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="row">
                        <div class="card-deck">
                          <div class="card  border border-dark">
                            <div class="card-body ">
                              <h5 class="card-title">Conheça Nossa Historia</h5>
                              <p class="card-text">Fazemos o tratamento da agua para controle de php</p>
                              <a class="btn btn-outline-dark btn-block" href="{{ route('historia')}}">Ir para Historia</a>
                            </div>
                  
                          </div>
                  
                          <div class="card   border border-dark">
                            <div class="card-body ">
                              <h5 class="card-title">Produtos</h5>
                              <p class="card-text">Conheça nossos Produtos que ajudam a trazer essa junventude para vcs</p>
                              <a class="btn btn-outline-dark btn-block" href="{{ route('produto.usuario')}}">Ir Produtos</a>
                            </div>
                  
                          </div>
                          
                        </div>
                      </div>
                      <div class="row justify-content-center mt-3">
                          <div class="card   border border-dark">
                            <div class="card-body ">
                              <h5 class="card-title">Agendar Limpeza</h5>
                              <p class="card-text">Aqui você agenda visita para limpar sua piscina e tomar um banho Saudavel</p>
                              <a class="btn btn-outline-dark btn-block" href="{{ route('agendar')}}">Agendar Limpeza</a>
                            </div>
                          </div>
                      </div>
                  </div>
            </div>
        </div>
    </div>
</div>
@endsection
