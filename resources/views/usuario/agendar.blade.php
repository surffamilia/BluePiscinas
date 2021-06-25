@section('titulo', 'Agendar Limpeza')
@extends('layouts.app')

@section('content')
<div class="container">
  <div class="card-header bg-dark text-white rounded text-center">
    <h2>Limpeza Piscinas</h2>
  </div>
  <div class="row">
    <div class="col-md-4">
      <div class="card" style="width: 18rem;">
        <img src="" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Piscinas Pequenas</h5>
          <p class="card-text"><h1 class="card-title pricing-card-title">R$100,<small class="text-muted">00</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>5 à 10 mil Litros</li>
              <li>ate 10 Metros</li>
              <li>Sem os produtos</li>
              <li>1 dias no mes</li>
            </ul></p>
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#pequena">
            Contratar Serviço
          </button>
        </div>
      </div>

    </div>
    <div class="col-md-4">
      <div class="card" style="width: 18rem;">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Piscinas Medias</h5>
          <p class="card-text"><h1 class="card-title pricing-card-title">R$200,<small class="text-muted">00</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>11 à 30 mil litros</li>
              <li>ate 25 metros</li>
              <li>Sem os produtos</li>
              <li>1 dias no mes</li>
            </ul></p>
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#medio">
            Contratar Serviço
          </button>
        </div>
      </div>

    </div>
    <div class="col-md-4">
      <div class="card" style="width: 18rem;">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Piscinas Grandes </h5>
          <p class="card-text"><h1 class="card-title pricing-card-title">R$300,<small class="text-muted">00</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>30 à 70 mil Litros</li>
              <li>ate 50 metros</li>
              <li>Sem os produtos</li>
              <li>1 dias no mes</li>
            </ul></p>
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#grande">
            Contratar Serviço
          </button>
        </div>
      </div>

    </div>

  </div>


  <!-- Button trigger modal -->


<!-- Modal Pequena -->
<div class="modal fade" id="pequena" tabindex="-1" aria-labelledby="pequenaLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="pequenaLabel">Piscina Pequena</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST" action="{{ route('agendar.salvar')}}">
          @csrf
          <div class="form-group row">
            <label class="col-md-2 col-form-label text-md-right" for="title">Quem vai nos Receber</label>
            <div class="col-md-10">
              <input type="text" class="form-control" id="title" name="title" placeholder="Digite o Nome da Pessoa que vai nos Receber">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-md-2 col-form-label text-md-right" for="start">Dia e Hora</label>
            <div class="col-md-10">
              <input type="dateTime-local"   class="form-control" id="start" name="start" >
            </div>
          </div>
  
          <div class="form-group row">
            <label class="col-md-2 col-form-label text-md-right" for="cidade">Cidade</label>
            <div class="col-md-5">
              <input type="text" class="form-control" id="cidade" name="cidade" placeholder="Digite a Cidade">
            </div>
            <label class="col-md-1 col-form-label text-md-right" for="bairro">Bairro</label>
            <div class="col-md-4">
              <input type="text" class="form-control" id="bairro" name="bairro" placeholder="Digite o Bairro">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-md-2 col-form-label text-md-right" for="rua">Rua</label>
            <div class="col-md-5">
              <input type="text" class="form-control" id="rua" name="rua" placeholder="Digite sua Rua">
            </div>
            <label class="col-md-1 col-form-label text-md-right" for="numero">Número</label>
            <div class="col-md-3">
              <input type="text" class="form-control" id="numero" name="numero" placeholder="Digite o numero">
            </div>
            
          </div>  
          <input type="hidden" name="tamanho" value="Pequena">

              
  
              <h2 class="bg-dark text-white rounded text-center"> Forma de Pagamento</h2>
  
              <div class="form-group row">
                <div class="col-md-10 offset-md-2">
                  <select id="pagamento" name="pagamento" class="form-control ">
                    <option selected disabled>Forma de Pagamento</option>
                    <option value="Dinheiro">Dinheiro</option>
                    <option value="Cartao">Cartão</option>
                   
                  </select>
                </div>
              </div>
                 
          <div class="form-group row">
            <button type="submit" class=" col-md-6 offset-md-2 btn btn-primary my-2">Enviar</button>
            <button type="reset" class="col-md-3 ml-3 btn btn-secondary my-2">Cancelar</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<!--Modal Medio-->

<div class="modal fade" id="medio" tabindex="-1" aria-labelledby="medioLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="medioLabel">Piscina Pequena</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST" action="{{ route('agendar.salvar')}}">
          @csrf
          <div class="form-group row">
            <label class="col-md-2 col-form-label text-md-right" for="title">Quem vai nos Receber</label>
            <div class="col-md-10">
              <input type="text" class="form-control" id="title" name="title" placeholder="Digite o Nome da Pessoa que vai nos Receber">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-md-2 col-form-label text-md-right" for="start">Dia e Hora</label>
            <div class="col-md-10">
              <input type="dateTime-local"   class="form-control" id="start" name="start" >
            </div>
          </div>
  
          <div class="form-group row">
            <label class="col-md-2 col-form-label text-md-right" for="cidade">Cidade</label>
            <div class="col-md-5">
              <input type="text" class="form-control" id="cidade" name="cidade" placeholder="Digite a Cidade">
            </div>
            <label class="col-md-1 col-form-label text-md-right" for="bairro">Bairro</label>
            <div class="col-md-4">
              <input type="text" class="form-control" id="bairro" name="bairro" placeholder="Digite o Bairro">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-md-2 col-form-label text-md-right" for="rua">Rua</label>
            <div class="col-md-5">
              <input type="text" class="form-control" id="rua" name="rua" placeholder="Digite sua Rua">
            </div>
            <label class="col-md-1 col-form-label text-md-right" for="numero">Número</label>
            <div class="col-md-3">
              <input type="text" class="form-control" id="numero" name="numero" placeholder="Digite o numero">
            </div>
            
          </div>  
          <input type="hidden" name="tamanho" value="Media">

              
  
              <h2 class="bg-dark text-white rounded text-center"> Forma de Pagamento</h2>
  
              <div class="form-group row">
                <div class="col-md-10 offset-md-2">
                  <select id="pagamento" name="pagamento" class="form-control ">
                    <option selected disabled>Forma de Pagamento</option>
                    <option value="Dinheiro">Dinheiro</option>
                    <option value="Cartao">Cartão</option>
                   
                  </select>
                </div>
              </div>
                 
          <div class="form-group row">
            <button type="submit" class=" col-md-6 offset-md-2 btn btn-primary my-2">Enviar</button>
            <button type="reset" class="col-md-3 ml-3 btn btn-secondary my-2">Cancelar</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<!--Modal Gradne-->

<div class="modal fade" id="grande" tabindex="-1" aria-labelledby="grandeLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="grandeLabel">Piscina Grande</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST" action="{{ route('agendar.salvar')}}">
          @csrf
          <div class="form-group row">
            <label class="col-md-2 col-form-label text-md-right" for="title">Quem vai nos Receber</label>
            <div class="col-md-10">
              <input type="text" class="form-control" id="title" name="title" placeholder="Digite o Nome da Pessoa que vai nos Receber">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-md-2 col-form-label text-md-right" for="start">Dia e Hora</label>
            <div class="col-md-10">
              <input type="dateTime-local"   class="form-control" id="start" name="start" >
            </div>
          </div>
  
          <div class="form-group row">
            <label class="col-md-2 col-form-label text-md-right" for="cidade">Cidade</label>
            <div class="col-md-5">
              <input type="text" class="form-control" id="cidade" name="cidade" placeholder="Digite a Cidade">
            </div>
            <label class="col-md-1 col-form-label text-md-right" for="bairro">Bairro</label>
            <div class="col-md-4">
              <input type="text" class="form-control" id="bairro" name="bairro" placeholder="Digite o Bairro">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-md-2 col-form-label text-md-right" for="rua">Rua</label>
            <div class="col-md-5">
              <input type="text" class="form-control" id="rua" name="rua" placeholder="Digite sua Rua">
            </div>
            <label class="col-md-1 col-form-label text-md-right" for="numero">Número</label>
            <div class="col-md-3">
              <input type="text" class="form-control" id="numero" name="numero" placeholder="Digite o numero">
            </div>
            
          </div>  
          <input type="hidden" name="tamanho" value="Grande">

              
  
              <h2 class="bg-dark text-white rounded text-center"> Forma de Pagamento</h2>
  
              <div class="form-group row">
                <div class="col-md-10 offset-md-2">
                  <select id="pagamento" name="pagamento" class="form-control ">
                    <option selected disabled>Forma de Pagamento</option>
                    <option value="Dinheiro">Dinheiro</option>
                    <option value="Cartao">Cartão</option>
                   
                  </select>
                </div>
              </div>
                 
          <div class="form-group row">
            <button type="submit" class=" col-md-6 offset-md-2 btn btn-primary my-2">Enviar</button>
            <button type="reset" class="col-md-3 ml-3 btn btn-secondary my-2">Cancelar</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
 
</div>
@endsection