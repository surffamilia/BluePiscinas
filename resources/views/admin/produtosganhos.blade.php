@extends('layouts.app-admin')
@section('titulo', 'Produtos')

@section('content')
<div class="row">
  <div class="col-md-3">
    <nav class ="navbar bg-dark">
      <ul class ="navbar-nav">
      <li class ="nav-item">
      <a  href="#"> Ganhos com Produtos </a>
      </li>
      <li class ="nav-item">
      <a href="#"> Ganhos com limpeza </a>
      </li>
      <li class ="nav-item">
      <a  href="#"> Ganhos Totais </a>
      </li>
      <li class ="nav-item">
      <a  href="#"> Gerar Planilhas </a>
      </li>
      </ul>
      </nav>
  </div>
  <div class="col-md-9">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
          <div class="card-header bg-dark text-white rounded text-center">
            <h2>Produtos Vendidos</h2>
          </div>

          <div class="row">
            <table class="table table-hover">
              <thead>
                  <tr>
                      <th>Nome Cliente</th>
                      <th>Valor </th>
                      <th>Produto</th>
                      <th>Total </th>
                      <th>Dia da Venda</th>
                  </tr>
              </thead>
              <tbody>
                  <tr>
                     <td class="align-middle">
                          
                    </td>
                      <td class="align-middle"></td>
                      <td class="align-middle"></td>
                      <td class="align-middle"></td>
                      <td class="align-middle"></td>
                  </tr>
              
              </tbody>
              <tfoot>
                  <tr>
                      
                      <td class="align-middle"></td>
                      <td></td>
                      <td><strong></strong></td>
                      <td></td>
                      <td class="align-middle"></td>

                  </tr>
                  <tr>
                      
                      
                  </tr>
              </tfoot>
          </table>

          </div>






        </div>
        </div>
      </div>
  </div>
</div>
@endsection