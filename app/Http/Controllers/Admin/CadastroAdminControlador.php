<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Admin;

class CadastroAdminControlador extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    public function index()
    {
        $admin = Admin::all();
        return view('admin.controleAdmin', compact('admin'));
    }
    public function criar()
    {
        return view('admin.cadastroAdmin');
    }

    public function salvar(Request $request)
    {
       $admin = new Admin();
       $admin->nome = $request->input('nome');
       $admin->funcao = $request->input('funcao');
       $admin->email = $request->input('email');
       $admin->password = Hash::make($request->password);
       $admin->save();

       return redirect(route('controle.admin'));
    }

    public function apagar($id)
    {
        $admin = Admin::find($id);
        if(isset($admin)){
            $admin->delete();
        }
        return redirect(route('controle.admin'));
    }

    public function editar($id)
    {
        $admin = Admin::find($id);
        if(isset($admin)){
            return view('admin.editarAdmin',compact('admin'));
        }
    return redirect(route('controle.admin'));
    }

    public function atualizar(Request $request, $id)
    {
        $admin = Admin::find($id);
        if(isset($admin)){
            $admin->nome = $request->input('nome');
            $admin->funcao = $request->input('funcao');
            $admin->email = $request->input('email');
            $admin->password = Hash::make($request->password);
            $admin->save();
        }
    return redirect(route('controle.admin'));
    }

    
}