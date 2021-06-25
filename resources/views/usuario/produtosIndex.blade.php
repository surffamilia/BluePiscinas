@section('titulo', 'Produtos')
@extends('layouts.app')

@section('content')
<div class="container">
	<div class=" py-2 bg-light">
	  <div class="container">
		<div class="card-header bg-dark text-white rounded text-center">
			<h2>Bem vindo a nossa loja Virtual {{ Auth::user()->nome }}</h2>
		</div>
	<div class="row">
	@foreach ($registros as $registro)
		<div class="col-md-3  py-2 flex-row" >    
			<div class="card border-primary " >
		  		<div class="card-header row justify-content-center" >                
					<img src="/storage/{{ $registro->imagem }}"  style="width: 100px; height: 100px;" alt="...">
		  		</div>
				<div class="card-body  ">
					<h5 class="card-title  ">{{ $registro->nome }}</h5>
					<p class="card-text" >R$ {{ number_format($registro->valor, 2, ',', '.') }}</p>
				</div>
				<div class="card-text text-center">
					<a class="btn btn-outline-primary mb-2 " href="{{ route('produto', $registro->id) }}">Veja mais informações</a>
				</div>
			</div>
		</div>
	@endforeach
	</div>
</div>
	</div>
</div>
@endsection