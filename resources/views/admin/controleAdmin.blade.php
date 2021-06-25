@extends('layouts.app-admin')
@section('titulo', 'Controle Admin')

@section('content')
<div class="container">
  <div class="card border ">
   <div class="card-header bg-dark text-white rounded text-center">
      <h2>Controle de Administradores</h2>
    </div>
    <div class="card-body">
      @if(count($admin)>0)
       <div class="table-responsive">
       <table class="table  table-ordered table-hover">
          <thead class="thead">
             <tr>
               
                <th>Nome</th>
                <th>Função</th>
                <th>Email</th>
                <th>Ações</th>
             </tr>
          </thead>
          <tbody>
             @foreach ($admin as $c)
                 <tr>
                    
                    <td>{{$c->nome}}</td>
                    <td>{{$c->funcao}}</td>
                    <td>{{$c->email}}</td>
                    
                    <td>
                       <a class="btn btn-outline-primary mb-1" href="{{ route('editar.admin',$c->id )}}">Editar</a>
                       <a class="btn btn-outline-danger mb-1" href=" {{ route('apagar.admin',$c->id )}}">Apagar</a>
                    </td>
                 </tr>
             @endforeach
          </tbody>
       </table>
      </div>
       @endif
    </div>
    <div class="card-footer">
      <a class="btn btn-outline-primary" href="{{route('cadastrar.admin')}}">Novo Administrador</a>
    </div>
    

</div>


</div>
@endsection