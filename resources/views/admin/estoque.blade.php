@extends('layouts.app-admin')
@section('titulo', 'Produtos')

@section('content')
<div class="container">
  <div class="card-header bg-dark text-white rounded text-center">
    <h2>Estoque Produtos</h2>
  </div>
  @if(count($produtos)>0)
  <table class="table table-hover">
    <thead>
        <tr>
            <th>Produto</th>
            <th>Quantidade </th>
            <th>Valor de Compra</th>
            <th>Valor de Venda</th>
            <th>Entrada </th>
            <th>Açoes</th>
            
        </tr>
    </thead>
    <tbody>
      @foreach ($produtos as $p)
        <tr>
           <td class="align-middle">
            {{$p->nome}}
          </td>
            <td class="align-middle">
              {{$p->quatidadeEstoque}}
            </td>
            <td class="align-middle">
              {{$p->valorCompra}}
            </td>
            <td class="align-middle">
              {{$p->valor}}
            </td>
            <td class="align-middle">
              {{$p->created_at->format('d/m/Y ')}}
            </td>
            <td><a class="btn btn-danger" href="">Editar</a></td>
            
            
        </tr>
    @endforeach
    </tbody>
    
</table>
@endif



</div>
       
@endsection