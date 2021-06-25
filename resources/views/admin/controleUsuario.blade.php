@extends('layouts.app-admin')
@section('titulo', 'Controle Usuario')

@section('content')
<div class="container">
   <div class="card border">
      <div class="card-header bg-dark text-white rounded text-center">
         <h2>Controle Usuarios</h2>
       </div>
      <div class="card-body">
         @if(count($clientes)>0)
         <table class="table table-ordered table-hover">
            <thead>
               <tr>
                 
                  <th>Nome</th>
                  <th>Email</th>
                  <th>Telefone</th>
                  <th>Ações</th>
                  <th></th>
               </tr>
            </thead>
            <tbody>
               @foreach ($clientes as $c)
                   <tr>
                      
                      <td>{{$c->nome}}</td>
                      <td>{{$c->email}}</td>
                      <td>{{$c->telefone}}</td>
                      <td colspan="2">
                         <a class="btn btn-outline-primary" href="/admin/controle/usuarios/editar/{{$c->id}}">Enviar Mensagem</a>
                         <a class="btn btn-outline-success" href="/admin/controle/usuarios/apagar/{{$c->id}}">Compras Realizadas</a>
                      </td>
                   </tr>
               @endforeach
            </tbody>
         </table>
         @endif
      </div>
      <div class="card-footer">
         
      </div>

</div>
@endsection