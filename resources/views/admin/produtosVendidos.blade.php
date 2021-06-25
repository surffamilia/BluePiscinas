@extends('layouts.app-admin')
@section('titulo', 'Produtos Vendidos')

@section('content')
<div class="container">
  <div class=" py-2 bg-light">
      <div class="container">
        <div class="card-header bg-dark text-white rounded text-center">
            <h2>Vendas Realizadas</h2>
        </div>
  <div class="row">
      <div class="col-12">
          <div class="card-header bg-dark text-white rounded text-center">
              <h2>Pronto entrega</h2>
          </div>

          @forelse ($compras as $pedido)
          <div class="row border-bottom">
              <h5 class="col-6 text-left"> Pedido: {{ $pedido->id }} </h5>
              <h5 class="col-6 text-right "> Criado em: {{ $pedido->created_at->format('d/m/Y') }} </h5>
          </div>               
                  <table class="table table-hover">
                      <thead>
                          <tr>
                              <th >Nome Cliente</th>
                              <th >Telefone</th>
                              <th>Produto</th>
                              <th>Endereço</th>
                              <th>Valor Unidade</th>
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
                                {{ $pedido->usuario->nome}}
                              </td>
                              <td class="align-middle">
                                {{ $pedido->usuario->telefone}}
                              </td>
                              <td class="align-middle">
                                {{ $pedido_produto->produto->nome }}
                              </td>
                              <td class="align-middle"><a href="">+</a></td>
                              <td class="align-middle">R$ {{ number_format($pedido_produto->valor, 2, ',', '.') }}</td>
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