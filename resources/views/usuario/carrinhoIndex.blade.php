@section('titulo', 'Produtos no carrinho')
@extends('layouts.app')

@section('content')
<div class="container">
    <div class=" py-2 bg-light">
        <div class="container">
          <div class="card-header bg-dark text-white rounded text-center">
              <h2>Produtos no carrinho</h2>
          </div>
    <div class="row border-bottom border-primary pt-2">        
            @forelse ($pedidos as $pedido)
            <h5 class="col-6 text-left"> Pedido: {{ $pedido->id }} </h5>
            <h5 class="col-6 text-right "> Criado em: {{ $pedido->created_at->format('d/m/Y H:i') }} </h5>
            
    </div>
    <div class="row">
        <table class="table table-hover ">
            <thead>
              <tr>                
                <th scope="col"></th>
                <th scope="col">Qtd</th>
                <th scope="col">Produto</th>
                <th scope="col">Valor Unit.</th>
                <th scope="col">Total</th>
              </tr>
            </thead>
            <tbody>
                @php
                        $total_pedido = 0;
                    @endphp
                    @foreach ($pedido->pedido_produtos as $pedido_produto)

                    <tr>
                        <td >
                            <img width="100" height="100" src="/storage/{{ $pedido_produto->produto->imagem }}">
                        </td>
                        <td class="align-middle">
                            <div class="center-align">
                                <a class="col-2" href="#" onclick="carrinhoRemoverProduto({{ $pedido->id }}, {{ $pedido_produto->produto_id }}, 1 )">
                                    <i class="fa fa-minus-square-o" style="font-size:20px"></i>
                                </a>
                                <span class="col-2"> {{ $pedido_produto->qtd }} </span>
                                <a class="col-2" href="#" onclick="carrinhoAdicionarProduto({{ $pedido_produto->produto_id }})">
                                    <i class="fa fa-plus-square-o" style="font-size:20px;"></i>
                                </a>
                            </div>
                            <a href="#" onclick="carrinhoRemoverProduto({{ $pedido->id }}, {{ $pedido_produto->produto_id }}, 0)">Remover produto</a>
                        </td>
                        <td class="align-middle"> {{ $pedido_produto->produto->nome }} </td>
                        <td class="align-middle">R$ {{ number_format($pedido_produto->produto->valor, 2, ',', '.') }}</td>
                        
                        @php
                            $total_produto = $pedido_produto->valores;
                            $total_pedido += $total_produto;
                        @endphp
                        <td class="align-middle">R$ {{ number_format($total_produto, 2, ',', '.') }}</td>
                    </tr>  
                    @endforeach            
            </tbody>
          </table>   
    
    
    </div>   

    <div class="row ">
        <div class="col-6 ">
            <strong><h4>Total do pedido: <span>R$ {{ number_format($total_pedido, 2, ',', '.') }}</span> </h4></strong>
        </div>
        <div class="col-3 ">
        <a class="btn btn-outline-primary btn-block  "  href="{{ route('produto.usuario') }}">Continuar comprando</a>
        </div> 
        <div class="col-3 ">
        <form method="POST" action="{{ route('carrinho.concluir') }}">
                        {{ csrf_field() }}
                        <input type="hidden" name="pedido_id" value="{{ $pedido->id }}">
                        <button type="submit" class="btn btn-block btn-outline-success ">
                            Concluir compra
                        </button>   
                    </form>
                </div>
                
    </div>          
            
        @empty
            <h5>Não há nenhum pedido no carrinho</h5>
        @endforelse
    </div>
</div>

<form id="form-remover-produto" method="POST" action="{{ route('carrinho.remover') }}">
    {{ csrf_field() }}
    {{ method_field('DELETE') }}
    <input type="hidden" name="pedido_id">
    <input type="hidden" name="produto_id">
    <input type="hidden" name="item">
</form>
<form id="form-adicionar-produto" method="POST" action="{{ route('carrinho.adicionar') }}">
    {{ csrf_field() }}
    <input type="hidden" name="id">
</form>

@push('scripts')
    <script type="text/javascript" src="{{asset('js/carrinho.js')}}"></script>
@endpush
</div>
@endsection