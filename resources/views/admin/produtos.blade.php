@extends('layouts.app-admin')
@section('titulo', 'Produtos')

@section('content')
<div class="container">
  <div class=" py-2 bg-light">
    <div class="container">
      <div class="card-header bg-dark text-white rounded text-center">
        <h2>Produtos Cadastrados para venda</h2>
      </div>
      <div class="row justify-content-end p-3">
       
        <a class="btn btn-outline-primary" href="{{ route('admin.produtos.adicionar') }}" >
          Adicionar Novo Produto
        </a>
      
      </div>
      <div class="row">
        @foreach ($produtos as $produto)
        <div class="col-md-3  py-2 flex-row" >    
          <div class="card border-primary " >
            <div class="card-header row justify-content-center" >                
              <img src="/storage/{{$produto->imagem}}"  style="width: 100px; height: 100px;" alt="...">
            </div>
            <div class="card-body ">
              <h5 class="card-title">{{ $produto->nome }}</h5>
              <p class="card-text">R$ {{ $produto->valor }}</p>
              <p class="card-text">{{ $produto->descricao }}</p>
              <p class="card-text">Ativo ={{ $produto->ativo }}</p>
            </div>
            <div class="card-footer">
              <div class="btn-group btn-block ">
                <a class="btn btn-sm  btn-outline-secondary" href="{{ route('admin.produtos.editar', $produto->id) }}" >
                    Editar
                </a>
                <a class="ml-2 btn btn-sm btn-outline-danger" href="{{ route('admin.produtos.deletar', $produto->id) }}">
                  Apagar
                </a>
                
              </div>
            </div>        
          </div>
        </div>
                  @endforeach
      </div>
    </div>    
  </div>
</div>
@endsection