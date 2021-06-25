@extends('layouts.app-admin')
@section('titulo', 'Cadastrar Admin')
@section('content')
<div class="container">
  <div class="row justify-content-center">
      <div class="col-md-8">
          <div class="card ">
              <div class="card-header">Cadastrar Novo Administrador</div>

              <div class="card-body">
                  <form method="POST" action="{{ route('cadastrar.admin.salvar') }}">
                      @csrf

                      <div class="form-group row">
                          <label for="nome" class="col-md-4 col-form-label text-md-right">Nome</label>

                          <div class="col-md-6">
                              <input id="nome" type="text" class="form-control"  name="nome" required autofocus>                             
                          </div>
                      </div>
                      <div class="form-group row">
                        <label for="funcao" class="col-md-4 col-form-label text-md-right">Função</label>

                        <div class="col-md-6">
                            <input id="funcao" type="text" class="form-control "  name="funcao"  required>
                        </div>
                    </div>

                      <div class="form-group row">
                          <label for="email" class="col-md-4 col-form-label text-md-right">Email</label>

                          <div class="col-md-6">
                              <input id="email" type="email" class="form-control" name="email"  required>
                          </div>
                      </div>

                      <div class="form-group row">
                          <label for="password" class="col-md-4 col-form-label text-md-right">Senha</label>

                          <div class="col-md-6">
                              <input id="password" type="password" class="form-control " name="password" required >                              
                          </div>
                      </div>

                      <div class="form-group row">
                          <label for="password-confirm" class="col-md-4 col-form-label text-md-right">Confirmar Senha</label>

                          <div class="col-md-6">
                              <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                          </div>
                      </div>

                      <div class="form-group row mb-0">
                          
                              <button type="submit" class="btn btn-outline-primary col-md-3 offset-md-4 " style="margin-right: 5px; margin-bottom:5px" >
                                  Salvar
                              </button>
                              <a href="{{route('controle.admin')}}"  class="btn btn-outline-danger col-md-3" style="margin-right:5px; margin-bottom:5px" >
                                Voltar
                            </a>
                          
                      </div>
                  </form>
              </div>
          </div>
      </div>
  </div>
</div>
@endsection