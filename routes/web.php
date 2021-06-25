<?php


//Rota Inicial
Route::get('/', function () {
    return view('principalClientes');});


///////////////Rotas Usuario/////////////////////////////

Route::prefix('/')->group(function(){
    //Rota Pagina inicial usuario
    Route::get('/BluePiscinas', 'Usuario\HomeController@index')->name('bluepiscinas');
    Route::get('/BluePiscinas/Historia', 'Usuario\HomeController@historia')->name('historia');
    //Rota Produtos Usuario
    Route::get('/BluePiscinas/produtos', 'Usuario\ProdutosControlador@index')->name('produto.usuario');
    Route::get('/BluePiscinas/produto/{id}', 'Usuario\ProdutosControlador@produto')->name('produto');
    //Rota Carrinho
    Route::get('/BluePiscinas/carrinho', 'Usuario\CarrinhoControlador@index')->name('carrinho.index');
    Route::get('/BluePiscinas/carrinho/adicionar', function() { return redirect()->route('produto.usuario');});
    Route::post('/BluePiscinas/carrinho/adicionar', 'Usuario\CarrinhoControlador@adicionar')->name('carrinho.adicionar');
    Route::delete('/BluePiscinas/carrinho/remover', 'Usuario\CarrinhoControlador@remover')->name('carrinho.remover');
    Route::post('/BluePiscinas/carrinho/concluir', 'Usuario\CarrinhoControlador@concluir')->name('carrinho.concluir');
    Route::get('/BluePiscinas/carrinho/compras', 'Usuario\CarrinhoControlador@compras')->name('carrinho.compras');
    Route::post('/BluePiscinas/carrinho/cancelar', 'Usuario\CarrinhoControlador@cancelar')->name('carrinho.cancelar');
   
        
    //Rota Agendamento limpeza
    Route::get('/BluePiscinas/agendar', 'Usuario\AgendarControlador@index')->name('agendar');
    Route::post('/BluePiscinas/agendar', 'Usuario\AgendarControlador@salvar')->name('agendar.salvar');

});
////////////////////Fim Rota Usuario/////////////////////////////////////
Auth::routes();

///////////////////////////Rotas Administrador
Route::prefix('/admin')->group(function(){
    //Rota Pagina inicial
    Route::get('/', 'Admin\AdminControlador@index')->name('admin.principal');
    //Rota Login
    Route::get('/login', 'Auth\AdminLoginControlador@index')->name('login.admin');    
    Route::post('/login', 'Auth\AdminLoginControlador@login')->name('login.admin.enviar');
    //Rota Controle Admin
    Route::get('/cadastrar', 'Admin\CadastroAdminControlador@index')->name('controle.admin');
    Route::get('/cadastrar/novo', 'Admin\CadastroAdminControlador@criar')->name('cadastrar.admin');
    Route::post('/cadastrar', 'Admin\CadastroAdminControlador@salvar')->name('cadastrar.admin.salvar');
    Route::get('/cadastrar/apagar/{id}', 'Admin\CadastroAdminControlador@apagar')->name('apagar.admin');
    Route::get('/cadastrar/editar/{id}', 'Admin\CadastroAdminControlador@editar')->name('editar.admin');
    Route::post('/cadastrar/{id}', 'Admin\CadastroAdminControlador@atualizar')->name('cadastrar.admin.atualizar');
    //Rotas Controle Usuarios
    Route::get('/controle/usuarios', 'Admin\ControleUsuarioControlador@index')->name('controle.usuarios');
    Route::get('/controle/usuarios/apagar/{id}', 'Admin\ControleUsuarioControlador@deletar');
    Route::get('/controle/usuarios/editar/{id}', 'Admin\ControleUsuarioControlador@editar');
    
    //Rota Produtos
    Route::get('produtos', 'Admin\ProdutosControlador@index')->name('admin.produtos');
    Route::get('produtos/adicionar', 'Admin\ProdutosControlador@adicionar')->name('admin.produtos.adicionar');
    Route::post('produtos/salvar', 'Admin\ProdutosControlador@salvar')->name('admin.produtos.salvar');
    Route::get('produtos/editar/{id}', 'Admin\ProdutosControlador@editar')->name('admin.produtos.editar');
    Route::put('produtos/atualizar/{id}', 'Admin\ProdutosControlador@atualizar')->name('admin.produtos.atualizar');
    Route::get('produtos/deletar/{id}', 'Admin\ProdutosControlador@deletar')->name('admin.produtos.deletar');
    Route::get('produtos/vendidos', 'Admin\ProdutosControlador@visualizar')->name('produtos.vendidos');
    //Rota Estoque
    Route::get('estoque', 'Admin\EstoqueControlador@index')->name('estoque');



    //Rota DashBord

    Route::get('ganhos', 'Admin\GanhosControlador@index')->name('admin.ganhos');
    Route::get('ganhos/produtos', 'Admin\GanhosControlador@produtos')->name('admin.ganhosProdutos');
    
    //Rota Agenda Admin

    Route::get('/agenda', 'Admin\AgendaControlador@index')->name('agenda');
    Route::get('/agenda/load', 'Admin\AgendaLoadControlador@carrega')->name('routeCarrega');




     
});

//////////////////////////Fim Rota Administrador///////////////////////////










