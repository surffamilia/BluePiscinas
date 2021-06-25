<?php

namespace App\Http\Controllers\Admin;
use App\Pedido;
use App\User;
use App\Produto;
use App\PedidoProduto;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProdutosControlador extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    public function index()
    {
        $produtos = Produto::all();
        return view('admin.produtos', compact('produtos'));
    }

    public function adicionar()
    {
        return view('admin.novoProdutos');
    }

    public function editar($id)
    {
        $registro = Produto::find($id);
        if( empty($registro->id) ) {
            return redirect()->route('admin.produtos');
        }
        return view('admin.editarProdutos', compact('registro'));
    }

    public function salvar(Request $request)
    {
        $path = $request->file('imagem')->store('imagem','public');

        $prod = new Produto();
        $prod->nome = $request->input('nome');
        $prod->valor = $request->input('valor');
        $prod->descricao = $request->input('descricao');
        $prod->quatidadeEstoque = $request->input('quatidadeEstoque');
        $prod->valorCompra = $request->input('valorCompra');
        $prod->ativo = $request->input('ativo');
        $prod->imagem = $path;
        $prod->save();
               
        return redirect()->route('admin.produtos');
    }

    public function atualizar(Request $req, $id)
    {
        $dados = $req->all();

        Produto::find($id)->update($dados);

        

        return redirect()->route('admin.produtos');
    }

    public function deletar($id)
    {

        Produto::find($id)->delete();

        return redirect()->route('admin.produtos');
    }

    public function visualizar()
    {
        $compras = Pedido::where([
            'status'  => 'PA'            
            ])->orderBy('created_at')->get();

        

        return view('admin.produtosVendidos', compact('compras'));
    }
        
  
   
}
