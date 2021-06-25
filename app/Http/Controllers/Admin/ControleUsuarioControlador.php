<?php

namespace App\Http\Controllers\Admin;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ControleUsuarioControlador extends Controller
{   
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    
    public function index()
    {   
        $clientes = User::all();
        return view('admin.controleUsuario', compact('clientes')); 
    }

    public function deletar($id){
       $c = User::find($id);
       if(isset($c)){
           $c->delete();
       }
       return redirect('/admin/controle/usuarios');
    }

    public function editar($id){
        $c = User::find($id);
        if(isset($c)){
            return view('editarUsuario',compact('c'));
        }
        return redirect('/admin/controle/usuarios');
     }
    
   
}
