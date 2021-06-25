@extends('layouts.app-admin')
@section('titulo', 'Pagina Inicial')

@section('content')

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card  border border-dark">
                <div class="card-header border border-dark text-dark "><h5>Bem vindo {{ Auth::user()->nome }} </h5></div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="row">
                        <div class="card-deck ">
                          <div class="card  border border-dark">
                            <div class="card-body text-dark">
                              <h5 class="card-title ">Controle de Usuarios</h5>
                              <p class="card-text ">Aqui você poderá Visualizar os usuarios Cadastrados e Criar, Editar, Deletar Administradores </p>
                              <a class="btn btn-outline-dark mt-2" href="{{ route('controle.usuarios') }}">Ir para Usuarios</a>
                              <a class="btn btn-outline-dark mt-2" href="{{ route('controle.admin')}}">Ir para Administradores</a>
                            </div>
                  
                          </div>
                  
                          <div class="card  border border-dark">
                            <div class="card-body text-dark">
                              <h5 class="card-title">Agenda Clientes</h5>
                              <p class="card-text">Aqui você poderá ver seus clientes Agendados para Limpeza de piscinas e as vendas realizadas prontas para entrega</p>
                              <a class="btn btn-outline-dark mt-2" href="{{ route('agenda')}}">Agenda Limpeza Piscina</a>
                              <a class="btn btn-outline-dark mt-2" href="{{ route('produtos.vendidos')}}">Produtos Vendidos</a>
                            </div>
                  
                          </div>
                          
                        </div>
                      </div>

                      <div class="row mt-2">
                        <div class="card-deck">
                          <div class="card  border border-dark">
                            <div class="card-body text-dark">
                              <h5 class="card-title">Ganhos</h5>
                              <p class="card-text">Aqui você poderá Visualizar os ganhos</p>
                              <a class="btn btn-outline-dark btn-block" href="{{route('admin.ganhos')}}">Ir para Ganhos</a>
                            </div>
                  
                          </div>
                  
                          <div class="card  border border-dark">
                            <div class="card-body text-dark">
                              <h5 class="card-title">Controle de Produtos</h5>
                              <p class="card-text">Aqui você poderá fazer o controle do seus produtos no estoque e na plataforma cliente</p>
                              <a class="btn btn-outline-dark mt-2" href="{{ route('admin.produtos')}}">Ir para Produtos</a>
                              <a class="btn btn-outline-dark mt-2" href="{{ route('estoque')}}">Ir para Estoque</a>
                            </div>
                  
                          </div>
                          
                        </div>
                      </div>
                  
                </div>
            </div>
        </div>
   </div>
@endsection
