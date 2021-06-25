<?php

namespace App\Http\Controllers\Admin;
use App\Produto;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EstoqueControlador extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        $produtos = Produto::all();
        return view('admin.estoque', compact('produtos'));
    }
}
