@extends('layouts.app-admin')
@section('titulo', 'Editar Produto')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-10">
      <div class=" py-2 bg-light"> 
        <div class="container">
          <div class="card-header bg-dark text-white rounded text-center">
            <h2>Editando produto "{{ $registro->nome }}"</h2>
          </div>
          <div class="card-body">    
            <form method="POST" action="{{ route('admin.produtos.atualizar', $registro->id) }}">
            {{ csrf_field() }}
            {{ method_field('PUT') }}

            <div class="form-group row">
              <label class="col-md-2 col-form-label text-md-right" for="nome">Nome</label>
              <div class="col-md-10">
                <input class="form-control" type="text" name="nome" id="nome" value="{{ isset($registro->nome) ? $registro->nome : null }}">
              </div>
            </div>
            <div class="form-group row">
              <label class="col-md-2 col-form-label text-md-right" for="descricao">Descrição</label>
              <div class="col-md-10">
                <textarea class="form-control" id="descricao" name="descricao" rows="3">{{ isset($registro->descricao) ? $registro->descricao : null }}</textarea>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-md-2 col-form-label text-md-right" for="valor">Valor</label>
              <div class="col-md-10">
                <input class="form-control" type="text" name="valor" id="valor" value="{{ isset($registro->valor) ? $registro->valor : null }}">
              </div>
            </div>
           
            <div class="form-group row">
              <label class="col-md-2 col-form-label text-md-right" for="ativo">Ativo Pra vender</label>
              <div class="col-md-10">
                <input name="ativo" type="radio" id="ativo-s" value="S" {{ isset($registro->ativo) && $registro->ativo == 'S' ? ' checked="checked"' : null }} required="required" />
                <label for="ativo-s">Sim</label>
                <input name="ativo" type="radio" id="ativo-n" value="N" {{ isset($registro->ativo) && $registro->ativo == 'N' ? ' checked="checked"' : null }} required="required"  />
                <label for="ativo-n">Não</label>
              </div>
            </div>
            <div class="form-group row">
              <button type="submit" class="col-md-6 offset-md-2 btn btn-primary my-2">Salvar</button>
          </form>
            <a class="col-md-3 ml-3 btn btn-secondary my-2" href="{{ route('admin.produtos')}}">Voltar</a>
            </div>
        </div>
      </div>
    </div>
  </div>
 </div>
</div>

@endsection