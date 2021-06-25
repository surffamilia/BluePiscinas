@section('titulo', 'Detalhes Produtos')
@extends('layouts.app')

@section('content')
<div class="container">
    <div class=" py-2 bg-light">
        <div class="container">
          <div class="card-header bg-dark text-white rounded text-center">
              <h2>Informações do Detalhadas</h2>
          </div>
        <div class="row pb-3">
            <div class="col-md-6 ">
                <img class="rounded mx-auto d-block" src="/storage/{{ $registro->imagem }}"  style="width: 200px; height: 200px;" alt="...">
            </div>
            <div class="col-md-6 pt-5 ">
                <h5 class="card-title ">{{ $registro->nome }}</h5>
                <h5 class="card-text"> R$ {{ number_format($registro->valor, 2, ',', '.') }} </h5>
                <p class="card-text text-xl">{!! $registro->descricao !!}</p>
            </div>
        </div>
            <form method="POST" action="{{ route('carrinho.adicionar') }}">
                
            <div class="form-group row">
                <label class="col-md-6 col-form-label text-md-right" for="formaPagamento">Forma de Pagamento</label>
                <div class="col-md-6">
                  <input name="formaPagamento" type="radio" id="formaPagamento-d" value="Dinheiro"  required="required" />
                  <label for="formaPagamento-d">Dinheiro</label>
                  <input name="formaPagamento" type="radio" id="formaPagamento-c" value="Cartao"  required="required"  />
                  <label for="formaPagamento-c">Cartão</label>
                </div>
              </div>
        </div>
            <div class="row ">
                <div class="col-md-12">
                    
                        {{ csrf_field() }}
                        <input type="hidden" name="id" value="{{ $registro->id }}">
                        <button class="offset-2 col-8  btn-lg btn btn-outline-success" >Comprar</button>   
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection