@extends('layouts.agenda')
@section('titulo', 'Agenda Admin')

@section('content')
<div class="container" >
      
    
        
    
      
          <div 
            id='calendar'
            data-route-carrega="{{ route('routeCarrega')}}"
          ></div>
      


          <div class="modal fade" id="modalCalendar" tabindex="-1" aria-labelledby="tituloModal" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="tituloModal"></h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <h5 class="bg-dark text-white rounded text-center"> Quem vai nos Receber</h5>
                  <h6>Nome:  <strong id="nomeR" ></strong></h6>
                  
                  <h5 class="bg-dark text-white rounded text-center"> Endereço</h5>
                  <h6>Cidade:  <strong id="cidade"></strong></h6>
                  <h6>Bairro:  <strong id="bairro"></strong></h6>
                  <h6>Rua:  <strong id="rua"></strong></h6>
                  <h6>Numero: <strong id="numero"></strong></h6>
                 
                  <h5 class="bg-dark text-white rounded text-center"> Forma de Pagamento</h5>
                  <h6>Pagamento em:  <strong id="pagamento"></strong></h6>
                  <h5 class="bg-dark text-white rounded text-center">Tamanho piscina</h5>
                  <h6>Tamanho da Piscina:  <strong id="tamanho">tamanho</strong></h6>
                
                                 
                  
                    
                </div>         
                 
                 
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Sair</button>
                  
                </div>
              </div>
            </div>
          </div>
  
      
</div>

@endsection