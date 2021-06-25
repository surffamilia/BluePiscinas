@section('titulo', 'Minhas Compras')
@extends('layouts.app')

@section('content')
<div class="container">
    <div class=" py-2 bg-light">
        <div class="container">
          <div class="card-header bg-dark text-white rounded text-center">
              <h2>Minhas Compras</h2>
          </div>
    <div class="row">
        <div class="col-12">
            <div class="card-header bg-dark text-white rounded text-center">
                <h2>Compras concluídas</h2>
            </div>

            @forelse ($compras as $pedido)
            <div class="row border-bottom">
                <h5 class="col-6 text-left"> Pedido: {{ $pedido->id }} </h5>
                <h5 class="col-6 text-right "> Criado em: {{ $pedido->created_at->format('d/m/Y H:i') }} </h5>
            </div>               
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th colspan="1"></th>
                                <th>Produto</th>
                                <th>Valor</th>
                                <th>Total</th>
                            </tr>
                        </thead>
                        <tbody>
                        @php
                            $total_pedido = 0;
                        @endphp
                        @foreach ($pedido->pedido_produtos_itens as $pedido_produto)
                            @php
                                $total_produto = $pedido_produto->valor;
                                $total_pedido += $total_produto;
                            @endphp
                            <tr>
                              
                                <td class="align-middle">
                                    <img width="100" height="100" src="/storage/{{ $pedido_produto->produto->imagem }}">
                                </td>
                                <td class="align-middle">{{ $pedido_produto->produto->nome }}</td>
                                <td class="align-middle">R$ {{ number_format($pedido_produto->valor, 2, ',', '.') }}</td>
                                <td class="align-middle">R$ {{ number_format($total_produto, 2, ',', '.') }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                
                                <td class="align-middle"><strong>Forma de Pagamento  = </strong>{{ $pedido->formaPagamento}}</td>
                                <td colspan="2"></td>
                                <td><strong>Total do pedido</strong></td>
                                <td>R$ {{ number_format($total_pedido, 2, ',', '.') }}</td>
                            </tr>
                            <tr>
                                
                                
                            </tr>
                        </tfoot>
                    </table>
               
            @empty
                <h5 class="center">
                    
                        Neste momento não há nenhuma compra valida.
                        Você ainda não fez nenhuma compra.
                  
                </h5>
            @endforelse
        </div>
     </div>
   </div>
 </div>
</div>
  
@endsection